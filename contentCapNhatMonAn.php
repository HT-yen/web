<?php
$namese=$_REQUEST['namese'];
$idxoa="";
if(isset($_REQUEST['idxoa'])) 
 $idxoa=$_REQUEST['idxoa'];
echo '<input type="button" value="Thêm Món Ăn"  onclick="themmonan()"><br><br>';
$link=mysqli_connect("localhost",'root','1234',"databasecnw");
   if($idxoa!="")
   {
    $sql="delete from monan where id_monan=".$idxoa;
    mysqli_set_chaset($link,'utf8');
    $result=mysqli_query($link,$sql);
        if($result){
             echo "<span style='color:red;margin_top:20'>xoa thanh cong</span><br/><br/>";
           }
         else  echo "<span style='color:red;margin_top:20'>xoa that bai</span><br/><br/>";
   }
    if($namese=='0') 
      {
         $sql="select * from monan order by ten_monan ASC";//sắp xếp tăng dần theo họ tên
         echo 'Search: <input type="text" name="se"  onchange="ca(this.value)">';
      }
   else  
      {
         $sql="select * from monan where ten_monan like '%".$namese."%' order by ten_monan ASC";
         echo 'Search: <input type="text" name="se" value="'.$namese.'"  onchange="ca(this.value)" >';
      }
   mysqli_set_charset($link,"utf8");
   $result=mysqli_query($link,$sql);
   echo '<table border="1" width ="100%">';
         echo '<caption><h2>Danh sách cập nhật món ăn</h2></caption>';
         echo '<TR><TH>id_monan</TH><TH>Tên món ăn</TH><TH>avt_monan</TH><TH>Giá tiền</TH><TH>sửa</TH><TH>xóa</TH></TR>';
   while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
      $a=$row{'id_monan'};
      $b=$row{'ten_monan'};
      $c=$row{'avt_monan'};
      $d=$row{'giatien'};
      echo '<TR><TH>'.$a.'</TH><TH>'.$b.'</TH><TH>'.$c.'</TH><TH>'.$d.'</TH><TH><input type="button" value="sửa" onclick="sua(\''.$a.'\')"></TH><TH><input type="button" value="xóa" onclick="xoa(\''.$a.'\')"></TH></TR>';
   }
   echo '</table>';
?>
<script src="js/jquery-latest.js">
     
    //path of use JQuery 
</script>
<script language="JavaScript">
function themmonan()
{
  $("div#showcontent").load("themmonan.php");
}
function ca(val)
{
$("div#showcontent").load("contentCapNhatMonAn.php?namese="+val);
}
function sua(id)
{
$("div#showcontent").load("editMonAn.php?id_monan="+id+"&namese=<?php echo $namese; ?>");
}
function xoa(id)
{
if(confirm("confirm detele")) $("div#showcontent").load("xoaMonAn.php?id_monan="+id+"&namese=<?php echo $namese;?>");
}
</script>