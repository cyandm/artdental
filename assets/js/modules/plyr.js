import Plyr from 'plyr';

function setupPlyr() {
	const plyrVideoGroup = document.querySelectorAll('.plyr-video');

	plyrVideoGroup.forEach((video) => {
		const player = new Plyr(video);
	});
}

setupPlyr();
