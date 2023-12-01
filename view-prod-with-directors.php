<div class="row">
  <div class="col">
    <h1>Production Companies with Directors</h1>
  </div>
  <div class="col-auto">
<?php
include "view-prod-with-directors-newform.php";
?>
  </div>
</div>
<div class="card-group">
<?php
while ($prod=$prods->fetch_assoc()){
?>
    <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $prod['prod_name'];?></h5>
      <p class="card-text">
      <ul class="list-group">    
<?php
  $directors=selectDirectorsByProd($prod['prod_id']);
  while ($director=$directors->fetch_assoc()){
?>
      <li class="list-group-item">
    <div class="row"> 
      <div class="col">
        <?php echo $director['director_fname'];?> <?php echo $director['director_lname'];?> - <?php echo $director['title'];?>: (<?php echo $director['rated'];?>) - <?php echo $director['director_number'];?>
        </div>
      <div class="col-auto">

      </div>
    </div>
      </li>
<?php
  }
?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">State: <?php echo $prod['state'];?></small></p>
    </div>
  </div>
<?php
}
?>
</div>
