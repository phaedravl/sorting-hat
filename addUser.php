<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mij toevoegen</title>
        <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    </head>
    <body>
        <h1> 
            Schrijf je hier in
        </h1>

        <form action="components/afterAdd.php" method="GET"> 
            <label for="voornaam">
                Voornaam: 
            </label>
            <br>
            <input type="text" id="voornaam" name="voornaam" required>
            <br>
            <br>
        
            <label for="achternaam">
                Achternaam: 
            </label>
            <br>
            <input type="text" id="achternaam" name="achternaam" required>
            <br>
            <br>

            <label for="geslacht">
                Geslacht: 
            </label>
            <br>
            <select id="geslacht" name="geslacht">
                <option value="man">
                    Man
                </option>
                <option value="vrouw">
                    Vrouw
                </option>
                <option value="x">
                    X
                </option>
            </select>
            <br>
            <br>

            <label for="geboortedatum">
                Geboortedatum: 
            </label>
            <br>
            <input type="date" id="geboortedatum" name="geboortedatum" required>
            <br>
            <br>

            <label for="dier">
                Favoriete dier: 
            </label>
            <br>
            <input type="text" id="dier" name="dier" required>
            <br>
            <br>

            <label for="getal">
                Favoriete getal: 
            </label>
            <br>
            <input type="number" id="getal" name="getal" required>
            <br>
            <br>

            <input type="submit" value="Voeg mij toe!" class="buttons">
        </form>

    </body>
</html>