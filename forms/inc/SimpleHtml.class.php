<?php

class SimpleHtml{    
    private static $author = "Danny";
    private static $courses = [
        "1280" => "CSIS 1280",
        "1175" => "CSIS 1175",
        "2200" => "CSIS 2200",
        "2300" => "CSIS 2300",
    ];
    private static $languages = [
        "csharp" => "C#",
        "javascript" => "JS",
        "php" => "PHP",
        "java" => "JAVA"
    ];

    // we'll ignore the getset :D

    static function getHeader($title){
        ?>
        <!-- Start Header -->
        <!DOCTYPE html>
        <html>
            <head>
                <title><?= $title;?></title>
                <meta name="author" content="<?= self::$author;?>">
                <meta charset="utf-8">
                <link rel="stylesheet" href="css/normalize.css">
                <link rel="stylesheet" href="css/additional.css">       
            </head>
            <body>
                <h1>Courses and Programming Languages</h1>
                <div class="row">
        <?php
    }

    static function getFooter(){
        ?>
        <!-- Start Footer -->
        </div>
            </body>
        </html>
        <?php
    }

    static function getForm(){
        ?>
        <!-- Start Form -->
        <form action="" method="post">
                <p>
                    Enter your name
                    <br>
                    <input type="text" id="name" name="name" size="20" maxlength="40">
                </p>
                <p>
                    Age
                    <br>
                    <input type="text" id="age" name="age" size="20" maxlength="40">
                </p>
                <p>
                    Terms at Douglas
                    <br>
                    <input type="text" id="term" name="term" size="20" maxlength="40">
                </p>
                <p>
                    Select all the courses you have taken (can select more than one)
                    <br>
                    <select name="courses[]" multiple>
                        <!--
                        <option value="1280">CSIS 1280</option>
                        <option value="1175">CSIS 1175</option>
                        <option value="2200">CSIS 2200</option>
                        <option value="2300">CSIS 2300</option>
                        -->
                        <?php
                            foreach(self::$courses as $key=>$val){
                                echo "<option value=\"{$key}\">{$val}</option>";
                            }
                        ?>
                    </select>
                </p>
                <p>
                    Your favorite programming languages? (optional, can select more than one)
                    <br><!--
                    <input type="checkbox" name="languages[]" value="csharp">C#<br>
                    <input type="checkbox" name="languages[]" value="javascript">JS<br>
                    <input type="checkbox" name="languages[]" value="java">Java<br>
                    <input type="checkbox" name="languages[]" value="php">PHP<br>
                        -->
                    <?php
                        foreach(self::$languages as $key=>$val)
                            echo "<input type=\"checkbox\" name=\"languages[]\" value=\"{$key}\">{$val}<br>"
                    ?>
                </p>
                <input type="submit" name="submit" value="Submit">
            </form>
        <?php
    }

    static function displayData(){
        echo "<p>";
        echo "<b>Name</b> " .$_POST['name'] . "<br>";
        echo "<b>Age </b>" .$_POST['age'] . "<br>";
        echo "<b>Number of terms </b>" .$_POST['term'] . "<br>";
        echo "<b>Courses </b>";
        foreach($_POST['courses'] as $course) // we may get an error here
            echo "$course ";
        
        echo "<br>";

        if(isset($_POST['languages'])){
            echo "<b>Your favorite languages</b> ";
            foreach($_POST['languages'] as $language)
                echo "$language ";
        }
        echo "</p>";
    }

    static function displayMessage(){
        ?>
            <!-- Displaying thank you -->
            <div class="row highlight">            
            <p>
                Thank you for submitting the data!</p>
            </p>
            </div>
        <?php
    }

    static function displayError(){
        ?>
            <!-- Displaying error -->
            <div class="row error">        
                <p>Your data contains error, please try again</p>            
            </div>

        <?php
    }
}


?>