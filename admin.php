<form action="submitProject.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Project Name:</label>
      <input type="text" class="form-control" id="projectName" name="projectName" placeholder="Project Name">
    </div>
    <div class="form-group">
      <label for="email">Upload Image</label>
      <input type="file" class="form-control" id="image" name="image[]" multiple>
    </div>
    <div class="form-group">
      <label for="email">Location</label>
      <input type="text" class="form-control" id="location" name="location" placeholder="Location">
    </div>
    <div class="form-group">
      <label for="email">Details:</label>
      <textarea type="text" class="form-control" id="details" name="details"></textarea>
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>