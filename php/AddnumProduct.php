<!DOCTYPE html>
<html lang="en">

<?php
// include('product.php');
include('../headtotoe/headee.php');
require_once 'connectdb.php';
$stmPrdType = $conn->prepare("SELECT* FROM tbl_product_type");
$stmPrdType->execute();
// $resultPrdType = $stmPrdType->fetchAll();
$resPrdType = $stmPrdType->get_result();
$resultPrdType = $resPrdType->fetch_all(MYSQLI_ASSOC);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Basic PHP PDO Form add product by devbanban.com 2021</title>
    <!-- sweet alert  -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12"> <br>
            <h3> เพิ่มสินค้าในคลัง </h3> <br>
                <?php
                //ถ้ามีการส่งพารามิเตอร์ method get และ  method get ชือ act = add จะแสดงฟอร์มเพิ่มข้อมูล
               
                 ?>
                
                <table class="table table-striped  table-hover table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th width="5%" class="text-center">รหัสสินค้า</th>
                            <th width="20%" class="text-center">ชื่อสินค้า</th>
                            <th width="20%">ประเภทสินค้า</th>
                            <th width="20%">รายละเอียดสินค้า</th>
                            <th width="20%" class="text-center">ราคา</th>

                            <th width="20%" class="text-center">จำนวน</th>
                            <!-- <th width="10%" class="text-center">นำเข้า</th>
                            <th width="10%" class="text-center">นำออก</th> -->

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //เรียกไฟล์เชื่อมต่อฐานข้อมูล
                        


                        //คิวรี่ข้อมูลมาแสดงในตาราง
                        $stmt = $conn->prepare("SELECT* FROM product");
                        // $stmt->execute();
                        // $result = $stmt->fetchAll();
                        $stmt->execute();
                        // $result = $stmt->fetchAll();
                        $resultSet = $stmt->get_result();
                        $result = $resultSet->fetch_all(MYSQLI_ASSOC);
                        foreach ($result as $row) {
                            ?>
                            <tr>
                                <td>
                                    <?= $row['p_id']; ?>
                                </td>
                                <!-- <td><img src="upload/<\?= $row['product_img']; ?>" width="70%"></td> -->
                                <td>
                                    <?= $row['p_name']; ?>
                                </td>
                                <td>
                                    <?php
                                    // ค้นหาชื่อประเภทสินค้าจาก $resultPrdType ที่มี id ตรงกับ type_id ของแถวนี้
                                    $type_id = $row['type_id'];
                                    foreach ($resultPrdType as $rowPrdType) {
                                        if ($rowPrdType['type_id'] == $type_id) {
                                            echo $rowPrdType['type_name'];
                                            break; // หยุด loop เมื่อเจอข้อมูลที่ตรงกันแล้ว
                                        }
                                    }
                                    ?>
                                </td>
                                <td>

                                </td>

                                <td align="right">
                                    <?= number_format($row['p_price'], 2); ?> บาท
                                </td>
                                <td>
                                    <center>
                                        <?= $row['p_num']; ?> ชิ้น
                                </td>
                                <!-- <td>
                                    <center>
                                        </?= $row['p_in']; ?>
                                </td>
                                <td>
                                    <center>
                                        </?= $row['p_out']; ?>
                                </td> -->
                                <td><a href="formAddProduct.php?act=edit" class="btn btn-success btn-sm">+</a>
                                </td>
                                <!-- <td><a href="formAddProduct.php?act=delete" class="btn btn-danger btn-sm">-</a></td> -->
                            <?php } ?>
                    </tbody>
                </table>
                <br>
                <!-- <center>Basic PHP PDO Form add product by devbanban.com 2021</center> -->
            </div>
        </div>
    </div>
</body>

</html>

<?php

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit();



//ตรวจสอบตัวแปรที่ส่งมาจากฟอร์ม



require_once 'connectdb.php';

if (isset($_POST['product_id']) && isset($_POST['product_name']) && isset($_POST['product_type']) && isset($_POST['product_price']) && isset($_POST['product_num'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_type = $_POST['product_type'];
    $product_price = $_POST['product_price'];
    $product_num = $_POST['product_num'];

    $stmt = $conn->prepare("INSERT INTO product (p_id, p_name, type_id, p_num, p_price) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssddd", $product_id, $product_name, $product_type, $product_num, $product_price);

    if ($stmt->execute()) {
        echo '<script>
            setTimeout(function() {
                swal({
                    title: "เพิ่มข้อมูลสำเร็จ",
                    type: "success"
                }, function() {
                    window.location = "formAddProduct.php";
                });
            }, 1000);
        </script>';
    } else {
        echo '<script>
            setTimeout(function() {
                swal({
                    title: "เกิดข้อผิดพลาด",
                    type: "error"
                }, function() {
                    window.location = "formAddProduct.php";
                });
            }, 1000);
        </script>';
    }

    $stmt->close();
    $conn->close();
}

// ตัวอย่างฟังก์ชัน deleteProduct// ตัวอย่างฟังก์ชัน deleteProduct
function deleteProduct($product_id)
{
    require_once 'connectdb.php'; // เชื่อมต่อฐานข้อมูล

    // เตรียมและ execute คำสั่ง SQL DELETE
    $stmt = $conn->prepare("DELETE FROM product WHERE p_id = :product_id");
    $stmt->bindParam(':product_id', $product_id, PDO::PARAM_STR);
    $result = $stmt->execute();

    // ปิดการเชื่อมต่อฐานข้อมูล
    $conn = null;

    return $result; // ส่งผลลัพธ์การลบกลับไปให้ฟังก์ชันเรียกใช้
}

if (isset($_GET['act']) && $_GET['act'] == 'delete') {
    if (isset($_GET['p_id'])) {
        $product_id_to_delete = $_GET['p_id'];

        $delete_result = deleteProduct($product_id_to_delete);

        if ($delete_result) {
            echo '<script>
                     setTimeout(function() {
                      swal({
                          title: "ลบข้อมูลสำเร็จ",
                          type: "success"
                      }, function() {
                          window.location = "formAddProduct.php"; // รีเฟรชหน้าหลังจากลบเสร็จ
                      });
                    }, 1000);
                </script>';
        } else {
            echo '<script>
                     setTimeout(function() {
                      swal({
                          title: "เกิดข้อผิดพลาดในการลบข้อมูล",
                          type: "error"
                      }, function() {
                          window.location = "formAddProduct.php"; // รีเฟรชหน้าหลังจากลบเสร็จ
                      });
                    }, 1000);
                </script>';
        }
    }
}


?>