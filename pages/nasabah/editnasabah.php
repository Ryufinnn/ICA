<script>
function validateForm()
{
var x=document.forms["form1"]["kode"].value;
var x1=document.forms["form1"]["nama"].value;
var x2=document.forms["form1"]["umur"].value;
var x3=document.forms["form1"]["photo"].value;
if (x==null || x=="")
  {
  alert("Isi Nomor Induk nasabah");
  return false;
  }
if (x1==null || x1=="")
  {
  alert("Isi Nama nasabah");
  return false;
  }
  if (x2==null || x2=="")
  {
  alert("Isi Umur nasabah");
  return false;
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
$ids=$_GET['id'];
$q=mysql_query("Select * from nasabah where sha1(kode)='".$ids."'");
$r=mysql_fetch_array($q);
?>
<form method="post" class="form-horizontal" name="form1" id="form1" enctype="multipart/form-data" onsubmit="return validateForm()"  />
<div class="control-group">
<label class="control-label">Nama Nasabah</label>
<div class="controls">
<input name="kode" type="text" id="kode" value="<?php echo $r['kode']; ?>" readonly>
</div>
</div>
<div class="control-group">
<label class="control-label">Jenis Kelamin</label>
<div class="controls">
<input type="text" name="nama" id="nama" value="<?php echo $r['nama']; ?>" class="input-xlarge">
</div>
</div>
<div class="control-group">
<label class="control-label">Umur</label>
<div class="controls">
<input type="text" name="umur" id="umur" value="<?php echo $r['umur']; ?>" class="input-small">&nbsp;
</div>
</div>
<div class="control-group">
<label class="control-label">Alamat</label>
<div class="controls">
<input type="text" name="alamat" id="alamat" value="<?php echo $r['alamat']; ?>" class="input-small">&nbsp;
</div>
</div>
<div class="control-group">
<label class="control-label">Pendapatan</label>
<div class="controls">
<input type="text" name="pendapatan" id="pendapatan" value="<?php echo $r['pendapatan']; ?>" class="input-small">&nbsp;
</div>
</div>
<div class="control-group">
<label class="control-label">Jaminan</label>
<div class="controls">
<input type="text" name="jurusan" id="jurusan" value="<?php echo $r['jaminan']; ?>" class="input-small">&nbsp;
</div>
</div>
<div class="control-group">
<label class="control-label">Pekerjaan</label>
<div class="controls">
<input type="text" name="pekerjaan" id="pekerjaan" value="<?php echo $r['pekerjaan']; ?>" class="input-small">&nbsp;
</div>
</div>

<div class="control-group">
<label class="control-label">Pinjaman</label>
<div class="controls">
<input type="text" name="pinjaman" id="pinjaman" value="<?php echo $r['pinjaman']; ?>" class="input-small">&nbsp;
</div>
</div>
<div class="control-group">
<div class="controls">
<input type="submit" name="simpan" class="btn btn-medium btn-primary" value="Simpan Data" />
&nbsp;&nbsp;&nbsp;<a href="?cat=nasabah&page=nasabah" class="btn btn-medium btn-primary">Kembali</a> 
</div>
</div>
<?php
if(isset($_POST['simpan']))
{
	$eks=$_POST['ext'];
	$namabaru=$_POST['kode'].".".$eks;		
	
	$upload_dir = $path_web."uploads/nasabah/";

	if($_POST['photo']!="")
	{
		if (file_exists($upload_dir) && is_writable($upload_dir)) {
	file_put_contents($upload_dir.$namabaru,fopen($_POST['photo'], 'r'));	
		
		}else {
			echo 'Upload directory is not writable, or does not exist.';
		}
		$q=mysql_query("Update nasabah SET nama='".$_POST['nama']."',umur='".$_POST['umur']."',alamat='".$_POST['alamat']."',pendapatan='".$_POST['pendapatan']."',jaminan='".$_POST['jurusan']."',pekerjaan='".$_POST['pekerjaan']."',pinjaman='".$_POST['pinjaman']."' Where kode='".$ids."'") or die(mysql_error());
		if($q)
		{
			echo "<script>alert('Berhasil diubah');window.location='?cat=nasabah&page=nasabah'</script>";
		}
	}else{
		$q=mysql_query("Update nasabah SET nama='".$_POST['nama']."',umur='".$_POST['umur']."',jaminan='".$_POST['jurusan']."',pekerjaan='".$_POST['pekerjaan']."',pinjaman='".$_POST['pinjaman']."' Where kode='".$_POST['kode']."'") or die(mysql_error());
		if($q)
		{
		echo "<script>alert('Berhasil diubah');window.location='?cat=nasabah&page=nasabah'</script>";
		}
	}
	
	
}
?>
<?php
ob_end_flush();
?>
