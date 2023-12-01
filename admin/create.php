<?php $title = "Create Items";
include 't1.php'; ?>

<!-- Content Row -->
<?php

include "config.php";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $qty = $_POST['qty'];

    $status = $_POST['status'];

    $sql = "INSERT INTO `items`(`item_name`, `qty`, `status`) VALUES ('$name','$qty','$status')";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo '<div class="container alert alert-success" role="alert">
        Item Created !!
      </div>';
    } else {
        echo '<div class="container alert alert-success" role="alert">
        Error : 
      </div>' . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>

<form action="" method="POST" class="container">

    <div class="mb-3">
        <label for="name" class="form-label">Item Name</label>
        <input type="text" class="form-control" name="name" id="name" required>
    </div>
    <div class="mb-3">
        <label for="qty" class="form-label">Qty</label>
        <input type="number" class="form-control" name="qty" id="qty" required>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" name="status" id="status" required>
            <option selected>Select the status</option>
            <option value="1">Enable</option>
            <option value="0">Disable</option>
        </select>
    </div>
    <input class="btn btn-primary" type="submit" name="submit" value="submit">
</form>

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<?php include 't2.php'; ?>