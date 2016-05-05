function confirmdelete(id) {
	if(confirm('Are you sure want to delete this task?')) {
		window.location = 'controllers/tasks-delete.php?id=' + id;
	}
}