DROP DATABASE IF EXISTS OnlineStore;
CREATE DATABASE OnlineStore;
USE OnlineStore;

CREATE TABLE user_type (
  id INT AUTO_INCREMENT PRIMARY KEY,
  description VARCHAR(255) NOT NULL
);

CREATE TABLE login_status (
  id INT AUTO_INCREMENT PRIMARY KEY,
  description VARCHAR(50) NOT NULL
);

CREATE TABLE login (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_type_id INT,
  username VARCHAR(50) UNIQUE NOT NULL,
  firstname VARCHAR(50) NOT NULL,
  lastname VARCHAR(50) NOT NULL,
  mobile VARCHAR(50) UNIQUE NOT NULL,
  email VARCHAR(50) UNIQUE NOT NULL,
  password VARCHAR(50) NOT NULL,
  creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  last_update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  start_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  end_date TIMESTAMP,
  INDEX user_type_index (user_type_id),
  FOREIGN KEY (user_type_id)
    REFERENCES user_type(id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);

CREATE TRIGGER end_date_trigger BEFORE INSERT ON login
FOR EACH ROW SET
NEW.end_date = TIMESTAMPADD(MONTH,1,current_timestamp);

CREATE TABLE user_login_history (
  id INT AUTO_INCREMENT PRIMARY KEY,
  login_id INT,
  login_status_id INT,
  login_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (login_id)
    REFERENCES login(id)
    ON UPDATE RESTRICT
    ON DELETE RESTRICT,
  FOREIGN KEY (login_status_id)
    REFERENCES login_status(id)
    ON UPDATE RESTRICT
    ON DELETE RESTRICT
);

CREATE TABLE shipping_details (
  id INT AUTO_INCREMENT PRIMARY KEY,
  login_user_id INT,
  street_no VARCHAR(50) NOT NULL,
  street_name VARCHAR(50) NOT NULL,
  suburb VARCHAR(50) NOT NULL,
  city VARCHAR(50) NOT NULL,
  province VARCHAR(50) NOT NULL,
  area_code VARCHAR(50) NOT NULL,
  creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  last_update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (login_user_id)
    REFERENCES login(id)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE category (
  id INT AUTO_INCREMENT PRIMARY KEY,
  description VARCHAR(255)
);

CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  category_id INT,
  title VARCHAR(255),
  description TEXT,
  image VARCHAR(255),
  price DECIMAL(10,2),
  quantity INT,
  INDEX category_index (category_id),
  FOREIGN KEY (category_id)
    REFERENCES category(id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);

-- CREATE TABLE orders (
--   id INT AUTO_INCREMENT PRIMARY KEY,
--   product_id INT,
--   user_id INT,
--   address_id INT,
--   quantity INT,
--   price DECIMAL(10,2),
--   INDEX product_index (product_id),
--   INDEX user_index (user_id),
--   INDEX address_index (address_id),
--   FOREIGN KEY (product_id)
--     REFERENCES products(id)
--     ON UPDATE CASCADE
--     ON DELETE CASCADE
--     FOREIGN KEY (user_id)
--     REFERENCES login(id)
--     ON UPDATE CASCADE
--     ON DELETE CASCADE
--     FOREIGN KEY (address_id)
--     REFERENCES shipping_details(id)
--     ON UPDATE CASCADE
--     ON DELETE CASCADE
-- );

DESCRIBE login;
DESCRIBE login_status;
DESCRIBE shipping_details;
DESCRIBE user_login_history;
DESCRIBE user_type;
DESCRIBE category;
DESCRIBE products;
-- DESCRIBE orders;
