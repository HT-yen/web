<?php  
       
       $check=0;
	   $loi=0;
try{

		  $hoten=$_COOKIE['hoten'];
		  echo $hoten;
		  $diachi=$_COOKIE['diachi'];
		  $sdt=$_COOKIE['sdt'];
		  $user=$_COOKIE['user'];
		  $password=$_COOKIE['password'];
		  setcookie('hoten','',time()+3600);
		  setcookie('diachi','',time()+3600);
		  setcookie('sdt','',time()+3600);
		  setcookie('user','',time()+3600);
		  setcookie('password','',time()+3600);
		 
		try{
		  	 //khai báo kết nối
		     $link=mysqli_connect('localhost','root','1234',"databasecnw");
		     mysqli_set_charset($link, "utf8");
		     $sql='insert into nhanvien(Hoten,Diachi,sdt,user,pass) values(\''.$hoten.'\',\''.$diachi.'\',\''.$sdt.'\',\''.$user.'\',\''.$password.'\')';  
		     echo $sql;
             $result = mysqli_query($link, $sql);
		     if($result) {
			 } else {
			 	$loi=1;
		     }
		     mysqli_close($link);
			
		 }
		catch(Exception $e){
			    $loi=1;
			    mysqli_close($link);
		}
	}catch(Exception $e0)
	{
		$check=1;
	}

		  
 ?>
<script src="js/jquery-latest.js">
     
</script>
<script language="JavaScript">
$(document).ready(function() {
  loi=<?php echo $loi;?>;
  check=<?php echo $check;?>;

  if(check==1) alert("Lỗi xảy ra! k truyền được cookie !thử lại!");
  else   
  	{
  		if(loi==1) alert("Lỗi xảy ra! k thêm được!thử lại!");
  		else alert("Thêm thành công!");
  	}
  $("div#showcontent").load("quanlynhanvien.php?namese="+"0");
    });
//thêm xong là trở về detailHoaDon ngay
</script>