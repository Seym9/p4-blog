<?php ob_start(); ?>
<?php
var_dump($_SESSION);
?>

<?php
$content = ob_get_clean();
require "view/layout.php";
?>
