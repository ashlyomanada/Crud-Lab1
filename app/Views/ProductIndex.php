<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
    <div class="container mt-5">
    <ul class="list-group">
    <h2 class="text-light">Product Listing</h2>
    <?php foreach ($name as $datas): ?>
        <li class="list-group-item"><a href="/edit/<?= $datas['ProductId']?>"><?=$datas['ProductName'] ?></a></li>
    <?php endforeach; ?>
    </ul>

    <a href="\add" class="btn btn-success mt-3">ADD NEW</a>
    </div>
</body>
<style>
       
    </style>
</html>