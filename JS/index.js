const startingMinutes = 30;
let time = startingMinutes * 60;

const countdownEl = document.getElementById("countdown");

const myInterval = setInterval(updateCountdown, 1000);

function updateCountdown(){
    const minutes = Math.floor(time / 60);
    let seconds = time % 60;

    seconds = seconds < 10 ? '0' + seconds : seconds;

    countdownEl.innerHTML = `${minutes}:${seconds}`;
    time--;
    if(minutes == 0  && seconds == 0){
        
        clearInterval(myInterval);
        alert("Time out");
        document.getElementById("submit").click();
    } 
}