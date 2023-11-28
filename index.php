<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Document</title>
</head>
<a href="create.php">Ievietot jautājumu</a>
<body>
    <div class="tests">Tests</div>
</body>
</html>

<?php   
include "db.php";
$sql="select * from exam_answers";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
                       ?>
                               <div class="box">
                            <div class="question"><? echo $row["question"]  ?></div>
                            <div class="teksts"><? echo $row["teksts_1"]  ?></div>
                            <div class="teksts"><? echo $row["teksts_2"]  ?></div>
                            <div class="iscorrect"><? echo $row["is_correct"]  ?></div>
                            <div class="notcorrect"><? echo $row["not_correct"]  ?></div>
                            </div>
               <?}}?>