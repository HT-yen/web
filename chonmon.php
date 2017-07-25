<?php 
$id_hoadon=$_REQUEST['id_hoadon'];
$id_monan=$_REQUEST['id_monan'];
$id_soluongmon=$_REQUEST['id_soluongmon'];
$id_hoadon=$_REQUEST['id_hoadon'];
$namese=$_REQUEST['namese'];
$loi=0;
 
$link=mysqli_connect('localhost','root','1234',"databasecnw");
mysqli_set_charset($link, "utf8");
$sql="select * from monan where id_monan=".$id_monan;
$result = mysqli_query($link, $sql);
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
// echo "so hang ", mysqli_num_rows($result);
try{
	$gia=$row{'giatien'}*$id_soluongmon;
	$tenmonan=$row{'ten_monan'};
	echo $tenmonan;

 $sql="insert into chitiethoadon(id_hoadon, ten_monan, soluong, gia) values (".$id_hoadon.",'".$tenmonan."',".$id_soluongmon.",".$gia.")";
 echo $sql;
    mysqli_set_charset($link,"utf8");
    $result=mysqli_query($link,$sql); 
    if($result) {
    }
    else $loi=1;
}
catch(Exception $e)
{
	$loi=1;
}
 ?>
 <script src="js/jquery-latest.js">
     
</script>
<script language="JavaScript">
/*đặt hàm ready ở cuối nếu k thì ngay sau khi document sẵn sàng thì hàm trong ready đã chạy rồi thì lỗi chưa kịp=1 nếu có lỗi thì đã chạy hàm rồi, còn nếu đặt ở dưới thì nó cũng ngay sau khi document sẵn sàng nhưng thì nó nằm cuối nên nó chạy hết phía trên mới đến lượt kiểm tra document sẵn sàng chưa rồi chạy*/
$(document).ready(function() {
	loi=<?php echo $loi;?>;
	if(loi==1) alert("Lỗi xảy ra! thử lại!");
	else  alert("Thêm thành công!");
	$("div#showcontent").load("detailHoaDon.php?id_hoadon=<?php echo $id_hoadon;?>&namese=<?php echo $namese;?>");
    });
//thêm xong là trở về detailHoaDon ngay
</script>