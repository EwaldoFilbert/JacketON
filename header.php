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
					<?php
						$conn = new mysqli('localhost', 'root', '', 'jacketon');
						
						$sql = "SELECT * FROM kategori";
						$query = $conn->query($sql);
						$sql1 = "SELECT * FROM kategori_jaket";
						
						while($row = $query->fetch_assoc()){
						echo"<li class='nav-item dropdown'>";
							echo "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>".$row['nama_kategori']."</a>";
							echo"<div class='dropdown-menu' aria-labelledby='navbarDropdown'>";
							$query1 = $conn->query($sql1);
								while($row1 = $query1->fetch_assoc()){
									echo "<a class='dropdown-item' href='product.php'>".$row1['kategorijaket_nama']."</a>";
								}
							echo"</div>";
						echo"</li>";
						}
			 		?>
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
        <h5 class="modal-title" id="exampleModalLabel">Nama Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  <div class="row">
		  	<div class="col-6">
				<img src="img/Cowo/HoodieZipperBabyPink.jpg" class="card-img-top" alt="...">
			</div>
			<div class="col-6">
				<h5>Nama Produk</h5>
				<h6>Harga : Rp.60.000</h6><br>
				<p>Jumlah : <input type="number" name="quantity" min="1" max="10"></p><br>
				<p>Ukuran : <select>
  							<option value="s">S</option>
  							<option value="m">M</option>
  							<option value="l">L</option>
							</select>
				</p>
            </div>
		  </div>
		  <br>
		  <div class="row">
		  	<div class="col-12">
				<h5>Deskripsi Produk</h5>
				<p> BAHAN : FLEECE <br> UKURAN : L, XL, XXL <br> DETAIL UKURAN :
					( Lebar x Panjang x Panjang Lengan ) <br>
					L = 55cm x 65cm x 56cm  (Pria/Wanita Tinggi MAX 170cm) <br>
					XL = 57cm x 67cm x 58cm (Pria/Wanita Tinggi MAX 175cm) <br>
					XXL = 60cm x 70cm x 60cm (Pria/Wanita Tinggi MAX 180cm)</p>
			</div>
		  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add To Cart</button>
      </div>
    </div>
  </div>
</div>