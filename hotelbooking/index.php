<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
    <style>
        
        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px) {
            .availability-form {
                margin-top: 0px;
                padding: 0 30px;
            }
        }
    </style>

    <title>FM HOTEL | TRANG CHỦ</title>

</head>
<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <!-- BANNER -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container rounded">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_15372.png" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_40905.png" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_55677.png" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_62045.png" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_93127.png" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_99736.png" class="w-100 d-block"/>
                </div>
            </div>
        </div>
    </div>

    <!-- KIỂM TRA PHÒNG -->
    <div class="container availability-form t-color">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">KIỂM TRA PHÒNG</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Ngày Đến</label>
                            <input type="date" class="form-control shadow-none" required>
                        </div>

                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Ngày Đi</label>
                            <input type="date" class="form-control shadow-none" required>
                        </div>

                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Người Lớn</label>
                            <select class="form-select shadow-none">
                                <option value="1">Một</option>
                                <option value="2">Hai</option>
                                <option value="3">Ba</option>
                            </select>
                        </div>

                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Trẻ Em</label>
                            <select class="form-select shadow-none">
                                <option value="1">Một</option>
                                <option value="2">Hai</option>
                                <option value="3">Ba</option>
                            </select>
                        </div>

                        <div class="col-lg-2 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg w-100"><i class="bi bi-search"></i> TÌM KIẾM</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
   
    <!-- PHÒNG -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">PHÒNG</h2>
    <div class="container t-color">
        <div class="row">
            <!-- PHÒNG HIỆN TẠI -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">             
                    
                    <div class="card-body">
                        <h5>Le House Boutique Hotel</h5>
                        <h6 class="mb-4 fw-bold">200.000 VND</h6>
                        
                        <!-- TRANG BỊ -->
                        <div class="features mb-4">
                            <h6 class="mb-1">Trang Bị</h6>
                            <span class="badge bg-light text-dark text-wrap">2 Phòng</span>

                            <span class="badge bg-light text-dark text-wrap">1 Phòng Tắm</span>

                            <span class="badge bg-light text-dark text-wrap">1 Ban Công</span>

                            <span class="badge bg-light text-dark text-wrap">3 Sofa</span>
                        </div>

                        <!-- TIỆN ÍCH -->
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Tiện Ích</h6>
                            <span class="badge bg-light text-dark text-wrap">Wifi 5G</span>

                            <span class="badge bg-light text-dark text-wrap">TV 25 inch</span>

                            <span class="badge bg-light text-dark text-wrap">Máy Lạnh</span>

                            <span class="badge bg-light text-dark text-wrap">Máy Sưởi</span>
                        </div>

                        <div class="guests mb-4">
                            <h6 class="mb-1">Số Lượng</h6>
                            <span class="badge bg-light text-dark text-wrap">5 Người Lớn</span>

                            <span class="badge bg-light text-dark text-wrap">4 Trẻ Em</span>
                        </div>

                        <!-- ĐÁNH GIÁ -->
                        <div class="rating mb-4">
                            <h6 class="mb-1">Đánh Giá</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                            
                        </div>

                        <!-- ĐẶT PHÒNG -->
                        <div class="d-flex justify-content-evenly">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">ĐẶT PHÒNG</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">THÔNG TIN</a>
                        </div>
                    </div>

                </div>
            </div>
            
            <!-- PHÒNG HIỆN TẠI -->
            <div class="col-lg-4 col-md-6 my-3">
                <!-- PHÒNG -->
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    
                    <div class="card-body">
                        <!-- TÊN PHÒNG -->
                      <h5>Le House Boutique Hotel</h5>
                      <h6 class="mb-4 fw-bold">200.000 VND</h6>
                        
                        <!-- TRANG BỊ -->
                        <div class="features mb-4">
                            <h6 class="mb-1">Trang Bị</h6>
                            <span class="badge bg-light text-dark text-wrap">2 Phòng</span>

                            <span class="badge bg-light text-dark text-wrap">1 Phòng Tắm</span>

                            <span class="badge bg-light text-dark text-wrap">1 Ban Công</span>

                            <span class="badge bg-light text-dark text-wrap">3 Sofa</span>
                        </div>

                        <!-- TIỆN ÍCH -->
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Tiện Ích</h6>
                            <span class="badge bg-light text-dark text-wrap">Wifi 5G</span>

                            <span class="badge bg-light text-dark text-wrap">TV 25 inch</span>

                            <span class="badge bg-light text-dark text-wrap">Máy Lạnh</span>

                            <span class="badge bg-light text-dark text-wrap">Máy Sưởi</span>
                        </div>

                        <div class="guests mb-4">
                            <h6 class="mb-1">Số Lượng</h6>
                            <span class="badge bg-light text-dark text-wrap">5 Người Lớn</span>

                            <span class="badge bg-light text-dark text-wrap">4 Trẻ Em</span>

                        </div>

                        <!-- ĐÁNH GIÁ -->
                        <div class="rating mb-4">
                            <h6 class="mb-1">Đánh Giá</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                            
                        </div>

                        <!-- ĐẶT PHÒNG -->
                        <div class="d-flex justify-content-evenly">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">ĐẶT PHÒNG</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">THÔNG TIN</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PHÒNG HIỆN TẠI -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">             
                    
                    <div class="card-body">
                        <!-- TÊN PHÒNG -->
                        <h5>Le House Boutique Hotel</h5>
                        <h6 class="mb-4 fw-bold">200.000 VND</h6>
                        
                        <!-- TRANG BỊ -->
                        <div class="features mb-4">
                            <h6 class="mb-1">Trang Bị</h6>
                            <span class="badge bg-light text-dark text-wrap">2 Phòng</span>

                            <span class="badge bg-light text-dark text-wrap">1 Phòng Tắm</span>

                            <span class="badge bg-light text-dark text-wrap">1 Ban Công</span>

                            <span class="badge bg-light text-dark text-wrap">3 Sofa</span>
                        </div>

                        <!-- TIỆN ÍCH -->
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Tiện Ích</h6>
                            <span class="badge bg-light text-dark text-wrap">Wifi 5G</span>

                            <span class="badge bg-light text-dark text-wrap">TV 25 inch</span>

                            <span class="badge bg-light text-dark text-wrap">Máy Lạnh</span>

                            <span class="badge bg-light text-dark text-wrap">Máy Sưởi</span>
                        </div>

                        <div class="guests mb-4">
                            <h6 class="mb-1">Số Lượng</h6>
                            <span class="badge bg-light text-dark text-wrap">5 Người Lớn</span>

                            <span class="badge bg-light text-dark text-wrap">4 Trẻ Em</span>

                        </div>

                        <!-- ĐÁNH GIÁ -->
                        <div class="rating mb-4">
                            <h6 class="mb-1">Đánh Giá</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                            
                        </div>

                        <!-- ĐẶT PHÒNG -->
                        <div class="d-flex justify-content-evenly">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">ĐẶT PHÒNG</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">THÔNG TIN</a>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="col-mg-12 text-center mt-5">
                <a href="rooms.php" class="btn btn-sm btn-outline-dark rounded fw-bold shadow-none">Phòng Khác</a>
            </div>
        </div>
    </div>

    <!-- GIỚI THIỆU TIỆN ÍCH -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TIỆN ÍCH</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow t-color py-4 my-3">
                <img src="images/facilities/IMG_27079.svg" width="80px">
                <h5 class="mt-3">Máy Sưởi</h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow t-color py-4 my-3">
                <img src="images/facilities/IMG_41622.svg" width="80px">
                <h5 class="mt-3">TV</h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow t-color py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow t-color py-4 my-3">
                <img src="images/facilities/IMG_47816.svg" width="80px">
                <h5 class="mt-3">Massage</h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow t-color py-4 my-3">
                <img src="images/facilities/IMG_49949.svg" width="80px">
                <h5 class="mt-3">Máy Lạnh</h5>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded fw-bold shadow-none">Tiện Ích Khác</a>
            </div>
        </div>
    </div>

    <!-- PHẢN HỒI -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">ĐÁNH GIÁ</h2>
    <div class="container mt-5 t-color">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/user.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat eligendi pariatur quam temporibus quae minima, fuga quo est porro. Animi.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/user.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat eligendi pariatur quam temporibus quae minima, fuga quo est porro. Animi.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/user.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat eligendi pariatur quam temporibus quae minima, fuga quo est porro. Animi.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/user.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat eligendi pariatur quam temporibus quae minima, fuga quo est porro. Animi.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
            </div>
            
            <div class="swiper-pagination"></div>
            
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded fw-bold shadow-none">Xem Thêm Đánh Giá</a>
        </div>
    </div>

    <!-- LIÊN HỆ -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">LIÊN HỆ</h2>
    <div class="container t-color">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59750.34723761847!2d105.7163704512291!3d10.034184408543817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0629f6de3edb7%3A0x527f09dbfb20b659!2zQ-G6p24gVGjGoSwgTmluaCBLaeG7gXUsIEPhuqduIFRoxqEsIFZp4buHdCBOYW0!5e1!3m2!1svi!2s!4v1732200342244!5m2!1svi!2s" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Gọi Cho Chúng Tôi</h5>
                    <a href="tel: +84967394474" class="d-inline-block mb-2 text-decoration-none t-color">
                        <i class="bi bi-telephone"></i> +84967394474
                    </a>
                    <br>
                    <a href="tel: +84967394474" class="d-inline-block mb-2 text-decoration-none t-color">
                        <i class="bi bi-telephone"></i> +84967394474
                    </a>
                </div>

                <div class="bg-white p-4 rounded mb-4 t-color">
                    <h5>Theo Dõi Chúng Tôi</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i> FaceBook
                        </span>
                    </a>
                    <br>

                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i> Instagram
                        </span>
                    </a>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                deplay: 3500,
                disableOnInteraction: false,
            }
        });

        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: 3,
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true, 
            },
            breakpoints: {
                380: {
                    slidesPerView: 1,
                },

                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
</body>
</html>