<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Enjoy Surfing | Final Project | COMP1002 HTML, CSS and JS Fund</title>
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:700|Merienda+One|Montserrat|Mr+Dafoe|Norican" rel="stylesheet">
  <script src="js/navDropdown.js"></script>
</head>

<body>
  <header>
    <h1>Enjoy Surfing</h1>
    <img src="img/silhouetteW.png" alt="Image of silhouette">
    <nav>
      <ul>
        <li><a href="index.html" title="About">About</a></li>
        <!-- How TO - Dropdown Navbar https://www.w3schools.com/howto/howto_css_dropdown_navbar.asp -->
        <ul class="lessons">
          <button class="dropbtn" onclick="DropdownFunction()">Lessons</button>
          <li class="lessons-content" id="lessonsDropdown">
            <a href="lessonsGroup.html">Group</a>
            <a href="lessonsPrivate.html">Private</a>
          </li>
        </ul>
        <li><a href="rentals.html" title="Rentals">Rentals</a></li>
        <li><a href="gallery.html" title="Gallery">Gallery</a></li>
        <li><a href="contact.html" title="Contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <h2 id="titleH2">Confirm Message</h2>
  	<!-- Get the input from the form in checkout-page.php using php $_GET -->
  	<?php
  		$fname = $_GET['fname'];
  		$lname = $_GET['lname'];
  		$phone = $_GET['phone'];
  		$email = $_GET['email'];
      $message = $_GET['message'];

  		echo(
  			'<p>
        Dear '.$fname.' '.$lname.', thank you for your message.<br>
  			Your phone number is '.$phone.', and your email address is '.$email.'!<br>
        Here is the content of your message:<br>
        '.$message.'<br><br>
        We will reply you in 48 hours.
        </p>'
  		);
  	?>
  	<!-- Allow customer back to the first page make another order -->
  	<form action="index.html">
  		<button type="submit">Back to our home page</button>
  	</form>
  </main>


  <footer>
    <ul>
      <li><h3>ENJOY updates</h3>
        <ul>
          <li>
            <p>Get the latest news, camp updates, schedules, events & more.</p>
            <form action="email.html">
              <input type="email" name="emailadd" placeholder="Email Address"><br>
              <button type="submit" name="JoinEmail">Join</button>
            </form>
          </li>
        </ul>
      </li>
      <li><h3>Our Website</h3>
        <ul>
          <li><a href="index.html" title="About">About</a></li>
          <li><a href="lessonsGroup.html" title="Lessons">Lessons</a></li>
          <li><a href="rentals.html" title="Rentals">Rentals</a></li>
          <li><a href="gallery.html#" title="Gallery">Gallery</a></li>
          <li><a href="contact.html" title="Contact">Contact</a></li>
        </ul>
      </li>
      <li><h3>Follow Us</h3>
        <ul>
          <li>
            <a href="#" title="FaceBook"><img src="img/facebook.png" alt="FaceBook"></a>
            <a href="#" title="Instagram"><img src="img/instagram.png" alt="Instagram"></a>
            <a href="#" title="Twitter"><img src="img/twitter.png" alt="Twitter"></a>
            <a href="#" title="Vimeo"><img src="img/vimeo.png" alt="Vimeo"></a>
            <a href="#" title="YouTube"><img src="img/youtube.png" alt="YouTube"></a>
            <a href="#" title="TripAdvisor"><img src="img/tripadvisor.png" alt="TripAdvisor"></a>
          </li>

        </ul>
      </li>

    </ul>
    <small>&copy; 2018. Kuei-Chin Huang. All Rights Reserved. | <a href="legal/privacy-policy.html" title="Privacy Policy">Privacy Policy</a> | <a href="legal/terms-of-use.html" title="Terms of Use">Terms of Use</a></small>
  </footer>
</body>

</html>
