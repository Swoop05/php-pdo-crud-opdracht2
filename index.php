<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Maak je eigen pizza</h1>

    <form action="create.php" method="post">
        <label for="bodemformaat">Bodemformaat</label><br>
        <select name="bodemformaat" id="bodemformaat">
            <option value="20">20CM</option>
            <option value="25">25CM</option>
            <option value="30">30CM</option>
            <option value="35">35CM</option>
            <option value="40">40CM</option>
        </select><br>
        <label for="saus">Saus</label><br>
        <select name="saus" id="saus">
            <option value="tomatensaus">Tomatensaus</option>
            <option value="extrats">Extra tomatensaus</option>
            <option value="spicyts">Spicy tomatensaus</option>
            <option value="bbqsaus">BBQ saus</option>
            <option value="cremefraiche">Crème fraiche</option>
        </select><br>

        <legend>Pizzatoppings</legend>

        <div>
            <input type="radio" name="toppings[]" id="toppings" value="kaas">
            <label for="toppings">Kaas</label>
        </div>

    </form>

</body>
</html>