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
Travelers database under SQLite.
</b>
</span>


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
   width="7.184375em"
   height="3.403125em"
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
     style="fill:#003b57;fill-opacity:1;fill-rule:nonzero;stroke:none" /></svg>
</center><br>


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

