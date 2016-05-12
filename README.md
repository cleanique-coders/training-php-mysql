# Installation

1. Laragon

2. SQLYog Community

# First PHP

1. Go to `C:/laragon/www/`, create a folder named `training-php-mysql`

2. Open up your browser and go to `http://localhost/training-php-mysql` - Please make sure to run Laragon first, then click on Start All (if ask for permission, just Allow)
	
# TODO App

1. 	List all available tasks for the logged in user - `tasks.php`
	- each task can be edit & delete
		- click edit will bring to tasks-update.php
		- click delete will ask confirmation to delete, if ok, go to `tasks-delete.php`
	- have a button to add new task

2. A form to add new task - `tasks-add.php`
	- inputs required:
		- task's name
		- task's description

3. A form to update existing task - `tasks-edit.php`
	- please ensure task's id included in the form
	- using method post

4. Delete task from a table, based on id given - `tasks-delete.php`

5. Main Page - `index.php`
	
6. Process login form - `login.php`

7. Logout user from application - `logout.php`

8. Only allow authorized user to access to the page, otherwise redirect user to login page (`index.php`)`inc/authorize.php`
	
9. Numbers of functions available - `inc/functions.php` - and also where `$_SESSION` intialized using `session_start()`
	- `d($variable)` - Dump any variable in developer friendly way
	- `connect()` - Connect to database using PDO
	- `is_session_started()` - Check if session already started or not
	- `login()` - DEPRECATED

10. Add `require_once 'inc/authorize.php';` in our application scripts, at the top after `require_once 'inc/functions.php';` in order to have protected page.
	
11. Database - `db.sql`
	- Please import using SQLYog or any preferred SQL Editor Tool


12. Default password for following users are `1234`. Users can be add manually from SQLYog. Please ensure to add user's password with MD5 encryption.
	- nasrul@gmail.com
	- hazim@gmail.com
	- mohd@gmail.com
	- keramat@gmail.com