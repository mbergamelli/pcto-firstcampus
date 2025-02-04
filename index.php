<?php
session_start();

?>

<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PCTO Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <span class="fs-4">PCTO Manager</span>
            </a>

            <ul class="nav nav-pills">
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="select">
                    <select class="form-select" name="id-classe" id="id-classe" onchange="cambiaClasse()">
                        <option selected>Seleziona classe...</option>
                        <option value="9e267dae-812b-42a5-81f0-9f595ff172eb">2024/25 Classe 3</option>
                        <option value="b0c118b8-32e9-49d1-9186-23664bb8ba0e">2024/25 Classe 4</option>
                    </select>
                </form>

                <li class="nav-item"><a href="./" class="nav-link active" aria-current="page">Dashboard</a></li>
                <li class="nav-item"><a href="/aziende/" class="nav-link">Aziende</a></li>
                <li class="nav-item"><a href="/archivio/" class="nav-link">Archivio</a></li>
                <li class="nav-item"><a href="/utente/" class="nav-link">Utente</a></li>
            </ul>
        </header>

        <h1>
            <span class="badge text-bg-secondary">SOSPESA</span>
            <span class="badge text-bg-info">IN CORSO</span>
            <span class="badge text-bg-success">COMPETATA</span>
            <span class="badge text-bg-warning">AZIONE NECESSARIA</span>
            <span class="badge text-bg-danger">ERRORE</span>
        </h1>
        <table class="table table-striped">
            <tr>
                <th class="col-3">Nome e Congome</th>
                <th class="col-2">Data di Nascita</th>
                <th class="col-7">Stato PCTO</th>
            </tr>
            <tr>
                <td><a href="/studente/?id-studente=sdcfvchjksdbhjk">Mattia Bergamelli</a></td>
                <td>15/06/2001</td>
                <td>
                    <table class="table-borderless" style="width:100%">
                        <tr>
                            <td class="col-2"><span class="badge text-bg-info">IN CORSO</span></td>
                            <td class="col-10"><div class="progress" role="progressbar" style="width:100%"><div class="progress-bar w-75"></div></div></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
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