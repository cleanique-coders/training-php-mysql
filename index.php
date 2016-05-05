<?php 

require_once 'vendor/php-activerecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
   $cfg->set_model_directory('models');
   $cfg->set_connections(
     array(
       'development' => 'mysql://php_mbi:php_mbi@localhost/php_mbi',
       'production' => 'mysql://php_mbi:php_mbi@localhost/php_mbi'
     )
   );
});

// find
$task = Task::find(1);
echo $task->name;

// new task
$task = new Task();
$task->name = 'My first blog task!!';
$task->user_id = 1;
$task->description = 'lorem ipsum';
$task->created_at = date('Y-m-d H:i:s');
$task->save();

// update task
$task = task::find(1);
echo $task->name; # 'My first blog task!!'
$task->name = 'Some real name';
$task->save();

// delete task
$task = Task::find(1);
$task->delete();