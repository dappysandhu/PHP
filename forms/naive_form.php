<h1>A Naive and Messy PHP Form Processing </h1>

<?php

# mixing html and php is bad practice. please do not do this in your assignment or test
# this is just a naive example to simple show how to get form's data


echo "<h2>Form with get method</h2>";
echo "<p><form action=\"\" method=\"get\">";
echo "Name:<br>";
echo "<input type=\"text\" name=\"fullName\" value=\"Default Name Danny\">";
echo "<input type=\"submit\" name=\"submitButton\" value=\"Apply\"> </form></p>";

echo "<h2>Form with post method</h2>";
echo "<form action=\"\" method=\"post\">";
echo "Email:<br>";
echo "<input type=\"email\" name=\"email\">";
echo "<p>ID:<br>";
echo "<input type=\"text\" name=\"id\">";
echo "<input type=\"submit\" name=\"go!\"></form></p>";

echo "<br><br>";
echo "<h2>Form processing</h2>";
if(isset($_GET['submitButton'])){ // why do we need to check?
    echo "You have submitted the form with the get method<br>";
    echo "The data is: " . $_GET["fullName"];
}

# when you have get and post methods in your page, be careful with the 
# query string
# use {$_SERVER["PHP_SELF"]} in the post method
# change line 16 to     echo "<form action=\"naive_form.php\" method=\"post\">";

if(isset($_POST['go!'])){ // why do we need to check?
    echo "You have submitted the form with the post method<br>";
    echo "The data is: <br>" ;
    foreach ($_POST as $key=>$value){
        echo "{$key}: {$value}<br>";
    }
}
?>