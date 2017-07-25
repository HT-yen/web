<?php $namese="0";
   if(isset($_REQUEST['namese']))$namese=$_REQUEST['namese'];	
   ?>
 
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm món ăn</title>
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
 function suahoadon(){
	  
	 var expiration = new Date();
     expiration.setTime(expiration.getTime() + 150000);
	  soban=document.getElementById("soban").value;
      setCookie("ssoban",soban,expiration);
	  $("div#showcontent").load("checkEditHoaDon.php?id_hoadon=<?php echo $_REQUEST['id_hoadon'];?>&namese=<?php echo $namese ; ?>");
	 }
</script>

</head>

<body>
   <div style="background:#CCF;width:300px;height:200px;font-weight:bold;margin-left:300px" >
    <div align="center" style="font-weight:bold">SỬA HÓA ĐƠN</div>
   <form action="" method="post">
   <?php
   $id_hoadon="";
  $soban="";
   if(isset($_REQUEST['id_hoadon'])){
	      //khai báo kết nối
		 $link=mysqli_connect('localhost','root','1234',"databasecnw") ;
		mysqli_set_charset($link,"utf8");
		  try{
			 $sql='select * from hoadon where id_hoadon=\''.$_REQUEST['id_hoadon'].'\'';
		  
		 $result =mysqli_query($link,$sql);
		 while($row=mysqli_fetch_array($result,MYSQL_ASSOC)){
      $soban=$row{'soban'};
      
			 }
		 
		 mysqli_close($link);
		  }
		  catch(Exception $e){
			   
				
			  }
		   
		   ?>
				<p>
					<label>Số bàn:</label>
					<input type="text" id="soban" value="<?php echo $soban;?>"  />
				</p>
                <p>
					
					<input type="button" value="Submit" onclick="suahoadon()" />
				</p>
				<?php }?>
</form>

</div>
 
</body>
</html>