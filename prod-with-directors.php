<?php
require_once("util-db.php");
require_once("model-prod-with-directors.php");

$pageTitle="Production Companies with directors";
include "view-header.php";
$prods=selectProds();
include "view-prod-with-directors.php";
include "view-footer.php";
?>
