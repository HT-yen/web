<?php  
       
         $check=0;
	     $loi=0;
		   $id_hoadon=$_REQUEST['id_hoadon'];
		  $soban=$_COOKIE['ssoban'];
		  $namese="0";
          if(isset($_REQUEST['namese']))$namese=$_REQUEST['namese'];

		    //khai báo kết nối
		 $link=mysqli_connect('localhost','root','1234',"dadabasecnw");
		     mysqli_set_charset($link, "utf8");
             
		  try{
		 $sql='update hoadon set soban=\''.$soban.'\' where id_hoadon=\''.$id_hoadon.'\''; 
		 
		$result = mysqli_query($link, $sql);
		 if($result) {
			 
			 } else {
	          $loi=0;
			
		 }
		 mysqli_close($link);
		  }
		  catch(Exception $e){
			    $loi=1;
				
			  }

		  
 ?>
<script src="js/jquery-latest.js">
     
</script>
<script language="JavaScript">
$(document).ready(function() {
  loi=<?php echo $loi;?>;
  if(loi==1) alert("Lỗi xảy ra! thử lại!");
  else   alert("Sửa thành công!");
  $("div#showcontent").load("quanlyhoadon.php?namese=<?php echo $namese;?>");
    });
//thêm xong là trở về detailHoaDon ngay
</script>