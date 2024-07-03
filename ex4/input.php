<h2>Student Information Form</h2>
<form action="index.php" method="post">
    <label for="idStudent">Id:</label>
    <input type="number" id="idStudent" name="idStudent" required><br><br>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="email">Gender:</label>
    <input type="radio" value="male" name="gender">Male
    <input type="radio" value="female" name="gender">Female<br><br>
    <input type="submit" value="Submit">
</form>