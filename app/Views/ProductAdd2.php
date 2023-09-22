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
    <form action="\save" method="post" class="container d-flex flex-column justify-content-center mt-5">
            <label class="form-label text-light">ProductName</label>
            <input class="form-control" type="hidden" name="ProductId" value="<?= $pro['ProductId'] ?>">
            <input class="form-control" type="text" name="ProductName"  value="<?= $pro['ProductName']?>">
            <br>
            <label class="form-label text-light">ProductDescription</label>
            <input class="form-control" type="text" name="ProductDescription" value="<?= $pro['ProductDescription'] ?>">
            <br>
            <label class="form-label text-light">ProductCategory</label>
            <select name="ProductCategoryId" class="form-select" aria-label="Default select example">
            <?php foreach ($category as $cat): ?>
                    <option value="<?= $cat['ProductCategoryId']?>"><?= $cat['ProductCategoryId']?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <label class="form-label text-light">ProductQuantity</label>
           <input class="form-control" type="number" name="ProductQuantity" value="<?= $pro['ProductQuantity'] ?>">
           <br>
           <label class="form-label text-light">ProductPrice</label>
           <input class="form-control" type="number" name="ProductPrice" value="<?= $pro['ProductPrice'] ?>">
           <br>
           <div class="col-5">
           <input type="submit" value="Edit" class="btn btn-warning">
           <a href="\delete\<?= $pro['ProductId'] ?>" class="btn btn-danger">Delete</a>
           </div>
    </form>
    
</body>
</html>