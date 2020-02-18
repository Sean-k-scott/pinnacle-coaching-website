<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php echo $metadesc; ?>">
    <meta name="keywords" content="<?php echo $metakeywords; ?>">
    <title><?php echo $title; ?></title>
    <link rel="icon" href="/assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/pinnacle.css">
  </head>
  <body>
    <header class="header <?php
    if($headertype == "white") { echo "header-white"; } else { echo "header-clear"; }?>">
    <div class="container">
        <div class="logos">
        <?php
          $homepage = "/";
          $currentpage = $_SERVER['REQUEST_URI'];
        if($homepage==$currentpage) { ?>
          <?php if($headertype == "white") { ?>
            <img src="/assets/img/logos-icons/logo-black.png" class="logo" alt="Pinnacle Logo" />
          <?php } else { ?>
            <img src="/assets/img/logos-icons/logo-white.png" alt="Pinnacle Logo" class="logo non-transformed" />
            <img src="/assets/img/logos-icons/logo-black.png" alt="Pinnacle Logo" class="logo transformed" />
          <?php } } else {
            if($headertype == "white") { ?>
              <a href="/" title="To Homepage">
                <img src="/assets/img/logos-icons/logo-black.png" class="logo" alt="Pinnacle Logo" />
              </a>
          <?php } else { ?>
              <a href="/" title="To Homepage" class="logo non-transformed">
                <img src="/assets/img/logos-icons/logo-white.png" alt="Pinnacle Logo" />
              </a>
              <a href="/" title="To Homepage" class="logo transformed">
                <img src="/assets/img/logo-black.png" alt="Pinnacle Logo" />
              </a>
              <?php } ?>
            <?php } ?>
            <div class="header__site__desktop">
              Pinnacle Coaching
            </div>
          </div>
          <div class="header__site">
            Pinnacle Coaching
          </div>
          <div class="nav-button">
            <div class="toggle-menu">
              <?php include('assets/img/logos-icons/menu.svg'); ?>
            </div>
          </div>
          <div class="nav-wrapper">
            <nav class="header__nav">
              <ul>
                <li>Home</li>
                <li>Games</li>
                <li>Coaches</li>
                <li>Book</li>
                <li>News</li>
                <li>About</li>
              </ul>
            </nav>
            <a href="https://discord.gg/Wvd7vcX" title="Join our Discord!">
              <?php include('assets/img/logos-icons/discord.svg'); ?>
            </a>
          </div>
        </div>
      </div>
    </header>