   <head> 
      <meta charset="utf-8" />

      <title>ab872 - TestMySQL</title> 

<script>

function setCookies() {
    //  alert ("set cookies");

    document.cookie = "screen_width=" + screen.width;
    document.cookie = "screen_height=" + screen.height;

    //  reload the page after saving the cookies
    window.location.reload();

   //  end function
}

</script>



<?php

$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'Firefox') !== false) {
   $isFirefox = true;
} else {
   $isFirefox = false;
}

if (strpos($userAgent, 'Chrome') !== false) {
   $isChrome = true;
} else {
   $isChrome = false;
}

if (strpos($userAgent, 'Safari') !== false) {
   $isSafari = true;
} else {
   $isSafari = false;
}

//    //  Safari with LINE extensions???
if (strpos($userAgent, 'Safari Line') !== false) {
   $isSafariLine = true;
} else {
   $isSafariLine = false;
}

if (strpos($userAgent, 'iPad') !== false) {
   $isiPad = true;
   //  echo ' <script> alert("set isiPad to TRUE"); </script>';
} else {
   $isiPad = false;
   //  echo ' <script> alert("set isiPad to FALSE"); </script>';
}

if (strpos($userAgent, 'iPhone') !== false) {
   $isiPhone = true;
   //  echo ' <script> alert("set isiPhone to TRUE"); </script>';
} else {
   $isiPhone = false;
   //  echo ' <script> alert("set isiPhone to FALSE"); </script>';
}

if (strpos($userAgent, 'Macintosh') !== false) {
   $isMac = true;
} else {
   $isMac = false;
}

//  old Edge on Win10
if (strpos($userAgent, 'Edge') !== false) {
   $isEdge = true;
} else {
   $isEdge = false;
}

//  new Edge on Win10
if (strpos($userAgent, 'Edg/') !== false) {
   $isNewEdge = true;
} else {
   $isNewEdge = false;
}

//  Edge on Android
if (strpos($userAgent, 'EdgA/') !== false) {
   $isAndroidEdge = true;
} else {
   $isAndroidEdge = false;
}

if (strpos($userAgent, 'Windows NT 10.0') !== false) {
   $isWin10 = true;
} else {
   $isWin10 = false;
}

if (strpos($userAgent, 'Android') !== false) {
   $isAndroid = true;
} else {
   $isAndroid = false;
}

if (strpos($userAgent, 'Android 4') !== false) {
   $isAndroid4 = true;
} else {
   $isAndroid4 = false;
}

if (strpos($userAgent, 'Android 5') !== false) {
   $isAndroid5 = true;
} else {
   $isAndroid5 = false;
}

if (strpos($userAgent, 'Android 6') !== false) {
   $isAndroid6 = true;
} else {
   $isAndroid6 = false;
}

if (strpos($userAgent, 'Android 8') !== false) {
   $isAndroid8 = true;
} else {
   $isAndroid8 = false;
}

if (strpos($userAgent, 'Android 9') !== false) {
   $isAndroid9 = true;
} else {
   $isAndroid9 = false;
}

if (strpos($userAgent, 'Android 10') !== false) {
   $isAndroid10 = true;
} else {
   $isAndroid10 = false;
}

if (strpos($userAgent, 'Android 11') !== false) {
   $isAndroid11 = true;
} else {
   $isAndroid11 = false;
}

if (strpos($userAgent, 'Android 12') !== false) {
   $isAndroid12 = true;
} else {
   $isAndroid12 = false;
}


   //  there are some cases where there are duplicate matches
   //  these overrides correct the situation

    if ($isChrome) { 
           $isSafari = false;
    }


    if ($isEdge) { 
           $isChrome = false; 
    } 

    if ($isNewEdge) { 
           $isChrome = false; 
    } 

    if ($isAndroidEdge) { 
           $isChrome = false; 
    } 

    if ($isSafariLine) { 
           $isSafari = false; 
    } 
    




if (isset($_COOKIE['screen_width'])) {
   //  echo "try to get the screen width<br>";
   $screenWidth = $_COOKIE['screen_width'];
   //  echo "get the screen width was successful<br>";
   //  echo "screen width = $screenWidth<br>";

} else {
   //  echo ' <script> alert("An error was encountered getting the screen width.\nReload the page manually if it does not reload automatically."); </script>';
   echo "<script> setCookies(); </script>";
}

if (isset($_COOKIE['screen_height'])) {
   //  echo "try to get the screen height<br>";
   $screenHeight = $_COOKIE['screen_height'];
   //  echo "get the screen height was successful<br>";
   //  echo "screen height = $screenHeight<br>";

} else {
   //  echo ' <script> alert("An error was encountered getting the screen height.\nReload the page manually if it does not reload automatically."); </script>';
   echo "<script> setCookies(); </script>";
}

?>


<?php
  //  echo ' <script> alert("adjust screen based on screen width of " + screen.width + "<br>"); </script>';
?>


<?php

        //  values for the default screen width

	$pageTitleSize = "48px";
	$textSystemInfoSize = "22px";

	$containerRows = "40vh";
	$containerIntroRows = "50vh";
	$containerReferenceRows = "1040vh";

	$aboutTitleSize = "38px";
	$textIntroduction1Size = "23px";
	$textIntroductionEmphasized1Size = "25px";
	$textIntroductionEmphasized2Size = "25px";
	$textIntroductionEmphasized3Size = "25px";

	$hostNameSize = "105";
	$userIDSize = "105";
	$userPasswordSize = "105";
	$dbNameSize = "105";
	$sslNameSize = "105";

	$attemptingToConnectMsgSize = "28px";
	$nothingAppearsMsgSize = "18px";
	$nothingAppearsMsg2Size = "18px";
	$checkCredentialsMsgSize = "28px";
	$connectionSuccessfulMsgSize = "28px";
	$serverInfoTitleMsgSize = "28px";
	$serverInfoMsgSize = "28px";
	$closeConnectionMsgSize = "28px";
	$endOfPageMsgSize = "48px";


	switch($screenWidth) {
      		case 360:      //  Android 
	         //	echo ' <script> alert("using screen width = 360" + "<br>"); </script>';
	
			// screen is too small for the size of the inputs to be the default value of 105
			$hostNameSize = "55";
			$userIDSize = "55";
			$userPasswordSize = "55";
			$dbNameSize = "55";
			$sslNameSize = "55";

		        if($isChrome) {

			}

		        if($isFirefox) {

			}

		        if($isAndroidEdge) {

			}

	        break;
		case 375:      //  iPad, iPhone
         	//	echo ' <script> alert("using screen width = 375" + "<br>"); </script>';

			// screen is too small for the size of the inputs to be the default value of 105
			$hostNameSize = "55";
			$userIDSize = "55";
			$userPasswordSize = "55";
			$dbNameSize = "55";
			$sslNameSize = "55";

         	break;
      		case 390:      //  iPad, iPhone
         	//	echo ' <script> alert("using screen width = 390" + "<br>"); </script>';

			// screen is too small for the size of the inputs to be the default value of 105
			$hostNameSize = "55";
			$userIDSize = "55";
			$userPasswordSize = "55";
			$dbNameSize = "55";
			$sslNameSize = "55";

         	break;
      		case 408:      
         	//	echo ' <script> alert("using screen width = 408" + "<br>"); </script>';

			// screen is too small for the size of the inputs to be the default value of 105
			$hostNameSize = "55";
			$userIDSize = "55";
			$userPasswordSize = "55";
			$dbNameSize = "55";
			$sslNameSize = "55";

			switch($screenHeight) {
				case 929:      
         			//	echo ' <script> alert("using screen height = 929" + "<br>"); </script>';
                                        
	         		break;
      				default:
   
				//  end switch
			}
                           
         	break;
      		case 412:      //  Android
         	//	echo ' <script> alert("using screen width = 412" + "<br>"); </script>';

			// screen is too small for the size of the inputs to be the default value of 105
			$hostNameSize = "55";
			$userIDSize = "55";
			$userPasswordSize = "55";
			$dbNameSize = "55";
			$sslNameSize = "55";

			switch($screenHeight) {
				case 922:      
         			//	echo ' <script> alert("using screen height = 922" + "<br>"); </script>';

	         		break;
      				case 938:      
         			//	echo ' <script> alert("using screen height = 390" + "<br>"); </script>';

	         		break;
      				default:
   
				//  end switch
			}

        	break;
      		case 414:      //  iPad, iPhone
         	//	echo ' <script> alert("using screen width = 414" + "<br>"); </script>';
	
			// screen is too small for the size of the inputs to be the default value of 105
			$hostNameSize = "55";
			$userIDSize = "55";
			$userPasswordSize = "55";
			$dbNameSize = "55";
			$sslNameSize = "55";

        	break;
      		case 768:      //  iPad
         	//	echo ' <script> alert("using screen width = 768" + "<br>"); </script>';
	
			// screen might be too small for the size of the inputs to be the default value of 105
			$hostNameSize = "55";
			$userIDSize = "55";
			$userPasswordSize = "55";
			$dbNameSize = "55";
			$sslNameSize = "55";

         	break;
      		case 820:      //  iPad
         	//	echo ' <script> alert("using screen width = 820" + "<br>"); </script>';
	
			// screen might be too small for the size of the inputs to be the default value of 105
			$hostNameSize = "55";
			$userIDSize = "55";
			$userPasswordSize = "55";
			$dbNameSize = "55";
			$sslNameSize = "55";

         	break;
      		case 1133:     //  Android
         	//	echo ' <script> alert("using screen width = 1133" + "<br>"); </script>';
                            
         		if($isChrome) {
            			//  echo ' <script> alert("Chrome using screen width = 1133" + "<br>"); </script>';
         		} 
                               
         		if($isFirefox) {
            			//  echo ' <script> alert("Firefox using screen width = 1133" + "<br>"); </script>';
				$containerIntroRows = "120vh";

				// inputs with the default value of 105 are too long
				$hostNameSize = "75";
				$userIDSize = "75";
				$userPasswordSize = "75";
				$dbNameSize = "75";
				$sslNameSize = "75";
         		} 
                               
         		if($isNewEdge) {
            			//  echo ' <script> alert("Microsoft Edge (new) using screen width = 1133" + "<br>"); </script>';
         		} 
                               
         		if($isEdge) {
            			//  echo ' <script> alert("Microsoft Edge (old) using screen width = 1133" + "<br>"); </script>';
         		} 
                        
                           
         	break;
      		case 1143:     //  Android
         	//	echo ' <script> alert("using screen width = 1143" + "<br>"); </script>';
                         
         		if($isChrome) {
            			//  echo ' <script> alert("Chrome using screen width = 1143" + "<br>"); </script>';
				$containerIntroRows = "100vh";
         		} 
                              
         		if($isFirefox) {
            			//  echo ' <script> alert("Firefox using screen width = 1143" + "<br>"); </script>';
         		} 
                            
         		if($isAndroidEdge) {
            			//  echo ' <script> alert("Microsoft Edge (Android) using screen width = 1143" + "<br>"); </script>';
				$containerIntroRows = "100vh";
         		} 
                           
         		if($isNewEdge) {
            			//  echo ' <script> alert("Microsoft Edge (new) using screen width = 1143" + "<br>"); </script>';
         		} 
                             
         		if($isEdge) {
            			//  echo ' <script> alert("Microsoft Edge (old) using screen width = 1143" + "<br>"); </script>';
        	 	} 
                       
         	break;
       		case 1280:     //  Win10
         	//	echo ' <script> alert("using screen width = 1280" + "<br>"); </script>';
                            
         		if($isChrome) {
            			//  echo ' <script> alert("Chrome using screen width = 1280" + "<br>"); </script>';
				$containerIntroRows = "80vh";
         		} 
                        
         		if($isFirefox) {
            			//  echo ' <script> alert("Firefox using screen width = 1280" + "<br>"); </script>';
         		} 
                           
         		if($isNewEdge) {
            			//  echo ' <script> alert("Microsoft Edge (new) using screen width = 1280" + "<br>"); </script>';
         		} 
                     
         		if($isEdge) {
            			//  echo ' <script> alert("Microsoft Edge (old) using screen width = 1280" + "<br>"); </script>';
         		} 
                   
         	break;
       		case 1366:     //  Win10
         	//	echo ' <script> alert("using screen width = 1366" + "<br>"); </script>';
                            
         		if($isChrome) {
            			//  echo ' <script> alert("Chrome using screen width = 1366" + "<br>"); </script>';
         		} 
                        
         		if($isFirefox) {
            			//  echo ' <script> alert("Firefox using screen width = 1366" + "<br>"); </script>';
         		} 
                           
         		if($isNewEdge) {
            			//  echo ' <script> alert("Microsoft Edge (new) using screen width = 1366" + "<br>"); </script>';
         		} 
                     
         		if($isEdge) {
            			//  echo ' <script> alert("Microsoft Edge (old) using screen width = 1366" + "<br>"); </script>';
         		} 
                   
         	break;
      		case 1536:     //  Win10
         	//	echo ' <script> alert("using screen width = 1536" + "<br>"); </script>';
                               
         		if($isChrome) {
            			//  echo ' <script> alert("Chrome using screen width = 1536" + "<br>"); </script>';
				$containerIntroRows = "70vh";
         		} 
                        
         		if($isFirefox) {
            			//  echo ' <script> alert("Firefox using screen width = 1536" + "<br>"); </script>';
				$containerIntroRows = "60vh";
         		} 
                           
         		if($isNewEdge) {
            			//  echo ' <script> alert("Microsoft Edge (new) using screen width = 1536" + "<br>"); </script>';
				$containerIntroRows = "100vh";
         		} 
                            
         		if($isEdge) {
            			//  echo ' <script> alert("Microsoft Edge (old) using screen width = 1536" + "<br>"); </script>';
         		} 
                           
         	break;
      		case 1707:     //  Win10
         	//	echo ' <script> alert("using screen width = 1707" + "<br>"); </script>';
                          
         		if($isChrome) {
            			//  echo ' <script> alert("Chrome using screen width = 1707" + "<br>"); </script>';
         		} 
                        
         		if($isFirefox) {
            			//  echo ' <script> alert("Firefox using screen width = 1707" + "<br>"); </script>';
         		} 
                           
         		if($isNewEdge) {
            			//  echo ' <script> alert("Microsoft Edge (new) using screen width = 1707" + "<br>"); </script>';
         		} 
                          
         		if($isEdge) {
            			//  echo ' <script> alert("Microsoft Edge (old) using screen width = 1707" + "<br>"); </script>';
         		} 
                              
         	break;
      		default:
   
		//  end switch
	}
   //  echo "containerIntroRows = $containerIntroRows";
?>
      <style>



         .grid-container {
              border: 3px solid rgb(211, 211, 211, 0.9);      
              display: grid;
              grid-gap: 1em;
              grid-template-columns: 0.5fr 4fr 4fr 0.5fr;
              grid-template-rows: 03vh <?php echo $containerRows; ?> 03vh; 
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
              grid-template-rows: 03vh <?php echo $containerIntroRows; ?> 03vh; 
         }


         .grid-containerReference {
              border: 3px solid rgb(211, 211, 211, 1.0);      
              display: grid;
              grid-gap: 1em;
              grid-template-columns: 0.5fr 4fr 0.5fr;
              grid-template-rows: 03vh <?php echo $containerReferenceRows; ?> 03vh; 
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
<span id="pageTitle" style="color:Navy;font-size:<?php echo $pageTitleSize; ?>;"><b>
Test if MySQL is available.
</b></span>
</center><br>



<?php
echo "<br>"; 
echo '<span id="textSystemInfo" style="color:Maroon;font-size:<?php echo $textSystemInfoSize; ?>;">';
echo '<b>';
echo '&nbsp;&nbsp;&nbsp;';
echo PHP_OS."   ";
echo "version   "; 
echo PHP_VERSION."<br>";
echo '&nbsp;&nbsp;&nbsp;';
echo date("Y/m/d");
echo "&nbsp;&nbsp;&nbsp;";
echo date("h:i:sa")."<br>";
echo $_SERVER['HTTP_USER_AGENT']."<br>";



// Display device type.
if (strpos($userAgent, 'Windows') !== false) {
   echo "Windows Desktop   ";
} elseif (strpos($userAgent, 'Windows Phone') !== false) {
   echo "Windows Phone   ";
} elseif (strpos($userAgent, 'iPad') !== false) {
   echo "iPad   ";
} elseif (strpos($userAgent, 'iPhone') !== false) {
   echo "iPhone   ";
} elseif ($isMac) {
   echo "Macintosh Desktop   ";
} elseif ($isiPhone) {
   echo "iPhone   ";
} elseif ($isiPad) {
   echo "iPad   ";
} else {
   echo "Mobile    ";
}




//  Display Browser
if ($isEdge) { 
       echo " - Microsoft Edge (old)   ";    
} elseif ($isNewEdge) { 
       echo " - Microsoft Edge (new)   ";    
} elseif ($isAndroidEdge) { 
       echo " - Microsoft Edge    ";    
} elseif ($isSafariLine) { 
       echo " - Safari Line   ";    
} elseif ($isFirefox) {
   echo " - Firefox   ";    
} elseif ($isChrome) {
   echo " - Chrome   ";
} elseif ($isSafari) {
   echo " - Safari   ";
} 



else {
   echo " - Unknown Browser   ";    
}


//  display OS
if ($isWin10) {
   echo " - Win10<br>";
} elseif ($isAndroid) {
   echo " - Android<br>";
}  elseif ($isiPad) {
   echo " - iOS<br>";
}  elseif ($isiPhone) {
   echo " - iOS<br>";
} else {
   echo " - Unknown OS<br>";
}


echo "Screen width = $screenWidth";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
echo "Screen height = $screenHeight";



echo '</b>';
echo '</span>';
echo "<br>"; 
?>



<br>
<center> 
<span id="aboutTitle" style="color:Navy;font-size:<?php echo $aboutTitleSize; ?>;"><b>About this page</b></span>
</center><br>
<span id="textIntroduction1" style="color:Black;font-size:<?php echo $textIntroduction1Size; ?>;">
This page tests if 
<span id="textIntroductionEmphasized1" style="color:Navy;font-size:<?php echo $textIntroductionEmphasized1Size; ?>;">
<b>
MySQL
</b>
</span>
 is configured correctly for access. Enter the 
<span id="textIntroductionEmphasized2" style="color:Navy;font-size:<?php echo $textIntroductionEmphasized2Size; ?>;">
<b>
connection string parameters
</b>
</span>
 ( host name, user name, user password, database name and SSL certificate name if required ). Click the 
button associated with each item to set the value. An attempt will be
made to 
<span id="textIntroductionEmphasized3" style="color:Navy;font-size:<?php echo $textIntroductionEmphasized3Size; ?>;">
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
    //  echo 'You pressed "Set Host Name". The value is: ';
    //  echo $_POST['hostName'];
//    echo ' <script> alert("You pressed \"Set Host Name\"."); </script>';

    $host = $_POST['hostName'];
    $userName = $_POST['userID'];
    $password = $_POST['userPassword'];
    $database = $_POST['dbName'];
    $sslCert = $_POST['sslName'];
  }
  if(isset($_POST['userIDbutton'])){
    //  echo 'You pressed "Set User Name". The value is: ';
    //  echo $_POST['userID'];
//    echo ' <script> alert("You pressed \"Set User Name\"."); </script>';

    $host = $_POST['hostName'];
    $userName = $_POST['userID'];
    $password = $_POST['userPassword'];
    $database = $_POST['dbName'];
    $sslCert = $_POST['sslName'];
  }
  if(isset($_POST['userPasswordButton'])){
    //  echo 'You pressed "Set User Password". The value is: ';
    //  echo $_POST['userPassword'];
//    echo ' <script> alert("You pressed \"Set User Password\"."); </script>';

    $host = $_POST['hostName'];
    $userName = $_POST['userID'];
    $password = $_POST['userPassword'];
    $database = $_POST['dbName'];
    $sslCert = $_POST['sslName'];
  }
  if(isset($_POST['dbNameButton'])){
    //  echo 'You pressed "Set DB Name". The value is: ';
    //  echo $_POST['dbName'];
//    echo ' <script> alert("You pressed \"Set DB Name\"."); </script>';

    $host = $_POST['hostName'];
    $userName = $_POST['userID'];
    $password = $_POST['userPassword'];
    $database = $_POST['dbName'];
    $sslCert = $_POST['sslName'];
  }
  if(isset($_POST['sslCertButton'])){
    //  echo 'You pressed " *** Set SSL Certificate". The value is: ';
    //  echo $_POST['sslName'];
    echo ' <script> alert("You pressed \"Set SSL Certificate\". \nSSL Certificates are not yet supported."); </script>';

    $host = $_POST['hostName'];
    $userName = $_POST['userID'];
    $password = $_POST['userPassword'];
    $database = $_POST['dbName'];
    $sslCert = $_POST['sslName'];
  }
?>

<form action="" method="post">
  <input type="text" name="hostName" id="hostName" alt="enter the host name here" size="<?php echo $hostNameSize; ?>" maxlength="100" value=<?php echo $host?>>
  <button type="submit" name="hostNameButton">Set Host Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button><br>
  <input type="text" name="userID" id="userID" alt="enter the user name here" size="<?php echo $userIDSize; ?>" maxlength="100" value=<?php echo $userName?>>
  <button type="submit" name="userIDbutton">Set User Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button><br>
  <input type="text" name="userPassword" id="userPassword" alt="enter the user password here" size="<?php echo $userPasswordSize; ?>" maxlength="100" value=<?php echo $password?>>
  <button type="submit" name="userPasswordButton">Set User Password&nbsp;</button><br>
  <input type="text" name="dbName" id="dbName" alt="enter the database name here" size="<?php echo $dbNameSize; ?>" maxlength="100" value=<?php echo $database?>>
  <button type="submit" name="dbNameButton">Set DB Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button><br>
  <input type="text" name="sslName" id="sslName" alt="enter the SSL certificate name here" size="<?php echo $sslNameSize; ?>" maxlength="100" value=<?php echo $sslCert?>>
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



        echo '<span id="attemptingToConnectMsg" style="color:Navy;font-size:<?php echo $attemptingToConnectMsgSize; ?>;"><b>
Attempting to connect to the server ...</b><br></span>';

        echo '<span id="nothingAppearsMsg" style="color:Maroon;font-size:<?php echo $nothingAppearsMsgSize; ?>;"><b>
( If the MySQL server is running and nothing appears after this line of text,</b><br></span>';
        echo '<span id="nothingAppearsMsg2" style="color:Maroon;font-size:<?php echo $nothingAppearsMsg2Size; ?>;"><b>
then the MySQL configuration for this Web app is not correct. )</b><br></span>';


    $dbConnection = mysqli_connect($host,$userName,$password, $database); 

    echo "<br>";



    if (!$dbConnection) { 
        die(
            '<span id="checkCredentialsMsg" style="color:Maroon;font-size:<?php echo $checkCredentialsMsgSize; ?>;"><b>
Check your login credentials ... Could not connect to MySQL: </b></span>'  . mysqli_error()
        ); 
    }
    else
    { 
        echo '<span id="connectionSuccessfulMsg" style="color:Navy;font-size:<?php echo $connectionSuccessfulMsgSize; ?>;"><b>
Connection was successful ... Get the server info.</b><br></span>';
        echo '<span id="serverInfoTitleMsg" style="color:Navy;font-size:<?php echo $serverInfoTitleMsgSize; ?>;">
<b>Server info:</b><br></span>';
        echo '<span id="serverInfoMsg" style="color:Black;font-size:<?php echo $serverInfoMsgSize; ?>;"><b>';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        echo mysqli_get_server_info($dbConnection); 
        echo '</b><br></span>';
        echo '<span id="closeConnectionMsg" style="color:Navy;font-size:<?php echo $closeConnectionMsgSize; ?>;"><b>Close the connection.</b><br></span>';
        mysqli_close($dbConnection); 
    }

echo "<br>";

} catch (Exception $e) {
     echo 'An exception occurred: ', $e->getMessage(), "\n";
}


?> 



      <p>
         <br>

         <span id="endOfPageMsg" style="color:Navy;font-size:<?php echo $endOfPageMsgSize; ?>;"><b>
              End of page.
         </b></span>
      </p>

    </body>
