require('./bootstrap');
import AOS from 'aos';
$(function () {
	require('./modules/navigation');
	require('./modules/video');
	require('./modules/animations');
	require('./common');

    AOS.init({
        offset: 200,
        duration: 600,
        easing: 'ease-in-sine',
        delay: 100,
    });

});

AOS.init({
    offset: 200,
    duration: 600,
    easing: 'ease-in-sine',
    delay: 100,
});
