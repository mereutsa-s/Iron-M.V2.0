<HTML>
<HEAD>

</HEAD>
<BODY>
<?php
require_once 'library/functions.php';

$user = new tsdClass();
foreach ( $_REQUEST as $key=>$val )  $user->$key = sanitize($val);

$user->name=sdfsdf;

echo $user->password;
?>
</BODY>
</HTML>