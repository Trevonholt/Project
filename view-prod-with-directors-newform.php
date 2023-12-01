<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#newPDModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newPDModal" tabindex="-1" aria-labelledby="newPDModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newPDModalLabel">New Movie</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
            <div class="mb-3">
              <label for="pid" class="form-label">Production Comapny</label>
<?php
$prodlist= selectProdsForInput();
$selectedProd=0;
include "view-prods-input-list.php";
?>
            </div>
            <div class="mb-3">
              <label for="gid" class="form-label">Genre</label>
<?php
$genreList= selectGenreForInput();
$selectedGenre=0;
include "view-genre-input-list.php";
?>
            </div>
            <div class="mb-3">
              <label for="did" class="form-label">Director</label>
<?php
$directorList= selectDirectorForInput();
$selectedDirector=0;
include "view-director-input-list.php";
?>
            </div>
            <div class="mb-3">
                <label for="aid" class="form-label">Actor</label>
<?php
$actorList= selectActorForInput();
$selectedActor=0;
include "view-actor-input-list.php";
?>
             </div>
            <div class="mb-3">
              <label for="title" class="form-label">Movie Title</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="rated" class="form-label">Movie rated</label>
                <input type="text" class="form-control" id="rated" name="rated">
            </div>
            <input type="hidden" name="actionType" value="Add">
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
