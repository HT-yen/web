<?php
   function tinhtong($idHD){
	$link=mysqli_connect('localhost','root','1234',"databasecnw");
   mysqli_set_charset($link, "utf8");
   $sql="select * from chitiethoadon where id_hoadon=".$idHD;
   $result = mysqli_query($link, $sql);
   $tongtien=0;
   while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
      $d=$row{'gia'}; 
      $tongtien+=$d;
     
   }
   return $tongtien;
   }
   
   
          $tungay=$_COOKIE['tungay'];
		  $denngay=$_COOKIE['denngay'];
   $link=mysqli_connect('localhost','root','1234',"databasecnw");
   mysqli_set_charset($link, "utf8");
   if($denngay!='')
   $sql="select * from hoadon where thoigianketthuc between CAST('".$tungay."' AS DATE) and CAST('".$denngay."' AS DATE) and tinhtrangthanhtoan=1";
   else  $sql="select * from hoadon where thoigianketthuc between ".$tungay." and now()";
    $result = mysqli_query($link, $sql);
   echo '<div style="margin-left:40px;padding-top:5px">';
   echo '<table border="1" width ="100%" >';
         echo '<caption style="font-size:24px;font-weight:bold;color:#306"><h3>Dữ liệu hóa đơn </h3></caption>';
         echo '<TR bgcolor="#00CC99"><TH>STT</TH><TH>Số bàn</TH><TH>Ngày thanh toán</TH><TH>Giá tiền(K)</TH></TR>';
		 $i=0;
		 $tong=0;
   while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	   $i+=1;
	   $z=$row{'id_hoadon'};
      $a=$row{'soban'};
      $b=$row{'thoigianketthuc'};   
      $tien=tinhtong($z);
	  $tong+=$tien;
      echo '<TR><TH>'.$i.'</TH><TH>'.$a.'</TH><TH>'.$b.'</TH><TH>'.$tien.'</TH></TR>';
   }
   echo '<TR><TH style="color:#306;font-size:24px;font-weight:bold">Tổng cộng</TH><TH colspan="5">'.$tong.'</TH></TR></table>
   <br><br></div>
   </body>';
   
?>