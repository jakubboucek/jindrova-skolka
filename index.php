<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">

    <title>Jindrova školka PHP</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
          integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"
          integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1>Jindrova školka – Lekce 1</h1>
        <p><strong>Git, první commit</strong></p>
        <div class="row">
            <div class="col-sm-12">
                <h3>Zadání</h3>

            </div>
        </div>

        <form action="" method="post">
            <div class="form-group">
                <label for="name">Jméno</label>
                <input type="text" class="form-control" name="name" value="">
            </div>
            <div class="form-group">
                <label for="username">Uživatelské jméno</label>
                <input type="text" class="form-control" name="username" id="username"
                       value="" autocomplete="username">
            </div>
            <div class="form-group">
                <label for="password">Heslo</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
                <label for="phone">Telefon</label>
                <input type="text" class="form-control" name="phone" value="">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" name="email" value="">
            </div>
            <input type="submit" name="submit" value="Registrovat se" class="btn btn-primary">
        </form>
    </div>
</div>
</body>
</html>