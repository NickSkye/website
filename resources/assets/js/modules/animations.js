let $activateable = $('.animate-enter');
let timeout = null;

activateVisibleElements($activateable);

// if ($(window).scrollTop() < 100) {
//     activateVisibleElements($activateable.filter('.allow-activate-on-load'));
// }
// else {
//     activateVisibleElements($activateable);
// }

$(document).scroll(function () {
	if (timeout) clearTimeout(timeout);

	setTimeout(() => {
		activateVisibleElements($activateable);
	}, 100);
});

function activateVisibleElements($elements) {
	let i = 0;

	$elements.filter(':not(.activated)').each(function () {
		if (isElementInViewport(this)) {
			setTimeout(() => {
				$(this).addClass('activated');
			}, i * 250);
			i++;
		}
	});
}

function isElementInViewport(el) {
	if (typeof jQuery === "function" && el instanceof jQuery) {
		el = el[0];
	}

	let rect = el.getBoundingClientRect();

	return (
		rect.bottom >= 0 &&
		rect.top <= (window.innerHeight || document.documentElement.clientHeight)
	);
}