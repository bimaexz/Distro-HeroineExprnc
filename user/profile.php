<!DOCTYPE html>
<html lang="en">
<?php 
    include("includes_user/script.php");
?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profile</title>
    <link rel="stylesheet" href="../user/assets/css/style.css">
    <link rel="stylesheet" href="../user/assets/css/profile.css">
</head>

<body>
    <?php 
        include("includes_user/navbar.php");
    ?>
    <!-- Profile Page -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class="row d-flex flex-row">
                                <div class="col-lg-3 align-items-center">
                                    <img src="../user/assets/img/default.jpg" alt="" width="50px" height="50px"
                                        class="img-fluid" style="border-radius: 100%" />
                                </div>
                                <div class="col-lg">
                                    <span class="fw-bold">Bima Laroi</span>
                                    <p class="fw-light text-secondary">08122299</p>
                                </div>
                            </div>
                            <div class="row mt-4 justify-content-between">
                                <div class="col-lg">
                                    <h5 class="card-title">Logout</h5>
                                </div>
                            </div>
                            <!-- <div class="row mt-4 justify-content-between">
                                <div class="col-lg">
                                    <h5 class="card-title"> Dashboard</h5>
                                </div>
                            </div>
                            <div class="row mt-4 justify-content-between">
                                <div class="col-lg">
                                    <h5 class="card-title">Orders</h5>
                                
                                </div>
                            </div>
                            <div class="row mt-4 justify-content-between">
                                <div class="col-lg">
                                    <h5 class="card-title">Addresses</h5>
                                </div>
                            </div>
                            <div class="row mt-4 justify-content-between">
                                <div class="col-lg">
                                    <h5 class="card-title">Account Details</h5>
                                </div>
                            </div>
                            <div class="row mt-4 justify-content-between">
                                <div class="col-lg">
                                    <h5 class="card-title">Wishlist</h5>
                                </div>
                            </div>
                            <div class="row mt-4 justify-content-between">
                                <div class="col-lg">
                                    <h5 class="card-title">Logout</h5>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <div class="card">
                    <div class="card-body text-decoration-none">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active fw-bold" id="nav-biodata-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-biodata" type="button" role="tab" aria-controls="nav-biodata"
                                    aria-selected="true">
                                    Account Details
                                </button>
                                <button class="nav-link fw-bold" id="nav-orders-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-orders" type="button" role="tab" aria-controls="nav-orders"
                                    aria-selected="true">
                                    Orders
                                </button>
                                <button class="nav-link fw-bold" id="nav-alamat-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-alamat" type="button" role="tab" aria-controls="nav-alamat"
                                    aria-selected="false">
                                    Addresses
                                </button>
                                <button class="nav-link fw-bold" id="nav-rekening-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-rekening" type="button" role="tab" aria-controls="nav-rekening"
                                    aria-selected="false">
                                    Payment Method
                                </button>
                                <button class="nav-link fw-bold" id="nav-wishlist-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-wishlist" type="button" role="tab" aria-controls="nav-wishlist"
                                    aria-selected="false">
                                    Wishlist
                                </button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-biodata" role="tabpanel"
                                aria-labelledby="nav-biodata-tab" tabindex="0">
                                <div class="container mt-4">
                                    <div class="row">
                                        <div class="col-lg-3 text-center">

                                            <img src="../user/assets/img/default.jpg" alt="" class="img-fluid mb-4 rounded"
                                                style="width: 200px; height: 200px" />
                                            <a class="col-lg btn btn-outline-secondary w-full fw-bold mb-2" data-bs-toggle="modal" data-bs-target="#akundetailModal"
                                                >Ubah Data</a>
                                                
                                                
                                        </div>
                                        <div class="col-lg">
                                            <div>
                                                <h4>Biodata Diri</h4>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="" class="fw-bold">Name</label>
                                                </div>
                                                <div class="col-lg">
                                                    <span>Bima Laroi Bafih</span>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="" class="fw-bold">Tanggal Lahir</label>
                                                </div>
                                                <div class="col-lg">
                                                    <span>5/12/00</span>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="" class="fw-bold">Jenis Kelamin</label>
                                                </div>
                                                <div class="col-lg">
                                                    <span>Laki Laki</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-lg-9">
                                         
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="" class="fw-bold">Email</label>
                                                </div>
                                                <div class="col-lg">
                                                    <span>bima@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="" class="fw-bold">No. Handphone</label>
                                                </div>
                                                <div class="col-lg">
                                                    <span>08122299</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-rekening" role="tabpanel"
                                aria-labelledby="nav-rekening-tab" tabindex="0">
                                <div class="container mt-3">
                                    <a href="" class="btn btn-secondary  mb-3" data-bs-toggle="modal" data-bs-target="#pembayaranModal">Tambah Metode Pembayaran</a>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-2">
                                                    <img src="../user/assets/img/logo-bca.jpg" alt="" class="img-fluid" />
                                                </div>
                                                <div class="col-lg">
                                                    <span class="fs-6 text-secondary">PT. BCA (BANK CENTRAL ASIA)
                                                        TBK</span>
                                                    <p class="fw-bold" style="margin-bottom: 0">
                                                        2500575508
                                                    </p>
                                                    <span>a.n Bima Laroi Bafih</span>
                                                </div>
                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-orders" role="tabpanel" aria-labelledby="nav-orders-tab"
                                tabindex="0">
                                <div class="container mt-3">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-2">
                                                    <img src="../user/assets/img/product1.jpg" alt="" class="img-fluid" />
                                                </div>
                                                <div class="col-lg">
                                                    <span class="fs-6 text-secondary">TSHIRT "ATTRACT"</span>
                                                    <p class="fw-bold" style="margin-bottom: 0">
                                                        IDR 160.000
                                                    </p>
                                                    <span>Delivered</span>
                                                </div>
                                                <div class="col-lg-2 align-self-center">
                                                    <a href="" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#orderdetailModal">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-2">
                                                    <img src="../user/assets/img/product1.jpg" alt="" class="img-fluid" />
                                                </div>
                                                <div class="col-lg">
                                                    <span class="fs-6 text-secondary">TSHIRT "ATTRACT"</span>
                                                    <p class="fw-bold" style="margin-bottom: 0">
                                                        IDR 160.000
                                                    </p>
                                                    <span>On Procces</span>
                                                </div>
                                                <div class="col-lg-2 align-self-center">
                                                <a href="" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#orderdetailModal">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-alamat" role="tabpanel" aria-labelledby="nav-alamat-tab"
                                tabindex="0">
                                <div class="container mt-3">
                                    <a href="" class="btn btn-secondary  mb-3" data-bs-toggle="modal" data-bs-target="#alamatModal">Tambah Alamat</a>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg">
                                                    <h6 class="card-subtitle mb-2 text-body-secondary">
                                                        Rumah
                                                    </h6>
                                                    <h5 class="card-text">Bima Laroi</h5>
                                                    <p>0812222888</p>
                                                    <p>Lowokwaru, Malang</p>
                                              
                                                </div>
                                                <div class="col-lg-2 align-self-center">
                                                    <a href="" class="btn btn-secondary ">Pilih</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3 address-active">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg">
                                                    <h6 class="card-subtitle mb-2 text-body-secondary">
                                                        Rumah
                                                    </h6>
                                                    <h5 class="card-text">Bima Laroi</h5>
                                                    <p>0812222888</p>
                                                    <p>Sukun, Malang</p>
                                             
                                                </div>
                                                <div class="col-lg-2 align-self-center">
                                                    <a href="" class="btn btn-secondary ">Dipilih</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-wishlist" role="tabpanel" aria-labelledby="nav-wishlist-tab"
                                tabindex="0">
                                <div class="container mt-3">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-2">
                                                    <img src="../user/assets/img/product1.jpg" alt="" class="img-fluid" />
                                                </div>
                                                <div class="col-lg">
                                                    <span class="fs-6 text-secondary">TSHIRT "ATTRACT"</span>
                                                    <p class="fw-bold" style="margin-bottom: 0">
                                                        IDR 160.000
                                                    </p>
                                                   
                                                </div>
                                                <div class="col-lg-2 align-self-center">
                                                <i class="ri-heart-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-2">
                                                    <img src="../user/assets/img/product2.jpg" alt="" class="img-fluid" />
                                                </div>
                                                <div class="col-lg">
                                                    <span class="fs-6 text-secondary">TSHIRT "ATTRACT"</span>
                                                    <p class="fw-bold" style="margin-bottom: 0">
                                                        IDR 160.000
                                                    </p>
                                                    
                                                </div>
                                                <div class="col-lg-2 align-self-center">
                                                <i class="ri-heart-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <!-- End Profile Page -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
<div class="modal fade" id="akundetailModal" tabindex="-1" aria-labelledby="akundetailModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2">Ubah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                
            </div>

            <div class="modal-body p-5 pt-0">
                <form class="">
                <div class="form-floating mb-3">
                        <input type="file" class="form-control rounded-3" id="floatingInput"
                            placeholder="bima laroibafih">
                        <label for="floatingInput">Foto</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="nama" class="form-control rounded-3" id="floatingInput"
                            placeholder="bima laroibafih">
                        <label for="floatingInput">Nama</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded-3" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="nohandphone" class="form-control rounded-3" id="floatingInput"
                            placeholder="No Handphone">
                        <label for="floatingPassword">No Handphone</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control rounded-3" id="floatingInput"
                            placeholder="Tanggal Lahir">
                        <label for="floatingPassword">Tanggal Lahir</label>
                    </div>
                    <div class="form-floating form-group rounded-3 mb-3">
                                        
                                            <select class="form-control" id="exampleFormControlSelect12">
                                                <option>Laki - Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                            <label for="floatingPassword">Jenis Kelamin</label>
                                        </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-3" style="background-color: black;color: white;" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="orderdetailModal" tabindex="-1" aria-labelledby="orderdetailModalLabel" aria-hidden="true" data-bs-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-body p-5">
        <h2 class="fw-bold mb-0">Detail Order</h2>

        <ul class="d-grid gap-4 my-5 list-unstyled small">

          <li class="d-flex gap-4">
          <img src="../user/assets/img/product4.jpg" width="50" height="50" alt="">
            <div>
              <h5 class="mb-0">Sweater Escape</h5>
              Size L
            </div>
            <div>
            <p class="text-end">x1 Rp. 295.000</p>
            </div>
          </li>
          <li class="d-flex gap-4">
          <img src="../user/assets/img/product3.jpg" width="50" height="50" alt="">
            <div>
              <h5 class="mb-0">Jacket Ramose</h5>
              Size L
            </div>
            <div>
            <p class="text-end">x1 Rp. 350.000</p>
            </div>
          </li>
        </ul>
        
        <span class="badge bg-success mb-2">Delivered</span>
        
        <h5 class="fw-bold mb-0">Total harga</h5>
        
        <p class="text-end">Rp. 645.000</p>
   
        <a href="" type="button" class="btn btn-lg btn-primary mt-5 w-100" data-bs-toggle="modal" data-bs-target="#trackorderModal">Track Your Order</a>
        <button type="button" class="btn btn-lg btn-secondary mt-2 w-100" data-bs-dismiss="modal">CLOSE</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="trackorderModal" tabindex="-1" aria-labelledby="trackorderModalLabel" aria-hidden="false" >
    <div class="modal-dialog custom-modal-width" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h4 class="fw-bold mb-0 fs-2">Tracking Your Order</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                
            </div>

            <div class="modal-body p-5 pt-0">
            <section class="" style="background-color: #eee;">
        <style>
            .custom-modal-width {
    max-width: 80%; /* Adjust this value as needed */
  }
            .track-line {
height: 2px !important;
background-color: #488978;
opacity: 1;
}

.dot {
height: 10px;
width: 10px;
margin-left: 3px;
margin-right: 3px;
margin-top: 0px;
background-color: #488978;
border-radius: 50%;
display: inline-block
}

.big-dot {
height: 25px;
width: 25px;
margin-left: 0px;
margin-right: 0px;
margin-top: 0px;
background-color: #488978;
border-radius: 50%;
display: inline-block;
}

.big-dot i {
font-size: 12px;
}

.card-stepper {
z-index: 0
}
        </style>
  <div class="container py-5 ">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col">
        <div class="card card-stepper" style="border-radius: 10px;">
          <div class="card-body p-4">

            <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex flex-column">
                <span class="lead fw-normal">Your order has been delivered</span>
                <span class="text-muted small">by J&T on 21 July, 2024</span>
              </div>
           
            </div>
            <hr class="my-4">

            <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
              <span class="dot"></span>
              <hr class="flex-fill track-line"><span class="dot"></span>
              <hr class="flex-fill track-line"><span class="dot"></span>

              <hr class="flex-fill track-line"><span
                class="d-flex justify-content-center align-items-center big-dot dot">
                <i class="fa fa-check text-white"></i></span>
            </div>

            <div class="d-flex flex-row justify-content-between align-items-center">
              <div class="d-flex flex-column align-items-start"><span>20 July</span><span>Out for delivery</span>
              </div>
              <div class="d-flex flex-column justify-content-center"><span>21 July </span><span>Arrive at the sorting location 
                  </span></div>
              <div class="d-flex flex-column justify-content-center align-items-center"><span>21 July
                  </span><span>On the way to Surabaya DC </span></div>

              <div class="d-flex flex-column align-items-end"><span>22 July</span><span>Delivered</span></div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="alamatModal" tabindex="-1" aria-labelledby="alamatModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h4 class="fw-bold mb-0 fs-2">Tambah alamat</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                
            </div>

            <div class="modal-body p-5 pt-0">
                <form class="">
                    
                    <div class="form-floating mb-3">
                        <input type="textarea" class="form-control rounded-3" id="floatingInput"
                            placeholder="Masukan alamat">
                        <label for="floatingInput">Alamat</label>
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-3" style="background-color: black;color: white;" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="pembayaranModal" tabindex="-1" aria-labelledby="pembayaranModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h4 class="fw-bold mb-0 fs-2">Tambah Rekening</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                
            </div>

            <div class="modal-body p-5 pt-0">
                <form class="">
                    
                    <div class="form-floating mb-3">
                        <input type="textarea" class="form-control rounded-3" id="floatingInput"
                            placeholder="Masukan No Rekening">
                        <label for="floatingInput">No Rekening</label>
                    </div>
                    <div class="form-floating form-group rounded-3 mb-3">
                                        
                                            <select class="form-control" id="exampleFormControlSelect12">
                                                <option>Bank Central Asia</option>
                                                <option>Bank Mandiri</option>
                                                <option>Bank Rakyat Indonesia</option>
                                            </select>
                                            <label for="floatingPassword">Bank</label>
                                        </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-3" style="background-color: black;color: white;" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/4c03683015.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
    crossorigin="anonymous"></script>

</html>