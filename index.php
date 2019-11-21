<?php
include 'header.php';	

?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<?php
	$query ="SELECT * FROM carousel";
	$result = $conn->query($query);
	 echo'<ol class="carousel-indicators">';
			
		for($i=0; $i<$result->num_rows;$i++){
            echo '
            <li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'"';
            if($i==0){echo'class="active"';}echo'></li>';
        }
		
	 echo'</ol>';
	 echo'<div class="carousel-inner">';
          if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {
            if($row['slider'] == 1){
              echo'<div class="carousel-item active">';}else{echo'<div class="carousel-item">';}
              echo'
                <img src="'.$row['image'].'" alt="..." class="d-block w-100">
              </div>';
          }}?>
		
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<div class="container">
	<h3 class="text-center" style="margin: 20px 0">New Item</h3>
	<div class="row" style="padding-bottom: 16px;">
		<?php	

		
		$query ="SELECT * FROM jaket ORDER BY date(tanggal_masuk) desc LIMIT 8";
		$result = $conn->query($query);
		while ($row = $result->fetch_assoc()) {
			$nama = $row['nama'];
			$gambar = $row['gambar'];
			$deskripsi = $row['deskripsi'];
			$quantity = $row['quantity'];
			$harga = $row['harga'];
			echo '<div class="col-lg-3 col-md-6 col-sm-12"  style="padding:15px" >';
			echo '<div class="card">';
				echo '<img src="'.$gambar.'" class="card-img-top" alt="..." style="width:253px; height:253px">';
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
					
					
				echo '<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#Modalindex">Cek Produk</a>';
				echo '</div>';
			echo '</div>';
			echo '</div>';
			
			echo '<div class="modal fade" id="Modalindex" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
  			echo '<div class="modal-dialog" role="document">';
    			echo '<div class="modal-content">';
      			echo '<div class="modal-header">';
        			echo '<h5 class="modal-title" id="exampleModalLabel"> '.$nama.' </h5>';
        			echo '<button type="button" class="close" data-dismiss="modal" aria-	label="Close"> <span aria-hidden="true">&times;</span></button>';
      			echo '</div>';
      			echo '<div class="modal-body">';
		  			echo '<div class="row">';
		  				echo '<div class="col-6">';
							echo '<img src="'.$gambar.'" class="card-img-top" alt="...">';
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
</div>
			

<?php
include 'footer.php';
?>