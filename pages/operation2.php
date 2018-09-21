<?php

$nombre =rand(1,10);

for($i=0; $i<11; $i++)
{
    if(isset($_POST['check_'.$i]))
    {

        $table= $_POST['check_'.$i];
        $resultat = $table*$nombre;

        ?>
        <form action="<?php $_SERVER["PHP_SELF"]?>" method="POST">
            <input type="text" name="calcule">
            <input type="submit">

        </form>
        <script src="../js/fichier.js"></script>
        <?php
        echo $table.'x'.$nombre.'=';
            if (isset($_GET['calcule']))
            {
                $reponse = $_GET['calcule'];

                if($resultat != $reponse)
                {
                    echo "<script> alert('C\'est pas la bonne reponse')</script>";
                }
            }
        echo "<h3> Table de \t".$table." </h3>";
        for ($j=1; $j < 11; $j++)
        { 
            echo $table.'x'.$j.'='.$table * $j.'<br>';
        }
    }
}