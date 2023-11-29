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
while ($genre=$genres->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $genre['genre_id'];?></td>
    <td><?php echo $genre['genre_type'];?></td>
    <td><?php echo $genre['title'];?></td>
    <td><?php echo $genre['rated'];?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
