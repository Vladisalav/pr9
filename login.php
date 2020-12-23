<?php
    session_start (); 

   if (!isset ($_POST ['go'])){ 
      echo "<form method='POST'>
         Логин:&nbsp&nbsp <input type='text' name='login'><br>
         Пароль: <input type='password' name='passwd'><br>
         <input type='submit' name='go' value='Go'>
     </form>";
   } 
   else { 
      $_SESSION ['Login']=$_POST ['login']; 
      $_SESSION ['Passwd']=$_POST ['passwd']; 
      include "auth.php";
   } 
   ?>