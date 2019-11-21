<?php
include 'header.php';
?>

<?php
$kategori_id = $_GET['id'];
$nama_kategori = $_GET['nama'];
$kategorijaket_id = $_GET['idjaket'];
$kategorijaket_nama = $_GET['namajaket'];
?>
<h2 class="text-center" style="margin : 20px 0"> <?php echo $kategorijaket_nama ?> untuk <?php echo $nama_kategori ?> </h2>

<div class="container">
	<div class="form-inline" style="padding-bottom : 32px">
		<label for="exampleFormControlSelect1" style="padding-right: 16px" >Sort By : </label>
		<select class="form-control" id="exampleFormControlSelect1">
			<option>Low to High Price</option>
			<option>High to Low Price</option>
			<option>Newest Product</option>
		</select>
	</div>
	<div class="row">
		<?php	
		
		$query ="SELECT * FROM jaket WHERE kategori_id=$kategori_id AND kategorijaket_id=$kategorijaket_id";
		$result = $conn->query($query);
		while ($row = $result->fetch_assoc()) {
				$nama = $row['nama'];
				$image = $row['gambar'];
				$deskripsi = $row['deskripsi'];
				$quantity = $row['quantity'];
				$harga = $row['harga'];
			    echo '<div class="col-lg-3 col-md-6 col-sm-12" style="padding:15px">';
				echo '<div class="card">';
					echo '<img src="'.$image.'" class="card-img-top" alt="..." style="width:253px; height:253px">';
					echo '<div class="card-body">';
					$string1 = strlen($nama);
					if($string1 > 21){
						echo '<h5 class="card-title">'.substr($nama,0,20).'</h5>';
					} else{
						echo '<h5 class="card-title">'.$nama.'</h5>';
					}
					$string = strlen($deskripsi);
					if($string > 50){
						echo '<p class="card-text">'.substr($deskripsi,0,100).'...'.'</p>';
						
					} else{
						echo '<p class="card-text">'.$deskripsi.'</p>';
					}
					
					echo '<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Cek Produk</a>';
					echo '</div>';
				echo '</div>';
				echo '</div>';
			
				echo '<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
  				echo '<div class="modal-dialog" role="document">';
    				echo '<div class="modal-content">';
      				echo '<div class="modal-header">';
        				echo '<h5 class="modal-title" id="exampleModalLabel"> '.$nama.' </h5>';
        				echo '<button type="button" class="close" data-dismiss="modal" aria-		label="Close"> <span aria-hidden="true">&times;</span>;</button>';
      				echo '</div>';
      				echo '<div class="modal-body">';
		  				echo '<div class="row">';
		  					echo '<div class="col-6">';
								echo '<img src="'.$image.'" class="card-img-top" alt="...">';
							echo '</div>';
						echo '<div class="col-6">';
							echo '<h5>'.$nama.'</h5>';
							echo '<h6>Harga : '.$harga .'</h6><br>';
							echo '<p>Sisa Stock : '.$quantity.'</p><br>';
							echo '<p>Ukuran : <select>
  									<option value="s">S</option>
  									<option value="m">M</option>
  									<option value="l">L</option>
									</select>
									</p>';
            				echo '</div>';
		  				echo '</div>';
		  				echo '<br>';
		  				echo '<div class="row">';
		  					echo '<div class="col-12">';
								echo '<h5>Deskripsi Produk</h5>';
								echo $deskripsi;
							echo '</div>';
		  				echo '</div>';
      				echo '</div>';
      				echo '<div class="modal-footer">';
        				echo '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>';
					echo '</div>';
					echo '</div>';
  				echo '</div>';
				echo '</div>';
        }
		?>
		</div>
	<h2 class="text-center" style="margin : 20px 0"> Pagination </h2>

</div>


<?php
include 'footer.php';
?>