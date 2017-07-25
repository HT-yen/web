
<?php
    $namese="0";
    $idnv="";
   if(isset($_REQUEST['namese']))$namese=$_REQUEST['namese'];
 ?>


<body>
     <div style="background:#CCF;width:500px;height:400px;font-weight:bold;margin-left:200px" >
    <div align="center" style="font-weight:bold">SỬA NHÂN VIÊN</div>
   <form action="" method="post" id="editEmployee">
   <?php
   
   $hoten="";$diachi="";$sdt="";$user="";$pass="";
   if(isset($_REQUEST['id_nhanvien'])){
   	$idnv=$_REQUEST['id_nhanvien'];
	      //khai báo kết nối
		 $link=mysqli_connect('localhost','root','1234',"databasecnw");
		  mysqli_set_charset($link,"utf8");
		  try{
			 $sql='select * from nhanvien where IDNV="'.$_REQUEST['id_nhanvien'].'"';
			 echo $sql;		  
		 $result =mysqli_query($link,$sql);
		 while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
      $hoten=$row{'Hoten'};
      $diachi=$row{'Diachi'};
      $sdt=$row{'sdt'};
      $user=$row{'user'};
      $pass=$row{'pass'};
			 }
		 
		 mysqli_close($link);
		  }
		  catch(Exception $e){
			    
				
			  }
		   
		   ?>
				<p>
					<label>Họ tên:</label>
					<input type="text" id="hoten" value="<?php echo $hoten;?>"  />
				</p>
                <p>
					<label>Địa chỉ:</label>
					<input type="text" id="diachi" value="<?php echo $diachi;?>"  />
				</p>
                <p>
					<label>Số ĐT:</label>
					<input type="text" id="sdt" value="<?php echo $sdt;?>"  />
				</p>
                <p>
					<label>User:</label>
					<input type="text" id="user" value="<?php echo $user;?>"  />
				</p>
                <p>
					<label>Password:</label>
					<input type="password" id="pass" value="<?php echo $pass;?>"  />
				</p>
                <p>
					
					<input type="button" value="Submit" onclick="suanhanvien()" />
				</p>
		<?php }?>		
</form>
</div>
<script src="js/jquery-latest.js">
     
    //path of use JQuery 
</script>
<script language="JavaScript">
  function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}
 function suanhanvien(){

	 var expiration = new Date();
      expiration.setTime(expiration.getTime() + 150000);
	  idnv=<?php echo $idnv;?>;
      setCookie("sidnv",idnv,expiration);
	  expiration.setTime(expiration.getTime() + 150000);
	  hoten=document.getElementById("hoten").value;
      setCookie("shoten",hoten,expiration);
	  expiration.setTime(expiration.getTime() + 150000);
	   diachi=document.getElementById("diachi").value;
      setCookie("sdiachi",diachi,expiration);
	   expiration.setTime(expiration.getTime() + 150000);
	   sdt=document.getElementById("sdt").value;
      setCookie("ssdt",sdt,expiration);
	   expiration.setTime(expiration.getTime() + 150000);
	   user=document.getElementById("user").value;
      setCookie("suser",user,expiration);
	   expiration.setTime(expiration.getTime() + 150000);
	   pass=document.getElementById("pass").value;
      setCookie("spassword",pass,expiration);
	  $("div#showcontent").load("checkEditEmployee.php?namese=<?php echo $namese; ?>");
	 }
</script>