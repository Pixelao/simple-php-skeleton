<?php
require_once('app.php');

# Page basic config #
$pageTitle = '';
$pageDescription = '';
$pageKeyWords = array('HTML', 'CSS', 'JavaScript');
?>
<!doctype html>
<html lang="<?= $_ENV['LANG'] ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?= generatePageKeywords($pageKeyWords) ?>">
    <meta name="description" content="<?= $pageDescription ?>">
    <meta name="author" content="<?= $_ENV['AUTHOR_NAME'] ?>">

    <!-- HeadScripts -->
    <?php include_once('includes/headScripts.php') ?>

    <title><?= $pageTitle ?></title>
</head>

<body>
    <div class="container w-100 h-100">
        <header>
            <h1 class="text-center">Hello, this is Simple PHP Skeleton!</h1>
        </header>
        <main>
            <ul class="nav nav-pills mb-3" id="pills-tab-2" role="tablist-2">
                <li class="nav-item">
                    <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home-2" role="tab" aria-controls="pills-home-2" aria-selected="false">Calculadora</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile-2" role="tab" aria-controls="pills-profile-2" aria-selected="false">Profile</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade" id="pills-home-2" role="tabpanel" aria-labelledby="pills-home-tab-2">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">Calculadora</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <label for="dato1" class="form-label">Años</label>
                            <input type="number" id="dato1" class="form-control" onkeyup="sendAxios();" required>
                            <label for="dato2" class="form-label">Sueldo Mensual</label>
                            <input type="number" id="dato2" class="form-control" onkeyup="sendAxios();" required>
                            <label for="dato3" class="form-label">Ahorro Mensual</label>
                            <input type="number" id="dato3" class="form-control" onkeyup="sendAxios();" required>
                            <label for="dato4" class="form-label">Ahorrado</label>
                            <input type="number" id="dato4" class="form-control" onkeyup="sendAxios();" required>
                            <div class="d-grid gap-2 mt-2">
                                <button class="btn btn-success" onclick="sendAxios()">SendAxios</button>
                            </div>
                            <div class="row">
                                <div class="text-center col-3">
                                    <p>Total meses trabajados</p>
                                    <div id="rDato1"></div>
                                </div>
                                <div class="text-center col-3">
                                    <p>Cantidad Ganada Total</p>
                                    <div id="rDato2"></div>
                                </div>
                                <div class="text-center col-3">
                                    <p>Cantidad Ganada Anual</p>
                                    <div id="rDato3"></div>
                                </div>
                                <div class="text-center col-3">
                                    <p>Cantidad Ganada Total + Ahorrado</p>
                                    <div id="rDato4"></div>
                                </div>
                                <div class="text-center col-3">
                                    <p>Ahorro Anual</p>
                                    <div id="rDato5"></div>
                                </div>
                                <div class="text-center col-3">
                                    <p>Ahorro Total</p>
                                    <div id="rDato6"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            Profile
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            Contact
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile-2" role="tabpanel" aria-labelledby="pills-profile-tab">
                    Profile
                </div>
            </div>

        </main>
        <footer>
            <p class="text-center">Simple PHP Skeleton</p>
        </footer>
    </div>

    <div class="toast-container position-absolute top-0 end-0 p-3">
        <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-bs-autohide="true" data-bs-delay="50000" id="myToast">
            <div class="toast-header">
                <img src="https://www.barymont.com/favicon/favicon-16x16.png" class="rounded pe-2" alt="Barymont">
                <strong class="me-auto" id="toastTitle"></strong>
                <small id="toastTime"></small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <div id="toastMsg"></div>
            </div>
        </div>
    </div>

    <?php include_once('includes/footerScripts.php') ?>
    <script>
        function sendAxios() {
            axios.get('api.php', {
                    params: {
                        dato1: document.getElementById("dato1").value,
                        dato2: document.getElementById("dato2").value,
                        dato3: document.getElementById("dato3").value,
                        dato4: document.getElementById("dato4").value,
                    }
                })
                .then(function(response) {
                    console.log(response);
                    if (response.status == 200) {
                        // handle success
                        document.getElementById("rDato1").innerHTML = (response.data.Dato1) + ' Meses';
                        document.getElementById("rDato2").innerHTML = (response.data.Dato2.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')) + ' €';
                        document.getElementById("rDato3").innerHTML = (response.data.Dato3.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')) + ' €';
                        document.getElementById("rDato4").innerHTML = (response.data.Dato4.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')) + ' €';
                        document.getElementById("rDato5").innerHTML = (response.data.Dato5.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')) + ' €';
                        document.getElementById("rDato6").innerHTML = (response.data.Dato6.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')) + ' €';

                        myToast = new bootstrap.Toast(document.getElementById('myToast'));
                        document.getElementById("toastTitle").innerHTML = 'Titulo: ' + response.data.Dato1;
                        document.getElementById("toastTime").innerHTML = moment().format('LL');
                        document.getElementById("toastMsg").innerHTML = 'Mensaje: ' + response.data.Dato4;
                        myToast.show();

                        console.log(response.data);
                    }
                })
                .catch(function(error) {
                    // handle error
                    console.log(error);
                })
                .then(function() {
                    // always executed
                    console.log('TERMINO!');
                });
        }
    </script>
</body>

</html>
