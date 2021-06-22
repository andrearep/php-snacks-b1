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
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60*/

$matches = [
    [
        'home_team'=>'Toronto',
        'away_team'=>'Chicago',
        'home_points'=> 98,
        'away_points'=> 96
    ],
    [
        'home_team'=>'Brooklyn',
        'away_team'=>'Los Angeles',
        'home_points'=> 104,
        'away_points'=> 79
    ],
    [
        'home_team'=>'Golden State',
        'away_team'=>'Utah',
        'home_points'=> 89,
        'away_points'=> 98
    ],
    [
        'home_team'=>'San Antonio',
        'away_team'=>'New Orleans',
        'home_points'=> 78,
        'away_points'=> 86
    ]
];

echo "<h1> snack 1</h1>";

 foreach($matches as $match){
    echo "<p>" . $match['home_team'] . " - " . $match['away_team'] . " | " . $match['home_points'] . "-" . $match['away_points'] . "</p>";  

 };

 

/*
Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/
echo "<h1> snack 2</h1>";
?>
<form action="" method="get">
    <input type="text" name="name"> <br>
    <input type="text" name="mail"> <br>
    <input type="number" name="age"> <br>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
$name= $_GET['name'];
$mail = $_GET['mail'];
$age= $_GET['age'];


if(strlen($name)>2 && strpos($mail, '@') && strpos($mail, '.')){
    echo "Accesso riuscito";
};
/*Snack 
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z */
/*Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta*/


/*Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.*/


/*Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.*/


/*Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.*/


?>
    
</body>
</html>


