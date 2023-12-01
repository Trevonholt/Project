<?php
require_once("util-db.php");
require_once("model-prod-with-directors.php");

$pageTitle="Production Companies with directors";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertMov($_POST['pid'], $_POST['gid'], $_POST['did'], $_POST['aid'], $_POST['title'], $_POST['rated'])) {
        echo '<div class="alert alert-success" role="alert">Movie added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateMov($_POST['pid'], $_POST['gid'], $_POST['did'], $_POST['aid'], $_POST['title'], $_POST['rated'], $_POST['mid'])) {
        echo '<div class="alert alert-success" role="alert">Movie edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteMov($_POST['mid'])) {
        echo '<div class="alert alert-success" role="alert">Movie deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}


$prods=selectProds();
include "view-prod-with-directors.php";
include "view-footer.php";
?>
