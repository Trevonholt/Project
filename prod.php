<?php
require_once("util-db.php");
require_once("model-prods.php");

$pageTitle="Production Companies";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch($_POST['actionType']){
    case "add":
      if (insertProds($_POST['pName'], $_POST['state'],$_POST['city'])){
          echo '<div class="alert alert-success" role="alert">Production Company Added.</div>';
        } else{
          echo '<div class="alert alert-danger" role="alert">Error</div>';
        }
      break;
    case "edit":
      if (updateProds($_POST['pName'], $_POST['state'],$_POST['city'],$_POST['pid'])){
          echo '<div class="alert alert-success" role="alert">Production Company Edited.</div>';
        } else{
          echo '<div class="alert alert-danger" role="alert">Error</div>';
        }
      break;
    // case "Delete":
    //   if (deleteProds($_POST['pid'])){
    //       echo '<div class="alert alert-success" role="alert">Production Company Deleted.</div>';
    //     } else{
    //       echo '<div class="alert alert-danger" role="alert">Error</div>';
    //     }
    //   break;
  }
}

$prods=selectProds();
include "view-prods.php";
include "view-footer.php";
?>
