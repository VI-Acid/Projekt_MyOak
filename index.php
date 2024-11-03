<!-- PHP Serverseitige Kontrolle für den Blog-->

<?php

// define variables and set to empty values
$formtitleErr = $formcontentErr = "";
$formtitle = $formcontent = "" ;
$formtitleClass = $formcontentClass = ""; // New variables for validation classes

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["title"])) {
        $formtitleErr = "Title is required";
        $formtitleClass = "is-invalid"; // Add invalid class
    } else {
        $formtitle = test_input($_POST["title"]);
        $formtitleClass = "is-valid"; // Add valid class
    }

    if (empty($_POST["content"])) {
        $formcontentErr = "Content is required";
        $formcontentClass = "is-invalid"; // Add invalid class
    } else {
        $formcontent = test_input($_POST["content"]);
        $formcontentClass = "is-valid"; // Add valid class
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Hotel My Oak</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Projekt_MyOak/css/index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Bootstrap JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Nav eingebunden -->
    <?php include './Include/navigation.php'; ?>

    <main>

        <div id="myCarousel" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="/Projekt_MyOak/img/Index_Bild1.jpg" class="d-block w-100" alt="CozyRoomView">
                </div>

                <div class="carousel-item">
                    <img src="/Projekt_MyOak/img/Index_Bild2.jpg" class="d-block w-100" alt="DroneView">
                </div>
                <div class="carousel-item">
                    <img src="/Projekt_MyOak/img/Index_Bild3.jpg" class="d-block w-100" alt="Roomview">
                </div>
                <div class="carousel-item">
                    <img src="/Projekt_MyOak/img/Index_Bild4.jpg" class="d-block w-100" alt="CozyRoomView">
                </div>
                <div class="carousel-item">
                    <img src="/Projekt_MyOak/img/Index_Bild5.jpg" class="d-block w-100" alt="DroneView">
                </div>
                <div class="carousel-item">
                    <img src="/Projekt_MyOak/img/Index_Bild6.jpg" class="d-block w-100" alt="Roomview">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
<!-- Karusell beendet -->


<p class="textversuch1"> Die Stille des Waldes gegen den Stress des Alltags.</p>
<p class="textversuch2">Unsere individuell und einzigartig gestalteten Baumhotels liegen mitten im Herzen des Naturerlebnisparks Baumkronenweg. Nur ein paar Meter über dem Boden verändert sich der Blickwinkel auf die Natur und den Alltag und das Waldglück beginnt.</p>
</br>


<div class="container mt-5">
<div class="wrapper" style="text-align: center;">
    <h2>Neuen Blogbeitrag erstellen</h2>
</br>
    <form id="blogPostForm" method="POST" action="index.php"> 
        <div class="form-group">
            <label for="formtitle">Titel:</label>
            <input type="text" name="title" class="form-control <?php echo $formtitleClass; ?>" id="formtitle" value="<?php echo test_input($formtitle); ?>" >
            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback"><?php echo $formtitleErr; ?></div>
        </div>
        <div class="form-group">
            <label for="formcontent">Inhalt:</label>
            <textarea class="form-control <?php echo $formcontentClass; ?>" name="content" id="formcontent" rows="5" ><?php echo test_input($formcontent); ?></textarea>

            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback"><?php echo $formcontentErr; ?></div>
        </div>

        <!--
        <div class="form-group">
            <label for="imageUpload">Bild hochladen:</label>
            <input type="file" class="form-control-file" id="imageUpload" accept="image/*" required>
            <img id="preview" class="preview-image mt-3" alt="Bildvorschau">
        </div>
-->
</br>
        <button type="submit" class="btn btn-primary">Beitrag erstellen</button>
    </form>
</div>
</div>

</main>
</body>

</html>