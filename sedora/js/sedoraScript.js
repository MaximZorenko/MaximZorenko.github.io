(function(){
	var ul = document.querySelector('.sedora--header__navContainer ul'),
			menu = document.querySelector('.sedora--header__menu'),
			icon = document.getElementsByClassName('sedoraI');
	var clickMenu = function(){
		ul.classList.toggle('open');
		for(var i = 0 ; i < icon.length; i++){
			icon[i].classList.toggle('closse');
		}
	};
	menu.addEventListener('click',clickMenu);
})();