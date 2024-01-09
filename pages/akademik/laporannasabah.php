<div align="center">
<h2>Laporan Hasil Pemberian Pinjaman Data Nasabah </h2>
<h2>Bank Nagari Cabang Koto Baru Tahun 2016</h2>

</div>
<br>

<span class="span4">
<table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped" align="center">
  <tr>
    <td width="200" >Nama Nasabah</td>
    <td width="116">Jenis Kelamin</td>
	 <td width="39">NoHp</td>
	   <td width="77">Alamat</td>
    <td width="126">Pendapatan</td> 
    <td width="86">Jaminan</td>
    <td width="109">Pekerjaan</td>
	<td width="98">Pinjaman</td>
	<td width="98">Keterangan</td>
	<td width="98">Aksi</td>
	            
    
  </tr>
  <?php
  $rw=mysql_query("select * from mahasiswa ");
  while($s=mysql_fetch_array($rw))
  {
 
  ?>
  <tr>
    <td><?php echo $s['nim']; ?></td>
    <td><?php echo $s['nama']; ?></td>
    <td><?php echo $s['umur']; ?></td>
	<td><?php echo $s['alamat']; ?></td>
    <td>Rp.<?php echo $s['pendapatan']; ?>,-</td>
	<td><?php echo $s['kode_jurusan']; ?></td>
	<td><?php echo $s['pekerjaan']; ?></td>
	<td><?php echo $s['pinjaman']; ?>&nbsp;juta</td>
	<?php 
											if($s['hasil'] == 'Tidak Disetujui'  ){
											?>	
											 <td bgcolor="red"><font color="red"><?php echo $s['hasil'];?></font></td>	
											<?php 
											}else{
											?>
											 <td><?php echo $s['hasil'];?></td>
											<?php 	
											}
											?>
	<td><a href="cetak_s.php?id=<?php echo $s[nim];?>" target="_blank" class="btn btn-medium btn-info">Cetak</a></td>
   
  </tr>
  <?php
  }
  ?>
</table>
<p><a href="cetak.php" class="btn btn-medium btn-primary" target="_blank">Cetak Laporan </a></p>
</span>
<?php
if(isset($_GET['del']))
{
	$ids=$_GET['id'];
	$ff=mysql_query("Delete from mahasiswa Where sha1(nim)='".$ids."'");
	if($ff)
	{
		echo "<script>window.location='?cat=akademik&page=mahasiswa'</script>";
	}
}
?>
	<script type="text/javascript">
$(document).ready(function()
{
$("div.lightbox").bind("shown",function()
{
console.log("Shown Event",$(this).attr('id'));
});
});
</script>
<br>
 <br>
<br>


