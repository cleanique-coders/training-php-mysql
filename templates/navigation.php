<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Bootstrap Nav. Bar</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  		<ul class="nav navbar-nav pull-right">

        <?php if(isset($_SESSION['user'])): ?>
  			<li data-toggle="tooltip" data-placement="left" title="Logout">
          <a class="btn" href="controllers/logout.php">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
          </a>
        </li>
        <?php endif; ?>

  		</ul>
  	</div>
    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>