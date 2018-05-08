<!--    SEARCH -->
<div class="ontop center">
    <input id="search" class="mainsearch form-control form-control-lg" type="text" placeholder="next travel? ">
    <div id="result"></div>
</div>

<script>
    $('#search').on('input', function() {

        if($('#search').val().length < 3){
            $('#result').html("");
        }
        else {
            $.post("index.php?option=com_travel&task=api.search", {search: $('#search').val()})
                .done(function (data) {
                    $('#result').html("");
                    var results = JSON.parse(data);
                    $.each(results, function(item) {
                        var singleTravel = '<div class="result-travel">' +
                            '<div class="result-image"><img width="150px" src="/images/storage/_travel/'+ results[item].cover +'"></div>' +
                            '<div class="result-text text-left">' +
                            '<h2><a href="/hometravel/travel/'+ results[item].alias +'">'+ results[item].title +'</a></h2>' +
                            '<span>'+ results[item].description.substring(0, 250) +'...</span>' +
                            '</div>' +
                            '</div>';
                        $('#result').append(singleTravel);

                    });

                },"json");
        }

    })

</script>