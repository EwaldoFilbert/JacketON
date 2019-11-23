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
			$id_jaket = $row['id_jaket'];
			$nama = $row['nama'];
			$gambar = $row['gambar'];
			$deskripsi = $row['deskripsi'];
			$quantity = $row['quantity'];
			$harga = $row['harga'];
		?>
		<div class="col-lg-3 col-md-6 col-sm-12"  style="padding:15px" >
			<div class="card">
				<img src="<?php echo $gambar ?>" class="card-img-top" alt="..." style="width:253px; height:253px">
				<div class="card-body">
				<?php
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
							
				echo '<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#index'.$id_jaket.'">Detail Produk</a>'
				?>	
				</div>	
			</div>
			</div>
			<?php
			echo '<div class="modal fade" id="index'.$id_jaket.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
			?>
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel"> <?php echo $nama ?> </h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times</span></button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-6">
								<img src="<?php echo $gambar ?>" class="card-img-top" alt="...">
								</div>
							<div class="col-6">
								<h5><?php echo $nama ?></h5>
								<h6>Harga : <?php echo $harga ?></h6><br>
								<p>Sisa Stock : <?php echo $quantity ?></p><br>
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
									<?php echo $deskripsi ?>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
						</div>
					</div>
					</div>
			<?php }; ?>
		
	</div>
</div>
			

<?php
include 'footer.php';
?>