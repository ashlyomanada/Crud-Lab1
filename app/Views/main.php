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
            <input type="hidden" name="StudentId" >
            <input type="text" name="StudentId" >
            <br>
            <label>FullName</label>
            <input type="text" name="FullName" >
            <br>
            <label>YearLevel</label>
            <input type="text" name="YearLevel" >
            <br>
            <label>Program</label>
           <input type="text" name="Program" >
           <br>
           <input type="submit" value="Add">
    </form>
   



    
    <table border="1">
        <tr>
            <th>StudentId</th>
            <th>FullName</th>
            <th>YearLevel</th>
            <th>Program</th>
            <th>Action</th>
        </tr>
        <?php foreach ($name as $datas): ?>
                <tr>
                <td><?=$datas['StudentId'] ?> </td>
                <td><?=$datas['FullName'] ?> </td>
                <td><?=$datas['YearLevel'] ?> </td>
                <td><?=$datas['Program'] ?> </td>
                <td><a href="/delete/<?= $datas['StudentId']?>">Delete</a><a href="/edit/<?= $datas['StudentId']?>">Edit</a></td>
                </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>