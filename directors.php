<?php
require_once("util-db.php");
require_once("model-directors.php");

$pageTitle="genres";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch($_POST['actionType']){
    case "add":
      if (insertDirectors($_POST['dFname'], $_POST['dLname'],$_POST['dNum'])){
          echo '<div class="alert alert-success" role="alert">Director Added.</div>';
        } else{
          echo '<div class="alert alert-danger" role="alert">Error</div>';
        }
      break;
    case "edit":
      if (updateDirectors($_POST['dFname'], $_POST['dLname'],$_POST['dNum'],$_POST['did'])){
          echo '<div class="alert alert-success" role="alert">Director Edited.</div>';
        } else{
          echo '<div class="alert alert-danger" role="alert">Error</div>';
        }
      break;
    case "Delete":
      if (deleteDirectors($_POST['did'])){
          echo '<div class="alert alert-success" role="alert">Director Deleted.</div>';
        } else{
          echo '<div class="alert alert-danger" role="alert">Error</div>';
        }
      break;
  }
}
$directors=selectDirectors();
include "view-directors.php";
include "view-footer.php";
?>
