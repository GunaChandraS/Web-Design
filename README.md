# Web-Design
## Employee Management System
This project is an Employee Management System that includes a login page, CRUD operations for managing employees, file upload functionality for profile pictures, and validation for form fields.
### Features
Login Page:
Simple login functionality with session management.
Employee Management:
Create: Form to add new employees with fields for id, firstname, lastname, email, phone, position, and profile picture.
Read: Display a list of all employees with details including profile pictures.
Update: Edit an employee's details.
Delete: Remove an employee from the database.
File Upload:
Upload profile pictures for employees.
Store pictures in a server directory and save file paths in the database.
Validation:
Client-side and server-side validation for form fields.
Technologies Used
HTML, CSS, JavaScript
PHP (for server-side scripting)
MySQL (database)
Setup Instructions
#### Database Setup:

Create a MySQL database named employees.
Import the SQL schema provided in database.sql to create the employees table.
Example SQL schema (database.sql):

sql
Copy code
CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    position VARCHAR(50),
    profile_picture VARCHAR(255)
);
##### Server Configuration:

Ensure your server environment supports PHP for server-side functionality.
Set appropriate permissions for the images/ directory where profile pictures will be uploaded.

###### Configure Database Connection:

Edit config.php to set up your MySQL database connection details.
Example config.php:
php
Copy code
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employees";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

###### Run the Application:

Start your web server (e.g., Apache).
Navigate to the project directory in your web server's root directory (e.g., http://localhost/employee-management-system/).
Open index.html or login.php in your browser to access the login page and begin using the application.
Usage
Login:
Enter your credentials (username and password) to log in.
Employee Management:
Add Employee: Click on "Add Employee" to fill out the form and upload a profile picture.
View Employees: Navigate to "View Employees" to see a list of all employees with their details.
Edit Employee: Click on "Edit" next to an employee's details to modify their information.
Delete Employee: Click on "Delete" next to an employee's details to remove them from the database.
File Upload:
When adding or editing an employee, select a profile picture file to upload.
File Structure
arduino
Copy code
├── css/
│   └── style.css
├── js/
│   └── script.js
├── images/
├── connection.php
├── database.sql
├── regform.html
├── fileupload.php
├── edit_employee.php
├── delete_employee.php
└── README.md
