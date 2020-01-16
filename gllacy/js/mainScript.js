(function(){
//открытие попапа
	// debugger;
(function(){
	var button = document.getElementsByClassName('header--btn'),
			forms = document.forms;

	var showPopap = function(a){
		button[a].addEventListener('click',function(){
			forms[a].classList.toggle('open');
			document.addEventListener('keydown',function(evt){
				if(evt.keyCode === 27){
					forms[a].classList.remove('open');
				}
			});
		});
	};
	for(var i = 0; i < button.length; i++){
		showPopap(i);
	}
})();	


//////////////slider///////////////////
(function(){
	var slid = document.getElementsByClassName('header__slider--list'),
			indicators = document.getElementsByClassName('slider--indicator');
			btn = document.querySelectorAll('.header__slider--list .btn');
	var showSlid = function(y){
		indicators[y].addEventListener('click',showIndic);
		function showIndic(a){
			a = y;
			for(var i = 0; i < slid.length; i++){
				slid[i].style.opacity = '0';
				indicators[i].style.backgroundColor = 'transparent';
				indicators[i].style.boxShadow = 'none';
				btn[i].style.zIndex = '1';
			}
			slid[a].style.opacity = '1';
			indicators[a].style.backgroundColor = '#fff';
			indicators[a].style.boxShadow = '0 0 10px #fff';
			btn[a].style.zIndex = '11';
			if(a === 0){document.getElementsByTagName('BODY')[0].style.backgroundColor = '#849d8f';}
			else if (a === 1){document.getElementsByTagName('BODY')[0].style.backgroundColor = '#8996a6';}
			else if (a === 2){document.getElementsByTagName('BODY')[0].style.backgroundColor = '#9d8b84';}
		}
		
	};
	for(var i =0; i < indicators.length; i++){
		showSlid(i);
	}
})();

(function(){
	var logo = document.querySelector('.gllacy--header__navigation--logo'),
			ul = document.querySelector('.gllacy--header__navigation > ul');
			navigation = document.querySelector('.gllacy--header__navigation .gllacy--header__navigation--btn');
logo.addEventListener('click',function(){
	ul.classList.toggle('navigation--open--ul');
	navigation.classList.toggle('open--btn');
});


})();








})();