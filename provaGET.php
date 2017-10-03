<!doctype html>
<html>
<head>
<title>Registrazione utente</title>
</head>
<body>
<h2>Conferma registrazione</h2>
<hr />
<?php
$nome = $_GET["nome"];
$cognome = $_GET["cognome"];
$email = $_GET["email"];
echo "La richiesta di $nome $cognome è stata registrata. <br />";
echo "con l'indirizzo di posta elettronica $email. <br />";
echo "La richiesta di accesso è arrivata <br />";
echo "alle ore", date("H:i:s"), "del giorno: ", date("d-m-y");
?>
</body>
</html>