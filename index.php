<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="center" style="text-align: center">Address Book</h2>
                    <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> New Address</a>
                </div>

                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Zip Code</th>
                        <th>Street</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                    <?php
                    require_once "config.php";

                    $sql = "SELECT 
                                c.id,
                                c.name,
                                c.first_name,
                                c.email,
                                ci.name as city,
                                c.zip_code,
                                c.street
                                
                        FROM contacts as c
                        left join cities ci on c.city_id = ci.id
                        where ci.status = 1";

                    $results = $conn->query($sql);
                    $sl      = 0;

                    if($results){
                        if($results->num_rows > 0){

                            while($row = $results->fetch_assoc()){
                                echo "<tr>";
                                echo "<td>" . ++$sl . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['first_name'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['city'] . "</td>";
                                echo "<td>" . $row['street'] . "</td>";
                                echo "<td>" . $row['zip_code'] . "</td>";
                                echo "<td>";
                                echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="delete-query.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                echo "</td>";
                                echo "</tr>";
                            }
                            $results->free();
                        } else{
                            echo '<tr class="alert alert-danger"><td style="text-align: center" colspan="8">No records were found.</td></tr>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    $conn->close();

                    ?>

                    </tbody>
                </table>

            </div>
        </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script
</body>
</html>