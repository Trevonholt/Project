<?php
require_once("util-db.php");
require_once("model-genres.php");

$pageTitle="genres";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch($_POST['actionType']){
    case "add":
      if (insertGenres($_POST['gType'])){
          echo '<div class="alert alert-success" role="alert">Genre Added.</div>';
        } else{
          echo '<div class="alert alert-danger" role="alert">Error</div>';
        }
      break;
    case "edit":
      if (updateGenres($_POST['gType'],$_POST['gid'])){
          echo '<div class="alert alert-success" role="alert">Genre Edited.</div>';
        } else{
          echo '<div class="alert alert-danger" role="alert">Error</div>';
        }
      break;
    case "Delete":
      if (deleteGenres($_POST['gid'])){
          echo '<div class="alert alert-success" role="alert">Genre Deleted.</div>';
        } else{
          echo '<div class="alert alert-danger" role="alert">Error</div>';
        }
      break;
  }
}

$genres=selectGenres();
include "view-genres.php";
include "view-footer.php";
?>
