<?php

$names = ['ahmed hamdy', 'mohammed shaker','ali hasan'];
$jobs =  ['front-end','back-end','full-stack'];
$experience = [3,2,4];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>developers </title>
</head>

<body>
    <div class='container mt-5'>
        <div class='row'>

            <?php 
        for($i = 0; $i < count($names); $i++){
            echo "
                <div class='col-md-4'>
                    <div class='card'>
                        <div class='card-body'>
                            <h2 class='card-title'>$names[$i]</h2>
                            <h4 class='card-subtitle mb-2 text-muted'>$jobs[$i]</h4>
                            <h5 class='card-text'>$experience[$i] years of experience</h5>
                        </div>
                    </div>
                </div>
            
            ";
        }
    ?>
        </div>
    </div>

</body>

</html>