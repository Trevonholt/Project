<h1>Production Companies</h1>
<div class="card-group">
<?php
while ($prod=$prods->fetch_assoc()){
  ?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $prod['prod_name'];?></h5>
      <p class="card-text">
<?php
  $directors=selectDirectorsByProd($prod['prod_id']);
  while ($director=$directors->fetch_assoc()){
?>
    
<?php
  }
?>
      </p>
      <p class="card-text"><small class="text-body-secondary">State: <?php echo $prod['state'];?></small></p>
    </div>
  </div>
<?php
}
?>
</div>
