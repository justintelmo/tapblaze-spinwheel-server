$(document).ready(function($) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
        }
    });
    
    $("#update-weights-btn").on('click', function(e) {
        e.preventDefault();
        var weightData = [];
        $("tr[class*='item_']").each(function(e) {
            var id = $(this).children("th").children("input").eq(0).val();
            var itemType = $(this).children("td").eq(0).children("input").eq(0).val();
            var value = $(this).children("td").eq(1).children("input").eq(0).val();
            var weight = $(this).children("td").eq(2).children("input").eq(0).val();

            weightData.push({"id": id, "item_type": itemType, "value": value, "weight": weight});
        });

        console.log(weightData);
        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            url: "/api/wheel_items",
            data: {"data": weightData},
            success: function (response) {
                alert("Successfully updated weights!");
                window.location.reload();
            },
            error: function() {
                console.log("An error has occurred");
            }

        });
    });
});
