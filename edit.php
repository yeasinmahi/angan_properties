<?php
require 'utility.php';
checkLogin();
$content =  '';
    require 'dbConnector.php';
    $sql = "Select * from `projects` where id = ".$_GET['id'];
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
   $content .= '<form action="editProject.php?id='.$row["id"].'&type='.$row["status"].'" method="post" enctype="multipart/form-data">
   <ul class="form-style-1">
    <li>
      <label for="projectName"><span class="required">*</span>Project Name:</label>
      <input type="text" value="'.$row["projectName"].'" required class="field-long" id="projectName" name="projectName" placeholder="Project Name">
    </li>
    <li>
      <label for="location"><span class="required">*</span>Location</label>
      <input type="text" value="'.$row["location"].'" required class="field-long" id="location" name="location" placeholder="Location">
    </li>
    <li>
    <label for="details"><span class="required">*</span>Project Details</label>
      <textarea type="text"  required rows="8" class="field-long" id="details" name="details">'.$row["details"].'</textarea>
    </li>
    <li>
    <input type="submit" class="btn btn-default" value="Save"/>
    </li>
    </ul>
  </form>
        ';
        }
    }
   include('index.php');


  ?>