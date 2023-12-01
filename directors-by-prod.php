<?php
require_once("util-db.php");
require_once("model-directors-by-prod.php");

$pageTitle="Directors by Production Companies";
include "view-header.php";
$producers=selectDirectorsByProd($_POST['did']);
include "view-directors-by-prod.php";
include "view-footer.php";
?>
