<?php require_once 'templates/_header.php'; ?>
<?php require_once 'inc/functions.php'; ?>

<div class="row" style="margin-top:30px">
  <div class="col-lg-4 col-md-4 col-md-offset-4 col-md-offset-4 col-sm-offset-3 col-sm-6 col-xs-12">
      <div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title"><strong>Sign In </strong></h3></div>
    <div class="panel-body">

      <?php if(isset($_SESSION['error'])):?>
        <div class="alert alert-danger"><?= $_SESSION['error']; ?></div>
        <?php unset($_SESSION['error']); ?>
      <?php endif; ?>
     <form role="form" method="post" action="login.php">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-block btn-success">Sign in</button>
  </form>
    </div>
  </div>
  </div>
</div>


<?php require_once 'templates/_footer.php'; ?>