<!DOCTYPE html>
<html>
<head>
    <title>Application Approval</title>
    <style>
        body {
            text-align: center;
        }

        h1 {
            text-align: center;
        }

        table {
            margin: 0 auto; /* Center the table horizontally */
        }

        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Application Approval</h1>
    <?php
    // Fetch application data from the database
    $connection = mysqli_connect("localhost", "root", "", "rentitdb");
    $query = "SELECT * FROM apartment_ownerstb";
    $result = mysqli_query($connection, $query);

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>OwnerID</th>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Phone</th>";
    echo "<th>DOB</th>";
    echo "<th>NID</th>";
    echo "<th>Address</th>";
    echo "<th>City</th>";
    echo "<th>Area</th>";
    echo "<th>ZipCode</th>";
    echo "<th>RentalHistory</th>";
    echo "<th>Employment</th>";
    echo "<th>Ap_name</th>";
    echo "<th>sqrfoot</th>";
    echo "<th>rent</th>";
    echo "<th>roomNo</th>";
    echo "<th>Disapprove</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['OwnerID'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['DOB'] . "</td>";
        echo "<td>" . $row['NID'] . "</td>";
        echo "<td>" . $row['Address'] . "</td>";
        echo "<td>" . $row['City'] . "</td>";
        echo "<td>" . $row['Area'] . "</td>";
        echo "<td>" . $row['ZipCode'] . "</td>";
        echo "<td>" . $row['RentalHistory'] . "</td>";
        echo "<td>" . $row['Employment'] . "</td>";
        echo "<td>" . $row['Ap_name'] . "</td>";
        echo "<td>" . $row['sqrfoot'] . "</td>";
        echo "<td>" . $row['rent'] . "</td>";
        echo "<td>" . $row['roomNo'] . "</td>";
        echo "<td><button onclick='disapproveApplication(" . $row['OwnerID'] . ");'>Disapprove</button></td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
    <script>
        function disapproveApplication(ownerID) {
            const confirmed = confirm("Are you sure you want to disapprove this application?");
            if (confirmed) {
                // Perform the deletion based on OwnerID
                // You'll need to send a request to a PHP script that handles the deletion
                // The PHP script should delete the records from 'apartment_ownerstb' and 'ownerinfotb'
                // based on the provided OwnerID value
                window.location.href = "delete_application.php?ownerID=" + ownerID;
            }
        }
    </script>
</body>
</html>
