<?php 
  
session_start();
// $_SESSION[‘views’] :This is the session variable which is used to store views count for a user’s session. ‘views’ is the session name. The session name should be always be enclosed within the single quote.
if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+1;
else
    $_SESSION['views']=1;
      
echo"views = ".$_SESSION['views'];
// session_destroy();
?>