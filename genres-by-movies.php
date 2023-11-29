<?php
require_once("util-db.php");
require_once("model-genres-by-movies.php");

$pageTitle="Genres by Movies";
include "view-header.php";
$genres=selectGenresByMovies($_GET['id']);
include "view-genres-by-movies.php";
include "view-footer.php";
?>
