// Menu Header
(()=>{

	let menu = document.querySelector('.iglesiass__header-navTop'),
			button = document.querySelector('.iglesiass__header-button'),
			button_menu = document.querySelector('.iglesiass__header-button .menu'),
			button_x = document.querySelector('.iglesiass__header-button .x');

	button.addEventListener('click',()=>{

		menu.classList.toggle('open');
		button_menu.classList.toggle('open');
		button_x.classList.toggle('open');
	});

})()