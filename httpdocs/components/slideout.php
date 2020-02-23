<div class="slideout">
  <div class="slideout__container">
      <img src="/pinnaclecoaching/assets/img/logos-icons/menu-close.svg" alt="Close Menu" class="close toggle-menu" />
      <div class="slideout__logo">
        <img src="/pinnaclecoaching/assets/img/logos-icons/logo-white.png" alt="Pinnacle Logo" />
        <div class="slideout__logo__site">
          Pinnacle Coaching
        </div>
      </div>
      <nav class="slideout__nav">
        <ul>
          <?php
            $homepage = "/";
            $currentpage = $_SERVER['REQUEST_URI'];
          if($homepage!==$currentpage) { ?>
          <a href="/" title="Return To Homepage">
            <li>Home</li>
          </a>
          <?php } ?>
          <a href="/games.php" title="See Our Games">
            <li>Games</li>
          </a>
          <a href="/coaches.php" title="Meet Our Coaches">
            <li>Coaches</li>
          </a>
          <a href="/book.php" title="Book A Session">
            <li>Book</li>
          </a>
          <a href="/news.php" title="Latest News">
            <li>News</li>
          </a>
          <a href="/about.php" title="About Us">
            <li>About</li>
          </a>
        </ul>
      </nav>
  </div>
</div>
