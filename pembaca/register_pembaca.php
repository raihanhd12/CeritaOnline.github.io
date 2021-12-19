<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>REGISTRASI PEMBACA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<!-- STYLE CSS-->
		<link rel="stylesheet" type="text/css" href="../css/style2.css">
	</head>
	<body>	
		<div class="wrapper" style="background-image: url('../foto/perpus1.jpg');">
			<div class="inner">
				<form  action="proses_register.php" method="POST">
					<h3>REGISTRASI</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">NAMA LENGKAP :</label>
							<div class="form-holder">							
								<input type="text" class="form-control" name="nama_lengkap" required>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">EMAIL :</label>
							<div class="form-holder">							
								<input type="text" class="form-control" name="email" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">USERNAME :</label>
							<div class="form-holder">							
								<input type="text" class="form-control" name="username" required>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">PASSWORD :</label>
							<div class="form-holder">							
								<input type="password" class="form-control" placeholder="********" name="password" required>
							</div>
						</div>						
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">TANGGAL LAHIR :</label>
							<div class="form-holder select">
								<input type="date" class="form-control" name="tanggal_lahir" required>	
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">JENIS KELAMIN :</label>
							<div class="form-holder select">
								<select name="jenis_kelamin" id="" class="form-control" required>
                                    <option required>PILIHAN</option>
									<option value="male" required>LAKI - LAKI</option>
									<option value="female" required>PEREMPUAN</option>
								</select>								
							</div>
						</div>
                            <input type="hidden" name="level" value="pembaca">
					</div>
					<div class="form-end">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Saya menginputkan semua pernyataan diatas dengan benar
								<span class="checkmark"></span>
							</label>
						</div>
						<div class="button-holder">
							<button type="submit">DAFTAR</button>
						</div>				
					</div>
				</form>
				<footer>
					<p class="akhiran"><br>Copyright By Raihan Hidayatullah Djunaedi & Muhammad Al Kausar Ramadhan</p>
				</footer>
			</div>
		</div>	
	</body>
</html>