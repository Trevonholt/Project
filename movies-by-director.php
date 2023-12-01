<?php
require_once("util-db.php");
require_once("model-movies-by-course.php");

$pageTitle="Movies by Director";
include "view-header.php";
$trevons=selectMoviesByDirector($_POST['did']);
include "view-movies-by-course.php";
include "view-footer.php";
?>
