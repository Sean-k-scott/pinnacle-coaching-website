<?php $metatitle = "Book | Pinnacle Coaching" ?>
<?php $metadesc = "Book A Session with Pinnacle Coaching - Dedicate yourself to improving how you play, become a legend."; ?>
<?php $metakeywords = "Book, Session, Contact, Pinnacle, Coaching, esports, learn, practice, improve, video game coaching, computer game coaching, coaching"; ?>
<?php $headertype = "white"; ?>

<?php include('header.php'); ?>

<section class="book__intro">
  <div class="container">
    <h1 class="centered">Book a Session<br />Become a Legend</h1>
  </div>
</section>

<section class="book__form">
  <div class="container">
    <h2 class="centered">Start your journey on the path to becoming a Legend - book your session now!</h2>
    <p>Fill in our form and one of our coaches will get in touch with you to discuss the details of your session. If you can give us some information about which game(s) you’re interested in and your current skill level, or what you’re hoping to recieve from the session that can help us assign the right coach to you.</p>
    <p>Don’t worry though, if you don’t know where to start and just want to improve we can still help you! Let’s get started on your journey to becoming a Legend.</p>
    <div class="book__form__container">
      <form action="https://formspree.io/mayjqole" method="POST">
        <label for="name">
          Your Name:
          <input type="text" name="name" id="name">
        </label>
        <label for="email">
          Your email:
          <input type="text" name="replyto" id="email">
        </label>
        <fieldset>
          <legend>What game(s) are you interested in?:</legend>
          <input id="csgo" type="checkbox" name="game" value="csgo">
          <label for="csgo">CS:GO</label><br/>
          <input id="league" type="checkbox" name="game" value="league">
          <label for="league">League of Legends</label><br/>
          <input id="fortnite" type="checkbox" name="game" value="fortnite">
          <label for="fortnite">Fortnite</label><br/>
          <input id="apex" type="checkbox" name="game" value="apex">
          <label for="apex">Apex Legends</label><br/>
          <input id="rocketleague" type="checkbox" name="game" value="rocketleague">
          <label for="rocketleague">Rocket League</label><br/>
          <input id="rainbowsix" type="checkbox" name="game" value="rainbowsix">
          <label for="rainbowsix">Rainbow Six: Siege</label><br/>
          <input id="destinytwo" type="checkbox" name="game" value="destinytwo">
          <label for="destinytwo">Destiny 2</label><br/>
          <input id="hearthstone" type="checkbox" name="game" value="hearthstone">
          <label for="hearthstone">Hearthstone</label><br/>
        </fieldset>
        <label for="message">
          Your message:
          <textarea name="message" id="message"></textarea>
        </label>
        <div>
          <button class="button" type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>
