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
// function getCookie(cname) {
//     var name = cname + "=";
//     var ca = document.cookie.split(';');
//     for(var i=0; i<ca.length; i++) {
//         var c = ca[i];
//         while (c.charAt(0)==' ') c = c.substring(1);
//         if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
//     }
//     return "";
// }
 function themnhanvien(){
	  
	 var expiration = new Date();
	  expiration.setTime(expiration.getTime() + 150000);
	  hoten=document.getElementById("hoten").value;
      setCookie("hoten",hoten,expiration);
	  expiration.setTime(expiration.getTime() + 150000);
	   diachi=document.getElementById("diachi").value;
      setCookie("diachi",diachi,expiration);
	   expiration.setTime(expiration.getTime() + 150000);
	   sdt=document.getElementById("sdt").value;
      setCookie("sdt",sdt,expiration);
	   expiration.setTime(expiration.getTime() + 150000);
	   user=document.getElementById("user").value;
      setCookie("user",user,expiration);
	   expiration.setTime(expiration.getTime() + 150000);
	   pass=document.getElementById("pass").value;
      setCookie("password",pass,expiration);
	  // alert("da cai cookie");
	  $("div#showcontent").load("checkAddEmployee.php");
	 }
</script>

</head>

<body>
    <div align="center">THÊM NHÂN VIÊN</div>
   <form action="" method="post" id="addEmployee">
				<p>
					<label>Họ tên:</label>
					<input type="text" id="hoten" value=""  />
				</p>
                <p>
					<label>Địa chỉ:</label>
					<input type="text" id="diachi" value=""  />
				</p>
                <p>
					<label>Số ĐT:</label>
					<input type="text" id="sdt" value=""  />
				</p>
                <p>
					<label>User:</label>
					<input type="text" id="user" value=""  />
				</p>
                <p>
					<label>Password:</label>
					<input type="password" id="pass" value=""  />
				</p>
                <p>
					
					<input type="button" value="Submit" onclick="themnhanvien()" />
				</p>
				
</form>

<?php
// $arr= array(1,2,3 );
// $arr[1]=3;
// setCookie("ka","dewde",time()+3600);
// echo $arr[1];  
  ?>
 
</body>
</html>