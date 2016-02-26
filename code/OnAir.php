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
 
       $str_sql = "SELECT animationinfo.Aname,author.AuName,animationinfo.ADesc
                  FROM animationinfo
                  LEFT JOIN relationanimationandauthor
                  ON relationanimationandauthor.AID = animationinfo.AID
                  LEFT JOIN author
                  ON relationanimationandauthor.AuID = author.AuID
                  WHERE EXISTS 
                  ( SELECT *
                    FROM showtime S
                    WHERE animationinfo.AID = S.AID 
                    AND S.Date < NOW()
                    AND S.Date NOT IN (SELECT MAX(D.Date) FROM showtime D GROUP BY AID)
                    )
                  GROUP BY animationinfo.AID";
       $rs = mysql_query($str_sql,$obj_con);
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
        <li class="active">
            <a href="http://localhost/Animation/OnAir.php#">On Air</a>
        </li>
        <li>
            <a href="http://localhost/Animation/NextSeason.php#">Next Season</a>
        </li>
        <li>
           <a href="http://localhost/Animation/HistoryOfAuthor.php#">History Of Author</a>
        </li>
        </ul>
    </div>
    <!--Navagation-->
    <header class="image-bg-height">
        <img class="img-responsive img-center" src="http://cupegraf.com/data_images/wallpapers/3/298459-anohana.jpg" >
    </header>
    <!--Section-->
    <section>
        <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-heading">On Air</h1>

                        <table border="0" cellpadding="10" cellspacing="0" width="1000" height="20">
                            <tr>
                               <td width="15%"><p class="lead section-lead">Animation</p></td>
                               <td width="15%"><p class="lead section-lead">Author</p></td>
                               <td width="50%"><p class="lead section-lead">Description Of Animation</p></td>
                             </tr>
                             <?php while($row_Animation = mysql_fetch_array($rs)) { ?>
                             <tr>
                               <td><?php echo $row_Animation['Aname'] ?></td>
                               <td><?php echo $row_Animation['AuName'] ?></td>
                               <td><?php echo $row_Animation['ADesc'] ?></td>
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



