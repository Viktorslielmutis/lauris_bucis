<?php
include "db.php";
if(isset($_POST['Saglabat'])){
        $sql = "INSERT INTO exam_answers (question, teksts_1, teksts_2, is_correct, not_correct)
        VALUES ('".$_POST["question"]."','".$_POST["teksts_1"]."','".$_POST["teksts_2"]."','".$_POST["is_correct"]."', '".$_POST["not_correct"]."')";
        if(mysqli_query($conn, $sql)){
                echo "<h1></h1>";
        }else{
                echo "<h1>nav ";
                echo "Error: " . $sql . "<br>" . $conn->error . "</h1>";
        }
        }
?>
<?php

if (isset($_POST['Saglabat'])) {
    $question = $_POST["question"];
    $teksts_1 = $_POST["teksts_1"];
    $teksts_2 = $_POST["teksts_2"];
    
    // Get the selected correct answer
    $correctAnswer = $_POST["correct_answer"];

    // Determine which answer is correct based on the selected option
    if ($correctAnswer === '1') {
        $isCorrect = $teksts_1;
        $notCorrect = $teksts_2;
    } elseif ($correctAnswer === '2') {
        $isCorrect = $teksts_2;
        $notCorrect = $teksts_1;
    } else {
        // Handle an error (invalid correct_answer value)
        echo "Invalid value for correct_answer.";
        exit;
    }
?>

<a href="index.php">Doties atpakaļ</a>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Jautājuma izveide</h1>
    <form method="post">
        <label for="fname">Jautājums:</label>
        <input type="text" id="fname" name="question"><br><br>
        <label for="lname">1. atbilde:</label>
        <input type="text" id="lname" name="teksts_1"><br><br>
        <label for="lname">2. atbilde:</label>
        <input type="text" id="lname" name="teksts_2"><br><br>
        <label for="lname">Pareizā atbilde:</label>
        <select>
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
        <button id="first" type="submit" name="Saglabat">Pievienot</button>
    </form>

</body>
</html>
