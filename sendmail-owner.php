<?php
/* Edit these preferences to suit your needs */

  $mailto = 'info@anganpropertiesltd.com'; // insert the email address you want the form sent to
  $returnpage = 'http://www.anganpropertiesltd.com/thankyou.php'; // insert the name of the page/location you want the user to be returned to
  $sitename = '[Angan Properties LTD]'; // insert the site name here, it will appear in the subject of your email

/* Do not edit below this line unless you know what you're doing */
  
  $name = $_POST['name'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $location = $_POST['location'];
  $landaddress = $_POST['landaddress'];
  $size = $_POST['size'];
  $features = $_POST['features'];
  $residential ="";
  if(isset($_POST['residential'])){
    $residential = $_POST['residential'];
  }
   $commercial="";
  if(isset($_POST['commercial'])){
    $commercial = $_POST['commercial'];
  }
  
  if (!$name) {
    print("<strong>Error:</strong> Please write your name<br/><br/><a href='javascript:history.go(-1)'>Back</a>");
     exit;
  }
  if (!$email) {
    print("<strong>Error:</strong> Please provide your email address<br/><br/><a href='javascript:history.go(-1)'>Back</a>");
     exit;
  }
  $message = "
  Land Owner: $name sent a enquiry! Contact details are as follows:\n\n
  Landowner's Name: $name\n
  Address: $address\n
  E-mail: $email\n
  Phone: $phone\n
  Land Location: $location\n
  Land Address: $landaddress\n
  Land Size in Katha: $size\n
  Any Special Features: $features\n
  Type of Use: $residential $commercial\n";

  mail($mailto, "$sitename Contacted by $name", $message, "From: $email");
  header("Location: " . $returnpage);

?>