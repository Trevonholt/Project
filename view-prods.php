<h1>Production Companies</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Production Company</th>
      <th>State</th>  
      <th>City</th>  
      </tr>
    </thead>
    <tbody>
<?php
while ($prod=$prods->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $prod['prod_id'];?></td>
    <td><?php echo $prod['prod_name'];?></td>
    <td><?php echo $prod['state'];?></td>
    <td><?php echo $prod['city'];?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
