<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>multiplication </title>
</head>

<body>



    <div class="container mt-5">
        <table class="table table-bordered">

            <?php

            $arr = [1,2,3,4,5,6,7,8,9,10,11,12];
            
            for($j = 1; $j <= count($arr); $j++){
                echo ' <tr>';
                
                for($i = 1; $i <= count($arr); $i++){
                    $result = $j * $i ;
                    echo "<td>$j x $i = $result</td>";
                }
                
                echo ' </tr>';
            }  
            ?>

        </table>
    </div>

</body>

</html>