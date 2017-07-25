<?php 
$id_hoadon=$_REQUEST['id_hoadon'];
$namese=$_REQUEST['namese'];
 ?>
<script src="js/jquery-latest.js">
     
    //path of use JQuery 
</script>
<script language="JavaScript">
function chonmon()
{
  id_monan= $("#id_chonmonan").find(":selected").val();
  id_soluongmon=$("#id_soluongmon").val();
  if(id_soluongmon=="") alert("Bạn nhập số lượng món ăn");
  else $("div#showcontent").load("chonmon.php?id_hoadon=<?php echo $id_hoadon;?>&id_monan="+id_monan+"&id_soluongmon="+id_soluongmon+"&namese=<?php echo $namese;?>");
}
function xoa(id)
{
//chú ý gửi qua url k dc gửi tên vì nó là tiếng việt  phải gửi k dấu ms được
    $("div#showcontent").load("xoamonanhoadon.php?id_hoadon=<?php echo $id_hoadon;?>&id_dichvu="+id+"&namese=<?php echo $namese;?>");
}
function quaylai()
{
   $("div#showcontent").load("quanlyhoadon.php?namese=<?php echo $namese;?>");
}

</script>
<?php
$link=mysqli_connect("localhost",'root','1234',"databasecnw");
echo 'Món: <select id="id_chonmonan">';
      $sql="select * from monan" ;
      mysqli_set_charset($link,"utf8");
      $result=mysqli_query($link,$sql); 

      while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
      $x=$row{'id_monan'};
      $y=$row{'ten_monan'};
      echo '<option value="'.$x.'">'.$y.'</option>';
      }

echo '</select><br>
Số lượng: <input type="text" value="1" id="id_soluongmon"><br>
<input type="button" value="Chọn món" onclick="chonmon()">';

   $sql="select * from chitiethoadon where id_hoadon=".$id_hoadon;
   mysqli_set_charset($link,"utf8");
   $result=mysqli_query($link,$sql);
   echo '<table border="1" width ="100%" >';
         echo '<caption><h3>Dữ liệu hóa đơn </h3></caption>';
         echo '<TR><TH>id_dichvu</TH><TH>id_hoadon</TH><TH>Tên món ăn</TH><TH>Số lượng</TH><TH>Giá(K)</TH><TH>Xóa</TH></TR>';
         $tongtien=0;
   while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
      $z=$row{'id_dichvu'};
      $a=$row{'id_hoadon'};
      $b=$row{'ten_monan'};
      $c=$row{'soluong'};
      $d=$row{'gia'};   
      $tongtien+=$d;
      echo '<TR><TH>'.$z.'</TH><TH>'.$a.'</TH><TH>'.$b.'</TH><TH>'.$c.'</TH><TH>'.$d.'</TH>
      <TH><input type="button" value="xóa" onclick="xoa(\''.$z.'\')"></TH></TR>';
   }
   echo '<TR><TH>Tổng cộng</TH><TH colspan="5">'.$tongtien.'</TH></TR></table>
   <br><br>
   <input type="button" value="Quay lại hóa đơn" onclick="quaylai()">';
  

?>