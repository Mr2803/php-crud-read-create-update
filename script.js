function reset() {

    var target = $("#container");
    target.html('');
}


function printConfigurazioni(data) {

    reset();
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

function putNewConfigurazione() {

    var me = $(this);
    $.ajax({

        url: "putNewConfigurazione.php",
        method: "POST",
        data: me.serialize(),
        success: function (data) {
            if (data) {

                getConfigurazioni(data);
            }
        },
        error: function (error) {

            console.log("error", error);
        }
    });

    return false;
}

function updateConfigurazione() {

    var me = $(this);
    $.ajax({

        url: "updateConfigurazione.php",
        method: "POST",
        data: me.serialize(),
        success: function (data) {
            if (data) {

                getConfigurazioni(data);
            }
        },
        error: function (error) {

            console.log("error", error);
        }
    });

    return false;
}

function init() {

    getConfigurazioni();
    $("#myForm").submit(putNewConfigurazione);
    $("#myForm2").submit(updateConfigurazione);
}
$(window).ready(init);

