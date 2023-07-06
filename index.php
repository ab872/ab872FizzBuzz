<!--  index_fizz_html  -->

<!--  

07jul2023 test if everything is working after configuration change 

-->


<!DOCTYPE html>
<html>

   <head> 
      <meta charset="utf-8" />

      <title>ab872 - FizzBuzz</title> 



<style>

.grid-container {
     border: 3px solid rgb(211, 211, 211, 0.0);      
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
<span id="pageTitle" style="color:Navy;font-size:58px;"><b>FizzBuzz demo</b></span>
</center><br>

<?php
//
//
//     03 july 2023   test to make sure everything works in new configuration
//                    second test for new configuration
//                    third test for new configuration
//  
//  
?>


<?php
echo "<br><br>"; 

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
echo "<br><br>"; 
?>





<br><br>
<center> 
<span id="aboutTitle" style="color:Navy;font-size:38px;"><b>About this demo</b></span>
</center><br>
<span id="textIntroduction2" style="color:Black;font-size:23px;">This is a <span id="textIntroductionEmphasized22" style="color:Navy;font-size:25px;"><b>demo</b></span> of the game <span id="textIntroductionEmphasized23" style="color:Navy;font-size:25px;"><b>FizzBuzz</b></span>. It illustrates <span id="textIntroductionEmphasized24" style="color:Navy;font-size:25px;"><b>basic iteration and conditional statements</b></span>. 
<br><br>

Output the numbers from 1 to 100. 
<br><br>
&nbsp;&nbsp;&nbsp;
1.   If the number is divisible by 3, display the word  "FIZZ".
<br><br>
&nbsp;&nbsp;&nbsp;
2.   If the number is divisible by 5, display the word "BUZZ".
<br><br>
&nbsp;&nbsp;&nbsp;
3.   If the number is divisible by both 3 and 5, display the word "FIZZBUZZ". 
<br><br>

</span>
<br><br>

</center>

<br><br>

<?php
for ($counter = 1; $counter <= 100; $counter++) {
 echo "The count is $counter&nbsp;&nbsp;&nbsp;";


if ( (($counter%3) ==0) && (($counter%5) ==0) ) {
   echo '<span style="color:Maroon;font-size:16px;">';

   if ($counter > 99) {
      echo "&nbsp;&nbsp;&nbsp;";
   }
   elseif ($counter > 9) {
      echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";  
   }
   else {
      echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
   }   

   echo '<b>';
   echo "FIZZBUZZ";
   echo '</b>';
   echo '</span>';
}
elseif ( ($counter%3) ==0 ) {
   echo '<span style="color:Navy;font-size:16px;">';

  if ($counter > 99) {
     echo "&nbsp;&nbsp;&nbsp;";
  }
  elseif ($counter > 9) {
     echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";  
  }
  else {
     echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  }   

   echo '<b>';
   echo "FIZZ";
   echo '</b>';
   echo '</span>';
}
elseif ( ($counter%5) ==0 ) {
   echo '<span style="color:Blue;font-size:16px;">';

  if ($counter > 99) {
     echo "&nbsp;&nbsp;&nbsp;";
  }
  elseif ($counter > 9) {
     echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";  
  }
  else {
     echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";  
  }   

   echo '<b>';
   echo "BUZZ";
   echo '</b>';
   echo '</span>';
}

echo "<br>"; 



   //   end for loop
}
?>

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

<span id="containsPHPmsg" style="color:Maroon;font-size:14px;"><b>This product includes PHP software, freely available from

<a href="http://www.php.net/software/" target="_blank">http://www.php.net/software/</a>.
</b>
</span><br>
<span id="angularJSmitLicenseMsg" style="color:Navy;font-size:18px;"><b>&nbsp;&nbsp;&nbsp;
PHP is licensed under the <a href="https://www.php.net/license/3_01.txt" target="_blank">PHP License, version 3.01</a>.</b></span>
<br>
<span id="angularJSlogoMsg" style="color:Navy;font-size:18px;"><b>&nbsp;&nbsp;&nbsp;
The PHP logo is located at <a href="https://www.php.net/images/logos/new-php-logo.svg" target="_blank">https://www.php.net/images/logos/new-php-logo.svg</a>.</b></span>
<br>
<span id="iconsModifiedMsg" style="color:Navy;font-size:18px;"><b>&nbsp;&nbsp;&nbsp;The PHP logo has been modified.</b></span>
<br>
<span style="color:Black;font-size:12px;">
The PHP logo is used according to terms described in the<br>
 <b><i>"Creative Commons Attribution-Share Alike 4.0 International"</b></i> license.
</span>
<span style="color:Black;font-size:12px;">
Located at <a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank"><span style="font-size:12px;"><b><i>https://creativecommons.org/licenses/by-sa/4.0/</i></b></span></a>
</span>
</center>

<br><br>

<br><br>


<span style="color:Black;font-size:18px;">
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

     <!--  end of grid container Intro  -->
</div>
</center><br><br>





<!--

Firefox on Android 5:

the references section overlaps the introduction. 

 --> 

<!-- start of correction--> 
<span id="verticalSpacer1" style="font-size:19px;"></span> 
<!-- end of correction--> 





<br><br>



<div class="grid-containerReference">

     <div class="grid-itemMarginReference">
     </div>
     <div class="grid-itemTopBottomReference">
     </div>
     <div class="grid-itemMarginReference">
     </div>




     <div class="grid-itemMarginReference">
     </div>

     <div class="grid-itemReference"><br>


<span style="color:Navy;font-size:56px;"><b>References</b></span><br><br>

<span style="color:Black;font-size:18px;">[1]&nbsp;&nbsp;&nbsp;&nbsp;"HTML 5.2." <i>W3C</i>, 14-Dec-2017. [Online]. Available: https://www.w3.org/TR/html52/. [Accessed: 13-Jun-2021].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.w3.org/TR/html52/" target="_blank"><span style="font-size:18px;"><b><i>HTML 5.2.</i></b></span></a><br><br>

<span style="color:Black;font-size:18px;">[2]&nbsp;&nbsp;&nbsp;&nbsp;"Cascading Style Sheets Level 2 Revision 2 &#40;CSS 2.2&#41; Specification." <i>W3C</i>, 12-Apr-2016. [Online]. Available: https://www.w3.org/TR/CSS22/. [Accessed: 13-Jun-2021].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.w3.org/TR/CSS22/" target="_blank"><span style="font-size:18px;"><b><i>Cascading Style Sheets Level 2 Revision 2 &#40;CSS 2.2&#41; Specification.</i></b></span></a><br><br>

<span style="color:Black;font-size:18px;">[3]&nbsp;&nbsp;&nbsp;&nbsp;"Cascading Style Sheets, level 1." <i>W3C</i>, 11-Apr-2008. [Online]. Available: https://www.w3.org/TR/REC-CSS1/. [Accessed: 13-Jun-2021].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.w3.org/TR/REC-CSS1/" target="_blank"><span style="font-size:18px;"><b><i>Cascading Style Sheets, level 1.</i></b></span></a><br><br>


<span style="color:Black;font-size:18px;">[4]&nbsp;&nbsp;&nbsp;&nbsp;"CSS Snapshot 2020." <i>W3C</i>, 22-Dec-2020. [Online]. Available: https://www.w3.org/TR/CSS/. [Accessed: 13-Jun-2021].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.w3.org/TR/CSS/" target="_blank"><span style="font-size:18px;"><b><i>CSS Snapshot 2020.</i></b></span></a><br><br>


<span style="color:Black;font-size:18px;">[5]&nbsp;&nbsp;&nbsp;&nbsp;"ECMA-262," <i>Ecma International</i>, Jun-2020. [Online]. Available: https://www.ecma-international.org/publications-and-standards/standards/ecma-262/. [Accessed: 13-Jun-2021].</span><br>

<span style="color:Navy;font-size:18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ECMAScript&#174; 2020 language specification<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11th edition, June 2020<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:Navy;font-size:18px;"><b>This is the specification for JavaScript.</b></span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.ecma-international.org/publications-and-standards/standards/ecma-262/" target="_blank"><span style="font-size:18px;"><b><i>ECMA-262,</i></b></span></a><br><br>




<span style="color:Black;font-size:18px;">[6]&nbsp;&nbsp;&nbsp;&nbsp;"ECMAScript Internationalization API Specification &#8211; ECMA-402 Edition 1.0." <i>Ecma International</i>, Dec-2012. [Online]. Available: https://402.ecma-international.org/1.0/. [Accessed: 13-Jun-2021].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://402.ecma-international.org/1.0/" target="_blank"><span style="font-size:18px;"><b><i>ECMAScript Internationalization API Specification &#8211; ECMA-402 Edition 1.0.</i></b></span></a><br><br>



<span style="color:Black;font-size:18px;">[7]&nbsp;&nbsp;&nbsp;&nbsp;"Scalable Vector Graphics (SVG) 2." <i>W3C</i>, 04-Oct-2018. [Online]. Available: https://www.w3.org/TR/SVG2/. [Accessed: 01-Jun-2021].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.w3.org/TR/SVG2/" target="_blank"><span style="font-size:18px;"><b><i>Scalable Vector Graphics (SVG) 2.</i></b></span></a><br><br>



<span style="color:Black;font-size:18px;">[8]&nbsp;&nbsp;&nbsp;&nbsp;"Scalable Vector Graphics (SVG) 1.1 (Second Edition)." <i>W3C</i>, 16-Aug-2011. [Online]. Available: https://www.w3.org/TR/SVG11/. [Accessed: 01-Jun-2021].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.w3.org/TR/SVG11/" target="_blank"><span style="font-size:18px;"><b><i>Scalable Vector Graphics (SVG) 1.1 (Second Edition).</i></b></span></a><br><br>



<span style="color:Black;font-size:18px;">[9]&nbsp;&nbsp;&nbsp;&nbsp;Mozilla and individual contributors, "SVG: Scalable Vector Graphics | MDN." <i>MDN Web Docs</i>. [Online]. Available: https://developer.mozilla.org/en-US/docs/Web/SVG. [Accessed: 06-Dec-2021].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://developer.mozilla.org/en-US/docs/Web/SVG" target="_blank"><span style="font-size:18px;"><b><i>SVG: Scalable Vector Graphics | MDN.</i></b></span></a><br><br>




<span style="color:Black;font-size:18px;">[10]&nbsp;&nbsp;&nbsp;&nbsp;"Web Content Accessibility Guidelines (WCAG) 2.1." <i>W3C</i>, 05-Jun-2018. [Online]. Available: 
https://www.w3.org/TR/WCAG21/.
[Accessed: 20-Apr-2021]. </span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.w3.org/TR/WCAG21/" target="_blank"><span style="font-size:18px;"><b><i>Web Content Accessibility Guidelines (WCAG) 2.1.</i></b></span></a><br><br>



<span style="color:Black;font-size:18px;">[11]&nbsp;&nbsp;&nbsp;&nbsp;"Techniques for WCAG 2.2." <i>W3C</i>, 09-Mar-2021. [Online]. Available: https://www.w3.org/WAI/WCAG21/<br>
Techniques/. [Accessed: 20-Apr-2021]. </span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.w3.org/WAI/WCAG21/Techniques/" target="_blank"><span style="font-size:18px;"><b><i>Techniques for WCAG 2.2.</i></b></span></a><br><br>



<span style="color:Black;font-size:18px;">[12]&nbsp;&nbsp;&nbsp;&nbsp;Mozilla and individual contributors, "CSS Grid Layout - CSS: Cascading Style Sheets | MDN." <i>MDN Web Docs</i>. [Online]. Available:
https://developer.mozilla.org/en-US/docs/Web/CSS/CSS&#x5f;Grid\&#x5f;Layout. [Accessed: 03-Jun-2022]. </span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Grid_Layout" target="_blank"><span style="font-size:18px;"><b><i>CSS Grid Layout - CSS: Cascading Style Sheets | MDN.</i></b></span></a><br><br>




<span style="color:Black;font-size:18px;">[13]&nbsp;&nbsp;&nbsp;&nbsp;"CSS Grid Layout." <i>W3Schools</i>. [Online]. Available: 
https://www.w3schools.com/css/<br>
css&#x5f;grid.asp. [Accessed: 03-Jun-2022].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.w3schools.com/css/css_grid.asp" target="_blank"><span style="font-size:18px;"><b><i>CSS Grid Layout.</i></b></span></a><br><br>






<span style="color:Black;font-size:18px;">[14]&nbsp;&nbsp;&nbsp;&nbsp;C. House, "A Complete Guide to Grid," <i>CSS-Tricks</i>, 12-May-2021. [Online]. Available: https://css-tricks.com/<br>
snippets/css/complete-guide-grid/. [Accessed: 03-Jun-2022].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://css-tricks.com/snippets/css/complete-guide-grid/" target="_blank"><span style="font-size:18px;"><b><i>A Complete Guide to Grid,</i></b></span></a><br><br>











<span style="color:Black;font-size:18px;">[15]&nbsp;&nbsp;&nbsp;&nbsp;J. Suh, "Learn CSS Grid - A Guide to Learning CSS Grid." <i>learncssgrid.com</i>. [Online]. Available: http://learncssgrid.com/. [Accessed: 03-Jun-2022].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="http://learncssgrid.com/" target="_blank"><span style="font-size:18px;"><b><i>Learn CSS Grid - A Guide to Learning CSS Grid.</i></b></span></a><br><br>









<span style="color:Black;font-size:18px;">[16]&nbsp;&nbsp;&nbsp;&nbsp;M. O. contributors, J. Thornton and Bootstrap, "CSS Grid." <i>getbootstrap.com</i>. [Online]. Available: https://getbootstrap.com/docs/<br>
5.1/layout/css-grid/. [Accessed: 03-Jun-2022].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://getbootstrap.com/docs/5.1/layout/css-grid/" target="_blank"><span style="font-size:18px;"><b><i>CSS Grid.</i></b></span></a><br><br>





<span style="color:Black;font-size:18px;">[17]&nbsp;&nbsp;&nbsp;&nbsp;"Grid by Example - Usage examples of CSS Grid Layout." <i>gridbyexample.com</i>. [Online]. Available: https://gridbyexample.com/<br>
examples/. [Accessed: 03-Jun-2022].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://gridbyexample.com/examples/" target="_blank"><span style="font-size:18px;"><b><i>Grid by Example - Usage examples of CSS Grid Layout.</i></b></span></a><br><br>





<span style="color:Black;font-size:18px;">[18]&nbsp;&nbsp;&nbsp;&nbsp;"Grid," <i>web.dev</i>. [Online]. Available: https://web.dev/learn/css/grid/. [Accessed: 03-Jun-2022].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://web.dev/learn/css/grid/" target="_blank"><span style="font-size:18px;"><b><i>Grid,</i></b></span></a><br><br>



<span style="color:Black;font-size:18px;">[19]&nbsp;&nbsp;&nbsp;&nbsp;O. Nzube, "How to Use CSS Grid Layout 
&#8211; Grid Properties Explained with Examples," 
<i>freeCodeCamp.org</i>, 25-May-2022. [Online]. Available: https://www.freecodecamp.org/<br>
news/how-to-use-css-grid-layout/. [Accessed: 03-Jun-2022].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.freecodecamp.org/news/how-to-use-css-grid-layout/" target="_blank"><span style="font-size:18px;"><b><i>How to Use CSS Grid Layout &#8211; Grid Properties Explained with Examples,</i></b></span></a><br><br>



<span style="color:Black;font-size:18px;">[20]&nbsp;&nbsp;&nbsp;&nbsp;"CSS Grid &#8211; Table layout is back. Be there and be square," <i>Chrome Developers</i>, 27-Jan-2017. [Online]. Available: https://developer.chrome.com/<br>
blog/css-grid/. [Accessed: 03-Jun-2022].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://developer.chrome.com/blog/css-grid/" target="_blank"><span style="font-size:18px;"><b><i>CSS Grid 
&#8211; Table layout is back. Be there and be square,</i></b></span></a><br><br>



<span style="color:Black;font-size:18px;">[21]&nbsp;&nbsp;&nbsp;&nbsp;"HTTP Messages." <i>W3Schools</i>. [Online]. Available: https://www.w3schools.com/<br>
tags/ref_httpmessages.asp. [Accessed: 03-Feb-2023].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.w3schools.com/tags/ref_httpmessages.asp" target="_blank"><span style="font-size:18px;"><b><i>HTTP Messages.</i></b></span></a><br><br>



<span style="color:Black;font-size:18px;">[22]&nbsp;&nbsp;&nbsp;&nbsp;"PHP: PHP Software." <i>www.php.net</i>. 
[Online]. Available: https://www.php.net/software.php. [Accessed: 02-Jul-2023].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.php.net/software.php" target="_blank"><span style="font-size:18px;"><b><i>PHP: PHP Software.</i></b></span></a><br><br>




<span style="color:Black;font-size:18px;">[23]&nbsp;&nbsp;&nbsp;&nbsp;"PHP: Download Logos." <i>www.php.net</i>. [Online]. Available: https://www.php.net/download-logos.php. [Accessed: 02-Jul-2023].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.php.net/download-logos.php" target="_blank"><span style="font-size:18px;"><b><i>PHP: Download Logos.</i></b></span></a><br><br>



<span style="color:Black;font-size:18px;">[24]&nbsp;&nbsp;&nbsp;&nbsp;"Creative Commons &#8211; Attribution-ShareAlike 4.0 International &#8211; CC BY-SA 4.0." <i>creativecommons.org</i>. [Online]. Available: https://creativecommons.org/licenses/by-sa/4.0/. [Accessed: 02-Jul-2023].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank"><span style="font-size:18px;"><b><i>Creative Commons &#8211; Attribution-ShareAlike 4.0 International &#8211; CC BY-SA 4.0.</i></b></span></a><br><br>



<span style="color:Black;font-size:18px;">[25]&nbsp;&nbsp;&nbsp;&nbsp;"PHP Exercises, Practice, Solution," <i>w3resource</i>, 19-Aug-2022. 
[Online]. Available: https://www.w3resource.com/php-exercises/index.php. [Accessed: 02-Jul-2023].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.w3resource.com/php-exercises/index.php" target="_blank"><span style="font-size:18px;"><b><i>PHP Exercises, Practice, Solution,</i></b></span></a><br><br>


<span style="color:Black;font-size:18px;">[26]&nbsp;&nbsp;&nbsp;&nbsp;"PHP Exercise: Get the information about the operating system PHP is running on," <i>w3resource</i>, 19-Aug-2022. 
[Online]. Available: https://www.w3resource.com/php-exercises/php-basic-exercise-26.php. [Accessed: 02-Jul-2023].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.w3resource.com/php-exercises/php-basic-exercise-26.php" target="_blank"><span style="font-size:18px;"><b><i>PHP Exercise: Get the information about the operating system PHP is running on,</i></b></span></a><br><br>




<span style="color:Black;font-size:18px;">[27]&nbsp;&nbsp;&nbsp;&nbsp;"PHP Tutorial." <i>W3schools</i>. 
[Online]. Available: https://www.w3schools.com/php/. [Accessed: 02-Jul-2023].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.w3schools.com/php/" target="_blank"><span style="font-size:18px;"><b><i>PHP Tutorial.</i></b></span></a><br><br>






<span style="color:Black;font-size:18px;">[28]&nbsp;&nbsp;&nbsp;&nbsp;"Learn PHP Tutorial - javatpoint," 
<i>Javatpoint</i>.  [Online]. Available: https://www.javatpoint.com/php-tutorial. [Accessed: 02-Jul-2023].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.javatpoint.com/php-tutorial" target="_blank"><span style="font-size:18px;"><b><i>Learn PHP Tutorial - javatpoint,</i></b></span></a><br><br>






<span style="color:Black;font-size:18px;">[29]&nbsp;&nbsp;&nbsp;&nbsp;"PHP Tutorial." <i>Tutorials Point</i>. 
[Online]. Available: https://www.tutorialspoint.com/php/index.htm. [Accessed: 02-Jul-2023].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.tutorialspoint.com/php/index.htm" target="_blank"><span style="font-size:18px;"><b><i>PHP Tutorial.</i></b></span></a><br><br>








<span style="color:Black;font-size:18px;">[30]&nbsp;&nbsp;&nbsp;&nbsp;"PHP Tutorial," <i>PHP Tutorial</i>. 
[Online]. Available: https://www.phptutorial.net/. [Accessed: 02-Jul-2023].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.phptutorial.net/" target="_blank"><span style="font-size:18px;"><b><i>PHP Tutorial,</i></b></span></a><br><br>



<span style="color:Black;font-size:18px;">[31]&nbsp;&nbsp;&nbsp;&nbsp;"Learn PHP," <i>Codecademy</i>. 
[Online]. Available: https://www.codecademy.com/learn/paths/php-skill. [Accessed: 02-Jul-2023].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.codecademy.com/learn/paths/php-skill" target="_blank"><span style="font-size:18px;"><b><i>Learn PHP,</i></b></span></a><br><br>




<span style="color:Black;font-size:18px;">[32]&nbsp;&nbsp;&nbsp;&nbsp;"PHP Tutorial - Learn PHP," <i>GeeksforGeeks</i>. [Online]. Available: https://www.geeksforgeeks.org/php-tutorial/. [Accessed: 02-Jul-2023].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.geeksforgeeks.org/php-tutorial/" target="_blank"><span style="font-size:18px;"><b><i>PHP Tutorial - Learn PHP,</i></b></span></a><br><br>



<span style="color:Black;font-size:18px;">[33]&nbsp;&nbsp;&nbsp;&nbsp;"PHP: phpinfo - Manual." <i>www.php.net</i>. [Online]. Available: https://www.php.net/manual/en/function.phpinfo.php. [Accessed: 02-Jul-2023].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.php.net/manual/en/function.phpinfo.php" target="_blank"><span style="font-size:18px;"><b><i>PHP: phpinfo - Manual.</i></b></span></a><br><br>



<span style="color:Black;font-size:18px;">[34]&nbsp;&nbsp;&nbsp;&nbsp;"How to Easily Create and Use a phpinfo Page (In 3 Steps)," <i>Kinsta&#174;</i>, 14-Dec-2022. [Online]. Available: https://kinsta.com/knowledgebase/phpinfo/. [Accessed: 02-Jul-2023].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://kinsta.com/knowledgebase/phpinfo/" target="_blank"><span style="font-size:18px;"><b><i>How to Easily Create and Use a phpinfo Page (In 3 Steps),</i></b></span></a><br><br>





<span style="color:Black;font-size:18px;">[35]&nbsp;&nbsp;&nbsp;&nbsp;"PHP Date and Time." <i>W3schools</i>. 
[Online]. Available: https://www.w3schools.com/php/php_date.asp. [Accessed: 02-Jul-2023].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.w3schools.com/php/php_date.asp" target="_blank"><span style="font-size:18px;"><b><i>PHP Date and Time.</i></b></span></a><br><br>



<span style="color:Black;font-size:18px;">[36]&nbsp;&nbsp;&nbsp;&nbsp;admin, "PHP program to check prime number," <i>W3schools</i>, 21-Aug-2018. [Online]. Available: https://www.w3schools.blog/php-program-to-check-prime-number. [Accessed: 02-Jul-2023].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.w3schools.blog/php-program-to-check-prime-number" target="_blank"><span style="font-size:18px;"><b><i>PHP program to check prime number,</i></b></span></a><br><br>



<span style="color:Black;font-size:18px;">[37]&nbsp;&nbsp;&nbsp;&nbsp;"https://leetcode.com/problems/fizz-buzz/description," <i>LeetCode</i>. 
[Online]. Available: https://leetcode.com/problems/fizz-buzz/description. [Accessed: 02-Jul-2023].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://leetcode.com/problems/fizz-buzz/description" target="_blank"><span style="font-size:18px;"><b><i>https://leetcode.com/problems/fizz-buzz/description,</i></b></span></a><br><br>



<span style="color:Black;font-size:18px;">[38]&nbsp;&nbsp;&nbsp;&nbsp;"Fizz Buzz Implementation," <i>GeeksforGeeks</i>, 23-May-2017. 
[Online]. Available: https://www.geeksforgeeks.org/fizz-buzz-implementation/. [Accessed: 02-Jul-2023].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://www.geeksforgeeks.org/fizz-buzz-implementation/" target="_blank"><span style="font-size:18px;"><b><i>Fizz Buzz Implementation,</i></b></span></a><br><br>




<span style="color:Black;font-size:18px;">[39]&nbsp;&nbsp;&nbsp;&nbsp;msangapu-msft, "Quickstart: Create a PHP web app - Azure App Service," <i>Microsoft Learn</i>, 09-Mar-2023. 
[Online]. Available: https://learn.microsoft.com/en-us/azure/app-service/quickstart-php. [Accessed: 02-Jul-2023].</span><br>
<svg id="windowPlusIcon" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc"> 
    <title> id="iconTitle">Window Plus icon</title>
    <desc  id="iconDesc">this icon represents opening a new window</desc> <path opacity="1" fill="lightgrey" stroke="lightgrey" stroke-width="0.08" fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Zm1.5-1Z"/> <path opacity="1" fill="lightsteelblue" stroke="navy" stroke-width="0.07" fill-rule="evenodd" d="M4 5Zm2-.5Zm10 8a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5Z"/> </svg>
<span style="color:Black;font-size:18px;">&nbsp;View&nbsp;
</span>
<a href="https://learn.microsoft.com/en-us/azure/app-service/quickstart-php" target="_blank"><span style="font-size:18px;"><b><i>Quickstart: Create a PHP web app - Azure App Service,</i></b></span></a><br><br>



   </div>

     <div class="grid-itemMarginReference">
     </div>



     <div class="grid-itemMarginReference">
     </div>
     <div class="grid-itemTopBottomReference">
     </div>
     <div class="grid-itemMarginReference">
     </div>

     <!--  end of grid container Reference -->
</div>

<br><br>











<!-- 

  -->


<br><br>

<center> 
<span id="copyRightMsg" style="color:Navy;font-size:16px;"><b>&nbsp;&nbsp;&nbsp;Copyright &#169; 2023. All rights reserved.</b></span>
</center> 
<br>

<center> 
<span id="chromeBestMsg" style="color:Navy;font-size:16px;"><b>&nbsp;&nbsp;&nbsp;Best results when using the Chrome browser.</b></span><br><br>

<svg id="BootstrapIcon" 
xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="Navy" class="bi bi-bootstrap" viewBox="0 0 16 16" 
role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc">
    <title> id="iconTitle">Bootstrap icon</title>
    <desc  id="iconDesc">this icon represents Bootstrap</desc> 
    <path d="M5.062 12h3.475c1.804 0 2.888-.908 2.888-2.396 0-1.102-.761-1.916-1.904-2.034v-.1c.832-.14 1.482-.93 1.482-1.816 0-1.3-.955-2.11-2.542-2.11H5.062V12zm1.313-4.875V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762V8.162h1.822c1.236 0 1.887.463 1.887 1.348 0 .896-.627 1.377-1.811 1.377H6.375z"/> 
    <path d="M0 4a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v8a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4zm4-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3H4z"/> 
</svg><br>


<span id="iconsProvidedMsg" style="color:Navy;font-size:16px;"><b>&nbsp;&nbsp;&nbsp; Some icons provided via the 
<a href="https://icons.getbootstrap.com/" target="_blank">Bootstrap Icons</a> collection.</b></span><br>


<span id="mitLicenseMsg" style="color:Navy;font-size:16px;"><b>&nbsp;&nbsp;&nbsp; Bootstrap Icons are under the <a href="https://github.com/twbs/icons/blob/main/LICENSE.md" target="_blank">MIT</a> license.</b></span><br>

<span id="iconsModifiedMsg" style="color:Navy;font-size:16px;"><b>&nbsp;&nbsp;&nbsp;Some icons in this collection have been modified.</b></span><br><br>
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


<NOSCRIPT><span style="color:Navy;font-size:16px;"><b>JavaScript is not available. JavaScript is required in order to provide the full functionality of this page.</b></span></NOSCRIPT><br><br>




<center>
<BUTTON style="background-color:lightblue;color:white;margin-left:1px;margin-right:2px;margin-top:1px;margin-bottom:1px;border:2px solid lightgrey;border-radius:8px;width=120px;height:40px;-webkit-appearance:none" TYPE="button" id="debugButton" name="debugButton" title="show DEBUG info button" aria-label="show DEBUG info button" ONCLICK="showDebug()" ACCESSKEY=S><span style="font-size:28px;">     <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="navy" stroke="white" class="bi bi-gear-fill" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc">
    <title> id="iconTitle">show debug info</title>
    <desc  id="iconDesc">this icon indicates that you can open a debugging panel</desc> <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/> </svg> </svg> <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="Navy" class="bi bi-keyboard-fill" viewBox="0 0 16 16" role="graphics-document" aria-labelledby="iconTitle" aria-describedby="iconDesc">
    <title> id="iconTitle">access key S</title>
    <desc  id="iconDesc">this icon indicates keyboard navigation using the S access key</desc> <path d="M0 6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6zm13 .25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5a.25.25 0 0 0-.25.25zM2.25 8a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 8.75v-.5A.25.25 0 0 0 2.75 8h-.5zM4 8.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 5 8.75v-.5A.25.25 0 0 0 4.75 8h-.5a.25.25 0 0 0-.25.25zM6.25 8a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 7 8.75v-.5A.25.25 0 0 0 6.75 8h-.5zM8 8.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 9 8.75v-.5A.25.25 0 0 0 8.75 8h-.5a.25.25 0 0 0-.25.25zM13.25 8a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5zm-3-2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h1.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-1.5zm.75 2.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5a.25.25 0 0 0-.25.25zM11.25 6a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5zM9 6.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5A.25.25 0 0 0 9.75 6h-.5a.25.25 0 0 0-.25.25zM7.25 6a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 8 6.75v-.5A.25.25 0 0 0 7.75 6h-.5zM5 6.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 6 6.75v-.5A.25.25 0 0 0 5.75 6h-.5a.25.25 0 0 0-.25.25zM2.25 6a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h1.5A.25.25 0 0 0 4 6.75v-.5A.25.25 0 0 0 3.75 6h-1.5zM2 10.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5a.25.25 0 0 0-.25.25zM4.25 10a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h5.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-5.5z"/> <g font-size="10" text-anchor="middle"> <text x="8.0" y="12.1" opacity="1.0" fill="orange" stroke="orange" stroke-width="1.0">S</text> </g> </svg>    </span></BUTTON> 
</center><br> 
<div style="color:black; background-color:ivory;border:2px solid lightgrey;border-radius:8px;margin-top:3px;margin-bottom:3px" id="debugOut" name="debugOut" title="debug output appears here" aria-label="debug output appears here">
</div> <br><br>

                            
      
</body>

</html>




