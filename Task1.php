<!DOCTYPE html>
<html>
<head>
    <title>Workshop Registration</title>
</head>
<body>
    <h1>Workshop Registration</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["submit"])) {
            $title = $_GET["title"];
            $name = $_GET["name"];
            $email = $_GET["email"];
            $isSpeaker = $_GET["speaker"];
            
            if (empty($title) || empty($name) || empty($email) || !isset($isSpeaker)) {
                echo "Please fill in all the required fields.";
            } else {
                echo "<p><strong>Registration Details:</strong></p>";
                echo "<p><strong>Title:</strong> $title</p>";
                echo "<p><strong>Name:</strong> $name</p>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Speaker:</strong> " . ($isSpeaker == "yes" ? "Yes" : "No") . "</p>";
            }
        }
    }
    ?>
    
    <form action="task1.php" method="GET">
        <label for="title">Title:</label>
        <select name="title" id="title">
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
            <option value="Ms">Ms</option>
            <option value="Dr">Dr</option>
            <option value="Prof">Prof</option>
        </select>
        <br>
        
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        
        <label>Speaker:</label>
        <input type="radio" name="speaker" value="yes"> Yes
        <input type="radio" name="speaker" value="no"> No
        <br>
        
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>


<iframe src="task1.txt" height="400" width="1200">
Your browser does not support iframes. </iframe>