<!DOCTYPE html>
<html lang="en">
<?php
include ("includes_user/script.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Product Page</title>
    <!-- css -->
    <link rel="stylesheet" href="../user/assets/css/detail-product.css">
    <link rel="stylesheet" href="../user/assets/css/style.css">
 

</head>

<body>
    <?php
    include ("includes_user/navbar_home.php");
    ?>
    <!-- product section -->
    <section class="product-container">
        <!-- left side -->
        <div class="img-card">
            <img src="../user/assets/img/product1.jpg" alt="" id="featured-image">
            <!-- small img -->
            <div class="small-Card">
                <img src="../user/assets/img/detail-product.jpg" onclick="func()" alt="" class="small-Img">
                <img src="../user/assets/img/detail-product1.jpg" alt="" class="small-Img">
                <img src="../user/assets/img/detail-product2.jpg" alt="" class="small-Img">
                <img src="../user/assets/img/detail-product3.jpg" alt="" class="small-Img">
            </div>
        </div>
        <!-- Right side -->
        <div class="product-info">
            <h2>TSHIRT "ATTRACT"</h2>
            <h5>IDR 140.000 <del> IDR 160.000</del></h5>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa accusantium, aspernatur provident beatae
                corporis veniam atque facilis, consequuntur assumenda, vitae dignissimos iste exercitationem dolor
                eveniet alias eos ullam nesciunt voluptatum.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore accusamus natus dolorum. Quaerat nulla
                quod doloremque, officia quis provident amet adipisci unde esse iure delectus, maxime inventore optio
                fuga nisi?</p>

            <div class="sizes">
                <p>Size:</p>
                <select name="Size" id="size" class="size-option">
                    <option value="xxl">XXL</option>
                    <option value="xl">XL</option>
                    <option value="medium">Medium</option>
                    <option value="small">Small</option>
                </select>
            </div>

            <div class="quantity">
                <input type="number" value="1" min="1">
                <a href="cart.php" class="button">Add to Cart</a>

            </div>

            <!-- <div>
                <p>Delivery:</p>
                <p>Free standard shipping on orders over $35 before tax, plus free returns.</p>
                <div class="delivery">
                    <p>TYPE</p> <p>HOW LONG</p> <p>HOW MUCH</p>
                </div>
                <hr>
                <div class="delivery">
                    <p>Standard delivery</p> 
                    <p>1-4 business days</p> 
                    <p>$4.50</p>
                </div>
                <hr>
                <div class="delivery">
                    <p>Express delivery</p> 
                    <p>1 business day</p> 
                    <p>$10.00</p>
                </div>
                <hr>
                <div class="delivery">
                    <p>Pick up in store</p> 
                    <p>1-3 business days</p> 
                    <p>Free</p>
                </div>
            </div> -->
        </div>
    </section>
    <section class="section-products" id="product">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 col-lg-6">
                    <div class="header">
                        <h3>Tambah produk lainnya yang mungkin anda suka</h3>
                        <h2>Heroine Exprnc Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-1" class="single-product">
                        <div class="part-1">
                            <ul>
                                <li><a href="detail-product.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                            <path
                                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                        </svg>
                                    </a></li>
                                <li><a href="#linkecommerce">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                                        </svg>
                                        </i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">TSHIRT "ATTRACT"</h3>
                            <h4 class="product-old-price">IDR 160.000</h4>
                            <h4 class="product-price">IDR 140.000</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-2" class="single-product">
                        <div class="part-1">
                            <span class="discount">15% off</span>
                            <ul>
                                <li><a href="#linkecommerce">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                            <path
                                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                        </svg>
                                    </a></li>
                                <li><a href="#linkecommerce">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                                        </svg>
                                        </i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">ZIP HOODIE "SPASMODIC"</h3>
                            <h4 class="product-price">IDR 325.000</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-3" class="single-product">
                        <div class="part-1">
                            <ul>
                                <li><a href="#linkecommerce">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                            <path
                                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                        </svg>
                                    </a></li>
                                <li><a href="#linkecommerce">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                                        </svg>
                                        </i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">JACKET "RAMOSE"</h3>
                            <h4 class="product-old-price">IDR 400.000</h4>
                            <h4 class="product-price">IDR 350.000</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-4" class="single-product">
                        <div class="part-1">
                            <span class="new">new</span>
                            <ul>
                                <li><a href="#linkecommerce">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                            <path
                                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                        </svg>
                                    </a></li>
                                <li><a href="#linkecommerce">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                                        </svg>
                                        </i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">SWEATER "ESCAPE"</h3>
                            <h4 class="product-price">IDR 295.000</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="slider">
        <div id="carouselExampleIndicators2" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../user/assets/img/galery1.png" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item">
                    <img src="../user/assets/img/galery2.png" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item">
                    <img src="../user/assets/img/galery3.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../user/assets/img/galery4.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section id="contactform">
        <div class="row">
            <div class="col-md-8">
                <div class="contact" id="contact">
                    <div class="contact-content section-content">
                        <h2 class="h3 section-title">Hubungi Kami</h2>
                        <p class="section-text">
                            Heroine Exprnc Store | Perfective Terror
                        </p>
                        <ul class="contact-list">
                            <li class="contact-list-item">
                                <div class="contact-item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                        class="bi bi-geo-alt" viewBox="0 0 16 16">
                                        <path
                                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg>
                                </div>
                                <div class="wrapper">
                                    <h3 class="h4 contact-item-title">Alamat :</h3>
                                    <address class="contact-info">
                                        Jl. Cengkeh No.20A, Tulusrejo, Kota Malang, Jawa Timur 65141
                                    </address>
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15806.015326531791!2d112.6234917!3d-7.9467719!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629d92da10d7d%3A0x5c873c03b043c95c!2sHeroine%20Exprnc%20Store!5e0!3m2!1sid!2sid!4v1715107286747!5m2!1sid!2sid"
                                        width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </li>
                            <li class="contact-list-item">
                                <div class="contact-item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                        class="bi bi-telephone" viewBox="0 0 16 16">
                                        <path
                                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg>
                                </div>
                                <div class="wrapper">
                                    <h3 class="h4 contact-item-title">Telepon :</h3>
                                    <a href="tel:085726290457" class="contact-info">(62) 812 3389 6886</a>
                                </div>
                            </li>
                            <li class="contact-list-item">
                                <div class="contact-item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                        class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                    </svg>
                                </div>
                                <div class="wrapper">
                                    <h3 class="h4 contact-item-title">Email :</h3>
                                    <a href="mailto:info@deathbatmotor.com"
                                        class="contact-info">heroinexprnc@gmail.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <form action="proses.php" method="post" class="contact-form">
                        <div class="form-wrapper">
                            <label for="nama" class="form-label">Nama</label>

                            <div class="input-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                                <input type="text" name="nama" id="nama" required placeholder="e.g Bima Laroi Bafih"
                                    class="input-field">


                            </div>
                        </div>
                        <div class="form-wrapper">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                </svg>
                                <input type="email" name="email" id="email" required placeholder="e.g bima@gmail.com"
                                    class="input-field">

                            </div>
                        </div>
                        <div class="form-wrapper">
                            <label for="no_telepon" class="form-label">Phone</label>
                            <div class="input-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path
                                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>
                                <input type="text" name="no_telepon" id="no_telepon" required
                                    placeholder="Nomor Telepon" class="input-field">

                            </div>
                        </div>
                        <div class="form-wrapper">
                            <label for="pesan" class="form-label">Pesan</label>
                            <div class="input-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-chat-square-text" viewBox="0 0 16 16">
                                    <path
                                        d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path
                                        d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                </svg>
                                <textarea name="pesan" id="pesan" required placeholder="Tulis Pesan..."
                                    class="input-field"></textarea>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="row">
            <p>
                <a href="#">
                    Heroine Exprnc Store<span>.</span> &copy; 2024 All rights reserved
                </a>
            </p>
        </div>
    </footer> 
    <script src="../user/assets/js/script.js"></script> 
    <!-- script tags -->
    
</body>


</html>