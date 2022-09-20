<?php
// The contact Us Form wont work with Local Host but it will work on Live Server
if(isset($_REQUEST['submit'])) {
 // Checking for Empty Fields
 if(($_REQUEST['name'] == "") || ($_REQUEST['subject'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['message'] == "")){
  // msg displayed if required field missing

  $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  
 } else {
 $name = $_REQUEST['name'];
 $subject = $_REQUEST['subject'];
 $email = $_REQUEST['email'];
 $message = $_REQUEST['message'];

 $mailTo = "nikitachavan409@gmail.com";
 $headers = "From: ". $email;
 $txt = "You have received an email from ". $name. ".\n\n".$message;
 mail($mailTo, $subject, $txt, $headers);
 $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Sent Successfully </div>';

}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Custom CSS -->
 <link rel="stylesheet" href="css/custom.css">
  <title></title>
</head>
<body>




<div class="col-md-8"> <!-- Start 1st Column -->
  <form action="" method="POST">
   <input type="text" class="form-control" name="name" placeholder="Name" required><br>
   <input type="text" class="form-control" name="subject" placeholder="Subject" required><br>
   <input type="email" class="form-control" name="email" placeholder="Email" required><br>
   <textarea class="form-control" name="message" placeholder="How can we help you?" style="height:150px;" required></textarea><br>
   <input type="submit" class="btn btn-primary" value="Send" name="submit"><br><br>
   <!--<div class="popup">
    <h2>Thank You...!</h2>
    <p>Your Details has been submitted Succesfully</p>
    <button type="button">OK</button>
  </div -->
  </form>
</div> <!-- End 1st Column -->

</body>
</html>