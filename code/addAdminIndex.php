<html>
<head>
  <script language="JavaScript">
  </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/full-width-pics.css" rel="stylesheet">
<title>ADD ADMIN</title>
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
          <li>
            <a href="http://localhost/Animation/tableIndex.php#">TABLE</a>
        </li>
        <li class="active">
            <a href="http://localhost/Animation/addAdminIndex.php#">ADD ADMIN</a>
        </li>
      </ul>
    </div>
<!--///////////////////////////////////////////////////////////////////////////////////////////-->


<!--ADD ADMIN ///////////////////////////////////////////////////////////////////////////////////////////-->
  <div>
    <form action="SqlAddAdmin.php" name="frmMain" method="post" target="iframe_target">
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
  <font size="5" color="black">ADD ADMIN</font>
 <div id="divResult"></div>
    <table width="320" border="0">
      <tr>
      <th>USERNAME</th>
      <td><input type="text" id="ad1" name="M1" size="100"></td>
      </tr>
      <th>PASSWORD</th>
      <td><input type="text" id="ad2" name="M2" size="100"></td>
      </tr>
      </table>
      <input type="submit" name="submit" value="regis">
      </form>
    </div>

<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->




</body>
</html>





