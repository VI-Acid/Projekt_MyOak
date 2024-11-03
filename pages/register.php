<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrierung - Baumhotel My Oak - Hinterwald NÖ</title>
    <link rel="stylesheet" href="../css/register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>


<body>
    <!-- Bootstrap JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Nav eingebunden -->
    <?php include '../Include/navigation.php'; ?>


    <main class="container-fluid my-5">
        <div class="col-md-12 col-lg-12 custom-width"> <!-- Anpassbare Spalten für unterschiedliche Bildschirmgrößen -->
            <div class="wrapper" style="text-align: center;">
                <h1>Registrierung</h1>

                <form action="../pages/register.php" method="GET">

                    <div class="eingabefeld mb-3">
                        <label for="formAnrede">Anrede*</label>
                        <select id="formAnrede" name="Anrede" required>
                            <option value="" disabled selected>Wählen Sie eine Anrede</option>
                            <option value="wien">Herr</option>
                            <option value="notwien">Frau</option>
                        </select>
                    </div>

                    <div class="eingabefeld mb-3">
                        <label for="formVorname">Name*</label>
                        <input name="Vorname" id="formVorname" type="text" maxlength="20" required placeholder="Vorname*" />
                        <input name="Nachname" id="formNachname" type="text" maxlength="20" required placeholder="Nachname*" />
                    </div>


                    <div class="eingabefeld mb-3">
                        <label for="email">Email Adresse*</label>
                        <input name="formEmail" id="email" type="email" placeholder="john@example.com" required />
                    </div>



                    <div class="eingabefeld mb-3">
                        <label for="formtele">Telefon</label>
                        <input name="Telefon" id="formtele" type="tel" />
                    </div>



                    <div class="eingabefeld mb-3">
                        <label for="formadresse">Adresse</label>
                        <label for="formadressenr"></label>
                        <input name="Adresse" id="formadresse" type="text" placeholder="Straßenname" />
                        <input name="Adressenr" id="formadressenr" type="text" placeholder="Nr" />
                    </div>



                    <div class="eingabefeld mb-3">
                        <label for="formPlz">PLZ und Ort</label>
                        <label for="formOrt"></label>
                        <input name="PLZ" id="formPlz" type="text" placeholder="PLZ" />
                        <input name="Ort" id="formOrt" type="text" placeholder="Ort" />
                    </div>


                    <div class="eingabefeld mb-3">
                        <label for="formLand">Land</label>
                        <input name="Land" id="formLand" type="text" placeholder="Österreich" />
                    </div>



                    <div class="eingabefeld mb-3">
                        <label for="formUsername">Username*</label>
                        <input name="Username" id="formUsername" type="text" required />
                    </div>
                    <!-- Bei nächstem Baustein User und User-Login abtrennen-->



                    <div class="eingabefeld mb-3">
                        <label for="passwort1">Passwort*</label>
                        <input name="Passwort1" type="password" id="passwort1" minlength="6" maxlength="20" required />
                        <label for="passwort2">Passwort wiederholen*</label>
                        <input name="Passwort2" type="password" id="passwort2" minlength="6" maxlength="20" required />

                    </div>
                    <!--Wiederholte Passworteingabe nur bei Registrierung prüfen für die Zukunnft-->



                    <button type="submit" class="btn">Registrieren</button>

                </form>



            </div>
    </main>

    <!-- Footer eingebunden -->
    <?php include '../Include/footer.php'; ?>
</body>

</html>