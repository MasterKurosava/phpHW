<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <title>Главная</title>
  </head>
  <body> 
    <header id="header">
      <nav id="nav"> 
        <div class="nav_logo"> 
          <svg width="60px" height="60px">
            <defs>
              <radialgradient id="gradLogo" cx="0.9" cy="0.6" r="0.8">
                <stop offset="0%" stop-color="#451046"></stop>
                <stop offset="60%" stop-color="#DF5950"></stop>
              </radialgradient>
            </defs>
            <circle cx="25" cy="25" r="25" fill="url(#gradLogo)"></circle>
            <circle cx="25" cy="25" r="12" fill="black"></circle>
          </svg>
        </div>
        <ul class="nav_list"> 
          <li class="nav_listItem"><a href="../index.php">Главная</a></li>
          <li class="nav_listItem"><a href="./sections/contacts.php">Контакты</a></li>
        </ul>
        <button class="nav_loginButton btn-blue">Зайти в кабинет</button>
      </nav>
    </header>
    <section class="timeInfo">
      <div class="timeInfo_info"> 
        <div class="timeInfo_text">
          <h1>Первый курс<br> по компьютерной сборке</h1>
        </div>
        <?php
          include('./modules/showTimer.php')
        ?>
      </div>
    </section>
    <footer id="footer">
      <div class="footer_container">
        <div class="footer_btn">
          <button class="btn-orange">Заказать курс</button>
        </div>
        <div class="footer_statictic">
          <div class="footer_students">
            <p class="footer_text-grey">Учеников всего:</p>
            <p><strong>200</strong></p>
          </div>
          <div class="footer_students">
            <p class="footer_text-grey">Успешно закончили курс:</p>
            <p><strong>190</strong></p>
          </div>
        </div>
        <div class="footer_stonks"> 
          <div class="footer_students">
            <p class="footer_text-grey">Заработано учениками:</p>
            <p><strong>400 000₽</strong></p>
          </div>
          <div class="footer_line">
            <svg width="714px" height="9px">
              <defs>
                <linearGradient id="gradFooter" x1="0" x2="1" y1="0" y2="0">
                  <stop offset="0%" stop-color="#DF5950"></stop>
                  <stop offset="40%" stop-color="#451046"></stop>
                  <stop offset="61%" stop-color="#451046"></stop>
                  <stop offset="62%" stop-color="white"></stop>
                  <stop offset="100%" stop-color="white"></stop>
                </linearGradient>
              </defs>
              <rect x="0" y="3" width="714px" height="12" fill="url(#gradFooter)"></rect>
            </svg>
            <div class="footer_students">
              <p class="footer_text-grey">0</p>
              <p class="footer_text-grey">1 000 000</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="../js/timer.js"> </script>
  </body>
</html>