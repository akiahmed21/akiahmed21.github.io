<!DOCTYPE html>
<html>
<head>
    <title>PHP Exercise</title>
</head>
<body>
    <?php
        // Greeting message
        echo "<h1>Welcome to my PHP Website!</h1>";

        // Variables
        $userName = "Guest";
        $userAge = 16;

        // Displaying variables
        echo "<p>Name: $userName</p>";
        echo "<p>Age: $userAge</p>";

        // Constant
        define("SITE_NAME", "My PHP Site");
        echo "<p>Site Name: " . SITE_NAME . "</p>";

        // Conditional statement based on age categories
        if ($userAge < 13) {
            echo "<p>You are a child. Please have adult supervision while using the web!</p>";
        } elseif ($userAge >= 13 && $userAge <= 19) {
            echo "<p>You are a teenager. Don't get too rowdy!</p>";
        } else {
            echo "<p>You are an adult. Good luck!</p>";
        }

        // Loop to display numbers from 1 to 10
        echo "<p>Numbers from 1 to 10:</p><ul>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<li>$i</li>";
        }
        echo "</ul>";

        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $formName = $_POST["formName"];
            $formAge = $_POST["formAge"];

            echo "<h2>Form Submission Result:</h2>";
            echo "<p>Name: $formName</p>";
            echo "<p>Age: $formAge</p>";

            // Built-in function: strlen() to check length of name
            echo "<p>Length of name: " . strlen($formName) . " characters</p>";
        }
    ?>

    <!-- HTML Form -->
    <h2>Enter Your Details</h2>
    <form method="post" action="">
        <label for="formName">Name:</label>
        <input type="text" id="formName" name="formName" required><br><br>

        <label for="formAge">Age:</label>
        <input type="number" id="formAge" name="formAge" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>