<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body
">
<?php include 'header.php'; ?>
<div class=" view d-flex flex-wrap justify-content-between align-items-center .view">
    <form class=" col-md-5 mx-auto border border-primary p-3" action="firstTaskRes.php" method="post">
        <h1 class="text-center mb-3"> Temperatūrų skaičiavimai</h1>
        <div class="mb-3">
            <label for="temperatures" class="form-label">Įveskite temperatūras</label>
            <input type="text" onkeyup="enableSubmit()" name="temperatures" class="form-control">
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" disabled class="btn mx-auto btn-primary"> Įvesti</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
<script>
    function enableSubmit() {
        let inputs = document.querySelectorAll("input");
        let btn = document.querySelector('button[type="submit"]');
        let isValid = true;
        for (let i = 0; i < inputs.length; i++) {
            let changedInput = inputs[i];
            if (changedInput.value.trim() === "" || changedInput.value === null) {
                isValid = false;
                break;
            }
        }
        btn.disabled = !isValid;
    }
</script>
</body>
</html>