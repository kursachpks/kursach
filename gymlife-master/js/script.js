
function init() {
	let map = new ymaps.Map("map-test", {
		center: [48.8866527839977,2.34310679732974],
		zoom: 17
	});
}

ymaps.ready(init);