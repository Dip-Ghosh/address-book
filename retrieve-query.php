<?php

require_once "config.php";

$sql = "SELECT  c.id, c.name,
        c.first_name,c.email,
        ci.name as city,
        c.zip_code, c.street
        FROM contacts as c
        left join cities ci on c.city_id = ci.id
        where ci.status = 1";

$results = $conn->query($sql);
$sl = 0;

if ($results) {
    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . ++$sl . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['city'] . "</td>";
            echo "<td>" . $row['street'] . "</td>";
            echo "<td>" . $row['zip_code'] . "</td>";
            echo "<td>";
            echo '<a href="view.php?id=' . $row['id'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
            echo '<a href="update.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
            echo '<a href="delete-query.php?id=' . $row['id'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
            echo "</td>";
            echo "</tr>";
        }
        $results->free();
    } else {
        echo '<tr class="alert alert-danger"><td style="text-align: center" colspan="8">No records were found.</td></tr>';
    }
} else {
    echo "Oops! Something went wrong. Please try again later.";
}
$conn->close();
