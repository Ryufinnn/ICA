<html>
<head>
<script language="javascript">
<!--
var image1=new Image()
image1.src="img/b.jpg"
var image2=new Image()
image2.src="img/c.jpg"
var image3=new Image()
image3.src="img/a.jpg"
//-->
</script>
</head>
<body>
<left><img src="images.jpg" name="slide" width="585" height="300">
<script>
<!--
//variable yang akan menaikan hitungan gambar
var step=1
function slideit(){
//jika browser tidak mendukung metode dokumen.image maka keluar.
if (!document.images)
return
document.images.slide.src=eval("image"+step+".src")
if (step<3)
step++
else
step=1
//memanggil function "slideit()" setiap 3 detik
setTimeout("slideit()",3000)
}
slideit()
//-->
</script>

</body>
</html>
