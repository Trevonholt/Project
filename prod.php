<?php
require_once("util-db.php");
require_once("model-prods.php");

$pageTitle="Production Companies";
include "view-header.php";
$prods=selectProds();
include "view-prods.php";
include "view-footer.php";
?>
