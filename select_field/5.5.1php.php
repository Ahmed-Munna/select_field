<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form vaalidation</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
    <?php
        $fruits = ["apple","mango","orreng","banana","goava","lichi","jackfrouits","coconut"];
        function displayOption($options){
            foreach($options as $option){
                printf("<option value='%s'>%s</option>\n",strtolower($option),ucwords($option));
            }
        }
    ?>
    <div class="container" style="width:50%">
        <br><br>
        <h2>Seleact/Dropdown</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam earum vel illum dignissimos ex at ipsum cumque praesentium quae. Porro reiciendis quae ducimus quidem similique reprehenderit! Doloribus veritatis architecto fugit vitae ut? Rem ad laborum totam illum obcaecati dolores! Exercitationem quasi voluptatum labore doloribus sint incidunt quas. Iure, ipsum nemo.</p>
        <h4>
            <?php
                if(isset($_POST[0])){
                    printf("Your fovourit is: %s",$_POST[0]);
                }
            ?>
        </h4>
        <form method="POST">
            <fieldset>
                <label for="ageRangeField">select some foods</label>
                <select name="foods[]" id="ageRangeField">
                    <option selected disabled>Select your foods</option>
                    <?php displayOption($fruits); ?>
                </select>
                <input class="button-primary" type="submit" value="Submit">
            </fieldset>
        </form>
    </div>

</body>
</html>