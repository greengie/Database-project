<html>
<head>
  <script language="JavaScript">
      /*function clearformshowtime()
      {
          document.getElementById("aid1").value=""; //don't forget to set the textbox id
          document.getElementById("aname1").value="";
          document.getElementById("adesc1").value="";
      }
      function clearformanimationnews()
      {
          document.getElementById("ab1").value=""; //don't forget to set the textbox id
          document.getElementById("ab2").value="";
      }*/
  </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/full-width-pics.css" rel="stylesheet">
<title>TABLE</title>
</head>
<body>

<!--CLICK LINK BUTTON ///////////////////////////////////////////////////////////////////////////////////////////-->
<div>
      <ul class="nav nav-pills nav-fixed-top ">
        <li>
            <a href="http://localhost/Animation/insertIndex.php#">INSERT</a>
        </li>
        <li>
            <a href="http://localhost/Animation/updateIndex.php#">UPDATE</a>
        </li>
        <li class="active">
            <a href="http://localhost/Animation/tableIndex.php#">TABLE</a>
        </li>
        <li>
            <a href="http://localhost/Animation/addAdminIndex.php#">ADD ADMIN</a>
        </li>
      </ul>
    </div>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<?php
       $str_server = "localhost";
       $str_username = "root";
       $str_password = "";
       $str_dbname = "animation";
       $obj_con = mysql_connect($str_server,$str_username,$str_password);
       mysql_select_db($str_dbname,$obj_con);
       mysql_query("SET NAMES UTF8");
       $str_sql1 = "SELECT * from animationinfo";
       $str_sql2 = "SELECT * from animationnews";
       $str_sql3 = "SELECT * from author";
       $str_sql4 = "SELECT * from members";
       $str_sql5 = "SELECT * from relationanimationandauthor";
       $str_sql6 = "SELECT * from showtime";
       $rs1 = mysql_query($str_sql1,$obj_con);
       $rs2 = mysql_query($str_sql2,$obj_con);
       $rs3 = mysql_query($str_sql3,$obj_con);
       $rs4 = mysql_query($str_sql4,$obj_con);
       $rs5 = mysql_query($str_sql5,$obj_con);
       $rs6 = mysql_query($str_sql6,$obj_con);
    ?>

<!--Section1//////////////////////////////////////////////////////////////////////////////////////////////////-->
    <section>
        <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-heading">AnimationInfo Table</h1>
                        <table border="0" cellpadding="10" cellspacing="0" width="1000" height="20">
                            <tr>
                               <td width="10%"><p class="lead section-lead">AID</p></td>
                               <td width="20%"><p class="lead section-lead">AName</p></td>
                               <td width="50%"><p class="lead section-lead">ADesc</p></td>
                             </tr>
                             <?php while($row_Animation = mysql_fetch_array($rs1)) { ?>
                             <tr>
                               <td><?php echo $row_Animation['AID'] ?></td>
                               <td><?php echo $row_Animation['AName'] ?></td>
                               <td><?php echo $row_Animation['ADesc'] ?></td>
                            </tr>
                            <?php } ?>
                        </table>

                    </div>
                </div>
                <!-- /.row -->
        </div>
    </section>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////--> 

<!--Section2//////////////////////////////////////////////////////////////////////////////////////////////////-->
    <section>
        <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-heading">AnimationNews Table</h1>
                        <table border="0" cellpadding="10" cellspacing="0" width="1000" height="20">
                            <tr>
                               <td width="5%"><p class="lead section-lead">NewsNo</p></td>
                               <td width="20%"><p class="lead section-lead">Date</p></td>
                               <td width="20%"><p class="lead section-lead">News</p></td>
                               <td width="50%"><p class="lead section-lead">DescNews</p></td>
                             </tr>
                             <?php while($row_Animation = mysql_fetch_array($rs2)) { ?>
                             <tr>
                               <td><?php echo $row_Animation['NewsNO'] ?></td>
                               <td><?php echo $row_Animation['Date'] ?></td>
                               <td><?php echo $row_Animation['News'] ?></td>
                               <td><?php echo $row_Animation['DescNews'] ?></td>
                            </tr>
                            <?php } ?>
                        </table>

                    </div>
                </div>
                <!-- /.row -->
        </div>
    </section>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--Section3//////////////////////////////////////////////////////////////////////////////////////////////////-->
    <section>
        <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-heading">Author Table</h1>
                        <table border="0" cellpadding="10" cellspacing="0" width="1000" height="20">
                            <tr>
                               <td width="8%"><p class="lead section-lead">AuID</p></td>
                               <td width="20%"><p class="lead section-lead">AuName</p></td>
                               <td width="50%"><p class="lead section-lead">History</p></td>
                             </tr>
                             <?php while($row_Animation = mysql_fetch_array($rs3)) { ?>
                             <tr>
                               <td><?php echo $row_Animation['AuID'] ?></td>
                               <td><?php echo $row_Animation['AuName'] ?></td>
                               <td><?php echo $row_Animation['History'] ?></td>
                            </tr>
                            <?php } ?>
                        </table>

                    </div>
                </div>
                <!-- /.row -->
        </div>
    </section>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--Section4//////////////////////////////////////////////////////////////////////////////////////////////////-->
    <section>
        <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-heading">Members Table</h1>
                        <table border="0" cellpadding="10" cellspacing="0" width="1000" height="20">
                            <tr>
                               <td width="8%"><p class="lead section-lead">id</p></td>
                               <td width="20%"><p class="lead section-lead">username</p></td>
                               <td width="50%"><p class="lead section-lead">password</p></td>
                             </tr>
                             <?php while($row_Animation = mysql_fetch_array($rs4)) { ?>
                             <tr>
                               <td><?php echo $row_Animation['id'] ?></td>
                               <td><?php echo $row_Animation['username'] ?></td>
                               <td><?php echo $row_Animation['password'] ?></td>
                            </tr>
                            <?php } ?>
                        </table>

                    </div>
                </div>
                <!-- /.row -->
        </div>
    </section>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--Section5//////////////////////////////////////////////////////////////////////////////////////////////////-->
    <section>
        <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-heading">RelationAnimationAndAuthor</h1>
                        <table border="0" cellpadding="10" cellspacing="0" width="1000" height="20">
                            <tr>
                               <td width="8%"><p class="lead section-lead">RNO</p></td>
                               <td width="20%"><p class="lead section-lead">AID</p></td>
                               <td width="50%"><p class="lead section-lead">AuID</p></td>
                             </tr>
                             <?php while($row_Animation = mysql_fetch_array($rs5)) { ?>
                             <tr>
                               <td><?php echo $row_Animation['RNO'] ?></td>
                               <td><?php echo $row_Animation['AID'] ?></td>
                               <td><?php echo $row_Animation['AuID'] ?></td>
                            </tr>
                            <?php } ?>
                        </table>

                    </div>
                </div>
                <!-- /.row -->
        </div>
    </section>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--Section6//////////////////////////////////////////////////////////////////////////////////////////////////-->
    <section>
        <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-heading">ShowTime Table</h1>
                        <table border="0" cellpadding="10" cellspacing="0" width="1000" height="20">
                            <tr>
                               <td width="8%"><p class="lead section-lead">AID</p></td>
                               <td width="20%"><p class="lead section-lead">Date</p></td>
                               <td width="20%"><p class="lead section-lead">TimeStart</p></td>
                               <td width="20%"><p class="lead section-lead">TimeEnd</p></td>
                             </tr>
                             <?php while($row_Animation = mysql_fetch_array($rs6)) { ?>
                             <tr>
                               <td><?php echo $row_Animation['AID'] ?></td>
                               <td><?php echo $row_Animation['Date'] ?></td>
                               <td><?php echo $row_Animation['TimeStart'] ?></td>
                               <td><?php echo $row_Animation['TimeEnd'] ?></td>
                            </tr>
                            <?php } ?>
                        </table>

                    </div>
                </div>
                <!-- /.row -->
        </div>
    </section>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


</body>
</html>





