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
	<?php
		$conn = new mysqli('localhost', 'root', '', 'jacketon');
	?>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
				<a class="navbar-brand" href="index.php">JacketON</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
			<div class="mx-auto order-0">
				<ul class="navbar-nav mr-auto">
					<?php
						$sql = "SELECT * FROM kategori";
						$query = $conn->query($sql);
						$sql1 = "SELECT * FROM kategori_jaket";
					
						while($row = $query->fetch_assoc()){
						echo"<li class='nav-item dropdown'>";
							echo "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>".$row['nama_kategori']."</a>";
							echo"<div class='dropdown-menu' aria-labelledby='navbarDropdown'>";
							$query1 = $conn->query($sql1);
								while($row1 = $query1->fetch_assoc()){
									echo "<a class='dropdown-item' href='product.php?id=$row[kategori_id]&nama=$row[nama_kategori]&idjaket=$row1[kategorijaket_id]&namajaket=$row1[kategorijaket_nama]'>".$row1['kategorijaket_nama']."</a>";
								}
							echo"</div>";
						echo"</li>";
						}
			 		?>
				</ul>
			</div>
		</nav>
	</header>