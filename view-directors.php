<h1>Directors</h1>
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
while ($director=$directors->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $director['director_id'];?></td>
    <td><?php echo $director['director_fname'];?></td>
    <td><?php echo $director['director_lname'];?></td>
    <td><?php echo $director['director_number'];?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
