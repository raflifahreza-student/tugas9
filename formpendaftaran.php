<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran Mahasiswa</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/boostrap/4.1.3/css/boostrap.min.css" integrity="sha384-MC-w98/5FnGE8fJT3GXwEOngsv7Zt27NXFoaoApmYm8liuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		.warning {color: #FF0000;}
	</style>
</head>
<body>
	<?php
	//mendeklarasikan Variabel
	$error_jenis_pendaftaran = "";
	$error_tanggal_masuk = "";
	$error_nis = "";
	$error_nomer_peserta = "";
	$error_paud = "";
	$error_tk = "";
	$error_skhun = "";
	$error_ijazah = "";
	$error_hobi = "";	
	$error_citacita = "";
	$error_nama = "";
	$error_jenis_kelamin = "";
	$error_nisn = "";
	$error_nik = "";
	$error_tempat_lahir = "";
	$error_tanggal_lahir = "";
	$error_agama = "";
	$error_berkebutuhan_khusus = "";
	$error_alamat = "";
	$error_rt = "";
	$error_rw = "";
	$error_dusun = "";
	$error_desa = "";
	$error_kecamatan = "";
	$error_kode_pos = "";
	$error_tempat_tinggal = "";
	$error_transportasi = "";
	$error_nohp = "";
	$error_telp = "";
	$error_email = "";
	$error_penerima_kps = "";
	$error_nokps = "";
	$error_kewarganegaraan = "";
	$error_nama_negara="";

	$jenis_pendaftaran="";
	$tanggal_masuk = "";
	$nis = "";
	$nomer_peserta = "";
	$paud = "";
	$tk = "";
	$skhun = "";
	$ijazah = "";
	$hobi = "";
	$citacita = "";
	$nama = "";
	$jenis_kelamin = "";
	$nisn = "";
	$nik = "";
	$tempat_lahir = "";
	$tanggal_lahir = "";
	$agama = "";
	$berkebutuhan_khusus = "";
	$alamat = "";
	$rt = "";
	$rw = "";
	$dusun = "";
	$desa = "";
	$kecamatan = "";
	$kode_pos = "";
	$tempat_tinggal = "";
	$transportasi = "";
	$nohp = "";
	$telp = "";
	$email = "";
	$penerima_kps = "";
	$nokps = "";
	$kewarganegaraan = "";
	$nama_negara="";

	$pesan_sukses="";

	//method POST dijalankan server atau sistem
if($_SERVER["REQUEST_METHOD"] == "POST"){
	//jenis pendaftaran
	if(empty($_POST["jenis_pendaftaran"])){
		$error_jenis_pendaftaran = "Jenis Pendaftaran Tidak Boleh Kosong";
	}
	else{
		$jenis_pendaftaran = cek_input($_POST["jenis_pendaftaran"]);
		if($jenis_pendaftaran=="01"){
			$jenis_pendaftaran="Siswa Baru";
		}
		elseif($jenis_pendaftaran=="02"){
			$jenis_pendaftaran="Pindahan";
		}
		else{
			$error_jenis_pendaftaran="Inputkan Pilihan Jenis Pendaftaran Dengan Benar";
		}
	}

	//Tanggal Masuk Sekolah
	if(empty($_POST["tanggal_masuk"])){
		$error_tanggal_masuk = "Tanggal Masuk Sekolah Tidak Boleh Kosong";
	}
	else{
		$tanggal_masuk = cek_input($_POST["tanggal_masuk"]);
		$tanggal_masuk = date('Y-m-d', strtotime($tanggal_masuk));
	}

	//NIS
	if(empty($_POST["nis"])){
		$error_nis = "NIS Tidak Boleh Kosong";
	}
	else{
		$nis = cek_input($_POST["nis"]);
		if(!is_numeric($nis)){
			$error_nis	= 'NIS Hanya Boleh Angka';
		}
	}

	//Nomer Peserta Ujian
	if(empty($_POST["nomer_peserta"])){
		$error_nomer_peserta = "Nomor Peserta Ujian Tidak Boleh Kosong";
	}
	else{
		$nomer_peserta = cek_input($_POST["nomer_peserta"]);
		if(!is_numeric($nomer_peserta)){
			$error_nomer_peserta = "Nomor Peserta Ujian Hanya Boleh Angka";
		}
		elseif(strlen($nomer_peserta) !=20){
			$error_nomer_peserta="Nomer Peserta Ujian Hanya 20 digit";
		}
	}

	//PAUD
	if(empty($_POST["paud"])){
		$error_paud = "Harus Memilih Salah Satu Opsi!! Tidak Boleh Kosong";
	}
	else{
		$paud = cek_input($_POST["paud"]);
	}

	//TK
	if(empty($_POST["tk"])){
		$error_tk = "Harus Memilih Salah Satu Opsi!! Tidak Boleh Kosong";
	}
	else{
		$tk = cek_input($_POST["tk"]);
	}

	//SKHUN
	if(empty($_POST["skhun"])){
		$error_skhun = "Nomor Seri SKHUN Tidak Boleh Kosong";
	}
	else{
		$skhun = cek_input($_POST["skhun"]);
		if(!is_numeric($skhun)){
			$error_skhun="Nomor Seri SKHUN Hanya Boleh Angka";
		}
		elseif(strlen($skhun) !=16){
			$error_skhun="Panjang Nomer Seri SKHUN Hanya 16 Digit";
		}
	}

	//ijazah
	if(empty($_POST["ijazah"])){
		$error_ijazah = "Nomor Seri Ijazah Tidak Boleh Kosong";
	}
	else{
		$ijazah = cek_input($_POST["ijazah"]);
		if(!is_numeric($ijazah)){
			$error_ijazah	= 'Nomor Seri Ijazah Hanya Boleh Angka';
		}
		elseif(strlen($ijazah) !=16){
			$error_ijazah="Panjang Nomer Seri Ijazah Hanya 16 Digit";
		}
	}

	//Hobi
	if(empty($_POST["hobi"])){
		$error_hobi = "Hobi Tidak Boleh Kosong";
	}
	else {
		$hobi = cek_input($_POST["hobi"]);
		if($hobi=="A"){
			$hobi="Olahraga";
		}
		elseif($hobi=="B"){
			$hobi="Kesenian";
		}
		elseif($hobi=="C"){
			$hobi="Membaca";
		}
		elseif($hobi=="D"){
			$hobi="Menulis";
		}
		elseif($hobi=="E"){
			$hobi="Traveling";
		}
		elseif($hobi=="F"){
			$hobi="Lainnya";
		}
		else{
			$error_hobi="Inputkan Pilihan Hobi Dengan Benar";
		}
	}

	//Cita-cita
	if(empty($_POST["citacita"])){
		$error_citacita = "Nama Tidak Boleh Kosong";
	}
	else {
		$citacita=cek_input($_POST["citacita"]);
		if($citacita=="A"){
			$citacita="PNS";
		}
		elseif($citacita=="B"){
			$citacita="TNI/POLRI";
		}
		elseif($citacita=="C"){
			$citacita="Guru/Dosen";
		}
		elseif($citacita=="D"){
			$citacita="Dokter";
		}
		elseif($citacita=="E"){
			$citacita="Politikus";
		}
		elseif($citacita=="F"){
			$citacita="Wiraswasta";
		}
		elseif($citacita=="G"){
			$citacita="Seni/Lukis/Artis/Sejenis";
		}
		elseif($citacita=="H"){
			$citacita="Lainnya";
		}
		else{
		$error_citacita="Inputkan Pilihan Cita-cita Dengan Benar";	
		}
	}

	//Nama Lengkap
	if(empty($_POST["nama"])){
		$error_nama="Nama tidak boleh kosong";
	}
	else{
		$nama=cek_input($_POST["nama"]);
		if(!preg_match("/^[a-zA-z ]*$/", $nama)){
			$error_nama="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}

	//Jenis Kelamin
	if(empty($_POST["jenis_kelamin"])){
		$error_jenis_kelamin = "Harus Memilih Salah Satu Opsi!! Tidak Boleh Kosong";
	}
	else{
		$jenis_kelamin = cek_input($_POST["jenis_kelamin"]);
	}

	//NISN
	if(empty($_POST["nisn"])){
		$error_nisn = "NISN Tidak Boleh Kosong";
	}
	else{
		$nisn = cek_input($_POST["nisn"]);
		if(!is_numeric($nisn)){
			$error_nisn	= 'NISN Hanya Boleh Angka';
		}
	}

	//NIK
	if(empty($_POST["nik"])){
		$error_nik = "NIK Tidak Boleh Kosong";
	}
	else{
		$nik = cek_input($_POST["nik"]);
		if(!is_numeric($nik)){
			$error_nik	= 'NIK Hanya Boleh Angka';
		}
	}

	//Tempat Lahir
	if(empty($_POST["tempat_lahir"])){
		$error_tempat_lahir = "Tempat Lahir Tidak Boleh Kosong";
	}
	else {
		$tempat_lahir = cek_input($_POST["tempat_lahir"]);
		if(!preg_match("/^[a-zA-Z]*$/",$tempat_lahir)){
			$error_tempat_lahir = "Inputan Hanya boleh Huruf dan spasi";
		}
	}

	//Tanggal Lahir
	if(empty($_POST["tanggal_lahir"])){
		$error_tanggal_lahir = "Tanggal Tidak Boleh Kosong";
	}
	else{
		$tanggal_lahir = cek_input($_POST["tanggal_lahir"]);
		$tanggal_lahir = date('Y-m-d',strtotime($tanggal_lahir));
	}

	//Agama
	if(empty($_POST["agama"])){
		$error_agama = "Agama Tidak Boleh Kosong";
	}
	else{
		$agama = cek_input($_POST["agama"]);
		if($agama=="01"){
			$agama="Islam";
		}
		elseif($agama=="02"){
			$agama="Kristen/Protestan";
		}
		elseif($agama == "03"){
			$agama="Katholik";	
		}
		elseif($agama == "04"){
			$agama="Hindu";	
		}
		elseif($agama == "05"){
			$agama="Buddha";	
		}
		elseif($agama == "06"){
			$agama="Khong Hu Chu";	
		}
		elseif($agama == "99"){
			$agama="Lainnya";	
		}
		else{
			$error_agama="Inputkan Pilihan Agama Dengan Benar";
		}
	}

	//Berkebutuhan Khusus
	if(empty($_POST["berkebutuhan_khusus"])){
		$error_berkebutuhan_khusus="Berkebutuhan Khusus tidak boleh kosong";
	}
	else{
		$berkebutuhan_khusus=cek_input($_POST["berkebutuhan_khusus"]);
		if($berkebutuhan_khusus == "01"){
			$berkebutuhan_khusus="Tidak";	
		}
		elseif($berkebutuhan_khusus == "02"){
			$berkebutuhan_khusus="Netra (A)";	
		}
		elseif($berkebutuhan_khusus == "03"){
			$berkebutuhan_khusus="Rungu (B)";	
		}
		elseif($berkebutuhan_khusus == "04"){
			$berkebutuhan_khusus="Grahita Ringan (C)";	
		}
		elseif($berkebutuhan_khusus == "05"){
			$berkebutuhan_khusus="Grahita Sedang (C1)";	
		}
		elseif($berkebutuhan_khusus == "06"){
			$berkebutuhan_khusus="Daksa Ringan (D)";	
		}
		elseif($berkebutuhan_khusus == "07"){
			$berkebutuhan_khusus="Daksa Sedang (D1)";	
		}
		elseif($berkebutuhan_khusus == "08"){
			$berkebutuhan_khusus="Laras (E)";	
		}
		elseif($berkebutuhan_khusus == "09"){
			$berkebutuhan_khusus="Wicara (F)";	
		}
		elseif($berkebutuhan_khusus == "10"){
			$berkebutuhan_khusus="Tuna Ganda (B)";	
		}
		elseif($berkebutuhan_khusus == "11"){
			$berkebutuhan_khusus="Hiper Aktif (H)";	
		}
		elseif($berkebutuhan_khusus == "12"){
			$berkebutuhan_khusus="Cerdas Istimewa (i)";	
		}
		elseif($berkebutuhan_khusus == "13"){
			$berkebutuhan_khusus="Bakat Istimewa (J)";	
		}
		elseif($berkebutuhan_khusus == "14"){
			$berkebutuhan_khusus="Kesulitan Belajar (K)";	
		}
		elseif($berkebutuhan_khusus == "15"){
			$berkebutuhan_khusus="Narkoba (N)";	
		}
		elseif($berkebutuhan_khusus == "16"){
			$berkebutuhan_khusus="Indigo (O)";	
		}
		elseif($berkebutuhan_khusus == "17"){
			$berkebutuhan_khusus="Down Sindrome (P)";	
		}
		elseif($berkebutuhan_khusus == "18"){
			$berkebutuhan_khusus="Autis (Q)";	
		}
		else{
			$error_berkebutuhan_khusus="Inputkan Pilihan Berkebutuhan Khusus Dengan Benar";
		}
	}

	//Alamat Jalan
	if(empty($_POST["alamat"])){
		$error_alamat="Alamat Jalan tidak boleh kosong";
	}
	else{
		$alamat=cek_input($_POST["alamat"]);
	}

	//RT
	if(empty($_POST["rt"])){
		$error_rt="RT tidak boleh kosong";
	}
	else{
		$rt=cek_input($_POST["rt"]);
		if(!is_numeric($rt)){
			$error_rt="RT hanya boleh berisi angka";
		}
	}

	//RW
	if(empty($_POST["rw"])){
		$error_rw="RW tidak boleh kosong";
	}
	else{
		$rw=cek_input($_POST["rw"]);
		if(!is_numeric($rw)){
			$error_rw="RW hanya boleh berisi angka";
		}
	}

	//Dusun
	if(empty($_POST["dusun"])){
		$error_dusun="Dusun tidak boleh kosong";
	}
	else{
		$dusun=cek_input($_POST["dusun"]);
		if(!preg_match("/^[a-zA-z ]*$/", $dusun)){
			$error_dusun="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}	

	//Desa/Kelurahan
	if(empty($_POST["desa"])){
		$error_desa="Desa/Kelurahan tidak boleh kosong";
	}
	else{
		$desa=cek_input($_POST["desa"]);
		if(!preg_match("/^[a-zA-z ]*$/", $desa)){
			$error_desa="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}

	//Kecamatan
	if(empty($_POST["kecamatan"])){
		$error_kecamatan="Kecamatan tidak boleh kosong";
	}
	else{
		$kecamatan=cek_input($_POST["kecamatan"]);
		if(!preg_match("/^[a-zA-z ]*$/", $kecamatan)){
			$error_kecamatan="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}

	//Kode Pos
	if(empty($_POST["kode_pos"])){
		$error_kode_pos="Kode Pos tidak boleh kosong";
	}
	else{
		$kode_pos=cek_input($_POST["kode_pos"]);
		if(!is_numeric($kode_pos)){
			$error_kode_pos="Kode Pos hanya boleh berisi angka";
		}
	}

	//Tempat Tinggal
	if(empty($_POST["tempat_tinggal"])){
		$error_tempat_tinggal="Tempat Tinggal tidak boleh kosong";
	}
	else{
		$tempat_tinggal=cek_input($_POST["tempat_tinggal"]);
		if($tempat_tinggal == "1"){
			$tempat_tinggal="Bersama Orang Tua";	
		}
		elseif($tempat_tinggal == "2"){
			$tempat_tinggal="Wali";	
		}
		elseif($tempat_tinggal == "3"){
			$tempat_tinggal="Kos";	
		}
		elseif($tempat_tinggal == "4"){
			$tempat_tinggal="Asrama";	
		}
		elseif($tempat_tinggal == "5"){
			$tempat_tinggal="Panti Asuhan";	
		}
		elseif($tempat_tinggal == "9"){
			$tempat_tinggal="Lainnya";	
		}
		else{
			$error_tempat_tinggal="Masukkan pilihan tempat tinggal dengan benar";
		}
	}

	//Moda Transportasi
	if(empty($_POST["transportasi"])){
		$error_transportasi="Moda Transportasi tidak boleh kosong";
	}
	else{
		$transportasi=cek_input($_POST["transportasi"]);
		if($transportasi == "01"){
			$transportasi="Jalan Kaki";	
		}
		elseif($transportasi == "02"){
			$transportasi="Kendaraan Pribadi";	
		}
		elseif($transportasi == "03"){
			$transportasi="Kendaraan Umum/Angkot/Pete-pete";	
		}
		elseif($transportasi == "04"){
			$transportasi="Jemputan Sekolah";	
		}
		elseif($transportasi == "05"){
			$transportasi="Kereta Api";	
		}
		elseif($transportasi == "06"){
			$transportasi="Ojek";	
		}
		elseif($transportasi == "07"){
			$transportasi="Andong/Bendi/Sado/Dokar/Delman/Becak";	
		}
		elseif($transportasi == "08"){
			$transportasi="Perahu Penyeberangan/Rakit/Getek";	
		}
		elseif($transportasi == "99"){
			$transportasi="Lainnya";	
		}
		else{
			$error_transportasi="Masukkan pilihan kendaraan dengan benar";
		}
	}

	//No. HP
	if(empty($_POST["nohp"])){
		$error_nohp="No. HP tidak boleh kosong";
	}
	else{
		$nohp=cek_input($_POST["nohp"]);
		if(!is_numeric($nohp)){
			$error_nohp="Nomor HP hanya boleh angka";
		}
	}

	//Email
	if(empty($_POST["email"])){
		$error_email="Email tidak boleh kosong";
	}
	else{
		$email=cek_input($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error_email="Format Email Invalid";
		}
	}

	//No. Telepon
	if(empty($_POST["telp"])){
		$error_telp="Telp tidak boleh kosong";
	}
	else{
		$telp=cek_input($_POST["telp"]);
		if(!is_numeric($telp)){
			$error_telp="Nomor Telepon hanya boleh angka";
		}
	}

	//Penerima KPS/PKH/KIP
	if(empty($_POST["penerima_kps"])){
		$error_penerima_kps="Pilihan tidak boleh kosong";
	}
	else{
		$penerima_kps=cek_input($_POST["penerima_kps"]);
	}

	//Nomor KPS/KKS/PKH/KIP
	$nokps=cek_input($_POST["nokps"]);
	if(!is_numeric($nokps)){
		$error_nokps="Nomor KPS/KKS/PKH/KIP hanya boleh angka";
	}

	//Kewarganegaraan
	if(empty($_POST["kewarganegaraan"])){
		$error_kewarganegaraan="Pilihan tidak boleh kosong";
	}
	else{
		$kewarganegaraan=cek_input($_POST["kewarganegaraan"]);
	}	

	//Nama Negara
	if ($kewarganegaraan == "WNA") {
		if(empty($_POST["nama_negara"])){
			$error_nama_negara="Nama Negara tidak boleh kosong";
		}
		else{
			$nama_negara=cek_input($_POST["nama_negara"]);
			if(!preg_match("/^[a-zA-z ]*$/", $nama_negara)){
				$error_nama_negara="Inputan Hanya Boleh Huruf dan Spasi";
			}
		}
	}
	elseif ($kewarganegaraan == "WNI") {
		$nama_negara="Indonesia";
	}

	//pengondisian apabila kode form diatas tidak eror maka data akan tersimpan ke database
	if ($error_jenis_pendaftaran =="" && $error_tanggal_masuk=="" && $error_nis =="" && $error_nomer_peserta=="" && $error_paud=="" && $error_tk=="" && $error_skhun=="" && $error_ijazah=="" && $error_hobi=="" && $error_citacita=="" && $error_nama=="" && $error_jenis_kelamin=="" && $error_nisn=="" && $error_nik=="" && $error_tempat_lahir=="" && $error_tanggal_lahir=="" && $error_agama=="" && $error_berkebutuhan_khusus=="" && $error_alamat=="" && $error_rt=="" && $error_rw=="" && $error_dusun=="" && $error_desa=="" && $error_kecamatan=="" && $error_kode_pos=="" && $error_tempat_tinggal=="" && $error_transportasi=="" && $error_nohp=="" && $error_email=="" && $error_telp=="" && $error_penerima_kps=="" && $error_nokps=="" && $error_kewarganegaraan=="" && $error_nama_negara=="") {
	
		include 'koneksi2.php';

		//Masukkan data ke tabel data_diri yang ada di database
		$query="INSERT INTO pendaftaran VALUES ('$jenis_pendaftaran', '$tanggal_masuk', '$nis', '$nomer_peserta', '$paud', '$tk', '$skhun', '$ijazah', '$hobi', '$citacita', '$nama', '$jenis_kelamin', '$nisn', '$nik', '$tempat_lahir', '$tanggal_lahir', '$agama', '$berkebutuhan_khusus', '$alamat', '$rt', '$rw', '$dusun', '$desa', '$kecamatan', '$kode_pos', '$tempat_tinggal', '$transportasi', '$nohp', '$telp', '$email', '$penerima_kps', '$nokps', '$kewarganegaraan', '$nama_negara')";
		mysqli_query($conn, $query);

		$pesan_sukses="Data Berhasil Disimpan";
	}
	else{
		$pesan_sukses="Data Gagal Disimpan";
	}
}

function cek_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
	?>

	<div class="row">
	<div class="col-md-9">
		<div class="card">
			<div class="card-header">
				Form Pendaftaran
			</div>
			<div class="card-body">
				<!-- Mengarahkan action ke halaman sendiri -->
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<div class="form-group row">
						<label for="jenis_pendaftaran" class="col-sm-3 col-form-label">Jenis Pendaftaran</label>
						<div class="col-sm-9">
							<input type="text" name="jenis_pendaftaran" class="form-control <?php echo ($error_jenis_pendaftaran !="" ? "is_invalid" : ""); ?>" id="jenis_pendaftaran" placeholder="Jenis Pendaftaran" value="<?php echo $jenis_pendaftaran; ?>"><label>01=Siswa Baru, 02=Pindahan</label><span class="warning"><?php echo $error_jenis_pendaftaran; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="tanggal_masuk" class="col-sm-3 col-form-label">Tanggal Masuk Sekolah</label>
						<div class="col-sm-9">
							<input type="text" name="tanggal_masuk" class="form-control <?php echo ($error_tanggal_masuk !="" ? "is_invalid" : ""); ?>" id="tanggal_masuk" placeholder="Tanggal Masuk Sekolah" value="<?php echo $tanggal_masuk; ?>"><label>Contoh: 24-12-2020</label><span class="warning"><?php echo $error_tanggal_masuk; ?></span>
						</div>
					</div>										

					<div class="form-group row">
						<label for="nis" class="col-sm-3 col-form-label">NIS</label>
						<div class="col-sm-9">
							<input type="text" name="nis" class="form-control <?php echo ($error_nis !="" ? "is_invalid" : ""); ?>" id="nis" placeholder="NIS" value="<?php echo $nis; ?>"><span class="warning"><?php echo $error_nis; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="nomer_peserta" class="col-sm-3 col-form-label">Nomer Peserta Ujian</label>
						<div class="col-sm-9">
							<input type="text" name="nomer_peserta" class="form-control <?php echo ($error_nomer_peserta !="" ? "is_invalid" : ""); ?>" id="nomer_peserta" placeholder="Nomer Peserta Ujian" value="<?php echo $nomer_peserta; ?>"><span class="warning"><?php echo $error_nomer_peserta; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="paud" class="col-sm-3 col-form-label">Apakah Pernah PAUD?</label>
						<div class="col-sm-9">
							<input type="radio" name="paud" value="Ya">Ya
							<input type="radio" name="paud" value="Tidak">Tidak
							<span class="warning"><?php echo $error_paud; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="tk" class="col-sm-3 col-form-label">Apakah Pernah TK?</label>
						<div class="col-sm-9">
							<input type="radio" name="tk" value="Ya">Ya
							<input type="radio" name="tk" value="Tidak">Tidak
							<span class="warning"><?php echo $error_tk; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="skhun" class="col-sm-3 col-form-label">No. Seri SKHUN Sebelumnya</label>
						<div class="col-sm-9">
							<input type="text" name="skhun" class="form-control <?php echo ($skhun !="" ? "is_invalid" : ""); ?>" id="skhun" placeholder="No. Seri SKHUN Sebelumnya" value="<?php echo $skhun; ?>"><span class="warning"><?php echo $error_skhun; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="ijazah" class="col-sm-3 col-form-label">No. Seri Ijazah Sebelumnya</label>
						<div class="col-sm-9">
							<input type="text" name="ijazah" class="form-control <?php echo ($ijazah !="" ? "is_invalid" : ""); ?>" id="ijazah" placeholder="No. Seri Ijazah Sebelumnya" value="<?php echo $ijazah; ?>"><span class="warning"><?php echo $error_ijazah; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="hobi" class="col-sm-3 col-form-label">Hobi</label>
						<div class="col-sm-9">
							<input type="text" name="hobi" class="form-control <?php echo ($error_hobi !="" ? "is_invalid" : ""); ?>" id="hobi" placeholder="Hobi" value="<?php echo $hobi; ?>"><label>A=Olah Raga, B=Kesenian, C=Membaca, D=Menulis, E=Travelling, F=Lainnya</label><span class="warning"><?php echo $error_hobi; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="citacita" class="col-sm-3 col-form-label">Cita-cita</label>
						<div class="col-sm-9">
							<input type="text" name="citacita" class="form-control <?php echo ($error_citacita !="" ? "is_invalid" : ""); ?>" id="citacita" placeholder="Cita-cita" value="<?php echo $citacita; ?>"><label>A=PNS, B=TNI/POLRI, C=Guru/Dosen, D=Dokter, E=Politikus, F=Wiraswasta, G=Seni/Lukis/Artis/Sejenis, H=Lainnya</label><span class="warning"><?php echo $error_citacita; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
						<div class="col-sm-9">
							<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is_invalid" : ""); ?>" id="nama" placeholder="Nama" value="<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-9">
							<input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
							<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
							<span class="warning"><?php echo $error_jenis_kelamin; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="nisn" class="col-sm-3 col-form-label">NISN</label>
						<div class="col-sm-9">
							<input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is_invalid" : ""); ?>" id="nisn" placeholder="NISN" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="nik" class="col-sm-3 col-form-label">NIK</label>
						<div class="col-sm-9">
							<input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is_invalid" : ""); ?>" id="nik" placeholder="NIK" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
						<div class="col-sm-9">
							<input type="text" name="tempat_lahir" class="form-control <?php echo ($error_tempat_lahir !="" ? "is_invalid" : ""); ?>" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>"><span class="warning"><?php echo $error_tempat_lahir; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
						<div class="col-sm-9">
							<input type="text" name="tanggal_lahir" class="form-control <?php echo ($error_tanggal_lahir !="" ? "is_invalid" : ""); ?>" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>"><label>Contoh: 23-09-2000</label><span class="warning"><?php echo $error_tanggal_lahir; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="agama" class="col-sm-3 col-form-label">Agama</label>
						<div class="col-sm-9">
							<input type="text" name="agama" class="form-control <?php echo ($error_agama !="" ? "is_invalid" : ""); ?>" id="agama" placeholder="Agama" value="<?php echo $agama; ?>"><label>01=Islam, 02=Kristen/Protestan, 03=Katholik, 04=Hindu, 05=Buddha, 06=Khong Hu Chu, 99=Lainnya</label><span class="warning"><?php echo $error_agama; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="berkebutuhan_khusus" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
						<div class="col-sm-9">
							<input type="text" name="berkebutuhan_khusus" class="form-control <?php echo ($error_berkebutuhan_khusus !="" ? "is_invalid" : ""); ?>" id="berkebutuhan_khusus" placeholder="Berkebutuhan Khusus" value="<?php echo $berkebutuhan_khusus; ?>"><label>01=Tidak, 02=Netra (A), 03=Rungu (B), 04=Grahita Ringan (C), 05=Grahita Sedang (C1), 06=Daksa Ringan (D), 07=Daksa Ringan (D1), 08=Laras (E), 09=Wicara (F), 10=Tuna Ganda (G), 11=Hiper Aktif (H), 12=Cerdas Istimewa (i), 13=Bakat Istimewa (J), 14=Kesulitan Belajar (K), 15=Narkoba (N), 16=Indigo (O), 17=Down Sindrome (P), 18=Autis (Q)</label><span class="warning"><?php echo $error_berkebutuhan_khusus; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="alamat" class="col-sm-3 col-form-label">Alamat Jalan</label>
						<div class="col-sm-9">
							<input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is_invalid" : ""); ?>" id="alamat" placeholder="Alamat Jalan" value="<?php echo $alamat; ?>"><span class="warning"><?php echo $error_alamat; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="rt" class="col-sm-3 col-form-label">RT</label>
						<div class="col-sm-9">
							<input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is_invalid" : ""); ?>" id="rt" placeholder="RT" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="rw" class="col-sm-3 col-form-label">RW</label>
						<div class="col-sm-9">
							<input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is_invalid" : ""); ?>" id="rw" placeholder="RW" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="dusun" class="col-sm-3 col-form-label">Dusun</label>
						<div class="col-sm-9">
							<input type="text" name="dusun" class="form-control <?php echo ($error_dusun !="" ? "is_invalid" : ""); ?>" id="dusun" placeholder="Dusun" value="<?php echo $dusun; ?>"><span class="warning"><?php echo $error_dusun; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="desa" class="col-sm-3 col-form-label">Desa/Kelurahan</label>
						<div class="col-sm-9">
							<input type="text" name="desa" class="form-control <?php echo ($error_desa !="" ? "is_invalid" : ""); ?>" id="desa" placeholder="Desa/Kelurahan" value="<?php echo $desa; ?>"><span class="warning"><?php echo $error_desa; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
						<div class="col-sm-9">
							<input type="text" name="kecamatan" class="form-control <?php echo ($error_kecamatan !="" ? "is_invalid" : ""); ?>" id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan; ?>"><span class="warning"><?php echo $error_kecamatan; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="kode_pos" class="col-sm-3 col-form-label">Kode Pos</label>
						<div class="col-sm-9">
							<input type="text" name="kode_pos" class="form-control <?php echo ($error_kode_pos !="" ? "is_invalid" : ""); ?>" id="kode_pos" placeholder="Kode Pos" value="<?php echo $kode_pos; ?>"><span class="warning"><?php echo $error_kode_pos; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="tempat_tinggal" class="col-sm-3 col-form-label">Tempat Tinggal</label>
						<div class="col-sm-9">
							<input type="text" name="tempat_tinggal" class="form-control <?php echo ($error_tempat_tinggal !="" ? "is_invalid" : ""); ?>" id="tempat_tinggal" placeholder="Tempat Tinggal" value="<?php echo $tempat_tinggal; ?>"><label>1=Bersama Orang Tua, 2=Wali, 3=Kos, 4=Asrama, 5=Panti Asuhan, 9=Lainnya</label><span class="warning"><?php echo $error_tempat_tinggal; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="transportasi" class="col-sm-3 col-form-label">Transportasi</label>
						<div class="col-sm-9">
							<input type="text" name="transportasi" class="form-control <?php echo ($error_transportasi !="" ? "is_invalid" : ""); ?>" id="transportasi" placeholder="Transportasi" value="<?php echo $transportasi; ?>"><label>01=Jalan Kaki, 02=Kendaraan Pribadi, 03=Kendaraan Umum/Angkot/Pete-pete, 04=Jemputan Sekolah, 05=Kereta Api, 06=Ojek, 07=Andong/Bendi/Sado/Dokar/Delman/Becak, 08=Perahu Penyeberangan/Rakit/Getek, 99=Lainnya</label><span class="warning"><?php echo $error_transportasi; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="nohp" class="col-sm-3 col-form-label">No. HP</label>
						<div class="col-sm-9">
							<input type="text" name="nohp" class="form-control <?php echo ($error_nohp !="" ? "is_invalid" : ""); ?>" id="nohp" placeholder="No. HP" value="<?php echo $nohp; ?>"><span class="warning"><?php echo $error_nohp; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="email" class="col-sm-3 col-form-label">E-mail Pribadi</label>
						<div class="col-sm-9">
							<input type="text" name="email" class="form-control <?php echo ($error_email !="" ? "is_invalid" : ""); ?>" id="email" placeholder="Email" value="<?php echo $email; ?>"><span class="warning"><?php echo $error_email; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="telp" class="col-sm-3 col-form-label">No. Telepon</label>
						<div class="col-sm-9">
							<input type="text" name="telp" class="form-control <?php echo ($error_telp !="" ? "is_invalid" : ""); ?>" id="telp" placeholder="No. Telp" value="<?php echo $telp; ?>"><span class="warning"><?php echo $error_telp; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="penerima_kps" class="col-sm-3 col-form-label">Penerima KPS/PKH/KIP</label>
						<div class="col-sm-9">
							<input type="radio" name="penerima_kps" value="Ya">Ya
							<input type="radio" name="penerima_kps" value="Tidak">Tidak
							<span class="warning"><?php echo $error_penerima_kps; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="nokps" class="col-sm-3 col-form-label">Nomor KPS/KKS/PKH/KIP</label>
						<div class="col-sm-9">
							<input type="text" name="nokps" class="form-control <?php echo ($error_nokps !="" ? "is_invalid" : ""); ?>" id="nokps" placeholder="Nomor KPS/KKS/PKH/KIP" value="<?php echo $nokps; ?>"><label>* Apabila Menerima (Ketikkan 0 jika tidak menerima)</label><span class="warning"><?php echo $error_nokps; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="kewarganegaraan" class="col-sm-3 col-form-label">Kewarganegaraan</label>
						<div class="col-sm-9">
							<input type="radio" name="kewarganegaraan" value="WNI">WNI
							<input type="radio" name="kewarganegaraan" value="WNA">WNA
							<span class="warning"><?php echo $error_kewarganegaraan; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="nama_negara" class="col-sm-3 col-form-label">Nama Negara</label>
						<div class="col-sm-9">
							<input type="text" name="nama_negara" class="form-control <?php echo ($error_nama_negara !="" ? "is_invalid" : ""); ?>" id="nama_negara" placeholder="Nama Negara" value="<?php echo $nama_negara; ?>"><span class="warning"><?php echo $error_nama_negara; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-9">
							<button type="submit" class="btn btn-primary">Sign in</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php
//Kode untuk menampilkan hasil
	echo "<center><h2>Data yang Anda Masukkan:</h2></center>";
	echo "Jenis Pendaftaran= ". $jenis_pendaftaran;
	echo "<br>";
	echo "Tanggal Masuk Sekolah= ". $tanggal_masuk;
	echo "<br>";
	echo "NIS= ". $nis;
	echo "<br>";
	echo "Nomer Peserta Ujian= ". $nomer_peserta;
	echo "<br>";
	echo "Pernah PAUD= ". $paud;
	echo "<br>";
	echo "Pernah TK= ". $tk;
	echo "<br>";
	echo "No. Seri SKHUN Sebelumnya= ". $skhun;
	echo "<br>";
	echo "No. Seri Ijazah Sebelumnya= ". $ijazah;
	echo "<br>";
	echo "Hobi= ". $hobi;
	echo "<br>";
	echo "Cita-cita= ", $citacita;
	echo "<br>";
	echo "Nama Lengkap= ". $nama;
	echo "<br>";
	echo "Jenis Kelamin= ". $jenis_kelamin;
	echo "<br>";
	echo "NISN= ". $nisn;
	echo "<br>";
	echo "NIK= ". $nik;
	echo "<br>";
	echo "Tempat Lahir= ". $tempat_lahir;
	echo "<br>";
	echo "Tanggal Lahir= ". $tanggal_lahir;
	echo "<br>";
	echo "Agama= ". $agama;
	echo "<br>";
	echo "Berkebutuhan Khusus= ". $berkebutuhan_khusus;
	echo "<br>";
	echo "Alamat Jalan= ". $alamat;
	echo "<br>";
	echo "RT= ". $rt;
	echo "<br>";
	echo "RW= ". $rw;
	echo "<br>";
	echo "Dusun= ". $dusun;
	echo "<br>";
	echo "Desa/Kelurahan= ". $desa;
	echo "<br>";
	echo "Kecamatan= ". $kecamatan;
	echo "<br>";
	echo "Kode Pos= ". $kode_pos;
	echo "<br>";
	echo "Tempat Tinggal= ". $tempat_tinggal;
	echo "<br>";
	echo "Transportasi= ". $transportasi;
	echo "<br>";
	echo "No. HP= ". $nohp;
	echo "<br>";
	echo "E-mail Pribadi= ". $email;
	echo "<br>";
	echo "No. Telepon= ". $telp;
	echo "<br>";
	echo "Penerima KPS/PKH/KIP= ". $penerima_kps;
	echo "<br>";
	echo "Nomor KPS/KKS/PKH/KIP= ". $nokps;
	echo "<br>";
	echo "Kewarganegaraan= ". $kewarganegaraan;
	echo "<br>";
	echo "Nama Negara= ". $nama_negara;
	echo "<br>";	
	echo "<br>";

	//Menampilkan pesan sukses jika sudah berhasil menyimpan data
	echo $pesan_sukses;
?>
</body>
</html>
