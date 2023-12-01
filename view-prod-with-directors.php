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
      <div class="col-auto">
        <form method="post" action="">
        <input type="hidden" name="mid" value="<?php echo $director['movie_id'];?>">
        <input type="hidden" name="actionType" value="Delete">
        <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
          </svg>
        </button>
        </form>
      </div>
    </div>
      </li>
<?php
  }
?>
      </ul>
      </p>
    </div>
      <p class="card-text"><small class="text-body-secondary">State: <?php echo $prod['state'];?></small></p>
    </div>
  </div>
<?php
}
?>
</div>
