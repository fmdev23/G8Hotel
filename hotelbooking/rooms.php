<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php') ?>
    <style>
        .pop:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>

    <title>FM HOTEL | PHÒNG</title>

</head>

<body class="bg-light">

    <?php require('inc/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">PHÒNG CỦA CHÚNG TÔI</h2>
        <div class="h-line bg-dark"></div>
       
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                <div class="container-fluid flex-lg-column align-items-stretch">
                    <h4 class="mt-2">Bộ Lọc</h4>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3" style="font-size: 18px;" >Kiểm Tra Phòng Có Sẵn</h5>
                            <label class="form-label">Ngày Đến</label>
                            <input type="date" class="form-control shadow-none mb-3" required>
                            <label class="form-label">Ngày Đi</label>
                            <input type="date" class="form-control shadow-none" required>
                        </div>

                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3" style="font-size: 18px;" >Tiện Ích</h5>
                            <div class="mb-2">
                                <input type="checkbox" id="f1" class="form-check-input shadow-none me-1" required>
                                <label class="form-check-label" for="f1">Tiện ích 1</label>
                            </div>

                            <div class="mb-2">
                                <input type="checkbox" id="f2" class="form-check-input shadow-none me-1" required>
                                <label class="form-check-label" for="f2">Tiện ích 2</label>
                            </div>

                            <div class="mb-2">
                                <input type="checkbox" id="f3" class="form-check-input shadow-none me-1" required>
                                <label class="form-check-label" for="f3">Tiện ích 3</label>
                            </div>
                        </div>

                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3" style="font-size: 18px;" >Số Lượng</h5>
                            <div class="d-flex">
                                <div class="me-3">
                                    <label class="form-label">Người Lớn</label>
                                    <input type="number" class="form-control shadow-none" required>
                                </div>
    
                                <div>
                                    <label class="form-label">Trẻ Em</label>
                                    <input type="number" class="form-control shadow-none" required>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </nav>
            </div>

            <div class="col-lg-9 col-md-12 px4">
            <div class="card mb-4 border-0 shadow rounded">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/rooms/1.jpg" class="img-fluid rounded">
                    </div>

                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Le House Boutique Hotel</h5>
                        <div class="features mb-3">
                            <h6 class="mb-1">Trang Bị</h6>
                            <span class="badge bg-light text-dark text-wrap">2 Phòng</span>

                            <span class="badge bg-light text-dark text-wrap">1 Phòng Tắm</span>

                            <span class="badge bg-light text-dark text-wrap">1 Ban Công</span>

                            <span class="badge bg-light text-dark text-wrap">3 Sofa</span>
                        </div>

                        <div class="facilities mb-3">
                            <h6 class="mb-1">Tiện Ích</h6>
                            <span class="badge bg-light text-dark text-wrap">Wifi 5G</span>

                            <span class="badge bg-light text-dark text-wrap">TV 25 inch</span>

                            <span class="badge bg-light text-dark text-wrap">Máy Lạnh</span>

                            <span class="badge bg-light text-dark text-wrap">Máy Sưởi</span>
                        </div>

                        <div class="guests">
                            <h6 class="mb-1">Số Lượng</h6>
                            <span class="badge bg-light text-dark text-wrap">5 Người Lớn</span>

                            <span class="badge bg-light text-dark text-wrap">4 Trẻ Em</span>
                        </div>
                    </div>

                    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                        <h6 class="mb-4 fw-bold h-font">200.000 VND</h6>
                        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">ĐẶT PHÒNG</a>
                        <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">THÔNG TIN</a>
                    </div>

                </div>
            </div>

            <div class="card mb-4 border-0 shadow rounded">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/rooms/1.jpg" class="img-fluid rounded">
                    </div>

                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Le House Boutique Hotel</h5>
                        <div class="features mb-3">
                            <h6 class="mb-1">Trang Bị</h6>
                            <span class="badge bg-light text-dark text-wrap">2 Phòng</span>

                            <span class="badge bg-light text-dark text-wrap">1 Phòng Tắm</span>

                            <span class="badge bg-light text-dark text-wrap">1 Ban Công</span>

                            <span class="badge bg-light text-dark text-wrap">3 Sofa</span>
                        </div>

                        <div class="facilities mb-3">
                            <h6 class="mb-1">Tiện Ích</h6>
                            <span class="badge bg-light text-dark text-wrap">Wifi 5G</span>

                            <span class="badge bg-light text-dark text-wrap">TV 25 inch</span>

                            <span class="badge bg-light text-dark text-wrap">Máy Lạnh</span>

                            <span class="badge bg-light text-dark text-wrap">Máy Sưởi</span>
                        </div>

                        <div class="guests">
                            <h6 class="mb-1">Số Lượng</h6>
                            <span class="badge bg-light text-dark text-wrap">5 Người Lớn</span>

                            <span class="badge bg-light text-dark text-wrap">4 Trẻ Em</span>
                        </div>
                    </div>

                    <div class="col-md-2 text-center">
                        <h6 class="mb-4 fw-bold h-font">200.000 VND</h6>
                        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">ĐẶT PHÒNG</a>
                        <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">THÔNG TIN</a>
                    </div>
                </div>
            </div>

            <div class="card mb-4 border-0 shadow rounded">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/rooms/1.jpg" class="img-fluid rounded">
                    </div>

                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Le House Boutique Hotel</h5>
                        <div class="features mb-3">
                            <h6 class="mb-1">Trang Bị</h6>
                            <span class="badge bg-light text-dark text-wrap">2 Phòng</span>

                            <span class="badge bg-light text-dark text-wrap">1 Phòng Tắm</span>

                            <span class="badge bg-light text-dark text-wrap">1 Ban Công</span>

                            <span class="badge bg-light text-dark text-wrap">3 Sofa</span>
                        </div>

                        <div class="facilities mb-3">
                            <h6 class="mb-1">Tiện Ích</h6>
                            <span class="badge bg-light text-dark text-wrap">Wifi 5G</span>

                            <span class="badge bg-light text-dark text-wrap">TV 25 inch</span>

                            <span class="badge bg-light text-dark text-wrap">Máy Lạnh</span>

                            <span class="badge bg-light text-dark text-wrap">Máy Sưởi</span>
                        </div>

                        <div class="guests">
                            <h6 class="mb-1">Số Lượng</h6>
                            <span class="badge bg-light text-dark text-wrap">5 Người Lớn</span>

                            <span class="badge bg-light text-dark text-wrap">4 Trẻ Em</span>
                        </div>
                    </div>

                    <div class="col-md-2 text-center">
                        <h6 class="mb-4 fw-bold h-font">200.000 VND</h6>
                        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">ĐẶT PHÒNG</a>
                        <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">THÔNG TIN</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php') ?>
</body>
</html>