<!DOCTYPE html>
<html lang="en">
<head>
    <title> Rachel Dalby </title>
    <style>
        body {background-color: teal;}
        h1   {color: white;}
        h2	 {color: white;}
        p    {color: white;}
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 20%;
        }
        hr {
            align: center;
            width: 80%;
            color: white;
        }
        div{
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            width: 80%
        }
    </style>
</head>
<body>
    <div>
        <h1>Rachel Dalby</h1>
    </div>
    <hr>
    <br>
    <div>
        <img src="/Images/IMG_2223.JPG" alt="picture of me"/>
    </div>
    <br>
    <div>
        <p>This is my first course with the extension school. I just want
        a refresher and that is why I'm taking this course.</p>
    </div>
   <br>
    <hr>
    <div>
    <p>
        <?php
            $storedPhrases = array(
                'Simplicity is the ultimate sophistication. -Leonardo Da Vinci',
                'Art is never finished, only abandoned. -Leonardo Da Vinci',
                'random thing 3',
                'random thing 4',
                'random thing 5',
                'random thing 6',
                'random thing 7 ',
            );
            echo $storedPhrases[rand(0,count($storedPhrases)-1)];

        ?>
        </p>
    </div>
<hr>
</body>
</html>