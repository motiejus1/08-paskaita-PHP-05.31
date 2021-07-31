<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08 paskaita</title>
</head>
<body>

<form action="index.php" method="get">
    <input type="text" name="elementas" />
    <button type="submit" name="patvirtinti">Patvirtinti</button>
</form>
    <?php 
    
//1. Sukurkite funkciją, kurią iškvietus, masyvą galima papildyti norimu elementu. 
// Masyvas išsaugomas į COOKIE.
//Informacija paimama iš input laukelio. Funkcija iškviečiama paspaudus mygtuką.
    function pridetiElementa() {
        if(isset($_GET["elementas"]) && !empty($_GET["elementas"])) {
            $elementas = $_GET["elementas"];
            
            //neturetu buti tuscias. T.y. jisai tuscias tik tol kol nera sausainiuko,
            //kai sausainiukas yra, sitas elementas turetu buti sausaniuko reiksme 
            // paversta i masyva
            if(isset($_COOKIE["elementas"])) {
                $elementuMasyvas = explode("|", $_COOKIE["elementas"])
            }
            $elementuMasyvas = array();
            array_push($elementuMasyvas, $elementas);

            // masyvas isaugotas i COOKIE. I cookie mes galime isaugoti tiktai teksta
            //explode - pavercia teksta i masyva
            //implode - funkcija kuri masyva paverstu i teksta
            setcookie("elementas",implode("|", $elementuMasyvas),time() + 3600, "/");

        } 
    }

    //toks kodas veikia tik paspaudus mygtuka
    if(isset($_GET["patvirtinti"])) {
        pridetiElementa();
    }

    
    ?>


</body>
</html>