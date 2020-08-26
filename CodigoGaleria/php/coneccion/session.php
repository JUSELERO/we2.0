<?php
session_start();
/* if that verify if exist an a current session
The funtion of this program is verify if exist an a session and start session, after send to the user inteerface
*/
  if (isset($_SESSION['user_id'])) {
    header('Location: ./../php/user.php');
}

?>