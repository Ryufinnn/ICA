<body onLoad="javascript:window:print()">
 <?php
  include("_db.php");
  $rw=mysql_query("select * from mahasiswa where nim='$_GET[id]'");
  while($s=mysql_fetch_array($rw))
  {
  ?>
<div align="center">
<h2>Laporan Hasil Pemberian Pinjaman Data Nasabah </h2>
<h2>Bank Nagari Cabang Koto Baru Tahun 2016</h2>

</div>
<br><br>
<div class='view'>
<table class='view' width='80%'>

<tr><td>Nama Nasabah</td><td>:</td><td><?php echo $s['nim']; ?></td></tr>
    <tr><td>Jenis Kelamin</td><td>:</td><td><?php echo $s['nama']; ?></td></tr>
    <tr><td>No Hp</td><td>:</td><td><?php echo $s['nohp']; ?></td></tr>
	<tr><td>Alamat</td><td>:</td><td><?php echo $s['alamat']; ?></td></tr>
    <tr><td>Pendapatan</td><td>:</td><td>Rp.<?php echo $s['pendapatan']; ?>,-</td></tr>
	<tr><td>Jaminan</td><td>:</td><td><?php echo $s['kode_jurusan']; ?></td></tr>
	<tr><td>Pekerjaan</td><td>:</td><td><?php echo $s['pekerjaan']; ?></td></tr>
	<tr><td>Pinjaman</td><td>:</td><td><?php echo $s['pinjaman']; ?>&nbsp;juta</td></tr>
	<tr><td>Hasil</td><td>:</td><td><?php echo $s['hasil']; ?></td>		   </tr>
	 <?php
  }
  ?>
</table>  
<br><br><br>
<?php
echo "<table align='right'>";
$tgl = date('d M Y');
echo "<tr><td>Koto Baru, $tgl</td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td><em>Kepala Cabang Bank Nagari Koto Baru</em></td></tr>";

?>
</div>	                           

