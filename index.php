<?php 
$amount = filter_input(INPUT_POST, 'amount');
$finalamount = 0 ;
define('EUR_CZK', 25);
$sub = filter_input(INPUT_POST, 'odeslat');
$switch =  filter_input(INPUT_POST, 'switch');
$convertfrom;
$convertto;
$text = "Převod proběhnul : " ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Převod</title>
</head>
<body>
<br>
<?php
if (isset($sub)) {
    switch ($switch) {
    case 'czk_eur': 
        $finalamount = $amount / EUR_CZK ;
        $convertfrom = " CZK " ;
        $convertto = " EUR " ;
        break;
    case 'eur_czk': 
        $finalamount = $amount * EUR_CZK ;
        $convertfrom = " EUR " ;
        $convertto = " CZK " ;
        break;                    }

$all =$text . $amount . $convertfrom . " = " . $final . $convertto ?>
<?= $all ?>
<?php
} else { ?>
<form action="index.php" method="post">
<br>
<h1>Převod</h1> <br> 
<label for="castka">Částka:</label> 
<input type="number" id="castka" name="castka"> <br> 
<label for="radio">Převod:</label> <input type="radio" id="euranakoruny" name="prachy" value="eur_czk"> 
<label for="euranakoruny">Eura na Koruny</label> <br>
<input type="radio" id="korunynaeura" name="prachy" value="czk_eur"> 
<label for="korunynaeury">Koruny na Eura</label><br> 
<br>
<input type= "
submit" value="Odeslat" name="submit">
</form>
<?php
} ?>
</body>