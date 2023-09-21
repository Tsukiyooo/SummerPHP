<?php

session_start();
if (!isset($_SESSION['button_clicks'])) {
              $_SESSION['button_clicks'] = 0;
          }
          
          // 檢查是否有按鈕點擊，如果是，則增加計數
          if (isset($_POST['submit'])) {
              $_SESSION['button_clicks']++;
          }
          if($_SESSION['button_clicks']>=10){
            session_destroy();
          }
          header("Location:page.php");
?>