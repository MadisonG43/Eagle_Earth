<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:600|Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
<body>

<div class="placements">
<img src = "<?php echo $image?>" class = "image" alt="<?php echo $productName;?>">
    <h4 ><?php echo $productName;?></h4>
    <h4 ><?php echo $quantity;?><h4>
    <h4 ><?php echo $price;?><h4>
    <button class = 'pc' onclick = 'window.location.href = "./remove.php?id=<?php echo $id?>"'>Remove Item</button>
</div>
<?php $tp += $total
 ?>
 
<!-- Styles for the displayed cart placements-->
    <style>
        .image{
            height:300px;
            width:300px;
        }

        h4{
            font-size:3vw;
            
        }

        .placements{
         border: solid white 10px;
         padding: 15px 15px;
         margin: 2vw 2vw;  
        }
        </style>
</body>
</html>
