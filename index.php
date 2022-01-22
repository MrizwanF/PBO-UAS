<!DOCTYPE html>
<html>
<head>
	<title>Mini POM Bensin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		
			
			
				
			
			
			
			
					
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">MINI POM</h2>
		<a class="brand" href="https://www.malasngoding.com"></a>
		<form method="post" action="index.php">			
            <input type="text" name="bensin" class="bensin" autocomplete="on" placeholder="jenis bensin">
            <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Jumlah Pembayaran">
			<input type="text" name="bil2" class="bil" autocomplete="on" placeholder="Harga Sesuai Jenis Bensin">
			<select class="opt" name="operasi">
				
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html>