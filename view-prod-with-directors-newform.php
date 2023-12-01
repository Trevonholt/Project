<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newMovieModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
  </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newMovieModal" tabindex="-1" aria-labelledby="newMovieModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newMovieModalLabel">New Movie</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="pid" class="form-label">Production Company ID</label>
            <input type="text" class="form-control" id="pid" name="pid">
          </div>
          <div class="mb-3">
            <label for="gid" class="form-label">Genre ID</label>
            <input type="text" class="form-control" id="gid" name="gid">
          </div>
          <div class="mb-3">
            <label for="did" class="form-label">Director ID</label>
            <input type="text" class="form-control" id="did" name="did">
          </div>
          <div class="mb-3">
            <label for="aid" class="form-label">Actor ID</label>
            <input type="text" class="form-control" id="aid" name="aid">
          </div>
          <div class="mb-3">
            <label for="title" class="form-label">Movie Title</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>
          <div class="mb-3">
            <label for="rated" class="form-label">Movie Rated</label>
            <input type="text" class="form-control" id="rated" name="rated">
          </div>
            <input type="hidden" name="actionType" value="add">
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
