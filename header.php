<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Title</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<header>

		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
				<a class="navbar-brand" href="index.php">JacketON</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
			<div class="mx-auto order-0">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Man
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a id="LakiA" class="dropdown-item" href="product.php">JacketA</a>
							<a id="LakiB" class="dropdown-item" href="product.php">JacketB</a>
							<a id="LakiC" class="dropdown-item" href="product.php">JacketC</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Woman
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a id="PerempuanA" class="dropdown-item" href="product.php">JacketA</a>
							<a id="PerempuanB" class="dropdown-item" href="product.php">JacketB</a>
							<a id="PerempuanC" class="dropdown-item" href="product.php">JacketC</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Kids
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a id="AnakA" class="dropdown-item" href="product.php">JacketA</a>
							<a id="AnakB" class="dropdown-item" href="product.php">JacketB</a>
							<a id="AnakC" class="dropdown-item" href="product.php">JacketC</a>
						</div>
					</li>
				</ul>
			</div>
			<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<button class="btn btn-primary">Login</button>
					</li>
					<li class="nav-item">
						<button class="btn btn-primary">SignUp</button>
					</li>
				</ul>
			</div>
		</nav>
	</header>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add To Cart</button>
      </div>
    </div>
  </div>
</div>