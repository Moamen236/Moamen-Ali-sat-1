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


    <div class="container">
        <table class="table table-bordered">
            <?php
            // $arr = [1,2,3,4,5,6,7,8,9,10,11,12];
            // for($j = 0; $j < count($arr); $j++){
            //     $arrNum = $arr[$j];
            // }
            // echo $arrNum ;
            
            $arr = [1,2,3,4,5,6,7,8,9,10,11,12];
            for($i = 1; $i <= 12; $i++){
                for($j = 0; $j < count($arr); $j++){
                    // $arrNum = $arr[$j];
                    echo $arr[$j];
                    $result = $arr[$j] * $i;
                }
                // echo $arrNum ;
                // $result = 2 * $i;
                
                
                echo "<tr>
                        <td>1 x $i = $result</td>
                        <td>2 x $i = $result</td>
                        <td>3 x $i = $result</td>
                        <td>4 x $i = $result</td>
                        <td>5 x $i = $result</td>
                        <td>6 x $i = $result</td>
                        <td>7 x $i = $result</td>
                        <td>8 x $i = $result</td>
                        <td>9 x $i = $result</td>
                        <td>10 x $i = $result</td>
                        <td>11 x $i = $result</td>
                        <td>12 x $i = $result</td>
                    </tr>";
            }
                
            ?>

        </table>
    </div>

</body>

</html>