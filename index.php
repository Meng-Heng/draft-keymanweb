<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeymanWeb 3.0</title>
    <link rel="stylesheet" type="text/css" href="./css/kmw-header.css" />
    <link rel="stylesheet" type="text/css" href="./css/kmw-body.css" />
  
    <link rel="stylesheet" type="text/css" href="src/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>
<body>

<header>
  <div id='headerBackground'>
    <div id='headerLeft'>
      <img src="img/keymanweb-mini-logo-88.png" alt='KeymanWeb.com' title="KeymanWeb version <?= $VersionWithTag ?>"/>
    </div>
    <div id="headerMiddle">
      <!-- Search -->
      <div class="form">
        <input type="text" class="form-control form-input dropdown-toggle" id="keyboardSearch" data-bs-toggle="dropdown" placeholder="Search language, keyboard..." onclick="function1()">
        <span class="left-pan"><i class="fa fa-search"></i></span>
        <ul class="dropdown-menu" style="width:100%">
          <div class="top-row">
            <div class="setting">
              <span>Most Download</span>
              <span><i class="fa fa-map"></i> Map</span>
            </div>
          </div>
          <hr>
          <div class="bottom-row" id="dropdown-menu">
            <!-- kmwHeader.js -->   
          </div> 
        </ul>
      </div>
      <!-- Keyboard selection -->
      <div class="dropdown">
        <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Current keyboard selection
        </button>
        <ul class="dropdown-menu" id="selectedKeyboard">
          <!-- kmwHeader.js -->
        </ul>
      </div>
    </div>
    <div id='headerRight'>
      <!-- Tools -->
      <div class="tools">
        <input type="range" min="12" max="132" value="0" step="2" />
      </div>
      <!-- Help -->
      <!-- <div class="dropdown help">
        <span data-bs-toggle="dropdown">
          <i class="fa-solid fa-circle-question fa-xl" style="color: #FC7200;"></i>
        </span>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-book"></i> Quick Guide to KMW</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="https://keyman.com/developer/keymanweb/" target="_blank"><i class="fa-solid fa-code"></i> For Developer</a></li>
        </ul>
      </div> -->
      <!-- Menu -->
      <div class="dropdown menu">
        <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-bars fa-xl" style="color: #FC7200;"></i>
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="https://keyman.com/" target="_blank">Keyman.com</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="https://keyman.com/bookmarklet/" target="_blank">Bookmarklet</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="headerBar">
    <img src="img/headerbar.png" alt="" />
  </div>
</header>

<section class="container-grid">
  <div class="item item-1 text-area-container">
    <textarea class="type-your-keyboard" rows="3" placeholder="Search language then select a keyboard to type..."></textarea>
  </div>
  <div class="item item-2 expandable-divider">
    <i class="fa-solid fa-bars fa-xl"style="color: #FC7200;"></i>
  </div>
  <div class="item item-3 keyboard-container">
    <img src="img/keyboard.png" alt="" width="50%">
  </div>
</section>

<script src="src/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/kmwBody.js"></script>
</body>
</html>
