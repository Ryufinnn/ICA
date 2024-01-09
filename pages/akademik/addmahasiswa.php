<script>
function validateForm()
{
var x=document.forms["form1"]["nim"].value;
var x1=document.forms["form1"]["nama"].value;
var x2=document.forms["form1"]["umur"].value;
var x3=document.forms["form1"]["photo"].value;
var x4=document.forms["form1"]["alamat"].value;
if (x==null || x=="")
  {
  alert("Isi Nama Nasabah");
  return false;
  }
if (x1==null || x1=="")
  {
  alert("Isi Jenis Kelamin");
  return false;
  }
  if (x2==null || x2=="")
  {
  alert("Isi No Hp");
  return false;
  }
  if (x4==null || x4=="")
  {
  alert("Masukkan Alamat");
  return true;
  }
  if (x3==null || x3=="")
  {
  alert("Photo tidak ada,dipilih secara default");
  return true;
  x3="default";
  }
}
</script>
<?php
ob_start();
?>
<form method="post" class="form-horizontal" name="form1" id="form1" enctype="multipart/form-data" onsubmit="return validateForm()"  />
<div class="control-group">
<label class="control-label">Nama Nasabah</label>
<div class="controls">
<input type="text" name="nim" id="nim">
</div>
</div>
<div class="control-group">
<label class="control-label">Jenis Kelamin</label>
<div class="controls">
<select name="nama"><option value="">Silahkan Pilih</option><option value="Laki-laki">Laki-Laki</option><option value="Perempuan">Perempuan</option>
</select>
</div>
</div>
<div class="control-group">
<label class="control-label">Umur</label>
<div class="controls">
<input type="text" name="umur" id="umur" class="input-small"> 
</div>
</div>
<div class="control-group">
<label class="control-label">No Hp</label>
<div class="controls">
<input type="text" name="nohp" id="nohp" >&nbsp;
</div>
</div>
<div class="control-group">
<label class="control-label">Alamat</label>
<div class="controls">
<input type="text" name="alamat" id="alamat" >&nbsp;
</div>
</div>
<div class="control-group">
<label class="control-label">Pendapatan</label>
<div class="controls">
<input type="text" name="pendapatan" id="pendapatan" >
</div>
</div>

<div class="control-group">
<label class="control-label">Jaminan</label>
<div class="controls">
<select name="jurusan"><option value="">Silahkan Pilih</option><option value="Sertifikat/BPKB">Sertifikat/BPKB</option><option value="SK Pegawai">SK Pegawai</option>
</select>
</div>
</div>
<div class="control-group">
<label class="control-label">Pekerjaan</label>
<div class="controls">
<input type="text" name="pekerjaan" id="pekerjaan" >&nbsp;
</div>
</div>
<div class="control-group">
<label class="control-label">Pinjaman</label>
<div class="controls">
<input type="text" name="pinjaman" id="pinjaman" > Juta
</div>
</div>

<div class="control-group">
<label class="control-label">Jangka Waktu Kredit</label>
<div class="controls">
<select name="jangka"><option value="">Silahkan Pilih</option><option value="3-5 Tahun">3-5 Tahun</option><option value="6-7 Tahun">6-7 Tahun</option>
<option value="8-10 Tahun">8-10 Tahun</option><option value="14-15 Tahun">14-15 Tahun</option><option value="20 Tahun">20 Tahun</option>
</select>
</div>
</div>
<div class="control-group">
<label class="control-label">Npwp</label>
<div class="controls">
<input type="text" name="npwp" id="npwp" >
</div>
</div>
<div class="control-group">
<label class="control-label">No KTP</label>
<div class="controls">
<input type="text" name="ktp" id="ktp" >
</div>
</div>
<div class="control-group">
<label class="control-label">Legalitas Operasional Usaha</label>
<div class="controls">
<input type="text" name="legal" id="legal" >
</div>
</div>

<div class="control-group">
<label class="control-label">Status</label>
<div class="controls">
<select name="status"><option value="">Silahkan Pilih</option><option value="Menikah">Menikah</option><option value="Belum Menikah">Belum Menikah</option>
<option value="Cerai">Cerai</option>
</select>
</div>
</div>
<div class="control-group">
<label class="control-label">Jumlah Anggota Keluarga</label>
<div class="controls">
<input type="text" name="keluarga" id="keluarga" >&nbsp;Orang
</div>
</div>

<div class="control-group">
<label class="control-label">Kedisiplinan</label>
<div class="controls">
<select name="disiplin"><option value="">Silahkan Pilih</option><option value="Sangat Baik">Sangat Baik</option><option value="Baik">Baik </option>
<option value="Kurang Baik">Kurang Baik </option>
</select>
</div>
</div>

<div class="control-group">
<div class="controls">
<input type="submit" name="simpan" class="btn btn-medium btn-primary" value="Simpan Data" /> 
&nbsp;&nbsp;&nbsp;<a href="?cat=akademik&page=mahasiswa" class="btn btn-medium btn-warning">Kembali</a> 
</div>
</div>
<?php
if(isset($_POST['simpan']))
{
	$eks=$_POST['ext'];
	$namabaru=$_POST['nim'].".".$eks;		
	
	$upload_dir = $path_web."uploads/mahasiswa/";

	if($_POST['photo']!="")
	{
		if (file_exists($upload_dir) && is_writable($upload_dir)) {
	file_put_contents($upload_dir.$namabaru,fopen($_POST['photo'], 'r'));	
		}else {
			echo 'Upload directory is not writable, or does not exist.';
		}
	}
	
$na=$_POST["pinjaman"] ;
$no=$_POST["pendapatan"] ;
$ni=$_POST["keluarga"] ;

if ($na >= 300 && $no >= 5000000 && $ni >= 1  )
{
$nh = 'Disetujui' ;
}
else if ($na >= 300 && $no < 5000000  )
{
$nh = 'Tidak Disetujui' ;
}
else if ($na >= 100 && $no < 5000000 && $ni < 3  )
{
$nh = ' Disetujui' ;
}
else if ($na >= 100 && $no < 5000000 && $ni > 2 )
{
$nh = 'Tidak Disetujui' ;
}

else if ($na >= 50 )
{
$nh = 'Disetujui' ;
}
else if ($na = 0 )
{
$nh = 'Jumlah Pinjaman Kosong' ;
}



	$q=mysql_query("Insert into mahasiswa values ('".$_POST['nim']."','".$_POST['nama']."','".$_POST['umur']."','".$_POST['nohp']."','".$_POST['alamat']."','".$_POST['pendapatan']."','".$_POST['jurusan']."','".$_POST['pekerjaan']."','".$_POST['pinjaman']."','".$_POST['jangka']."','".$_POST['npwp']."','".$_POST['ktp']."','".$_POST['legal']."','".$_POST['status']."','".$_POST['keluarga']."','".$_POST['disiplin']."','".$nh."','".$namabaru."')");
	if($q)
	{
		echo "<script>alert('Berhasil ditambahkan')</script>";
	}
}
?>
<?php
ob_end_flush();
?>
