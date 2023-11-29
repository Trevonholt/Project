<h1>Directors by Production Company</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>First Name</th>  
      <th>Last Name</th>
      <th>Phone Number</th>
      <th>Production Company</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($producer=$producers->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $producer['director_id'];?></td>
    <td><?php echo $producer['director_fname'];?></td>
    <td><?php echo $producer['director_lname'];?></td>
    <td><?php echo $producer['director_number'];?></td>
    <td><?php echo $producer['prod_name'];?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
