CREATE TABLE CUSTOMER(

	id int not null auto_increment primary key,
	firstname varchar(25),
	lastname varchar(255),
	birthdate Date,
	salary integer,
	civicnumber varchar(6),
	street varchar(255),
	city varchar(255),
	state varchar(255),
	postcode varchar(12)
	

)