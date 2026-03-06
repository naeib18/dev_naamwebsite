<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aanvraag Nieuwsbrief</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="form-container">
        <h2>Aanvraag nieuwsbrief</h2>

        <form action="/action_page.php" method="POST">
            <div class="form-row">
                <div class="form-group flextri">
                    <input type="text" id="voornaam" name="voornaam" placeholder="Wat is uw voornaam in!" required>
                </div>
                <div class="form-group flextri">
                    <input type="text" id="tussenvoegsel" name="tussenvoegsel" placeholder="Heeft u een tussenvoegsel">
                </div>
                <div class="form-group flextri">
                    <input type="text" id="achternaam" name="achternaam" placeholder="Wat is uw achternaam?" required>
                </div>
            </div>

            <div class="form-group">
                <input type="text" id="straatnaam" name="straatnaam" placeholder="Wat is uw straatnaam en nummer?"
                    required>
            </div>

            <div class="form-row">
                <div class="form-group flextri">
                    <input type="text" id="postcode" name="postcode" placeholder="Wat is uw postcode?" required>
                </div>
                <div class="form-group flextri">
                    <input type="text" id="woonplaats" name="woonplaats" placeholder="Wat is uw woonplaats?" required>
                </div>
                <div class="form-group flextri">
                    <input type="text" id="telefoon" name="telefoon" placeholder="Wat is uw telefoonnummer">
                </div>
            </div>

            <div class="form-group checkbox-group">
                <label class="checkbox-label">
                    <input type="checkbox" id="akkoord" name="akkoord" required>
                    <span>Ik ga akkoord met de voorwaarden zoals vermeld op de website!</span>
                </label>
            </div>

            <button type="submit" class="submit-btn">Verzenden</button>
        </form>
    </div>

</body>

</html>