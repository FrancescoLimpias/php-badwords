<!-- DATA -->
<?php
// create var holding data
$paragraph = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni inventore soluta vero at! Ex fugit delectus voluptatum sapiente sequi? At aspernatur laudantium iusto iure mollitia porro corporis aliquam? Incidunt, corrupti?";

// check if badword par is set
if(isset($_GET["badword"])){
    $paragraph = str_replace($_GET["badword"], "***", $paragraph);
}
?>

<!-- HTML PAGE -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Badwords</title>
</head>

<body>
    <h1>
        PHP - Badwords
    </h1>
    <span>
        Chars Count: <?php echo strlen($paragraph)?>
    </span>
    <p>
        <?php
        echo $paragraph;
        ?>
    </p>
</body>

</html>