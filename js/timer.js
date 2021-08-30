function changeTimer() {
  const nowAction = new Date
  let leftSec = 445600 - (nowAction.getTime()/1000 - 1630326114);
  const timeLabels = document.querySelectorAll('.timeLeft-js');
  let time = {
    "days": Math.floor(leftSec / 60 ** 2 / 24),
    "hours": Math.floor((leftSec / 60 ** 2) % 24),
    "minutes": Math.floor((leftSec / 60) % 60),
    "seconds": Math.floor(leftSec % 60)
  };
  timeLabels[0].textContent =time.days;
  timeLabels[1].textContent =time.hours;
  timeLabels[2].textContent =time.minutes;
  timeLabels[3].textContent =time.seconds;
}
setInterval(
  () => changeTimer(),
  1000
);