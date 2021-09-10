<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<body>

<?php 
	$nama=$_POST['nama'];
	$kelas=$_POST['kelas'];
 	$hobi=$_POST['hobi'];
?>

<div class="mt-5 container bg-light rounded shadow">
	<div class="position-absolute top-0 start-50 translate-middle mt-4 btn-outline-primary"><h2>PROFIL</h2></div>
	<p class="mt-5">
		Nama  : <?php echo $nama."<br>"?>
		Kelas : <?php echo $kelas."<br>"?>
		Hobi  : <br>
		<?php  foreach ($hobi as $key => $value){
			echo $key+1 . ". ";
			echo $value;
			echo "<br>";}?>
	</p>
</div>

</body>
</html>