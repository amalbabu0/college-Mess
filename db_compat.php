<?php
// Drop-in replacements for the mysqli_* functions this app used, backed by
// PDO's Postgres driver (Neon is Postgres-only; the app originally used
// mysqli/MySQL). Named db_* rather than mysqli_* so they don't collide with
// the real mysqli extension if it happens to be loaded.

class DbResult
{
    public array $rows;
    public int $index = 0;

    public function __construct(array $rows)
    {
        $this->rows = $rows;
    }
}

function db_query($con, $sql)
{
    $stmt = @$con->query($sql);
    if ($stmt === false) {
        return false;
    }
    if (stripos(ltrim($sql), 'select') === 0) {
        return new DbResult($stmt->fetchAll(PDO::FETCH_ASSOC));
    }
    return true;
}

function db_fetch_array($result)
{
    if (!($result instanceof DbResult)) {
        return null;
    }
    if ($result->index >= count($result->rows)) {
        return null;
    }
    return $result->rows[$result->index++];
}

function db_num_rows($result)
{
    if (!($result instanceof DbResult)) {
        return 0;
    }
    return count($result->rows);
}

function db_insert_id($con)
{
    return $con->lastInsertId();
}
