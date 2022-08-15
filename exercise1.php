<html>
    <head>
        <title>First Exercise</title>
    </head>
    <body>
        <h1>First Exercise <br /></h1>
        <?php

            # going through the integers 0 to 50 and printing the total at the end
            // the counter variable is global
            $counter=0;
            for($i = 0; $i <= 50; $i++){
            global $counter;
            $counter += $i;
            }
            echo("<h1>The total is <em>$counter</em></h1>");


        ?> 
    </body>
</html>