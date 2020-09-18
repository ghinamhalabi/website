/*
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function ($) {

    var $window = $(window),
        $body = $('body');

    // Breakpoints.
    breakpoints({
        xlarge: ['1281px', '1680px'],
        large: ['981px', '1280px'],
        medium: ['737px', '980px'],
        small: [null, '736px']
    });

    // Play initial animations on page load.
    $window.on('load', function () {
        window.setTimeout(function () {
            $body.removeClass('is-preload');
        }, 100);
    });

    // Dropdowns.
    $('#nav > ul').dropotron({
        mode: 'fade',
        noOpenerFade: true,
        alignment: 'center',
        detach: false
    });

    // Nav.

    // Title Bar.
    $(
        '<div id="titleBar">' +
        '<a href="#navPanel" class="toggle"></a>' +
        '<span class="title">' + $('#logo h1').html() + '</span>' +
        '</div>'
    )
        .appendTo($body);

    // Panel.
    $(
        '<div id="navPanel">' +
        '<nav>' +
        $('#nav').navList() +
        '</nav>' +
        '</div>'
    )
        .appendTo($body)
        .panel({
            delay: 500,
            hideOnClick: true,
            hideOnSwipe: true,
            resetScroll: true,
            resetForms: true,
            side: 'left',
            target: $body,
            visibleClass: 'navPanel-visible'
        });

    /** symaticsolutions.com */
    $(document).ready(function(){
        if($('#contact-form').length >0){
            $('#contact-form').validate({
                submitHandler: function(form) {
                    var name = $('#contact-name').val();
                    var email = $('#contact-email').val();
                    var message = $('#contact-message').val();

                    $.post('PHPMailer/sendmail.php', {name:name, email:email, message:message}, function(response){
                        try {
                            data = JSON.parse(response);
                            if(data.success == 1){
                                $('.contact-submit-message').show().text(data.msg).addClass('success').removeClass('error');
                            }else{
                                $('.contact-submit-message').show().text(data.msg).addClass('error').removeClass('success');
                            }
                        }
                        catch (e) {
                            $('.contact-submit-message').show().text(response).addClass('error').removeClass('success');
                        }

                        setTimeout(function(){
                            $('.contact-submit-message').hide('slow').removeClass('error success').text('');
                        },10000);
                    })
                }
            });
        }
    });

})(jQuery);