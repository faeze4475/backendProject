<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../template/assets/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body >
<?php
include __DIR__.'/menu.php';
?>
    <table class="table">
        <thead class="table-dark">
         <tr>
            <th>#</th>
            <th>title</th>
            <th>Discription</th>
            <th>date</th>
            <th>Status</th>
            <th>action</th>
         </tr>
        </thead>
    <?php
    $radif=1;
    while($res=mysqli_fetch_assoc($r)){
    ?>
        <tr>
            <td><?php echo $radif;?></td>
            <td><?php echo $res['tTitle'];?> </td>
            <td><?php echo $res['tDescription'];?> </td>
            <td><?php echo $res['tDate'];?> </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">DONE</label>
             </div>
            </td>
            <td>
                 <form method="post" action="./Tasks/delete">  
                    <input type="hidden" name="id2" value="<?php echo $res['tID']?>">
                    <button name="delete"type="submit" class="btn btn-outline-danger">Delete</button>
                 </form>
            <button type="submit" class="btn btn-outline-success">Edite</button>
            </td>
        </tr>      
    <?php
    $radif++;
    }
    ?>
    </table>
    <form method="post" action="./Tasks/add">
        <div class="input-group mb-3">
            <button type="submit" name="addbt"    class="btn btn-outline-info">ADD</button>
            <input  type="text"   name="titleinp" class="form-control" placeholder="Title" aria-label="Example text with button addon" aria-describedby="button-addon1">
            <input  type="text"   name="desinp"   class="form-control" placeholder="Description" aria-label="Example text with button addon" aria-describedby="button-addon1">
            <input  type="datetime-local"name="dateinp" class="form-control" placeholder="Date" aria-label="Example text with button addon" aria-describedby="button-addon1">
        </div>
    </form> 
</body>
</html>