<?php
$query = mysqli_query($sqlConnect, "DELETE FROM " .  T_APP_SESSIONS . " WHERE `session_id` = '" . Wo_Secure($_SESSION['user_id']) . "'");
if ($query) {
	session_destroy();
	if (isset($_COOKIE['user_id'])) {
        unset($_COOKIE['user_id']);
        setcookie('user_id', null, -1);
    } 
}
header("Location: " . $wo['config']['site_url']);
exit();