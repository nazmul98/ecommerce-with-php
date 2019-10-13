<?php
include_once("lib/database.php");
include_once("../inc/table_inc/header.php");
$db = new Database();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$query = "SELECT * FROM `orders` WHERE id = '$id' ";
$select_data = $db->select($query);
$data = $select_data->fetch_assoc();
?>
<div class="col-10">
    <div class="jumbotron">
    <h2 class="display-5 text-center font-italic">Welcome to Orders Control Panel</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="float-left">Order Data</h4>
            <a href="index.php" class="btn btn-primary float-right">Order List</a>
        </div>
        <div class="card-body py-5" style="background: #E9ECEF;">
            <table class="table m-auto" style="max-width: 700px;">
                <tbody>
                    <tr>
                        <th scope="col">Product Name:</th>
                        <td scope="col"><?php echo $data['product']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Quantity:</th>
                        <td scope="col"><?php echo $data['qty']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
<?php include_once("../inc/table_inc/footer.php"); ?>