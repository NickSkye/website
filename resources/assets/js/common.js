import AOS from 'aos';
$('[data-expand-target]').click(function (e) {
	e.preventDefault();

	const $this = $(this);
	const target = $this.data('expandTarget');
	console.log(`[data-expand="${target}"]`);

	$(`[data-expand="${target}"]`).slideToggle('fast');
});

$('.link').click(function(){
    var id = $(this).attr("rel");

    $('#'+id).toggleClass('showit');
});


//video
$(function() {
    $(".video").click(function () {
        var theModal = $(this).data("target"),
            videoSRC = $(this).attr("data-video"),
            videoSRCauto = videoSRC ; //+ "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1"
        $(theModal + ' iframe').attr('src', videoSRCauto);
        $(theModal + ' button.close').click(function () {
            $(theModal + ' iframe').attr('src', videoSRC);
            window.location.href = "http://carpark.wollnerstudios.com/clientvalues";
        });
    });
});



$('.showmorebutton').click(function(){

    AOS.refresh();
    if ($('.showmorecontent').hasClass('showing')){
        $('.showmorecontent').removeClass('showing');
        if(document.location.pathname === '/about') {
            document.getElementById("morebios").innerHTML = "SEE OUR TEAM BIOS ";

        }
        else if(document.location.pathname === '/solutions'){
            document.getElementById("moresolutions").innerHTML = "SEE ALL SOLUTIONS";
        }
        else if(document.location.pathname === '/segments'){
            document.getElementById("moresegments").innerHTML = "See All Our Segments Here";
        }
        else{
            document.getElementById("demo").innerHTML = "Read More";
        }
       // document.getElementById("morebios").innerHTML = "SEE OUR TEAM BIOS";

    }
    else {

        $('.showmorecontent').addClass('showing');


        if(document.location.pathname === '/about') {
            document.getElementById("morebios").innerHTML = "Read Less";
        }
        else if(document.location.pathname === '/solutions'){
            document.getElementById("moresolutions").innerHTML = "Read Less";
        }
        else if(document.location.pathname === '/segments'){
            document.getElementById("moresegments").innerHTML = "Read Less";
        }
        else{
            document.getElementById("demo").innerHTML = "Read Less";
        }

    }
    // $('.showmorecontent').toggleClass('showing');

});


// $(function () {
//     $('.animated').addClass('activated');
// });


//BIOS

$( "#bioimg1" ).click(function() {
    $('#bio1').addClass('activated');
});

$( "#bio1" ).click(function() {
    $('#bio1').removeClass('activated');
});



$( "#bioimg2" ).click(function() {
    $('#bio2').addClass('activated');
});

$( "#bio2" ).click(function() {
    $('#bio2').removeClass('activated');
});

$( "#bioimg3" ).click(function() {
    $('#bio3').addClass('activated');
});

$( "#bio3" ).click(function() {
    $('#bio3').removeClass('activated');
});

$( "#bioimg4" ).click(function() {
    $('#bio4').addClass('activated');
});

$( "#bio4" ).click(function() {
    $('#bio4').removeClass('activated');
});

$( "#bioimg5" ).click(function() {
    $('#bio5').addClass('activated');
});

$( "#bio5" ).click(function() {
    $('#bio5').removeClass('activated');
});

$( "#bioimg6" ).click(function() {
    $('#bio6').addClass('activated');
});

$( "#bio6" ).click(function() {
    $('#bio6').removeClass('activated');
});

$( "#bio7" ).click(function() {
    $('#bio7').removeClass('activated');
});
$( "#bioimg7" ).click(function() {
    $('#bio7').addClass('activated');
});

//END BIOS

$(function () {
    $('.animated').addClass('activated');
});



function myFunction() {
    if ($('#b0').hasClass('showit')) {
        $('#b0').removeClass('showit');
//            This gives time between one closing and one opening
        setTimeout(function () {
            //$('#pop').toggleClass('show');
            $('#b1').removeClass('showit');

        }, 500);
    } else {
        $('#b1').toggleClass('showit');
    }


}

function myFunction2() {
    if ($('#b1').hasClass('showit')) {
        $('#b1').removeClass('showit');
//            This gives time between one closing and one opening
        setTimeout(function () {
            //$('#pop').toggleClass('show');
            $('#b0').removeClass('showit');

        }, 500);
    } else {
        $('#b0').toggleClass('showit');
    }


}