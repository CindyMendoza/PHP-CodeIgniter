function init()
{
    var alertBox = $('.alert-box');
    var url_route = $('#hidRoute').val();
    //$(alertBox).hide();

    function add_click_event_to_forms()
    {
        $('.lnkModify').click(
            function(evt)
            {
                evt.preventDefault();
                var form_data = $(this).closest('form').serialize();
                $.ajax({
                    type: 'POST',
                    data: form_data,
                    dataType: 'text',
                    url: url_route + "/main/modify_article/",
                    success:    function(data,status,req)
                    {
                        //console.log(data);
                        $('.mod-close').trigger('click');
                        get_articles();

                    }
                });
            }
        );
    }

    function get_articles()
    {
        $.ajax({
            type: 'GET',
            dataType: 'text',
            url: url_route + "/main/get_articles/",
            success:    function(data,status,req)
            {
                $('#divArticles').html(data);
                add_click_event_to_forms();
            }
        });
    }

    $('#lnkAdd').click(
        function( evt )
        {
            evt.preventDefault();
            var form_data = $(this).closest('form').serialize();
            $.ajax({
                type: 'POST',
                data: form_data,
                dataType: 'text',
                url: url_route + "/main/add_article/",
                success:    function(data,status,req)
                {
                    $('#lnkCloseAddModal').trigger('click');
                    get_articles();

                }
            });

        }
    );

    get_articles();
   //add_click_event_to_forms();


}

$( init );
