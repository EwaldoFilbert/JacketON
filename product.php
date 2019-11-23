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

	<div class="row">
		<?php
		if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 12;
        $offset = ($pageno-1) * $no_of_records_per_page;
        $total_pages_sql = "SELECT COUNT(*) FROM jaket WHERE kategori_id=$kategori_id AND kategorijaket_id=$kategorijaket_id";
        $result2 = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result2)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
		$query ="SELECT * FROM jaket WHERE kategori_id=$kategori_id AND kategorijaket_id=$kategorijaket_id LIMIT $offset, $no_of_records_per_page";
		$result = $conn->query($query);
		while ($row = $result->fetch_assoc()) {
			$id_jaket = $row['id_jaket'];
			$nama = $row['nama'];
			$gambar = $row['gambar'];
			$deskripsi = $row['deskripsi'];
			$quantity = $row['quantity'];
			$harga = $row['harga'];
		?>
		<div class="col-lg-3 col-md-6 col-sm-12" style="padding:15px">
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
					
					echo '<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal'.$id_jaket.' " >Detail Produk</a>';
					?>	
					</div>
				</div>
				</div>
			
				<?php
				echo '<div class="modal fade" id="modal'.$id_jaket.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
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
			
		<?php };?>

		
		</div>
    <ul class="pagination">
        <li><a href="?id=<?php echo $kategori_id?>&nama=<?php echo $nama_kategori?>&idjaket=<?php echo $kategorijaket_id?>&namajaket=<?php echo $kategorijaket_nama?>&pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?id=$kategori_id&nama=$nama_kategori&idjaket=$kategorijaket_id&namajaket=$kategorijaket_nama&pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?id=$kategori_id&nama=$nama_kategori&idjaket=$kategorijaket_id&namajaket=$kategorijaket_nama&pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?id=<?php echo $kategori_id?>&nama=<?php echo $nama_kategori?>&idjaket=<?php echo $kategorijaket_id?>&namajaket=<?php echo $kategorijaket_nama?>&pageno=<?php echo $total_pages?>">Last</a></li>
    </ul>

</div>


<?php
include 'footer.php';
?>