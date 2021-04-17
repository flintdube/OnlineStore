--test data
INSERT INTO user_type (description) 
       VALUES ('admin'),
              ('user');

INSERT INTO login_status (description)
       VALUES ('Successful'),
              ('Failed');

INSERT INTO login (user_type_id, username,firstname, lastname, mobile, email,password)
       VALUES
		       (1,'Stacey','Stacey','Nunes','0827849542','statcy@gmail.com','s123'),
				   (2,'Tom','Tom','Ford','0621647845','tom@hotmail.com','t123'),
				   (3,'John','John','Dore','0827418541','john@onlinestore.co.za','j123');

INSERT INTO shipping_details (login_user_id,street_no, street_name,suburb,city,province,area_code)
    VALUES
          (1, '32','Diagonal Street','Newtown','Johannesburg','Gauteng','2000'),
          (2, '770','Britsweg Street','Tileba','Pretoria','Gauteng','0182');

select * from user_type;
select * from login_status;
select * from login;
select * from shipping_details;