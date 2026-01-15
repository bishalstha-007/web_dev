<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

// $data = ($_POST["hobby"]);
// $value = count($data);
// $i = 1;
// foreach ($data as $v) {
//     if ($i < $value) {
//         echo $v . ",";
//     } else {
//         echo "$v" . "";
//     }
//     $i++;
// }
// echo implode("," , $data );

echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php

    if (isset($_POST["submit"])) {

    ?>
        <table border="1px solid">
            <tr>
                <td> Name</td>
                <td> Age</td>
                <td> Roll_no</td>
                <td> Date</td>
                <td>Gender</td>
                <td>Hobbies</td>
                <td>Country</td>

            </tr>
            <tr>

                <td> <?php echo $_POST["username"]; ?> </td>
                <td> <?php echo $_POST["age"]; ?> </td>
                <td> <?php echo $_POST["roll_no"]; ?> </td>
                <td> <?php echo $_POST["dob"]; ?> </td>
                <td> <?php echo !empty($_POST["gender"]) ?  $_POST["gender"] : ""; ?> </td>
                <td>
                    <?php
                    echo !empty($_POST["hobby"]) ? implode(", ", $_POST["hobby"]) : "";
                    ?>
                </td>
                <td> <?php echo $_POST["country"]; ?> </td>

            </tr>
        </table>
        unset($_POST);
    <?php }
    ?>
    <input type="file" name="file" id="">

    <form method="POST">
        <br>
        Name : <input type="text" name="username" placeholder="Enter yout name">
        <br>
        Age: <input type="number" name="age" placeholder="Enter your age">
        <br>
        Roll No: <input type="number" name="roll_no" placeholder="Enter your roll number">
        <br>
        Date of Birth: <input type="date" name="dob">
        <br>


        <label for="gender"> Gender</label>

        <input type="radio" id="male" value="male" name="gender">
        <label for="male"> Male </label> <br>

        <input type="radio" id="female" value="female" name="gender">
        <label for="female"> Female </label> <br>

        Hobbies: <br>
        <input type="checkbox" value="reading" name="hobby[]"> Reading <br>
        <input type="checkbox" value="travelling" name="hobby[]"> Travelling <br>
        <input type="checkbox" value="running" name="hobby[]"> Running <br>
        <input type="checkbox" value="coding" name="hobby[]"> Coding <br>

        <label for="country">Select yout country:</label>
        <select name="country" id="country">
            <!-- <option value=""> Choose a country</option> -->
            <option value="Nepal">Nepal</option>
            <option value="India">India</option>
            <option value="United States">United States</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="Japan">Japan</option>

        </select>

        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>