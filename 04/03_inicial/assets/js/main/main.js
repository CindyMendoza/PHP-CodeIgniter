function init()
{
    var alertBox = $('.alert-box');
    var url_route = $('#hidRoute').val();
    $(alertBox).hide();
    $('#lnkGetLastChange').click(
        function(evt)
        {
            evt.preventDefault();
            $.ajax({
                type: 'POST',
                data: {},
                url: url_route + "/api/get_last_change/",
                success:    function(data,status,req)
                {

                }
            });

        });
    $('#lnkSelectLanguage').click(
        function(evt)
        {
            evt.preventDefault();
            $.ajax({
                type: 'POST',
                data: { lang:  $('#cmbLanguage').val() },
                url: url_route + "/api/select_language/",
                success:    function(data,status,req)
                {
                    $('#divCalendar').html(data);
                    if( data != '' )
                    {
                        $(alertBox).fadeIn(300);
                        setTimeout(function() {
                            $(alertBox).fadeOut(300);
                        }, 3000);
                    }


                }
            });
        }
    );
}

$( init );
