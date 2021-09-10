<div class=" mt-3 container light rounded shadow">
	
	<form class="form-control px-2 mt-2 bg-light container-dimension" method="post" action="koneksi.php">
		<p class="px-2">Masukan Nama  : <input class="ms-2" type="text" name="nama"></p>
		<p class="px-2">Masukan Kelas : <input class="ms-2" type="text" name="kelas"></p>

		<div class="px-2">Hobi</div>
	  		<input type="checkbox" class="form-check-input ms-2" name="hobi[]" value="Berenang"> Berenang<br>
			<input type="checkbox" class="form-check-input ms-2" name="hobi[]" value="Lari"> Lari<br>
			<input type="checkbox" class="form-check-input ms-2" name="hobi[]" value="Sepak Bola"> Sepak Bola<br>
			<input type="checkbox" class="form-check-input ms-2" name="hobi[]" value="Bernyanyi"> Bernyanyi<br>
			<input type="checkbox" class="form-check-input ms-2" name="hobi[]" value="Main Game"> Main Game<br>
			<input type="submit" class="btn btn-dark mt-2 ms-2 mb-2" value="Kirim">
	</form>
</div>