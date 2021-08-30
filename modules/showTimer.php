<?php
$nowAction = round(microtime(true));//время захода на страницу
$leftSec=445600-($nowAction-1630326114);//время, которое осталось

$time=[
  "days" => floor($leftSec/60**2/24),
  "hours" => floor(($leftSec/60**2)%24),
  "minutes" => floor(($leftSec/60)%60),
  "seconds" => floor($leftSec%60)
];
echo ("<ul class='timeInfo_list'>
  <li class='timeInfo_infoBlock'>
    <p class='timeInfo_blockText'><strong class='timeLeft-js'>".$time["days"]."</strong></p>
    <p class='timeInfo_blockText-grey'>Дней</p>
  </li>
  <li class='timeInfo_infoBlock'>
    <p class='timeInfo_blockText'><strong class='timeLeft-js'>".$time["hours"]."</strong></p>
    <p class='timeInfo_blockText-grey'>Часов</p>
  </li>
  <li class='timeInfo_infoBlock'>
    <p class='timeInfo_blockText'><strong class='timeLeft-js'>".$time["minutes"]."</strong></p>
    <p class='timeInfo_blockText-grey'>Минут</p>
  </li>
  <li class='timeInfo_infoBlock'>
    <p class='timeInfo_blockText'><strong class='timeLeft-js'>".$time["seconds"]."</strong></p>
    <p class='timeInfo_blockText-grey'>Секунд</p>
  </li>
  </ul>");
  ?>