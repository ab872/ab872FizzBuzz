<!DOCTYPE html>
<html>

   <head> 
      <meta charset="utf-8" />

      <title>ab872 - PHP Demo</title> 

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
} else {
   $isiPad = false;
}

if (strpos($userAgent, 'iPhone') !== false) {
   $isiPhone = true;
} else {
   $isiPhone = false;
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

	$pageTitleSize = "3.625em";
	$textSystemInfoSize = "3em";
	$aboutTitleSize = "2.375em";
	$textIntroduction2Size = "1.75em";
	$textIntroductionEmphasized1Size = "1em";
	$textIntroductionEmphasized2Size = "1em";
	$textDemoSize = "1.75em";
	$textTestMySQLSize = "1.75em";
	$textTestSQLiteSize = "1.75em";
	$textTravelersSQLiteSize = "1.75em";


        $containerIntroRows = "80vh";
        $containerV3LicenseRows = "120vh";
        $containerReferenceRows = "1040vh";

        $copyRightMsgSize = "2.25em";
        $chromeBestMsgSize = "1.75em";
        $bootstrapIconWidth = "6em";
        $bootstrapIconHeight = "6em";
        $iconsProvidedMsgSize = "1.75em";
        $mitLicenseMsgSize = "1.75em";
        $iconsModifiedMsgSize = "1.75em";

        $containsPHPMsgSize = "1.125em";
        $phpLicenseMsgSize = "1.125em";
        $phpLogoMsgSize = "1.125em";
        $phpLogoModifiedMsgSize = "1.125em";
        $phpLogoTermsMsgSize = "1.125em";
        $phpTermsLocationMsgSize = "1.125em";
        $phpV3LicenseMsgSize = "1em";





switch($screenWidth) {
      case 360:      //  Android 
      //   echo ' <script> alert("using screen width = 360" + "<br>"); </script>';

         if($isChrome) {
            $containerIntroRows = "100vh";
            $containerV3LicenseRows = "420vh";
	 }

         if($isFirefox) {
            $containerIntroRows = "70vh";
            $containerV3LicenseRows = "230vh";
	 }

         if($isAndroidEdge) {
            $containerIntroRows = "100vh";
            $containerV3LicenseRows = "410vh";
         }

         break;
      case 375:      //  iPad, iPhone
      //   echo ' <script> alert("using screen width = 375" + "<br>"); </script>';

         break;
      case 390:      //  iPad, iPhone
      //   echo ' <script> alert("using screen width = 390" + "<br>"); </script>';

         break;
     case 408:      //  Android
     //	echo ' <script> alert("using screen width = 408" + "<br>"); </script>';

			switch($screenHeight) {
				case 929:      
         				//	echo ' <script> alert("using screen height = 929" + "<br>"); </script>';
                                	$containerIntroRows = "50vh";
            				$containerV3LicenseRows = "160vh";        
	         		break;
      				default:
   
				//  end switch
			}
                           
       	 break;
     case 412:      //  Android
     //	echo ' <script> alert("using screen width = 412" + "<br>"); </script>';
                        
	    	switch($screenHeight) {
	    		case 922:      
         		//	echo ' <script> alert("using screen height = 922" + "<br>"); </script>';
                    
	         	break;
      	    		case 938:      
         			//	echo ' <script> alert("using screen height = 390" + "<br>"); </script>';
                                $containerIntroRows = "80vh";
            			$containerV3LicenseRows = "300vh";
	         	break;
      	     		default:
                          
	       		//  end switch
	 	}
                    
         break;
      case 414:      //  iPad, iPhone
      //   echo ' <script> alert("using screen width = 414" + "<br>"); </script>';

        break;
      case 768:      //  iPad
      //   echo ' <script> alert("using screen width = 768" + "<br>"); </script>';

         break;
      case 820:      //  iPad
      //   echo ' <script> alert("using screen width = 820" + "<br>"); </script>';

         break;
      case 1133:     //  Android
      //   echo ' <script> alert("using screen width = 1133" + "<br>"); </script>';

         if($isChrome) {
            //  echo ' <script> alert("Chrome using screen width = 1133" + "<br>"); </script>';
            $containerIntroRows = "100vh";
            $containerV3LicenseRows = "240vh";
            $containerReferenceRows = "1250vh";
         } 

         if($isFirefox) {
            //  echo ' <script> alert("Firefox using screen width = 1133" + "<br>"); </script>';
            $containerIntroRows = "100vh";
            $containerV3LicenseRows = "220vh";
            $containerReferenceRows = "1040vh";
         } 

         if($isNewEdge) {
            //  echo ' <script> alert("Microsoft Edge (new) using screen width = 1133" + "<br>"); </script>';
            $containerIntroRows = "100vh";
            $containerV3LicenseRows = "180vh";
            $containerReferenceRows = "1040vh";
         } 

         if($isEdge) {
            //  echo ' <script> alert("Microsoft Edge (old) using screen width = 1133" + "<br>"); </script>';
            $containerIntroRows = "100vh";
            $containerV3LicenseRows = "180vh";
            $containerReferenceRows = "1040vh";
         } 


         break;
      case 1143:     //  Android
      //   echo ' <script> alert("using screen width = 1143" + "<br>"); </script>';

         if($isChrome) {
            //  echo ' <script> alert("Chrome using screen width = 1143" + "<br>"); </script>';
            $containerIntroRows = "100vh";
            $containerV3LicenseRows = "240vh";
            $containerReferenceRows = "1250vh";
         } 

         if($isFirefox) {
            //  echo ' <script> alert("Firefox using screen width = 1143" + "<br>"); </script>';
            $containerIntroRows = "80vh";
            $containerV3LicenseRows = "120vh";
            $containerReferenceRows = "1040vh";
         } 

         if($isAndroidEdge) {
            //  echo ' <script> alert("Microsoft Edge (Android) using screen width = 1143" + "<br>"); </script>';
            $containerIntroRows = "100vh";
            $containerV3LicenseRows = "=240vh";
            $containerReferenceRows = "1040vh";
         } 

         if($isNewEdge) {
            //  echo ' <script> alert("Microsoft Edge (new) using screen width = 1143" + "<br>"); </script>';
            $containerIntroRows = "100vh";
            $containerV3LicenseRows = "180vh";
            $containerReferenceRows = "1040vh";
         } 

         if($isEdge) {
            //  echo ' <script> alert("Microsoft Edge (old) using screen width = 1143" + "<br>"); </script>';
            $containerIntroRows = "100vh";
            $containerV3LicenseRows = "180vh";
            $containerReferenceRows = "1040vh";
         } 

         break;
       	 case 1280:     //  Win10
         	//	echo ' <script> alert("using screen width = 1280" + "<br>"); </script>';
                            
         		if($isChrome) {
            			//  echo ' <script> alert("Chrome using screen width = 1280" + "<br>"); </script>';
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
       	 	//   echo ' <script> alert("using screen width = 1366" + "<br>"); </script>';
                  
	 	if($isChrome) {
            		//  echo ' <script> alert("Chrome using screen width = 1366" + "<br>"); </script>';
            		$containerIntroRows = "80vh";
            		$containerV3LicenseRows = "140vh";
            		$containerReferenceRows = "1040vh";
         	} 
                        
         	if($isFirefox) {
            		//  echo ' <script> alert("Firefox using screen width = 1366" + "<br>"); </script>';
            		$containerIntroRows = "80vh";
            		$containerV3LicenseRows = "120vh";
            		$containerReferenceRows = "1040vh";
         	} 
                      
         	if($isNewEdge) {
            		//  echo ' <script> alert("Microsoft Edge (new) using screen width = 1366" + "<br>"); </script>';
            		$containerIntroRows = "100vh";
            		$containerV3LicenseRows = "180vh";
            		$containerReferenceRows = "1040vh";
         	} 
                         
         	if($isEdge) {
            		//  echo ' <script> alert("Microsoft Edge (old) using screen width = 1366" + "<br>"); </script>';
            		$containerIntroRows = "100vh";
            		$containerV3LicenseRows = "180vh";
            		$containerReferenceRows = "1040vh";
         	} 
                      
                    
         break;
      	 case 1536:     //  Win10
      	 	//   echo ' <script> alert("using screen width = 1536" + "<br>"); </script>';
                           
         	if($isChrome) {
            		//  echo ' <script> alert("Chrome using screen width = 1536" + "<br>"); </script>';
            		$containerIntroRows = "120vh";
            		$containerV3LicenseRows = "140vh";
            		$containerReferenceRows = "1040vh";
         	} 
                          
         	if($isFirefox) {
            		//  echo ' <script> alert("Firefox using screen width = 1536" + "<br>"); </script>';
            		$containerIntroRows = "160vh";
            		$containerV3LicenseRows = "150vh";
            		$containerReferenceRows = "1040vh";
         	} 
                        
         	if($isNewEdge) {
            		//  echo ' <script> alert("Microsoft Edge (new) using screen width = 1536" + "<br>"); </script>';
            		$containerIntroRows = "170vh";
            		$containerV3LicenseRows = "180vh";
            		$containerReferenceRows = "1040vh";
         	} 
                      
         	if($isEdge) {
            		//  echo ' <script> alert("Microsoft Edge (old) using screen width = 1536" + "<br>"); </script>';
            		$containerIntroRows = "100vh";
            		$containerV3LicenseRows = "180vh";
            		$containerReferenceRows = "1040vh";
         	} 
                   
                    
         break;
      	 case 1707:     //  Win10
      	 	//   echo ' <script> alert("using screen width = 1707" + "<br>"); </script>';
                        
         	if($isChrome) {
            		//  echo ' <script> alert("Chrome using screen width = 1707" + "<br>"); </script>';
            		$containerIntroRows = "80vh";
            		$containerV3LicenseRows = "140vh";
            		$containerReferenceRows = "1040vh";
         	} 
                          
         	if($isFirefox) {
            		//  echo ' <script> alert("Firefox using screen width = 1707" + "<br>"); </script>';
            		$containerIntroRows = "80vh";
            		$containerV3LicenseRows = "120vh";
            		$containerReferenceRows = "1040vh";
         	} 
                               
         	if($isNewEdge) {
            		//  echo ' <script> alert("Microsoft Edge (new) using screen width = 1707" + "<br>"); </script>';
            		$containerIntroRows = "100vh";
            		$containerV3LicenseRows = "180vh";
            		$containerReferenceRows = "1040vh";
         	} 
                           
         	if($isEdge) {
            		//  echo ' <script> alert("Microsoft Edge (old) using screen width = 1707" + "<br>"); </script>';
            		$containerIntroRows = "100vh";
            		$containerV3LicenseRows = "180vh";
            		$containerReferenceRows = "1040vh";
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


.grid-containerV3License {
     border: 3px solid rgb(211, 211, 211, 1.0);      
     display: grid;
     grid-gap: 1em;
     grid-template-columns: 0.5fr 4fr 0.5fr;
     grid-template-rows: 03vh <?php echo $containerV3LicenseRows; ?> 03vh; 
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
<span id="pageTitle" style="color:Navy;font-size:<?php echo $pageTitleSize; ?>;"><b>Welcome to the PHP demo.</b></span>
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
<span id="aboutTitle" style="color:Navy;font-size:<?php echo $aboutTitleSize; ?>;"><b>About this demo</b></span>
</center><br>
<span id="textIntroduction2" style="color:Black;font-size:<?php echo $textIntroduction2Size; ?>;">
This is a  
<span id="textIntroductionEmphasized1" style="color:Navy;font-size:<?php echo $textIntroductionEmphasized1Size; ?>;">
<b>PHP web app</b>
</span>
 and runs as an 
<span id="textIntroductionEmphasized2" style="color:Navy;font-size:<?php echo $textIntroductionEmphasized2Size; ?>;">
<b>Azure App Service</b></span>.
</span>
<br>
<br>




<a href="fizzbuzz.php" target="_blank">
	<span id="textDemo" style="font-size:<?php echo $textDemoSize; ?>;">
                  <b>Demo with PHP source code for the game FizzBuzz.</b></span></a>
<br><br>


<a href="testmysql.php" target="_blank">
	<span id="textTestMySQL" style="font-size:<?php echo $textTestMySQLSize; ?>;">
                 <b>Test if MySQL is available.</b></span></a>


<br><br>

<!--
<a href="travelers.php" target="_blank">
	<span id="textTravelersSQLite" style="font-size:<?php echo $textTravelersSQLiteSize; ?>;">
                 <b>Access the Travelers database under SQLite.</b></span></a>

<br><br>
-->


<a href="viewCrudP4.html" target="_blank">
<span id="linkCrudP4" style="color:Navy;font-size:1em;">
<b>
CRUD databases - part 4
</b>
</span></a> 
<svg id="pdfIcon5" xmlns="http://www.w3.org/2000/svg" width="5em" height="5em" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="pdfIcon5Title" aria-describedby="pdfIcon5Desc"> <title> id="pdfIcon5Title">PDF icon</title> <desc id="pdfIcon5Desc">this icon represents a PDF file</desc> 
<rect opacity="0" fill="none" stroke="red" stroke-width="1"  width="16" height="16" /> <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/> </svg><br>





<svg id="imageDatabase4Logo1" alt="HTML logo" xmlns="http://www.w3.org/2000/svg" 
width="2.9375em" height="2.9375em"
viewBox="0 0 512 512">
  <title>HTML5 Logo</title>
  <polygon fill="#E44D26" points="107.644,470.877 74.633,100.62 437.367,100.62 404.321,470.819 255.778,512 			"/>
  <polygon fill="#F16529" points="256,480.523 376.03,447.246 404.27,130.894 256,130.894 			"/>
  <polygon fill="#EBEBEB" points="256,268.217 195.91,268.217 191.76,221.716 256,221.716 256,176.305 255.843,176.305 142.132,176.305 143.219,188.488 154.38,313.627 256,313.627"/>
  <polygon fill="#EBEBEB" points="256,386.153 255.801,386.206 205.227,372.55 201.994,336.333 177.419,336.333 156.409,336.333 162.771,407.634 255.791,433.457 256,433.399"/>
  <path d="M108.382,0h23.077v22.8h21.11V0h23.078v69.044H152.57v-23.12h-21.11v23.12h-23.077V0z"/>
  <path d="M205.994,22.896h-20.316V0h63.72v22.896h-20.325v46.148h-23.078V22.896z"/>
  <path d="M259.511,0h24.063l14.802,24.26L313.163,0h24.072v69.044h-22.982V34.822l-15.877,24.549h-0.397l-15.888-24.549v34.222h-22.58V0z"/>
  <path d="M348.72,0h23.084v46.222h32.453v22.822H348.72V0z"/>
  <polygon fill="#FFFFFF" points="255.843,268.217 255.843,313.627 311.761,313.627 306.49,372.521 255.843,386.191 255.843,433.435 348.937,407.634 349.62,399.962 360.291,280.411 361.399,268.217 349.162,268.217"/>
  <polygon fill="#FFFFFF" points="255.843,176.305 255.843,204.509 255.843,221.605 255.843,221.716 365.385,221.716 365.385,221.716 365.531,221.716 366.442,211.509 368.511,188.488 369.597,176.305"/>
</svg>











<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<!-- Created with Inkscape (http://www.inkscape.org/) -->

<svg id="imageDatabase4Logo2" alt="CSS logo"  
width="2.9375em" height="2.9375em" xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   width="102.3716mm"
   height="144.49777mm"
   viewBox="0 0 362.73401 511.99998"
   id="svg3476"
   version="1.1"
   inkscape:version="0.91 r13725"
   sodipodi:docname="CSS3.svg">
  <defs
     id="defs3478" />
  <sodipodi:namedview
     id="base"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageopacity="0.0"
     inkscape:pageshadow="2"
     inkscape:zoom="0.35"
     inkscape:cx="181.367"
     inkscape:cy="256"
     inkscape:document-units="px"
     inkscape:current-layer="layer1"
     showgrid="false"
     fit-margin-top="0"
     fit-margin-left="0"
     fit-margin-right="0"
     fit-margin-bottom="0"
     inkscape:window-width="1366"
     inkscape:window-height="704"
     inkscape:window-x="0"
     inkscape:window-y="27"
     inkscape:window-maximized="1" />
  <metadata
     id="metadata3481">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     inkscape:label="Calque 1"
     inkscape:groupmode="layer"
     id="layer1"
     transform="translate(-193.633,-276.3622)">
    <g
       id="g3013"
       transform="translate(119,276.3622)">
      <polygon
         id="polygon2989"
         points="437.367,100.62 404.321,470.819 255.778,512 107.644,470.877 74.633,100.62 "
         style="fill:#264de4" />
      <polygon
         id="polygon2991"
         points="376.03,447.246 404.27,130.894 256,130.894 256,480.523 "
         style="fill:#2965f1" />
      <polygon
         id="polygon2993"
         points="150.31,268.217 154.38,313.627 256,313.627 256,268.217 "
         style="fill:#ebebeb" />
      <polygon
         id="polygon2995"
         points="256,176.305 255.843,176.305 142.132,176.305 146.26,221.716 256,221.716 "
         style="fill:#ebebeb" />
      <polygon
         id="polygon2997"
         points="256,433.399 256,386.153 255.801,386.206 205.227,372.55 201.994,336.333 177.419,336.333 156.409,336.333 162.771,407.634 255.791,433.457 "
         style="fill:#ebebeb" />
      <path
         id="path2999"
         d="m 160,0 55,0 0,23 -32,0 0,23 32,0 0,23 -55,0 z"
         inkscape:connector-curvature="0" />
      <path
         id="path3001"
         d="m 226,0 55,0 0,20 -32,0 0,4 32,0 0,46 -55,0 0,-21 32,0 0,-4 -32,0 z"
         inkscape:connector-curvature="0" />
      <path
         id="path3003"
         d="m 292,0 55,0 0,20 -32,0 0,4 32,0 0,46 -55,0 0,-21 32,0 0,-4 -32,0 z"
         inkscape:connector-curvature="0" />
      <polygon
         id="polygon3005"
         points="311.761,313.627 306.49,372.521 255.843,386.191 255.843,433.435 348.937,407.634 349.62,399.962 360.291,280.411 361.399,268.217 369.597,176.305 255.843,176.305 255.843,221.716 319.831,221.716 315.699,268.217 255.843,268.217 255.843,313.627 "
         style="fill:#ffffff" />
    </g>
  </g>
</svg>










<svg id="imageDatabase4Logo3" alt="VanillaJS logo"  
width="2.9375em" height="2.9375em"
viewBox="0 0 35 35" 
xmlns="http://www.w3.org/2000/svg"> 
<rect x="0" y="0" width="35" height="35" fill="maroon" opacity="0.90" stroke="navy" stroke-width="0.3" />
<path id="curvedPath1" fill="none" stroke="none" stroke-width=".1" d="M -5 14 Q 15.5 -5 42 12.0" pathLength="2" />
<path id="curvedPath2" fill="none" stroke="none" stroke-width=".1" d="M 3 20 Q 16 34 33 20" pathLength="2" />
  <text class="text1" opacity="0.90" fill="white" stroke="white" stroke-width="0.1" font-size="6" dominant-baseline="hanging" text-anchor="middle">
    <textPath href="#curvedPath1" startOffset="1">
      Vanilla
    </textPath>
  </text>
  <text class="text2" opacity="0.90" fill="white" stroke="white" stroke-width="0.1" font-size="6" dominant-baseline="hanging" text-anchor="middle">
    <textPath href="#curvedPath2" startOffset="1">
      JavaScript 
    </textPath>
  </text>
<g font-size="7" text-anchor="middle"> <text x="17.2" y="19.0" fill="white" opacity="0.90" stroke="white" stroke-width="0.2" transform="rotate (0,0,0)">VanillaJS</text> </g>
</svg>







<svg id="imageDatabase4Logo4" alt="SVG logo combined with the W3C logo, set vertically"  
width="2.9375em" height="2.9375em"
xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-2 0 144 225">
  <title>SVG logo combined with the W3C logo, set vertically</title>
  <desc>The logo combines three entities displayed vertically: the W3C logo with the text 'W3C'; the drawing of a flower or star shape with eight arms; and the text 'SVG'. These three entities are set vertically.</desc>
  
  <metadata>
    <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#" xmlns:cc="http://creativecommons.org/ns#" xmlns:xhtml="http://www.w3.org/1999/xhtml/vocab#" xmlns:dc="http://purl.org/dc/elements/1.1/">
      <cc:Work rdf:about="">
        <dc:title>SVG logo combined with the W3C logo</dc:title>
        <dc:format>image/svg+xml</dc:format>
        <rdfs:seeAlso rdf:resource="http://www.w3.org/2007/10/sw-logos.html"/>
        <dc:date>2007-11-01</dc:date>
        <xhtml:license rdf:resource="http://www.w3.org/Consortium/Legal/2002/copyright-documents-20021231"/>
        <cc:morePermissions rdf:resource="http://www.w3.org/2007/10/sw-logos.html#LogoWithW3C"/>
        <cc:attributionURL rdf:reource="http://www.w3.org/2001/sw/"/>
        <dc:description>The logo combines three entities displayed vertically: the W3C logo with the text 'W3C'; the drawing of a flower or star shape with eight arms; and the text 'SVG'. These three entities are set vertically.
			</dc:description>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  
  <text x="0" y="75" font-size="83" fill-opacity="0" font-family="Trebuchet" letter-spacing="-12">W3C</text>
  <text x="180" y="75" font-size="83" fill-opacity="0" font-family="Trebuchet" font-weight="bold">SVG</text>

  <g shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality">
    <g>
      <g id="w3c-logo">
        <g>
          <title>W3</title>
          <path d="M33.695,10.802l12.062,41.016l12.067-41.016h8.731L46.587,78.188h-0.831l-12.48-41.759L20.797,78.188     h-0.832L0,10.802h8.736l12.061,41.016l8.154-27.618l-3.993-13.397H33.695z" fill="#005A9C"/>
          <path d="M91.355,56.557c0,6.104-1.624,11.234-4.862,15.394c-3.248,4.158-7.45,6.237-12.607,6.237     c-3.882,0-7.263-1.238-10.148-3.702c-2.885-2.47-5.02-5.812-6.406-10.022l6.82-2.829c1.001,2.552,2.317,4.562,3.953,6.028     c1.636,1.469,3.56,2.207,5.781,2.207c2.329,0,4.3-1.306,5.909-3.911c1.609-2.606,2.411-5.738,2.411-9.401     c0-4.049-0.861-7.179-2.582-9.399c-1.995-2.604-5.129-3.912-9.397-3.912h-3.327v-3.991l11.646-20.133H64.484l-3.911,6.655h-2.493     V10.802h32.441v4.075l-12.31,21.217c4.324,1.385,7.596,3.911,9.815,7.571C90.246,47.324,91.355,51.618,91.355,56.557z" fill="#005A9C"/>
        </g>
        <g>
          <title>C</title>
          <path d="M125.211,10.425l1.414,8.6l-5.008,9.583c0,0-1.924-4.064-5.117-6.314     c-2.693-1.899-4.447-2.309-7.186-1.746c-3.527,0.73-7.516,4.938-9.258,10.13c-2.084,6.21-2.104,9.218-2.178,11.978     c-0.115,4.428,0.58,7.043,0.58,7.043s-3.04-5.626-3.011-13.866c0.018-5.882,0.947-11.218,3.666-16.479     c2.396-4.627,5.95-7.404,9.109-7.728c3.264-0.343,5.848,1.229,7.841,2.938c2.089,1.788,4.213,5.698,4.213,5.698L125.211,10.425z" fill="#221B0A"/>
          <path d="M125.823,59.099c0,0-2.208,3.957-3.589,5.48c-1.379,1.524-3.849,4.209-6.896,5.555     c-3.049,1.343-4.646,1.598-7.661,1.306c-3.01-0.29-5.807-2.032-6.786-2.764c-0.979-0.722-3.486-2.864-4.897-4.854     c-1.42-2-3.634-5.995-3.634-5.995s1.233,4.001,2.007,5.699c0.442,0.977,1.81,3.965,3.749,6.572     c1.805,2.425,5.315,6.604,10.652,7.545c5.336,0.945,9.002-1.449,9.907-2.031c0.907-0.578,2.819-2.178,4.032-3.475     c1.264-1.351,2.459-3.079,3.116-4.108c0.487-0.758,1.276-2.286,1.276-2.286L125.823,59.099z" fill="#221B0A"/>
        </g>
        <g>
          <title>Registered Trademark</title>
          <path d="M132.592,5.201c2.493,0,4.485,2.032,4.485,4.525c0,2.533-1.992,4.543-4.505,4.543    c-2.491,0-4.524-2.01-4.524-4.543c0-2.493,2.033-4.525,4.524-4.525H132.592z M132.554,6.107c-1.889,0-3.417,1.629-3.417,3.639    c0,2.029,1.528,3.619,3.436,3.619c1.912,0.019,3.46-1.59,3.46-3.619c0-2.01-1.548-3.639-3.46-3.639H132.554z M131.791,12.361    h-1.067V7.332c0.401-0.058,0.846-0.141,1.61-0.141c0.862,0,1.387,0.141,1.726,0.404c0.28,0.221,0.445,0.563,0.445,1.085    c0,0.603-0.423,1.024-0.966,1.166v0.042c0.441,0.078,0.724,0.479,0.801,1.226c0.103,0.783,0.203,1.085,0.284,1.247h-1.104    c-0.123-0.183-0.203-0.625-0.305-1.31c-0.077-0.542-0.4-0.763-0.942-0.763h-0.481V12.361z M131.791,9.463h0.5    c0.624,0,1.105-0.199,1.105-0.723c0-0.421-0.301-0.744-1.025-0.744c-0.261,0-0.441,0-0.58,0.021V9.463z" fill="#221B0A"/>
        </g>
      </g>
      <g id="logo" transform="scale(0.5) translate(-10, 155)">
        <defs>
          <g id="SVG" fill="#ffffff" transform="scale(2) translate(20,79)">
             <path id="S" d="M 5.482,31.319 C2.163,28.001 0.109,23.419 0.109,18.358 C0.109,8.232 8.322,0.024 18.443,0.024 C28.569,0.024 36.782,8.232 36.782,18.358 L26.042,18.358 C26.042,14.164 22.638,10.765 18.443,10.765 C14.249,10.765 10.850,14.164 10.850,18.358 C10.850,20.453 11.701,22.351 13.070,23.721 L13.075,23.721 C14.450,25.101 15.595,25.500 18.443,25.952 L18.443,25.952 C23.509,26.479 28.091,28.006 31.409,31.324 L31.409,31.324 C34.728,34.643 36.782,39.225 36.782,44.286 C36.782,54.412 28.569,62.625 18.443,62.625 C8.322,62.625 0.109,54.412 0.109,44.286 L10.850,44.286 C10.850,48.480 14.249,51.884 18.443,51.884 C22.638,51.884 26.042,48.480 26.042,44.286 C26.042,42.191 25.191,40.298 23.821,38.923 L23.816,38.923 C22.441,37.548 20.468,37.074 18.443,36.697 L18.443,36.692 C13.533,35.939 8.800,34.638 5.482,31.319 L5.482,31.319 L5.482,31.319 Z"/>

             <path id="V" d="M 73.452,0.024 L60.482,62.625 L49.742,62.625 L36.782,0.024 L47.522,0.024 L55.122,36.687 L62.712,0.024 L73.452,0.024 Z"/>

             <path id="G" d="M 91.792,25.952 L110.126,25.952 L110.126,44.286 L110.131,44.286 C110.131,54.413 101.918,62.626 91.792,62.626 C81.665,62.626 73.458,54.413 73.458,44.286 L73.458,44.286 L73.458,18.359 L73.453,18.359 C73.453,8.233 81.665,0.025 91.792,0.025 C101.913,0.025 110.126,8.233 110.126,18.359 L99.385,18.359 C99.385,14.169 95.981,10.765 91.792,10.765 C87.597,10.765 84.198,14.169 84.198,18.359 L84.198,44.286 L84.198,44.286 C84.198,48.481 87.597,51.880 91.792,51.880 C95.981,51.880 99.380,48.481 99.385,44.291 L99.385,44.286 L99.385,36.698 L91.792,36.698 L91.792,25.952 L91.792,25.952 Z"/>
           </g>
        </defs>

        <path id="base" fill="#000" d="M8.5,150 H291.5 V250 C291.5,273.5 273.5,291.5 250,291.5 H50 C26.5,291.5 8.5,273.5 8.5,250 Z"/>
        <g stroke-width="38.0086" stroke="#000">
          <g id="svgstar" transform="translate(150, 150)">
            <path id="svgbar" fill="#ffb13b" 
              d="M-84.1487,-15.8513 a22.4171,22.4171 0 1 0 0,31.7026 h168.2974 a22.4171,22.4171 0 1 0 0,-31.7026 Z"/>
            <use xlink:href="#svgbar" transform="rotate(45)"/>
            <use xlink:href="#svgbar" transform="rotate(90)"/>
            <use xlink:href="#svgbar" transform="rotate(135)"/>
          </g>
        </g>
        <use xlink:href="#svgstar"/>
        <use xlink:href="#base" opacity="0.85"/>
        <use xlink:href="#SVG"/>
      </g>
    </g>
  </g>
</svg>







<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<!-- Created with Inkscape (http://www.inkscape.org/) -->

<svg id="sqliteIcon1" alt="SQLite logo"
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:xlink="http://www.w3.org/1999/xlink"
   version="1.1"
   width="5.9375em"
   height="2.8125em"
   viewBox="0 0 381.8515 180.60349"
   id="svg2985"
   xml:space="preserve"><title
     id="title2998">SQLite logo</title><metadata
     id="metadata2991"><rdf:RDF><cc:Work
         rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" /><dc:title>SQLite</dc:title></cc:Work></rdf:RDF></metadata><defs
     id="defs2989"><linearGradient
       x1="0"
       y1="0"
       x2="1"
       y2="0"
       id="linearGradient3027"
       gradientUnits="userSpaceOnUse"
       gradientTransform="matrix(-4.02e-6,-91.8907,-91.8907,4.02e-6,85.8809,161.434)"
       spreadMethod="pad"><stop
         id="stop3029"
         style="stop-color:#97d9f6;stop-opacity:1"
         offset="0" /><stop
         id="stop3031"
         style="stop-color:#0f80cc;stop-opacity:1"
         offset="0.92024499" /><stop
         id="stop3033"
         style="stop-color:#0f80cc;stop-opacity:1"
         offset="1" /></linearGradient><linearGradient
       x1="-15.614694"
       y1="-9.1082983"
       x2="-6.7410073"
       y2="-9.1082983"
       id="linearGradient5421"
       xlink:href="#linearGradient3027"
       gradientUnits="userSpaceOnUse"
       gradientTransform="matrix(-4.02e-7,-9.18907,-9.18907,4.02e-7,8.58809,16.1434)"
       spreadMethod="pad" /><linearGradient
       x1="-15.614694"
       y1="-9.1082983"
       x2="-6.7410073"
       y2="-9.1082983"
       id="linearGradient2995"
       xlink:href="#linearGradient3027"
       gradientUnits="userSpaceOnUse"
       gradientTransform="matrix(-5.025e-7,11.486337,-11.486337,-5.025e-7,-30.839638,202.18698)"
       spreadMethod="pad" /></defs> role="graphics-document" aria-labelledby="sqliteIcon1Title" aria-describedby="sqliteIcon1Desc"> <title> id="sqliteIcon1Title">SQLite icon</title> <desc  id="sqliteIcon1Desc">this is the icon for SQLite</desc> <rect opacity="0.9" fill="none" stroke="gray" stroke-width="1"  width="380.8515" height="179.60349" /> <path
     d="m 147.53125,89.218755 c -4.8225,0 -8.74375,1.4275 -11.75,4.28125 -3.00625,2.85625 -4.53125,6.600135 -4.53125,11.187505 0,2.37738 0.37875,4.545 1.125,6.53125 0.74625,1.99025 1.9075,3.834 3.46875,5.5 1.56125,1.6675 4.68625,3.93263 9.34375,6.8125 5.715,3.48887 9.455,6.32037 11.25,8.53124 1.79625,2.209 2.6875,4.524 2.6875,6.9375 0,3.2315 -1.06375,5.811 -3.25,7.75 -2.19,1.93988 -5.11875,2.90625 -8.75,2.90625 -3.83,0 -7.16625,-1.35012 -10.03125,-4.03125 -2.865,-2.685 -4.31125,-6.23637 -4.34375,-10.6875 l -1.78125,0 0,16.15625 1.78125,0 c 0.54375,-1.52988 1.29625,-2.3125 2.28125,-2.3125 0.47375,0 1.58375,0.32675 3.3125,0.9375 4.20625,1.49662 7.66,2.21875 10.375,2.21875 4.67875,0 8.6725,-1.63862 12,-4.96875 3.3225,-3.32862 5,-7.34375 5,-12.03125 0,-3.63475 -1.1075,-6.86863 -3.28125,-9.68749 -2.17375,-2.82225 -6.40125,-6.10501 -12.71875,-9.875 -5.43625,-3.26614 -8.965,-5.92625 -10.59375,-8 -1.63125,-2.07076 -2.46875,-4.36137 -2.46875,-6.875 0,-2.718755 0.99875,-4.902505 2.96875,-6.531255 1.97,-1.63 4.55125,-2.4375 7.78125,-2.4375 3.635,0 6.665,1.07875 9.0625,3.25 2.395,2.175 3.78,5.189 4.1875,9.062505 l 1.78125,0 0,-14.000005 -1.65625,0 c -0.2025,0.71375 -0.39,1.17 -0.5625,1.375 -0.1675,0.20375 -0.49,0.3125 -0.96875,0.3125 -0.57625,0 -1.60375,-0.2425 -3.0625,-0.71875 -3.125,-1.0525 -6.00625,-1.59375 -8.65625,-1.59375 z m 58.21875,0 c -5.87625,0 -11.21125,1.385 -16.03125,4.15625 -4.8275,2.76625 -8.64875,6.6075 -11.46875,11.500005 -2.81875,4.89212 -4.21875,10.08786 -4.21875,15.625 0,7.43899 2.435,14.06636 7.34375,19.87499 4.91125,5.80513 10.79625,9.42238 17.625,10.8125 1.56125,0.8135 3.795,2.9135 6.71875,6.3125 3.295,3.83587 6.0825,6.6025 8.375,8.25 2.29,1.64837 4.7625,2.8565 7.375,3.65625 2.615,0.79638 5.4425,1.1875 8.5,1.1875 3.7025,0 7.0175,-0.6435 9.9375,-1.96875 L 239.25,167 c -1.695,0.61138 -3.5025,0.90625 -5.40625,0.90625 -2.58375,0 -5.195,-0.852 -7.8125,-2.5625 -2.61375,-1.71475 -5.8825,-4.98637 -9.78125,-9.8125 -1.8325,-2.3125 -3.0975,-3.7715 -3.8125,-4.34375 7.47125,-1.459 13.615,-5.08 18.40625,-10.875 4.79,-5.7925 7.1875,-12.40336 7.1875,-19.81249 0,-8.79739 -3.13,-16.19088 -9.34375,-22.218755 -6.21875,-6.0285 -13.86625,-9.0625 -22.9375,-9.0625 z m 36.34375,0 0.0937,1.90625 c 3.9125,0 6.10375,1.1525 6.59375,3.46875 0.1825,0.82875 0.26625,2.359 0.28125,4.5625 l -0.0312,42.156245 c -0.0325,3.1485 -0.48125,5.15875 -1.34375,6.03125 -0.86375,0.86625 -2.32375,1.40875 -4.4375,1.625 l -0.0937,1.90625 39,0 1,-9.5625 -1.78125,0 c -0.50875,2.605 -1.675,4.47113 -3.53125,5.53125 -1.86125,1.06787 -5.1525,1.59375 -9.90625,1.59375 l -3.6875,0 c -4.2775,0 -6.7525,-1.54638 -7.40625,-4.65625 -0.135,-0.61525 -0.18125,-1.27488 -0.1875,-2 l 0.15625,-42.624995 c -10e-4,-3.1435 0.39625,-5.25 1.21875,-6.28125 0.83125,-1.0275 2.33,-1.6025 4.5,-1.75 l -0.0937,-1.90625 -20.34375,0 z m -35.71875,2.3125 c 6.6275,0 12.03875,2.61025 16.21875,7.875 4.17875,5.266635 6.25,12.484875 6.25,21.625005 0,8.66111 -2.10125,15.59612 -6.3125,20.81249 -4.21125,5.21475 -9.81625,7.8125 -16.78125,7.8125 -6.69125,0 -12.1175,-2.67875 -16.28125,-8.0625 -4.16,-5.38375 -6.21875,-12.3735 -6.21875,-20.96874 0,-8.8325 2.08375,-15.90288 6.28125,-21.187505 4.195,-5.279 9.8125,-7.90625 16.84375,-7.90625 z m 89.6875,9.062505 c -0.95125,0 -1.67625,0.32125 -2.21875,0.96875 -0.555,0.64499 -0.725,1.42624 -0.53125,2.375 0.1875,0.92037 0.70625,1.727 1.53125,2.40625 0.82,0.67861 1.705,1.03125 2.65625,1.03125 0.92,0 1.62125,-0.35262 2.125,-1.03125 0.50375,-0.67925 0.6575,-1.48588 0.46875,-2.40625 -0.19375,-0.94876 -0.695,-1.73001 -1.46875,-2.375 -0.7825,-0.6475 -1.6425,-0.96875 -2.5625,-0.96875 z m 25.71875,6.46875 c -1.61625,6.21774 -5.12,9.58249 -10.5,10.125 l 0.0625,1.78125 6.28125,0 -0.125,21.06249 c 0.01,3.601 0.12,5.9985 0.375,7.21875 0.61875,2.92138 2.52625,4.40625 5.71875,4.40625 4.61875,0 9.46375,-2.8135 14.53125,-8.4375 l -1.53125,-1.3125 c -3.65875,3.70363 -6.89375,5.5625 -9.71875,5.5625 -1.73625,0 -2.8125,-0.9985 -3.21875,-2.96875 C 323.545,144.0215 323.5,143.46238 323.5,142.8125 l 0.0625,-23.84374 9.59375,0 -0.0937,-2.84375 -9.46875,0 0,-9.0625 -1.8125,0 z m 37.09375,7.9375 c -5.36625,0 -9.73125,2.605 -13.125,7.78125 -3.37625,5.185 -4.42125,10.92961 -3.09375,17.24999 0.78125,3.70212 2.3375,6.57138 4.71875,8.59375 2.3775,2.0215 5.39375,3.03125 9,3.03125 3.3575,0 8.0325,-0.85012 10,-2.5625 1.9725,-1.71138 3.79,-4.48388 5.46875,-8.28125 L 370.5,139.40625 c -2.6775,4.92625 -8.08125,7.40625 -12.15625,7.40625 -5.6025,0 -9.03375,-3.07375 -10.3125,-9.1875 -0.16625,-0.78038 -0.29,-1.61875 -0.375,-2.5 6.665,-1.05525 11.71625,-2.92388 15.125,-5.625 3.40625,-2.70261 6.82625,-5.56737 6.1875,-8.59374 -0.38,-1.79838 -1.31375,-3.21238 -2.75,-4.28125 -1.455,-1.06837 -5.2325,-1.625 -7.34375,-1.625 z m -58.65625,0.21875 -11.5625,2.65625 0,2.0625 4,-0.5 c 1.9375,0 3.0775,0.87738 3.4375,2.625 0.12125,0.58488 0.1975,1.40625 0.21875,2.4375 l -0.125,18.90624 c -0.0325,2.61625 -0.3225,4.13712 -0.90625,4.59375 -0.58875,0.4575 -2.14125,0.6875 -4.65625,0.6875 l -0.0625,1.78125 18.34375,0 -0.0312,-1.78125 c -2.54875,0 -4.20125,-0.20112 -4.9375,-0.59375 -0.72375,-0.39012 -1.2225,-1.10012 -1.4375,-2.1875 -0.16625,-0.78363 -0.23875,-2.13387 -0.25,-4 l 0.0625,-26.68749 -2.09375,0 z m 55.71875,3.5 c 1.11625,0 2.195,0.43112 3.28125,1.28125 1.07125,0.84713 1.72375,1.78912 1.9375,2.8125 1.04625,5.02638 -3.41,8.50136 -13.4375,10.43749 -0.28625,-3.66512 0.34875,-6.99224 1.96875,-9.99999 1.6075,-3.00488 3.70125,-4.53125 6.25,-4.53125 z"
     id="SQLite"
     style="fill:#003b57;fill-opacity:1;fill-rule:nonzero;stroke:none" /><path
     d="m 121.6315,17.03623 -99.506,0 C 15.4565,17.03623 10,22.49373 10,29.16248 l 0,109.7365 c 0,6.66837 5.4565,12.125 12.1255,12.125 l 65.53725,0 C 86.918884,118.41477 98.054499,55.130402 121.6315,17.03623 z"
     id="solid-background"
     style="fill:#0f80cc;fill-opacity:1;fill-rule:nonzero;stroke:none" /><path
     d="m 118.0165,20.57373 -95.891,0 c -4.735375,0 -8.588875,3.8525 -8.588875,8.58875 l 0,101.73013 c 21.71725,-8.335 54.31221,-15.5269 76.849585,-15.20027 4.52893,-23.680901 17.83941,-70.090424 27.63029,-95.11861 z"
     id="gradient-background"
     style="fill:url(#linearGradient2995);fill-opacity:1;fill-rule:nonzero;stroke:none" /><path
     d="m 144.8415,13.44498 c -6.815,-6.0775 -15.06625,-3.63625 -23.21,3.59125 -1.20875,1.07375 -2.415,2.265 -3.615,3.5375 -13.93125,14.77875 -26.8625,42.15375 -30.88,63.06 1.565,3.17375 2.7875,7.22375 3.5925,10.3175 0.20625,0.79375 0.3925,1.53875 0.54125,2.1725 0.35375,1.499875 0.54375,2.4725 0.54375,2.4725 0,0 -0.125,-0.472625 -0.6375,-1.95875 -0.0975,-0.285 -0.20625,-0.59625 -0.335,-0.9625 -0.055,-0.15125 -0.13125,-0.335 -0.215,-0.53125 -0.90875,-2.1125 -3.4225,-6.57125 -4.52875,-8.5125 -0.94625,2.79125 -1.7825,5.4025 -2.4825,7.765 3.19375,5.8435 5.14,15.85775 5.14,15.85775 0,0 -0.16875,-0.649 -0.97125,-2.91412 -0.7125,-2.00338 -4.26125,-8.22113 -5.101875,-9.674755 -1.438,5.308505 -2.009375,8.892505 -1.494125,9.765125 1.000375,1.69088 1.953125,4.60838 2.78975,7.83488 1.89,7.26862 3.20375,16.11725 3.20375,16.11725 0,0 0.0425,0.58637 0.11375,1.48875 -0.2625,6.104 -0.105,12.43262 0.3675,18.15287 0.62625,7.57225 1.805,14.07713 3.3075,17.5585 l 1.02,-0.55612 c -2.20625,-6.85888 -3.1025,-15.84763 -2.71,-26.21388 0.59375,-15.84512 4.24,-34.95362 10.9775,-54.87 11.3825,-30.065 27.175,-54.1875 41.62875,-65.7075 -13.17375,11.8975 -31.00375,50.40875 -36.34125,64.67 -5.97625,15.97 -10.21125,30.95638 -12.76375,45.31475 4.40375,-13.46087 18.6425,-19.247 18.6425,-19.247 0,0 6.98375,-8.61287 15.145,-20.91775 -4.88875,1.115 -12.91625,3.02375 -15.605,4.15375 -3.96625,1.66375 -5.035,2.23125 -5.035,2.23125 0,0 12.8475,-7.82375 23.87,-11.36625 15.15875,-23.875 31.67375,-57.7925 15.0425,-72.62875"
     id="feather"
     style="fill:#003b57;fill-opacity:1;fill-rule:nonzero;stroke:none" /></svg><br>
<span id="textCrudP4Caption" style="color:Grey;font-size:0.875em;">
<i>
Documentation for 
<span id="textCrudP4PdfCaptionEmphasized1" style="color:Navy;">
<b>
CRUD databases - part 4, Traveler's Database using Web SQL and SQLite
</b>
</span>. 
Includes references.</i></span><br>
<center>
<span id="textSqliteLogoPublicDomain0" style="color:gray;font-size:0.875em;">
<b>The SQLite logo has been modified.</b>
</span>
</center>
<center>
<span id="textSqliteLogoPublicDomain1" style="color:gray;font-size:0.875em;">
<b>The SQLite logo is </b>
</span>
<a href="https://www.sqlite.org/copyright.html" target="_blank">
<span id="textSqliteLogoPublicDomain" style="color:gray;font-size:0.875em;"><b>public domain.</b></span>
</a>
</center>
<center>
<a href="https://commons.m.wikimedia.org/wiki/File:SQLite370.svg" target="_blank">
<span id="textSqliteLogoDownloadHere" style="color:gray;font-size:0.875em;">
<b>
Logo available for download here.
</b>
</span></a>
</center>
<center>
<a href="https://www.sqlite.org/download.html" target="_blank">
<span id="textSqliteDownloadHere" style="color:CornFlowerBlue;font-size:0.875em;">
<b>
SQLite is available for download here.
</b>
</span></a>

<br><br>



<a href="privacyPage.php" target="_blank"><span id="linkPrivacyPolicy" style="color:Navy;font-size:1.875em;">
<b>View the privacy policy for this website.</b></span></a>

<br><br>





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
</center>


<?php

echo '<center>';
echo '<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<svg height="383.5975" id="svg3430" version="1.1" viewBox="0 0 711.20123 153.4389" width="284.48048" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg">
  <title id="title3510">Official PHP Logo</title>
  <metadata id="metadata3436">
    <rdf:RDF>
      <cc:Work rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
        <dc:title>Official PHP Logo</dc:title>
        <dc:creator>
          <cc:Agent>
            <dc:title>Colin Viebrock</dc:title>
          </cc:Agent>
        </dc:creator>
        <dc:description/>
        <dc:contributor>
          <cc:Agent>
            <dc:title/>
          </cc:Agent>
        </dc:contributor>
        <cc:license rdf:resource="http://creativecommons.org/licenses/by-sa/4.0/"/>
        <dc:rights>
          <cc:Agent>
            <dc:title>Copyright Colin Viebrock 1997 - All rights reserved.</dc:title>
          </cc:Agent>
        </dc:rights>
        <dc:date>1997</dc:date>
      </cc:Work>
      <cc:License rdf:about="http://creativecommons.org/licenses/by-sa/4.0/">
        <cc:permits rdf:resource="http://creativecommons.org/ns#Reproduction"/>
        <cc:permits rdf:resource="http://creativecommons.org/ns#Distribution"/>
        <cc:requires rdf:resource="http://creativecommons.org/ns#Notice"/>
        <cc:requires rdf:resource="http://creativecommons.org/ns#Attribution"/>
        <cc:permits rdf:resource="http://creativecommons.org/ns#DerivativeWorks"/>
        <cc:requires rdf:resource="http://creativecommons.org/ns#ShareAlike"/>
      </cc:License>
    </rdf:RDF>
  </metadata>
  <defs id="defs3434">
    <clipPath clipPathUnits="userSpaceOnUse" id="clipPath3444">
      <path d="M 11.52,162 C 11.52,81.677 135.307,16.561 288,16.561 l 0,0 c 152.693,0 276.481,65.116 276.481,145.439 l 0,0 c 0,80.322 -123.788,145.439 -276.481,145.439 l 0,0 C 135.307,307.439 11.52,242.322 11.52,162" id="path3446"/>
    </clipPath>
    <radialGradient cx="0" cy="0" fx="0" fy="0" gradientTransform="matrix(363.05789,0,0,-363.05789,177.52002,256.30713)" gradientUnits="userSpaceOnUse" id="radialGradient3452" r="1" spreadMethod="pad">
      <stop id="stop3454" offset="0" style="stop-opacity:1;stop-color:#aeb2d5"/>
      <stop id="stop3456" offset="0.3" style="stop-opacity:1;stop-color:#aeb2d5"/>
      <stop id="stop3458" offset="0.75" style="stop-opacity:1;stop-color:#484c89"/>
      <stop id="stop3460" offset="1" style="stop-opacity:1;stop-color:#484c89"/>
    </radialGradient>
    <clipPath clipPathUnits="userSpaceOnUse" id="clipPath3468">
      <path d="M 0,324 576,324 576,0 0,0 0,324 Z" id="path3470"/>
    </clipPath>
    <clipPath clipPathUnits="userSpaceOnUse" id="clipPath3480">
      <path d="M 0,324 576,324 576,0 0,0 0,324 Z" id="path3482"/>
    </clipPath>
  </defs>
  <g id="g3438" transform="matrix(1.25,0,0,-1.25,-4.4,394.29875)">
    <g id="g3440">
      <g clip-path="url(#clipPath3444)" id="g3442">
        <g id="g3448">
          <g id="g3450">
            <path d="M 11.52,162 C 11.52,81.677 135.307,16.561 288,16.561 l 0,0 c 152.693,0 276.481,65.116 276.481,145.439 l 0,0 c 0,80.322 -123.788,145.439 -276.481,145.439 l 0,0 C 135.307,307.439 11.52,242.322 11.52,162" id="path3462" style="fill:url(#radialGradient3452);stroke:none"/>
          </g>
        </g>
      </g>
    </g>
    <g id="g3464">
      <g clip-path="url(#clipPath3468)" id="g3466">
        <g id="g3472" transform="translate(288,27.3594)">
          <path d="M 0,0 C 146.729,0 265.68,60.281 265.68,134.641 265.68,209 146.729,269.282 0,269.282 -146.729,269.282 -265.68,209 -265.68,134.641 -265.68,60.281 -146.729,0 0,0" id="path3474" style="fill:#777bb3;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
        </g>
      </g>
    </g>
    <g id="g3476">
      <g clip-path="url(#clipPath3480)" id="g3478">
        <g id="g3484" transform="translate(161.7344,145.3066)">
          <path d="m 0,0 c 12.065,0 21.072,2.225 26.771,6.611 5.638,4.341 9.532,11.862 11.573,22.353 1.903,9.806 1.178,16.653 -2.154,20.348 C 32.783,53.086 25.417,55 14.297,55 L -4.984,55 -15.673,0 0,0 Z m -63.063,-67.75 c -0.895,0 -1.745,0.4 -2.314,1.092 -0.57,0.691 -0.801,1.601 -0.63,2.48 L -37.679,81.573 C -37.405,82.982 -36.17,84 -34.734,84 L 26.32,84 C 45.508,84 59.79,78.79 68.767,68.513 77.792,58.182 80.579,43.741 77.05,25.592 75.614,18.198 73.144,11.331 69.709,5.183 66.27,-0.972 61.725,-6.667 56.198,-11.747 49.582,-17.939 42.094,-22.429 33.962,-25.071 25.959,-27.678 15.681,-29 3.414,-29 l -24.722,0 -7.06,-36.322 c -0.274,-1.41 -1.508,-2.428 -2.944,-2.428 l -31.751,0 z" id="path3486" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
        </g>
        <g id="g3488" transform="translate(159.2236,197.3071)">
          <path d="m 0,0 16.808,0 c 13.421,0 18.083,-2.945 19.667,-4.7 2.628,-2.914 3.124,-9.058 1.435,-17.767 C 36.012,-32.217 32.494,-39.13 27.452,-43.012 22.29,-46.986 13.898,-49 2.511,-49 L -9.523,-49 0,0 Z m 28.831,35 -61.055,0 c -2.872,0 -5.341,-2.036 -5.889,-4.855 l -28.328,-145.751 c -0.342,-1.759 0.12,-3.578 1.259,-4.961 1.14,-1.383 2.838,-2.183 4.63,-2.183 l 31.75,0 c 2.873,0 5.342,2.036 5.89,4.855 l 6.588,33.895 22.249,0 c 12.582,0 23.174,1.372 31.479,4.077 8.541,2.775 16.399,7.48 23.354,13.984 5.752,5.292 10.49,11.232 14.08,17.657 3.591,6.427 6.171,13.594 7.668,21.302 3.715,19.104 0.697,34.402 -8.969,45.466 C 63.965,29.444 48.923,35 28.831,35 m -45.633,-90 19.313,0 c 12.801,0 22.336,2.411 28.601,7.234 6.266,4.824 10.492,12.875 12.688,24.157 2.101,10.832 1.144,18.476 -2.871,22.929 C 36.909,3.773 28.87,6 16.808,6 L -4.946,6 -16.802,-55 M 28.831,29 C 47.198,29 60.597,24.18 69.019,14.539 77.44,4.898 79.976,-8.559 76.616,-25.836 75.233,-32.953 72.894,-39.46 69.601,-45.355 66.304,-51.254 61.999,-56.648 56.679,-61.539 50.339,-67.472 43.296,-71.7 35.546,-74.218 27.796,-76.743 17.925,-78 5.925,-78 l -27.196,0 -7.531,-38.75 -31.75,0 28.328,145.75 61.055,0" id="path3490" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
        </g>
        <g id="g3492" transform="translate(311.583,116.3066)">
          <path d="m 0,0 c -0.896,0 -1.745,0.4 -2.314,1.092 -0.571,0.691 -0.802,1.6 -0.631,2.48 L 9.586,68.061 C 10.778,74.194 10.484,78.596 8.759,80.456 7.703,81.593 4.531,83.5 -4.848,83.5 L -27.55,83.5 -43.305,2.428 C -43.579,1.018 -44.814,0 -46.25,0 l -31.5,0 c -0.896,0 -1.745,0.4 -2.315,1.092 -0.57,0.691 -0.801,1.601 -0.63,2.48 l 28.328,145.751 c 0.274,1.409 1.509,2.427 2.945,2.427 l 31.5,0 c 0.896,0 1.745,-0.4 2.315,-1.091 0.57,-0.692 0.801,-1.601 0.63,-2.481 L -21.813,113 2.609,113 c 18.605,0 31.221,-3.28 38.569,-10.028 7.49,-6.884 9.827,-17.891 6.947,-32.719 L 34.945,2.428 C 34.671,1.018 33.437,0 32,0 L 0,0 Z" id="path3494" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
        </g>
        <g id="g3496" transform="translate(293.6611,271.0571)">
          <path d="m 0,0 -31.5,0 c -2.873,0 -5.342,-2.036 -5.89,-4.855 l -28.328,-145.751 c -0.342,-1.759 0.12,-3.578 1.26,-4.961 1.14,-1.383 2.838,-2.183 4.63,-2.183 l 31.5,0 c 2.872,0 5.342,2.036 5.89,4.855 l 15.283,78.645 20.229,0 c 9.363,0 11.328,-2 11.407,-2.086 0.568,-0.611 1.315,-3.441 0.082,-9.781 l -12.531,-64.489 c -0.342,-1.759 0.12,-3.578 1.26,-4.961 1.14,-1.383 2.838,-2.183 4.63,-2.183 l 32,0 c 2.872,0 5.342,2.036 5.89,4.855 l 13.179,67.825 c 3.093,15.921 0.447,27.864 -7.861,35.5 -7.928,7.281 -21.208,10.82 -40.599,10.82 l -20.784,0 6.143,31.605 C 6.231,-5.386 5.77,-3.566 4.63,-2.184 3.49,-0.801 1.792,0 0,0 m 0,-6 -7.531,-38.75 28.062,0 c 17.657,0 29.836,-3.082 36.539,-9.238 6.703,-6.16 8.711,-16.141 6.032,-29.938 l -13.18,-67.824 -32,0 12.531,64.488 c 1.426,7.336 0.902,12.34 -1.574,15.008 -2.477,2.668 -7.746,4.004 -15.805,4.004 l -25.176,0 -16.226,-83.5 -31.5,0 L -31.5,-6 0,-6" id="path3498" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
        </g>
        <g id="g3500" transform="translate(409.5498,145.3066)">
          <path d="m 0,0 c 12.065,0 21.072,2.225 26.771,6.611 5.638,4.34 9.532,11.861 11.574,22.353 1.903,9.806 1.178,16.653 -2.155,20.348 C 32.783,53.086 25.417,55 14.297,55 L -4.984,55 -15.673,0 0,0 Z m -63.062,-67.75 c -0.895,0 -1.745,0.4 -2.314,1.092 -0.57,0.691 -0.802,1.601 -0.631,2.48 L -37.679,81.573 C -37.404,82.982 -36.17,84 -34.733,84 L 26.32,84 C 45.509,84 59.79,78.79 68.768,68.513 77.793,58.183 80.579,43.742 77.051,25.592 75.613,18.198 73.144,11.331 69.709,5.183 66.27,-0.972 61.725,-6.667 56.198,-11.747 49.582,-17.939 42.094,-22.429 33.962,-25.071 25.959,-27.678 15.681,-29 3.414,-29 l -24.723,0 -7.057,-36.322 c -0.275,-1.41 -1.509,-2.428 -2.946,-2.428 l -31.75,0 z" id="path3502" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
        </g>
        <g id="g3504" transform="translate(407.0391,197.3071)">
          <path d="M 0,0 16.808,0 C 30.229,0 34.891,-2.945 36.475,-4.7 39.104,-7.614 39.6,-13.758 37.91,-22.466 36.012,-32.217 32.493,-39.13 27.452,-43.012 22.29,-46.986 13.898,-49 2.511,-49 L -9.522,-49 0,0 Z m 28.831,35 -61.054,0 c -2.872,0 -5.341,-2.036 -5.889,-4.855 L -66.44,-115.606 c -0.342,-1.759 0.12,-3.578 1.259,-4.961 1.14,-1.383 2.838,-2.183 4.63,-2.183 l 31.75,0 c 2.872,0 5.342,2.036 5.89,4.855 l 6.587,33.895 22.249,0 c 12.582,0 23.174,1.372 31.479,4.077 8.541,2.775 16.401,7.481 23.356,13.986 5.752,5.291 10.488,11.23 14.078,17.655 3.591,6.427 6.171,13.594 7.668,21.302 3.715,19.105 0.697,34.403 -8.969,45.467 C 63.965,29.444 48.924,35 28.831,35 m -45.632,-90 19.312,0 c 12.801,0 22.336,2.411 28.601,7.234 6.267,4.824 10.492,12.875 12.688,24.157 2.102,10.832 1.145,18.476 -2.871,22.929 C 36.909,3.773 28.87,6 16.808,6 L -4.946,6 -16.801,-55 M 28.831,29 C 47.198,29 60.597,24.18 69.019,14.539 77.441,4.898 79.976,-8.559 76.616,-25.836 75.233,-32.953 72.894,-39.46 69.601,-45.355 66.304,-51.254 61.999,-56.648 56.679,-61.539 50.339,-67.472 43.296,-71.7 35.546,-74.218 27.796,-76.743 17.925,-78 5.925,-78 l -27.196,0 -7.53,-38.75 -31.75,0 28.328,145.75 61.054,0" id="path3506" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
        </g>
      </g>
    </g>
  </g>
</svg>';
echo '</center>';
?>



<center>
<span id="containsPHPmsg" style="color:Maroon;font-size:<?php echo $containsPHPMsgSize; ?>;"><b>This product includes PHP software, freely available from

<a href="http://www.php.net/software/" target="_blank">http://www.php.net/software/</a>.
</b>
</span><br>
<span id="phpLicenseMsg" style="color:Navy;font-size:<?php echo $phpLicenseMsgSize; ?>;"><b>&nbsp;&nbsp;&nbsp;
PHP is licensed under the <a href="https://www.php.net/license/3_01.txt" target="_blank">PHP License  version 3.01</a>.</b></span>
<br>
<span id="phpLogoMsg" style="color:Navy;font-size:<?php echo $phpLogoMsgSize; ?>;"><b>&nbsp;&nbsp;&nbsp;
The PHP logo is located at <a href="https://www.php.net/images/logos/new-php-logo.svg" target="_blank">https://www.php.net/images/logos/new-php-logo.svg</a>.</b></span>
<br>
<span id="phpLogoModifiedMsg" style="color:Navy;font-size:<?php echo $phpLogoModifiedMsgSize; ?>;"><b>&nbsp;&nbsp;&nbsp;The PHP logo has been modified.</b></span>
<br>
<span id="phpLogoTermsMsg" style="color:Black;font-size:<?php echo $phpLogoTermsMsgSize; ?>;">
The PHP logo is used according to terms described in the<br>
 <b><i>"Creative Commons Attribution-Share Alike 4.0 International"</b></i> license<br>
</span>
<span id="phpTermsLocationMsg" style="color:Black;font-size:<?php echo $phpTermsLocationMsgSize; ?>;">
which is located at <a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank"><span style="font-size:<?php echo $phpTermsLocationMsgSize; ?>;"><b>https://creativecommons.org/licenses/by-sa/4.0/</b></span></a>
</span>
</center>

<br><br>

<br><br>





<div class="grid-containerV3License">

     <div class="grid-itemMargin">
     </div>
     <div class="grid-itemTopBottom">
     </div>
     <div class="grid-itemMargin">
     </div>




     <div class="grid-itemMargin">
     </div>

     <div class="grid-item"><br>

<span id="phpV3LicenseMsg" style="color:Black;font-size:<?php echo $phpV3LicenseMsgSize; ?>;">
--------------------------------------------------------------------<br>
                  The PHP License, version 3.01<br>
Copyright (c) 1999 - 2019 The PHP Group. All rights reserved.<br>
--------------------------------------------------------------------
<br><br>
Redistribution and use in source and binary forms, with or without
modification, is permitted provided that the following conditions
are met:
<br><br>
  1. Redistributions of source code must retain the above copyright
     notice, this list of conditions and the following disclaimer.
<br><br>
  2. Redistributions in binary form must reproduce the above copyright
     notice, this list of conditions and the following disclaimer in
     the documentation and/or other materials provided with the
     distribution.
<br><br>
  3. The name "PHP" must not be used to endorse or promote products
     derived from this software without prior written permission. For
     written permission, please contact group@php.net.
<br><br>
  4. Products derived from this software may not be called "PHP", nor
     may "PHP" appear in their name, without prior written permission
     from group@php.net.  You may indicate that your software works in
     conjunction with PHP by saying "Foo for PHP" instead of calling
     it "PHP Foo" or "phpfoo"
<br><br>
  5. The PHP Group may publish revised and/or new versions of the
     license from time to time. Each version will be given a
     distinguishing version number.
     Once covered code has been published under a particular version
     of the license, you may always continue to use it under the terms
     of that version. You may also choose to use such covered code
     under the terms of any subsequent version of the license
     published by the PHP Group. No one other than the PHP Group has
     the right to modify the terms applicable to covered code created
     under this License.
<br><br>
  6. Redistributions of any form whatsoever must retain the following
     acknowledgment:
    <br><br>
     "This product includes PHP software, freely available from
     &lt;http://www.php.net/software/>".
<br><br>
THIS SOFTWARE IS PROVIDED BY THE PHP DEVELOPMENT TEAM ``AS IS'' AND
ANY EXPRESSED OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO,
THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A
PARTICULAR PURPOSE ARE DISCLAIMED.  IN NO EVENT SHALL THE PHP
DEVELOPMENT TEAM OR ITS CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION)
HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT,
STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED
OF THE POSSIBILITY OF SUCH DAMAGE.
<br><br>
--------------------------------------------------------------------
<br><br>
This software consists of voluntary contributions made by many
individuals on behalf of the PHP Group.
<br><br>
The PHP Group can be contacted via Email at group@php.net.
<br><br>
For more information on the PHP Group and the PHP project,
please see &lt;http://www.php.net>.
<br><br>
PHP includes the Zend Engine, freely available at
&lt;http://www.zend.com>.
<br>
</span>
<br><br><br><br>


     </div>


     <div class="grid-itemMargin">
     </div>



     <div class="grid-itemMargin">
     </div>
     <div class="grid-itemTopBottom">
     </div>
     <div class="grid-itemMargin">
     </div>

     <!--  end of grid container V3License  -->
</div>






<!--

Firefox on Android 5:

the references section overlaps the introduction. 

 --> 

<!-- start of correction--> 
<span id="verticalSpacer1" style="font-size:19px;"></span> 
<!-- end of correction--> 





<br><br>



<br><br>


<!-- 

  -->


<br><br>

<center> 
<span id="copyRightMsg" style="color:Navy;font-size:<?php echo $copyRightMsgSize; ?>;">
	<b>&nbsp;&nbsp;&nbsp;Copyright &#169; 2023-2024. All rights reserved.</b>
</span>
</center> 
<br>



<center> 
<span id="chromeBestMsg" style="color:Navy;font-size:<?php echo $chromeBestMsgSize; ?>;">
	<b>&nbsp;&nbsp;&nbsp;Best results when using the Chrome browser.</b></span><br><br>



<svg id="BootstrapIcon" 
xmlns="http://www.w3.org/2000/svg" width="<?php echo $bootstrapIconWidth; ?>" height="<?php echo $bootstrapIconHeight; ?>" fill="Navy" class="bi bi-bootstrap" viewBox="0 0 16 16" 
role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc">
    <title> id="iconTitle">Bootstrap icon</title>
    <desc  id="iconDesc">this icon represents Bootstrap</desc> 
    <path d="M5.062 12h3.475c1.804 0 2.888-.908 2.888-2.396 0-1.102-.761-1.916-1.904-2.034v-.1c.832-.14 1.482-.93 1.482-1.816 0-1.3-.955-2.11-2.542-2.11H5.062V12zm1.313-4.875V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762V8.162h1.822c1.236 0 1.887.463 1.887 1.348 0 .896-.627 1.377-1.811 1.377H6.375z"/> 
    <path d="M0 4a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v8a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4zm4-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3H4z"/> 
</svg><br>



<span id="iconsProvidedMsg" style="color:Navy;font-size:<?php echo $iconsProvidedMsgSize; ?>;">
	<b>&nbsp;&nbsp;&nbsp; Some icons provided via the 
<a href="https://icons.getbootstrap.com/" target="_blank">Bootstrap Icons</a> collection.</b>
</span><br>


<span id="mitLicenseMsg" style="color:Navy;font-size:<?php echo $mitLicenseMsgSize; ?>;">
	<b>&nbsp;&nbsp;&nbsp; Bootstrap Icons are under the <a href="https://github.com/twbs/icons/blob/main/LICENSE.md" target="_blank">MIT</a> license.</b></span><br>

<span id="iconsModifiedMsg" style="color:Navy;font-size:<?php echo $iconsModifiedMsgSize; ?>;">
	<b>&nbsp;&nbsp;&nbsp;Some icons in this collection have been modified.</b></span><br><br>
</center> 

<!-- 

A copy of the Bootstrap license is included here -


The MIT License (MIT) 
Copyright (c) 2019-2021 The Bootstrap Authors 

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation 
files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, 
modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the 
Software is furnished to do so, subject to the following conditions: 

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. 

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES 
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE 
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR 
IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE. 


  -->


<!-- 


  -->

<script src="browserId.js">
</script>

<script src="debug.js">
</script>



<NOSCRIPT><span style="color:Navy;font-size:16px;"><b>JavaScript is not available. JavaScript is required in order to provide the full functionality of this page.</b></span></NOSCRIPT><br><br>




<center>
<BUTTON 
style="background-color:lightblue;color:white;
margin-left:1px;margin-right:2px;margin-top:1px;margin-bottom:1px;
border:2px solid lightgrey;border-radius:8px;
width=7.5em;height:4.0em;-webkit-appearance:none" 
TYPE="button" id="debugButton" name="debugButton" 
title="show DEBUG info button" aria-label="show DEBUG info button" 
ONCLICK="showDebug()" ACCESSKEY=S>
<span style="font-size:28px;">     
<svg transform="translate(0,-2)" xmlns="http://www.w3.org/2000/svg" width="1.8em" height="1.8em" fill="navy" stroke="white" class="bi bi-gear-fill" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc">
    <title> id="iconTitle">show debug info</title>
    <desc  id="iconDesc">this icon indicates that you can open a debugging panel</desc> <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/> </svg> 
</svg> 
<svg transform="translate(0,-2)" xmlns="http://www.w3.org/2000/svg" width="1.8em" height="1.8em" fill="Navy" class="bi bi-keyboard-fill" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc">
    <title> id="iconTitle">access key S</title>
    <desc  id="iconDesc">this icon indicates keyboard navigation using the S access key</desc> <path d="M0 6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6zm13 .25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5a.25.25 0 0 0-.25.25zM2.25 8a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 8.75v-.5A.25.25 0 0 0 2.75 8h-.5zM4 8.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 5 8.75v-.5A.25.25 0 0 0 4.75 8h-.5a.25.25 0 0 0-.25.25zM6.25 8a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 7 8.75v-.5A.25.25 0 0 0 6.75 8h-.5zM8 8.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 9 8.75v-.5A.25.25 0 0 0 8.75 8h-.5a.25.25 0 0 0-.25.25zM13.25 8a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5zm-3-2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h1.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-1.5zm.75 2.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5a.25.25 0 0 0-.25.25zM11.25 6a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5zM9 6.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5A.25.25 0 0 0 9.75 6h-.5a.25.25 0 0 0-.25.25zM7.25 6a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 8 6.75v-.5A.25.25 0 0 0 7.75 6h-.5zM5 6.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 6 6.75v-.5A.25.25 0 0 0 5.75 6h-.5a.25.25 0 0 0-.25.25zM2.25 6a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h1.5A.25.25 0 0 0 4 6.75v-.5A.25.25 0 0 0 3.75 6h-1.5zM2 10.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5a.25.25 0 0 0-.25.25zM4.25 10a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h5.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-5.5z"/> 
<g font-size="10" text-anchor="middle"> 
<text x="8.0" y="12.1" opacity="1.0" fill="orange" stroke="red" stroke-width="0.1">S</text> </g> 
</svg>    
</span>
</BUTTON> 
</center><br> 
<div style="color:black; background-color:ivory;border:2px solid lightgrey;border-radius:8px;margin-top:3px;margin-bottom:3px" id="debugOut" name="debugOut" title="debug output appears here" aria-label="debug output appears here">
</div> <br><br>



</body>


</html>

