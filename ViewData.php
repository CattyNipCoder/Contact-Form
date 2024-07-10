<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Submitted Data</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .button-container {
            display: flex;
            justify-content: center;
        }
        .button-container a {
            display: inline-block;
            padding: 10px 20px;
            background: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px;
            border: 2px solid #0056b3;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: background 0.3s, box-shadow 0.3s;
        }
        .button-container a:hover {
            background: #0056b3;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Submitted Data To Database</h2>
        <?php
        $server = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "mynewdb";

        // Create connection
        $con = new mysqli($server, $username, $password, $dbname);

        // Check connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        // Fetch data
        $sql = "SELECT name, age, number, email, feedback FROM test";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Name</th><th>Age</th><th>Phone</th><th>Email</th><th>Feedback</th></tr>";

            
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["name"] . "</td><td>" . $row["age"] . "</td><td>" . $row["number"] . "</td><td>" . $row["email"] . "</td><td>" . $row["feedback"] . "</td></tr>";
            }

            echo "</table>";
        } else {
            echo "0 results";
        }

        // Close connection
        $con->close();
        ?>
         <div class="button-container">
            <a href="index.html">Go Back to Home Page</a>
        </div>
    </div>
</body>
</html>
