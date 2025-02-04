<?php
session_start();
if(isset($_SESSION['user'])) {
    header("Location: /"); die();
}

?>

<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PCTO Manager | LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <span class="fs-4"><b>PCTO Manager</b> LOGIN</span>
        </a>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="select">
            <ul class="nav nav-pills">
                <li style="margin-right: 10px"><input type="text" class="form-control" placeholder="Username" name="username" required></li>
                <li style="margin-right: 10px"><input type="password" class="form-control" placeholder="Password" name="password" required></li>
                <li><button class="btn btn-primary" type="submit">Accedi</button></li>
            </ul>
        </form>
    </header>



</div>
<script>
    function cambiaClasse() {
        location.href = "./?id-classe="+document.getElementById("id-classe").value;
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>