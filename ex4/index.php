<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .main {
            width: 1200px;
            margin: auto;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['listStudents'])) {
        $_SESSION['listStudents'] = array();
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idStudent = htmlspecialchars($_POST['idStudent']);
        $name = htmlspecialchars($_POST['name']);
        $age = htmlspecialchars($_POST['age']);
        $email = htmlspecialchars($_POST['email']);
        $gender = htmlspecialchars($_POST['gender']);
        $student = array(
            'id' => $idStudent,
            'name' => $name,
            'age' => $age,
            'email' => $email,
            'gender' => $gender
        );
        array_push($_SESSION['listStudents'], $student);
    }
    $listStudents = $_SESSION['listStudents'];
    ?>
    <div class="main">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                <?php
                foreach ($listStudents as $student) {
                    echo '
                    <tr>
                        <th scope="row">'.$student['id'].'</th>
                        <td>'.$student['name'].'</td>
                        <td>'.$student['age'].'</td>
                        <td>'.$student['email'].'</td>
                        <td>'.$student['gender'].'</td>
                    </tr>
                    ';
                }
                ?>
            </tbody>
        </table>
        <button><a href="input.php">Add Student</a></button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>