<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<?php session_start();
$check=$_SESSION['check']; 
//đặt trên cùng để tránh lỗi script already sent the HTTP headers
// if($check==1)//admin 
//     $linkpage="welcomeadmin.php";
// else if($check==2) //nhân viên
//      $linkpage="welcomenhanvien.php";

?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nhà Hàng Healthy</title>
<style type="text/css">
.dropbtn {
    width: 200px;
    height: 35px;
    min-width: 200px;
    background-image: url("image/button.jpg");
    color: black;
    text-decoration: underline;
    text-transform: uppercase;
    text-align: center;
    padding-top: 10px;
    margin-top: 16px;
    font-size: 16px;
    border: 3px;
    border-color: red;
    cursor: pointer;
    display: block;
}

.dropbtn:hover, .dropbtn:focus {
    color: red;
    background-color: orange;
}

.dropdown-content {
    display: none;
    background-color: #f6f6f6;
    width: 200px;
    overflow: auto;
    z-index: 1;
}

.dropdown:hover, .dropdown-content a:HOVER {
    background-color: gray;
}

.dropdown:FOCUS, .dropdown-content a:FOCUS {
    background-color: white;
}

.inlineitem {
    display: inline;
    margin-left: 5px;
}

.dropdown-content a {
    background-color: #4CAF50;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: list-item;
}

.item {
    
}

.item:FOCUS, .item:HOVER {
    background-color: green;
}

.dropdown a:hover {
    background-color: orange;
}

.show {
    display: block;
}
div.table {
    display: table;
}
div.tablerow {
    display: table-row;
}

div.talbecell {
    background-color: gray;
    display: table-cell;
}
div.talbecell:hover,div.talbecell:focus 
{
    background-color: blue;
}
.content {
    text-align: center;
    width: 900px;
}

.tem_left {
    width: 300px;
    margin: 20px;
    cursor: move;
}

.tem_right {
    float: right;
    cursor: pointer;
}

.iconimage a {
    width: 7px;
    height: 7px;
    padding-bottom: 2px;
    padding-left: 2px;
    padding-right: 2px;
    padding-top: 2px;
}

.profileimage {
    width: 255px;
}

.profileimage:HOVER, .profileimage:FOCUS {
    background-color: gray;
}
.button
{
    background-image: url("image/logout.jpg");
    padding-top: 8px;
    margin-top: 10px ;
    margin-left: 40px;
    text-align: center;
    width: 95px;
    height: 55px;
    font-size: 16px;
}
.button:HOVER, .button:focus{
    color: white;
}
.welcome{
    background-image: url("image/nen15.jpg");
    width: 900px;
    padding-top: 30px;
}
</style>
<script src="js/jquery-latest.js">
     
    //path of use JQuery 
</script>

<script>

    /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunctionMonAn() {            
            document.getElementById("myDropdownMonAn").classList.toggle("show");     
            
        }
        function myFunctionThongKe() {
            document.getElementById("myDropdownThongKe").classList.toggle("show");         
        }
      //   $(window).load(function() {
      // alert("window load occurred!");
      // $("div#showcontent").load('<?php //echo $linkpage; ?>');
      //  });
        
    $(document).ready(function() {
        //alert("show");
        $('#qlnhanvien').click(function(event) {
            //alert("show");
           // $("div#showcontent").removeData()
            $("div#showcontent").load("quanlynhanvien.php?namese="+"0")
        });
        $('#xemmonan').click(function(event) {
            //alert("show");
            $("div#showcontent").load("contentMonAn.php");
        });
        $('#capnhatmonan').click(function(event) {
            //alert("show");
            $("div#showcontent").load("contentCapNhatMonAn.php?namese="+"0");
        });
        $('#qlhoadon').click(function(event) {
            //alert("show");
            $("div#showcontent").load("quanlyhoadon.php?namese="+"0");
        });
        $('#thongke').click(function(event) {
            //alert("show");
            $("div#showcontent").load("thongke.php");
        });
        $('#logout').click(function(event) {
            //alert("show");
            window.location="logout.php";
        });
        
    }); 
</script>
</head>
<body >
<div>
<table border="1">
<tr align="center" > <td background="image/chibi.jpg" width="280" height="100"></td>
<td background="image/nen2.jpg" width="800" height="100"><p style="color:black;font-size: 50px ">
<marquee width="50%">RESTAURANT HEALTHY</marquee>
</p></td>
<td border="1"><h4>Địa chỉ: ....................................................<br> Hottline: 0999999999 </h4>
</td> </tr>
</table>
</div>
<div class="table">
<div class="tablerow">
        <div class="talbecell">