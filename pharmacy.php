<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include("includes/head_links.php");
    ?>
    <link rel="stylesheet" href="CSS/pharmacy.css">
    <title>Pharmacy | Page</title>
</head>
<body>
    <!-- Navbar Section -->
    <?php
        include ("includes/navbar.php"); 
    ?>
    
    <!-- Hero Section -->
    <div class="container pt-4">
      <div class="banner-container">
        <h2 class="white pb-3 text-center">Search for Medicines</h2>
        <form id="search-form">
            <div class="input-group medicine-search">
                <input type="text" class="form-control border-primary rounded me-2" id='medicine' name='medicine-name' placeholder="Enter the name of Medicines" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary btn-sm submit-btn">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
      </div>
    </div>
    
    <!-- Crousel Section -->
    <div class="container pt-5">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner crousel-section">
                <div class="carousel-item active">
                    <img src="Img\bg.jpg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="Img\hospital_bg.jpg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="Img\pharmacy_bg.jpg" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
        </div>
    </div>

    <!-- Main Section -->

    <!-- Medicine Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="info-section d-flex justify-content-between">
                <div class="text info-text">
                    <p>Medicinal Products</p>
                </div>
                <div class="text">
                    <a class="more-btn text-secondary" href="pharmacy_list.php?category=Medicine_Product">More</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="Img\pharmacy_bg.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title border border-primary-subtle p-2 rounded">Paracetamol</h5>
                            <p class="card-text">Analgesic and antipyretic drug that is used to temporarily relieve mild-to-moderate pain and fever.</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-group d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary btn-sm submit-btn rounded">
                                    <i class="fa fa-heart"></i>
                                </button>
                                <button type="submit" class="btn btn-primary btn-sm submit-btn">
                                    view
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <img src="Img\pharmacy_bg.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Digene</h5>
                            <p class="card-text">Relieves bloating, belching, and gas, Reduces feelings of discomfort in the stomach, Alleviates heartburn (acidity) and indigestion.</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-group d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary btn-sm submit-btn rounded">
                                    <i class="fa fa-heart"></i>
                                </button>
                                <button type="submit" class="btn btn-primary btn-sm submit-btn">
                                    view
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <img src="Img\pharmacy_bg.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Crocin</h5>
                            <p class="card-text">Tablet helps relieve pain and fever by blocking the release of certain chemical messengers responsible for fever and pain.</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-group d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary btn-sm submit-btn rounded">
                                    <i class="fa fa-heart"></i>
                                </button>
                                <button type="submit" class="btn btn-primary btn-sm submit-btn">
                                    view
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <img src="Img\pharmacy_bg.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sinarest</h5>
                            <p class="card-text">Relieves symptoms of common cold such as blocked nose, runny nose, watery eyes, sneezing, and congestion or stuffiness.</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-group d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary btn-sm submit-btn rounded">
                                    <i class="fa fa-heart"></i>
                                </button>
                                <button type="submit" class="btn btn-primary btn-sm submit-btn">
                                    view
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Personel Section -->
    <div class="container mt-5">
        <div class="container">
            <div class="info-section d-flex justify-content-between">
                <div class="text info-text">
                    <p>Personel Care Products</p>
                </div>
                <div class="text">
                    <a class="more-btn text-secondary" href="pharmacy_list.php?category=Personal_Product">More</a>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-between">
            <div class="card">
                <img src="Img\pharmacy_bg.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title border border-primary-subtle p-2">Vaseline</h5>
                    <p class="card-text">Trusted to protect your family's skin for 150 years. With properties that help accelerate your skin's natural healing process.</p>
                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary btn-sm submit-btn rounded">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm submit-btn">
                            view
                        </button>
                    </div>
                </div>
            </div>

            <div class="card">
                <img src="Img\pharmacy_bg.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title border border-primary-subtle p-2">Fair and Lovely</h5>
                    <p class="card-text">Gives a fresh make-up like glow, Covers dark spots & blemishes, gives matte, non-oily finish,Works to give even skin tone.</p>
                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary btn-sm submit-btn rounded">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm submit-btn">
                            view
                        </button>
                    </div>
                </div>
            </div>

            <div class="card">
                <img src="Img\pharmacy_bg.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title border border-primary-subtle p-2">Mamaearth Onion Shampoo</h5>
                    <p class="card-text">Helps combat hair fall with natural ingredients. Onion is rich in sulphur, potassium, and antioxidants, which help reduce hair fall and accelerate growth.</p>
                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary btn-sm submit-btn rounded">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm submit-btn">
                            view
                        </button>
                    </div>
                </div>
            </div>

            <div class="card">
                <img src="Img\pharmacy_bg.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title border border-primary-subtle p-2">Himalaya Protein Hair Cream</h5>
                    <p class="card-text">Natural hair tonic that nourishes the hair root and shaft. It has specially formulated ingredients that help strengthen hair, promote hair growth.</p>
                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary btn-sm submit-btn rounded">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm submit-btn">
                            view
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Healthcare Section -->
    <div class="container mt-5">
        <div class="container">
            <div class="info-section d-flex justify-content-between">
                <div class="text info-text">
                    <p>Health care Products</p>
                </div>
                <div class="text">
                    <a class="more-btn text-secondary" href="pharmacy_list.php?category=Health_Product">More</a>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-between">
            <div class="card">
                <img src="Img\pharmacy_bg.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title border border-primary-subtle p-2">Digital Thermometer</h5>
                    <p class="card-text">A thermometer is a very important medical device that needs to be kept within one's reach in a first aid kit whether at home, office, school, college or any health centre.</p>
                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary btn-sm submit-btn rounded">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm submit-btn">
                            view
                        </button>
                    </div>
                </div>
            </div>

            <div class="card">
                <img src="Img\pharmacy_bg.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title border border-primary-subtle p-2">Pulse Oximeter</h5>
                    <p class="card-text">Pulse oximetry is a noninvasive method for monitoring a person's blood oxygen saturation.</p>
                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary btn-sm submit-btn rounded">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm submit-btn">
                            view
                        </button>
                    </div>
                </div>
            </div>

            <div class="card">
                <img src="Img\pharmacy_bg.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title border border-primary-subtle p-2">Bloor Presure Monitor</h5>
                    <p class="card-text">helps you to easily and quickly make a note of your blood pressure at home or anywhere else on the go.</p>
                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary btn-sm submit-btn rounded">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm submit-btn">
                            view
                        </button>
                    </div>
                </div>
            </div>

            <div class="card">
                <img src="Img\pharmacy_bg.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title border border-primary-subtle p-2">Vaporizer</h5>
                    <p class="card-text">This device can help relieve the symptoms of a common cold or the flu. It can decongest the lungs, clear away the sinuses</p>
                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary btn-sm submit-btn rounded">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm submit-btn">
                            view
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Snacks Section -->
    <div class="container mt-5">
        <div class="container">
            <div class="info-section d-flex justify-content-between">
                <div class="text info-text">
                    <p>Food beverages Products</p>
                </div>
                <div class="text">
                    <a class="more-btn text-secondary" href="pharmacy_list.php?category=Snack_Product">More</a>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-between">
            <div class="card">
                <img src="Img\pharmacy_bg.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title border border-primary-subtle p-2">Oats</h5>
                    <p class="card-text">Oats is a tasty blend of authentic Indian spices which is a perfect answer to your chatpata evening cravings!</p>
                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary btn-sm submit-btn rounded">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm submit-btn">
                            view
                        </button>
                    </div>
                </div>
            </div>

            <div class="card">
                <img src="Img\pharmacy_bg.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title border border-primary-subtle p-2">Peanut Butter</h5>
                    <p class="card-text">It's the tastiest peanut butter out there with tons of health benefits! Rich Dark Chocolate with high quality roasted peanuts</p>
                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary btn-sm submit-btn rounded">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm submit-btn">
                            view
                        </button>
                    </div>
                </div>
            </div>

            <div class="card">
                <img src="Img\pharmacy_bg.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title border border-primary-subtle p-2">Whey Protein Powder</h5>
                    <p class="card-text">4 gm Protein, 5 gm BCAAs, only 1 gm of Sugar and 1 gm of Fat per serve of 34 gm</p>
                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary btn-sm submit-btn rounded">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm submit-btn">
                            view
                        </button>
                    </div>
                </div>
            </div>

            <div class="card">
                <img src="Img\pharmacy_bg.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title border border-primary-subtle p-2">Mixed Fruit Juice</h5>
                    <p class="card-text">Savour the all time favorite combo of fruit goodness with every sip of Masala Mixed Fruit with Real</p>
                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary btn-sm submit-btn rounded">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm submit-btn">
                            view
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Accordian -->
    <div class="container mt-5 pt-5">
        <div class="accordion accordion-flush" id="pharmacyaccordian">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    100% Genuine Products
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#pharmacyaccordian">
                    <div class="accordion-body">All the items in our online pharmacy store are validates and authorised to ensure the you receive the best healthcare.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Vast Range of Products
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#pharmacyaccordian">
                    <div class="accordion-body">We offer almost all kind of medicine and healt care producs.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Home delivery option
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#pharmacyaccordian">
                    <div class="accordion-body">You can opt for delivery of your orders at your home with cash on delivery.</div>
                </div>
            </div>
        </div>
    </div>

    <!--  -->

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="Img\pharmacy_bg.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Paracetamol</h5>
                        <p class="card-text">Analgesic and antipyretic drug that is used to temporarily relieve mild-to-moderate pain and fever.</p>
                    </div>
                    <div class="card-footer">
                        <div class="form-group d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary btn-sm submit-btn rounded">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="submit" class="btn btn-primary btn-sm submit-btn">
                                view
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="Img\pharmacy_bg.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Digene</h5>
                        <p class="card-text">Relieves bloating, belching, and gas, Reduces feelings of discomfort in the stomach, Alleviates heartburn (acidity) and indigestion.</p>
                    </div>
                    <div class="card-footer">
                        <div class="form-group d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary btn-sm submit-btn rounded">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="submit" class="btn btn-primary btn-sm submit-btn">
                                view
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="Img\pharmacy_bg.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Crocin</h5>
                        <p class="card-text">Tablet helps relieve pain and fever by blocking the release of certain chemical messengers responsible for fever and pain.</p>
                    </div>
                    <div class="card-footer">
                        <div class="form-group d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary btn-sm submit-btn rounded">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="submit" class="btn btn-primary btn-sm submit-btn">
                                view
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="Img\pharmacy_bg.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sinarest</h5>
                        <p class="card-text">Relieves symptoms of common cold such as blocked nose, runny nose, watery eyes, sneezing, and congestion or stuffiness.</p>
                    </div>
                    <div class="card-footer">
                        <div class="form-group d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary btn-sm submit-btn rounded">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="submit" class="btn btn-primary btn-sm submit-btn">
                                view
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/contactus_modal.php";
    include ("includes/footer.php");
    ?>

</body>
</html>