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
<?php
require_once __DIR__."/modules/run.php";
$tableData = array('name' => '', 'username' => '', 'phone' => '', 'email' => '');
$formValues = array('name' => '', 'username' => '', 'phone' => '', 'email' => '');
$error = null;
if($_POST){
	foreach($_POST as $key => $value){
		$data[$key] = htmlspecialchars($value);
	}
	$data['phone'] = str_replace(' ','',$data['phone']);
	$username = validate($data['username']);
	$email = validate($data['email']);
	if(!(validate($data['name']) && validate($data['username']) && validate($data['password']))){
		$requiredFields = ((validate($data['name'])) ? 0 : 1) + ((validate($data['username'])) ? 0 : 2) + ((validate($data['username'])) ? 0 : 4);
		$error = 'Nebyly vyplněny všechny povinné položky.';
	}elseif(!(strlen($data['password']) >=6 && validate($data['password'])['isText'])){
		$error = 'Heslo musí obsahovat alespoň 6 znaků.';
	}elseif(!($username['isText'] || $username['hasNumber'])){
		$error = 'Neplatné uživatelské jméno.';
	}elseif(!$email['isEmail'] && $email){
		$error = 'Neplatný email.';
	}else{
		$tableData = $data;
		$phoneData = validate($data['phone']);
		if($phoneData){
			$error = ($phoneData['length'] == 9 && $phoneData['isNumber']) ? '' : 'Neplatné telefonní číslo.';
		}
	}
}else{
	$data['name'] = $data['username'] = $data['phone'] = $data['email'] = '-';
}
?>
<div class="container">
    <div class="jumbotron">
        <h1>Jindrova školka – Lekce 5</h1>
        <p><strong>PHP - Ošetření vstupu II.</strong></p>
        <div class="row">
            <div class="col-sm-12">
                <h3>Odeslaná data</h3>
                <table class="table table-bordered">
                    <tr>
                        <th style="width:20%">Jméno</th>
                        <td><?=$tableData['name']?></td>
                    </tr>
                    <tr>
                        <th>Uživatelské jméno</th>
                        <td><?=$tableData['username']?></td>
                    </tr>
                    <tr>
                        <th>Telefon</th>
                        <td><?=$tableData['phone']?></td>
                    </tr>
                    <tr>
                        <th>E-mail</th>
                        <td><?=$tableData['email']?></td>
                    </tr>
                </table>
            </div>
        </div>

        <h3>Formulář</h3>
		<?php
		if($error){
			$formValues = $data;
			?>
		    <div class="alert alert-danger">
				<?=$error?>
			</div>	
			<?php
		}
		?>
        <form action="" method="post">
            <div class="form-group <?=($requiredFields & 1) ? 'has-error' : ''?>">
                <label for="name">Jméno *</label>
                <input type="text" class="form-control" name="name" required value="<?=$formValues['name']?>">
            </div>
            <div class="form-group <?=($requiredFields & 2) ? 'has-error' : ''?>">
                <label for="username">Uživatelské jméno *</label>
                <input type="text" class="form-control" name="username" required value="<?=$formValues['username']?>">
            </div>
            <div class="form-group <?=($requiredFields & 4) ? 'has-error' : ''?>">
                <label for="password">Heslo *</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefon</label>
                <input type="text" class="form-control" name="phone" value="<?=$formValues['phone']?>">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" name="email" value="<?=$formValues['email']?>">
            </div>
            <input type="submit" name="submit" value="Odeslat" class="btn btn-primary">
        </form>
    </div>
</div>
</body>
</html>