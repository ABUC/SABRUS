/**
 * Created by Yasmany on 6/24/14.
 */



/**
 * Created by Yasmany on 6/24/14.
 */


// UserType for 'Want-to-be' purpose
// 0 => Host
// 1 => Guest
// 2 => Host-Guest
var user_type = 0;

$(function(){
    /*  Call the scrollspy */
    $('body').scrollspy({ target: '#mynav', offset: 400 })

    /* Refresh the scrollspy */
    $('[data-spy="scroll"]').each(function () {
        var $spy = $(this).scrollspy('refresh')
    })

    $('#contact-id').removeClass('active');
    $('#home-id').addClass('active');

    /*
     if (window.innerWidth <= 480) {
     $('#home-text')[0].innerHTML = $('#home-text')[0].innerHTML.replace(/<.*?>/, ''); // strip all tags **DRAFT**
     }
     */

    /* Change 'active' class to <li> elements in menu */
    $('#main-nav-items li').click(function(){
        $('ul').children().removeClass('active');
        $(this).addClass('active');
    });


    /* Change service description text when mouse click image (for mobile devices) */
    $('#guest-to-eat-col').click(function(){
        $('#service-description-p').text('Guest to eat description Guest to eat description Guest to eat description Guest to eat description Guest to eat description Guest to eat description Guest to eat description Guest to eat description Guest to eat description Guest to eat description');

        $('#guest-to-eat-col').addClass('active');
        $('#host-to-cook-col').removeClass('active');
        $('#where-you-like-col').removeClass('active');
    });

    $('#host-to-cook-col').click(function(){
        $('#service-description-p').text('Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description');

        $('#guest-to-eat-col').removeClass('active');
        $('#host-to-cook-col').addClass('active');
        $('#where-you-like-col').removeClass('active');
    });

    $('#where-you-like-col').click(function(){
        $('#service-description-p').text('Where you like description Where you like description Where you like description Where you like description Where you like description Where you like description Where you like description Where you like description Where you like description Where you like description Where you like description');

        $('#guest-to-eat-col').removeClass('active');
        $('#host-to-cook-col').removeClass('active');
        $('#where-you-like-col').addClass('active');
    });

    /* Change service description text when mouse hover image */
    $('#guest-to-eat-col').hover(function(){
        $('#service-description-p').text('Guest to eat description Guest to eat description Guest to eat description Guest to eat description Guest to eat description Guest to eat description Guest to eat description Guest to eat description Guest to eat description Guest to eat description');

        $('#guest-to-eat-col').addClass('active');
        $('#host-to-cook-col').removeClass('active');
        $('#where-you-like-col').removeClass('active');
    });

    $('#host-to-cook-col').hover(function(){
        $('#service-description-p').text('Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description');

        $('#guest-to-eat-col').removeClass('active');
        $('#host-to-cook-col').addClass('active');
        $('#where-you-like-col').removeClass('active');
    });

    $('#where-you-like-col').hover(function(){
        $('#service-description-p').text('Where you like description Where you like description Where you like description Where you like description Where you like description Where you like description Where you like description Where you like description Where you like description Where you like description Where you like description');

        $('#guest-to-eat-col').removeClass('active');
        $('#host-to-cook-col').removeClass('active');
        $('#where-you-like-col').addClass('active');
    });

    $('#service-description-p').text('Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description Host to cook description');

    /*  Add or Remove 'selected' class in want-to-be images */
    $('#host').click(function(){
        $('#host').addClass('selected');
        $('#guest').removeClass('selected');
        $('#host-guest').removeClass('selected');

        user_type = 0;
    });

    $('#guest').click(function(){
        $('#host').removeClass('selected');
        $('#guest').addClass('selected');
        $('#host-guest').removeClass('selected');

        user_type = 1;
    });

    $('#host-guest').click(function(){
        $('#host').removeClass('selected');
        $('#guest').removeClass('selected');
        $('#host-guest').addClass('selected');

        user_type = 2;
    });

    /*  Post with AJAX user feedback in modal-view to DefaultController getUserFeedbackAction */
    $('#btn-save').click(function(){

        var url = $('#modal-view').attr('data-url');
        var user_from = $('#where-you-from-input').val();

        $.post(url,
            {
                'user_from': user_from,
                'user_type': user_type
            },
            function(response) {
                var json = jQuery.parseJSON(response);
                if(json.code == 200){
                    //do something
                    $('#modal-view').modal('hide');
                }
            }
        );
    });

    /*  Post with AJAX user feedback on contact-form to DefaultController sendUserFeedbackAction */
    $('#btn-send').click(function(){

        var url = $('#contact-form').attr('data-url');
        var name = $('#inputName').val();
        var email = $('#inputEmail').val();

        $.post(url,
            {
                'name': name,
                'email': email
            },
            function(response) {
                var json = jQuery.parseJSON(response);
                if(json.code == 200){
                    //do something
                    $('#where-you-from-input').val('');
                    $('#inputName').val('');
                    $('#inputEmail').val('');

                    $('#host').removeClass('selected');
                    $('#guest').removeClass('selected');
                    $('#host-guest').removeClass('selected');

                    $('#feedback-alert').css('visibility', 'visible');
                    setInterval(function(){
                        $('#feedback-alert').css('visibility', 'hidden');
                    }, 3000);
                }
            }
        );
    });
});

    /* Scroll down from and mile lists in Contact us Section */

//var scroll_amount_from = 0;
//var scroll_amount_mile = 0;
//const offset = 26;

//    $('#scrollup-from').click(function(){
//
//        if ($('#scrolldown-from').css('visibility') == 'hidden') {
//            $('#scrolldown-from').css('visibility', 'visible');
//        }
//
//        scroll_amount_from -= offset;
//        $('#from-list').animate({
//            scrollTop:scroll_amount_from
//        }, 250);
//
//        if (scroll_amount_from - offset < 0){
//            $('#scrollup-from').css('visibility', 'hidden');
//        }
//    });
//
//
//    $('#scrollup-mile').click(function(){
//        if ($('#scrolldown-mile').css('visibility') == 'hidden') {
//            $('#scrolldown-mile').css('visibility', 'visible');
//        }
//
//        scroll_amount_mile -= offset;
//        $('#mile-list').animate({
//            scrollTop:scroll_amount_mile
//        }, 250);
//
//        if (scroll_amount_mile - offset < 0){
//            $('#scrollup-mile').css('visibility', 'hidden');
//        }
//    });
//
//
//    $('#scrolldown-from').click(function(){
//        if ($('#scrollup-from').css('visibility') == 'hidden') {
//            $('#scrollup-from').css('visibility', 'visible');
//        }
//
//        scroll_amount_from += offset;
//        $('#from-list').animate({
//            scrollTop:scroll_amount_from
//        }, 250);
//        if (scroll_amount_from + offset > $('#from-list')[0].scrollHeight - 210){
//            $('#scrolldown-from').css('visibility', 'hidden');
//        }
//    });
//
//
//    $('#scrolldown-mile').click(function(){
//        if ($('#scrollup-mile').css('visibility') == 'hidden') {
//            $('#scrollup-mile').css('visibility', 'visible');
//        }
//
//        scroll_amount_mile += offset;
//        $('#mile-list').animate({
//            scrollTop:scroll_amount_mile
//        }, 250);
//
//        if (scroll_amount_mile + offset > $('#mile-list')[0].scrollHeight - 210){
//            $('#scrolldown-mile').css('visibility', 'hidden');
//        }
//    });
//
//    /* For hover purpose */
//    /*
//     $('#scrollup-from').hover(function(){
//     setInterval(function(){
//     if($('#scrollup-from').is(':hover')){
//     $('#scrollup-from').trigger('click');
//     }
//     }, 100);
//     });
//     */
//
//    /* Select multiple <li> elements in from-list and mile-list*/
//    $('#from-list li').click(function(){
//        if($(this).hasClass('selected')){
//            $(this).removeClass('selected');
//        } else {
//            $(this).addClass('selected');
//        }
//    });
//
//    $('#mile-list li').click(function(){
//        if($(this).hasClass('selected')){
//            $(this).removeClass('selected');
//        } else {
//            $(this).addClass('selected');
//        }
//    });
//
//    $('#btn-send').click(function(){
//        var froms = [];
//        $('#from-list li').each(function() {
//            if ($(this).hasClass('selected')) {
//                froms.push($(this).text());
//            }
//        });
//
//        var miles = [];
//        $('#mile-list li').each(function() {
//            if ($(this).hasClass('selected')) {
//                miles.push($(this).text());
//            }
//        });
//
//        $('input[name="user-from"]').attr('value',froms);
//        $('input[name="user-miles"]').attr('value',miles);
//    });
//});