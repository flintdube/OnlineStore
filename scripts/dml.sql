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
              ('Scrub Set'),
              ('Scrub Top'),
              ('Tees'),
              ('Mask'),
              ('Jogger Bottoms'),
              ('Accessory'),
              ('Bag'),
              ('Vests');

INSERT INTO products (category_id, title, description, image, price, quantity)
       VALUES  
              (1,'Scrub Set (Maroon)','Made from high quality polyester-spandex, our scrubs are soft and smooth on the skin for all day comfort. Slim fit unisex cut with a light stretch. Available in jogger bottoms.','product-1.jpg','850.99',2),
              (2,'Scrub Top (White)','Made from high quality polyester-spandex, our scrubs are soft and smooth on the skin for all day comfort. Slim fit unisex cut with a light stretch. Available in different sizes.','product-2.jpg','900',5),
              (3,'Unisex Tees','Made from 100% cotton, our comfortable Tshirts make a statement about your professional identity. Red ‘Eye Love’ only unisex cuts.','product-9.jpg','199.99',8),
              (4,'Face Mask','Made from soft microfibre fabric these are triple-layered for your protection.','mask_1.jpg','49.99',20),
              (5,'Jogger Bottoms','Made from high quality polyester-spandex, our scrubs are soft and smooth on the skin for all day comfort. Slim fit unisex cut with a light stretch. Available in jogger bottoms.','product-3.jpg','399',15),
              (6,'Accessory','Made from soft microfibre fabric these are triple-layered for your protection.','accessory1.jpg','179.99',23),
              (7,'Hand Bag','Made from high quality polyester-spandex, our scrubs are soft and smooth on the skin for all day comfort. Slim fit unisex cut with a light stretch. Available in jogger bottoms.','ishihara-tote.png','99',50),
              (8,'Vests','Made from high quality polyester-spandex, our scrubs are soft and smooth on the skin for all day comfort. Slim fit unisex cut with a light stretch. Available in jogger bottoms.','vest-03.jpg','120',200),
              (4,'Face Mask','COVID-19 mask.','download.jpg','90',400);

select * from user_type;
select * from login_status;
select * from login;
select * from shipping_details;
select * from category;
select * from products;
select * from orders;