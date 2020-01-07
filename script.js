function init() {

    getConfigurazioni();
    console.log("helloworld")
}

$(window).ready(init);

function printConfigurazioni(data) {

     var target = $("#container");

    var template = $("#box-template").html();
    var compiled = Handlebars.compile(template);

    for (var i = 0; i < data.length; i++) {

        var config = data[i];

        var configHTML = compiled(config);

        target.append(configHTML);
    }
}

function getConfigurazioni() {

    $.ajax({

        url: 'getAllConfigurazioni.php',
        method: 'GET',
        success: function (data) {

            printConfigurazioni(data);
        },
        error: function (error) {

            console.log("error", error);
        }
    });
}