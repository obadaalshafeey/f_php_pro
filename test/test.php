<?php
if(isset($_POST['submit'])){

   echo $_POST['sum1'] + $_POST['sum2'];

}else{


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
<input type="text" name="sum1"  >
<input type="text" name="sum2"  >

<button type="submit" name="submit" >submit</button>



    </form>
</body>
</html>

