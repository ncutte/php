<?php require_once "regions.php";
    const PAGE_SIZE = 5 ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <ul>
            <?php
                        
                if (isset($_GET["page"])) {
                    
                }else{
                    $_GET["page"]=1;
                }
                $array = array_slice($regions,(($_GET["page"]-1)*PAGE_SIZE) ,PAGE_SIZE);

                foreach ($array as $key => $value) { ?>
                        <li><a href="exo3-regions-detail.php?region=><?php echo "$key" ?></a></li>
                
                
                
            <?php } ?>

        </ul>

        <?php if ($_GET["page"] > 1 ) { ?>
            <a href="exo3-regions.php?page=<?php echo $_GET["page"]-1?>">page précédente</a>
        <?php } ?>
        <?php if ($_GET["page"] < count($regions)/5 ) { ?>
            <a href="exo3-regions.php?page=<?php echo $_GET["page"]+1?>">page suivante</a>
        <?php } ?>

        

    

</body>
</html>