--Creating a Database
CREATE DATABASE Company;

--Selecting a Database
USE Company;

--Creating a Table
CREATE TABLE Employees (
EmployeeID INT PRIMARY KEY, 
FirstName VARCHAR(20), 
LastName VARCHAR(20), 
Age INT, 
Department VARCHAR(20))

--Inserting Data into the Table
INSERT INTO Employees (
    EmployeeID, 
    FirstName, 
    LastName, 
    Age, 
    Department) 
VALUES ("1", "Juan", "Dela Cruz", "22", "IT"), 
       ("2", "John", "Doe", "21", "Finance"), 
       ("3", "Luigi", "Co", "23", "IT"), 
       ("4", "Mario", "Co", "24", "IT"), 
       ("5", "Dexter", "Newton", "22", "Finance")

--Viewing Data
SELECT * FROM Employees;

--Updating Data
UPDATE Employees SET Department = "Marketing" WHERE EmployeeID = 2;

--Deleting Data
DELETE FROM Employees WHERE EmployeeID = 3;

--Dropping the Table
DROP TABLE Employees;

