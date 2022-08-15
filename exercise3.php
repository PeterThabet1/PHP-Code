<html>
    <head>
        <title>Third Exercise</title>
    </head>
    <body>
        <h1>Third Exercise <br /></h1>
        <!-- Getting the number from the user using a form and a get method -->
        <form name="form" action="" method="get">
            <label for="num"><h2>Check the number if it is prime</h2><br /></label>
            <input type="number" id="num" name="num" />
            <input type="submit" value="submit" />
        </form>
        
        <?php

            /* After fetching the number from the user through $_GET[], we make sure that the number is not zero or negative.
                then we check if the number is exactly 2, 2 is a prime number. Otherwise, we try to divide the number by other less
                numbers, if it is divisible, the $isPrime will be updated to false. Otherwise, the number $isPrime stays true
                and the number is prime. At the end the $isPrime is evaluated and the matching message is printed.
            */

            $num = $_GET["num"];
            if($num <= 1){
                echo("$num is <strong>not a prime</strong> number.");
            }
            elseif($num == 2){
                echo("$num <strong>is a prime</strong> number.");
            } 
            else {
                $isPrime = true;
                for($i = 2; $i < $num; $i++){
                    if($num % $i == 0){
                        $isPrime=false;
                        break;
                    }
                }
                if ($isPrime == true){
                    echo ("$num <strong>is a prime</strong> number.");
                }
                else {
                    echo ("$num is <strong>not a prime</strong> number.");
                }
            }


        ?> 
    </body>
</html>
