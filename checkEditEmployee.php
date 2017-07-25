<?php  
       
       $check=0;
	   $loi=1;
	   $namese=$_REQUEST['namese'];
		  $idnv=$_COOKIE['sidnv'];
		  $hoten=$_COOKIE['shoten'];
		  $diachi=$_COOKIE['sdiachi'];
		  $sdt=$_COOKIE['ssdt'];
		  $user=$_COOKIE['suser'];
		  $password=$_COOKIE['spassword'];
		 
		 $link=mysqli_connect('localhost','root','1234',"databasecnw");
		  mysqli_set_charset($link,"utf8");
	         
		  try{
		 $sql='update nhanvien set Hoten=\''.$hoten.'\',Diachi=\''.$diachi.'\',sdt=\''.$sdt.'\',user=\''.$user.'\',pass=\''.$password.'\' where IDNV=\''.$idnv.'\''; 
		 
		$result = mysqli_query($link, $sql);
		 if($result) {
			 $loi=0;
			 
			 } else {
	
			
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
  $("div#showcontent").load("quanlynhanvien.php?namese=<?php echo $namese; ?>");
    });
//thêm xong là trở về detailHoaDon ngay
</script>