CREATE TABLE login (
  loginid SERIAL PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL,
  user_type VARCHAR(50) NOT NULL,
  login_status VARCHAR(50) NOT NULL
);

CREATE TABLE booking (
  book_id SERIAL PRIMARY KEY,
  menu_id INTEGER NOT NULL,
  b_qut VARCHAR(100) NOT NULL,
  cust_id INTEGER NOT NULL,
  sum VARCHAR(100) NOT NULL,
  p_status VARCHAR(100) NOT NULL
);

CREATE TABLE feedback (
  feed_id SERIAL PRIMARY KEY,
  cust_id INTEGER NOT NULL,
  book_id INTEGER NOT NULL,
  rate VARCHAR(100) NOT NULL,
  cmt VARCHAR(100) NOT NULL,
  FOREIGN KEY (book_id) REFERENCES booking(book_id),
  FOREIGN KEY (cust_id) REFERENCES login(loginid)
);

CREATE TABLE menu (
  menu_id SERIAL PRIMARY KEY,
  dish_name VARCHAR(100) NOT NULL,
  price VARCHAR(100) NOT NULL,
  menu_date VARCHAR(100) NOT NULL,
  details VARCHAR(100) NOT NULL,
  img VARCHAR(100) NOT NULL,
  qut VARCHAR(100) NOT NULL,
  m_type VARCHAR(10) NOT NULL
);

CREATE TABLE pre_book (
  book_id SERIAL PRIMARY KEY,
  dish_id INTEGER NOT NULL,
  pr_date VARCHAR(100) NOT NULL,
  details VARCHAR(100) NOT NULL,
  p_type VARCHAR(100) NOT NULL,
  quantity VARCHAR(100) NOT NULL,
  login_id INTEGER NOT NULL,
  book_status VARCHAR(100) NOT NULL,
  FOREIGN KEY (login_id) REFERENCES login(loginid)
);

CREATE TABLE staff (
  regid SERIAL PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  phone VARCHAR(50) NOT NULL,
  department VARCHAR(50) NOT NULL,
  post VARCHAR(50) NOT NULL,
  proof VARCHAR(250) NOT NULL,
  loginid INTEGER NOT NULL
);

CREATE TABLE student (
  regid SERIAL PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  phone VARCHAR(50) NOT NULL,
  department VARCHAR(50) NOT NULL,
  year_of_join INTEGER NOT NULL,
  admission_no VARCHAR(50) NOT NULL,
  loginid INTEGER NOT NULL
);

INSERT INTO login (loginid, username, password, user_type, login_status) VALUES
(1, 'admin', 'admin', 'Admin', '1'),
(2, 'abhi', 'abhi', 'Student', 'approved'),
(3, 'air', 'air', 'tutor', 'approved'),
(4, 'bmw', 'bmw', 'tutor', 'approved'),
(5, 'ram', 'ram', 'Student', 'approved'),
(6, 'staff', 'staff', 'tutor', 'approved'),
(7, 'rahull', 'rahull', 'Student', 'approved'),
(8, 'star', 'star', 'tutor', 'cancel'),
(9, 'star1', 'star1', 'tutor', 'approved');

INSERT INTO booking (book_id, menu_id, b_qut, cust_id, sum, p_status) VALUES
(1, 1, '17', 2, '170', 'booked'),
(3, 3, '14', 2, '280', 'booked'),
(4, 1, '3', 2, '30', 'added to cart'),
(5, 4, '5', 7, '75', 'booked');

INSERT INTO feedback (feed_id, cust_id, book_id, rate, cmt) VALUES
(2, 2, 1, '4 ****', 'bi'),
(3, 7, 5, '4 ****', 'fs'),
(4, 2, 3, '5 *****', 'nice');

INSERT INTO menu (menu_id, dish_name, price, menu_date, details, img, qut, m_type) VALUES
(3, 'dosa', '20', '2024-09-07', 'hu', 'about-thumb-03.jpg', '0', 'breakfast '),
(4, 'apple', '15', '2024-09-07', 'sdjkl;', 'about-thumb-03.jpg', '100', 'breakfast '),
(5, 'mango', '10', '', 'mango flavored', 'tab-item-05.png', '50', 'other'),
(6, 'mango', '10', '', 'ghjkl', 'about-thumb-02.jpg', '60', 'other'),
(7, 'mango', '10', '', 'jfyufffyyu', 'menu-item-05.jpg', '60', 'other'),
(8, 'apple', '12', '2024-09-07', 'ni', 'tab-item-02.png', '15', 'lunch '),
(9, 'mandhi', '200', '2024-09-07', 'nicefgdtyuyihfgffhhffuyueysdgjyufh', 'tab-item-01.png', '100', 'dinner');

INSERT INTO pre_book (book_id, dish_id, pr_date, details, p_type, quantity, login_id, book_status) VALUES
(10, 3, '2024-09-08', '', 'breakfast ', '14', 3, 'add'),
(11, 3, '2024-09-09', '', 'breakfast ', '5', 4, 'add'),
(12, 4, '2024-09-10', '', 'lunch ', '5', 6, 'add');

INSERT INTO staff (regid, name, email, phone, department, post, proof, loginid) VALUES
(1, 'air', 'air@gmail.com', '09876543211', 'bca', 'HOD', 'chefs-03.jpg', 3),
(2, 'bmw', 'bmw@gmail.com', '09876543211', 'bca', 'hod', 'chefs-02.jpg', 4),
(3, 'staff', 'staff@gmail.com', '9876543211', 'bca', 'tutor', 'chefs-03.jpg', 6),
(4, 'staff', 'staff@gmail.com', '9876543211', 'bca', 'tutor', 'gal_6.jpg', 8),
(5, 'staff', 'staff@gmail.com', '9876543211', 'bca', 'tutor', 'chefs-03.jpg', 9);

INSERT INTO student (regid, name, email, phone, department, year_of_join, admission_no, loginid) VALUES
(1, 'abhi', 'abhi@gmail.com', '09876543211', 'bca', 2, '1234', 2),
(2, 'ram', 'ram@gmail.com', '09876543211', 'bca', 1, '1234', 5),
(3, 'abhi', 'abhi@gmail.com', '09876543211', 'bca', 1, '1234', 7);

SELECT setval('login_loginid_seq', 10, false);
SELECT setval('booking_book_id_seq', 6, false);
SELECT setval('feedback_feed_id_seq', 5, false);
SELECT setval('menu_menu_id_seq', 10, false);
SELECT setval('pre_book_book_id_seq', 13, false);
SELECT setval('staff_regid_seq', 6, false);
SELECT setval('student_regid_seq', 4, false);
