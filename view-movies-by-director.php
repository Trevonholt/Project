<h1>Movies by Director</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>First Name</th>  
      <th>Last Name</th>
      <th>Title</th>
      <th>Rated</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($trevon=$trevons->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $trevon['director_id'];?></td>
    <td><?php echo $trevon['director_fname'];?></td>
    <td><?php echo $trevon['director_lname'];?></td>
    <td><?php echo $trevon['title'];?></td>
    <td><?php echo $trevon['rated'];?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
