<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/full-width-pics.css" rel="stylesheet">
	<title>Animation By Animation Roll</title>
</head>

<body>

    <?php
      $str_server = "localhost";
      $str_username = "root";
      $str_password = "";
      $str_dbname = "animation";
      $obj_con = mysql_connect($str_server,$str_username,$str_password);
      mysql_select_db($str_dbname,$obj_con);
      mysql_query("SET NAMES UTF8");

    ?>

    <!--Navagation-->
    <div>
    	<ul class="nav nav-pills nav-fixed-top ">
        <li>
            <a href="http://localhost/Animation/Home.php#">Home</a>
        </li>
        <li>
            <a href="http://localhost/Animation/ShowTime.php#">Show Time</a>
        </li>
        <li>
            <a href="http://localhost/Animation/OnAir.php#">On Air</a>
        </li>
        <li>
            <a href="http://localhost/Animation/NextSeason.php#">Next Season</a>
        </li>
        <li class="active">
            <a href="http://localhost/Animation/HistoryOfAuthor.php#">History Of Author</a>
        </li>
    	</ul>
    </div>
    <!--Navagation-->
    <header class="image-bg-height">
        <img class="img-responsive img-center" src="http://cartoon.mthai.com/wordpress/wp-content/uploads/2013/01/sao2.jpg" >
    </header>
    <!--Section-->
    <section>
        <div class="container">

                <div class="login">
                  <form action="HistoryOfAuthor.php" method="POST">
                  <input type="text" placeholder="Name Ex: Yoshiki Tanaka" name="authorname1"><br>
                  <input type = "submit" value = "SEARCH" /><br>
                  </form>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-heading">Author</h1>
                        <table border="0" cellpadding="10" cellspacing="0" width="1000" height="20">
                            <tr>
                               <td width="8%"><p class="lead section-lead">Author</p></td>
                               <td width="20%"><p class="lead section-lead">History</p></td>
                             </tr>
                             <?php if ($_SERVER['REQUEST_METHOD'] == "POST") { ?>
                             <?php
                                $AuN = $_POST['authorname1'];
                                $str_sql = "SELECT AuName,History
                                            FROM author 
                                            WHERE AuName = '$AuN'";
                                $rs = mysql_query($str_sql,$obj_con);
                              ?>
                             <?php while($row_Animation = mysql_fetch_array($rs)) { ?>
                             <tr>
                               <td><?php echo $row_Animation['AuName']; ?></td>
                               <td><?php echo $row_Animation['History']; ?></td>
                            </tr>
                            <?php } ?>
                            <?php } ?>
                        </table>

                    </div>
                </div>
                <!-- /.row -->
        </div>
    </section>
    <!--Section-->	
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php mysql_close($obj_con); ?>



