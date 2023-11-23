<?php
session_start();
require "includes/database_connect.php";

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
$hospital_id = $_GET["hospital_id"];

$sql_1 = "SELECT *, h.id AS hospital_id, h.name AS hospital_name, c.name AS city_name 
            FROM hospitals h
            INNER JOIN cities c ON h.city_id = c.id 
            WHERE h.id = $hospital_id";
$result_1 = mysqli_query($conn, $sql_1);
if (!$result_1) {
    echo "Something went wrong!";
    return;
}
$hospital = mysqli_fetch_assoc($result_1);
if (!$hospital) {
    echo "Something went wrong!";
    return;
}
$sql_2 = "SELECT a.* 
            FROM amenities a
            INNER JOIN hospitals_amenities ha ON a.id = ha.amenity_id
            WHERE ha.hospital_id = $hospital_id";
$result_2 = mysqli_query($conn, $sql_2);
if (!$result_2) {
    echo "Something went wrong!";
    return;
}
$amenities = mysqli_fetch_all($result_2, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $hospital['hospital_name']; ?> | Farmacy</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/hospital_details.css" rel="stylesheet" />
</head>
    <body>

        <!-- Navbar -->
        <?php
        include ("includes/navbar.php");
        ?>

        <!-- Hero Section -->
        <div class="container mt-5 text-center">
            <div class="image">
                <img src="Img\hospitals\1\hospital_img.jpg" alt="Hospital Image">
            </div>
            <div class="hospital-summary hospital-container mt-5">
                <div class="detail-container">
                    <div class="hospital-name"><?= $hospital['hospital_name'] ?></div>
                    <div class="hospital-address"><?= $hospital['address'] ?></div>
                </div>
                <div class="row no-gutters w-75 ms-auto me-auto mt-5">
                    <div class="price-container col-6">
                        <div class="price">₹ <?= number_format($hospital['price']) ?>/-</div>
                        <div class="price-unit">Onwards</div>
                    </div>
                    <div class="button-container col-6">
                        <a href="#" class="btn btn-primary rounded">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="hospital-amenities mt-5 w-75 ms-auto me-auto">
                <div class="page-container">
                    <h1>Amenities</h1>
                    <div class="row justify-content-between mt-5">
                        <div class="col-md-auto d-flex flex-column align-items-start">
                            <h5>Building</h5>
                            <?php
                            foreach ($amenities as $amenity) {
                                if ($amenity['type'] == "Building") {
                            ?>
                                    <div class="amenity-container">
                                        <img src="img/amenities/<?= $amenity['icon'] ?>.svg">
                                        <span><?= $amenity['name'] ?></span>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>

                        <div class="col-md-auto d-flex flex-column align-items-start">
                            <h5>Common Area</h5>
                            <?php
                            foreach ($amenities as $amenity) {
                                if ($amenity['type'] == "Common Area") {
                            ?>
                                    <div class="amenity-container">
                                        <img src="img/amenities/<?= $amenity['icon'] ?>.svg">
                                        <span><?= $amenity['name'] ?></span>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>

                        <div class="col-md-auto d-flex flex-column align-items-start">
                            <h5>Radiology</h5>
                            <?php
                            foreach ($amenities as $amenity) {
                                if ($amenity['type'] == "Radiology") {
                            ?>
                                    <div class="amenity-container">
                                        <img src="img/amenities/<?= $amenity['icon'] ?>.svg">
                                        <span><?= $amenity['name'] ?></span>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>

                        <div class="col-md-auto d-flex flex-column align-items-start">
                            <h5>Departments</h5>
                            <?php
                            foreach ($amenities as $amenity) {
                                if ($amenity['type'] == "Departments") {
                            ?>
                                    <div class="amenity-container">
                                        <img src="img/amenities/<?= $amenity['icon'] ?>.svg">
                                        <span><?= $amenity['name'] ?></span>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hospital-about page-container mt-5 pt-5 w-75 ms-auto me-auto">
                <h1>About the Hospital</h1>
                <p class="mt-3 text-start"><?= $hospital['description'] ?></p>
            </div>  
        </div>
    
        <?php
        include "includes/signup_modal.php";
        include "includes/login_modal.php";
        include "includes/contactus_modal.php";
        include "includes/footer.php";
        ?>
    </body>
</html>
