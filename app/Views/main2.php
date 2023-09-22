<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <form action="\save" method="post">
        <label>StudentId</label>
            <input type="hidden" name="StudentId" value="<?= $pro['StudentId'] ?>">
            <input type="text" name="StudentId" value="<?= $pro['StudentId'] ?>">
            <br>
            <label>FullName</label>
            <input type="text" name="FullName" value="<?= $pro['FullName'] ?>">
            <br>
            <label>YearLevel</label>
            <input type="text" name="YearLevel" value="<?= $pro['YearLevel'] ?>">
            <br>
            <label>Program</label>
           <input type="text" name="Program" value="<?= $pro['Program'] ?>">
           <br>
           <input type="submit" value="Save">
    </form>
   
    
</body>
</html>