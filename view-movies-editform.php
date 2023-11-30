<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editMovieModal<?php echo $movie['movie_id'];?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
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
