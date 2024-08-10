<?php
session_start();

if (!isset($_SESSION["name"])) {
    header("Location: register.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>AUF Student Summary</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: 40px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .male {
            background-color: #ADD8E6; /* light blue */
        }
        .female {
            background-color: #FFC0CB; /* light pink */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>AUF Student Summary</h2>
        <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Name</td>
                <td <?= ($_SESSION["sex"] == "Male") ? 'class="male"' : 'class="female"'; ?>>
                    <?= $_SESSION["name"] ?>
                </td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><?= $_SESSION["date_of_birth"] ?></td>
            </tr>
            <tr>
                <td>Sex</td>
                <td><?= $_SESSION["sex"] ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?= $_SESSION["email"] ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?= $_SESSION["address"] ?></td>
            </tr>
            <tr>
                <td>College Department</td>
                <td><?= $_SESSION["college_department"] ?></td>
            </tr>
            <tr>
                <td>Program</td>
                <td><?= $_SESSION["program"] ?></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td><?= $_SESSION["mobile_number"] ?></td>
            </tr>
        </table>
    </div>
</body>
</html>