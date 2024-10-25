<nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="../user/assets/img/logo.png" alt="Logo" height="50px" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Product</a>
                    <!-- <div class="dropdown">
                        <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produk Kami
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Tshirt</a></li>
                            <li><a class="dropdown-item" href="#">Longsleeve</a></li>
                            <li><a class="dropdown-item" href="#">Sweater</a></li>
                            <li><a class="dropdown-item" href="#">Jacket</a></li>
                            <li><a class="dropdown-item" href="#">ZIP Hoodie</a></li>
                            <li><a class="dropdown-item" href="#">Pants</a></li>
                            <li><a class="dropdown-item" href="#">Slippers</a></li>
                            <li><a class="dropdown-item" href="#">Snapback</a></li>
                            <li><a class="dropdown-item" href="#">Sling Bag</a></li>
                            <li><a class="dropdown-item" href="#">Sweater</a></li>
                            <li><a class="dropdown-item" href="#">Totebag</a></li>
                            <li><a class="dropdown-item" href="#">Other Accessories</a></li>
                        </ul>
                    </div> -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactform">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#profile">About Us</a>
                </li>
            </ul>
            <a href="cart.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-cart-plus mx-3" viewBox="0 0 16 16">
                    <path
                        d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                    <path
                        d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                </svg>
            </a>
            <div class="d-flex">
                <button class="btn font-weight-bold mx-3" data-bs-toggle="modal" data-bs-target="#loginModal"
                    style="border-color: black;">Login</button>
                <!-- Modal -->

                <button class="btn font-weight-bold bg-black text-white" data-bs-toggle="modal"
                    data-bs-target="#registerModal">Sign Up</button>
            </div>
        </div>
    </div>
</nav>
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2">Masuk</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5 pt-0">
                <form class="">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded-3" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-3" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <a href="home.php" class="w-100 mb-2 btn btn-lg rounded-3" type="submit"
                        style="background-color: black;color: white;">Masuk</a>
                    <smDenganall class="text-body-secondary">Belum memliki akun?</smDenganall><a href=""
                        data-bs-toggle="modal" data-bs-target="#registerModal" style="color: blue;"> Daftar disini</a>
                    <hr class="my-4">
                    <h2 class="fs-5 fw-bold mb-3">Atau login dengan Google</h2>
                    <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-google" viewBox="0 0 16 16">
                            <path
                                d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z" />
                        </svg>
                        Log in dengan Google
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2">Daftar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-5 pt-0">
                <form class="">
                    <label for="" style="margin-bottom: 10px;"><small>Sudah memiliki akun?<a href=""
                                data-bs-toggle="modal" data-bs-target="#loginModal" style="color: blue;"> Login
                                disini</a></small></label>
                    <div class="form-floating mb-3">
                        <input type="nama" class="form-control rounded-3" id="floatingInput"
                            placeholder="bimal aroibafih">
                        <label for="floatingInput">Nama</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded-3" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-3" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <a href="home.php" class="w-100 mb-2 btn btn-lg rounded-3" style="background-color: black;color: white;"
                        type="submit">Daftar</a>
                    <small class="text-body-secondary">Dengan mengklik Daftar, Anda menyetujui persyaratan
                        penggunaan</small>
                    <hr class="my-4">
                    <h2 class="fs-5 fw-bold mb-3">Atau daftar menggunakan Google</h2>
                    <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-google" viewBox="0 0 16 16">
                            <path
                                d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z" />
                        </svg>
                        Daftar dengan google
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- <script src="../assets/css/style.js"></script> -->