<?php 
$id_dichvu=$_REQUEST['id_dichvu'];
$id_hoadon=$_REQUEST['id_hoadon'];
$namese=$_REQUEST['namese'];
$loi=0;
$link=mysqli_connect("localhost",'root','1234',"databasecnw");

try{

    $sql="delete from chitiethoadon where id_dichvu='".$id_dichvu."' and id_hoadon=".$id_hoadon;
    echo $sql;
    mysqli_set_charset($link,"utf8");
    $result=mysqli_query($link,$sql); 
    if($result) {
    }
   else $loi=1;
}
catch(Exception $e)
{
  $loi=1;
}
 ?>
<script src="js/jquery-latest.js">
     
</script>
<script language="JavaScript">
$(document).ready(function() {
  loi=<?php echo $loi;?>;
  if(loi==1) alert("Lỗi xảy ra! thử lại!");
  else   alert("Xóa thành công!");
  $("div#showcontent").load("detailHoaDon.php?id_hoadon=<?php echo $id_hoadon;?>&namese=<?php echo $namese;?>");
    });
//thêm xong là trở về detailHoaDon ngay
</script>