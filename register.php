<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUF Student Registration Form</title>
    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Bebas Neue', cursive;
            background: rgb(131,58,180);
            background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: auto;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 500px;
            margin: 20px;
            width: 80%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        label {
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input[type="text"], input[type="email"], input[type="date"], textarea, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #220606;
            border-radius: 4px;
        }

        textarea {
            height: 100px;
        }

        .radio-group {
            margin: 10px 0;
        }

        .radio-group label {
            font-weight: normal;
            margin-right: 10px;
        }

        .button-group {
            text-align: center;
            margin: 10px 0;
        }

        .button-group input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 4px;
            cursor: pointer;
        }

        .button-group input[type="reset"] {
            background-color: #6c757d;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 4px;
            cursor: pointer;
        }

        .button-group input:hover {
            opacity: 0.8;
        }

        img.logo {
            display: block;
            margin: 0 auto 20px;
            max-height: 200px;
            width: auto;
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
                width: 100%;
                height: 80vh;
            }
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
    <img src="auf-logo.png" alt="AUF Logo" class="logo" width="75" height="75">
        <h1>AUF Student Registration Form</h1>
        <form action="summary.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob">

            <label>Sex:</label>
            <div class="radio-group">
                <label><input type="radio" name="sex" value="Male"> Male</label>
                <label><input type="radio" name="sex" value="Female"> Female</label>
            </div>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="address">Address:</label>
            <textarea id="address" name="address"></textarea>

            <label for="department">College Department:</label>
            <select id="department" name="department">
                <option value="Engineering">College of Engineering</option>
                <option value="Business">College of Accountancy and Business Management</option>
                <option value="Education">College of Education</option>
                <option value="Computing Studies">College of Computer Studies</option>
                <option value="Arts and Communication">College of Arts and Communication</option>
            </select>

            <label for="program">Program:</label>
            <input type="text" id="program" name="program">

            <label for="mobile">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile">

            <div class="button-group">
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </div>