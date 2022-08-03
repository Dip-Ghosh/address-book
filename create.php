
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Address book</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container" style="margin-top:60px">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">Create Address Book</div>
                    <div class="card-body">
                        <?php   require "create-query.php"; ?>
                        <form method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control"  value="">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="firstName" class="form-control" value="">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <?php
                                        require_once "config.php";
                                        $cities =  "select * from cities where status=1";
                                        $cities = $conn->query($cities);
                                        $conn->close();
                                        ?>
                                        <select class="form-control" name="city" id="city-id">
                                            <?php
                                            foreach ($cities as $city){
                                                echo "<option value=". $city['id'] .">". $city['name'] ."</option>";
                                            }
                                            ?>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Street</label>
                                        <input type="text" name="street" class="form-control" value="">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Zip Code</label>
                                        <input type="text" name="zipCode" class="form-control" value="">

                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" name="save">Submit</button>
                            <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>