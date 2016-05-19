# TODO API

## API Test Tool

[Postman](http://getpostman.com)

## Features

1. Basic CORS
2. Output as JSON

	[
		'data':null,
		'message':'',
		'status':true,
		'code':200
	]

## API End Point

1. Authentication 
	- Method: POST
	- Parameters:
		- `username`
		- `password`
	- Return 
		- `token`
	- Url: `http://[domain]/login.php`

2. Registration (TODO)
	- Method: POST
	- Parameters:
		- `username`
		- `password`
	- Url: `http://[domain]/register.php`

3. Task List
	- Method: GET
	- Parameters:
		- `token`
	- Return:
		- list
	- Url: `http://[domain]/tasks.php`

4. Add Task (TODO)
	- Method: GET
	- Parameters:
		- `token`
	- Return:
		- list
	- Url: `http://[domain]/tasks.php`

5. Update Task (TODO)
	- Method: GET
	- Parameters:
		- `token`
	- Return:
		- list
	- Url: `http://[domain]/tasks.php`

6. Delete Task (TODO)
	- Method: GET
	- Parameters:
		- `token`
	- Return:
		- list
	- Url: `http://[domain]/tasks.php`