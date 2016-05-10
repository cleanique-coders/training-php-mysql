# Installation

1. Laragon

2. SQLYog Community

# First PHP

1. Go to `C:/laragon/www/`, create a folder named `training-php-mysql`

2. Open up your browser and go to `http://localhost/training-php-mysql` - Please make sure to run Laragon first, then click on Start All (if ask for permission, just Allow)
	
# TODO App

1. tasks.php
	- list all available tasks
		- each task can be edit & delete
			- click edit will bring to tasks-update.php
			- click delete will ask confirmation to delete, if ok, go to tasks-delete.php
	- have a button to add new task

2. tasks-add.php
	- a form to add new task
		- inputs required:
			- task's name
			- task's description

3. tasks-update.php
	- a form to update existing task
		- please ensure task's id included in the form
		- using method post

4. tasks-delete.php
	- delete task from a table, based on id given
