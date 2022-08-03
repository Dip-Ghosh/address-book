<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Address book</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
require_once "edit-query.php";
?>
<div class="container" style="margin-top:60px">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">View Address book</div>
                <div class="card-body">
                    <form >
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input readonly="readonly" type="text" name="name" class="form-control" value="<?php echo $name ?>">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input  readonly="readonly" type="text" name="firstName" class="form-control"
                                           value="<?php echo $firstName ?>">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input  readonly="readonly" type="text" name="email" class="form-control" value="<?php echo $email ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <select  readonly="readonly" class="form-control" name="city" id="city-id">
                                        <?php
                                        foreach ($cities as $city) {

                                            ?>
                                            <option
                                                <?php echo (intval($city['id']) == intval($cityId)) ? ' selected="selected"' : ''; ?>
                                                    value="<?php echo $city['id'] ?>"><?php echo $city['name'] ?> </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Street</label>
                                    <input  readonly="readonly" type="text" name="street" class="form-control" value="<?php echo $street ?>">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Zip Code</label>
                                    <input  readonly="readonly" type="text" name="zipCode" class="form-control"
                                           value="<?php echo $zipCode; ?>">

                                </div>
                            </div>

                        </div>

                        <a href="index.php" class="btn btn-secondary ml-2">Back</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>