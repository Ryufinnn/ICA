<div align="left">
<h1>Data Nasabah</h1>
</div>

<div align="right">
<button class="btn btn-medium btn-primary" type="button" onClick="window.location='?cat=akademik&page=addmahasiswa'">Tambah Data</button>

</div>
<span class="span4">
<table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-bordered table-striped">
  <tr>
    <td width="195" ><strong>Nama Nasabah</strong></td>
    <td width="58"><strong>Jenis Kelamin</strong></td>
	 <td width="40"><strong>NoHp</strong></td>
	   <td width="68"><strong>Alamat</strong></td>
    <td width="111"><strong>Pendapatan</strong></td> 
    <td width="76"><strong>Jaminan</strong></td>
    <td width="96"><strong>Pekerjaan</strong></td>
	<td width="86"><strong>Pinjaman</strong></td>
	<td width="226"><strong>Jangka Waktu</strong></td>     
	<td width="223"><strong>Status</strong></td>         
    <td width="114"><strong>Aksi</strong></td>
  </tr>
  <?php
  $rw=mysql_query("select * from mahasiswa ");
  while($s=mysql_fetch_array($rw))
  {
  ?>
  <tr>
    <td><?php echo $s['nim']; ?></td>
    <td><?php echo $s['nama']; ?></td>
    <td><?php echo $s['nohp']; ?></td>
	<td><?php echo $s['alamat']; ?></td>
    <td>Rp.<?php echo $s['pendapatan']; ?>,-</td>
	<td><?php echo $s['kode_jurusan']; ?></td>
	<td><?php echo $s['pekerjaan']; ?></td>
	<td><?php echo $s['pinjaman']; ?> Juta</td>
	<td><?php echo $s['jangka']; ?></td>
	<td><?php echo $s['status']; ?></td>
   
    <td><a href="?cat=akademik&page=editmahasiswa&id=<?php echo sha1($s['nim']); ?>" class="btn btn-medium btn-primary">Edit</a>  <br><a href="?cat=akademik&page=mahasiswa&del=1&id=<?php echo sha1($s['nim']); ?>" class="btn btn-medium btn-warning">Hapus</a></td>
  </tr>
  <?php
  }
  ?>
</table>
<p><a href="?cat=akademik&page=proses" class="btn btn-medium btn-info">Proses SPK </a></p>
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