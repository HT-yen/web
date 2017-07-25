<?php
  $xoa="0";
  $namese="0";
  if(isset($_REQUEST['namese'])) 
 $namese=$_REQUEST['namese'];
 if(isset($_REQUEST['xoa']))
 $xoa=$_REQUEST['xoa'];
echo '<div style="margin-left:40px">';
echo '<input type="button" value="Thêm nhân viên" onclick="themnhanvien()" style="margin-top:5px"><br><br>';
$link=mysqli_connect("localhost",'root','1234',"databasecnw");
   if($xoa=='1'){
         $sql="delete from nhanvien where IDNV=".$_REQUEST['id_nhanvien'];
         mysqli_set_charset($link,"utf8");
          $result=mysqli_query($link,$sql);
        if($result){
             echo "<span style='color:red;margin_top:20'>xoa thanh cong</span><br/><br/>";
           }
         else  echo "<span style='color:red;margin_top:20'>xoa that bai</span><br/><br/>";
      }
      
   if($namese=='0') 
      {
         $sql="select * from nhanvien order by Hoten ASC";//sắp xếp tăng dần theo họ tên
         echo 'Search: <input type="text" name="se" onchange="ca(this.value)">';
      }
   else  
      {
         $sql="select * from nhanvien where Hoten like '%".$namese."%' order by Hoten ASC";
         echo 'Search: <input type="text" name="se" value="'.$namese.'" onchange="ca(this.value)" >';
      }
   // echo $sql;
      mysqli_set_charset($link,"utf8");
   $result=mysqli_query($link,$sql);
   echo '<table border="1" width ="100%">';
         echo '<caption style="color:blue;font-size:30px"><h3>Dữ liệu nhân viên nhà hàng</h3></caption>';
         echo '<TR  bgcolor="#66CC99"><TH>IDNV</TH><TH>Họ tên</TH><TH>Địa chỉ</TH><TH>Sđt</TH><TH>User</TH><TH>Pass</TH><TH>sua</TH><TH>xoa</TH></TR>';
   while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
      $a=$row{'IDNV'};
      $b=$row{'Hoten'};
      $c=$row{'Diachi'};
      $d=$row{'sdt'};
      $e=$row{'user'};
      $f=$row{'pass'};
      echo '<TR><TH>'.$a.'</TH><TH>'.$b.'</TH><TH>'.$c.'</TH><TH>'.$d.'</TH><TH>'.$e.'</TH><TH>'.$f.'</TH><TH><input type="button" value="sửa" onclick="sua(\''.$a.'\',\''.$e.'\')">
      </TH><TH><input type="button" value="xoa" onclick="xoa(\''.$a.'\')"></TH></TR>';
   }
   echo '</table></body>';
   echo '</div>';
?>
<script src="js/jquery-latest.js">
     
</script>
<script language="JavaScript">
function themnhanvien()
{
$("div#showcontent").load("themnhanvien.php");
}

function ca(val)
{
$("div#showcontent").load("quanlynhanvien.php?namese="+val);
}
function xoa(id)
{
   if(confirm("confirm detele")) $("div#showcontent").load("quanlynhanvien.php?id_nhanvien="+id+"&xoa="+"1"+"&namese=<?php echo $namese;?>");
}
function sua(id)
{
   
   $("div#showcontent").load("editNhanvien.php?id_nhanvien="+id+"&namese=<?php echo $namese;?>");
}
</script>


