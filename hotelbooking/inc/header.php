<!-- ĐIỀU HƯỚNG -->
<nav class="navbar navbar-expand-lg bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">FM HOTEL</a>
        
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse navbar-light" id="navbarSupportedContent">
        
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="index.php">TRANG CHỦ</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link me-2" href="rooms.php">PHÒNG</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link me-2" href="facilities.php">TIỆN ÍCH</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link me-2" href="contact.php">LIÊN HỆ</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">THÔNG TIN</a>
                </li>
            </ul>
        
            <div class="d-flex t-color">
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                    ĐĂNG NHẬP
                </button>

                <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                    ĐĂNG KÝ
                </button>
            </div>

        </div>
    </div>
</nav>

<!-- FORM ĐĂNG NHẬP  -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                
                <div class="modal-header t-color">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person fs-3 me-2"></i> Thông Tin Đăng Nhập
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body t-color">
                    <div class="mb-3">
                        <label class="form-label">Địa Chỉ Email</label>
                        <input type="email" class="form-control shadow-none" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Mật Khẩu</label>
                        <input type="password" class="form-control shadow-none" required>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-2 t-color">
                        <button type="submit" class="btn btn-outline-dark shadow-none">ĐĂNG NHẬP</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Quên Mật Khẩu</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- FORM ĐĂNG KÝ  -->
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form>
                <div class="modal-header t-color">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-add fs-3 me-2"></i> Đăng Ký Tài Khoản
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body t-color">
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        Lưu ý: Thông tin của bạn phải trùng khớp với CMND / CCCD, chúng tôi sẽ yêu cầu để làm thủ tục nhận phòng.
                    </span>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Tên Khách Hàng</label>
                                <input type="text" class="form-control shadow-none" required>
                            </div>

                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Địa Chỉ Email</label>
                                <input type="email" class="form-control shadow-none" required>
                            </div>

                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Số Điện Thoại</label>
                                <input type="number" class="form-control shadow-none" required>
                            </div>

                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Hình Ảnh</label>
                                <input type="file" class="form-control shadow-none" required>
                            </div>

                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Mật Khẩu</label>
                                <input type="password" class="form-control shadow-none" required>
                            </div>

                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Xác Nhận Mật Khẩu</label>
                                <input type="password" class="form-control shadow-none" required>
                            </div>

                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">CMND / CCCD</label>
                                <input type="number" class="form-control shadow-none" required>
                            </div>

                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Năm Sinh</label>
                                <input type="date" class="form-control shadow-none" required>
                            </div>

                            <div class="col-md-12 p-0 mb-3">
                                <label class="form-label">Địa Chỉ</label>
                                <textarea class="form-control shadow-none" rows="1" required></textarea>
                            </div>
                        </div>
                        <div class="text-center my-1">
                            <button type="submit" class="btn btn-outline-dark shadow-none">ĐĂNG KÝ</button>

                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>