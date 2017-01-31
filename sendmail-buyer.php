<?
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
  $plocation = $_POST['plocation'];
  $psize = $_POST['psize'];
  $residential = $_POST['residential'];
  $commercial = $_POST['commercial'];
  $remarks = stripslashes($_POST['remarks']);
	
	if (!$name) {
		print("<strong>Error:</strong> Please write your name<br/><br/><a href='javascript:history.go(-1)'>Back</a>");
		 exit;
	}
	if (!$email) {
		print("<strong>Error:</strong> Please provide your email address<br/><br/><a href='javascript:history.go(-1)'>Back</a>");
		 exit;
	}
	if (!eregi("^[a-z0-9]+([-_\.]?[a-z0-9])+@[a-z0-9]+([-_\.]?[a-z0-9])+\.[a-z]{2,4}", $email)){
    print("<strong>Error:</strong> this email address is not in a valid format.<br/><br/><a href='javascript:history.go(-1)'>Back</a>");
		 exit;
    }
		
  
  $message = "
  Buyer: $name sent a enquiry! Contact details are as follows:\n\n
  Name: $name\n
  Address: $address\n
  E-mail: $email\n
  Phone: $phone\n
  Project Location: $location\n
  Preferred Location: $plocation\n
  Preferred Apartment Size: $psize\n
  I am interested in: $residential $commercial\n
  Remarks: $remarks\n\n";

  mail($mailto, "$sitename Contacted by $name", $message, "From: $email");
  header("Location: " . $returnpage);

?>