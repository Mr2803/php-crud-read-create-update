<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- CDN BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style/style.css">
    <title>php-crud-read-create-update</title>
</head>

<body>
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-4">
                <h2>Aggiungi nuova configurazione</h2>
                <form id="myForm" class="d-flex flex-column justify-content-between">
                    <div class="global">

                        <label for="title">Titolo:</label>
                        <input type="text" name="title" value=""><br>
                    </div>
                    <div class="global">

                        <label for="description">Descrizione:</label>
                        <input type="text" name="description" value=""><br>
                    </div>
                    <button class="btn btn-primary" type="submit">Nuova configurazione</button>
                </form>
            </div>
            <div class="col-4">
                <h2>Modifica una configurazione</h2>
                <form id="myForm2" class="d-flex flex-column justify-content-between">
                    <div class="global">
                        <label for="title">Titolo:</label>
                        <input type="text" name="title" value=""><br>
                    </div>
                    <div class="global">

                        <label for="description">Descrizione:</label>
                        <input type="text" name="description" value=""><br>
                    </div>
                    <div class="global">

                        <label for="id">ID: </label>
                        <input type="text" name="id">
                    </div>
                    <button class="btn btn-success" type="submit">Aggiorna configurazione</button>
                </form>
            </div>
            <div class="col-4">
                <h2>Elimina una configurazione</h2>
                <form id="myForm3" class="d-flex flex-column justify-content-between">
                    <div class="global">

                        <label for="id">ID: </label>
                        <input type="text" name="id">
                    </div>
                    <button class="btn btn-danger" type="submit">Elimina configurazione</button>
                </form>
            </div>
        </div>
    </div>
    <div id="global_container">
    </div>


    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

    <!-- JS: CHART-JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="box-template" type="text/x-handlebars-template">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">TITOLO</th>
            <th scope="col">DESCRIZIONE</th>
            </tr>
        </thead>
        <div class="box">
        <tbody>
            <tr>
            <th scope="row">[{{ id }}] </th>
            <td>{{ title }}</td>
            <td>{{ description }}</td>
            </tr>
            
        </tbody>
        </table>

        </script>
    <!-- JS: MY SCRIPT -->
    <script src="script.js"></script>
</body>

</html>