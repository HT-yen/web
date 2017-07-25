<?php
$user=$_REQUEST["username"];
$pass=$_REQUEST["password"];
session_start(); 
$check=0;
$_SESSION['user'] = $user;
$link = mysqli_connect('localhost', 'root', '1234', 'databasecnw');
// echo '<table border="1" align="center">';
// while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
//            echo '<tr>
//                 <td>'.$row['user'].'</td>
//       <td>'.$row['pass'].'</td></tr>';
   mysqli_set_charset($link, "utf8");
   $sql='select * from admin';
   $result = mysqli_query($link, $sql);
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
   	$a=$row{'user'};
   	$b=$row{'pass'};
   	if(($user==$a)&&($pass==$b))
      {
         $check=1;
         break;
      }
   }
   $sql='select * from nhanvien';
   $result=mysqli_query($link, $sql);
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))  {
      
      $a=$row{'user'};
      $b=$row{'pass'};
      if(($user==$a)&&($pass==$b))
      {
         $check=2;
         break;
      }
   }
   $_SESSION['check'] = $check;
   // check sau có tác dụng kiểm tra xem add min hay nhân viên đang đăng nhập
   if($check!=0) {header('Location: index.php');}
   else {header('Location: login.php');}
      
?>