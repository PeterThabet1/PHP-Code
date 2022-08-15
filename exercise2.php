<html>
    <head>
        <title>Second Exercise</title>
    </head>
    <body>
        <h1>Secon Exercise <br /></h1>
        <!-- Getting the age from the user using a form and a get method -->
        <form name="form" action="" method="get">
            <label for="age"><h2>How old are you?</h2><br /></label>
            <input type="number" id="age" name="age" />
            <input type="submit" value="submit" />
        </form>
        
        <?php

            // making a conditon which decides based on $age if you're eligible to vote
            # if $age < 18 not eligible, otherwise eligible to vote

            $age = $_GET["age"];
            if($age < 18){
                echo ("Since you're <strong>$age years old</strong>, you're not eligible to vote.");
            } else {
                echo ("You're <strong>$age years old</strong>, you're allowed to vote.");
            }


        ?> 
    </body>
</html>
