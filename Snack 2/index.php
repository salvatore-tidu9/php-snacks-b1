<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”. -->


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

        $name = $_GET["name"];

        $mail = $_GET["mail"];

        $age = $_GET["age"];


        $printed_message = "";

        if (strlen($name) > 3 && strpos($mail, "@") && strpos($mail, ".") && is_numeric($age)) {

            $printed_message = "Accesso riuscito";
        }

        else {

            $printed_message = "Accesso negato";
        }
        
    ?>

    <h3>

        <?php

            echo $printed_message;

        ?>    

    </h3>

    <h4>Dati inseriti</h4>

    <ul>
    
        <li>name: <?php echo $name; ?></li>

        <li>mail: <?php echo $mail; ?></li>

        <li>age: <?php echo $age; ?></li>

    </ul>

</body>
</html>