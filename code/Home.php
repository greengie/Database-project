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
 
       $str_sql = "select Date,News,DescNews from animationnews
                   Order by NewsNo DESC LIMIT 10";
       $rs = mysql_query($str_sql,$obj_con);
    ?>


    <!--Navagation-->
    <div>
    	<ul class="nav nav-pills nav-fixed-top ">
        <li class="active">
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
        <li>
            <a href="http://localhost/Animation/NextSeason.php#">History Of Author</a>
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
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-heading">News</h1>
                        <table border="0" cellpadding="10" cellspacing="0" width="1000" height="20">
                            <tr>
                               <td width="8%"><p class="lead section-lead">Date</p></td>
                               <td width="20%"><p class="lead section-lead">News</p></td>
                               <td width="50%"><p class="lead section-lead">Description News</p></td>
                             </tr>
                             <?php while($row_Animation = mysql_fetch_array($rs)) { ?>
                             <tr>
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
    <!--Section-->	
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php mysql_close($obj_con); ?>



