<!DOCTYPE html>
<html>

<head>
    <title>TQ Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/style.css">
</head>

<body>
    <div id="header" class="d-none d-sm-block">
        <section id="myTopHeader" class="py-1">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <p class="col">Thỏa mãn nhu cầu người dùng - bán hàng toàn quốc</p>
                    <div class="col">
                        <div class="d-flex justify-content-end">
                            <div class="iconHoline me-3 text-danger"><i class="fas fa-phone"></i></div>
                            <p class="me-3">Hotline: 19006750</p>
                            <a href="" class="me-2">Hệ thống cửa hàng |</a>
                            <a href="">Tuyển dụng</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="myMainHeader">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-white">
                            <div class="logo py-3">
                                <a href=""><b class="text-white fs-2">TQ Store</b></a>
                                <p>Kiến tạo không gian đẹp</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group py-4">
                            <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm">
                            <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center">
                        <div class="col-md-3">
                            <div class="iconUser text-white fs-4 text-center">
                                <i class="fas fa-user-plus"></i>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div>
                                <span> <a href="">Đăng nhập /</a></span>
                                <span> <a href="">Đăng kí</a></span>
                            </div>
                            <p class="mb-0 text-white">Tài khoản của bạn</p>
                        </div>
                    </div>
                    <div class="col-md-1 d-flex align-items-center">
                        <a href="" class="iconCart fs-3 text-white justify-content-end p-1">
                            <i class="fas fa-cart-plus"></i>
                            <div class="notifyIcon text-center">6</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="myMainMenu" class="text-white d-none d-sm-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 d-flex align-items-center cat">
                        <div class="iconMenu me-1">
                            <i class="fas fa-bars"></i>
                        </div>
                        <p class="m-0">DANH MỤC SẢN PHẨM</p>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <nav>
                            <ul class="d-flex float-end">
                                <li><a href="">Trang chủ</a></li>
                                <li><a href="">Sản phẩm</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="">Liên hệ</a></li>
                                <li><a href="">Phản hồi khách hàng</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="headerRespon" class="d-none">
        <div class="container">
            <div class="row">
                <div class="col-6 py-3">
                    <div class="logo">
                        <a href=""><b class="text-white fs-2">TQ Store</b></a>
                    </div>
                </div>
                <div class="col-6 my-3 d-flex justify-items-between">
                    <a href="" class="iconUser fs-6 me-1">
                        <i class="fa-solid fa-user-plus"></i>
                    </a>
                    <a href="" class="iconCart fs-6">
                        <i class="fas fa-cart-plus"></i>
                        <div class="notifyIcon text-center">6</div>
                    </a>
                    <nav class="navbar navbar-dark p-0 d-flex justify-items-between">
                        <div class="container-fluid">
                            <a class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
                                aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon me-1" id="icon-menu"></span>
                            </a>
                            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                                aria-labelledby="offcanvasDarkNavbarLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">TQ Store</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Sản phẩm
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-dark">
                                                <li><a class="dropdown-item" href="#">Sản phẩm 1</a></li>
                                                <li><a class="dropdown-item" href="#">Sản phẩm 2</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Giới thiệu</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Phản hồi khách hàng</a>
                                        </li>
                                    </ul>
                                    <form class="d-flex mt-3 d-sm-none" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search"
                                            aria-label="Search">
                                        <button class="btn btn-success" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>