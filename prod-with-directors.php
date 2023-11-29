<?php
require_once("util-db.php");
require_once("model-prods-with-directors.php");

$pageTitle="Production Companies with directors";
include "view-header.php";
$prods=selectProds();
include "view-prods-with-directors.php";
include "view-footer.php";
?>
