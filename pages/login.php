<?php
session_start();

$_SESSION["name"] = "jasmin";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Überprüfen, ob die Eingabefelder existieren, bevor darauf zugegriffen wird
    $enteredUsername = isset($_POST["username"]) ? htmlspecialchars($_POST["username"]) : '';
    $enteredPassword = isset($_POST["password"]) ? htmlspecialchars($_POST["password"]) : '';

    $users = [];
    $users["jasmin"] = "12345!";
    $users["mateja"] = "123!";

    // Überprüfen, ob der Benutzername im Array existiert und das Passwort korrekt ist
    if (isset($users[$enteredUsername]) && $users[$enteredUsername] === $enteredPassword) {
        $_SESSION["user"] = $enteredUsername;
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Baumhotel My Oak - Hinterwald NÖ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Bootstrap JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Nav eingebunden -->
    <?php include '../Include/navigation.php'; ?>


    <main class="container-fluid my-5">
        <div class="col-md-12 col-lg-12"> <!-- Anpassbare Spalten für unterschiedliche Bildschirmgrößen -->
            <div class="wrapper">
                <!--<p>Hallo <?php echo $_SESSION["name"]; ?></p>-->

                <?php if (!isset($_SESSION["user"])) : //Wenn das true ist
                ?>

                    <form action="./login.php" method="POST">
                        <h1>Login</h1>
                        <div class="eingabefeld mb-3">
                            <input type="text" name="username" id="benutzername" class="form-control"
                                required placeholder="Benutzername">
                            <i class='bx bx-user'></i>
                        </div>

                        <div class="eingabefeld mb-3">
                            <input type="password" name="password" id="passwort" class="form-control"
                                required placeholder="Passwort">
                            <i class='bx bx-lock-alt'></i>
                        </div>

                        <div class="merken-vergessen d-flex justify-content-between mb-3">
                            <label><input type="checkbox" class="form-check-input"> Passwort merken</label>
                            <p><a href="#">Passwort vergessen?</a></p>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>

                    <div class="registrieren-link mt-3">
                        <p>Kein Account vorhanden? <a href="../pages/register.php">Registrieren</a></p>
                    </div>
            </div>
        </div>

    <?php else : ?>
        <p style="text-align: center;">Vielen Dank <?php echo $_SESSION["user"]; ?>, Sie sind nun eingloggt!</p>
        <form action="logout.php" method="POST">
            <button type="submit" class="btn btn-primary w-100">Logout</button>
        </form>
    <?php endif ?>

    </main>

    <!-- Footer eingebunden -->
    <?php include '../Include/footer.php'; ?>
</body>

</html>