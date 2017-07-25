<?php 
$id_hoadon=$_REQUEST['id_hoadon'];
$namese=$_REQUEST['namese'];
$loi="0";
 ?>
<script src="js/jquery-latest.js">
     
    //path of use JQuery 
</script>
<script language="JavaScript">
function quaylai()
{	
   $("div#showcontent").load("quanlyhoadon.php?namese=<?php echo $namese;?>&idhdtt=<?php echo $id_hoadon;?>");
}
function cancel()
{    
   $("div#showcontent").load("quanlyhoadon.php?namese=<?php echo $namese;?>");
}

</script>
<?php
$link=mysqli_connect("localhost",'root','1234',"databasecnw");

   $sql="select * from chitiethoadon where id_hoadon=".$id_hoadon;
   mysqli_set_charset($link,"utf8");
   $result=mysqli_query($link,$sql);
   echo '<table border="1" width ="100%" >';
         echo '<caption><h3>Dữ liệu hóa đơn </h3></caption>';
         echo '<TR><TH>id_dichvu</TH><TH>id_hoadon</TH><TH>Tên món ăn</TH><TH>Số lượng</TH><TH>Giá(K)</TH></TR>';
         $tongtien=0;
   while ($row=mysqli_fetch_array($result,MYSQL_ASSOC)) {
      $z=$row{'id_dichvu'};
      $a=$row{'id_hoadon'};
      $b=$row{'ten_monan'};
      $c=$row{'soluong'};
      $d=$row{'gia'};   
      $tongtien+=$d;
      echo '<TR><TH>'.$z.'</TH><TH>'.$a.'</TH><TH>'.$b.'</TH><TH>'.$c.'</TH><TH>'.$d.'</TH></TR>';
   }
   echo '<TR><TH>Tổng cộng</TH><TH colspan="5">'.$tongtien.'</TH></TR></table>
   <br><br>
   <input type="button" value="Thanh toán" onclick="quaylai()">
   <input type="button" value="Cancel" onclick="cancel()">
   </body>';

?>