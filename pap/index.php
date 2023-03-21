<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="main.js"></script>
	<title>My Page</title>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 5px;
		}
	</style>
</head>
<body>

<?php
    // connect to the database
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>

<button onclick="document.getElementById('popup').style.display='block'">+</button>

<div id="popup" style="display:none;">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nazev">nazev:</label>
        <input type="text" name="nazev" id="nazev" required>
        <br>
        <label for="velikost">velikost:</label>
        <select name="velikost" id="velikost">
            <option value="Velký">Velký</option>
            <option value="Střední">Střední</option>
            <option value="Malý">Malý</option>
        </select>
        <br>
        <label for="vek">vek:</label>
        <input type="text" name="vek" id="vek" required>
        <br>
        <input type="submit" name="insert" value="Save">
        <button type="button" onclick="document.getElementById('popup').style.display='none'">Cancel</button>
    </form>
</div>

<?php
        if (isset($_POST['insert'])) {
            $nazev = $_POST['nazev'];
            $velikost = $_POST['velikost'];
            $vek = $_POST['vek'];
            
            $stmt = $conn->prepare("INSERT INTO papousek (nazev, velikost, vek) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nazev, $velikost, $vek);
            
            if ($stmt->execute()) {
                // refresh the page to show the updated table
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
   
       
    // display table of data
    $sql = "SELECT * FROM papousek";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<br>";
        echo "<table><tr><th>nazev</th><th>velikost</th><th>vek</th><th>Actions</th></tr>";
    }
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr data-id='" . $row['id'] . "' style='background-color: ". "; color: #333333;'>";
            echo "<td style='padding: 10px; border: 1px solid #dddddd;'>" . $row['nazev'] . "</td>";
            echo "<td style='padding: 10px; border: 1px solid #dddddd;'>" . $row['velikost'] . "</td>";
            echo "<td style='padding: 10px; border: 1px solid #dddddd;'>" . $row['vek'] . "</td>";
            echo "<td style='padding: 10px; border: 1px solid #dddddd;'>" .
            "<button onclick='editRow(" . $row['id'] . ")'>Edit</button>" .
            "<button onclick='deleteRow(" . $row['id'] . ")' id='deleteButton-" . $row['id'] . "'>Odstranit</button>".
            "</td>";
            echo "</tr>";
        }
  
?>