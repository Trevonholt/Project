<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editMovieModal<?php echo $movie['movie_id'];?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editMovieModal<?php echo $movie['movie_id'];?>" tabindex="-1" aria-labelledby="editMovieModalLabel<?php echo $movie['movie_id'];?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editMovieModalLabel<?php echo $movie['movie_id'];?>">Edit Movie</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="prod_id<?php echo $movie['movie_id'];?>" class="form-label">Production Company ID</label>
            <input type="text" class="form-control" id="prod_id<?php echo $movie['movie_id'];?>" name="prod_id" value="<?php echo $movie['prod_id'];?>">
          </div>
          <div class="mb-3">
            <label for="genre_id<?php echo $movie['movie_id'];?>" class="form-label">Genre ID</label>
            <input type="text" class="form-control" id="genre_id<?php echo $movie['movie_id'];?>" name="genre_id" value="<?php echo $movie['genre_id'];?>">
          </div>
          <div class="mb-3">
            <label for="director_id<?php echo $movie['movie_id'];?>" class="form-label">Director ID</label>
            <input type="text" class="form-control" id="director_id<?php echo $movie['movie_id'];?>" name="director_id" value='<?php echo $movie['director_id'];?>'>
          </div>
          <div class="mb-3">
            <label for="actor_id<?php echo $movie['movie_id'];?>" class="form-label">Actor ID</label>
            <input type="text" class="form-control" id="actor_id<?php echo $movie['movie_id'];?>" name="actor_id" value="<?php echo $movie['actor_id'];?>">
          </div>
          <div class="mb-3">
            <label for="title<?php echo $movie['movie_id'];?>" class="form-label">Movie Title</label>
            <input type="text" class="form-control" id="title<?php echo $movie['movie_id'];?>" name="title" value="<?php echo $movie['title'];?>">
          </div>
          <div class="mb-3">
            <label for="rated<?php echo $movie['movie_id'];?>" class="form-label">Movie Rated</label>
            <input type="text" class="form-control" id="rated<?php echo $movie['movie_id'];?>" name="rated" value="<?php echo $movie['rated'];?>">
          </div>
            <input type="hidden" name="mid" value="<?php echo $movie['movie_id'];?>">
            <input type="hidden" name="actionType" value="edit">
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
