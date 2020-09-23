<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Gold Key Group's realtors will guide you in the process of selling a house, as well as provide you with tools to sell that house as soon as possible.
      Contact us for a free consultation!
      Maria: (407) 913-0154 - Paula: (407) 668-9070"
    />
    <meta
      name="keywords"
      content="sell house, sell home, central florida, orlando, florida"
    />

    <title>Gold Key Group | We can help you sell that house!</title>

    <link rel="stylesheet" href="../CSS/main/main.css" />
    <link rel="shortcut icon" type="image/ico" href="../Images/favicon.ico" />

    <script
      src="https://kit.fontawesome.com/76fa9a81bb.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body class="main--body">
    <div id="upper--nav">
      <em
        ><a href="#ESP" title="Click to translate" style="padding: 0.2em"
          >Hablamos Español</a
        >
      </em>
      <address id="upper--nav--phones">
        <span>
          Maria Zendejas:
          <a href="tel:407-913-0154" title="Call Maria"> (407) 913-0154 </a>
        </span>
        <span>
          Paula Correa:
          <a href="tel:407-668-9070" title="Call Paula"> (407) 668-9070 </a>
        </span>
      </address>
    </div>
    <!-- 
    #################################################################$$$$$$$$$$  $$$$$$$$$$
              HEADER START          #################################$$$$$$$$$$  $$$$$$$$$$
    #################################################################$$$$$$$$$$  $$$$$$$$$$
    -->
    <header class="header--disp--ptn header--bg header--sell">
      <h1 class="text--shadow" id="header--title">
        SELL <br />
        YOUR <br />
        PROPERTY
      </h1>
      <img
        src="../Images/gkg--wordless-300x364.png"
        alt="Gold Key Group Logo"
        class="header--logo--alt"
      />
      <p id="header--text">
        We can help you sell that property!
        <br /><br />
        But first, we need to know you. So please fill up the form bellow.
      </p>
      <div class="header--icons">
        <a
          href="mailto:mariazendejas@gmail.com, paulacorreare@gmail.com?subject=Inquiry%20from%20your%20website%20&body=Hello!%0D%0A%0D%0AMy%20name%20is%3A%20%0D%0AMy%20phone%20number%20is%3A%20%0D%0AThe%20best%20time%20to%20call%20me%20is%20at%3A%20%0D%0A%0D%0A(For%20buying%20fill%20this%20as%20well%2C%20please)%0D%0A%0D%0AMy%20price%20range%20for%20buying%20is%3A%20%0D%0AMinimum%20sq%20feet%3A%0D%0ABeds%3A%20%0D%0A%0D%0A(Please%20edit%20this%20template%20to%20fit%20your%20inquiry%20or%20delete%20the%20fields%20and%20type%20in%20your%20message)"
          target="_blank"
        >
          <svg class="fas fa-envelope"></svg>
        </a>
        <a
          href="https://www.facebook.com/goldkeyorlando/"
          target="_blank"
          target="_blank"
        >
          <svg class="fab fa-facebook-square"></svg>
        </a>
        <a
          href="https://www.instagram.com/goldkey_orlando/"
          target="_blank"
          target="_blank"
        >
          <svg class="fab fa-instagram"></svg>
        </a>
      </div>

      <div class="header--down--arrow">
        <a href="#search"><svg class="fas fa-chevron-down"></svg> </a>
      </div>

      <img
        src="../Images/rr-logo.png"
        alt="Revolution Realty"
        class="rr--logo bs"
      />
    </header>
    <!-- 
    #################################                                            $$$$$$$$$$
              HEADER END                                                         $$$$$$$$$$
    #################################                                            $$$$$$$$$$
    -->
    <!-- 
    #################################################################$$$$$$$$$$  $$$$$$$$$$
              TOP NAV START         #################################$$$$$$$$$$  $$$$$$$$$$
    #################################################################$$$$$$$$$$  $$$$$$$$$$
    -->
    <div id="top--nav">
      <nav id="main--nav">
        <h2 class="gkg">
          <a href="../index.php"> GKG </a>
        </h2>

        <ul>
          <li class="ddm">
            <a href="../index.php" class="big--cta">
              <svg class="fa fa-home">HOME</svg>
            </a>
          </li>
          <li>
            <a href="./search.html" class="big--cta"> BUY </a>
          </li>
          <li>
            <a href="#sell--form--section" id="sell--home" class="big--cta">
              SELL
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- 
    #################################                                            $$$$$$$$$$
              TOP NAV END                                                        $$$$$$$$$$
    #################################                                            $$$$$$$$$$
    -->
    <!-- 
    #################################################################$$$$$$$$$$  $$$$$$$$$$
              MAIN START            #################################$$$$$$$$$$  $$$$$$$$$$
    #################################################################$$$$$$$$$$  $$$$$$$$$$
    -->
    <main>
      <!-- section.screen>.content>h2.text--shadow.section--title+p. -->

      <section class="screen" id="sell--form--section">
        <div class="content">
          <h2 class="gkg text--shadow section--title" id="search">
            Let us help
          </h2>
          <p>
            In order for us to help you we need some information from you.

          </p>

          <?php
              if((!isset($_GET['formstatus']) || $_GET['formstatus'] == "error") && !$_SERVER["REQUEST_METHOD"] == "POST"){
                // exit();
              } elseif (isset($_GET['formstatus'])) {

                $contactCheck = $_GET['formstatus'];
                $thisTime = $thisDate = $month = "";
                
                if($_GET['time'] === "anytime") {
                  $thisTime = " anytime";

                }elseif($_GET['time'] === "morning"){
                  $thisTime = "  during the morning";

                }elseif($_GET['time'] == "afternoon"){
                  $thisTime = " during the afternoon";

                }elseif($_GET['time'] == "evening"){ 
                  $thisTime = " during the evening";
                }

                $pickedMonth = date("m",strtotime($_GET['date']));

                if($pickedMonth == "1"){
                  $month = "January";
                } elseif ($pickedMonth == "2") {
                  $month = "February";
                } elseif ($pickedMonth == "3") {
                  $month = "March";
                } elseif ($pickedMonth == "4") {
                  $month = "April";
                } elseif ($pickedMonth == "5") {
                  $month = "May";
                } elseif ($pickedMonth == "6") {
                  $month = "June";
                } elseif ($pickedMonth == "7") {
                  $month = "July";
                } elseif ($pickedMonth == "8") {
                  $month = "August";
                } elseif ($pickedMonth == "9") {
                  $month = "September";
                } elseif ($pickedMonth == "10") {
                  $month = "October";
                } elseif ($pickedMonth == "11") {
                  $month = "November";
                } elseif ($pickedMonth == "12") {
                  $month = "December";
                } else {
                  $month = "bad month";
                }

                $thisDayStr = date("l",strtotime($_GET['date']));
                $thisDayNum = date("d",strtotime($_GET['date']));

                $thisDate = " ".$thisDayStr.", ".$month." ".$thisDayNum.",";


                  if ($contactCheck == "emptydata") {
                echo '<p class="error php--message">You didn\'t fill in all the fields. Please try again.<a href="./index.php#form--top" id="close--btn">Click to go back</a></p>  ';
                
                } elseif ($contactCheck == "invalidemail") {
                  echo '<p class="error php--message">You didn\'t enter a valid email. Please try again.</p> ';
                
                } elseif ($contactCheck == "error") {
                  echo '<p class="error php--message">There was a problem fetching your request. Please try again.<a href="./index.php#form--top" id="close--btn">Click to go back</a></p> ';
                
                } elseif ($contactCheck == "success") {
                  echo '<p class="success php--message">Thank you for contacting us, we will call you on'.$thisDate.'&nbsp<b style="display:inline;">'.$thisTime.'</b>.'.' <a href="./index.php#form--top" id="close--btn">Click to go back</a></p> ';
                  
                }
              }

            ?>
          <!-- /// FORM /// -->
          <form
            action="./contactform.php"
            method="POST"
            class="contact--form"
            id="form--contact--us"
          >
          <p class="form--header" id="form--top">
              We can help you sell your house!
              <br />
              Just tell us who you are:
            </p>
            <div class="form--data">
              <!--  FIRST COLUMN START -->
              <div class="form--col">
                <!-- ### NAME ### -->
                <label for="name">
                  Name <span style="color: #5a473c">*</span>
                </label>
                <br />
                <input
                  type="text"
                  name="name"
                  id="name"
                  placeholder="First and last name"
                  required
                  <?php
                    if(isset($_GET['name'])){
                      echo 'value = "'.$_GET['name'].'"';
                    }
                  ?>
                />
                <br />
                <br />
                <!-- ### PHONE NUMBER ### -->
                <label for="phone">
                  Phone <span style="color: #5a473c">*</span>
                </label>
                <br />
                <input
                  type="tel"
                  name="phone"
                  id="phone"
                  placeholder="000 111 2222"
                  pattern="[0-9]{3} [0-9]{3} [0-9]{4}" 
                  maxlength="12"  
                  title="000 111 2222"
                  required
                  <?php
                    if(isset($_GET['phone'])){
                      echo 'value = "'.$_GET['phone'].'"';
                    }
                  ?>
                />
                <br />
                <br />
                <!-- ### E-MAIL ### -->
                <label for="email">
                  E-mail <span style="color: #5a473c">*</span>
                </label>
                <br />
                <input
                  type="email"
                  name="email"
                  id="email"
                  placeholder="email@example.com"
                  required
                  <?php
                    if(isset($_GET['email'])){
                      echo 'value = "'.$_GET['email'].'"';
                    }
                  ?>
                />
                <br />
              </div>
              <!--  FIRST COLUMN END -->
              <!-- SECOND COLUMN START -->
              <div class="form--col">
                <!-- ### DATE ### -->
                <label for="date">
                  Select a date <span style="color: #5a473c">*</span>
                </label>
                <br />
                <span class="datepicker-format">
                  <!-- (<abbr
                    title="Two digits year, dash, two digits month, dash, Four digits day">MM-DD-YYYY</abbr>) -->
                </span>
                <input
                  type="date"
                  name="date"
                  id="date"
                  <?php
                    echo 'min="'.date("Y-m-d", strtotime("today")).'"'
                  ?>
                  max="2020-12-31"
                  required
                  <?php
                    if(isset($_GET['date']) && ($_GET['formstatus'] != "success")){
                      echo 'value = "'.$_GET['date'].'"';
                    }
                  ?>
                />
                <br />
                <br />
                <!-- ### TIME ### -->
                <div class="form--time">
                  <label for="time"> Best time to call </label>
                  <br />
                  <input
                    type="radio"
                    name="time"
                    id="morning"
                    value="morning"
                    <?php
                      if(isset($_GET['time']) && $_GET['time'] == "morning" && ($_GET['formstatus'] != "success")){
                        echo 'checked';
                      }
                    ?>
                    
                  />
                  <label for="morning" class="form--time--option">
                    Morning
                  </label>
                  <br />
                  <input
                    type="radio"
                    name="time"
                    id="afternoon"
                    value="afternoon"
                    <?php
                    if(isset($_GET['time']) && $_GET['time'] == "afternoon" && ($_GET['formstatus'] != "success")){
                      echo 'checked';
                    }
                  ?>
                  />
                  <label for="afternoon" class="form--time--option">
                    Afternoon
                  </label>
                  <br />
                  <input
                    type="radio"
                    name="time"
                    id="evening"
                    value="evening"
                    <?php
                    if(isset($_GET['time']) && $_GET['time'] == "evening" && ($_GET['formstatus'] != "success")){
                      echo 'checked';
                    }
                  ?>
                  />
                  <label for="evening" class="form--time--option">
                    Evening
                  </label>
                  <br />
                  <input
                    type="radio"
                    name="time"
                    id="anytime"
                    value="anytime"
                    <?php
                    if(!isset($_GET['time']) || $_GET['time'] == "anytime" || $_GET['formstatus'] == "success"){
                      echo 'checked';
                    }
                    ?>
                  />
                  <label for="anytime" class="form--time--option">
                    Any time
                  </label>
                </div>
              </div>
              <!-- SECOND COLUMN END -->
              <!-- THIRD COLUMN START -->
              <div class="form--col">
                <!-- ### MESSAGE ### -->
                <label for="message"> Include a message (optional) </label>
                <br />
                <br />
                <textarea
                  name="message"
                  id="message"
                  form="form--contact--us"
                  cols="30"
                  rows="8" 
                ><?php
                    if(isset($_GET['message']) && ($_GET['formstatus'] != "success")){
                      echo $_GET['message'];
                    }
                  ?></textarea>
                <br />
              </div>
              <!-- THIRD COLUMN END -->
            </div>
            <div
              class="g-recaptcha"
              data-sitekey="6LfBlcoZAAAAAJ0w9JMD4Tye281QJZyXmn4t55u3"
            ></div>

            <input type="submit" id="submit" value="Submit" />
          </form>
        </div>
      </section>
    </main>
    <!-- 
    #################################                                            $$$$$$$$$$
              MAIN END                                                           $$$$$$$$$$
    #################################                                            $$$$$$$$$$
    -->
    <!-- 
    #################################################################$$$$$$$$$$  $$$$$$$$$$
              FOOTER START          #################################$$$$$$$$$$  $$$$$$$$$$
    #################################################################$$$$$$$$$$  $$$$$$$$$$
    -->
    <footer>
      <!-- <h2 class="footer__gkg text__shadow">
        GOLD 
        <br />
        KEY 
        <br />
        GROUP
      </h2>
      <img src="../Images/gkg--wordless-300x364.png" alt="Gold Key Group logo" class="footer__img"> -->
      <div class="footer__flex">
        <h2>You can always reach us here:</h2>
        <div class="footer__addresses">
          <div class="footer--card">
            <h3>Maria Zendejas</h3>
            <address>
              <span> Cellphone: </span>
              <a href="tel:407-913-0154" title="Call Maria"> (407) 913-0154 </a>
              <span> E-mail: </span>
              <a
                href="mailto:mariazendejas@gmail.com?subject=Inquiry%20from%20your%20website%20&body=Hello%2C%20Maria%2C%0D%0A%0D%0AMy%20name%20is%3A%20%0D%0AMy%20phone%20number%20is%3A%20%0D%0AThe%20best%20time%20to%20call%20me%20is%20at%3A%20%0D%0A%0D%0A(For%20buying%20fill%20this%20as%20well%2C%20please)%0D%0A%0D%0AMy%20price%20range%20for%20buying%20is%3A%20%0D%0AMinimum%20sq%20feet%3A%0D%0ABeds%3A%20%0D%0A%0D%0A(Please%20edit%20this%20template%20to%20fit%20your%20inquiry%20or%20delete%20the%20fields%20and%20type%20in%20your%20message)"
                target="_blank"
                title="Send an e-mail to Maria"
              >
                mariazendejasrealestate@gmail.com
              </a>
              <span> My social networks: </span>
              <ul>
                <li>
                  <svg class="fab fa-facebook-square"></svg>
                  <a
                    href="https://www.facebook.com/mariazendejasrealtor/"
                    target="_blank"
                    >Facebook</a
                  >
                </li>
                <!-- <li>
                  <svg class="fab fa-instagram"></svg>
                    <a href="#">Instagram</a>
                </li> -->
                <li>
                  <svg class="fab fa-whatsapp"></svg>
                  <a
                    href="https://wa.me/14079130154"
                    target="_blank"
                    title="Send me a message on Whatsapp"
                    >Whatsapp</a
                  >
                </li>
              </ul>
            </address>
          </div>
          <div class="footer--card">
            <h3>Paula Correa</h3>
            <address>
              <span> Cellphone: </span>
              <a href="tel:407-668-9070" title="Call Paula"> (407) 668-9070 </a>
              <span> E-mail: </span>
              <a
                href="mailto:paulacorreare@gmail.com?subject=Inquiry%20from%20your%20website%20&body=Hello%2C%20Paula%2C%0D%0A%0D%0AMy%20name%20is%3A%20%0D%0AMy%20phone%20number%20is%3A%20%0D%0AThe%20best%20time%20to%20call%20me%20is%20at%3A%20%0D%0A%0D%0A(For%20buying%20fill%20this%20as%20well%2C%20please)%0D%0A%0D%0AMy%20price%20range%20for%20buying%20is%3A%20%0D%0AMinimum%20sq%20feet%3A%0D%0ABeds%3A%20%0D%0A%0D%0A(Please%20edit%20this%20template%20to%20fit%20your%20inquiry%20or%20delete%20the%20fields%20and%20type%20in%20your%20message)"
                target="_blank"
                title="Send an e-mail to Paula"
              >
                paulacorreare@gmail.com
              </a>
              <span> My social networks: </span>
              <ul>
                <li>
                  <svg class="fab fa-facebook-square"></svg>
                  <a
                    href="https://www.facebook.com/paulacorrearealtor/"
                    target="_blank"
                    >Facebook</a
                  >
                </li>
                <!-- <li>
                  <svg class="fab fa-instagram"></svg>
                  <a href="#">Instagram</a>
                </li> -->
                <li>
                  <svg class="fab fa-whatsapp"></svg>
                  <a
                    href="https://wa.me/14076689070"
                    target="_blank"
                    title="Send me a message on Whatsapp"
                    >Whatsapp</a
                  >
                </li>
              </ul>
            </address>
          </div>
        </div>
        <h3 style="margin: 0.5em auto; font-size: 4em">Gold Key Group</h3>
        <ul class="footer--gkg--sm">
          <li>
            <span> Contact us on our social media: </span>
          </li>
          <li>
            <svg class="fab fa-facebook-square"></svg>
            <a href="https://www.facebook.com/goldkeyorlando/" target="_blank">
              fabook.com/goldkeyorlando
            </a>
          </li>
          <li>
            <svg class="fab fa-instagram"></svg>
            <a
              href="https://www.instagram.com/goldkey_orlando/"
              target="_blank"
            >
              instagram.com/goldkey_orlando
            </a>
          </li>
        </ul>
        <p>
          <b> &copy; <?php echo date("Y"); ?> Gold Key Group Orlando. All rights reserved. </b>
          The data relating to real estate displayed on this website comes in
          part from the Internet Data Exchange (IDX) Program of My Florida
          Regional MLS DBA Stellar MLS. All listing information is deemed
          reliable but not guaranteed and should be independently verified
          through personal inspection by appropriate professionals. Listings
          displayed on this website may be subject to prior sale or removal from
          sale; availability of any listing should always be independently
          verified. Listing information is provided for consumers' personal,
          non-commercial use, solely to identify potential properties for
          potential purchase; all other use is strictly prohibited and may
          violate relevant federal and state law.
        </p>
        <div class="footer__logos-rr-smls">
          <img src="../Images/rr-logo.png" alt="Revolution Realty logo" />
          <img src="../Images/StellarMLS.png" alt="Stellar MLS logo" />
        </div>
      </div>
    </footer>
    <!--############################# 
        # BOTTOM NAV
     -->
    <nav id="bottom--nav">
      <a href="#sell--form--section"
        ><svg class="fas fa-arrow-circle-up"></svg>
      </a>
    </nav>
  </body>
</html>
