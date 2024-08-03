   <head> 
      <meta charset="utf-8" />

      <title>ab872 - TestMySQL</title> 

   </head>

    <body>

       <p>
          <span id="pageTitle1" style="color:Navy;font-size:48px;"><b>
          Test if MySQL is available.
          </b></span>
       </p>

       <?php
          $host = "?";
          $userName = "?";
          $password = "?";
          $database = "?";
       ?>

       <?php
          if(isset($_POST['hostNameButton'])){
              echo 'You pressed "Set Host Name". The value is: ';
              echo $_POST['hostName'];
              $host = $_POST['hostName'];
              $userName = $_POST['userID'];
              $password = $_POST['userPassword'];
              $database = $_POST['dbName'];
          }
          if(isset($_POST['userIDbutton'])){
              echo 'You pressed "Set User Name". The value is: ';
              echo $_POST['userID'];
              $host = $_POST['hostName'];
              $userName = $_POST['userID'];
              $password = $_POST['userPassword'];
              $database = $_POST['dbName'];
         }
         if(isset($_POST['userPasswordButton'])){
              echo 'You pressed "Set User Password". The value is: ';
              echo $_POST['userPassword'];
              $host = $_POST['hostName'];
              $userName = $_POST['userID'];
              $password = $_POST['userPassword'];
              $database = $_POST['dbName'];
         }
         if(isset($_POST['dbNameButton'])){
              echo 'You pressed "Set DB Name". The value is: ';
              echo $_POST['dbName'];
              $host = $_POST['hostName'];
              $userName = $_POST['userID'];
              $password = $_POST['userPassword'];
              $database = $_POST['dbName'];
         }
       ?>

       <form action="" method="post">
          <input type="text" name="hostName" id="hostName" value=<?php echo $host?>>
          <button type="submit" name="hostNameButton">Set Host Name  </button><br>
          <input type="text" name="userID" id="userID" value=<?php echo $userName?>>
          <button type="submit" name="userIDbutton">Set User Name  </button><br>
          <input type="text" name="userPassword" id="userPassword" value=<?php echo $password?>>
          <button type="submit" name="userPasswordButton">Set User Password</button><br>
          <input type="text" name="dbName" id="dbName" value=<?php echo $database?>>
          <button type="submit" name="dbNameButton">Set DB Name   </button>
       </form>

       <br><br>

       <?php
       ?>



       <?php
  
          $link = mysqli_connect($host,$userName,$password, $database); 

          echo "<br>";

          if (!$link) { 
              die(
                  '<span style="color:Maroon;font-size:38px;"><b>
                  Check your login credentials ... Could not connect to MySQL: </b></span>'  . mysqli_error()
              ); 
          }
          else
          { 
              echo '<span style="color:Navy;font-size:38px;"><b>
              Connection was OK ... Closing the connection.</b></span>'; mysqli_close($link); 
          }

          echo "<br>";

       ?> 


       <p>
          <br><br>

          <span id="pageEnd1" style="color:Navy;font-size:48px;"><b>
             End of page.
          </b></span>
       </p>

    </body>










