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

    <title>FM HOTEL | LIÊN HỆ</title>

</head>

<body class="bg-light">

    <?php require('inc/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">LIÊN HỆ VỚI CHÚNG TÔI</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam explicabo alias itaque rem dolores cum, veniam eaque culpa quo libero.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59750.34723761847!2d105.7163704512291!3d10.034184408543817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0629f6de3edb7%3A0x527f09dbfb20b659!2zQ-G6p24gVGjGoSwgTmluaCBLaeG7gXUsIEPhuqduIFRoxqEsIFZp4buHdCBOYW0!5e1!3m2!1svi!2s!4v1732200342244!5m2!1svi!2s" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                    <h5>Địa Chỉ</h5>
                    <a href="https://maps.app.goo.gl/NCL92cFJj3kNS7n96" target="_blank" class="d-line-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt"></i> Ninh Kiều, Cần Thơ
                    </a>

                    <h5 class="mt-4">Gọi Cho Chúng Tôi</h5>
                    <a href="tel: +84967394474" class="d-inline-block mb-2 text-decoration-none t-color">
                        <i class="bi bi-telephone"></i> +84967394474
                    </a>
                    <br>
                    <a href="tel: +84967394474" class="d-inline-block mb-2 text-decoration-none t-color">
                        <i class="bi bi-telephone"></i> +84967394474
                    </a>

                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: lmphu23705@gmail.com" class="d-inline-block mb-2 text-decoration-none t-color">
                        <i class="bi bi-envelope-arrow-up"></i> lmphu23705@gmail.com
                    </a>

                    <h5 class="mt-4">Theo Dõi Chúng Tôi</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i> 
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h4>Gửi Phản Hồi</h4>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;" >Tên Của Bạn</label>
                            <input type="text" class="form-control shadow-none" required>
                        </div>

                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;" >Email</label>
                            <input type="email" class="form-control shadow-none" required>
                        </div>

                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;" >Chủ Đề</label>
                            <input type="text" class="form-control shadow-none" required>
                        </div>

                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;" >Phản Hồi Của Bạn</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;" required></textarea>
                        </div>

                        <button type="submit" class="btn text-white custom-bg mt-3 w-100">GỬI PHẢN HỒI</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php') ?>
</body>
</html>