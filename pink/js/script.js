(function(){
	//
	// debugger;
	var aHref = document.getElementsByTagName('a');
	for(var i = 0; i < aHref.length; i++){
		aHref[i].addEventListener('click',function(evt){
			evt.preventDefault();
		});
	}
	//
	var Wrapper = document.getElementsByClassName('menu--wrapper')[0];
	var Menu = document.getElementsByClassName('pink-header__menu')[0];
	function func(e){
		if(e.matches){
			Menu.addEventListener('mouseover',showMenu,false);
			Menu.addEventListener('mouseout',showMenu,false);
			function showMenu(event){
				if(event.type == 'mouseover'){
					Wrapper.style.display = 'block';
					// Wrapper.style.transform = 'scale(1)';
				}
				if(event.type == 'mouseout'){
					Wrapper.style.display = 'none';
					// Wrapper.style.transform = 'scale(0)';
				}
			}
		}else{
			Menu.removeEventListener('mouseover',showMenu,false);
			Menu.removeEventListener('mouseout',showMenu,false);
		}
	}
	func(window.matchMedia('(max-width:1200px)'));
	window.matchMedia('(max-width: 1200px)').addListener(func);
	////////////////////////////////////////////////////

	var btn = document.getElementsByClassName('btn');
	btn = Array.prototype.slice.call(btn);
	btn.forEach(function(elem){
		elem.addEventListener('click',showBtn);
	});
	function showBtn(event){
		var addDiv = document.createElement('div');
		// var addDiv = document.getElementsByClassName('pulse2')[0];
		addDiv.classList.add('pulse');
		
		var Rect = this.getBoundingClientRect();
		var value = Math.max(this.clientHeight,this.clientWidth);
		addDiv.style.height = value +'px';
		addDiv.style.width = value + 'px';
		var Top = event.clientY - Rect.top - value/2;
		var Left = event.clientX - Rect.left - value/2;
		addDiv.style.top = Top + 'px';
		addDiv.style.left = Left + 'px';


		this.appendChild(addDiv);

	}
		
	//////////////////////////////////////////////////////slider
	var w = 0,
	slider = document.getElementsByClassName('slider')[0],
	arrowLeft = document.getElementsByClassName('arrow')[0],
	arrowRight = document.getElementsByClassName('arrow')[1],
	list = document.getElementsByClassName('list'),
	indic = document.getElementsByClassName('indic');
	showList();
	arrowRight.addEventListener('click',function(){
		w++;
		showList();
	});
	arrowLeft.addEventListener('click',function(){
		w--;
		showList();
	});
	for(let i = 0; i < indic.length; i++){
		indic[i].addEventListener('click', function(){
			w = i;
			showList();
		});
	}
	//карасель
	function showList(){
		if(w > list.length-1){w = 0;}
		if(w < 0){w = list.length-1;}
		for( let i = 0; i < list.length; i++ ){
			list[i].style.left = '100%';
			list[i].style.zIndex = '0';
		}
		for(let i = 0; i < indic.length; i++){
			indic[i].style.backgroundColor = '#bec2c7';
			indic[i].style.boxShadow = 'none';
		}
		indic[w].style.backgroundColor = '#fff';
		indic[w].style.boxShadow = '0 0 0 5px black';
		list[w].style.left = '0';
		list[w].style.zIndex = '2';
		var y = w - 1;
		if(y < 0){y = list.length-1;}
		list[y].style.left = '-100%';
	}

	//затухание
	// function showList(){
	// 	if(w > list.length-1){w = 0;}
	// 	if(w < 0){w = list.length-1;}
	// 	for( let i = 0; i < list.length; i++ ){
	// 		list[i].style.opacity = '0';
	// 	}
	// 	for(let i = 0; i < indic.length; i++){
	// 		indic[i].style.backgroundColor = '#ccc';
	// 	}
	// 	list[w].style.opacity = '1';
	// 	indic[w].style.backgroundColor = 'red';
	// }
	////////

	(function(){
		//debugger;
		var table = document.querySelector('.table--price');
		var indicator = document.getElementsByClassName('price--indic');
		indicator[1].style.boxShadow = '0 0 0 8px #d22856';
		var indicShow = function(a){
			indicator[a].addEventListener('click',function(){
				if(a === 0){table.style.left = '0';}
				else if (a === 1){table.style.left = '-154px';}
				else if(a === 2){table.style.left = '-308px';}
				for(var i = 0; i < indicator.length; i++){
					indicator[i].style.boxShadow = 'none';
				}
				indicator[a].style.boxShadow = '0 0 0 8px #d22856';
			});
		};
		for(var i = 0; i < indicator.length; i++){
			indicShow(i);
		}
	})();
	


///////////////////////////POPAP///////////
(function(){
	var popap = document.querySelector('.pink__login'),
		close = document.querySelector('.pink__login-close'),
		open = document.querySelector('.menu--wrapper .menu--imput:nth-child(1)'),
		overlay = document.querySelector('.pink__overlay');
		var showPopap = function(){
			overlay.classList.toggle('close');
			popap.classList.toggle('close');
		};
	open.addEventListener('click',showPopap);
	close.addEventListener('click',showPopap);

	})();
///////











})();








