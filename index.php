<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style/style.css">
    <title>php-crud-read-create-update</title>
</head>

<body>
    
    <form id="myForm">
        <h2>Aggiungi una nuova stanza</h2>
        <label for="title">Titolo:</label>
        <input type="text" name="title" value="nuovo titolo"><br>
        <label for="description">Descrizione:</label>
        <input type="text" name="description" value="nuova descrizione"><br>
        <input type="submit" name="submit" value="nuova configurazione">
    </form>

    <form id="myForm2">
        <h2>Modifica una stanza</h2>
        <label for="title">Titolo:</label>
        <input type="text" name="title" value="nuovo titolo"><br>
        <label for="description">Descrizione:</label>
        <input type="text" name="description" value="nuova descrizione"><br>
        <input type="submit" name="submit" value="modifica configurazione">
    </form>
    
    <div id="container" class="container">
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
        <div class="box">
        <p>{{ title }} </p>
        <p>{{ description }}</p>
    </div>
</script>
    <!-- JS: MY SCRIPT -->
    <script src="script.js"></script>
</body>

</html>