<?php
echo "<p>Current User ID: ".getmyuid()."</p>";
echo "<p>Current Group ID: ".getmygid()."</p>";
echo "<p>Current PHP Process ID: ".getmypid()."</p>";
echo "<p>Current Script Owner: ".get_current_user()."</p>";
echo "<p>Current User ID is: ". posix_getuid();
echo "<p>Current Group ID is: ". posix_getgid();
echo "</p>".exec('whoami')."</p>";
echo "</p>".system('id')."</p>";
?>
