# PHP-Login-Template

`PHP-Login-Template` is a simple login and signup system with database built with *PHP, MySQLi Procedural and Bootstrap 4*.

# Technologies Used
- `PHP`

- `Bootstrap`

  - version 4.

- `MySQL`

# Files
- *homepage.php* -- The main page showed after login. Edit your own homepage. 
- *index.php* includes *login.php* -- Login Page.
- *signup.php* -- Signup Page.
- *footer.php* -- Footer for the webpage.
- *logoutdata.php* -- For wrong data entry in login page.

# How to Use

- Download all the source files to your computer.
- Create a DataBase as loginsystem in phpMyAdmin.
- Create users table in phpMyAdmin.
- Change the dbusername and password in dbh.inc.php file.
- Create four columns idUsers, uidUsers, emailUsers, pwdUsers in the users table.
- Or import the [loginsystem.sql](loginsystem.sql) file in the phpMyAdmin.
- Save the files, upload them to your webserver and give it a try.

# Features

- Passwords are hashed and stored (You can't view the original password of the user).
- Username and email validation is done.
- No need to re-enter the username and email again in the signup page if the password is wrong.
