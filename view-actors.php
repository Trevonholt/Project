<h1>Actors</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>  
      <th>Phone Number</th>  
      </tr>
    </thead>
    <tbody>
<?php
while ($actor=$actors->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $actor['actor_id'];?></td>
    <td><?php echo $actor['actor_fname'];?></td>
    <td><?php echo $actor['actor_lname'];?></td>
    <td><?php echo $actor['actor_number'];?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
