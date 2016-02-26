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
<title>Insert</title>
</head>
<body>
<!--CLICK LINK BUTTON ///////////////////////////////////////////////////////////////////////////////////////////-->
<div>
      <ul class="nav nav-pills nav-fixed-top ">
          <li class="active">
            <a href="http://localhost/Animation/insertIndex.php#">INSERT</a>
          </li>
          <li>
            <a href="http://localhost/Animation/updateIndex.php#">UPDATE</a>
          </li>
          <li>
            <a href="http://localhost/Animation/tableIndex.php#">TABLE</a>
        </li>
        <li>
            <a href="http://localhost/Animation/addAdminIndex.php#">ADD ADMIN</a>
        </li>
      </ul>
    </div>
<!--///////////////////////////////////////////////////////////////////////////////////////////-->


<!--INSERT ANIMATION NEWS ///////////////////////////////////////////////////////////////////////////////////////////-->
  <div>
    <form action="InsertSqlanimationnews.php" name="frmMain" method="post" target="iframe_target">
    <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
    <script language="JavaScript">
      function showResult(result)
      {
        if(result==1)
        {
          document.getElementById("divResult").innerHTML = "<font color=green> Save successfully! </font>  <br>";
        }
        else
        {
          document.getElementById("divResult").innerHTML = "<font color=red> Error!! Cannot save data </font> <br>";
        }
      }
    </script>
  <font size="5" color="black">AnimationNews Table</font>
 <div id="divResult"></div>
    <table width="320" border="0">
      <tr>
      <tr>
      <th>News</th>
      <td><input type="text" id="ab1" name="A1" size="100"></td>
      </tr>
      <tr>
      <th>Description</th>
      <td><input type="text" id="ab2" name="A2" size="1000"></td>
      </tr>
      </table>
      <input type="submit" name="submit" value="submit">
      </form>
    </div>

<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


<!--INSERT ANIMATION INFO ///////////////////////////////////////////////////////////////////////////////////////////-->
  <div>
    <form action="InsertSqlanimationinfo.php" name="frmMain" method="post" target="iframe_target">
    <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
    <script language="JavaScript">
      function showResult(result)
      {
        if(result==1)
        {
          document.getElementById("divResult").innerHTML = "<font color=green> Save successfully! </font>  <br>";
        }
        else
        {
          document.getElementById("divResult").innerHTML = "<font color=red> Error!! Cannot save data </font> <br>";
        }
      }
    </script>
  <font size="5" color="black">AnimationInfo Table</font>
 <div id="divResult"></div>
    <table width="320" border="0">
      <tr>
      <th>AID</th>
      <td><input type="text" id="bc1" name="B1" size="100"></td>
      </tr>
      <tr>
      <th>Animation Name</th>
      <td><input type="text" id="bc2" name="B2" size="100"></td>
      </tr>
      <tr>
      <th>Description</th>
      <td><input type="text" id="bc3" name="B3" size="1000"></td>
      </tr>
      </table>
      <input type="submit" name="submit" value="submit">
      </form>
    </div>

<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--INSERT AUTHOR///////////////////////////////////////////////////////////////////////////////////////////-->
  <div>
    <form action="InsertSqlauthor.php" name="frmMain" method="post" target="iframe_target">
    <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
    <script language="JavaScript">
      function showResult(result)
      {
        if(result==1)
        {
          document.getElementById("divResult").innerHTML = "<font color=green> Save successfully! </font>  <br>";
        }
        else
        {
          document.getElementById("divResult").innerHTML = "<font color=red> Error!! Cannot save data </font> <br>";
        }
      }
    </script>
  <font size="5" color="black">Author Table</font>
 <div id="divResult"></div>
    <table width="320" border="0">
      <tr>
      <th>AuID</th>
      <td><input type="text" id="cd1" name="C1" size="100"></td>
      </tr>
      <tr>
      <th>AuName</th>
      <td><input type="text" id="cd2" name="C2" size="100"></td>
      </tr>
      <tr>
      <th>History</th>
      <td><input type="text" id="cd3" name="C3" size="1000"></td>
      </tr>
      </table>
      <input type="submit" name="submit" value="submit">
      </form>
    </div>

<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--INSERT RELATION///////////////////////////////////////////////////////////////////////////////////////////-->
  <div>
    <form action="InsertSqlrelation.php" name="frmMain" method="post" target="iframe_target">
    <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
    <script language="JavaScript">
      function showResult(result)
      {
        if(result==1)
        {
          document.getElementById("divResult").innerHTML = "<font color=green> Save successfully! </font>  <br>";
        }
        else
        {
          document.getElementById("divResult").innerHTML = "<font color=red> Error!! Cannot save data </font> <br>";
        }
      }
    </script>
  <font size="5" color="black">Relation between animationinfo and author Table</font>
 <div id="divResult"></div>
    <table width="320" border="0">
      <th>AID</th>
      <td><input type="text" id="de1" name="D1" size="100"></td>
      </tr>
      <tr>
      <th>AuID</th>
      <td><input type="text" id="de2" name="D2" size="100"></td>
      </tr>
      </table>
      <input type="submit" name="submit" value="submit">
      </form>
    </div>

<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->



<!--INSERT SHOWTIME ///////////////////////////////////////////////////////////////////////////////////////////-->

  <div>
    <form action="InsertSqlShowtime.php" name="frmMain" method="post" target="iframe_target">
    <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
    <script language="JavaScript">
      function showResult(result)
      {
        if(result==1)
        {
          document.getElementById("divResult").innerHTML = "<font color=green> Save successfully! </font>  <br>";
        }
        else
        {
          document.getElementById("divResult").innerHTML = "<font color=red> Error!! Cannot save data </font> <br>";
        }
      }
    </script>
    <font size="5" color="black">ShowTime Table</font>
    <div id="divResult"></div>
    <table width="320" border="0">
      <th>AID</th>
      <td><input type="text" id="aid2" name="AID1" size="8"></td>
      </tr>
      <tr>
      <tr>
      <th>DateToShow</th>
      <td><input type="date" id="date2" name="Date1" size="8"></td>
      </tr>
      <tr>
      <th>TimeStart</th>
      <td><input type="text" id="timestart2" name="Timestart1" size="8"></td>
      </tr>
      <tr>
      <th>TimeEnd</th>
      <td><input type="text" id="timeend2" name="Timeend1" size="8"></td>
      </tr>
      </table>
      <input type="submit" name="submit" value="submit">
      </form>
    </div>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        
        <!--///////////////////////SUB TABLE////////////////////////////////-->

        <!--CONNECT HOST/////////////////////////////////////////////////////////////-->
                <?php
                   $str_server = "localhost";
                     $str_username = "root";
                     $str_password = "";
                     $str_dbname = "animation";
                     $obj_con = mysql_connect($str_server,$str_username,$str_password);
                     mysql_select_db($str_dbname,$obj_con);
                     mysql_query("SET NAMES UTF8");
                     $str_sql1 = "SELECT AID,AName FROM animationinfo";
                     $rs1 = mysql_query($str_sql1,$obj_con);
                ?>
        <!--////////////////////////////////////////////////////////////////////////////////-->
        <section>
          <div class="container">
                  <div class="row">
                      <div class="col-lg-12">
                          <font size="5" color="black">RELATION BETWEEN AID AND AName</font>

                          <table border="0" cellpadding="5" cellspacing="0" width="700" height="20">
                              <tr>
                                 <td width="10%"><p class="lead section-lead">AID</p></td>
                                 <td width="90%"><p class="lead section-lead">AName</p></td>
                               </tr>
                               <?php while($row_Animation = mysql_fetch_array($rs1)) { ?>
                               <tr>
                                 <td><?php echo $row_Animation['AID'] ?></td>
                                 <td><?php echo $row_Animation['AName'] ?></td>
                              </tr>
                              <?php } ?>
                          </table>

                      </div>
                  </div>
                  <!-- /.row -->
          </div>
        </section>
        <!--////////////////////////////////////////////////////////////////-->


</body>
</html>





