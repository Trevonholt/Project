<h1>Genres</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Genre Type</th>  
      </tr>
    </thead>
    <tbody>
<?php
while ($genre=$genres->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $genre['genre_id'];?></td>
    <td><?php echo $genre['genre_type'];?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
