<?php
require_once("util-db.php");
require_once("model-movies.php");

$pageTitle="Movies";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch($_POST['actionType']){
    case "add":
      if (insertMovies($_POST['prod_id'], $_POST['genre_id'],$_POST['director_id'],$_POST['actor_id'],$_POST['title'],$_POST['rated'])){
          echo '<div class="alert alert-success" role="alert">Movie Added.</div>';
        } else{
          echo '<div class="alert alert-danger" role="alert">Error</div>';
        }
      break;
    case "edit":
      if (updateMovies($_POST['prod_id'], $_POST['genre_id'],$_POST['director_id'],$_POST['actor_id'],$_POST['title'],$_POST['rated'],$_POST['mid'])){
          echo '<div class="alert alert-success" role="alert">Movie Edited.</div>';
        } else{
          echo '<div class="alert alert-danger" role="alert">Error</div>';
        }
      break;
    case "Delete":
      if (deleteMovies($_POST['mid'])){
          echo '<div class="alert alert-success" role="alert">Movie Deleted.</div>';
        } else{
          echo '<div class="alert alert-danger" role="alert">Error</div>';
        }
      break;
  }
}

$movies=selectMovies();
include "view-movies.php";
include "view-footer.php";
?>
