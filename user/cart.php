<!DOCTYPE html>
<html lang="en">
<?php 
    include("includes_user/script.php");
?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Single Product</title>
    <link rel="stylesheet" href="../user/assets/css/style.css">
    <link rel="stylesheet" href="../user/assets/css/cart.css">
</head>

<body>
<?php 
        include("includes_user/navbar.php");
    ?>
    <!-- Start Keranjang -->
    <div class="container">
        <div class="row justify-content-center mt-5 mx-auto">
            <div class="col-lg-8 mb-4">
                <h4 class="fw-bold">Keranjang</h4>
                <div class="row d-flex flex-row justify-content-between">
                    <div class="col-lg-2">
                        <input type="checkbox" />
                        <label for="">Pilih Semua</label>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <a href="" class="fw-bold" style="color: #44444; text-decoration: none">Hapus</a>
                    </div>
                    <hr />
                </div>
                <!-- Items -->
                <!-- <div class="row">
                    <div class="col-lg">
                        <div class="d-flex">
                            <input type="checkbox" />
                            <div class="d-flex flex-column mx-3 mb-2">
                                <label for="" class="fw-bold">Toko Bagus</label>
                                <span style="font-size: 13px">Jakarta Utara</span>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="row">
                    <div class="col-lg d-flex align-items-center">
                        <input type="checkbox" />
                        <img src="../user/assets/img/detail-product.jpg" alt="" width="70px" height="70px" class="mx-3 mt-3" />
                        <div>
                            <label for="">TSHIRT "ATTRACT"</label><br />
                            <span style="font-size: 13px">Size XL</span><br />
                            <span class="fw-bold">Rp. 140.000</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg d-flex align-items-center">
                        <input type="checkbox" />
                        <img src="../user/assets/img/product2.jpg" alt="" width="70px" height="70px" class="mx-3 mt-3" />
                        <div>
                            <label for="">ZIP HOODIE "SPASMODIC"</label><br />
                            <span style="font-size: 13px">Size L</span><br />
                            <span class="fw-bold">Rp. 325.000</span>
                        </div>
                    </div>
                </div>

                <div class="row mt-3 justify-content-end">
                    <div class="col-lg-3">
                        <p>Hapus</p>
                    </div>
                    <div class="col-lg-6 col-md-12 text-lg-end">
                        <i class="fa fa-plus"></i>
                        <span class="mx-2 mx-lg-5">1</span>
                        <i class="fa fa-minus"></i>
                    </div>
                </div>
                <!-- End Items -->
            </div>
            <div class="col lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Masukan kode promo" />
                            </div>
                            <h6 class="card-subtitle mb-3 mt-3 fw-bold">
                                Ringkasan Belanja
                            </h6>
                            <div class="row d-flex flex-column">
                                <div class="col-lg d-flex justify-content-between">
                                    <p>Total Harga</p>
                                    <p>465.000</p>
                                </div>
                                <div class="col-lg d-flex justify-content-between">
                                    <p>Total Diskon Barang</p>
                                    <p>50.000</p>
                                </div>
                                <hr />
                            </div>
                            <div class="row">
                                <div class="col-lg d-flex justify-content-between">
                                    <h6 class="card-subtitle mb-2 fw-bold">Total Harga</h6>
                                    <p>415.000</p>
                                </div>
                            </div>
                            <div class="row flex-column">
                                <a href="checkout.php" class="col-lg btn btn-success w-full text-white fw-bold mb-2"
                                    style="color: black;background-color: #444444;">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Keranjang -->
    <!-- Footer -->
    <!-- <footer>
        <div class="container">
            <div class="row d-flex justify-content-between mt-5">
                <div class="col-lg-3 mb-3">
                    <div class="mb-3">
                        <h5 class="fw-bold">Tokopedia</h5>
                        <li>Tentang Tokopedia</li>
                        <li>Karir</li>
                        <li>Blog</li>
                    </div>
                    <div>
                        <h5 class="fw-bold">Beli</h5>
                        <li>Tagihan & Top Up</li>
                        <li>Karir</li>
                        <li>Blog</li>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="mb-3">
                        <h5 class="fw-bold">Bantuan dan Panduan</h5>
                        <li>Tokopedia Care</li>
                        <li>Syarat dan Ketentuan</li>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 d-none d-lg-block">
                    <img src="/assets/img/logo2.png" alt="" style="width: 410px; height: 192px" />
                </div>
            </div>
        </div>
    </footer> -->
    <!-- End Footer -->
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
    <script src="https://kit.fontawesome.com/4c03683015.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
    crossorigin="anonymous"></script>

</html>