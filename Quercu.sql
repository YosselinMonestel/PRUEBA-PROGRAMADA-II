CREATE DATABASE Quercu;
USE Quercu;

CREATE TABLE Property(
Id INT PRIMARY KEY AUTO_INCREMENT,
PropertyTypeId INTEGER,
OwnerId INTEGER,
Number VARCHAR(255) NOT NULL,
Address VARCHAR(255) NOT NULL,
Area DECIMAL NOT NULL,
ConstructionArea DECIMAL NULL
);

select * from Property;
CREATE TABLE PropertyType(
Id INT PRIMARY KEY AUTO_INCREMENT,
Description VARCHAR(255) NOT NULL
);

CREATE TABLE Owner(
Id INT PRIMARY KEY AUTO_INCREMENT,
Name VARCHAR(255) NOT NULL,
Telephone VARCHAR(255) NOT NULL,
Email VARCHAR(255) NULL,
IdentificationNumber VARCHAR(255) NOT NULL,
Address VARCHAR(255) NULL
);
-- 
-- LLAVES FORANEAS
-- 
ALTER TABLE Property ADD CONSTRAINT FK_ProPropertyType FOREIGN KEY(PropertyTypeId) REFERENCES PropertyType(Id);
ALTER TABLE Property ADD CONSTRAINT FK_ProOwner FOREIGN KEY(OwnerId) REFERENCES Owner(Id);


