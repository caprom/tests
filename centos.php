//*******test2
<?php
echo "<p>Current User ID: ".getmyuid()."</p>";
echo "<p>Current Group ID: ".getmygid()."</p>";
echo "<p>Current PHP Process ID: ".getmypid()."</p>";
echo "<p>Current Script Owner: ".get_current_user()."</p>";
echo "<h1>Hello World!</h1>";
echo "<h1>Hello World!2-3</h1>";
echo "<p>Current User ID is: ". posix_getuid();
echo "<p>Current Group ID is: ". posix_getgid();
echo "</p>"."=========="."</p>";
echo "</p>".exec('whoami')."</p>";
echo "</p>".system('id')."</p>";
?>