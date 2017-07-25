            <?php  
            include("header.php");
            if($check==1)//admin 
                include("left_frame_admin.php");
            else if($check==2)
                //nhân viên
                include("left_frame.php");
            include("footer.php");
            ?>