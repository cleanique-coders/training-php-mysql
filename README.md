Assignment........

tasks.php
	list all available tasks
		each task can be edit & delete
			click edit will bring to tasks-update.php
			click delete will ask confirmation to delete, if ok, go to tasks-delete.php
	have a button to add new task

tasks-add.php
	a form to add new task
		inputs required:
			task's name
			task's description

tasks-update.php
	a form to update existing task
		please ensure task's id included in the form
		using method post

tasks-delete.php
	delete task from a table, based on id given