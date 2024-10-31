<?php
    /**
    * Code from PHP Manual (php.net),
    * Example #1 Destroying a session with $_SESSION,
    * Used from https://www.php.net/manual/en/function.session-destroy.php
    * Date accessed: 19 Sept 2024
    */
   
    // Initialize the session.
    // If you are using session_name("something"), don't forget it now!
    session_start();
    
    // Unset all of the session variables.
    $_SESSION = array();
    
    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
        );
    }

    //set logout cookie, date and time
    setcookie("logoutTime", date("Y-m-d",time()), time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("logoutHour",  date('h:i'), time() + (86400 * 30), "/"); // 86400 = 1 day
   
    // Finally, destroy the session.
    session_destroy();
    header('location:http://localhost/2170/a3/public/index.php');
    exit();

?>