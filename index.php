<?php
include 'header.php';
$conn = new mysqli('localhost', 'root', '', 'jacketon');
					
$query ="SELECT * FROM carousel";
$result = $conn->query($query);

$query2 ="SELECT * FROM jaket ORDER BY date(tanggal_masuk) desc";
$result2 = $conn->query($query2);
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<?php	
		for($i=0; $i<$result->num_rows;$i++){
            echo '
            <li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'"';
            if($i==0){echo'class="active"';}echo'></li>';
        }
		?>
	</ol>
	<div class="carousel-inner">
		<?php
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
		while ($row = $result2->fetch_assoc()) {
			    echo '<div class="col-lg-3 col-md-6 col-sm-12">';
				echo '<div class="card">';
					echo '<img src="'.$row['gambar'].'" class="card-img-top" alt="...">';
					echo '<div class="card-body">';
					echo '<h5 class="card-title">'.$row['nama'].'</h5>';
					$string = strlen($row['deskripsi']);
					if($string > 50){
						echo '<p class="card-text">'.substr($row['deskripsi'],0,100).'...'.'</p>';
						
					} else{
						echo '<p class="card-text">'.$row['deskripsi'].'</p>';
					}
					
					echo '<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add To Cart</a>';
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