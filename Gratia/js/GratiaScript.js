//////menu
(function(){
	var menu = document.querySelector('.gratia--header__logo'),
			ul = document.querySelector('.gratia--header__nav ul');
	var showMenu = function(){
		ul.classList.toggle('open');
	};
	menu.addEventListener('click',showMenu);
})();
//////////////////////////////////////
/////////slider
(function(){
	var list = document.getElementsByClassName('gratia--header__slider--list'),
			left = document.querySelector('.gratia--header__slider--scrolLeft'),
			right = document.querySelector('.gratia--header__slider--scrolRight'),
			indicators = document.querySelectorAll('.gratia--header__slider--indicators span'),
			x = 0;
	var showList = function(b){
		if(x < 0){x = list.length-1;}
		if(x > list.length-1){x = 0;}
		for(var i = 0; i < list.length; i++){
			list[i].style.opacity = '0';
		}
		list[x].style.opacity = '1';
		(function(){
			for(var i = 0; i < indicators.length; i++){
				indicators[i].classList.remove('indicatorActive');
			}
		})();
		indicators[x].classList.toggle('indicatorActive');
	};
	showList();
	left.addEventListener('click',function(){
		x--;
		showList();
	});
	right.addEventListener('click',function(){
		x++;
		showList();
	});
	var showIndicator = function(a){
		indicators[a].addEventListener('click',function(){
			x = a;
			showList();
		});
	
	};
	(function(){
		for(var i = 0; i < indicators.length; i++){
			showIndicator(i);
		}
	})();
})();
////////////////////////////////////////////////////////////////////////////////////////