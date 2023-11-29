<h1>Genres by Movies</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Genre Type</th>  
      <th>Title</th>
      <th>Rated</th>
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
