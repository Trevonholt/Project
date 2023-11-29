<h1>Movies</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Movie Title</th>
      <th>Movie Rating</th>  
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($movie=$movies->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $movie['movie_id'];?></td>
    <td><?php echo $movie['title'];?></td>
    <td><?php echo $movie['rated'];?></td>
    <td><a href="genres-by-movies.php?id=<?php echo $movie['movie_id'];?>">Genres</td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
