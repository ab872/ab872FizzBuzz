   <head> 
      <meta charset="utf-8" />

      <title>ab872 - Access Northwind database</title> 

<script>
</script>


<?php

   //   identify the browser

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
global $userID;
$userID = "???";
global $password;
$password = "?????";
global $userLevel;
$userLevel = 'user';
$firstName = 'first?';
$lastName = 'last?';
$userEmail = 'email?';
$searchString = "?";

global $rptMethod;
$rptMethod = 'useCategories';


//  global $errorCount;
//  $errorCount = 0;

   //  global $currentLong;

$host = "?";
$database = "?";
$sslCert = "?";

?>


<?php

        //  values for the default screen width

        //  size in characters of the input fields
	$userIDSize = "55";
	$userPasswordSize = "55";
	$userLevelSize = "55";
	$firstNameSize = "55";
	$lastNameSize = "55";
	$userEmailSize = "55";
        $searchStringSize = "70";

        $copyRightMsgSize = "2.25em";
	$exceptionOccurredMsgSize = "1.125em";

        $textDbAccessSize = "1.75em";
        $textCustRptSize = "1.75em";
        $textCustRptErrSize = "1.75em";
        $textCustCatSize = "1.10em";
        $textCustDataSize = "1.1em";
        $textCraiyonCaptionSize = "0.7em";



?>




<?php 
?>



<?php

function checkIfLoggedIn ($userID, $password, $errorCount) {

     global $userLevel;
     $returnCode = 0;     //  not logged in

     try {

        try {

          //  access database
          $db = new SQLite3('logins.db');
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Database access failed.<br>';
          } else {
        //       echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Database access successful.<br>';
          }

      //    echo "<br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }





    //      echo "<br><br>"; 
    //      echo '<span style="color:Navy;font-size:1.75em;">Query the table <b><u>members</u></b> for a single record ...</span>';

          //  query the table
          $sql = "SELECT rowid, * FROM members where userName = '".$userID."'";
          $query = $db->query($sql);
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Database Query was not successful.<br>';
          } else {
             //  echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Database Query was successful.<br>';
          }
    

          //  members (userName STRING, password STRING)

          $thePassword = "";
          $userLevel = "";

          while ($row = $query->fetchArray()){

               $thePassword = $row['password'];
               $userLevel = $row['userLevel'];

             //   end     while
          }

          //  echo "<br>"; 
    //      echo '<span style="color:Navy;font-size:1.75em;">Query finished.</span>';
     //     echo "<br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
          echo "<br>"; 
     }



          $salt = "sgvorughgeortgpfbdprjgpoerig";

          $obPwdToCheck = "";
          $obPwdToCheck = md5(crypt($password, $salt));

       //   echo '<br><br>';

          if($obPwdToCheck != $thePassword){
               //  an error was encountered

               $errorCount += 1;

          } else {

               $returnCode = 1;     //  logged in

          }

         return $returnCode;

   //   end    function checkIfLoggedIn
}


   function getRecordCount($tableName) {

     $resultStr = "";

     try {

          //  access database
          $db = new SQLite3('northwind.db');
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Database access was not successful.\n</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:1.75em;">
               //      <br>
                //     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*** Database access was successful.</span>';  
          }

        //  echo "<br><br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }




     try {

//          echo "<br><br>"; 
   //       echo '<span style="color:Navy;font-size:1.75em;">Get the record count from table <b><u>'. $tableName. '</u></b>  ...</span>';

          //  query the table
          $sql = "SELECT COUNT(*) FROM '$tableName'";
          $query = $db->query($sql);
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was not successful.</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was successful.</span>';
          }
    
       //   echo "<br>"; 
  
          echo "<center>";
          echo '<span style="color:Navy;font-size:1.75em;">Number of records in <b><u>'. $tableName. '</u></b>:   </span>';
     	//  echo "<br>"; 


          $resultStr = $resultStr . "<center>";
          $resultStr = $resultStr . 
              '<span style="color:Navy;font-size:1.75em;">Number of records in <b><u>';
          $resultStr = $resultStr . $tableName;
          $resultStr = $resultStr . '</u></b>:   </span>';



          //  members (userName STRING, password STRING)

          while ($row = $query->fetchArray()){
               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>';
               echo '<span style="color:Navy;font-size:1.75em;">'. $row[0]. '</span>';

               $resultStr = $resultStr . '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>';
               $resultStr = $resultStr . '<span style="color:Navy;font-size:1.75em;">';
               $resultStr = $resultStr . $row[0];
               $resultStr = $resultStr . '</span>';
        //       $resultStr = $resultStr . "<br>";


          //     echo '<span style="color:Navy;font-size:1.75em;">'. $row['userName']. '</span>';
         //      echo "<br>";

             //   end     while
          }
          echo "</center>";


          //  echo "<br>"; 
      //    echo '<span style="color:Navy;font-size:1.75em;">Query finished.</span>';
     //     echo "<br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }

     return $resultStr;

      //  end    getRecordCount
   }



   function getRecordCountStr($tableName) {

     $resultStr = "";

     try {

          //  access database
          $db = new SQLite3('northwind.db');
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Database access was not successful.\n</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:1.75em;">
               //      <br>
                //     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*** Database access was successful.</span>';  
          }

        //  echo "<br><br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }




     try {

//          echo "<br><br>"; 
   //       echo '<span style="color:Navy;font-size:1.75em;">Get the record count from table <b><u>'. $tableName. '</u></b>  ...</span>';

          //  query the table
          $sql = "SELECT COUNT(*) FROM '$tableName'";
          $query = $db->query($sql);
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was not successful.</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was successful.</span>';
          }
    
       //   echo "<br>"; 
  
//          echo "<center>";
//          echo '<span style="color:Navy;font-size:1.75em;">Number of records in <b><u>'. $tableName. '</u></b>:   </span>';
     	//  echo "<br>"; 


          $resultStr = $resultStr . "<center>";
          $resultStr = $resultStr . 
              '<span style="color:Navy;font-size:1.75em;">Number of records in <b><u>';
          $resultStr = $resultStr . $tableName;
          $resultStr = $resultStr . '</u></b>:   </span>';



          //  members (userName STRING, password STRING)

          while ($row = $query->fetchArray()){
//               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>';
//               echo '<span style="color:Navy;font-size:1.75em;">'. $row[0]. '</span>';

               $resultStr = $resultStr . '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>';
               $resultStr = $resultStr . '<span style="color:Navy;font-size:1.75em;">';
               $resultStr = $resultStr . $row[0];
               $resultStr = $resultStr . '</span>';
               $resultStr = $resultStr . "<br><br>";


          //     echo '<span style="color:Navy;font-size:1.75em;">'. $row['userName']. '</span>';
         //      echo "<br>";

             //   end     while
          }
          echo "</center>";


          //  echo "<br>"; 
      //    echo '<span style="color:Navy;font-size:1.75em;">Query finished.</span>';
     //     echo "<br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }

     return $resultStr;

      //  end    getRecordCountStr
   }





   function showAllCategories() {

     try {

          //  access database
          $db = new SQLite3('northwind.db');
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Database access was not successful.\n</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:1.75em;">
               //      <br>
                //     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*** Database access was successful.</span>';  
          }

        //  echo "<br><br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }


     try {

          echo "<br><br>"; 
          echo '<span style="color:Navy;font-size:1.75em;">Entries in <b><u>Categories</u></b>:</span>';

          //  query the table
          $sql = "SELECT rowid, * FROM Categories";
          $query = $db->query($sql);
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was not successful.\n</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was successful.</span>';
          }

          echo "<br>"; 


//  ********


//  echo 'xxx<br>';

echo '     <center>
          <table border="5" rules="all">
                <tr>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.25em;">
                                  &nbsp;&nbsp;
                                  <b>ID</b>
                                  &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.25em;">
                                 &nbsp;&nbsp;
                                 <b>Name</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.25em;">
                                 &nbsp;&nbsp;
                                 <b>Description</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>

                </tr>';


                // Categories (CategoryID INTEGER PRIMARY KEY AUTOINCREMENT,
                //             CategoryName TEXT, Description TEXT)";


          while ($row = $query->fetchArray()){

echo '                <tr>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.25em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['CategoryID']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.25em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['CategoryName']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.25em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['Description']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                </tr>';


             //   end     while
          }



echo '          </table>
     </center>';
echo '<br>';

//  echo 'xxx<br><br>';




//  *********



          //  echo "<br>"; 
       //   echo '<span style="color:Navy;font-size:1.75em;">Query finished.</span>';
          echo "<br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }


      //  end    function showAllCategories
   }





   function showAllCustomers() {

     try {

          //  access database
          $db = new SQLite3('northwind.db');
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Database access was not successful.\n</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:1.75em;">
               //      <br>
                //     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*** Database access was successful.</span>';  
          }

        //  echo "<br><br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }


     try {

          echo "<br><br>"; 
          echo '<span style="color:Navy;font-size:1.75em;">Entries in <b><u>Customers</u></b>:</span>';

          //  query the table
          $sql = "SELECT rowid, * FROM Customers";
          $query = $db->query($sql);
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was not successful.\n</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was successful.</span>';
          }

          echo "<br>"; 


//  ********

//  echo 'xxx<br>';

//                //  Customers (CustomerID INTEGER PRIMARY KEY AUTOINCREMENT,
//                //             CustomerName TEXT, ContactName TEXT, Address TEXT,
//                //             City TEXT, PostalCode TEXT, Country TEXT)";


echo '     <center>
          <table border="5" rules="all">
                <tr>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.25em;">
                                  &nbsp;&nbsp;
                                  <b>ID</b>
                                  &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.25em;">
                                 &nbsp;&nbsp;
                                 <b>Name</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.25em;">
                                 &nbsp;&nbsp;
                                 <b>Contact</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.25em;">
                                 &nbsp;&nbsp;
                                 <b>Address</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.25em;">
                                 &nbsp;&nbsp;
                                 <b>City</b></span>
                                 &nbsp;&nbsp;                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.25em;">
                                 &nbsp;&nbsp;
                                 <b>Postal Code</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.25em;">
                                 &nbsp;&nbsp;
                                 <b>Country</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>

                </tr>';


                //  Customers (CustomerID INTEGER PRIMARY KEY AUTOINCREMENT,
                //             CustomerName TEXT, ContactName TEXT, Address TEXT,
                //             City TEXT, PostalCode TEXT, Country TEXT)";


          while ($row = $query->fetchArray()){

echo '                <tr>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.25em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['CustomerID']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.25em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['CustomerName']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.25em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['ContactName']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.25em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['Address']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.25em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['City']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.25em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['PostalCode']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.25em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['Country']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                </tr>';


             //   end     while
          }



echo '          </table>
     </center>';
echo '<br>';

//  echo 'xxx<br><br>';



//  *********



          //  echo "<br>"; 
       //   echo '<span style="color:Navy;font-size:1.75em;">Query finished.</span>';
          echo "<br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }


      //  end    function showAllCustomers
   }








   function showAllEmployees() {

    global $textDbAccessSize;
    global $textCustRptSize;
    global $textCustRptErrSize;
    global $textCustCatSize;
    global $textCustDataSize;
    global $textCraiyonCaptionSize;


     try {

          //  access database
          $db = new SQLite3('northwind.db');
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:';
               echo $textDbAccessSize;
               echo ';">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:';
               echo $textDbAccessSize;
               echo ';">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:';
               echo $textDbAccessSize;
               echo ';">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Database access was not successful.\n</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:';
            //   echo $textDbAccessSize;
            //   echo ';">
               //      <br>
                //     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*** Database access was successful.</span>';  
          }

        //  echo "<br><br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }


     try {

          echo "<br><br>"; 
          echo '<span style="color:Navy;font-size:';
          echo $textCustRptSize;
          echo ';">*** Entries in <b><u>Employees</u></b>:</span>';

          //  query the table
          $sql = "SELECT rowid, * FROM Employees";
          $query = $db->query($sql);
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:';
               echo $textCustomerRptErrSize;
               echo ';">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:';
               echo $textCustomerRptErrSize;
               echo ';">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:';
               echo $textCustomerRptErrSize;
               echo ';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was not successful.\n</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:';
            //   echo $textCustomerRptErrSize;
            //   echo ';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was successful.</span>';
          }

          echo "<br>"; 


//  ********

//  echo 'xxx<br>';

                //  Employees (EmployeeID INTEGER PRIMARY KEY AUTOINCREMENT,
                //             LastName TEXT, FirstName TEXT, BirthDate DATE,
                //             Photo TEXT, Notes TEXT)";


echo '     <center>
          <table border="5" rules="all">
                <tr>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:';
                                 echo $textCustCatSize;
                                 echo ';">
                                  &nbsp;
                                  <b>ID</b>
                                  &nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:';
                                 echo $textCustCatSize;
                                 echo ';">
                                 &nbsp;
                                 <b>Last Name</b>
                                 &nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:';
                                 echo $textCustCatSize;
                                 echo ';">
                                 &nbsp;
                                 <b>First Name</b>
                                 &nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:';
                                 echo $textCustCatSize;
                                 echo ';">
                                 &nbsp;
                                 <b>Birth Date</b>
                                 &nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:';
                                 echo $textCustCatSize;
                                 echo ';">
                                 &nbsp;&nbsp;
                                 <b>Photo</b></span>
                                 &nbsp;&nbsp;                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:';
                                 echo $textCustCatSize;
                                 echo ';">
                                 &nbsp;&nbsp;
                                 <b>Notes</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>

                </tr>';


                //  Employees (EmployeeID INTEGER PRIMARY KEY AUTOINCREMENT,
                //             LastName TEXT, FirstName TEXT, BirthDate DATE,
                //             Photo TEXT, Notes TEXT)";


          while ($row = $query->fetchArray()){

echo '                <tr>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:';
                                 echo $textCustDataSize;
                                 echo ';">
                                 &nbsp;&nbsp;
                                  <b>'. $row['EmployeeID']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:';
                                 echo $textCustDataSize;
                                 echo ';">
                                 &nbsp;&nbsp;
                                  <b>'. $row['LastName']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:';
                                 echo $textCustDataSize;
                                 echo ';">
                                 &nbsp;&nbsp;
                                  <b>'. $row['FirstName']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:';
                                 echo $textCustDataSize;
                                 echo ';">
                                 &nbsp;&nbsp;
                                  <b>'. $row['BirthDate']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <img src="employees/photos/';

                                 $photoName = $row['Photo'];
                                 $photoName = substr($photoName, 0, strlen($photoName) -4);

                                 echo $photoName;

                                 echo '.png" width=75em height=75em >
                                 <br>
                                 <a href="https://www.craiyon.com" target="_blank">
	                              <span id="imageCraiyonURL" style="color:Maroon;font-size:';
                                      echo $textCraiyonCaptionSize;
                                      echo ';">
                                           <b>Image created by Craiyon</b>
                                      </span>
                                 </a>
                                 <br>
                                 <span style="color:Navy;font-size:';
                                 echo $textCustDataSize;
                                 echo ';">
                                 &nbsp;&nbsp;
                                  <b>'. $row['Photo']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                                 <span style="color:Navy;font-size:';
                                 echo $textCustDataSize;
                                 echo ';">
                                  <b>'. $row['Notes']. '</b>
                                 </span>                                 
                       </td>
                </tr>';


             //   end     while
          }



echo '          </table>
     </center>';
echo '<br>';

//  echo 'xxx<br><br>';


//  *********



          //  echo "<br>"; 
       //   echo '<span style="color:Navy;font-size:';
       //  echo $textCustomerRptSize;
       //  echo ';">Query finished.</span>';
          echo "<br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }


      //  end    function showAllEmployees
   }




   function showAllShippers() {

     try {

          //  access database
          $db = new SQLite3('northwind.db');
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Database access was not successful.\n</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:1.75em;">
               //      <br>
                //     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*** Database access was successful.</span>';  
          }

        //  echo "<br><br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }


     try {

          echo "<br><br>"; 
          echo '<span style="color:Navy;font-size:1.75em;">Entries in <b><u>Shippers</u></b>:</span>';

          //  query the table
          $sql = "SELECT rowid, * FROM Shippers";
          $query = $db->query($sql);
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was not successful.\n</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was successful.</span>';
          }

          echo "<br>"; 


//  ********

//  echo 'xxx<br>';

echo '     <center>
          <table border="5" rules="all">
                <tr>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                  &nbsp;
                                  <b>ID</b>
                                  &nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                 &nbsp;
                                 <b>Name</b>
                                 &nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                 <b>Phone</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>

                </tr>';

                //  Shippers (ShipperID INTEGER PRIMARY KEY AUTOINCREMENT,
                //            ShipperName TEXT, Phone TEXT)";


          while ($row = $query->fetchArray()){

echo '                <tr>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['ShipperID']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['ShipperName']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['Phone']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                </tr>';


             //   end     while
          }



echo '          </table>
     </center>';
echo '<br>';

//  echo 'xxx<br><br>';



//  *********



          //  echo "<br>"; 
       //   echo '<span style="color:Navy;font-size:1.75em;">Query finished.</span>';
          echo "<br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }


      //  end    function showAllShippers
   }





   function showAllSuppliers() {

     try {

          //  access database
          $db = new SQLite3('northwind.db');
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Database access was not successful.\n</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:1.75em;">
               //      <br>
                //     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*** Database access was successful.</span>';  
          }

        //  echo "<br><br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }


     try {

          echo "<br><br>"; 
          echo '<span style="color:Navy;font-size:1.75em;">Entries in <b><u>Suppliers</u></b>:</span>';

          //  query the table
          $sql = "SELECT rowid, * FROM Suppliers";
          $query = $db->query($sql);
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was not successful.\n</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was successful.</span>';
          }

          echo "<br>"; 


//  ********

//  echo 'xxx<br>';

                //  Suppliers (SupplierID INTEGER PRIMARY KEY AUTOINCREMENT,
                //             SupplierName TEXT, ContactName TEXT, Address TEXT,
                //               City TEXT, PostalCode TEXT, Country TEXT, Phone TEXT)";

echo '     <center>
          <table border="5" rules="all">
                <tr>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                  &nbsp;
                                  <b>ID</b>
                                  &nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                 &nbsp;
                                 <b>Supplier Name</b>
                                 &nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                 <b>Contact Name</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                 <b>Address</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                 <b>City</b></span>
                                 &nbsp;&nbsp;                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                 <b>Postal Code</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                 <b>Country</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                 <b>Phone</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>

                </tr>';

                //  Suppliers (SupplierID INTEGER PRIMARY KEY AUTOINCREMENT,
                //             SupplierName TEXT, ContactName TEXT, Address TEXT,
                //               City TEXT, PostalCode TEXT, Country TEXT, Phone TEXT)";


          while ($row = $query->fetchArray()){

echo '                <tr>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['SupplierID']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['SupplierName']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['ContactName']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['Address']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['City']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['PostalCode']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['Country']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['Phone']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                       </td>

                </tr>';


             //   end     while
          }



echo '          </table>
     </center>';
echo '<br>';

//  echo 'xxx<br><br>';



//  *********



          //  echo "<br>"; 
       //   echo '<span style="color:Navy;font-size:1.75em;">Query finished.</span>';
          echo "<br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }


      //  end    function showAllSuppliers
   }





   function showAllProducts($displayMode) {

     try {

          //  access database
          $db = new SQLite3('northwind.db');
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Database access was not successful.\n</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:1.75em;">
               //      <br>
                //     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*** Database access was successful.</span>';  
          }

        //  echo "<br><br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }


     try {

          echo "<br><br>"; 
          if($displayMode == 1) {
                echo '<span style="color:Navy;font-size:1.75em;">Entries in <b><u>Products</u></b> 
                      <span style="color:Maroon;">using FOREIGN KEYS</span>
                      :
                      </span>';
          }
          else {
                echo '<span style="color:Navy;font-size:1.75em;">Entries in <b><u>Products</u></b>:</span>';
          }

          //  query the table
          if($displayMode == 1) {
            //   $sql = "SELECT rowid, * FROM Products";
               $sql = "SELECT a.ProductID, a.ProductName, c.SupplierName, d.CategoryName, a.Unit, a.Price FROM Products a
                       JOIN Suppliers c
                       ON a.SupplierID = c.SupplierID
                       JOIN Categories d
                       ON a.CategoryID = d.CategoryID";
          }
          else {
               $sql = "SELECT rowid, * FROM Products";
          }
          $query = $db->query($sql);
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was not successful.\n</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was successful.</span>';
          }

          echo "<br>"; 


//  ********

//  echo 'xxx<br>';

                //  Products (ProductID INTEGER PRIMARY KEY AUTOINCREMENT,
                //            ProductName TEXT, SupplierID INTEGER, CategoryID INTEGER,
                //            Unit TEXT, Price NUMERIC DEFAULT 0,
	        //            FOREIGN KEY (CategoryID) REFERENCES Categories (CategoryID),
	        //            FOREIGN KEY (SupplierID) REFERENCES Suppliers (SupplierID))";

echo '     <center>
          <table border="5" rules="all">
                <tr>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                  &nbsp;
                                  <b>ID</b>
                                  &nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                 &nbsp;
                                 <b>Product Name</b>
                                 &nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                 <b>Supplier</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                 <b>Category</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                 <b>Unit</b></span>
                                 &nbsp;&nbsp;                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                 <b>Price</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>

                </tr>';

//                //  Products (ProductID INTEGER PRIMARY KEY AUTOINCREMENT,
//                //            ProductName TEXT, SupplierID INTEGER, CategoryID INTEGER,
//                //            Unit TEXT, Price NUMERIC DEFAULT 0,
//	        //            FOREIGN KEY (CategoryID) REFERENCES Categories (CategoryID),
//	        //            FOREIGN KEY (SupplierID) REFERENCES Suppliers (SupplierID))";

          while ($row = $query->fetchArray()){

echo '                <tr>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['ProductID']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['ProductName']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >';

          if($displayMode == 1) {
             echo '
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['SupplierName']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>';
          }
          else {
             echo '
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['SupplierID']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>';
          }

          
                       echo '
                       </td>
                       <td style="background-color:aliceblue;color:black" >';                         


          if($displayMode == 1) {
             echo '
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['CategoryName']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>';
          }
          else {
                        echo '
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['CategoryID']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>';
          }

                       echo '           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['Unit']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. sprintf("%.2f", $row['Price']). '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                       </td>

                </tr>';


             //   end     while
          }



echo '          </table>
     </center>';
echo '<br>';

//  echo 'xxx<br><br>';



//  *********



          //  echo "<br>"; 
       //   echo '<span style="color:Navy;font-size:1.75em;">Query finished.</span>';
          echo "<br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }


      //  end    function showAllProducts
   }






   function showAllOrders($displayMode) {

     try {

          //  access database
          $db = new SQLite3('northwind.db');
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Database access was not successful.\n</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:1.75em;">
               //      <br>
                //     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*** Database access was successful.</span>';  
          }

        //  echo "<br><br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }


     try {

          echo "<br><br>"; 

          if($displayMode == 1) {
                echo '<span style="color:Navy;font-size:1.75em;">Entries in <b><u>Orders</u></b> 
                      <span style="color:Maroon;">using FOREIGN KEYS</span>
                      :
                      </span>';
          }
          else {
                echo '<span style="color:Navy;font-size:1.75em;">Entries in <b><u>Orders</u></b>:</span>';
          }


      //    echo '<span style="color:Navy;font-size:1.75em;">Entries in <b><u>Orders</u></b>:</span>';


                //  Orders (OrderID INTEGER PRIMARY KEY AUTOINCREMENT,
                //          CustomerID INTEGER, EmployeeID INTEGER, OrderDate DATETIME,
                //          ShipperID INTEGER,
                //          FOREIGN KEY (EmployeeID) REFERENCES Employees (EmployeeID),
                //          FOREIGN KEY (CustomerID) REFERENCES Customers (CustomerID),
                //          FOREIGN KEY (ShipperID) REFERENCES Shippers (ShipperID))";

          //  query the table
          if($displayMode == 1) {
               $sql = "SELECT a.OrderID, c.CustomerName, d.lastName, d.firstName, a.OrderDate, e.ShipperName FROM Orders a
                       JOIN Customers c
                       ON a.CustomerID = c.CustomerID
                       JOIN Employees d
                       ON a.EmployeeID = d.EmployeeID
                       JOIN Shippers e
                       ON a.ShipperID = e.ShipperID";
          }
          else {
               $sql = "SELECT rowid, * FROM Orders";
          }

          $query = $db->query($sql);
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was not successful.\n</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was successful.</span>';
          }

          echo "<br>"; 


//  ********

//  echo 'xxx<br>';

echo '     <center>
          <table border="5" rules="all">
                <tr>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                  &nbsp;
                                  <b>ID</b>
                                  &nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                 &nbsp;
                                 <b>Customer Name</b>
                                 &nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                 <b>Employee Name</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                 <b>Order Date</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                 <b>Shipper Name</b></span>
                                 &nbsp;&nbsp;                                 
                            </center>           
                       </td>

                </tr>';


                //  Orders (OrderID INTEGER PRIMARY KEY AUTOINCREMENT,
                //          CustomerID INTEGER, EmployeeID INTEGER, OrderDate DATETIME,
                //          ShipperID INTEGER,
                //          FOREIGN KEY (EmployeeID) REFERENCES Employees (EmployeeID),
                //          FOREIGN KEY (CustomerID) REFERENCES Customers (CustomerID),
                //          FOREIGN KEY (ShipperID) REFERENCES Shippers (ShipperID))";


          while ($row = $query->fetchArray()){

echo '                <tr>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['OrderID']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >';

          if($displayMode == 1) {
             echo '
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['CustomerName']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>';
          }
          else {

                     echo '
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['CustomerID']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>';
          }


                    echo '           
                       </td>
                       <td style="background-color:aliceblue;color:black" >';


          if($displayMode == 1) {
                      echo '                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                 <b>'. $row['FirstName']. '</b>&nbsp;<b>'. $row['LastName']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>';
          }
          else {
                      echo '                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['EmployeeID']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>';
          }


                    echo '           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['OrderDate']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >';


          if($displayMode == 1) {
                  echo '                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['ShipperName']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>';
          }
          else {
                  echo '                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['ShipperID']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>';
          }


                  echo '           
                       </td>

                </tr>';


             //   end     while
          }



echo '          </table>
     </center>';
echo '<br>';

//  echo 'xxx<br><br>';




//  *********



          //  echo "<br>"; 
       //   echo '<span style="color:Navy;font-size:1.75em;">Query finished.</span>';
          echo "<br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }


      //  end    function showAllOrders
   }





   function showAllOrderDetails($displayMode) {

     try {

          //  access database
          $db = new SQLite3('northwind.db');
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Database access was not successful.\n</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:1.75em;">
               //      <br>
                //     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*** Database access was successful.</span>';  
          }

        //  echo "<br><br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }


     try {

          echo "<br><br>"; 
          if($displayMode == 1) {
                echo '<span style="color:Navy;font-size:1.75em;">Entries in <b><u>OrderDetails</u></b> 
                      <span style="color:Maroon;">using FOREIGN KEYS</span>
                      :
                      </span>';
          }
          else {
                echo '<span style="color:Navy;font-size:1.75em;">Entries in <b><u>OrderDetails</u></b>:</span>';
          }



      //    echo '<span style="color:Navy;font-size:1.75em;">Entries in <b><u>OrderDetails</u></b>:</span>';

                //  OrderDetails (OrderDetailID INTEGER PRIMARY KEY AUTOINCREMENT,
                //                OrderID INTEGER, ProductID INTEGER, Quantity INTEGER,
	        //                FOREIGN KEY (OrderID) REFERENCES Orders (OrderID),
	        //                FOREIGN KEY (ProductID) REFERENCES Products (ProductID))";


          //  query the table
          if($displayMode == 1) {
               $sql = "SELECT a.OrderDetailID, c.OrderID, d.ProductName, a.Quantity FROM OrderDetails a
                       JOIN Orders c
                       ON a.OrderID = c.OrderID
                       JOIN Products d
                       ON a.ProductID = d.ProductID";
          }
          else {
               $sql = "SELECT rowid, * FROM OrderDetails";
          }

          $query = $db->query($sql);
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was not successful.\n</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was successful.</span>';
          }

          echo "<br>"; 


//  ********

//  echo 'xxx<br>';

echo '     <center>
          <table border="5" rules="all">
                <tr>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                  &nbsp;
                                  <b>ID</b>
                                  &nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                 &nbsp;
                                 <b>Order ID</b>
                                 &nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                 <b>Product Name</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:lightGrey;color:black" >                         
                            <center>
                                 <span style="color:Maroon;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                 <b>Quantity</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>

                </tr>';

                //  OrderDetails (OrderDetailID INTEGER PRIMARY KEY AUTOINCREMENT,
                //                OrderID INTEGER, ProductID INTEGER, Quantity INTEGER,
	        //                FOREIGN KEY (OrderID) REFERENCES Orders (OrderID),
	        //                FOREIGN KEY (ProductID) REFERENCES Products (ProductID))";

          while ($row = $query->fetchArray()){

echo '                <tr>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['OrderDetailID']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['OrderID']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >';


            if($displayMode == 1) {
                    echo '
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['ProductName']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>';
          }
          else {
                    echo '
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['ProductID']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>';
          }
                       


                     echo '           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['Quantity']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>

                </tr>';


             //   end     while
          }



echo '          </table>
     </center>';
echo '<br>';

//  echo 'xxx<br><br>';



//  *********



          //  echo "<br>"; 
       //   echo '<span style="color:Navy;font-size:1.75em;">Query finished.</span>';
          echo "<br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }


      //  end    function showAllOrderDetails
   }





   function showAllSalesTax() {

     try {

          //  access database
          $db = new SQLite3('northwind.db');
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Database access was not successful.\n</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:1.75em;">
               //      <br>
                //     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*** Database access was successful.</span>';  
          }

        //  echo "<br><br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }


     try {

          echo "<br><br>"; 
                echo '<span style="color:Navy;font-size:1.75em;">Entries in <b><u>SalesTax</u></b>:</span>';


      //    echo '<span style="color:Navy;font-size:1.75em;">Entries in <b><u>OrderDetails</u></b>:</span>';

                //  SalesTax (SalesTaxID INTEGER PRIMARY KEY AUTOINCREMENT,
                //                  SalesTaxCountry TEXT, 
                //                  SalesTaxRegion TEXT,
                //                  SalesTaxLocality TEXT,
                //                  SalesTaxCode TEXT UNIQUE,
                //                  SalesTaxValue FLOAT)";





          //  query the table
               $sql = "SELECT rowid, * FROM SalesTax";

          $query = $db->query($sql);
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was not successful.\n</span>';
          } else {
            //   echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was successful.</span>';
          }

          echo "<br>"; 


//  ********


//  echo 'xxx<br>';

echo '     <center>
          <table border="5" rules="all">
                <tr>
                       <td style="background-color:greenYellow;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                  &nbsp;
                                  <b>ID</b>
                                  &nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:greenYellow;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;
                                 <b>Country</b>
                                 &nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:greenYellow;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;
                                 <b>Region</b>
                                 &nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:greenYellow;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;
                                 <b>Locality</b>
                                 &nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:greenYellow;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;
                                 <b>Code</b>
                                 &nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:greenYellow;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;
                                 <b>Tax Rate</b>
                                 &nbsp;
                                 </span>                                 
                            </center>           
                       </td>

                </tr>';

                //  SalesTax (SalesTaxID INTEGER PRIMARY KEY AUTOINCREMENT,
                //                  SalesTaxCountry TEXT, 
                //                  SalesTaxRegion TEXT,
                //                  SalesTaxLocality TEXT,
                //                  SalesTaxCode TEXT UNIQUE,
                //                  SalesTaxValue FLOAT)";
 



          while ($row = $query->fetchArray()){

echo '                <tr>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['SalesTaxID']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['SalesTaxCountry']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['SalesTaxRegion']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['SalesTaxLocality']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;&nbsp;
                                  <b>'. $row['SalesTaxCode']. '</b>
                                 &nbsp;&nbsp;
                                 </span>                                 
                            </center>           
                       </td>
                       <td style="background-color:aliceblue;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.0em;">
                                 &nbsp;
                                  <b>'. sprintf("%.3f", $row['SalesTaxValue']). '</b>
                                 &nbsp;
                                 </span>                                 
                            </center>           
                       </td>

                </tr>';


             //   end     while
          }



echo '          </table>
     </center>';
echo '<br>';

//  echo 'xxx<br><br>';






//  *********



          //  echo "<br>"; 
       //   echo '<span style="color:Navy;font-size:1.75em;">Query finished.</span>';
          echo "<br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }


      //  end    function showAllSalesTax
   }




?>




<?php

        //  values for the default screen width

        $copyRightMsgSize = "2.25em";
	$exceptionOccurredMsgSize = "1.125em";







switch($screenWidth) {
      case 360:      //  Android 
      //   echo ' <script> alert("using screen width = 360" + "<br>"); </script>';

         if($isChrome) {
	 }

         if($isFirefox) {
	 }

         if($isAndroidEdge) {
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
         } 

         if($isFirefox) {
            //  echo ' <script> alert("Firefox using screen width = 1133" + "<br>"); </script>';

                       $textDbAccessSize = "1.5em";
                       $textCustRptSize = "1.5em";
                       $textCustRptErrSize = "1.5em";
                       $textCustCatSize = "0.6em";
                       $textCustDataSize = "0.6em";
                       $textCraiyonCaptionSize = "0.6em";

         } 

         if($isNewEdge) {
            //  echo ' <script> alert("Microsoft Edge (new) using screen width = 1133" + "<br>"); </script>';
         } 

         if($isEdge) {
            //  echo ' <script> alert("Microsoft Edge (old) using screen width = 1133" + "<br>"); </script>';
         } 


         break;
      case 1143:     //  Android
      //   echo ' <script> alert("using screen width = 1143" + "<br>"); </script>';

         if($isChrome) {
            //  echo ' <script> alert("Chrome using screen width = 1143" + "<br>"); </script>';

                       $textDbAccessSize = "1.0em";
                       $textCustRptSize = "1.0em";
                       $textCustRptErrSize = "1.0em";
                       $textCustCatSize = "0.6em";
                       $textCustDataSize = "0.6em";
                       $textCraiyonCaptionSize = "0.6em";

         } 

         if($isFirefox) {
            //  echo ' <script> alert("Firefox using screen width = 1143" + "<br>"); </script>';
         } 

         if($isAndroidEdge) {
            //  echo ' <script> alert("Microsoft Edge (Android) using screen width = 1143" + "<br>"); </script>';

                       $textDbAccessSize = "1.5em";
                       $textCustRptSize = "1.5em";
                       $textCustRptErrSize = "1.5em";
                       $textCustCatSize = "0.6em";
                       $textCustDataSize = "0.6em";
                       $textCraiyonCaptionSize = "0.6em";

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
      	 	//   echo ' <script> alert("using screen width = 1536" + "<br>"); </script>';
                           
         	if($isChrome) {
            		//  echo ' <script> alert("Chrome using screen width = 1536" + "<br>"); </script>';

                       $textDbAccessSize = "1.75em";
                       $textCustRptSize = "1.75em";
                       $textCustRptErrSize = "1.75em";
                       $textCustCatSize = "1.1em";
                       $textCustDataSize = "1.1em";
                       $textCraiyonCaptionSize = "0.7em";

         	} 
                          
         	if($isFirefox) {
            		//  echo ' <script> alert("Firefox using screen width = 1536" + "<br>"); </script>';

                       $textDbAccessSize = "1.75em";
                       $textCustRptSize = "1.75em";
                       $textCustRptErrSize = "1.75em";
                       $textCustCatSize = "1.0em";
                       $textCustDataSize = "1.0em";
                       $textCraiyonCaptionSize = "0.7em";

         	} 
                        
         	if($isNewEdge) {
            		//  echo ' <script> alert("Microsoft Edge (new) using screen width = 1536" + "<br>"); </script>';

                        $textDbAccessSize = "1.75em";
                        $textCustRptSize = "1.75em";
                        $textCustRptErrSize = "1.75em";
                        $textCustCatSize = "0.9em";
                        $textCustDataSize = "0.9em";
                        $textCraiyonCaptionSize = "0.7em";

         	} 
                      
         	if($isEdge) {
            		//  echo ' <script> alert("Microsoft Edge (old) using screen width = 1536" + "<br>"); </script>';
         	} 
                   
                    
         break;
      	 case 1707:     //  Win10
      	 	//   echo ' <script> alert("using screen width = 1707" + "<br>"); </script>';
                        
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
     grid-template-rows: 03vh 170vh 03vh; 
}





.grid-containerReference {
     border: 3px solid rgb(211, 211, 211, 1.0);      
     display: grid;
     grid-gap: 1em;
     grid-template-columns: 0.5fr 4fr 0.5fr;
     grid-template-rows: 03vh 1630vh 03vh; 
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
<span id="pageTitle1" style="color:Navy;font-size:3em;">
<b>
Access the Northwind Traders database.
</b>
</span>
</center>


<?php
     echo "<br>"; 

     echo '<span style="color:Navy;font-size:1.75em;">
     The data in this database comes from the <span style="color:Maroon;">Northwind Traders</span> database provided by Microsoft 
     and released under the
     <a href="https://opensource.org/license/ms-pl-html" target="_blank">
	<span id="mSPL" style="font-size:1em;">
                  <b>Microsoft Public License</b>
        </span></a>. 
     Northwind Traders is a fictitious importer and exporter of foods from around the world.
     <br><br>
     The data was obtained at
     &nbsp;&nbsp;&nbsp;
     <a href="https://en.m.wikiversity.org/wiki/Database_Examples/Northwind/SQLite" target="_blank">
	<span id="wikiversityURL" style="font-size:1em;">
                  <b>https://en.m.wikiversity.org/wiki/Database_Examples/Northwind/SQLite</b>
        </span>
     </a> 
     <br><br>
     <center>
        <a href="https://ab872.github.io/viewCrudP4.html" target="_blank">
	   <span id="introSQLiteURL" style="font-size:1em;">
                     <b>Click here for an introduction to SQLite</b>
           </span>
        </a> 
     </center>
     <br><br>
     You must login to access the database. The GUEST account (USER ID = <span style="color:Maroon;">guest</span>, 
     PASSWORD = <span style="color:Maroon;">visitor</span>) may be used in order to demonstrate the use of the database. Enter your 
     USER ID and PASSWORD in order to login.
     Click the button 
     <span style="color:Maroon;">Browse</span> 
     to login and use the database.
     </span><br><br>';


?>




<?php

  if(isset($_POST['rptMethod'])){
    //   global rptMethod;
       $rptMethod = $_POST['rptMethod'];
  }
  else {
   //    global rptMethod;
       $rptMethod = 'useCategories';
  }




  if(isset($_POST['verifyInputsButton'])){
    //  echo ' <script> alert("You pressed \"Browse\"."); </script>';

    $userID = $_POST['userID'];
    $password = $_POST['userPassword'];

 //   global $rptMethod;
    $rptMethod = $_POST['rptMethod'];  //  ******  ????


    $errorCount = 0;

    echo '<br><br>';


    if ($userID == "???"){
   //      echo ' <script> alert("Please enter a value for the <span style="color:Maroon;">User ID</span>."); </script>';

         echo '<span style="color:Navy;font-size:1.75em;">';
         echo ' Please enter a value for the <span style="color:Maroon;">User ID</span>.<br>';
         echo '</span>';

         $errorCount += 1;
    }


    if ($password == "?????"){
     //    echo ' <script> alert("Please enter a value for the <span style="color:Maroon;">User Password</span>."); </script>';

         echo '<span style="color:Navy;font-size:1.75em;">';
         echo 'Please enter a value for the <span style="color:Maroon;">User Password</span>.<br>';
         echo '</span>';

         $errorCount += 1;
    }


    //  function checkIfLoggedIn ($userID, $password, $errorCount)
    //       returns 0 if not log in failed
    //       returns 1 if log in was successful
    $logStatus = checkIfLoggedIn ($userID, $password, $errorCount);


    if ($logStatus) {

         echo '<span style="color:Navy;font-size:1.75em;">';
     //    echo '<br><br>';
         echo ' *** Successful Login, ';

         if($userLevel != 'new') {
            echo 'non-guest user. ***<br>';
         }
         else {
            echo 'guest user. ***<br>';
         }
         echo '</span>';

    }
    else
    {
         echo '<span style="color:Navy;font-size:1.75em;">';
     //    echo '<br>';
         echo ' <span style="color:Maroon;">*** Login failed. You need to login to use the database. ***</span><br>';
         echo '</span>';

         $errorCount += 1;

    }




    if ($errorCount) {

         echo '<span style="color:Navy;font-size:1.75em;">';
         echo $errorCount;
         if ($errorCount == 1) {
            echo ' <span style="color:Maroon;">error was encountered.</span> <br><br></span>';
          } else {
            echo ' <span style="color:Maroon;">errors were encountered.</span> <br><br></span>';
          }


    } else {
         //    echo ' <script> alert("No errors were encountered."); </script>';

     //    echo '<span style="color:Navy;font-size:1.75em;">';
     //    echo ' No errors were encountered. <br><br>';
     //    echo '</span>';

    }


     //   end     if isset verifyInputsButton
    }



  if(isset($_POST['deleteEntryButton'])){
    //  echo ' <script> alert("You pressed \"Delete this Entry\"."); </script>';


    $userID = $_POST['userID'];
    $password = $_POST['userPassword'];
    $rptMethod = $_POST['rptMethod'];  //  ******  ????


    $errorCount = 0;


    if ($userID == "???"){
   //      echo ' <script> alert("Please enter a value for the User ID."); </script>';

         echo '<span style="color:Navy;font-size:1.75em;">';
         echo ' Please enter a value for the User ID.<br>';
         echo '</span>';

         $errorCount += 1;
    }


    if ($password == "?????"){
     //    echo ' <script> alert("Please enter a value for the User Pasword."); </script>';

         echo '<span style="color:Navy;font-size:1.75em;">';
         echo 'Please enter a value for the User Password.<br>';
         echo '</span>';

         $errorCount += 1;
    }


    //  function checkIfLoggedIn ($userID, $password, $errorCount)
    //       returns 0 if not log in failed
    //       returns 1 if log in was successful
    $logStatus = checkIfLoggedIn ($userID, $password, $errorCount);


    if ($logStatus) {


         echo '<span style="color:Navy;font-size:1.75em;">';
         echo ' *** Successful Login, ';

         if($userLevel = 'new') {
            echo 'guest user. ***<br>';
         }
         else {
            echo 'non-guest user. ***<br>';
         }
         echo '</span>';




    }
    else
    {
         echo '<span style="color:Navy;font-size:1.75em;">';
         echo ' *** Login failed. You need to login to use the database. *** <br>';
         echo '</span>';

         $errorCount += 1;

    }


    if ($errorCount) {

         echo '<span style="color:Navy;font-size:1.75em;">';
         echo $errorCount;
         if ($errorCount == 1) {
            echo ' error was encountered. <br><br></span>';
          } else {
            echo ' errors were encountered. <br><br></span>';
          }


    } else {
         //    echo ' <script> alert("No errors were encountered."); </script>';

     //    echo '<span style="color:Navy;font-size:1.75em;">';
     //    echo ' No errors were encountered. <br><br>';
     //    echo '</span>';

    }


         if (!$errorCount) {

//   only the database administrator may delete entries

     echo "<br>"; 
     echo '<span style="color:Maroon;font-size:1.75em;">In order to maintain the security of this demonstration
     database, only the database administrator is allowed to delete data.</span><br><br>';


            //   end     if no errors
         }



     //   end     if isset deleteEntryButton
    }




  if(isset($_POST['addEntryButton'])){
    //  echo ' <script> alert("You pressed \"Add an Entry\"."); </script>';



    $userID = $_POST['userID'];
    $password = $_POST['userPassword'];
    $rptMethod = $_POST['rptMethod'];  //  ******  ????



    $errorCount = 0;


    if ($userID == "???"){
   //      echo ' <script> alert("Please enter a value for the User ID."); </script>';

         echo '<span style="color:Navy;font-size:1.75em;">';
         echo ' Please enter a value for the User ID.<br>';
         echo '</span>';

         $errorCount += 1;
    }


    if ($password == "?????"){
     //    echo ' <script> alert("Please enter a value for the User Pasword."); </script>';

         echo '<span style="color:Navy;font-size:1.75em;">';
         echo 'Please enter a value for the User Password.<br>';
         echo '</span>';

         $errorCount += 1;
    }


    //  function checkIfLoggedIn ($userID, $password, $errorCount)
    //       returns 0 if not log in failed
    //       returns 1 if log in was successful
    $logStatus = checkIfLoggedIn ($userID, $password, $errorCount);


    if ($logStatus) {

         echo '<span style="color:Navy;font-size:1.75em;">';
         echo ' *** Successful Login, ';

         if($userLevel = 'new') {
            echo 'guest user. ***<br>';
         }
         else {
            echo 'non-guest user. ***<br>';
         }
         echo '</span>';




    }
    else
    {
         echo '<span style="color:Navy;font-size:1.75em;">';
         echo ' *** Login failed. You need to login to use the database. *** <br>';
         echo '</span>';

         $errorCount += 1;

    }



    if ($errorCount) {

         echo '<span style="color:Navy;font-size:1.75em;">';
         echo $errorCount;
         if ($errorCount == 1) {
            echo ' error was encountered. <br><br></span>';
          } else {
            echo ' errors were encountered. <br><br></span>';
          }


    } else {
         //    echo ' <script> alert("No errors were encountered."); </script>';

     //    echo '<span style="color:Navy;font-size:1.75em;">';
     //    echo ' No errors were encountered. <br><br>';
     //    echo '</span>';

    }


         if (!$errorCount) {

//   only the database administrator may add entries

     echo "<br>"; 
     echo '<span style="color:Maroon;font-size:1.75em;">In order to maintain the security of this demonstration
     database, only the database administrator is allowed to add data.</span><br><br>';


            //   end     if no errors
         }


     //   end     if isset addEntryButton
    }



?>



<form action="" method="post">
  <center> 
  <label id="userID-label" for="userID"><b>User ID</b></label>
  <br>
  <input type="text" name="userID" id="userID" alt="enter the user ID here" size="<?php echo $userIDSize; ?>" maxlength="100" value=<?php echo $userID?>>
  <br>
  <label id="userPassword-label" for="userPassword"><b>User Password</b></label>
  <br>
  <input type="text" name="userPassword" id="userPassword" alt="enter the user password here" size="<?php echo $userPasswordSize; ?>" maxlength="100" value=<?php echo $password?>>
  </center>
  <br>

  <br>
  <center> 
     <label id="rptMethod-label" for="rptMethod">
         <b>
         Type of 
         <span style="color:Maroon;">
            RAW
         </span>
         Data to Browse
         </b>
     </label>
     <br>
     <input type="radio" id="rCategories" name="rptMethod" value="useCategories"<?php if($rptMethod == 'useCategories') echo 'CHECKED';?> > Categories

     <input type="radio" id="rCustomers" name="rptMethod" value="useCustomers"<?php if($rptMethod == 'useCustomers') echo 'CHECKED';?> > Customers

     <input type="radio" id="rEmployees" name="rptMethod" value="useEmployees"<?php if($rptMethod == 'useEmployees') echo 'CHECKED';?> > Employees

     <input type="radio" id="rShippers" name="rptMethod" value="useShippers"<?php if($rptMethod == 'useShippers') echo 'CHECKED';?> > Shippers

     <input type="radio" id="rSuppliers" name="rptMethod" value="useSuppliers"<?php if($rptMethod == 'useSuppliers') echo 'CHECKED';?> > Suppliers

     <input type="radio" id="rProducts" name="rptMethod" value="useProducts"<?php if($rptMethod == 'useProducts') echo 'CHECKED';?> > Products

     <input type="radio" id="rOrders" name="rptMethod" value="useOrders"<?php if($rptMethod == 'useOrders') echo 'CHECKED';?> > Orders

     <input type="radio" id="rOrderDetails" name="rptMethod" value="useOrderDetails"<?php if($rptMethod == 'useOrderDetails') echo 'CHECKED';?> > Order Details

     <br>

     <input type="radio" id="rSalesTax" name="rptMethod" value="useSalesTax"<?php if($rptMethod == 'useSalesTax') echo 'CHECKED';?> > <span style="color:Green;">Sales Tax</span>



     <br><br>
     <label id="rptFmtMethod-label">
         <b>
         Type of 
         Data to Browse
         <span style="color:Maroon;">
            using FOREIGN KEYS
         </span>
         </b>
     </label>
     <br>

     <input type="radio" id="rProductsFmt" name="rptMethod" value="useProductsFmt"<?php if($rptMethod == 'useProductsFmt') echo 'CHECKED';?> > Products

     <input type="radio" id="rOrdersFmt" name="rptMethod" value="useOrdersFmt"<?php if($rptMethod == 'useOrdersFmt') echo 'CHECKED';?> > Orders

     <input type="radio" id="rOrderDetailsFmt" name="rptMethod" value="useOrderDetailsFmt"<?php if($rptMethod == 'useOrderDetailsFmt') echo 'CHECKED';?> > Order Details


  </center>
  <br>


  <center>
     <button id="verifyInputsButton" name="verifyInputsButton"
         title="verify the info you entered button" aria-label="verify the info you entered button" 
         style="background-color:lightblue;color:black;
         margin-left:1px;margin-right:2px;margin-top:1px;margin-bottom:1px;
         border:2px solid lightgrey;border-radius:8px;
         width:14em;height:3.2em;-webkit-appearance:none" >
         <span style="font-size:1.25em;"> 
         <b>
         Browse
         </b>
         </span>
    </button>
  </center>
  <br>

  <center>
     <button id="deleteEntryButtonButton" name="deleteEntryButton" 
         title="delete a database entry button" aria-label="delete a database entry button" 
         style="background-color:lightblue;color:black;
         margin-left:1px;margin-right:2px;margin-top:1px;margin-bottom:1px;
         border:2px solid lightgrey;border-radius:8px;
         width:14em;height:3.2em;-webkit-appearance:none" >
         <span style="font-size:1.25em;"> 
         <b>
         Remove data
         </b>
         &nbsp;&nbsp;
         </span>
         <svg transform="translate(0,2)" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" 
         class="bi bi-minus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="deleteEntryIconTitle" 
         aria-describedby="deleteEntryIconDesc">
         <title> id="deleteEntryIconTitle">delete an entry</title>
         <desc  id="deleteEntryIconDesc">this icon indicates that you can delete an entry from the database</desc> 
         <rect opacity="1" fill="none" stroke="none" stroke-width="1"  width="16" height="16"/>
         <polyline opacity="1" fill="none" stroke="black" stroke-width="1.1" points="4,8 12,8" 
         rotate(0)?=""/>
         </svg>
     </button>
  </center>
  <br>



  <center>
     <BUTTON id="addEntryButton" name="addEntryButton"
         title="add a database entry button" aria-label="add a database entry button" 
         style="background-color:lightblue;color:black;
         margin-left:1px;margin-right:2px;margin-top:1px;margin-bottom:1px;
         border:2px solid lightgrey;border-radius:8px;
         width:14em;height:3.2em;-webkit-appearance:none" >    
         <span style="font-size:1.25em;"> 
         <b>
         Add data
         </b>
         &nbsp;&nbsp;
         </span>
         <svg  transform="translate(-4,0)" id="addEntryIcon" name="addEntryIcon" 
         xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-plus" 
         viewBox="0 0 16 16" role="graphics-document" aria-labelledby="addEntryIconTitle" aria-describedby="addEntryIconDesc">
         <title> id="addEntryIconTitle">add an entry</title>
         <desc  id="addEntryIconDesc">this icon indicates that you can add an entry to the database</desc> 
         <rect opacity="1" fill="none" stroke="none" stroke-width="1"  width="16" height="16"/>
         <polyline opacity="1" fill="none" stroke="black" stroke-width="1.1" points="4,8 12,8" rotate(0)?=""/>
         <polyline opacity="1" fill="none" stroke="black" stroke-width="1.1" points="8,4 8,12" rotate(0)?=""/>
         </svg>
     </BUTTON> 
  </center><br>


</form>




<?php
//     echo "<br><br>"; 
//     echo '<span style="color:Navy;font-size:1.75em;">Check if SQLite is available and access the Northwind Traders database.<br></span>';
?>


<?php
     try {

          echo "<br>"; 
          echo '<span style="color:Navy;font-size:1.75em;">Check if SQLite is available ...</span>';

          if(class_exists('SQLite3')) {
               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SQLite 3 is available.</span>';
          } else {
               die('<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SQLite 3 is not available.<br></span>');
          }

          //  echo "<br>"; 
    //      echo '<span style="color:Navy;font-size:1.75em;">
    //           <br>
    //           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*** Finished checking if SQLite is available.<br></span>';

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }




     try {

          //  access database
          $db = new SQLite3('northwind.db');
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">
                     Database access for Northwind was not successful.\n</span>';
          } else {
               echo '<span style="color:Navy;font-size:1.75em;">
                     <br>
                     Database access for Northwind was successful.</span>';  
          }

        //  echo "<br><br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }



     try {

//          echo "<br><br>"; 
//          echo '<span style="color:Navy;font-size:1.75em;">Query the SQLite version  ...</span>';

          //  query the table
          $sql = "SELECT SQLITE_VERSION()";
          $query = $db->query($sql);

          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was not successful.\n</span>';
          } else {
     //          echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was successful.</span>';
          }

          echo "<br>"; 


          while ($row = $query->fetchArray()){

	       if(empty($row)) {
                   echo '<span style="color:Navy;font-size:1.75em;">*** There was no response. ***<br></span>';
	       } else {
       //            echo '<span style="color:Navy;font-size:1.75em;">*** There was a response. ***<br></span>';
               }

                    echo '<span style="color:Navy;font-size:1.75em;">The SQLite version number is </span>';
                    echo '<span style="color:Navy;font-size:1.75em;">';
                    echo $row[0];
                    echo '</span>';
                    echo '<span style="color:Navy;font-size:1.75em;"> </span>';
                    echo '<span style="color:Navy;font-size:1.75em;"><br></span>';
                   
          }

          //  echo "<br>"; 
     //     echo '<span style="color:Navy;font-size:1.75em;">Query finished.</span>';
     //     echo "<br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }




     try {

     //     echo "<br><br>"; 
     //     echo '<span style="color:Navy;font-size:1.75em;">Check if foreign keys are enabled  ...</span>';

          //  query the table
          $sql = "PRAGMA foreign_keys";
          $query = $db->query($sql);

          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was not successful.</span>';
          } else {
     //          echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was successful.</span>';
          }

          echo "<br>"; 

//          echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;Data returned:</span>';
//     	  echo "<br>"; 

          while ($row = $query->fetchArray()){

	       if(empty($row)) {
                   echo '<span style="color:Navy;font-size:1.75em;">*** There was no response. ***<br></span>';
	       } else {
       //            echo '<span style="color:Navy;font-size:1.75em;">*** There was a response. ***<br></span>';
               }

               if($row[0] == 0) {
                    echo '<span style="color:Navy;font-size:1.75em;">
                           *** Foreign keys are not enabled. ***<br></span>';
     	       } else {
                    echo '<span style="color:Navy;font-size:1.75em;">
                            *** Foreign keys are enabled. ***<br></span>';
               }

            //   while                      
          }

          //  echo "<br>"; 
     //     echo '<span style="color:Navy;font-size:1.75em;">Query finished.</span>';
     //     echo "<br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }




     try {

   //       echo "<br>"; 
          echo '<span style="color:Navy;font-size:1.75em;">*** Enable foreign keys. ***</span>';

          //  query the table
          $sql = "PRAGMA foreign_keys=1";
          $query = $db->query($sql);
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was not successful.\n</span>';
          } else {
    //           echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was successful.</span>';
          }

   //       echo "<br>"; 

   //       echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;Data returned:</span>';
   //  	  echo "<br>"; 


          while ($row = $query->fetchArray()){

	       if(empty($row)) {
                   echo '<span style="color:Navy;font-size:1.75em;">*** There was no response. ***<br></span>';
	       } else {
        //           echo '<span style="color:Navy;font-size:1.75em;">*** There was a response. ***<br></span>';
               }

             //   end     while ...        
          }

          //  echo "<br>"; 
  //        echo '<span style="color:Navy;font-size:1.75em;">Query finished.</span>';
  //        echo "<br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }




     try {

//          echo "<br><br>"; 
//          echo '<span style="color:Navy;font-size:1.75em;">Check if foreign keys are enabled  ...</span>';

          //  query the table
          $sql = "PRAGMA foreign_keys";
          $query = $db->query($sql);
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was not successful.</span>';
          } else {
     //          echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was successful.</span>';
          }

          echo "<br>"; 

    //      echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;Data returned:</span>';
    // 	  echo "<br>"; 

          while ($row = $query->fetchArray()){

	       if(empty($row)) {
                   echo '<span style="color:Navy;font-size:1.75em;">*** There was no response. ***<br></span>';
	       } else {
       //            echo '<span style="color:Navy;font-size:1.75em;">*** There was a response. ***<br></span>';
               }
                
               if($row[0] == 0) {
                    echo '<span style="color:Navy;font-size:1.75em;">
                           *** Foreign keys are not enabled. ***<br></span>';
     	       } else {
                    echo '<span style="color:Navy;font-size:1.75em;">
                            *** Foreign keys are enabled. ***<br></span>';

               }
                   
          }

          //  echo "<br>"; 
    //      echo '<span style="color:Navy;font-size:1.75em;">Query finished.</span>';
          echo "<br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }


?>



<?php
?>




<?php

    $errorCount = 0;
      
    //  function checkIfLoggedIn ($userID, $password, $errorCount)
    //       returns 0 if not log in failed
    //       returns 1 if log in was successful
    $logStatus = checkIfLoggedIn ($userID, $password, $errorCount);


    if ($logStatus) {

         //  successful login



    $entryId = 0;
          
    global $rptMethod;


    if($rptMethod == 'useCategories'){
       $rptValue = 'Categories';
    }
    else if($rptMethod == 'useCustomers'){
       $rptValue = 'Customers';
    }
    else if($rptMethod == 'useEmployees'){
       $rptValue = 'Employees';
    }
    else if($rptMethod == 'useShippers'){
       $rptValue = 'Shippers';
    }
    else if($rptMethod == 'useSuppliers'){
       $rptValue = 'Suppliers';
    }
    else if($rptMethod == 'useProducts'){
       $rptValue = 'Products';
    }
    else if($rptMethod == 'useProductsFmt'){
       $rptValue = 'Products';
    }
    else if($rptMethod == 'useOrders'){
       $rptValue = 'Orders';
    }
    else if($rptMethod == 'useOrdersFmt'){
       $rptValue = 'Orders';
    }
    else if($rptMethod == 'useOrderDetails'){
       $rptValue = 'Order Details';
    }
    else if($rptMethod == 'useOrderDetailsFmt'){
       $rptValue = 'Order Details';
    }
    else if($rptMethod == 'useSalesTax'){
       $rptValue = 'Sales Tax';
    }
    else {
       $rptValue = '*NOT DEFINED*';
    }



    echo '<br><br>'; 
    echo '<span style="color:Navy;font-size:2.75em;"><center><b><u>Northwind Traders</u></b></center>';
    echo '<br>'; 
    echo  '</span>';



    echo '<span style="color:Navy;font-size:1.75em;"><center>Report for <b><u>'. $rptValue. '</u></b></center>';
    echo  '</span>';


    if($rptMethod == 'useCategories'){
       getRecordCount('Categories');
       showAllCategories();
    }
    else if($rptMethod == 'useCustomers'){
       getRecordCount('Customers');
       showAllCustomers();
    }
    else if($rptMethod == 'useEmployees'){
       getRecordCount('Employees');
       showAllEmployees();
    }
    else if($rptMethod == 'useShippers'){
       getRecordCount('Shippers');
       showAllShippers();
    }
    else if($rptMethod == 'useSuppliers'){
       getRecordCount('Suppliers');
       showAllSuppliers();
    }
    else if($rptMethod == 'useProducts'){
       getRecordCount('Products');
       showAllProducts(0);
    }
    else if($rptMethod == 'useProductsFmt'){
       getRecordCount('Products');
       showAllProducts(1);
    }
    else if($rptMethod == 'useOrders'){
       getRecordCount('Orders');
       showAllOrders(0);
    }
    else if($rptMethod == 'useOrdersFmt'){
       getRecordCount('Orders');
       showAllOrders(1);
    }
    else if($rptMethod == 'useOrderDetails'){
       getRecordCount('OrderDetails');
       showAllOrderDetails(0);
    }
    else if($rptMethod == 'useOrderDetailsFmt'){
       getRecordCount('OrderDetails');
       showAllOrderDetails(1);
    }
    else if($rptMethod == 'useSalesTax'){
       getRecordCount('SalesTax');
       showAllSalesTax();
    }




//  end     successful login

    }
    else
    {
//         echo '<span style="color:Navy;font-size:1.75em;">';
//         echo ' <span style="color:Maroon;">*** Login failed. You need to login to use the database. ***</span><br>';
//         echo '</span>';

//         $errorCount += 1;

    }


?>




<p>
<span id="pageEnd1" style="color:Navy;font-size:3em;"><b>
End of page.
</b></span>
</p>

<br><br>

<center> 
<span id="copyRightMsg" style="color:Navy;font-size:<?php echo $copyRightMsgSize; ?>;">
	<b>&nbsp;&nbsp;&nbsp;Copyright &#169; 2025. All rights reserved.</b>
</span>
</center> 
<br><br><br>


</body>



