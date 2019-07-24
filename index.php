
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Form Tutorial</title>
      <link rel="stylesheet"  href="style.css">
	
	
</head>
<body class="container_main">
      <div class="container">
      	<p>SEND E-MAIL</p>
      	<form class="contact-form" action="contactform.php" method="post">
      		<input type="text" name="name" placeholder="Full name">
      		<input type="text" name="mail" placeholder="Your e-mail">
      		<input type="text" name="subject" placeholder="subject">
      		<textarea name="message" placeholder="message"></textarea>
      		<button type="submit" name="submit">SEND E-MAIL</button>
      	</form>
      </div>
</body>
</html>