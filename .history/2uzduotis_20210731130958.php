<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 uzduotis</title>
</head>
<body>

    <form action="2uzduotis.php" action="get">
        <button type="submit" name="patvirtinti">Patvirtinti</button>
    </form>
    <?php 

    function sukurtiElementa() {
        //javascript - kiekkviena karta paspaudus elementas prisikabina prie tevinio elemento

        //PHP sausainiukus
        
        //paspaudziam mygtuka, pasipildo masyvas, masyvas isiraso i Cookie,
        //kito paspaudimo metu pasiemama sena Cookie reiksme ir procesas kartojas

        return "Labas";
    }

    if(isset($_GET["patvirtinti"])) {
        sukurtiElementa();
    }

    // 2. Sukurkite funkciją, kuri mygtuko paspaudimu, 
    // sukuria div elementą su klase "elementas-{index}". {index} = elemento numeris
    //elementas-1
    //elementas-2


    ?>
</body>
</html>