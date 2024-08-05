   <head> 
      <meta charset="utf-8" />

      <title>ab872 - TestMySQL</title> 

      <style>

         .grid-container {
              border: 3px solid rgb(211, 211, 211, 0.9);      
              display: grid;
              grid-gap: 1em;
              grid-template-columns: 0.5fr 4fr 4fr 0.5fr;
              grid-template-rows: 03vh 40vh 03vh; 
         }


         .grid-item {
              <!--     border: 3px solid red;    -->
         }

         .grid-itemTopBottom {
              <!--     border: 3px solid purple;    -->
         }

         .grid-itemMargin {
              <!--     border: 3px solid green;    -->
         }



         .grid-containerIntro {
              border: 3px solid rgb(211, 211, 211, 1.0);      
              display: grid;
              grid-gap: 1em;
              grid-template-columns: 0.5fr 4fr 0.5fr;
              grid-template-rows: 03vh 50vh 03vh; 
         }


         .grid-containerReference {
              border: 3px solid rgb(211, 211, 211, 1.0);      
              display: grid;
              grid-gap: 1em;
              grid-template-columns: 0.5fr 4fr 0.5fr;
              grid-template-rows: 03vh 1040vh 03vh; 
         }


        .grid-itemReference {

         }

         .grid-itemTopBottomReference {
      
         }

         .grid-itemMarginReference {

         }



       </style>


   </head>

    <body>


<center>
<div class="grid-containerIntro">

     <div class="grid-itemMargin">
     </div>
     <div class="grid-itemTopBottom">
     </div>
     <div class="grid-itemMargin">
     </div>




     <div class="grid-itemMargin">
     </div>

     <div class="grid-item"><br>

<center>
<span id="pageTitle1" style="color:Navy;font-size:48px;"><b>
Test if MySQL is available.
</b></span>
</center><br>





<?php
echo "<br>"; 
echo '<span style="color:Maroon;font-size:22px;">';
echo '<b>';
echo '&nbsp;&nbsp;&nbsp;';
echo PHP_OS."   ";
echo "version   "; 
echo PHP_VERSION."<br>";
echo '&nbsp;&nbsp;&nbsp;';
echo date("Y/m/d");
echo "&nbsp;&nbsp;&nbsp;";
echo date("h:i:sa");
echo '</b>';
echo '</span>';
echo "<br>"; 
?>


<br>
<center> 
<span id="aboutTitle" style="color:Navy;font-size:38px;"><b>About this page</b></span>
</center><br>
<span id="textIntroduction1" style="color:Black;font-size:23px;">
This page tests if 
<span id="textIntroductionEmphasized1" style="color:Navy;font-size:25px;">
<b>
MySQL
</b>
</span>
 is configured correctly for access. Enter the 
<span id="textIntroductionEmphasized2" style="color:Navy;font-size:25px;">
<b>
connection string parameters
</b>
</span>
 ( host name, user name, user password, database name and SSL certificate name if required ). Click the 
button associated with each item to set the value. An attempt will be
made to 
<span id="textIntroductionEmphasized3" style="color:Navy;font-size:25px;">
<b>
connect
</b>
</span>
 to the database. If the connection is successful, a message indicating
success will be displayed, and the connection will be closed. If the connection 
is not successful, an error message will be displayed. 

</span>
<br>



</center>


     </div>


     <div class="grid-itemMargin">
     </div>



     <div class="grid-itemMargin">
     </div>
     <div class="grid-itemTopBottom">
     </div>
     <div class="grid-itemMargin">
     </div>

     <!--  end of grid container Intro  -->
</div>
</center><br><br>








<?php
$host = "?";
$userName = "?";
$password = "?";
$database = "?";
$sslCert = "?";
?>


<?php
  if(isset($_POST['hostNameButton'])){
    echo 'You pressed "Set Host Name". The value is: ';
    echo $_POST['hostName'];
    $host = $_POST['hostName'];
    $userName = $_POST['userID'];
    $password = $_POST['userPassword'];
    $database = $_POST['dbName'];
    $sslCert = $_POST['sslName'];
  }
  if(isset($_POST['userIDbutton'])){
    echo 'You pressed "Set User Name". The value is: ';
    echo $_POST['userID'];
    $host = $_POST['hostName'];
    $userName = $_POST['userID'];
    $password = $_POST['userPassword'];
    $database = $_POST['dbName'];
    $sslCert = $_POST['sslName'];
  }
  if(isset($_POST['userPasswordButton'])){
    echo 'You pressed "Set User Password". The value is: ';
    echo $_POST['userPassword'];
    $host = $_POST['hostName'];
    $userName = $_POST['userID'];
    $password = $_POST['userPassword'];
    $database = $_POST['dbName'];
    $sslCert = $_POST['sslName'];
  }
  if(isset($_POST['dbNameButton'])){
    echo 'You pressed "Set DB Name". The value is: ';
    echo $_POST['dbName'];
    $host = $_POST['hostName'];
    $userName = $_POST['userID'];
    $password = $_POST['userPassword'];
    $database = $_POST['dbName'];
    $sslCert = $_POST['sslName'];
  }
  if(isset($_POST['sslCertButton'])){
    echo 'You pressed "Set SSL Certificate". The value is: ';
    echo $_POST['sslName'];
    $host = $_POST['hostName'];
    $userName = $_POST['userID'];
    $password = $_POST['userPassword'];
    $database = $_POST['dbName'];
    $sslCert = $_POST['sslName'];
  }
?>

<form action="" method="post">
  <input type="text" name="hostName" id="hostName" value=<?php echo $host?>>
  <button type="submit" name="hostNameButton">Set Host Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button><br>
  <input type="text" name="userID" id="userID" value=<?php echo $userName?>>
  <button type="submit" name="userIDbutton">Set User Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button><br>
  <input type="text" name="userPassword" id="userPassword" value=<?php echo $password?>>
  <button type="submit" name="userPasswordButton">Set User Password&nbsp;</button><br>
  <input type="text" name="dbName" id="dbName" value=<?php echo $database?>>
  <button type="submit" name="dbNameButton">Set DB Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button><br>
  <input type="text" name="sslName" id="sslName" value=<?php echo $sslCert?>>
  <button type="submit" name="sslCertButton">Set SSL Certificate&nbsp;&nbsp;</button>
</form>

<br><br>

<?php
?>







<?php
  
try {

//  $dbConnection = mysqli_init();
//  mysqli_ssl_set($dbConnection, NULL, NULL, "DiGiCertGlobalRootCA.crt.pem", NULL, NULL);
//  mysqli_real_connect($dbConnection, 
//                        "serverName.mysql.database.azure.com", 
//                        "User Name", 
//                        "User Password", 
//                        "Database Neme",
//                        3306,
//                        MYSQLI_CLIENT_SSL);


        echo '<span style="color:Navy;font-size:28px;"><b>
Attempting to connect to the server ...</b><br></span>';

        echo '<span style="color:Maroon;font-size:18px;"><b>
( If the MySQL server is running and nothing appears after this line of text,</b><br></span>';
        echo '<span style="color:Maroon;font-size:18px;"><b>
then the MySQL configuration for this Web app is not correct. )</b><br></span>';


    $dbConnection = mysqli_connect($host,$userName,$password, $database); 

    echo "<br>";

    if (!$dbConnection) { 
        die(
            '<span style="color:Maroon;font-size:28px;"><b>
Check your login credentials ... Could not connect to MySQL: </b></span>'  . mysqli_error()
        ); 
    }
    else
    { 
        echo '<span style="color:Navy;font-size:28px;"><b>
Connection was successful ... Get the server info.</b><br></span>';
        echo '<span style="color:Navy;font-size:28px;"><b>Server info:</b><br></span>';
        echo '<span style="color:Black;font-size:28px;"><b>';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        echo mysqli_get_server_info($dbConnection); 
        echo '</b><br></span>';
        echo '<span style="color:Navy;font-size:28px;"><b>Close the connection.</b><br></span>';
        mysqli_close($dbConnection); 
    }

echo "<br>";

} catch (Exception $e) {
     echo 'Caught exception: ', $e->getMessage(), "\n";
}


?> 





<p>
<br>

<span id="pageEnd1" style="color:Navy;font-size:48px;"><b>
End of page.
</b></span>
</p>

    </body>
