<?php
session_start();
//    unset($_SESSION['username']);   This unsets particular session
//NOw to end all sesions at once.
session_destroy();
/* These kind of things can be used with logout .*/
?>