<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HD Calculator</title>
        <link rel="stylesheet" type="text/css" href="style.css">

        <!-- font pour le titre HD -->
        <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Spartan:wght@300&display=swap" rel="stylesheet">

        <!-- font pour le titre Calculator -->
        <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">

        <!-- font pour les label -->
        <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Mitr&display=swap" rel="stylesheet">

        <!-- font pour les boutons submit & reset -->
        <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300&display=swap" rel="stylesheet">

        <!-- font pour le resultat -->
        <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Mitr&family=PT+Mono&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1><span class="b">h</span><span class="r">d</span> Calculator</h1>
        
        <!-- P A R T I E  D 'A F F I C H A G E  D E  L A  C A L C U L A T R I C E -->
        <div class="content-calculator">.

            <!-- P A R T I E   F O R M U L A I R E -->
            <form action="index.php" method="POST">
                <label>Entrer la première opérande</label>
                <input type="number" required step="0.000001" name="nb1" placeholder="taper 1er nombre..." class="num"/>
                <br /><br />
                <label>Choisissez l'opérateur</label>
                <select class="selection" name="operation">
                    <option value="choix"> Signe</option>
                    <option value="add"><span>+</span></option>
                    <option value="sous"><span>-</span></option>
                    <option value="mult"><span>x</span></option>
                    <option value="div"><span>/</span></option>
                </select>
                <br /><br />
                <label>Entrer la deuxième opérande</label>
                <input type="number" required step="0.000001" name="nb2" placeholder="taper 1er nombre..." class="num"/>
                <br /><br />
                <input type="reset" value="Effacer" class="reset"/> 
                <input type="submit" name="calcul" value="Calculer" class="submit"/><br /><br />
                <h2>

                    <!-- P A R T I E   C O D E   P H P -->
                    <?php
                        // Condition du bouton calculer
                        if(isset($_POST['calcul'])){
                            if($_POST['operation'] == 'choix'){
                                echo "Operation impossible! choisir un operateur";
                            }

                            // Choix du signe addition
                            elseif($_POST['operation'] == 'add'){
                                echo "Le résultat est : ".($_POST['nb1']." + ".$_POST['nb2']." = ").($_POST['nb1'] + $_POST['nb2']);
                            }

                            // Choix du signe soustration
                            elseif($_POST['operation'] == 'sous'){
                                if($_POST['nb1'] > $_POST['nb2']){
                                    echo  "Le résultat est : ".($_POST['nb1']." - ".$_POST['nb2']." = ").($_POST['nb1'] - $_POST['nb2']); 
                                }
                                else{
                                    echo  "Le résultat est : ".($_POST['nb1']." - ".$_POST['nb2']." = ").(-($_POST['nb2'] - $_POST['nb1']));
                                }
                            }
                            
                            // Choix du signe multiplication
                            elseif($_POST['operation'] == 'mult'){
                                echo "Le résultat est : ".($_POST['nb1']." x ".$_POST['nb2']." = ").($_POST['nb1'] * $_POST['nb2']);
                            }

                            // Choix du signe division
                            elseif($_POST['operation'] == 'div'){
                                if($_POST['nb2']==0){
                                    echo "Erreur!!!";
                                }
                                elseif(0 / $_POST['nb2']){
                                    echo " 0 ";
                                }
                                else{
                                    echo  "Le résultat est : ".($_POST['nb1']." / ".$_POST['nb2']." = ").($_POST['nb1'] / $_POST['nb2']);
                                }   
                            }
                        }
                    ?>
                    <!-- F I N   P A R T I E   C O D E   P H P -->
                </h2>
            </form>
            <!-- F I N   P A R T I E   F O R M U L A I R E -->
        </div>
        <!-- F I N  P A R T I E  D 'A F F I C H A G E  D E  L A  C A L C U L A T R I C E -->             
    </body>
</html>