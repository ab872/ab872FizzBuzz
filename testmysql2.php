   <head> 
      <meta charset="utf-8" />

      <title>ab872 - TestMySQL2</title> 



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


<span id="pageTitle1" style="color:Navy;font-size:48px;"><b>
Test if MySQL is available.
</b></span>


<?php
     echo "<br><br>"; 
     $link = mysql_connect(); 
     if (!$link) { 
	die('<span style="color:Black;font-size:22px;">Could not connect to MySQL: </span>' . mysql_error()); 
     } 
     echo '<span style="color:Black;font-size:22px;">Connection OK</span>'; mysql_close($link); 
?>



<p>
<span id="pageEnd1" style="color:Navy;font-size:48px;"><b>
End of page.
</b></span>
</p>




</body>

</html>

