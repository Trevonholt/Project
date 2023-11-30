<?php
require_once("util-db.php");
require_once("model-actors.php");

$pageTitle="Actors";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch($_POST['actionType']){
    case "add":
      if (insertActors($_POST['aFname'], $_POST['aLname'],$_POST['aNum'])){
          echo '<div class="alert alert-success" role="alert">Actor Added.</div>';
        } else{
          echo '<div class="alert alert-danger" role="alert">Error</div>';
        }
      break;
    case "edit":
      if (updateDirectors($_POST['aFname'], $_POST['aLname'],$_POST['aNum'],$_POST['aid'])){
          echo '<div class="alert alert-success" role="alert">Actor Edited.</div>';
        } else{
          echo '<div class="alert alert-danger" role="alert">Error</div>';
        }
      break;
    case "Delete":
      if (deleteDirectors($_POST['aid'])){
          echo '<div class="alert alert-success" role="alert">Actor Deleted.</div>';
        } else{
          echo '<div class="alert alert-danger" role="alert">Error</div>';
        }
      break;
  }
}

$actors=selectActors();
include "view-actors.php";
include "view-footer.php";
?>
