DROP DATABASE IF EXISTS heroku_3712059cbd79f9e;
CREATE DATABASE heroku_3712059cbd79f9e;



use heroku_3712059cbd79f9e;

CREATE TABLE Houses(

	ID int NOT NULL DEFAULT 0 ,
	StreetAddress nvarchar (50) NULL,
	City nvarchar (30) NULL ,
	State nvarchar (2) NULL ,
    Photo nvarchar (100) NULL,
	MarketID int NOT NULL DEFAULT 0);


#CREATE TABLE Residential(
#	ResidentialID int NOT NULL DEFAULT 0 ,
#	ResStreetAddress nvarchar (50) NULL,
#	ResCity nvarchar (30) NULL ,
#	ResState nvarchar (2) NULL ,
#   Photo nvarchar (100) NULL,
#	MarketID int NOT NULL DEFAULT 0);


#CREATE TABLE Commercial(
#	CommercialID int NOT NULL DEFAULT 0 ,
#	CommStreetAddress nvarchar (50) NULL,
#	CommCity nvarchar (30) NULL ,
#	CommState nvarchar (2) NULL ,
#	Photo nvarchar (100) NULL,
#	MarketID int NOT NULL DEFAULT 0);



#CREATE TABLE Industrial(
#	IndustrialID int NOT NULL DEFAULT 0 ,
#	IndStreetAddress nvarchar (50) NULL,
#	IndCity nvarchar (30) NULL ,
#	IndState nvarchar (2) NULL ,
#	Rent int NOT NULL DEFAULT 0,
#   Photo nvarchar (100) NULL,
#	MarketID int NOT NULL DEFAULT 0);

CREATE TABLE Market(
	MarketID int NOT NULL DEFAULT 0,
	OnMarket bit NOT NULL DEFAULT 0,
	Rent int NOT NULL DEFAULT 0,
	Email VARCHAR (256) NOT NULL);

CREATE TABLE User(
	Email VARCHAR (256) NOT NULL,
	Password VARCHAR(64) NOT NULL,
	Access bit NOT NULL DEFAULT 0);
	
    ALTER TABLE Residential ADD
 
	CONSTRAINT Houses_PK PRIMARY KEY
   
	(

		ID 
	) ;

    
#ALTER TABLE Residential ADD
 
#	CONSTRAINT Residential_PK PRIMARY KEY
   
#	(

#		ResidentialID 
#	) ;

#ALTER TABLE Commercial ADD
 
#	CONSTRAINT Commercial_PK PRIMARY KEY
   
#	(

#		CommercialID 

#	) ;



#ALTER TABLE Industrial ADD
 
#	CONSTRAINT Industrial_PK PRIMARY KEY
   
#	(

#		IndustrialID 
#	) ;






ALTER TABLE Market ADD 
	
	CONSTRAINT Market_PK PRIMARY KEY
   
	(

		MarketID 

	) ;





ALTER TABLE User ADD
 
	CONSTRAINT User_PK PRIMARY KEY
   
	(

		Email

	) ;

ALTER TABLE Houses ADD
 
	CONSTRAINT Houses_FK00 FOREIGN KEY
 
	(

		MarketID 

	) REFERENCES Market(

		MarketID 

	);

#ALTER TABLE Residential ADD
 
#	CONSTRAINT Residential_FK00 FOREIGN KEY
 
#	(

#		MarketID 

#	) REFERENCES Market(

#		MarketID 

#	);



#ALTER TABLE Commercial ADD
 
#	CONSTRAINT Commercial_FK00 FOREIGN KEY
 
#	(

#		MarketID 

#	) REFERENCES Market(

#		MarketID 

#	);

#ALTER TABLE Industrial ADD
 
#	CONSTRAINT Industrial_FK00 FOREIGN KEY
 
#	(

#		MarketID 

#	) REFERENCES Market(

#		MarketID 

#	);

ALTER TABLE Market ADD
 
	CONSTRAINT Market_FK00 FOREIGN KEY
 
	(

		Email

	) REFERENCES User (

		Email

	);