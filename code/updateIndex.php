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
<title>Update</title>
</head>
<body>
<!--CLICK LINK BUTTON ///////////////////////////////////////////////////////////////////////////////////////////-->
<div>
      <ul class="nav nav-pills nav-fixed-top ">
        <li>
            <a href="http://localhost/Animation/insertIndex.php#">INSERT</a>
        </li>
        <li class="active">
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


<!--UPDATE ANIMATION INFO///////////////////////////////////////////////////////////////////////////////////////////-->
  <div>
    <form action="UpdateSqlanimationinfo.php" name="frmMain" method="post" target="iframe_target">
    <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>

  <font size="5" color="black">Animation Info Table</font>
 <div id="divResult"></div>
    <table width="320" border="0">
      <tr>
      <th>AID</th>
      <td><input type="text" name="A1" size="100"></td>
      </tr>
      <tr>
      <th>AName</th>
      <td><input type="text"  name="A2" size="100"></td>
      </tr>
      <tr>
      <th>Description</th>
      <td><input type="text" name="A3" size="100"></td>
      </tr>
      </table>
      <input type="submit" name="submit" value="submit">
      </form>
    </div>

<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--UPDATE AUTHOR///////////////////////////////////////////////////////////////////////////////////////////-->
  <div>
    <form action="UpdateSqlauthor.php" name="frmMain" method="post" target="iframe_target">
    <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>

  <font size="5" color="black">Animation Info Table</font>
 <div id="divResult"></div>
    <table width="320" border="0">
      <tr>
      <th>AuID</th>
      <td><input type="text" name="B1" size="100"></td>
      </tr>
      <tr>
      <th>AuName</th>
      <td><input type="text"  name="B2" size="100"></td>
      </tr>
      <tr>
      <th>History</th>
      <td><input type="text" name="B3" size="100"></td>
      </tr>
      </table>
      <input type="submit" name="submit" value="submit">
      </form>
    </div>

<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

</body>
</html>





