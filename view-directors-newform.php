<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#newDirectorModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newDirectorModal" tabindex="-1" aria-labelledby="newDirectorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newDirectorModalLabel">New Director</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="dFname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="dFname" name="dFname">
          </div>
          <div class="mb-3">
            <label for="dLname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="dLname" name="dLname">
          </div>
          <div class="mb-3">
            <label for="dNum" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="dNum" name="dNum">
          </div>
            <input type="hidden" name="actionType" value="add">
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
