<?php
require_once("util-db.php");
require_once("model-movies-by-director.php");

$pageTitle="Movies by Director";
include "view-header.php";
$trevons=selectMoviesByDirector($_POST['tid']);
include "view-movies-by-director.php";
include "view-footer.php";
?>
