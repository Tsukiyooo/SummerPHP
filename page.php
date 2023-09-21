<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>page</title>
        </head>
        <body>

            <form action="text.php" method="post" name="summer" id="summer">
              <input type="submit" name="submit" id="submit" value="送出">

            </p>
            
            </form>
            <?php
            
            session_start();
          
          // 顯示計數器的值
          
          $buttonClicks = $_SESSION['button_clicks'];
          echo $buttonClicks;
              // $RandNum[]=$_SESSION['RandNum'];
              // //print_r ($RandNum);
              // $Fre=$_SESSION["Fre"];
              // print $Fre." = ".$RandNum[0]." , ".$RandNum[1]." , ".$RandNum[2]."</p>";
            ?>
           
            </body>
            </html>