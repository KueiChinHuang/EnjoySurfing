<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Enjoy Surfing | Final Project | COMP1002 HTML, CSS and JS Fund</title>
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:700|Merienda+One|Montserrat|Mr+Dafoe|Norican" rel="stylesheet">
  <link href="css/column.css" rel="stylesheet">
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
    <h2 id="titleH2">Creat Booking</h2>
    <form id="checkout-page" method="GET" action="confirm.php">

      <fieldset> <!-- Ask customer to check their order -->
        <legend>Booking Detailed</legend>


        <!-- Get the input from the form in index.html using php $_GET -->
        <?php
          $booking = $_GET['booking'];
          $bookingImgSrc = $_GET['bookingImgSrc'];
          $bookingImgTitle = $_GET['bookingImgTitle'];
          echo('
          <img class="column" src="'.$bookingImgSrc.'" title="'.$bookingImgTitle.'" alt="Image of '.$bookingImgTitle.'">
          <h3 class="BDetailed">'.$booking.'</h3>');
        ?>

        <p class="BDetailed">Price: $100</p>
        <div>
          <label for="quantity">Quantity</label>
          <input type="number" name="quantity" id="quantity" min="1" max="20" value="1" Required/>
        </div>
      </fieldset>

      <fieldset>
        <!-- Ask customer what time to come -->
				<legend>When do you want to come to surf?</legend>
				<div>
					<label for="surfDate">Date</label>
					<input type="date" name="surfDate" id="surfDate"  Required/>
				</div>
				<div>
					<label for="surfTime">Time</label>
					<input type="time" name="surfTime" id="surfTime"  Required/>
				</div>
			</fieldset>

      <fieldset> <!-- Ask customer their personal infromation -->
				<legend>Personal Information</legend>
				<div>
					<label for="fname">First Name</label>
					<input id="fname" type="text" name="fname" size="22" maxlength="20"/>
				</div>
				<div>
					<label for="lname">Last Name</label>
					<input id="lname" type="text" name="lname" size="22" maxlength="20"  />
				</div>
				<div id="CustomerAddress">
					<label for="address">Address</label>
					<input id="address" type="text" name="address"/>
				</div>
				<div>
					<label for="province">Province</label>
					<select id="province" name="province">
						<!-- Default select option: https://stackoverflow.com/questions/8605516/default-select-option-as-blank/28729028 -->
						<option disabled selected value>choose…</option>
						<option value="AB">Alberta</option>
						<option value="BC">British Colombia</option>
						<option value="ON">Ontario</option>
						<option value="MB">Manitoba</option>
						<option value="NB">New Brunswick</option>
						<option value="NL">Newfoundland</option>
						<option value="NT">Northwest Territories</option>
						<option value="NS">Nova Scotia</option>
						<option value="NV">Nunavut</option>
						<option value="PE">Prince Edward Island</option>
						<option value="PQ">Québec</option>
						<option value="SK">Saskatchewan</option>
						<option value="YK">Yukon Territory</option>
					</select>
				</div>
				<div>
					<label for="phone">Phone</label>
					<input id="phone" type="tel" name="phone"/>
				</div>
				<div>
					<label for="email">Email</label>
					<input id="email" type="email" name="email" />
				</div>
				<div>
					<p>You can get a coupon if you upload your selfie which can proof you're not the first time visit EHJOY!</p>
					<label for="uploadSelfie">Upload</label>
					<input type="file" name="file" id="uploadSelfie" />
				</div>
			</fieldset>

			<fieldset> <!-- Ask customer their payment information -->
        <legend>Credit Card Details</legend>


<div id="paypal-button-container"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
// Render the PayPal button
paypal.Button.render({
// Set your environment
env: 'sandbox', // sandbox | production

// Specify the style of the button
style: {
  layout: 'vertical',  // horizontal | vertical
  size:   'medium',    // medium | large | responsive
  shape:  'rect',      // pill | rect
  color:  'gold'       // gold | blue | silver | white | black
},

// Specify allowed and disallowed funding sources
//
// Options:
// - paypal.FUNDING.CARD
// - paypal.FUNDING.CREDIT
// - paypal.FUNDING.ELV
funding: {
  allowed: [
    paypal.FUNDING.CARD,
    paypal.FUNDING.CREDIT
  ],
  disallowed: []
},

// Enable Pay Now checkout flow (optional)
commit: true,

// PayPal Client IDs - replace with your own
// Create a PayPal app: https://developer.paypal.com/developer/applications/create
client: {
  sandbox: 'AWzpi9GRW_iQU4HWiXRBHNC20v-kUwe7Fn_OfaIQVrCexV0GHX9OJApzT2Xn2-TZl8L8E4zlOehySYjA',
  production: '<insert production client id>'
},

payment: function (data, actions) {
  return actions.payment.create({
    payment: {
      transactions: [
        {
          amount: {
            total: '0.01',
            currency: 'USD'
          }
        }
      ]
    }
  });
},

onAuthorize: function (data, actions) {
  return actions.payment.execute()
    .then(function () {
      window.alert('Payment Complete!');
    });
}
}, '#paypal-button-container');
</script>



				<!-- <label>Please choose a payment type:</label>
				<br>

				<input type="radio" name="cctype" id="amex" value="amex"/>
				<label for="amex"><img src="img/amex_logo.gif" alt="American Express" /> American Express</label>

				<input type="radio" name="cctype" id="mc" value="mc" />
				<label for="mc"><img src="img/mc_logo.gif" alt="MasterCard" /> MasterCard</label>

				<input type="radio" name="cctype" id="visa" value="visa" />
				<label for="visa"><img src="img/visa_logo.gif" alt="VISA" /> VISA</label>

				<br><br>
				<div>
					<label for="ccnumber">Credit Card Number</label>
					<input id="ccnumber" type="text" name="ccnumber" size="20" maxlength="20" placeholder="xxxx-xxxx-xxxx-xxxx"/>
				</div>
				<div>
					<label for="cscode">Card Security Code</label>
					<input type="password" id="cscode" name="cscode" size="4" maxlength="4" placeholder="xxx"/>
				</div>
				<div>
					<label for="ccexpireyear">Expiration Year</label>
					<select id="ccexpireyear" name="ccexpireyear">
						<option disabled selected value>choose…</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
						<option value="2021">2021</option>
						<option value="2022">2022</option>
						<option value="2023">2023</option>
						<option value="2024">2024</option>
					</select>
				</div>
				<div>
					<label for="ccexpiremonth">Expiration Month</label>
					<select name="ccexpiremonth" id="ccexpiremonth">
						<option disabled selected value>choose…</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>
				</div> -->
			</fieldset>

			<fieldset> <!-- Ask customer for feedback -->
				<legend>Your Feedback Or Suggestion</legend>
				<p>Please let us know if you have any feedback or suggestion.</p>
				<div>
					<label for="comments">Comments</label>
					<textarea rows="3" cols="40" name="comments" id="comments"></textarea>
				</div>
			</fieldset>
      <div class="button">
        <button type="submit" title="Confirm your booking">Confirm</button>
      </div>
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
