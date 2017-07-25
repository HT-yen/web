<?php
$link=mysqli_connect("localhost",'root','1234',"databasecnw");
   mysqli_set_charset($link,"utf8");
   $sql="select * from monan";
   $result=mysqli_query($link,$sql);
   echo '<div align="center">';
  echo '<table border="1" width ="500">';
   while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
   	$a=$row{'ten_monan'};
   	$b=$row{'avt_monan'};
   	$c=$row{'giatien'};
   	# code...
   	echo '<TR HEIGHT= "300" ><TD colspan=2 background="image/'.$b.'"></TD></TR>
   	<TR align="center"><TD WIDTH= "150" HEIGHT= "50">'.$a.'</TD><TD WIDTH= "150" HEIGHT= "50">'.$c.' 000vnd</TD></TR>';
   }
  echo "</table>";
  echo '</div>';
?>