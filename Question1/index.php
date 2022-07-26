<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HD Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- font titre HD -->
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Spartan:wght@300&display=swap" rel="stylesheet">

    <!-- font titre Calculator -->
    <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">

    <!-- font label -->
    <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Mitr&display=swap" rel="stylesheet">

    <!-- font submit & reset -->
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300&display=swap" rel="stylesheet">

    <!-- font resultat -->
    <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Mitr&family=PT+Mono&display=swap" rel="stylesheet">
</head>
<body>
    <h1><span class="b">h</span><span class="r">d</span> Calculator</h1>
    <div class="content-calculator">
        <form>
            <label>Entrer la première opérande</label>
            <input type="number" placeholder="taper 1er nombre..." class="num"/>
            <br /><br />
            <label>Choisissez l'opérateur</label>
            <select class="selection">
                <option value="choix">Signe</option>
                <option value="add"><span> + </span></option>
                <option value="sup"><span> - </span></option>
                <option value="mult"><span> x </span></option>
                <option value="div"><span> / </span></option>
            </select>
            <br /><br />
            <label>Entrer la deuxième opérande</label>
            <input type="number" placeholder="taper 1er nombre..." class="num"/><br /><br />
            <input type="reset" value="Effacer" class="reset"/> 
            <input type="submit" value="Calculer" class="submit"/><br /><br />

            <h2>Le résultat est : </h2>
        </form>
    </div>
    
</body>
</html>