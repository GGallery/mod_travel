<!--    SEARCH -->
<div class="">
    <input id="search_header" class="form-control " type="text" placeholder="cerca...">
    <div id="result_header"></div>
</div>

<script>


    $( "#result_header" )
        .on( "mouseleave", function() {
            $('#result_header').html("");
            console.log('exit');
        });


    $('#search_header').on('input', function() {

        if($('#search_header').val().length < 3){
            $('#result_header').html("");
        }
        else {
            $.post("index.php?option=com_travel&task=api.search", {search: $('#search_header').val()})
                .done(function (data) {
                    $('#result_header').html("");
                    var results = JSON.parse(data);
                    $.each(results, function(item) {
                        var singleTravel = '<div class="result-travel-h">' +
                            '<div class="result-image-h"><img width="40px" height="30px" src="/images/storage/_travel/'+ results[item].cover +'"></div>' +
                            '<div class="result-text-h text-left">' +
                            '<a href="/home/travel/'+ results[item].alias +'">'+ results[item].title +'</a>' +
                            '</div>' +
                            '</div>';
                        $('#result_header').append(singleTravel);

                    });

                },"json");
        }

    })

</script>