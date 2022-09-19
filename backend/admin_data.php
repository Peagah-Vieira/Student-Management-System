<?php
$stm = $conn->query("SELECT * FROM admin_sms");
$db_admin = $stm->fetch(PDO::FETCH_ASSOC);
?>