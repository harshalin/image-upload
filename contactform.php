<?php
 if (isset($_POST['submit'])){
  $name = $_POST['name']
  $subject = $_POST['name']
  $mailForm = $_POST['mail']
  $message = $_POST['message']

}
   $mailTo = "harshu11898@gmail.com"
   $headers = "Forms: ".$mailForm;
   $txt = "you have received an e-mail from" .$name.".\n\n".$message;
   mail($mailTo,$subject,$txt,$headers);
   header("location: index.php?mailsend");
</?>