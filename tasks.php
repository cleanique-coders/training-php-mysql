<?php require_once 'templates/_header.php'; ?>
<?php require_once 'inc/functions.php'; ?>
<?php 

/*$senarai_tugasan = [
  [
    'id' => 1,
    'name' => 'Tugasa Pertama',
    'description' => 'Penerangan berkenaan tugasan pertama',
    'status' => 'Baru'
  ],
  [
    'id' => 2,
    'name' => 'Tugasa Kedua',
    'description' => 'Penerangan berkenaan tugasan Kedua',
    'status' => 'Baru'
  ],
  [
    'id' => 3,
    'name' => 'Tugasa Ketiga',
    'description' => 'Penerangan berkenaan tugasan Ketiga',
    'status' => 'Baru'
  ],
  [
    'id' => 4,
    'name' => 'Tugasa Keempat',
    'description' => 'Penerangan berkenaan tugasan Keempat',
    'status' => 'Baru'
  ],
  [
    'id' => 5,
    'name' => 'Tugasa Kelima',
    'description' => 'Penerangan berkenaan tugasan Kelima',
    'status' => 'Baru'
  ]

];*/


$conn = connect(); // create connection
$senarai_tugasan = []; // initialize empty array

$sql = "SELECT * FROM tasks ORDER BY created_at DESC";
foreach($conn->query($sql) as $row){
     $senarai_tugasan[] = $row; 
}

//d($senarai_tugasan);

?>
<h3>Senarai Tugasan</h3>

<a href="tasks-add.php" class="btn btn-success pull-right">
  <span class="glyphicon glyphicon-plus"></span>
</a>

<table class="table">
  <tr>
    <td>Name</td>
    <td>Description</td>
    <td>Action</td>
  </tr>
  
  <?php foreach ($senarai_tugasan as $key => $value): ?>
    <tr>
      <td><?= $value['name']; ?></td>
      <td><?= $value['description']; ?></td>
      <td>
          <a href="tasks-info.php?id=<?= $value['id']; ?>" class="btn btn-info">
            <span class="glyphicon glyphicon-info-sign"></span>
          </a>

          <a href="tasks-edit.php?id=<?= $value['id']; ?>" class="btn btn-primary">
          <span class="glyphicon glyphicon-edit"></span>
          </a>

          <a href="#" onclick="confirm_delete(<?= $value['id']; ?>)" class="btn btn-danger">
          <span class="glyphicon glyphicon-trash"></span>
          </a>
      </td>
    </tr>
  <?php endforeach; ?>

</table>
<script type="text/javascript"> 
function confirm_delete(id) {
  if(confirm('Are you sure want to delete this task?')) {
    window.location = 'tasks-delete.php?id='+id;
  }
}
</script>

<?php require_once 'templates/_footer.php'; ?>