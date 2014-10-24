
	var click = function(e) {
		e.preventDefault();

		if (document.body.getAttribute('class') == null) {
			document.body.setAttribute('class', 'with--sidebar');
		} else {
			document.body.removeAttribute('class');
		}
	};

	document.querySelector('#header__icon').onclick = click;
	document.querySelector('#site-cache').onclick = click;