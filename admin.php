<?php
   $content = '<form action="submitProject.php" method="post" enctype="multipart/form-data">
   <ul class="form-style-1">
    <li>
      <label for="email"><span class="required">*</span>Project Name:</label>
      <input type="text" class="field-long" id="projectName" name="projectName" placeholder="Project Name">
    </li>
    <li>
      <label for="email"><span class="required">*</span>Upload Image</label>
      <input type="file" class="field-long" id="image" name="image[]" multiple accept="image/x-png,image/gif,image/jpeg">
   </li>
    <li>
      <label for="email"><span class="required">*</span>Location</label>
      <input type="text" class="field-long" id="location" name="location" placeholder="Location">
    </li>
    <li>
    <label for="details"><span class="required">*</span>Project Details</label>
      <textarea type="text" rows="8" class="field-long" id="details" name="details"></textarea>
    </li>
    <li>
    <input type="submit" class="btn btn-default"/>
    </li>
    </ul>
  </form>
';
   include('index.php');


  ?>