<?php

SetCookie('MAGIC_COOKIE', '', 0, '/');
unset($MAGIC_COOKIE);

commonHeader('Administration Logout');

echo '<h1>Administration Logout</h1>';
echo 'You have been logged out.  Click somewhere for it to really take effect.';

commonFooter();

?>