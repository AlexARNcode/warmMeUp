$(function() {
    // Button click
    $("#btn").click(function() {
        event.preventDefault();

        // Get input field
        var userWorkLoadInput = $("#userWorkLoad");

        // Build spme request parameters
        var params = {
            userWorkLoad: userWorkLoadInput.val()
        };

        // And send POST request with those parameters
        $.post("src/warmup.php", params, function(response) {
            // Response text we're going to put into the `output`
            $("#output").html(response);

        });
    });
});