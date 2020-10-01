window.addEventListener('scroll', function() {
  if(pageYOffset > 0){
    document.querySelector('.main---header .container').classList.add('scrol');
    document.querySelector('.main---header').classList.add('scrol-header');
  }else{
    document.querySelector('.main---header .container').classList.remove('scrol');
    document.querySelector('.main---header').classList.remove('scrol-header');
  }
  // console.log(pageYOffset + 'px');
});
///////////
$('.carousel').carousel({
    interval: false
  })