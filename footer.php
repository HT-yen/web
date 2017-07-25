</div>


        <div class="tablecell content" id="showcontent">
            <?php if($check==1)//admin 
                    include("welcomeadmin.php");
                    else if($check==2) //nhân viên
                    include("welcomenhanvien.php"); ?>
        </div>
        <div class="talbecell" style="width: 230px">
        <table>
                <tr>

                    <td width="230" height="500" background="image/nen5.jpg"><input align="center" class="button" type="button" id="logout" value="Logout"></td>
                </tr>
               
        </table>
            <!-- <table>
                <caption>Logout</caption>
                    <tr>
                        <th width="250px" height="px">tin1</th>
                    </tr>
                    <tr>
                        <th width="250px" height="200px">tin 2</th>
                    </tr>
            </table> -->
        </div>

    </div>

</div>
</body>
</html>

