// audio
function runAudio(){
    let play = document.querySelectorAll('.btn_audio_play'),
        pause = document.querySelectorAll('.btn_audio_pause'),
        audio = document.querySelectorAll('.id_audio'),
        audio_input = document.querySelectorAll('.audio_input'),
        span_left = document.querySelectorAll('.wrap_input_audio .left'),
        span_right = document.querySelectorAll('.wrap_input_audio .right'),
        i = 0;
    function audio_functions(i){
        let aud_tim = 0,
        aud_dur = audio[i].duration;
        span_right[i].innerHTML = chMc(aud_dur);

        audio_input[i].setAttribute('max',aud_dur);

        audio[i].addEventListener('timeupdate', function(){
            aud_tim = audio[i].currentTime;
            audio_input[i].value = aud_tim;
            span_left[i].innerHTML = chMc(aud_tim);
        });  

        play[i].addEventListener('click', function(){
            audio[i].play();
            play[i].classList.remove("block");
            play[i].classList.add("none");
            pause[i].classList.remove("none");
            pause[i].classList.add("block");
        });

        pause[i].addEventListener('click', function(){
            audio[i].pause();
            pause[i].classList.remove("block");
            pause[i].classList.add("none");
            play[i].classList.remove("none");
            play[i].classList.add("block");
        });

        audio_input[i].addEventListener('input', function(){
            audio[i].currentTime = audio_input[i].value;
        });
    }
  for (let node of audio) {    
      audio_functions(i);
      i++;
  }
  function chMc(timestamp) {
    var hours = Math.floor(timestamp / 60 / 60);
    var minutes = Math.floor(timestamp / 60) - (hours * 60);
    var seconds = Math.floor(timestamp % 60);
    var formatted = [
        hours.toString().padStart(2, '0'),
        minutes.toString().padStart(2, '0'),
        seconds.toString().padStart(2, '0')
      ].join(':');
    return formatted;
  }
  
}
runAudio();
/////////////////////////////////