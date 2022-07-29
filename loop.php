<?php
$persons = ['austin','duncan','heiman'];
for ($i=0; $i<count($persons);$i++){
    echo $persons[$i].'<br/>';
}
foreach ($persons as $person){
    echo $person.'<br/>';
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
    <?php foreach($persons as $person){?>
        <h3><?php echo $person?></h3>
    <?php }?>
    
</body>
</html>