<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

/* 
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).

Classi:
- Product
- User
- Credit card
*/

include_once __DIR__ . '/traits/ProductSeason.php';
include_once __DIR__ . '/User.php';
include_once __DIR__ . '/RegisteredUser.php';
include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/CreditCard.php';

$user1 = new User();
$user2 = new RegisteredUser();
$creditCard1 = new CreditCard('1234567890', 542, '10/25');
$mangime = new Product();

echo "<pre>";
var_dump($user1);
var_dump($user2);
var_dump($creditCard1);

$mangime->getStatus();

?>
    
</body>
</html>