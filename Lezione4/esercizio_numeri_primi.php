<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Table</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>



   
<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered">
            <?php
            function isPrime($num) {
                if ($num < 2) {
                    return false;
                }
                
                for ($i = 2; $i <= $num / 2; $i++) {
                    if ($num % $i == 0) {
                        return false;
                    }
                }
                
                return true;
            }

            $count = 0;
            for ($i = 1; $i <= 100; $i++) {
                if ($count % 10 == 0) {
                    echo "<tr>";
                }

                $class = isPrime($i) ? 'bg-success' : '';
                echo "<td class='$class'>$i</td>";
                
                $count++;
                
                if ($count % 10 == 0) {
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
</div>

</body>
</html>



