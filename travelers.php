<!DOCTYPE html>
<html>

   <head> 
      <meta charset="utf-8" />

      <title>ab872 - Travelers DB (SQLite)</title> 


<?php
      global $currentLong;

?>


<script>

function setLongCookie( longToSet ) {
   
         document.cookie = "Longtitude=" + longToSet;

         //  reload the page after saving the cookie
         window.location.reload();

   //  end   function setLongCookie
}

function setLongCookieNoReload( longToSet ) {
   
         document.cookie = "Longtitude=" + longToSet;

         //  reload the page after saving the cookie
         //  window.location.reload();

   //  end   function setLongCookieNoReload
}

</script>



<?php

  try {

       if (isset($_COOKIE['Longtitude'])) {

           $currentLong = $_COOKIE['Longtitude'];

        } else {
            echo ' <script> alert("An error was encountered getting the longtitude.\nReload the page manually if it does not reload automatically."); </script>';

	    $currentLong = 445;

            echo "<script> setLongCookie($currentLong); </script>";
        }

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }
?>



<?php

        //  values for the default screen width

	$exceptionOccurredMsgSize = "1.125em";

	$currentLongtitude = "&nbsp;&nbsp445.000&nbsp;&nbsp";
	$currentLattitude = "&nbsp;&nbsp900.000&nbsp;&nbsp";

//	$currentLong = 445.000;
	$currentLatt = 900.000;

	$textRestName1Size = "1.25em";
	$textRestDist1Size = "1.25em";
	$textRestLong1Size = "1.25em";
	$textRestLatt1Size = "1.25em";
	$textRestGas1Size = "1.25em";
	$textRestDiesel1Size = "1.25em";
	$textRestFood1Size = "1.25em";

	$textRestName2Size = "1.25em";
	$textRestDist2Size = "1.25em";
	$textRestLong2Size = "1.25em";
	$textRestLatt2Size = "1.25em";
	$textRestGas2Size = "1.25em";
	$textRestDiesel2Size = "1.25em";
	$textRestFood2Size = "1.25em";





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
      <br>
      <span id="pageTitle1" style="color:Navy;font-size:3em;">
         <b>
          Travelers database under SQLite.
         </b>
      </span>
    </center><br>

     <center>
        <a href="https://ab872.github.io/viewCrudP4.html" target="_blank">
	   <span id="introSQLiteURL" style="font-size:2em;">
                     <b>Click here for an introduction to SQLite</b>.
           </span>
        </a> 
     </center>


<?php
     echo "<br>"; 
     echo "<center>";
     echo '<span style="color:Navy;font-size:2em;">
              <b>Scenario</b>
              <br>
           </span>
     ';

     echo '<span style="color:Black;font-size:1.5em;"> 
You are driving through the desert on a long road trip. Gas stations are few and far between,<br> 
so it is important to know where you can get fuel so you do not run out. You also need to know<br> 
where you can find food and a refreshing beverage. Calculate the distance to these things<br> 
relative to your location.  The data is 
<span style="color:Navy;font-size:1.0em;"><b>dynamically displayed</b></span> by querying the 
database using SQL <br>
when a simulated 
<span style="color:Navy;font-size:1.0em;"><b>GPS</b></span> 
update is received by clicking the button below the table.
<br><br>
</span>
     ';

     echo '<span style="color:Black;font-size:1.5em;">
When a query occurs, the app searches the database and returns the database entries which are <br> 
within a range centered around the current location indicated in the query. SQLite allows the <br>
database to be embedded in either a Web page or a mobile device app.
<br><br>
</span>
';


     echo '<span style="color:Black;font-size:1.5em;">
The database stores the following information:<br>

<span style="color:Navy;font-size:1.125em;">&#x2022;</span>
&nbsp;
<span style="color:Navy;font-size:1.125em;"><b>Name</b></span><br>

<span style="color:Navy;font-size:1.125em;">&#x2022;</span>
&nbsp;
<span style="color:Navy;font-size:1.125em;"><b>Longtitude</b></span><br>

<span style="color:Navy;font-size:1.125em;">&#x2022;</span>
&nbsp;
<span style="color:Navy;font-size:1.125em;"><b>Lattitude</b></span><br>

<span style="color:Navy;font-size:1.125em;">&#x2022;</span>
&nbsp;
<span style="color:Navy;font-size:1.0em;"><b>GAS</b></span> or 
<span style="color:Navy;font-size:1.0em;"><b>NO GAS</b></span><br>

<span style="color:Navy;font-size:1.125em;">&#x2022;</span>
&nbsp;
<span style="color:Navy;font-size:1.0em;"><b>DIESEL</b></span> or 
<span style="color:Navy;font-size:1.0em;"><b>NO DIESEL</b></span><br>

<span style="color:Navy;font-size:1.125em;">&#x2022;</span>
&nbsp;
<span style="color:Navy;font-size:1.0em;"><b>FOOD</b></span> or 
<span style="color:Navy;font-size:1.0em;"><b>NO FOOD</b></span>
<br><br>
</span>
';

     echo "</center>";
?>



<div> 
     <center>
          <table border="5" rules="all">
                <tr>
                       <td style="background-color:azure;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.25em;">
                                 &nbsp;&nbsp;<b></b>&nbsp;&nbsp;</span>                                 
                            </center>           
                       </td>
                       <td style="background-color:azure;color:black" >                         
                            <center>
                                 <span style="color:Navy;font-size:1.25em;">
                                 &nbsp;&nbsp;<b>Current Longtitude</b>&nbsp;&nbsp;</span>                                 
                            </center>           
                       </td>
                       <td style="background-color:honeydew;color:black" >                            
                            <center>
                                 <span style="color:Navy;font-size:1.25em;">
                                 &nbsp;&nbsp;<b>Current Lattitude</b>&nbsp;&nbsp;</span>                                 
                            </center>            
                       </td>
                </tr>

                <tr>
                       <td id="carIcon" name="carIcon" 
                            title="Icon representing your vehicle" aria-label="Icon representing your vehicle" 
                            style="background-color:azure;color:black" >                      
                                   <center>
<svg xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 0 300 330" 
        width="4.6875em" height="5.15625em" 
        version="1.1">
// This SVG Copyright © 2020. All rights reserved.
<rect x="0" y="0" width="300" height="330" fill="white" opacity="0.20" stroke="blue" stroke-width="1" />  
<svg x="-10" y="-15" transform="scale (1)">
<polyline opacity="0.90" fill="none" stroke="black" stroke-width="3" points="117,123 176,123"/>
<polyline opacity="0.90" fill="none" stroke="black" stroke-width="3" points="115,185 180,185"/>
<path d="M 115 185 A 6 6 0 0 0 65 185 " fill="none" opacity="0.99" stroke="black" stroke-width="3" />
<polyline opacity="0.90" fill="none" stroke="black" stroke-width="3" points="50,185 65,185"/>
<polyline opacity="0.90" fill="none" stroke="black" stroke-width="3" points="50,185 50,147"/>
<path d="M 229 185 A 6 6 0 0 0 179 185 " fill="none" opacity="0.99" stroke="black" stroke-width="3" />
<polyline opacity="0.90" fill="none" stroke="black" stroke-width="3" points="229,185 244,185"/>
<polyline opacity="0.90" fill="none" stroke="black" stroke-width="3" points="244,185 244,145"/>
<polyline opacity="0.90" fill="none" stroke="black" stroke-width="3" points="182,145 245,145"/>
<polyline opacity="0.20" fill="none" stroke="gray" stroke-width="3" points="176,123 182,145"/>
<polyline opacity="0.20" fill="none" stroke="gray" stroke-width="3" points="176,123 179,145"/>
<polyline opacity="0.20" fill="none" stroke="gray" stroke-width="3" points="176,123 176,145"/>
<polyline opacity="0.20" fill="none" stroke="gray" stroke-width="3" points="111,147 117,123"/>
<polyline opacity="0.20" fill="none" stroke="gray" stroke-width="3" points="114,147 117,123"/>
<polyline opacity="0.20" fill="none" stroke="gray" stroke-width="3" points="117,147 117,123"/>
<polyline opacity="0.90" fill="none" stroke="black" stroke-width="3" points="50,147 111,147"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="118,126 175,126"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="2" points="120,124 120,170"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="146,124 146,170"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="2" points="173.5,124 173.5,170"/>
<rect x="118" y="150" width="56" height="33" fill="blue" opacity="0.99" stroke="blue" stroke-width="1" />  
<rect x="52" y="148" width="68" height="11" fill="blue" opacity="0.99" stroke="blue" stroke-width="1" />  
<rect x="171" y="148" width="71" height="11" fill="blue" opacity="0.99" stroke="blue" stroke-width="1" />  
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="172,147 242,147"/>
<rect x="51" y="170" width="12" height="14" fill="blue" opacity="0.99" stroke="blue" stroke-width="1" />  
<rect x="51" y="156" width="12" height="14" fill="blue" opacity="0.99" stroke="blue" stroke-width="1" />  
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="60,159 75,159"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="60,161 75,161"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="60,163 75,163"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="60,165 75,165"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="60,167 70,167"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="110,159 125,159"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="110,161 125,161"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="110,163 125,163"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="110,165 125,165"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="110,167 120,167"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="110,169 120,169"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="110,171 120,171"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="116,182 126,182"/>
<polyline opacity="0.99" fill="none" stroke="black" stroke-width="2" points="110,147 119,147"/>
<polyline opacity="0.99" fill="none" stroke="black" stroke-width="2" points="175,145 196,145"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="170,159 195,159"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="170,161 185,161"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="170,163 185,163"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="170,165 185,165"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="170,167 180,167"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="170,169 180,169"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="170,171 180,171"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="170,173 180,173"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="170,175 180,175"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="170,177 180,177"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="170,179 180,179"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="170,181 180,181"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="170,183 177,183"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="220,159 230,159"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="221,161 231,161"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="222,163 232,163"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="223,165 233,165"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="3" points="224,167 234,167"/>
<path d="M 117 181 A 27.3 27.3 0 0 0 63 181 " fill="none" opacity="0.99" stroke="blue" stroke-width="3" />
<path d="M 117 179 A 27.3 27.3 0 0 0 63 179 " fill="none" opacity="0.99" stroke="blue" stroke-width="3" />
<path d="M 117 177 A 27.3 27.3 0 0 0 63 177 " fill="none" opacity="0.99" stroke="blue" stroke-width="3" />
<path d="M 231 183 A 27.1 27.1 0 0 0 177 183 " fill="none" opacity="0.99" stroke="blue" stroke-width="3" />
<path d="M 231 181 A 27.1 27.1 0 0 0 177 183 " fill="none" opacity="0.99" stroke="blue" stroke-width="3" />
<path d="M 231 179 A 27.1 27.1 0 0 0 177 183 " fill="none" opacity="0.99" stroke="blue" stroke-width="3" />
<rect x="230" y="168" width="12" height="16" fill="blue" opacity="0.99" stroke="blue" stroke-width="1" />  
<rect x="230" y="152" width="12" height="16" fill="blue" opacity="0.99" stroke="blue" stroke-width="1" />  
<path d="M 245 152 A 6 6 0 0 0 245 167 " fill="none" opacity="0.99" stroke="black" stroke-width="3" />
<path d="M 245 154 A 6 6 0 0 0 245 165 " fill="none" opacity="0.99" stroke="yellow" stroke-width="3" />
<polyline opacity="0.99" fill="none" stroke="yellow" stroke-width="2" points="246,154 246,165"/>
<path d="M 50 172 A 6 6 0 0 0 50 157 " fill="none" opacity="0.99" stroke="red" stroke-width="3" />
<path d="M 50 170 A 6 6 0 0 0 50 159 " fill="none" opacity="0.99" stroke="red" stroke-width="3" />
<path d="M 50 174 A 6 6 0 0 0 50 155 " fill="none" opacity="0.99" stroke="black" stroke-width="3" />
<polyline opacity="0.99" fill="none" stroke="red" stroke-width="3" points="50,159 50,170"/>
<rect x="120" y="128" width="24" height="22" fill="gray" opacity="0.20" stroke="black" stroke-width="1" />  
<rect x="120" y="128" width="24" height="22" fill="none" opacity="0.99" stroke="black" stroke-width="1" />  
<rect x="148" y="128" width="24" height="22" fill="gray" opacity="0.20" stroke="black" stroke-width="1" />  
<rect x="148" y="128" width="24" height="22" fill="none" opacity="0.99" stroke="black" stroke-width="1" />  
<svg  x="62" y="155">
<circle id="led1" cx="28" cy="28" r="20" stroke="black" fill="black" /> 
<circle id="led1" cx="28" cy="28" r="10" stroke="black" fill="silver" /> 
</svg>
<svg  x="176" y="155">
<circle id="led1" cx="28" cy="28" r="20" stroke="black" fill="black" /> 
<circle id="led1" cx="28" cy="28" r="10" stroke="black" fill="silver" /> 
</svg>
</svg>
</svg> 
                                   </center>
                       </td>
                       <td id="CurrentLong" name="CurrentLong" 
                            title="your current longtitude" aria-label="your current longtitude" 
                            style="background-color:azure;color:black" >                      
                                   <center>
                                        <span style="color:Navy;font-size:1.25em;">
					<?php echo $currentLong; ?>
                                        </span>                                 
                                   </center>
                       </td>
                       <td id="CurrentLatt" name="CurrentLatt" 
                            title="your current lattitude" aria-label="your current lattitude" 
                            style="background-color:honeydew;color:black" > 
                                   <center>
                                        <span style="color:Navy;font-size:1.25em;">
					<?php echo $currentLatt; ?>
                                        </span>                                                                 
                                   </center>       
                       </td>
                </tr>
          </table>
     </center>
</div> 
<br>



<div> 
     <center>
          <table border="5" rules="all">
                <tr>
                       <td style="background-color:oldlace;color:black" >                       
                            <center>
                                 <span style="color:Navy;font-size:1.25em;">
                                 <br><br><br>&nbsp;&nbsp;<b>NAME</b>&nbsp;&nbsp;</span>                                 
                            </center>           
                       </td>
                       <td style="background-color:azure;color:black" >
                            <center>
                                 <span style="color:Navy;font-size:1.25em;">
                                 <br><br><br>&nbsp;&nbsp;<b>DISTANCE</b>&nbsp;&nbsp;</span>                                 
                            </center>            
                       </td>
                       <td style="background-color:honeydew;color:black" >
                            <center> 
<br>
<svg xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 0 300 330" 
        width="2.49375em" height="2.743125em" 
        version="1.1" transform="scale (3.7)">
// This SVG Copyright © 2020. 
//  All rights reserved.
//  <svg  x="-10" y="-15 transform="scale (1)">
//  <svg  x="99" y="75" transform="scale (1)">
//
<rect x="0" y="0" width="300" height="330" fill="white" opacity="0.0" stroke="blue" stroke-width="1" />  
<path d="M 70 30 A 90 90 0 0 0 20 30 " fill="none" opacity="0.99" stroke="black" stroke-width="3" />
<polyline opacity="0.99" fill="none" stroke="black" stroke-width="3" points="20,130 20,30"/>
<polyline opacity="0.99" fill="none" stroke="black" stroke-width="3" points="70,130 70,30"/>
<polyline opacity="0.99" fill="none" stroke="black" stroke-width="3" points="20,130 70,130"/>
<path d="M 67 32 A 90 90 0 0 0 22 32 " fill="palegreen" opacity="0.99" stroke="palegreen" stroke-width="2" />
<rect x="22" y="32" width="45" height="96" fill="palegreen" opacity="0.99" stroke="palegreen" stroke-width="1" />  
<polyline opacity="0.99" fill="none" stroke="darkgreen" stroke-width="6" points="91,10 83,30"/>
<polyline opacity="0.99" fill="none" stroke="darkgreen" stroke-width="11" points="83,29 83,59"/>
<polyline opacity="0.99" fill="none" stroke="darkgreen" stroke-width="5" points="95,31 95,46"/>
<polyline opacity="0.99" fill="none" stroke="darkgreen" stroke-width="5" points="95,44 86,52"/>
<polyline opacity="0.99" fill="none" stroke="darkgreen" stroke-width="5" points="94,32 83,26"/>
<path d="M 84 57 A 50 50 0 0 0 84 77 " fill="none" opacity="0.99" stroke="darkgreen" stroke-width="4" />
<path d="M 85 97 A 50 50 0 0 0 84 77 " fill="none" opacity="0.99" stroke="darkgreen" stroke-width="4" />
<path d="M 70 111 A 18 18 0 0 0 85 95 " fill="none" opacity="0.99" stroke="darkgreen" stroke-width="4" />
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="20" points="25,45 65,45"/>
<g font-size="12" text-anchor="middle"> 
<text x="45" y="49" fill="none" opacity="0.99" stroke="yellow" stroke-width="1">0.000</text> 
</g> 
<g font-size="20" text-anchor="middle"> 
<text x="45" y="89" fill="darkgreen" opacity="0.99" stroke="black" stroke-width="0.2">GAS</text> 
</g> 
//  </svg>
//  </svg>
</svg> 
<br>

                                 </center> 
                                 <center>
                                      <span style="color:Navy;font-size:1.25em;">
                                      &nbsp;&nbsp;<b>GAS</b>&nbsp;&nbsp;</span>                                 
                                 </center>            
                       </td>     
                       <td style="background-color:lightyellow;color:black" >
                            <center>
<br>
<svg xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 0 300 330"
        width="2.49375em" height="2.743125em" 
        version="1.1" transform="scale (3.7)">
// This SVG Copyright © 2020. 
//  All rights reserved.
<rect x="0" y="0" width="300" height="330" fill="white" opacity="0.0" stroke="blue" stroke-width="1" />  
//  <svg  x="-10" y="-15 transform="scale (1)">
//  <svg  x="99" y="75" transform="scale (1)">
//
<path d="M 70 30 A 90 90 0 0 0 20 30 " fill="orange" opacity="0.99" stroke="black" stroke-width="3" />
<polyline opacity="0.99" fill="none" stroke="black" stroke-width="3" points="20,130 20,30"/>
<polyline opacity="0.99" fill="none" stroke="black" stroke-width="3" points="70,130 70,30"/>
<polyline opacity="0.99" fill="none" stroke="black" stroke-width="3" points="20,130 70,130"/>
<path d="M 67 32 A 90 90 0 0 0 22 32 " fill="khaki" opacity="0.99" stroke="khaki" stroke-width="2" />
<rect x="22" y="32" width="45" height="96" fill="khaki" opacity="0.99" stroke="khaki" stroke-width="1" />  
<polyline opacity="0.99" fill="none" stroke="red" stroke-width="6" points="91,10 83,30"/>
<polyline opacity="0.99" fill="none" stroke="red" stroke-width="11" points="83,29 83,59"/>
<polyline opacity="0.99" fill="none" stroke="red" stroke-width="5" points="95,31 95,46"/>
<polyline opacity="0.99" fill="none" stroke="red" stroke-width="5" points="95,44 86,52"/>
<polyline opacity="0.99" fill="none" stroke="red" stroke-width="5" points="94,32 83,26"/>
<path d="M 84 57 A 50 50 0 0 0 84 77 " fill="none" opacity="0.99" stroke="red" stroke-width="4" />
<path d="M 85 97 A 50 50 0 0 0 84 77 " fill="none" opacity="0.99" stroke="red" stroke-width="4" />
<path d="M 70 111 A 18 18 0 0 0 85 95 " fill="none" opacity="0.99" stroke="red" stroke-width="4" />
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="20" points="25,45 65,45"/>
<g font-size="12" text-anchor="middle"> 
<text x="45" y="49" fill="none" opacity="0.99" stroke="yellow" stroke-width="1">0.000</text> 
</g> 
<g font-size="12" text-anchor="middle"> 
<text x="45" y="89" fill="red" opacity="0.99" stroke="black" stroke-width="0.2">DIESEL</text> 
</g> 
//  </svg>
//  </svg>
</svg> 
<br>
                            <center>
                                 <span style="color:Navy;font-size:1.25em;">
                                 &nbsp;&nbsp;<b>DIESEL</b>&nbsp;&nbsp;</span>                                 
                            </center>                 
                        </td>           
                        <td style="background-color:azure;color:black" >
                             <center>
<br>
<svg xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 0 300 330" 
        width="2.49375em" height="2.743125em" 
        version="1.1" transform="scale (3.7)">
// This SVG Copyright © 2020. 
//  All rights reserved.
<rect x="0" y="0" width="300" height="330" fill="white" opacity="0.0" stroke="blue" stroke-width="1" />  
//  <svg x="10" y="10" transform:scale(1)>
//  <svg x="-10" y="15"transform="scale (1)">
//  <svg  x="119" y="75" transform="scale (1)">
<polyline opacity="0.99" fill="none" stroke="darkgreen" stroke-width="6" points="58,10 50,30"/>
<path d="M 70 30 A 90 90 0 0 0 20 30 " fill="none" opacity="0.99" stroke="black" stroke-width="3" />
<path d="M 70 32 A 90 90 0 0 0 20 32 " fill="none" opacity="0.99" stroke="bisque" stroke-width="2" />
<path d="M 25 90 A 50 50 0 0 0 65 90 " fill="none" opacity="0.99" stroke="black" stroke-width="3" />
<path d="M 25 88 A 50 50 0 0 0 65 88 " fill="none" opacity="0.99" stroke="bisque" stroke-width="2" />
<polyline opacity="0.99" fill="none" stroke="black" stroke-width="3" points="25,90 20,30"/>
<polyline opacity="0.99" fill="none" stroke="antiquewhite" stroke-width="4" points="29,90 24,30"/>
<polyline opacity="0.99" fill="none" stroke="bisque" stroke-width="4" points="31,90 28,30"/>
<polyline opacity="0.99" fill="none" stroke="black" stroke-width="3" points="65,90 70,30"/>
<polyline opacity="0.99" fill="none" stroke="antiquewhite" stroke-width="5" points="61,90 66,30"/>
<polyline opacity="0.99" fill="none" stroke="bisque" stroke-width="8" points="57,90 57,30"/>
<polyline opacity="0.99" fill="none" stroke="bisque" stroke-width="7" points="47,90 47,30"/>
<polyline opacity="0.99" fill="none" stroke="bisque" stroke-width="7" points="37,90 37,30"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="6" points="31,90 31,30"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="6" points="41,90 41,30"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="6" points="51,90 51,30"/>
<polyline opacity="0.99" fill="none" stroke="blue" stroke-width="5" points="59,90 62,30"/>
</svg>
<svg  x="51" y="95" transform="scale (1)">
<path d="M 115 42 A 50 50 0 0 0 35 42 " fill="peru" opacity="0.99" stroke="peru" stroke-width="3" />
<polyline opacity="0.99" fill="none" stroke="peru" stroke-width="3" points="115,42 35,42"/>
<polyline opacity="0.99" fill="none" stroke="tomato" stroke-width="3" points="111,45 40,45"/>
<polyline opacity="0.99" fill="none" stroke="tomato" stroke-width="3" points="111,55 40,55"/>
<path d="M 111 55 A 6 6 0 0 0 111 45 " fill="tomato" opacity="0.99" stroke="tomato" stroke-width="3" />
<path d="M 40 45 A 6 6 0 0 0 40 55 " fill="tomato" opacity="0.99" stroke="tomato" stroke-width="3" />
<rect x="40" y="48" width="71" height="6" fill="tomato" opacity="0.99" stroke="tomato" stroke-width="1" />  
<polyline opacity="0.99" fill="none" stroke="lightsalmon" stroke-width="1" points="40,47 110,47"/>
<polyline opacity="0.99" fill="none" stroke="sienna" stroke-width="3" points="109,58 42,58"/>
<polyline opacity="0.99" fill="none" stroke="sienna" stroke-width="3" points="109,68 42,68"/>
<path d="M 109 68 A 6 6 0 0 0 109 58 " fill="sienna" opacity="0.99" stroke="sienna" stroke-width="3" />
<path d="M 42 58 A 6 6 0 0 0 42 68 " fill="sienna" opacity="0.99" stroke="sienna" stroke-width="3" />
<rect x="42" y="59" width="69" height="7" fill="sienna" opacity="0.99" stroke="sienna" stroke-width="1" />  
<polyline opacity="0.99" fill="none" stroke="peru" stroke-width="3" points="109,71 43,71"/>
<polyline opacity="0.99" fill="none" stroke="peru" stroke-width="3" points="109,84 43,84"/>
<path d="M 109 84 A 6 6 0 0 0 109 71 " fill="peru" opacity="0.99" stroke="peru" stroke-width="3" />
<path d="M 43 71 A 6 6 0 0 0 43 84 " fill="peru" opacity="0.99" stroke="peru" stroke-width="3" />
<rect x="43" y="74" width="71" height="8" fill="peru" opacity="0.99" stroke="peru" stroke-width="1" />  
<polyline opacity="0.99" fill="none" stroke="burlywood" stroke-width="1" points="43,73 111,73"/>
</svg>
//  </svg>
</svg> 
<br>
                            <center>
                                 <span style="color:Navy;font-size:1.25em;">
                                 &nbsp;&nbsp;<b>FOOD</b>&nbsp;&nbsp;</span>                                 
                            </center>                            
                        </td>
                </tr>

                <tr>
                       <td id="Rest1name" name="Rest1name" 
                            title="the NAME of rest stop 1" aria-label="the NAME of rest stop 1" 
                            style="background-color:oldlace;color:black" >  
				<span style="color:Navy;font-size:<?php echo $textRestName1Size; ?>;">
				&nbsp;&nbsp;*****&nbsp;&nbsp;
				</span>
                       </td>
                       <td id="Rest1distance" name="Rest1distance" 
                            title="distance to this rest stop" aria-label="distance to this rest stop" 
                            style="background-color:azure;color:black" >     
                                  <span style="color:Navy;font-size:1.25em;">
                                    <center>
                                    &nbsp;&nbsp;*****&nbsp;&nbsp;
                                    </center>
                                  </span>                                                                                                             
                       </td>
                       <td id="Rest1gas" name="Rest1gas" 
                            title="does the rest stop have gas" aria-label="does the rest stop have gas" 
                            style="background-color:honeydew;color:black" >
				<span style="color:Navy;font-size:<?php echo $textRestGas1Size; ?>;">
				&nbsp;&nbsp;******&nbsp;&nbsp;
                                </span>
                       </td>
                       <td id="Rest1diesel" name="Rest1diesel" 
                            title="does the rest stop have diesel" aria-label="does the rest stop have diesel" 
                            style="background-color:lightyellow;color:black" >
				<span style="color:Navy;font-size:<?php echo $textRestDiesel1Size; ?>;">
				&nbsp;&nbsp;******&nbsp;&nbsp;
                                </span>
                       </td>
                       <td id="Rest1food" name="Rest1food" 
                            title="does the rest stop have food" aria-label="does the rest stop have food" 
                            style="background-color:azure;color:black" >
				<span style="color:Navy;font-size:<?php echo $textRestFood1Size; ?>;">
                                &nbsp;&nbsp;******&nbsp;&nbsp;
                                </span>
                       </td>
                </tr>

                <tr>
                       <td id="Rest2name" name="Rest2name" 
                            title="the NAME of rest stop 2" aria-label="the NAME of rest stop 2" 
                            style="background-color:oldlace;color:black" > 
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;*****&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest2distance" name="Rest2distance" 
                            title="distance to this rest stop" aria-label="distance to this rest stop" 
                            style="background-color:azure;color:black" >   
                                  <span style="color:Navy;font-size:1.25em;">
                                    <center>
                                    &nbsp;&nbsp;*****&nbsp;&nbsp;
                                    </center>
                                  </span>                                                                                                          
                       </td>
                       <td id="Rest2gas" name="Rest2gas" 
                            title="does the rest stop have gas" aria-label="does the rest stop have gas" 
                            style="background-color:honeydew;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest2diesel" name="Rest2diesel" 
                            title="does the rest stop have diesel" aria-label="does the rest stop have diesel" 
                            style="background-color:lightyellow;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest2food" name="Rest2food" 
                            title="does the rest stop have food" aria-label="does the rest stop have food" 
                            style="background-color:azure;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                </tr>

                <tr>
                       <td id="Rest3name" name="Rest3name" 
                            title="the NAME of rest stop 3" aria-label="the NAME of rest stop 3" 
                            style="background-color:oldlace;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;*****&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest3distance" name="Rest3distance" 
                            title="distance to this rest stop" aria-label="distance to this rest stop" 
                            style="background-color:azure;color:black" > 
                                  <span style="color:Navy;font-size:1.25em;">
                                    <center>
                                    &nbsp;&nbsp;*****&nbsp;&nbsp;
                                    </center>
                                  </span>                                                                                                                                    
                       </td>
                       <td id="Rest3gas" name="Rest3gas" 
                            title="does the rest stop have gas" aria-label="does the rest stop have gas" 
                            style="background-color:honeydew;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest3diesel" name="Rest3diesel" 
                            title="does the rest stop have diesel" aria-label="does the rest stop have diesel" 
                            style="background-color:lightyellow;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest3food" name="Rest3food" 
                            title="does the rest stop have food" aria-label="does the rest stop have food" 
                            style="background-color:azure;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                </tr>

                <tr>
                       <td id="Rest4name" name="Rest4name" 
                            title="the NAME of rest stop 4" aria-label="the NAME of rest stop 4" 
                            style="background-color:oldlace;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;*****&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest4distance" name="Rest4distance" 
                            title="distance to this rest stop" aria-label="distance to this rest stop" 
                            style="background-color:azure;color:black" >   
                                  <span style="color:Navy;font-size:1.25em;">
                                    <center>
                                    &nbsp;&nbsp;*****&nbsp;&nbsp;
                                    </center>
                                  </span>                                                                                                                                                                
                       </td>
                       <td id="Rest4gas" name="Rest4gas" 
                            title="does the rest stop have gas" aria-label="does the rest stop have gas" 
                            style="background-color:honeydew;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest4diesel" name="Rest4diesel" 
                            title="does the rest stop have diesel" aria-label="does the rest stop have diesel" 
                            style="background-color:lightyellow;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest4food" name="Rest4food" 
                            title="does the rest stop have food" aria-label="does the rest stop have food" 
                            style="background-color:azure;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                </tr>

                <tr>
                       <td id="Rest5name" name="Rest5name" 
                            title="the NAME of rest stop 5" aria-label="the NAME of rest stop 5" 
                            style="background-color:oldlace;color:black" > 
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;*****&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest5distance" name="Rest5distance" 
                            title="distance to this rest stop" aria-label="distance to this rest stop" 
                            style="background-color:azure;color:black" >      
                                  <span style="color:Navy;font-size:1.25em;">
                                    <center>
                                    &nbsp;&nbsp;*****&nbsp;&nbsp;
                                    </center>
                                  </span>                                                                                                        
                       </td>
                       <td id="Rest5gas" name="Rest5gas" 
                            title="does the rest stop have gas" aria-label="does the rest stop have gas" 
                            style="background-color:honeydew;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest5diesel" name="Rest5diesel" 
                            title="does the rest stop have diesel" aria-label="does the rest stop have diesel" 
                            style="background-color:lightyellow;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest5food" name="Rest5food" 
                            title="does the rest stop have food" aria-label="does the rest stop have food" 
                            style="background-color:azure;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                </tr>


                <tr>
                       <td id="Rest6name" name="Rest6name" 
                            title="the NAME of rest stop 5" aria-label="the NAME of rest stop 5" 
                            style="background-color:oldlace;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;*****&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest6distance" name="Rest6distance" 
                            title="distance to this rest stop" aria-label="distance to this rest stop" 
                            style="background-color:azure;color:black" >   
                                  <span style="color:Navy;font-size:1.25em;">
                                    <center>
                                    &nbsp;&nbsp;*****&nbsp;&nbsp;
                                    </center>
                                  </span>                                                                                                                                  
                       </td>
                       <td id="Rest6gas" name="Rest6gas" 
                            title="does the rest stop have gas" aria-label="does the rest stop have gas" 
                            style="background-color:honeydew;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest6diesel" name="Rest6diesel" 
                            title="does the rest stop have diesel" aria-label="does the rest stop have diesel" 
                            style="background-color:lightyellow;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest6food" name="Rest6food" 
                            title="does the rest stop have food" aria-label="does the rest stop have food" 
                            style="background-color:azure;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                </tr>

                <tr>
                       <td id="Rest7name" name="Rest7name" 
                            title="the NAME of rest stop 5" aria-label="the NAME of rest stop 5" 
                            style="background-color:oldlace;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;*****&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest7distance" name="Rest7distance" 
                            title="distance to this rest stop" aria-label="distance to this rest stop" 
                            style="background-color:azure;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                    <center>
                                    &nbsp;&nbsp;*****&nbsp;&nbsp;
                                    </center>
                                  </span>                                                                                                                                                          
                       </td>
                       <td id="Rest7gas" name="Rest7gas" 
                            title="does the rest stop have gas" aria-label="does the rest stop have gas" 
                            style="background-color:honeydew;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest7diesel" name="Rest7diesel" 
                            title="does the rest stop have diesel" aria-label="does the rest stop have diesel" 
                            style="background-color:lightyellow;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest7food" name="Rest7food" 
                            title="does the rest stop have food" aria-label="does the rest stop have food" 
                            style="background-color:azure;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                </tr>

                <tr>
                       <td id="Rest8name" name="Rest8name" 
                            title="the NAME of rest stop 8" aria-label="the NAME of rest stop 8" 
                            style="background-color:oldlace;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;*****&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest8distance" name="Rest8distance" 
                            title="distance to this rest stop" aria-label="distance to this rest stop" 
                            style="background-color:azure;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                    <center>
                                    &nbsp;&nbsp;*****&nbsp;&nbsp;
                                    </center>
                                  </span>                                                                                                                                                          
                       </td>
                       <td id="Rest8gas" name="Rest8gas" 
                            title="does the rest stop have gas" aria-label="does the rest stop have gas" 
                            style="background-color:honeydew;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest8diesel" name="Rest8diesel" 
                            title="does the rest stop have diesel" aria-label="does the rest stop have diesel" 
                            style="background-color:lightyellow;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest8food" name="Rest8food" 
                            title="does the rest stop have food" aria-label="does the rest stop have food" 
                            style="background-color:azure;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                </tr>

                <tr>
                       <td id="Rest9name" name="Rest9name" 
                            title="the NAME of rest stop 9" aria-label="the NAME of rest stop 9" 
                            style="background-color:oldlace;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;*****&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest9distance" name="Rest9distance" 
                            title="distance to this rest stop" aria-label="distance to this rest stop" 
                            style="background-color:azure;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                    <center>
                                    &nbsp;&nbsp;*****&nbsp;&nbsp;
                                    </center>
                                  </span>                                                                                                                                                     
                       </td>
                       <td id="Rest9gas" name="Rest9gas" 
                            title="does the rest stop have gas" aria-label="does the rest stop have gas" 
                            style="background-color:honeydew;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest9diesel" name="Rest9diesel" 
                            title="does the rest stop have diesel" aria-label="does the rest stop have diesel" 
                            style="background-color:lightyellow;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest9food" name="Rest9food" 
                            title="does the rest stop have food" aria-label="does the rest stop have food" 
                            style="background-color:azure;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                </tr>

                <tr>
                       <td id="Rest10name" name="Rest10name" 
                            title="the NAME of rest stop 10" aria-label="the NAME of rest stop 10" 
                            style="background-color:oldlace;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;*****&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest10distance" name="Rest10distance" 
                            title="distance to this rest stop" aria-label="distance to this rest stop" 
                            style="background-color:azure;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                    <center>
                                    &nbsp;&nbsp;*****&nbsp;&nbsp;
                                    </center>
                                  </span>                                                                              
                       </td>
                       <td id="Rest10gas" name="Rest10gas" 
                            title="does the rest stop have gas" aria-label="does the rest stop have gas" 
                            style="background-color:honeydew;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest10diesel" name="Rest10diesel" 
                            title="does the rest stop have diesel" aria-label="does the rest stop have diesel" 
                            style="background-color:lightyellow;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                       <td id="Rest10food" name="Rest10food" 
                            title="does the rest stop have food" aria-label="does the rest stop have food" 
                            style="background-color:azure;color:black" >
                                  <span style="color:Navy;font-size:1.25em;">
                                  &nbsp;&nbsp;******&nbsp;&nbsp;</span>
                       </td>
                </tr>




          </table>
<br><br>
<?php
  if(isset($_POST['updateGpsButton'])){

      global $currentLong;

       if (isset($_COOKIE['Longtitude'])) {

           $currentLong = $_COOKIE['Longtitude'];

        } else {
            echo ' <script> alert("pressed update GPS button - An error was encountered getting the longtitude cookie.\nReload the page manually if it does not reload automatically."); </script>';
        }


        $currentLong = $currentLong + 5;


        if( $currentLong > 500 ) { 
            $currentLong = 445; 
        } 

        setcookie("Longtitude", $currentLong);

        // everything is working on the local machine.
        // but when its uploaded to the website, the 
        // button only works the first time you click it.
        // this was previously corrected on the local machine 
        // by calling the PHP setcookie function instead of the
        // JavaScript setLongCookie function
 
        echo "<script> setLongCookieNoReload($currentLong); </script>";
 // setLongCookie makes the browser keep reloading the page


//       if (isset($_COOKIE['Longtitude'])) {
//  //             echo "check if cookie changed - cookie exists - try to get the longtitude cookie<br>";
//
//           $currentTmpLong = $_COOKIE['Longtitude'];
//
//  //           echo "check if cookie changed - get the tmp longtitude cookie was successful<br>";
//  //           echo "check if cookie changed - got tmp longtitude cookie - current longtitude = $currentTmpLong<br>";
//  //           echo "check if cookie changed - current longtitude value = $currentLong<br>";
//
//
//        } else {
//            echo ' <script> alert("check if cookie changed - An error was encountered getting the longtitude cookie.\nReload the page manually if it does not reload automatically."); </script>';
//  //            echo "<script> setLongCookie($currentLong); </script>";
//        }


  }
?>
<form action="" method="post">
<BUTTON 
style="background-color:azure;color:white;
margin-left:1px;margin-right:2px;margin-top:1px;
margin-bottom:1px;border:2px solid silver;
border-radius:8px;
width=10.5em;height:7.5em;-webkit-appearance:none" 
TYPE="submit" id="updateGpsButton" name="updateGpsButton" 
title="GPS update button" aria-label="GPS update button" 
ACCESSKEY=G>
<span style="color:Navy;font-size:1.5em;">     
Update GPS 
<svg transform="translate(0,4)" xmlns="http://www.w3.org/2000/svg" width="2.1em" height="2.1em" fill="Navy" class="bi bi-keyboard-fill" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc">
    <title> id="iconTitle">access key S</title>
    <desc  id="iconDesc">this icon indicates keyboard navigation using the S access key</desc> <path d="M0 6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6zm13 .25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5a.25.25 0 0 0-.25.25zM2.25 8a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 8.75v-.5A.25.25 0 0 0 2.75 8h-.5zM4 8.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 5 8.75v-.5A.25.25 0 0 0 4.75 8h-.5a.25.25 0 0 0-.25.25zM6.25 8a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 7 8.75v-.5A.25.25 0 0 0 6.75 8h-.5zM8 8.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 9 8.75v-.5A.25.25 0 0 0 8.75 8h-.5a.25.25 0 0 0-.25.25zM13.25 8a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5zm-3-2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h1.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-1.5zm.75 2.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5a.25.25 0 0 0-.25.25zM11.25 6a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5zM9 6.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5A.25.25 0 0 0 9.75 6h-.5a.25.25 0 0 0-.25.25zM7.25 6a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 8 6.75v-.5A.25.25 0 0 0 7.75 6h-.5zM5 6.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 6 6.75v-.5A.25.25 0 0 0 5.75 6h-.5a.25.25 0 0 0-.25.25zM2.25 6a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h1.5A.25.25 0 0 0 4 6.75v-.5A.25.25 0 0 0 3.75 6h-1.5zM2 10.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5a.25.25 0 0 0-.25.25zM4.25 10a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h5.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-5.5z"/> <g font-size="10" text-anchor="middle"> 
<text x="8.0" y="12.1" opacity="1.0" fill="orange" stroke="red" stroke-width="0.1">G</text> </g> 
</svg>    
</span>
</button>
</form>
<br><br>




<center> 
<span id="copyRightMsg" style="color:Navy;font-size:1.7em;">
<b>&nbsp;&nbsp;&nbsp;Copyright &#169; 2024. All rights reserved.</b></span>
</center> 
<br>

<center> 
<span id="chromeBestMsg" style="color:Navy;font-size:1.7em;">
<b>&nbsp;&nbsp;&nbsp;Best results when using the Chrome browser.</b></span><br><br>

<svg id="BootstrapIcon" 
xmlns="http://www.w3.org/2000/svg" width="5.25em" height="5.25em" fill="Navy" class="bi bi-bootstrap" viewBox="0 0 16 16" 
role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc">
    <title> id="iconTitle">Bootstrap icon</title>
    <desc  id="iconDesc">this icon represents Bootstrap</desc> 
    <path d="M5.062 12h3.475c1.804 0 2.888-.908 2.888-2.396 0-1.102-.761-1.916-1.904-2.034v-.1c.832-.14 1.482-.93 1.482-1.816 0-1.3-.955-2.11-2.542-2.11H5.062V12zm1.313-4.875V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762V8.162h1.822c1.236 0 1.887.463 1.887 1.348 0 .896-.627 1.377-1.811 1.377H6.375z"/> 
    <path d="M0 4a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v8a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4zm4-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3H4z"/> 
</svg><br>


<span id="iconsProvidedMsg" style="color:Navy;font-size:1.7em;">
<b>&nbsp;&nbsp;&nbsp; Some icons provided via the 
<a href="https://icons.getbootstrap.com/" target="_blank">Bootstrap Icons</a> collection.</b></span><br>


<span id="mitLicenseMsg" style="color:Navy;font-size:1.7em;">
<b>&nbsp;&nbsp;&nbsp; Bootstrap Icons are under the <a href="https://github.com/twbs/icons/blob/main/LICENSE.md" target="_blank">MIT</a> license.</b></span><br>

<span id="iconsModifiedMsg" style="color:Navy;font-size:1.7em;">
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



<script>

</script>



<script>

</script>

<NOSCRIPT><span style="color:Navy;font-size:16px;"><b>JavaScript is not available. JavaScript is required in order to provide the full functionality of this page.</b></span></NOSCRIPT><br><br>



     </center>
</div>
<br><br>




<?php
     try {

          echo "<br>"; 
          echo '<span style="color:Navy;font-size:1.75em;">Check if SQLite is available ...</span>';

          if(class_exists('SQLite3')) {
      //         echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SQLite 3 is available.</span>';
          } else {
               die('<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SQLite 3 is not available.<br>Please check the configuration settings.</span>');
          }

          //  echo "<br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }
?>






<?php
     try {

          //  create database
          $db = new SQLite3('travelers.db');
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Database open or creation was not successful.\n</span>';
          } else {
      //         echo '<span style="color:Navy;font-size:1.75em;">
      //               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Database was successfully opened.</span>';
          }

          //  echo "<br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }
?>





<?php
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
?>







<?php
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
?>





<?php
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
?>







<?php
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
   function clearTheDisplay() {

   	        echo
  	        '<script> 
  	        document.getElementById("Rest1name").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '*****';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest1distance").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
    	        echo '*****';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest1gas").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '******';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest1diesel").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '******';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	         document.getElementById("Rest1food").innerHTML = "<center>&nbsp;&nbsp;" ';
  	         echo '+ ';
  	         echo '"';
                 echo '******';
  	         echo '"';
  	         echo ' + "&nbsp;&nbsp;</center>"; 
  	         </script>';




   	        echo
  	        '<script> 
  	        document.getElementById("Rest2name").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '*****';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest12distance").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
    	        echo '*****';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest2gas").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '******';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest2diesel").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '******';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	         document.getElementById("Rest2food").innerHTML = "<center>&nbsp;&nbsp;" ';
  	         echo '+ ';
  	         echo '"';
                 echo '******';
  	         echo '"';
  	         echo ' + "&nbsp;&nbsp;</center>"; 
  	         </script>';






   	        echo
  	        '<script> 
  	        document.getElementById("Rest3name").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '*****';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest3distance").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
    	        echo '*****';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest3gas").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '******';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest3diesel").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '******';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	         document.getElementById("Rest3food").innerHTML = "<center>&nbsp;&nbsp;" ';
  	         echo '+ ';
  	         echo '"';
                 echo '******';
  	         echo '"';
  	         echo ' + "&nbsp;&nbsp;</center>"; 
  	         </script>';






   	        echo
  	        '<script> 
  	        document.getElementById("Rest4name").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '*****';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest4distance").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
    	        echo '*****';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest4gas").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '******';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest4diesel").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '******';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	         document.getElementById("Rest4food").innerHTML = "<center>&nbsp;&nbsp;" ';
  	         echo '+ ';
  	         echo '"';
                 echo '******';
  	         echo '"';
  	         echo ' + "&nbsp;&nbsp;</center>"; 
  	         </script>';





   	        echo
  	        '<script> 
  	        document.getElementById("Rest5name").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '*****';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest5distance").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
    	        echo '*****';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest5gas").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '******';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest5diesel").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '******';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	         document.getElementById("Rest5food").innerHTML = "<center>&nbsp;&nbsp;" ';
  	         echo '+ ';
  	         echo '"';
                 echo '******';
  	         echo '"';
  	         echo ' + "&nbsp;&nbsp;</center>"; 
  	         </script>';





   	        echo
  	        '<script> 
  	        document.getElementById("Rest6name").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '*****';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest6distance").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
    	        echo '*****';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest6gas").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '******';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest6diesel").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '******';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	         document.getElementById("Rest6food").innerHTML = "<center>&nbsp;&nbsp;" ';
  	         echo '+ ';
  	         echo '"';
                 echo '******';
  	         echo '"';
  	         echo ' + "&nbsp;&nbsp;</center>"; 
  	         </script>';






   	        echo
  	        '<script> 
  	        document.getElementById("Rest7name").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '*****';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest7distance").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
    	        echo '*****';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest7gas").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '******';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest7diesel").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '******';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	         document.getElementById("Rest7food").innerHTML = "<center>&nbsp;&nbsp;" ';
  	         echo '+ ';
  	         echo '"';
                 echo '******';
  	         echo '"';
  	         echo ' + "&nbsp;&nbsp;</center>"; 
  	         </script>';






   	        echo
  	        '<script> 
  	        document.getElementById("Rest8name").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '*****';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest8distance").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
    	        echo '*****';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest8gas").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '******';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest8diesel").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '******';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	         document.getElementById("Rest8food").innerHTML = "<center>&nbsp;&nbsp;" ';
  	         echo '+ ';
  	         echo '"';
                 echo '******';
  	         echo '"';
  	         echo ' + "&nbsp;&nbsp;</center>"; 
  	         </script>';






   	        echo
  	        '<script> 
  	        document.getElementById("Rest9name").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '*****';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest9distance").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
    	        echo '*****';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest9gas").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '******';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest9diesel").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '******';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	         document.getElementById("Rest9food").innerHTML = "<center>&nbsp;&nbsp;" ';
  	         echo '+ ';
  	         echo '"';
                 echo '******';
  	         echo '"';
  	         echo ' + "&nbsp;&nbsp;</center>"; 
  	         </script>';






   	        echo
  	        '<script> 
  	        document.getElementById("Rest10name").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '*****';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest10distance").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
    	        echo '*****';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest10gas").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '******';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest10diesel").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo '******';
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	         document.getElementById("Rest10food").innerHTML = "<center>&nbsp;&nbsp;" ';
  	         echo '+ ';
  	         echo '"';
                 echo '******';
  	         echo '"';
  	         echo ' + "&nbsp;&nbsp;</center>"; 
  	         </script>';


      //  end    function clearTheDisplay
   }

?>




<?php
   function getStopsWithinRange($startLong, $endLong) {

     global $currentLong;

     try {


          $currentLong = $startLong + 10;

	  clearTheDisplay();


//          echo "<br><br>"; 
//          echo '<span style="color:Navy;font-size:1.75em;">
//               get stops within range where longtitude is between ';
//          echo $startLong;
//          echo ' and ';
//          echo $endLong;
//          echo ' using foreign keys ...
//          </span>';


          //  opoen or create database
          $db = new SQLite3('travelers.db');
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Database open or creation was not successful.\n</span>';
          } else {
 //              echo '<span style="color:Navy;font-size:1.75em;">
//                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Database was successfully opened.</span>';
          }

//            echo "<br>"; 



//          echo "<br><br>"; 
//          echo '<span style="color:Navy;font-size:1.75em;">
//               Query the table <b><u>REST_STOP</u></b> where longtitude is between ';
//          echo $startLong;
//          echo ' and ';
//          echo $endLong;
//          echo ' using foreign keys ...
//          </span>';



          //  query the table
          $sql = "SELECT a.restStop_id, a.restStopName, a.longtitude, a.lattitude, 
c.gas_status, d.diesel_status, e.food_status FROM REST_STOP a 
JOIN GAS c
ON a.gas = c.gas_id
JOIN DIESEL d 
ON a.diesel = d.diesel_id
JOIN FOOD e
ON a.food = e.food_id
WHERE longtitude BETWEEN $startLong AND $endLong GROUP BY 
restStopName ORDER BY restStop_id";
          $query = $db->query($sql);
          if(!$db){
               //  an error was encountered
               echo '<span style="color:Navy;font-size:1.75em;">Error Code:    ';
               echo  $db->lastErrorCode();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;">Error Message: ';
               echo  $db->lastErrorMsg();
               echo  "'<br>'</span>";
               echo '<span style="color:Navy;font-size:1.75em;"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was not successful.\n</span>';
          } else {
   //            echo '<span style="color:Navy;font-size:1.75em;"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query was successful.</span>';
          }

   //       echo "<br>"; 

   //       echo '<span style="color:Navy;font-size:1.75em;">Data returned:</span>';
   //  	  echo "<br>"; 


	  $whichRow = 1;

          while ($row = $query->fetchArray()){

	       if(empty($row)) {
                   echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>';
                   echo '<span style="color:Navy;font-size:1.75em;">*** There was no response. ***<br></span>';
	       } else {
//                   echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>';
//                   echo '<span style="color:Navy;font-size:1.75em;">*** There was a response. ***<br></span>';
               }


//  ******************
//               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>';
//               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>';
//
//
//
//               echo '<span style="color:Navy;font-size:1.75em;">'. $row['restStop_id']. '</span>';
//               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;</span>';
//               echo '<span style="color:Navy;font-size:1.75em;">'. $row['restStopName']. '</span>';
//               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;</span>';
//               echo '<span style="color:Navy;font-size:1.75em;">'. $row['longtitude']. '</span>';
//               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;</span>';
//               echo '<span style="color:Navy;font-size:1.75em;">'. $row['lattitude']. '</span>';
//               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;</span>';
//               echo '<span style="color:Navy;font-size:1.75em;">'. $row['gas_status']. '</span>';
//               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;</span>';
//               echo '<span style="color:Navy;font-size:1.75em;">'. $row['diesel_status']. '</span>';
//               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;</span>';
//               echo '<span style="color:Navy;font-size:1.75em;">'. $row['food_status']. '</span>';
//               echo '<span style="color:Navy;font-size:1.75em;">&nbsp;&nbsp;&nbsp;</span>';
//
//               echo "<br>";


//  ******************




         switch($whichRow) {
             case 1:       
                //  echo ' <script> alert("case = 1" + "<br>"); </script>';

   	        echo
  	        '<script> 
  	        document.getElementById("Rest1name").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['restStopName'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

	        $tmpDistance = calculateDistance( $currentLong, 900, $row['longtitude'], $row['lattitude'] );


       //        echo '<span style="color:Maroon;">';
       //        echo $tmpDistance;
       //        echo '</span>';
       //                       < ? p h p echo $tmpDistance; ? >


                if ($tmpDistance < 0) {
//                  echo ' <script> alert("the distance is negative"); </script>';

   	           echo
  	           '<script> 
  	           document.getElementById("Rest1distance").innerHTML = "';
                   echo '<center>';
                   echo '<span style=\"color:Maroon;\"><b>';
                   echo "$tmpDistance";
                   echo '</b></span>';
                   echo '</center>';
  	           echo '"
                   </script>';
                } else {
  	            echo '<script> 
  	            document.getElementById("Rest1distance").innerHTML = ';
                    echo '"';
                    echo '<center>';
                    echo '&nbsp;&nbsp;';
                    echo "$tmpDistance";
                    echo '&nbsp;&nbsp;';
                    echo '</center>';
                    echo '"';
  	            echo '</script>';
                }




  	        echo 
  	        '<script> 
  	        document.getElementById("Rest1gas").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['gas_status'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest1diesel").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['diesel_status'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	         document.getElementById("Rest1food").innerHTML = "<center>&nbsp;&nbsp;" ';
  	         echo '+ ';
  	         echo '"';
                 echo $row['food_status'];
  	         echo '"';
  	         echo ' + "&nbsp;&nbsp;</center>"; 
  	         </script>';

             break;
             case 2:      
                //  echo ' <script> alert("case = 2" + "<br>"); </script>';

   	        echo
  	        '<script> 
  	        document.getElementById("Rest2name").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['restStopName'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

	        $tmpDistance = calculateDistance( $currentLong, 900, $row['longtitude'], $row['lattitude'] );


                if ($tmpDistance < 0) {
//                  echo ' <script> alert("the distance is negative"); </script>';

   	           echo
  	           '<script> 
  	           document.getElementById("Rest2distance").innerHTML = "';
                   echo '<center>';
                   echo '<span style=\"color:Maroon;\"><b>';
                   echo "$tmpDistance";
                   echo '</b></span>';
                   echo '</center>';
  	           echo '"
                   </script>';
                } else {
  	            echo '<script> 
  	            document.getElementById("Rest2distance").innerHTML = ';
                    echo '"';
                    echo '<center>';
                    echo '&nbsp;&nbsp;';
                    echo "$tmpDistance";
                    echo '&nbsp;&nbsp;';
                    echo '</center>';
                    echo '"';
  	            echo '</script>';
                }



  	        echo 
  	        '<script> 
  	        document.getElementById("Rest2gas").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['gas_status'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest2diesel").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['diesel_status'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	         document.getElementById("Rest2food").innerHTML = "<center>&nbsp;&nbsp;" ';
  	         echo '+ ';
  	         echo '"';
                 echo $row['food_status'];
  	         echo '"';
  	         echo ' + "&nbsp;&nbsp;</center>"; 
  	         </script>';

             break;
             case 3:   
                //  echo ' <script> alert("case = 3" + "<br>"); </script>';

   	        echo
  	        '<script> 
  	        document.getElementById("Rest3name").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['restStopName'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

	        $tmpDistance = calculateDistance( $currentLong, 900, $row['longtitude'], $row['lattitude'] );

                if ($tmpDistance < 0) {
//                  echo ' <script> alert("the distance is negative"); </script>';

   	           echo
  	           '<script> 
  	           document.getElementById("Rest3distance").innerHTML = "';
                   echo '<center>';
                   echo '<span style=\"color:Maroon;\"><b>';
                   echo "$tmpDistance";
                   echo '</b></span>';
                   echo '</center>';
  	           echo '"
                   </script>';
                } else {
  	            echo '<script> 
  	            document.getElementById("Rest3distance").innerHTML = ';
                    echo '"';
                    echo '<center>';
                    echo '&nbsp;&nbsp;';
                    echo "$tmpDistance";
                    echo '&nbsp;&nbsp;';
                    echo '</center>';
                    echo '"';
  	            echo '</script>';
                }




  	        echo 
  	        '<script> 
  	        document.getElementById("Rest3gas").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['gas_status'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest3diesel").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['diesel_status'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	         document.getElementById("Rest3food").innerHTML = "<center>&nbsp;&nbsp;" ';
  	         echo '+ ';
  	         echo '"';
                 echo $row['food_status'];
  	         echo '"';
  	         echo ' + "&nbsp;&nbsp;</center>"; 
  	         </script>';

             break;
             case 4:                        
                //  echo ' <script> alert("case = 4" + "<br>"); </script>';

   	        echo
  	        '<script> 
  	        document.getElementById("Rest4name").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['restStopName'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

	        $tmpDistance = calculateDistance( $currentLong, 900, $row['longtitude'], $row['lattitude'] );

                if ($tmpDistance < 0) {
//                  echo ' <script> alert("the distance is negative"); </script>';

   	           echo
  	           '<script> 
  	           document.getElementById("Rest4distance").innerHTML = "';
                   echo '<center>';
                   echo '<span style=\"color:Maroon;\"><b>';
                   echo "$tmpDistance";
                   echo '</b></span>';
                   echo '</center>';
  	           echo '"
                   </script>';
                } else {
  	            echo '<script> 
  	            document.getElementById("Rest4distance").innerHTML = ';
                    echo '"';
                    echo '<center>';
                    echo '&nbsp;&nbsp;';
                    echo "$tmpDistance";
                    echo '&nbsp;&nbsp;';
                    echo '</center>';
                    echo '"';
  	            echo '</script>';
                }




  	        echo 
  	        '<script> 
  	        document.getElementById("Rest4gas").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['gas_status'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest4diesel").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['diesel_status'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	         document.getElementById("Rest4food").innerHTML = "<center>&nbsp;&nbsp;" ';
  	         echo '+ ';
  	         echo '"';
                 echo $row['food_status'];
  	         echo '"';
  	         echo ' + "&nbsp;&nbsp;</center>"; 
  	         </script>';
                      
             break;
             case 5:                        
                //  echo ' <script> alert("case = 5" + "<br>"); </script>';

   	        echo
  	        '<script> 
  	        document.getElementById("Rest5name").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['restStopName'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

	        $tmpDistance = calculateDistance( $currentLong, 900, $row['longtitude'], $row['lattitude'] );

                if ($tmpDistance < 0) {
//                  echo ' <script> alert("the distance is negative"); </script>';

   	           echo
  	           '<script> 
  	           document.getElementById("Rest5distance").innerHTML = "';
                   echo '<center>';
                   echo '<span style=\"color:Maroon;\"><b>';
                   echo "$tmpDistance";
                   echo '</b></span>';
                   echo '</center>';
  	           echo '"
                   </script>';
                } else {
  	            echo '<script> 
  	            document.getElementById("Rest5distance").innerHTML = ';
                    echo '"';
                    echo '<center>';
                    echo '&nbsp;&nbsp;';
                    echo "$tmpDistance";
                    echo '&nbsp;&nbsp;';
                    echo '</center>';
                    echo '"';
  	            echo '</script>';
                }




  	        echo 
  	        '<script> 
  	        document.getElementById("Rest5gas").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['gas_status'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest5diesel").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['diesel_status'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	         document.getElementById("Rest5food").innerHTML = "<center>&nbsp;&nbsp;" ';
  	         echo '+ ';
  	         echo '"';
                 echo $row['food_status'];
  	         echo '"';
  	         echo ' + "&nbsp;&nbsp;</center>"; 
  	         </script>';
                      
             break;
             case 6:                        
                //  echo ' <script> alert("case = 6" + "<br>"); </script>';

   	        echo
  	        '<script> 
  	        document.getElementById("Rest6name").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['restStopName'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

	        $tmpDistance = calculateDistance( $currentLong, 900, $row['longtitude'], $row['lattitude'] );

                if ($tmpDistance < 0) {
//                  echo ' <script> alert("the distance is negative"); </script>';

   	           echo
  	           '<script> 
  	           document.getElementById("Rest6distance").innerHTML = "';
                   echo '<center>';
                   echo '<span style=\"color:Maroon;\"><b>';
                   echo "$tmpDistance";
                   echo '</b></span>';
                   echo '</center>';
  	           echo '"
                   </script>';
                } else {
  	            echo '<script> 
  	            document.getElementById("Rest6distance").innerHTML = ';
                    echo '"';
                    echo '<center>';
                    echo '&nbsp;&nbsp;';
                    echo "$tmpDistance";
                    echo '&nbsp;&nbsp;';
                    echo '</center>';
                    echo '"';
  	            echo '</script>';
                }






  	        echo 
  	        '<script> 
  	        document.getElementById("Rest6gas").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['gas_status'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest6diesel").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['diesel_status'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	         document.getElementById("Rest6food").innerHTML = "<center>&nbsp;&nbsp;" ';
  	         echo '+ ';
  	         echo '"';
                 echo $row['food_status'];
  	         echo '"';
  	         echo ' + "&nbsp;&nbsp;</center>"; 
  	         </script>';
                      
             break;
             case 7:                        
                //  echo ' <script> alert("case = 7" + "<br>"); </script>';

   	        echo
  	        '<script> 
  	        document.getElementById("Rest7name").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['restStopName'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

	        $tmpDistance = calculateDistance( $currentLong, 900, $row['longtitude'], $row['lattitude'] );

                if ($tmpDistance < 0) {
//                  echo ' <script> alert("the distance is negative"); </script>';

   	           echo
  	           '<script> 
  	           document.getElementById("Rest7distance").innerHTML = "';
                   echo '<center>';
                   echo '<span style=\"color:Maroon;\"><b>';
                   echo "$tmpDistance";
                   echo '</b></span>';
                   echo '</center>';
  	           echo '"
                   </script>';
                } else {
  	            echo '<script> 
  	            document.getElementById("Rest7distance").innerHTML = ';
                    echo '"';
                    echo '<center>';
                    echo '&nbsp;&nbsp;';
                    echo "$tmpDistance";
                    echo '&nbsp;&nbsp;';
                    echo '</center>';
                    echo '"';
  	            echo '</script>';
                }




  	        echo 
  	        '<script> 
  	        document.getElementById("Rest7gas").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['gas_status'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest7diesel").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['diesel_status'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	         document.getElementById("Rest7food").innerHTML = "<center>&nbsp;&nbsp;" ';
  	         echo '+ ';
  	         echo '"';
                 echo $row['food_status'];
  	         echo '"';
  	         echo ' + "&nbsp;&nbsp;</center>"; 
  	         </script>';
                      
             break;
             case 8:                        
                //  echo ' <script> alert("case = 8" + "<br>"); </script>';

   	        echo
  	        '<script> 
  	        document.getElementById("Rest8name").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['restStopName'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

	        $tmpDistance = calculateDistance( $currentLong, 900, $row['longtitude'], $row['lattitude'] );

                if ($tmpDistance < 0) {
//                  echo ' <script> alert("the distance is negative"); </script>';

   	           echo
  	           '<script> 
  	           document.getElementById("Rest8distance").innerHTML = "';
                   echo '<center>';
                   echo '<span style=\"color:Maroon;\"><b>';
                   echo "$tmpDistance";
                   echo '</b></span>';
                   echo '</center>';
  	           echo '"
                   </script>';
                } else {
  	            echo '<script> 
  	            document.getElementById("Rest8distance").innerHTML = ';
                    echo '"';
                    echo '<center>';
                    echo '&nbsp;&nbsp;';
                    echo "$tmpDistance";
                    echo '&nbsp;&nbsp;';
                    echo '</center>';
                    echo '"';
  	            echo '</script>';
                }





  	        echo 
  	        '<script> 
  	        document.getElementById("Rest8gas").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['gas_status'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest8diesel").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['diesel_status'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	         document.getElementById("Rest8food").innerHTML = "<center>&nbsp;&nbsp;" ';
  	         echo '+ ';
  	         echo '"';
                 echo $row['food_status'];
  	         echo '"';
  	         echo ' + "&nbsp;&nbsp;</center>"; 
  	         </script>';
                      
             break;
             case 9:                        
                //  echo ' <script> alert("case = 9" + "<br>"); </script>';

   	        echo
  	        '<script> 
  	        document.getElementById("Rest9name").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['restStopName'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

	        $tmpDistance = calculateDistance( $currentLong, 900, $row['longtitude'], $row['lattitude'] );

                if ($tmpDistance < 0) {
//                  echo ' <script> alert("the distance is negative"); </script>';

   	           echo
  	           '<script> 
  	           document.getElementById("Rest9distance").innerHTML = "';
                   echo '<center>';
                   echo '<span style=\"color:Maroon;\"><b>';
                   echo "$tmpDistance";
                   echo '</b></span>';
                   echo '</center>';
  	           echo '"
                   </script>';
                } else {
  	            echo '<script> 
  	            document.getElementById("Rest9distance").innerHTML = ';
                    echo '"';
                    echo '<center>';
                    echo '&nbsp;&nbsp;';
                    echo "$tmpDistance";
                    echo '&nbsp;&nbsp;';
                    echo '</center>';
                    echo '"';
  	            echo '</script>';
                }


  	        echo 
  	        '<script> 
  	        document.getElementById("Rest9gas").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['gas_status'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest9diesel").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['diesel_status'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	         document.getElementById("Rest9food").innerHTML = "<center>&nbsp;&nbsp;" ';
  	         echo '+ ';
  	         echo '"';
                 echo $row['food_status'];
  	         echo '"';
  	         echo ' + "&nbsp;&nbsp;</center>"; 
  	         </script>';
                      
             break;
             case 10:                        
                //  echo ' <script> alert("case = 10" + "<br>"); </script>';

   	        echo
  	        '<script> 
  	        document.getElementById("Rest10name").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['restStopName'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

	        $tmpDistance = calculateDistance( $currentLong, 900, $row['longtitude'], $row['lattitude'] );

                if ($tmpDistance < 0) {
//                  echo ' <script> alert("the distance is negative"); </script>';

   	           echo
  	           '<script> 
  	           document.getElementById("Rest10distance").innerHTML = "';
                   echo '<center>';
                   echo '<span style=\"color:Maroon;\"><b>';
                   echo "$tmpDistance";
                   echo '</b></span>';
                   echo '</center>';
  	           echo '"
                   </script>';
                } else {
  	            echo '<script> 
  	            document.getElementById("Rest10distance").innerHTML = ';
                    echo '"';
                    echo '<center>';
                    echo '&nbsp;&nbsp;';
                    echo "$tmpDistance";
                    echo '&nbsp;&nbsp;';
                    echo '</center>';
                    echo '"';
  	            echo '</script>';
                }




  	        echo 
  	        '<script> 
  	        document.getElementById("Rest10gas").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['gas_status'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	        document.getElementById("Rest10diesel").innerHTML = "<center>&nbsp;&nbsp;" ';
  	        echo '+ ';
  	        echo '"';
                echo $row['diesel_status'];
  	        echo '"';
  	        echo ' + "&nbsp;&nbsp;</center>"; 
  	        </script>';

  	        echo 
  	        '<script> 
  	         document.getElementById("Rest10food").innerHTML = "<center>&nbsp;&nbsp;" ';
  	         echo '+ ';
  	         echo '"';
                 echo $row['food_status'];
  	         echo '"';
  	         echo ' + "&nbsp;&nbsp;</center>"; 
  	         </script>';
                      
               break;
               default:
                  //  echo ' <script> alert("case = default" + "<br>"); </script>';
   
              //  end switch
           }

	      $whichRow += 1;
          }




          //  echo "<br>"; 
//          echo '<span style="color:Navy;font-size:1.75em;">Query finished.</span>';
//          echo "<br>"; 

     } catch (Exception $e) {
          echo 'An exception occurred: ', $e->getMessage(), "\n";

          echo '<span id="exceptionOccurredMsg" style="color:Maroon;font-size:<?php echo $exceptionOccurredMsgSize; ?>;"><b>
              An exception occurred: ';
          echo $e->getMessage(), "\n";
          echo '</b></span>';
     }

      //  end    function getStopsWithinRange
   }

?>






<?php
function calculateDistance( $currentLong, $currentLatt, $targetLong, $targetLatt )
{
     $direction = 0;

     $legA = 0;
     $legB = 0;
     $legHypotenuse = 0;

     if ( $targetLong > $currentLong ) {
          $direction = 1;
          $legA = $targetLong - $currentLong;

          //  end    $targetLong > $currentLong
     }
     else if ( $targetLong < $currentLong ) 
     {
          $direction = -1;
          $legA = $currentLong - $targetLong;
     }


     if ( $targetLatt > $currentLatt ) {
          $legB = $targetLatt - $currentLatt;

          //  end    $targetLatt > $currentLatt
     }
     else if ( $targetLatt < $currentLatt ) 
     {
          $legB = $currentLatt - $targetLatt;
     }

      $legHypotenuse = pow($legA, 2) + pow($legB, 2);

      $legHypotenuse = sqrt($legHypotenuse);


     if ( $direction >= 0 ) {
         return $legHypotenuse;
     }
     else if ( $direction < 0 ) {
         return 0 - $legHypotenuse;
     }

	
  // end function calculateDistance
}
?>




<?php
function updateGps() { 
         global $currentLong;

   	  echo
  	  '<script> 
  	  document.getElementById("CurrentLong").innerHTML = "<center>&nbsp;&nbsp;" ';
  	  echo '+ ';
  	  echo '"';
  	  echo $currentLong;
  	  echo '"';
  	  echo ' + "&nbsp;&nbsp;</center>"; 
  	  </script>';

          getStopsWithinRange($currentLong - 10, $currentLong + 10);

   //   end     function updateGps
}
?>





<?php
      updateGps($currentLong); 
?>


<br><br><br>

<center>
<BUTTON style="background-color:lightblue;color:white;margin-left:1px;margin-right:2px;margin-top:1px;margin-bottom:1px;border:2px solid lightgrey;border-radius:8px;width=7.5em;height:2.5em;-webkit-appearance:none" TYPE="button" id="debugButton" name="debugButton" title="show DEBUG info button" aria-label="show DEBUG info button" ONCLICK="showDebug()" ACCESSKEY=S><span style="font-size:28px;">     
<svg transform="translate(0,-4)" xmlns="http://www.w3.org/2000/svg" width="1.1em" height="1.1em" fill="navy" stroke="white" class="bi bi-gear-fill" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc">
    <title> id="iconTitle">show debug info</title>
    <desc  id="iconDesc">this icon indicates that you can open a debugging panel</desc> <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/> </svg> </svg> 
<svg transform="translate(0,-3)" xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" fill="Navy" class="bi bi-keyboard-fill" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc">
    <title> id="iconTitle">access key S</title>
    <desc  id="iconDesc">this icon indicates keyboard navigation using the S access key</desc> <path d="M0 6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6zm13 .25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5a.25.25 0 0 0-.25.25zM2.25 8a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 8.75v-.5A.25.25 0 0 0 2.75 8h-.5zM4 8.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 5 8.75v-.5A.25.25 0 0 0 4.75 8h-.5a.25.25 0 0 0-.25.25zM6.25 8a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 7 8.75v-.5A.25.25 0 0 0 6.75 8h-.5zM8 8.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 9 8.75v-.5A.25.25 0 0 0 8.75 8h-.5a.25.25 0 0 0-.25.25zM13.25 8a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5zm-3-2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h1.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-1.5zm.75 2.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5a.25.25 0 0 0-.25.25zM11.25 6a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5zM9 6.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5A.25.25 0 0 0 9.75 6h-.5a.25.25 0 0 0-.25.25zM7.25 6a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 8 6.75v-.5A.25.25 0 0 0 7.75 6h-.5zM5 6.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 6 6.75v-.5A.25.25 0 0 0 5.75 6h-.5a.25.25 0 0 0-.25.25zM2.25 6a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h1.5A.25.25 0 0 0 4 6.75v-.5A.25.25 0 0 0 3.75 6h-1.5zM2 10.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5a.25.25 0 0 0-.25.25zM4.25 10a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h5.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-5.5z"/> <g font-size="10" text-anchor="middle"> <text x="8.0" y="12.1" opacity="1.0" fill="orange" stroke="orange" stroke-width="1.0">S</text> </g> </svg>    </span></BUTTON> 
</center>

<br> 
<div style="color:black; background-color:ivory;border:2px solid lightgrey;border-radius:8px;margin-top:3px;margin-bottom:3px" id="debugOut" name="debugOut" title="debug output appears here" aria-label="debug output appears here">
</div> <br><br>

<!--
<p>
<span id="pageEnd1" style="color:Navy;font-size:3em;"><b>
End of page.
</b></span>
</p>
-->

</body>


</html>

