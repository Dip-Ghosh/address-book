<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Address Book</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
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

                    <?php require_once "retrieve-query.php"; ?>

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