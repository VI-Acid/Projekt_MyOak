<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Baumhotel My Oak - Hinterwald NÖ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Projekt_MyOak/css/hilfe.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        .accordion-item {
            justify-content: center;
            text-align: center;
        }
    </style>

</head>

<body>
    <!-- Bootstrap JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Nav eingebunden -->
    <?php include '../Include/navigation.php'; ?>

    <!-- Karussell als Header einbinden -->
    <?php include '../Include/header.php'; ?>

    <!-- CONTENT -->
    <main class="container-fluid my-5">
        <div class="col-md-12 col-lg-12">
            <div class="wrapper">
                <h1>
                    FAQs
                </h1>
                <p>
                    Gerne finden Sie hier eine aktuelle Übersicht über die am häufigsten gestellten Fragen.
                    <br>
                    Ob Infomationen zur Website, An- oder Abreise oder alles rund um
                    den Spa - Bereich von My Oak: Hier finden Sie eine Übersicht
                    der wichtigsten Informationen für einen entspannten Urlaub.
                    <br>
                    <br>
                </p>
                <h2>Fragen zur Website</h2>
                <br>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <a><strong><i class='bx bxs-help-circle'></i> Wie registriere ich mich auf der Website?</strong></a>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Um ein Zimmer zu reservieren oder News-Beiträge zu sehen, müssen Sie sich zuerst registrieren.
                                        Klicken Sie im Menü auf "Registrierung" und geben Sie Anrede, Vorname, Nachname, E-Mail, Username
                                        und Passwort ein.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <a><strong><i class='bx bxs-help-circle'></i> Wie funktioniert der Login?</strong></a>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Nach der Registrierung können Sie sich mit Ihrem Benutzernamen und Passwort einloggen. Falls
                                        Sie Administrator sind, haben Sie zusätzliche Berechtigungen.​</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <a><strong><i class='bx bxs-help-circle'></i> Wie kann ich ein Zimmer reservieren?</strong></a>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Melden Sie sich an und gehen Sie auf "Zimmer reservieren". Wählen Sie das Zimmer, das An-
                                        und Abreisedatum und eventuelle Zusatzleistungen wie Frühstück oder Parkplatz.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <a><strong><i class='bx bxs-help-circle'></i> Wie kann ich meine Reservierungen verwalten?</strong></a>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Ihre getätigten Reservierungen werden im Bereich "Meine Reservierungen" angezeigt. Sie
                                        können den Status Ihrer Reservierung einsehen (neu, bestätigt, storniert).​</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <a><strong><i class='bx bxs-help-circle'></i> Wie kann ich mein Profil aktualisieren?</strong></a>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Gehen Sie auf "Mein Profil", um persönliche Informationen wie Ihren Benutzernamen oder Ihr
                                        Passwort zu ändern.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <br>
                    <h2>Fragen zum Hotel</h2>
                    <br>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                    <a><strong><i class='bx bxs-help-circle'></i> Welche Zimmerkategorien gibt es und wie kann ich sie buchen?</strong></a>
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Das Hotel bietet Einzelzimmer, Doppelzimmer und Suiten an. Sie können die Zimmer online
                                        reservieren, nachdem Sie die Verfügbarkeit für Ihren gewünschten Zeitraum geprüft haben.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    <a><strong><i class='bx bxs-help-circle'></i> Welche zusätzlichen Services kann ich buchen?</strong></a>
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Sie können Frühstück, Parkplatz und die Mitnahme von Haustieren als Zusatzleistungen während
                                        des Reservierungsvorgangs hinzufügen.​</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    <a><strong><i class='bx bxs-help-circle'></i> Wie verwalte ich meine Buchungen?</strong></a>
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Im Bereich "Meine Reservierungen" können Sie Ihre Buchungen verwalten, Details einsehen und
                                        die Reservierung stornieren, wenn sie noch den Status "neu" hat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    <a><strong><i class='bx bxs-help-circle'></i> Wie kann ich als Administrator News-Beiträge erstellen?</strong></a>
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Wenn Sie als Administrator eingeloggt sind, können Sie im Bereich "News-Beiträge" neue
                                        Beiträge verfassen, bearbeiten oder löschen.​</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    <a><strong><i class='bx bxs-help-circle'></i> Was passiert, wenn ich ein Zimmer reserviere und dann absagen muss?</strong></a>
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Sie können Ihre Reservierung im Bereich "Meine Reservierungen" stornieren, solange sie noch
                                        als "neu" markiert ist.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <br>
                    <br>
            
                    <p>
                        Sollten Sie weitere Informationen benötigen, stehen wir Ihnen selbstverständlich gerne jederzeit unter
                    <div class="emaillink" style="text-align: center;"><strong>
                            <a href=mailto:reservation@myoak-hotel.at>reservation@myoak-hotel.at</a>
                        </strong></div>
                    <p> oder</p>
                    <div class="tellink" style="text-align: center;"><strong>
                            <a href="tel:+436641234567">+43 664 123 4567</a>
                        </strong></div>
                    <p> zur Verfügung.</p>
                    </p>
                    <br>                    
                </div>
            </div>
    </main>

    <!-- Footer eingebunden -->
    <?php include '../Include/footer.php'; ?>
</body>

</html>