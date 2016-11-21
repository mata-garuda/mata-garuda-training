$(document).ready(function () {

    /**
     * Handler action submit login
     */

    $('#auth-generated-form').submit(function(event) {

        $('.auth-overlay').show();
        $('.preloader').velocity({ opacity: 1 }, "easeInOutBack", { duration: 1000});

        $.post(event.target.action, $(this).serializeArray(),
        function( data ) {

            $('.auth-overlay').hide();
            $('.preloader').velocity({ opacity: 0 }, "easeInOutBack", { duration: 1000});

            if(data.status_code != undefined) {

                if(data.status_code == 1) {
                    $('#auth-animation-container')
                        .velocity({ 'margin-bottom': '100px' }, "easeInOutBack", { duration: 500})
                        .velocity({ 'margin-bottom': '-300', opacity: 0 }, "easeInOutBack", { duration: 500});

                    setTimeout(function () {
                        $('.auth-overlay').show();
                        $('.preloader').velocity({ opacity: 1 }, "easeInOutBack", { duration: 1000});
                    }, 600);

                    setTimeout(function () {
                        window.location.href = $('#auth-generated-form').attr('redirect') + "?source_id=" + data.token;
                    }, 1000);
                }
                else {
                    $('.auth-message-text').html("<b>Message!</b> " + data.message);

                    $('.auth-message').show();
                    $('.auth-message').velocity({ top: '100px;' }, "easeInOutBack", { duration: 1000});

                    setTimeout(function () {
                        $('.auth-message').velocity({ top: '-200px;' }, "easeInOutBack", { duration: 1000});
                    }, 3000)
                }

            }

        });

        event.preventDefault();
    });
    
    $('.auth-btn-close-danger').click(function () {
        $('.auth-message').velocity({ top: '-200px;' }, "easeInOutBack", { duration: 1000});
    })

    /**
     * This script used to animate page login
     */

    $(".auth-icon").velocity({ 'margin-top': '80px' }, "easeInOutBack", { duration: 250 });

    function removeOverflow() {
        $("#auth-form").attr("class", "auth-form");
    }

    function showWaiting() {
        $("#wait-loader").show();
    }

    function showForm() {

        $(".auth-icon").velocity({ 'margin-top': '0px' }, "easeInOutBack", { duration: 250 });

        $("#wait-loader").velocity({ opacity: 0 }, "easeInOutBack", { duration: 0 }).remove();
        $("#auth-animation-content")
            .velocity({ 'left': '-400px', opacity: 0 }, "easeInOutBack", { duration: 250 })
            .velocity({ 'left': '0px', opacity: 1 }, "easeInOutBack", { duration: 250 });

    }

    setTimeout(showWaiting, 350);
    setTimeout(showForm, 1500);
    setTimeout(removeOverflow, 2500);

})