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
 function thongke(){
	  
	 var expiration = new Date();
     expiration.setTime(expiration.getTime() + 150000);
	   tungay=document.getElementById("tungay").value;
      setCookie("tungay",tungay,expiration);
	  expiration.setTime(expiration.getTime() + 150000);
	  denngay=document.getElementById("denngay").value;
      setCookie("denngay",denngay,expiration);
	  $("div#showcontent").load("checkThongke.php");
	 }
</script>
<title>Thống kê </title>
</head>
<body>
     
    <div align="center" style="font-weight:700;font-size:36px;color:#306">THỐNG KÊ</div>
   <form action="" method="post">
				<p>
                     <span style="color:#F00">lưu ý định dạng ngày: YYYY-MM-DD</span><br/><br/>
					<label>Từ ngày(bắt buộc nhập): </label>
					<input type="text" id="tungay" value=""  />
				
					<label>          Đến ngày:</label>
					<input type="text" id="denngay" value=""  />
	
					<input type="button" value="OK" onclick="thongke()" />
				</p>
			
</form>

</body>

