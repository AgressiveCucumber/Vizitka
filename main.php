<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Попытка не пытка</title>
    <link rel="stylesheet" href="my_site_style.css" />
</head>
<body>
    <div class = "text_all_around_the_page">
        <div class ="menu_and_pict">
            <?php include 'menu_and_pict.inc.php' ?>
        </div>
        <div class = "main_text">
            <h1><?php echo $greetings ?> </h1>
            <div class = "text_about_me">
                <p>Имя моё Вам не известно, поэтому представлюсь</p>
                <p color = "green" >Меня зовут <?php echo $mySurname,' ',$myName ?> </p>
                <p>Мне <?php echo $myAge ?> лет</p>
                <p>Я из славного города <?php echo $myCity?> </p>
            </div>
            <div class = "my_photo">
                <p>Вот так я выгляжу</p>
                <?php include 'my_photo.inc.php' ?>
            </div>
            <div class = "knowledge">
                <?php include 'knowledge.inc.php' ?>
                <p> <?php echo $stroka?> - это строка </p>
                <p1><?php print($strokaOtNumber1) ?> </p1>
                <p><?php 
                if (gettype($number) == "integer")
                    echo 'Это число';
                 ?> </p>
                 <p1> <?php echo $strokaOtNumber1 . $strokaOtNumber2 ?> </p1>
            </div>
        </div>
    </div>
    <div class = "qoute">
        <blockqoute>Неважно сколько дней в твоей жизни, важно - сколько жизни в твоих днях!</blockqoute>
    </div>
    <div class = "footer">
    <?php include 'footer.inc.php'?>
    </div>  
</body>
</html>
