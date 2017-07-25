<?php
 $namese=$_REQUEST['namese']; 
 $idhdtt="";
 $idhdxoa="";
 if(isset($_REQUEST['idhdtt'])) 
  $idhdtt=$_REQUEST['idhdtt'];
if(isset($_REQUEST['idhdxoa'])) 
  $idhdxoa=$_REQUEST['idhdxoa'];
  ?>

<script src="js/jquery-latest.js">
     
    //path of use JQuery 
</script>
<script language="JavaScript">
function themhoadon()
{
$("div#showcontent").load("themhoadon.php");
}
/*thêm k cần tham số namese vì nếu thêm vào thì nếu tên bàn k khớp vs namese thì nó k show ra nên mình k biết thêm vào dc k*/
function ca(val)
{
$("div#showcontent").load("quanlyhoadon.php?namese="+val);
}

function xoa(id)
{
if(confirm("confirm detele")) $("div#showcontent").load("quanlyhoadon.php?idhdxoa="+id+"&namese=<?php echo $namese;?>");
}
function sua(id)
{
   $("div#showcontent").load("editHoaDon.php?id_hoadon="+id+"&namese=<?php echo $namese;?>");
}
function chitiet(id)
{
   $("div#showcontent").load("detailHoaDon.php?id_hoadon="+id+"&namese=<?php echo $namese;?>");
}
function thanhtoan(id)
{
   $("div#showcontent").load("thanhtoanHoaDon.php?id_hoadon="+id+"&namese=<?php echo $namese;?>");
}
</script>
<?php
$loi=0;
$link=mysqli_connect('localhost','root','1234',"databasecnw");

try{
if($idhdtt!="")
{
    $sql="update hoadon set tinhtrangthanhtoan=1,thoigianketthuc=now() where id_hoadon=".$idhdtt;
    mysqli_set_charset($link,"utf8");
      $result1=mysqli_query($link, $sql);
      if($result1){
              echo "<span style='color:red;margin_top:20'>thanh toan thanh cong</span><br/>";
       }
       else echo "<span style='color:red;margin_top:20'>thanh toan that bai</span><br/>";
}
 if($idhdxoa!=""){
         $sql="delete from hoadon where id_hoadon=".$idhdxoa;
          mysqli_set_charset($link,"utf8");
          $result=mysqli_query($link,$sql);
        if($result){
             echo "<span style='color:red;margin_top:20'>xoa thanh cong</span>";
           }
         else  echo "<span style='color:red;margin_top:20'>xoa that bai</span>";
}

echo '<input type="button" value="Thêm hóa đơn" onclick="themhoadon()"><br><br>';

   // echo $namese;
   if($namese=='0') {
      $sql="select * from hoadon order by tinhtrangthanhtoan, soban";
         /*sắp xếp theo trinh trạng thanh toán trc.. quá đơn nào chưa thanh toán thì tình trạng thanh toán =0 thì hiển thị trc.. sau đó xắp xếp theo số bàn*/
       echo 'Search: <input type="text" name="se" onchange="ca(this.value)">';
   }
   else  
      {
         $sql="select * from hoadon where soban like '%".$namese."%' order by tinhtrangthanhtoan, soban";
         echo 'Search: <input type="text" name="se" value="'.$namese.'" onchange="ca(this.value)" >';
      }
   // echo $sql;
   $result=mysqli_query($link,$sql);
   echo '<table border="1" width ="100%" >';
         echo '<caption><h3>Dữ liệu hóa đơn </h3></caption>';
         echo '<TR><TH>id_hoadon</TH><TH>Số bàn</TH><TH>thời gian bắt đầu</TH><TH>Thời gian kết thúc</TH><TH>Tình trạng thanh toán</TH><TH>sua</TH><TH>xoa</TH><TH>chi tiết</TH></TR>';
   while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
      $a=$row{'id_hoadon'};
      $b=$row{'soban'};
      $c=$row{'thoigianbatdau'};
      $d=$row{'thoigianketthuc'};
      $e=$row{'tinhtrangthanhtoan'};
      if($e==0)//chưa thanh toán
      echo '<TR><TH>'.$a.'</TH><TH>'.$b.'</TH><TH>'.$c.'</TH><TH>'.$d.'</TH>
      <TH><input type="button" value="Thanh toán" onclick="thanhtoan(\''.$a.'\')"></TH>
      <TH><input type="button" value="sửa" onclick="sua(\''.$a.'\')"></TH>
      <TH><input type="button" value="xóa" onclick="xoa(\''.$a.'\')"></TH>
      <TH><input type="button" value="Chi tiết" onclick="chitiet(\''.$a.'\')"></TH></TR>';

      else //đã thanh toán
         echo '<TR><TH>'.$a.'</TH><TH>'.$b.'</TH><TH>'.$c.'</TH><TH>'.$d.'</TH>
         <TH>Đã thanh toán</TH>
      <TH><input type="button" value="sửa" onclick="sua(\''.$a.'\')"></TH>
      <TH><input type="button" value="xóa" onclick="xoa(\''.$a.'\')"></TH>
      <TH><input type="button" value="Chi tiết" onclick="chitiet(\''.$a.'\')"></TH></TR>';
   }
   echo '</table>';
}
catch(Exception $e1){}

?>