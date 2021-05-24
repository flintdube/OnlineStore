/* 
*test data
*/
INSERT INTO user_type (description) 
       VALUES ('admin'),
              ('user');

INSERT INTO login_status (description)
       VALUES ('Successful'),
              ('Failed');

INSERT INTO login (user_type_id, username,firstname, lastname, mobile, email,password)
       VALUES
		(1,'Stacey','Stacey','Nunes','0827849542','stacey@gmail.com','s123'),
		(2,'Tom','Tom','Ford','0621647845','tom@hotmail.com','t123'),
		(1,'John','John','Dore','0827418541','john@onlinestore.co.za','j123');

INSERT INTO shipping_details (login_user_id,street_no, street_name,suburb,city,province,area_code)
       VALUES
              (1, '32','Diagonal Street','Newtown','Johannesburg','Gauteng','2000'),
              (2, '770','Britsweg Street','Tileba','Pretoria','Gauteng','0182');


INSERT INTO category (description) 
       VALUES 
              ('Featured_Items'), 
              ('Scrubsets & T-Shirts'), 
              ('Accessories'); 


  INSERT INTO products (category_id, name,image,price) 
       VALUES
              (2, 'Ladies Scrubset', './images/scrubset1.jpg', 450.00),
              (2, 'Men Scrubset', './images/scrubset2.jpg', 450.00),
              (2, 'Ladies Scrubset', './images/scrubset3.jpg', 450.00),
              (2, 'Ladies Scrubset', './images/scrubset4.jpg', 450.00),
              (1, 'small-tees', './images/vest-01.jpg', 100.00),
              (1, 'small-tees', './images/vest-01.jpg', 100.00),
              (1, 'small-tees', './images/vest-01.jpg', 100.00),
              (3, 'Esy_Earings', './images/accessories2.jpg', 50.00);
             


select * from user_type;
select * from login_status;
select * from login;
select * from shipping_details;
select * from category;
select * from products;
