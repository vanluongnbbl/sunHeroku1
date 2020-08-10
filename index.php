<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Machine Company</title>
  <link rel="stylesheet" href="./css/responsive.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/layout.css">
  <link rel="stylesheet" href="./css/list-page.css">
  <link rel="stylesheet" href="./css/detail.css">
  <link rel="stylesheet" href="./css/register.css">
  <link rel="stylesheet" href="./css/blog.css">
</head>

<body>
  <header>
    <div class="top-header">
      <!-- Social media / login-sign up-->
      <div class="container">
        <div class="row">
          <div class="social-media">
            <div class="social-media__item"><a href="#"><img src="../images/socials/facebook.png"
                  alt="facebook-icon"></a></div>
            <div class="social-media__item"><a href="#"><img src="../images/socials/google-plus.png"
                  alt="google-plus-icon"></a></div>
            <div class="social-media__item"><a href="#"><img src="../images/socials/instagram.png"
                  alt="instagram-icon"></a></div>
            <div class="social-media__item"><a href="#"><img src="../images/socials/twitter.png" alt="twitter-icon"></a>
            </div>
          </div>
          <div class="login-sign-up">
            <div class="login-sign-up__item"><a href="register-page.html">Đăng ký</a></div>
            <div class="login-sign-up__item"><a href="login.html">Đăng nhập</a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- logo brand-->
    <div class="container">
      <div class="main-header">
        <div class="logo-brand"><a href=""><img src="../images/Logo.png" alt="logo-brand"></a></div>
        <div class="wrapper-contacts">
          <div class="contacts">
            <div class="contacts__title">Hotline: </div>
            <div class="contacts__info"><a href="tel:0495009650">(04) 9500 9650</a> - <a href="tel:0495008850">(04) 9500
                8850</a></div>
          </div>
          <div class="contacts">
            <div class="contacts__title">&Dstrok;&#x1EB7;t h&agrave;ng nhanh: </div>
            <div class="contacts__info"><a href="tel:0495009650">(04) 9500 9650</a> - <a href="tel:0495008850">(04) 9500
                8850</a></div>
          </div>
        </div>
        <div class="search-information">
          <input type="text" placeholder="Tìm kiếm..."><img src="../images/search-icon.png" alt="search-icon">
        </div>
      </div>
    </div>
    <!-- Navigation-->
    <nav class="navbar-wrapper">
      <div class="container">
        <div class="navbar">
          <input type="checkbox" id="menuToggle">
          <label class="menu-icon" for="menuToggle"><img src="../images/menu-icon.png" alt="menu icon"></label>
          <ul class="navbar__menu">
            <li class="navbar__item navbar--active"><a href="#">Trang chủ</a></li>
            <li class="navbar__item"><a href="#">Giới thiệu</a></li>
            <li class="navbar__item"><a href="#">Sản phẩm</a></li>
            <li class="navbar__item"><a href="#">Tin khuyến mại</a></li>
            <li class="navbar__item"><a href="#">Dịch vụ</a></li>
            <li class="navbar__item"><a href="#">Liên hệ</a></li>
          </ul>
          <div class="cart"><img src="../images/cart.png" alt="cart">
            <div class="cart__number">0</div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <div class="slider">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8 slider__col">
          <div class="carousel">
            <div class="carousel__inner">
              <input class="carousel__open" id="carousel-1" type="radio" name="carousel" aria-hidden="true"
                checked="checked">
              <div class="carousel__item"><img src="../images/SLIDER.jpg"></div>
              <input class="carousel__open" id="carousel-2" type="radio" name="carousel" aria-hidden="true">
              <div class="carousel__item"><img src="../images/SLIDER.jpg"></div>
              <input class="carousel__open" id="carousel-3" type="radio" name="carousel" aria-hidden="true">
              <div class="carousel__item"><img src="../images/SLIDER.jpg"></div>
              <ol class="carousel__indicators">
                <li>
                  <label class="carousel__bullet" for="carousel-1">&bull;</label>
                </li>
                <li>
                  <label class="carousel__bullet" for="carousel-2">&bull;</label>
                </li>
                <li>
                  <label class="carousel__bullet" for="carousel-3">&bull;</label>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 slider__sidebar">
          <div class="slider__sidebar__detail"><img src="../images/plane.png" alt="plane">
            <div class="slider__sidebar__detail__info">
              <div class="title">Miễn phí vận chuyển</div>
              <div class="desc">Chúng tôi vận chuyển miễn phí với các đơn hàng trị giá trên 1000.000 Đ.</div>
            </div>
          </div>
          <div class="slider__sidebar__detail slider__sidebar__detail--active"><img src="../images/reload.png"
              alt="plane">
            <div class="slider__sidebar__detail__info">
              <div class="title">Chính sách đổi trả</div>
              <div class="desc">Nếu phát hiện lỗi của nhà sản xuất, chúng tôi sẽ đổi mới sản phẩm trong 7 ngày đầu tiên.
              </div>
            </div>
          </div>
          <div class="slider__sidebar__detail"><img src="../images/plane.png" alt="plane">
            <div class="slider__sidebar__detail__info">
              <div class="title">Khuyến mại hàng tuần</div>
              <div class="desc">Chúng tôi vận chuyển miễn phí với các đơn hàng trị giá trên 1000.000 Đ.</div>
            </div>
          </div>
          <div class="slider__sidebar__detail"><img src="../images/plane.png" alt="plane">
            <div class="slider__sidebar__detail__info">
              <div class="title">Cam kết hàng chính hãng</div>
              <div class="desc">Chúng tôi vận chuyển miễn phí với các đơn hàng trị giá trên 1000.000 Đ.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="special-product-container">
    <div class="container">
      <div class="row special-product">
        <div class="wrap-next">
          <div class="wrap-title-general">
            <div class="wrap-four-icon"><img class="four-icon" src="../images/four-square.png" alt="four square icon">
            </div>
            <div class="title-general">Sản phẩm nổi bật</div>
          </div>
          <div class="next-prev">
            <button class="next-prev__btn">&#10094;</button>
            <button class="next-prev__btn">&#10095;</button>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-3 sidebar-container">
          <div class="sidebar">
            <div class="sidebar__item sidebar__item--active">
              <div class="wrap-four-icon"><img class="four-icon" src="../images/danhmuc.png" alt="four icon"></div><a
                class="title" href="#">Danh mục sản phẩm</a>
            </div>
            <div class="sidebar__item">
              <div class="wrap-four-icon"><img class="four-icon" src="../images/four-square-gray.png" alt="four icon">
              </div><a class="title" href="#">Máy in phun khổ lớn</a>
            </div>
            <div class="sidebar__item">
              <div class="wrap-four-icon"><img class="four-icon" src="../images/four-square-gray.png" alt="four icon">
              </div><a class="title" href="#">Máy quét Canon 3D</a>
            </div>
            <div class="sidebar__item">
              <div class="wrap-four-icon"><img class="four-icon" src="../images/four-square-gray.png" alt="four icon">
              </div><a class="title" href="#">Máy hàn điện Alunima</a>
            </div>
            <div class="sidebar__item">
              <div class="wrap-four-icon"><img class="four-icon" src="../images/four-square-gray.png" alt="four icon">
              </div><a class="title" href="#">Máy khoan Decameta</a>
            </div>
            <div class="sidebar__item">
              <div class="wrap-four-icon"><img class="four-icon" src="../images/four-square-gray.png" alt="four icon">
              </div><a class="title" href="#">Máy phay đa năng CNC</a>
            </div>
            <div class="sidebar__item">
              <div class="wrap-four-icon"><img class="four-icon" src="../images/four-square-gray.png" alt="four icon">
              </div><a class="title" href="#">Máy mài, tiện DC 12V</a>
            </div>
            <div class="sidebar__item">
              <div class="wrap-four-icon"><img class="four-icon" src="../images/four-square-gray.png" alt="four icon">
              </div><a class="title" href="#">Máy khoan, máy cắc CNC</a>
            </div>
            <div class="sidebar__item">
              <div class="wrap-four-icon"><img class="four-icon" src="../images/four-square-gray.png" alt="four icon">
              </div><a class="title" href="#">Máy quay thông minh N3</a>
            </div>
            <div class="sidebar__item">
              <div class="wrap-four-icon"><img class="four-icon" src="../images/four-square-gray.png" alt="four icon">
              </div><a class="title" href="#">Motor R34C đa dụng</a>
            </div>
            <div class="sidebar__item">
              <div class="wrap-four-icon"><img class="four-icon" src="../images/four-square-gray.png" alt="four icon">
              </div><a class="title" href="#">Máy in laser mày 3D</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-8 col-lg-9">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4 product-container">
              <div class="product">
                <div class="product__item"><img src="../images/product.jpg" alt="product">
                  <div class="product__price">1.550.000 Đ</div>
                  <div class="product__name">Máy khoan black decker</div>
                  <div class="rating-container">
                    <div class="rating rating2"><a class="rating__item" href="#5" title="Give 5 stars">&starf;</a><a
                        class="rating__item" href="#4" title="Give 4 stars">&starf;</a><a class="rating__item" href="#3"
                        title="Give 3 stars">&starf;</a><a class="rating__item" href="#2"
                        title="Give 2 stars">&starf;</a><a class="rating__item" href="#1"
                        title="Give 1 star">&starf;</a></div>
                    <div class="rating-number">(12 đánh giá)</div>
                  </div>
                  <div class="product__btn"><a class="buy-now" href="#">Mua ngay</a><a class="view-detail" href="#">Xem
                      chi tiết</a></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 product-container">
              <div class="product">
                <div class="product__item"><img src="../images/product.jpg" alt="product">
                  <div class="product__price">1.550.000 Đ</div>
                  <div class="product__name">Máy khoan black decker</div>
                  <div class="rating-container">
                    <div class="rating rating2"><a class="rating__item" href="#5" title="Give 5 stars">&starf;</a><a
                        class="rating__item" href="#4" title="Give 4 stars">&starf;</a><a class="rating__item" href="#3"
                        title="Give 3 stars">&starf;</a><a class="rating__item" href="#2"
                        title="Give 2 stars">&starf;</a><a class="rating__item" href="#1"
                        title="Give 1 star">&starf;</a></div>
                    <div class="rating-number">(12 đánh giá)</div>
                  </div>
                  <div class="product__btn"><a class="buy-now" href="#">Mua ngay</a><a class="view-detail" href="#">Xem
                      chi tiết</a></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 product-container">
              <div class="product">
                <div class="product__item"><img src="../images/product.jpg" alt="product">
                  <div class="product__price">1.550.000 Đ</div>
                  <div class="product__name">Máy khoan black decker</div>
                  <div class="rating-container">
                    <div class="rating rating2"><a class="rating__item" href="#5" title="Give 5 stars">&starf;</a><a
                        class="rating__item" href="#4" title="Give 4 stars">&starf;</a><a class="rating__item" href="#3"
                        title="Give 3 stars">&starf;</a><a class="rating__item" href="#2"
                        title="Give 2 stars">&starf;</a><a class="rating__item" href="#1"
                        title="Give 1 star">&starf;</a></div>
                    <div class="rating-number">(12 đánh giá)</div>
                  </div>
                  <div class="product__btn"><a class="buy-now" href="#">Mua ngay</a><a class="view-detail" href="#">Xem
                      chi tiết</a></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 product-container">
              <div class="product">
                <div class="product__item"><img src="../images/product.jpg" alt="product">
                  <div class="product__price">1.550.000 Đ</div>
                  <div class="product__name">Máy khoan black decker</div>
                  <div class="rating-container">
                    <div class="rating rating2"><a class="rating__item" href="#5" title="Give 5 stars">&starf;</a><a
                        class="rating__item" href="#4" title="Give 4 stars">&starf;</a><a class="rating__item" href="#3"
                        title="Give 3 stars">&starf;</a><a class="rating__item" href="#2"
                        title="Give 2 stars">&starf;</a><a class="rating__item" href="#1"
                        title="Give 1 star">&starf;</a></div>
                    <div class="rating-number">(12 đánh giá)</div>
                  </div>
                  <div class="product__btn"><a class="buy-now" href="#">Mua ngay</a><a class="view-detail" href="#">Xem
                      chi tiết</a></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 product-container">
              <div class="product">
                <div class="product__item"><img src="../images/product.jpg" alt="product">
                  <div class="product__price">1.550.000 Đ</div>
                  <div class="product__name">Máy khoan black decker</div>
                  <div class="rating-container">
                    <div class="rating rating2"><a class="rating__item" href="#5" title="Give 5 stars">&starf;</a><a
                        class="rating__item" href="#4" title="Give 4 stars">&starf;</a><a class="rating__item" href="#3"
                        title="Give 3 stars">&starf;</a><a class="rating__item" href="#2"
                        title="Give 2 stars">&starf;</a><a class="rating__item" href="#1"
                        title="Give 1 star">&starf;</a></div>
                    <div class="rating-number">(12 đánh giá)</div>
                  </div>
                  <div class="product__btn"><a class="buy-now" href="#">Mua ngay</a><a class="view-detail" href="#">Xem
                      chi tiết</a></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 product-container">
              <div class="product">
                <div class="product__item"><img src="../images/product.jpg" alt="product">
                  <div class="product__price">1.550.000 Đ</div>
                  <div class="product__name">Máy khoan black decker</div>
                  <div class="rating-container">
                    <div class="rating rating2"><a class="rating__item" href="#5" title="Give 5 stars">&starf;</a><a
                        class="rating__item" href="#4" title="Give 4 stars">&starf;</a><a class="rating__item" href="#3"
                        title="Give 3 stars">&starf;</a><a class="rating__item" href="#2"
                        title="Give 2 stars">&starf;</a><a class="rating__item" href="#1"
                        title="Give 1 star">&starf;</a></div>
                    <div class="rating-number">(12 đánh giá)</div>
                  </div>
                  <div class="product__btn"><a class="buy-now" href="#">Mua ngay</a><a class="view-detail" href="#">Xem
                      chi tiết</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="new-product-container">
      <div class="row">
        <div class="wrap-next">
          <div class="wrap-title-general">
            <div class="wrap-four-icon"><img class="four-icon" src="../images/four-square.png" alt="four square icon">
            </div>
            <div class="title-general">Sản phẩm Mới</div>
          </div>
          <div class="tab">
            <button class="tab__btn tab__btn--active">Máy khoan</button>
            <button class="tab__btn">Máy in 3D</button>
            <button class="tab__btn">Máy CNC</button>
            <button class="tab__btn">Máy tiện</button>
            <button class="tab__btn">Máy khác</button>
          </div>
          <div class="next-prev">
            <button class="next-prev__btn">&#10094;</button>
            <button class="next-prev__btn">&#10095;</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 product-container">
          <div class="product">
            <div class="product__item"><img src="../images/product.jpg" alt="product">
              <div class="product__price">1.550.000 Đ</div>
              <div class="product__name">Máy khoan black decker</div>
              <div class="rating-container">
                <div class="rating rating2"><a class="rating__item" href="#5" title="Give 5 stars">&starf;</a><a
                    class="rating__item" href="#4" title="Give 4 stars">&starf;</a><a class="rating__item" href="#3"
                    title="Give 3 stars">&starf;</a><a class="rating__item" href="#2" title="Give 2 stars">&starf;</a><a
                    class="rating__item" href="#1" title="Give 1 star">&starf;</a></div>
                <div class="rating-number">(12 đánh giá)</div>
              </div>
              <div class="product__btn"><a class="buy-now" href="#">Mua ngay</a><a class="view-detail" href="#">Xem chi
                  tiết</a></div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 product-container">
          <div class="product">
            <div class="product__item"><img src="../images/product.jpg" alt="product">
              <div class="product__price">1.550.000 Đ</div>
              <div class="product__name">Máy khoan black decker</div>
              <div class="rating-container">
                <div class="rating rating2"><a class="rating__item" href="#5" title="Give 5 stars">&starf;</a><a
                    class="rating__item" href="#4" title="Give 4 stars">&starf;</a><a class="rating__item" href="#3"
                    title="Give 3 stars">&starf;</a><a class="rating__item" href="#2" title="Give 2 stars">&starf;</a><a
                    class="rating__item" href="#1" title="Give 1 star">&starf;</a></div>
                <div class="rating-number">(12 đánh giá)</div>
              </div>
              <div class="product__btn"><a class="buy-now" href="#">Mua ngay</a><a class="view-detail" href="#">Xem chi
                  tiết</a></div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 product-container">
          <div class="product">
            <div class="product__item"><img src="../images/product.jpg" alt="product">
              <div class="product__price">1.550.000 Đ</div>
              <div class="product__name">Máy khoan black decker</div>
              <div class="rating-container">
                <div class="rating rating2"><a class="rating__item" href="#5" title="Give 5 stars">&starf;</a><a
                    class="rating__item" href="#4" title="Give 4 stars">&starf;</a><a class="rating__item" href="#3"
                    title="Give 3 stars">&starf;</a><a class="rating__item" href="#2" title="Give 2 stars">&starf;</a><a
                    class="rating__item" href="#1" title="Give 1 star">&starf;</a></div>
                <div class="rating-number">(12 đánh giá)</div>
              </div>
              <div class="product__btn"><a class="buy-now" href="#">Mua ngay</a><a class="view-detail" href="#">Xem chi
                  tiết</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row banner">
        <div class="col-12 col-md-6"><img src="../images/banner1.jpg" alt="banner"></div>
        <div class="col-12 col-md-6"><img src="../images/banner2.jpg" alt="banner"></div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="runout-product-container">
      <div class="row">
        <div class="wrap-next">
          <div class="wrap-title-general">
            <div class="wrap-four-icon"><img class="four-icon" src="../images/four-square.png" alt="four square icon">
            </div>
            <div class="title-general">Sản phẩm bán chạy</div>
          </div>
          <div class="tab">
            <button class="tab__btn tab__btn--active">Máy khoan</button>
            <button class="tab__btn">Máy in 3D</button>
            <button class="tab__btn">Máy CNC</button>
            <button class="tab__btn">Máy tiện</button>
            <button class="tab__btn">Máy khác</button>
          </div>
          <div class="next-prev">
            <button class="next-prev__btn">&#10094;</button>
            <button class="next-prev__btn">&#10095;</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="product-container">
            <div class="product">
              <div class="product__item"><img src="../images/product.jpg" alt="product">
                <div class="product__price">1.550.000 Đ</div>
                <div class="product__name">Máy khoan black decker</div>
                <div class="rating-container">
                  <div class="rating rating2"><a class="rating__item" href="#5" title="Give 5 stars">&starf;</a><a
                      class="rating__item" href="#4" title="Give 4 stars">&starf;</a><a class="rating__item" href="#3"
                      title="Give 3 stars">&starf;</a><a class="rating__item" href="#2"
                      title="Give 2 stars">&starf;</a><a class="rating__item" href="#1" title="Give 1 star">&starf;</a>
                  </div>
                  <div class="rating-number">(12 đánh giá)</div>
                </div>
                <div class="product__btn"><a class="buy-now" href="#">Mua ngay</a><a class="view-detail" href="#">Xem
                    chi tiết</a></div>
              </div>
            </div>
          </div>
          <div class="product-container">
            <div class="product">
              <div class="product__item"><img src="../images/product.jpg" alt="product">
                <div class="product__price">1.550.000 Đ</div>
                <div class="product__name">Máy khoan black decker</div>
                <div class="rating-container">
                  <div class="rating rating2"><a class="rating__item" href="#5" title="Give 5 stars">&starf;</a><a
                      class="rating__item" href="#4" title="Give 4 stars">&starf;</a><a class="rating__item" href="#3"
                      title="Give 3 stars">&starf;</a><a class="rating__item" href="#2"
                      title="Give 2 stars">&starf;</a><a class="rating__item" href="#1" title="Give 1 star">&starf;</a>
                  </div>
                  <div class="rating-number">(12 đánh giá)</div>
                </div>
                <div class="product__btn"><a class="buy-now" href="#">Mua ngay</a><a class="view-detail" href="#">Xem
                    chi tiết</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6">
          <div class="product-container product-95">
            <div class="product">
              <div class="product__item"><img src="../images/product2.jpg" alt="product">
                <div class="product__price">1.550.000 Đ</div>
                <div class="product__name">Máy khoan black decker</div>
                <div class="rating-container">
                  <div class="rating rating2"><a class="rating__item" href="#5" title="Give 5 stars">&starf;</a><a
                      class="rating__item" href="#4" title="Give 4 stars">&starf;</a><a class="rating__item" href="#3"
                      title="Give 3 stars">&starf;</a><a class="rating__item" href="#2"
                      title="Give 2 stars">&starf;</a><a class="rating__item" href="#1" title="Give 1 star">&starf;</a>
                  </div>
                  <div class="rating-number">(12 đánh giá)</div>
                </div>
                <div class="product__btn"><a class="buy-now" href="#">Mua ngay</a><a class="view-detail" href="#">Xem
                    chi tiết</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="product-container">
            <div class="product">
              <div class="product__item"><img src="../images/product.jpg" alt="product">
                <div class="product__price">1.550.000 Đ</div>
                <div class="product__name">Máy khoan black decker</div>
                <div class="rating-container">
                  <div class="rating rating2"><a class="rating__item" href="#5" title="Give 5 stars">&starf;</a><a
                      class="rating__item" href="#4" title="Give 4 stars">&starf;</a><a class="rating__item" href="#3"
                      title="Give 3 stars">&starf;</a><a class="rating__item" href="#2"
                      title="Give 2 stars">&starf;</a><a class="rating__item" href="#1" title="Give 1 star">&starf;</a>
                  </div>
                  <div class="rating-number">(12 đánh giá)</div>
                </div>
                <div class="product__btn"><a class="buy-now" href="#">Mua ngay</a><a class="view-detail" href="#">Xem
                    chi tiết</a></div>
              </div>
            </div>
          </div>
          <div class="product-container">
            <div class="product">
              <div class="product__item"><img src="../images/product.jpg" alt="product">
                <div class="product__price">1.550.000 Đ</div>
                <div class="product__name">Máy khoan black decker</div>
                <div class="rating-container">
                  <div class="rating rating2"><a class="rating__item" href="#5" title="Give 5 stars">&starf;</a><a
                      class="rating__item" href="#4" title="Give 4 stars">&starf;</a><a class="rating__item" href="#3"
                      title="Give 3 stars">&starf;</a><a class="rating__item" href="#2"
                      title="Give 2 stars">&starf;</a><a class="rating__item" href="#1" title="Give 1 star">&starf;</a>
                  </div>
                  <div class="rating-number">(12 đánh giá)</div>
                </div>
                <div class="product__btn"><a class="buy-now" href="#">Mua ngay</a><a class="view-detail" href="#">Xem
                    chi tiết</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 banner3"><img src="../images/banner3.jpg" alt="banner 3"></div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="new-order-container">
      <div class="row">
        <div class="wrap-next">
          <div class="wrap-title-general">
            <div class="wrap-four-icon"><img class="four-icon" src="../images/four-square.png" alt="four square icon">
            </div>
            <div class="title-general">Hàng mới về</div>
          </div>
          <div class="next-prev">
            <button class="next-prev__btn">&#10094;</button>
            <button class="next-prev__btn">&#10095;</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 product-container">
          <div class="product product2">
            <div class="product__item">
              <div class="product__img"><img src="../images/product.jpg" alt="product"></div>
              <div class="product-inner">
                <div class="product__name">Máy khoan black decker</div>
                <div class="rating-container">
                  <div class="rating rating2"><a class="rating__item" href="#5" title="Give 5 stars">&starf;</a><a
                      class="rating__item" href="#4" title="Give 4 stars">&starf;</a><a class="rating__item" href="#3"
                      title="Give 3 stars">&starf;</a><a class="rating__item" href="#2"
                      title="Give 2 stars">&starf;</a><a class="rating__item" href="#1" title="Give 1 star">&starf;</a>
                  </div>
                  <div class="rating-number">(12 đánh giá)</div>
                </div>
                <div class="desc"></div>
                <div class="product__price">1.550.000 Đ</div>
                <div class="product__btn"><a class="buy-now" href="#">Mua ngay</a><a class="view-detail" href="#">Xem
                    chi tiết</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 product-container">
          <div class="product product2">
            <div class="product__item">
              <div class="product__img"><img src="../images/product.jpg" alt="product"></div>
              <div class="product-inner">
                <div class="product__name">Máy khoan black decker</div>
                <div class="rating-container">
                  <div class="rating rating2"><a class="rating__item" href="#5" title="Give 5 stars">&starf;</a><a
                      class="rating__item" href="#4" title="Give 4 stars">&starf;</a><a class="rating__item" href="#3"
                      title="Give 3 stars">&starf;</a><a class="rating__item" href="#2"
                      title="Give 2 stars">&starf;</a><a class="rating__item" href="#1" title="Give 1 star">&starf;</a>
                  </div>
                  <div class="rating-number">(12 đánh giá)</div>
                </div>
                <div class="desc"></div>
                <div class="product__price">1.550.000 Đ</div>
                <div class="product__btn"><a class="buy-now" href="#">Mua ngay</a><a class="view-detail" href="#">Xem
                    chi tiết</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 product-container">
          <div class="product product2">
            <div class="product__item">
              <div class="product__img"><img src="../images/product.jpg" alt="product"></div>
              <div class="product-inner">
                <div class="product__name">Máy khoan black decker</div>
                <div class="rating-container">
                  <div class="rating rating2"><a class="rating__item" href="#5" title="Give 5 stars">&starf;</a><a
                      class="rating__item" href="#4" title="Give 4 stars">&starf;</a><a class="rating__item" href="#3"
                      title="Give 3 stars">&starf;</a><a class="rating__item" href="#2"
                      title="Give 2 stars">&starf;</a><a class="rating__item" href="#1" title="Give 1 star">&starf;</a>
                  </div>
                  <div class="rating-number">(12 đánh giá)</div>
                </div>
                <div class="desc"></div>
                <div class="product__price">1.550.000 Đ</div>
                <div class="product__btn"><a class="buy-now" href="#">Mua ngay</a><a class="view-detail" href="#">Xem
                    chi tiết</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 product-container">
          <div class="product product2">
            <div class="product__item">
              <div class="product__img"><img src="../images/product.jpg" alt="product"></div>
              <div class="product-inner">
                <div class="product__name">Máy khoan black decker</div>
                <div class="rating-container">
                  <div class="rating rating2"><a class="rating__item" href="#5" title="Give 5 stars">&starf;</a><a
                      class="rating__item" href="#4" title="Give 4 stars">&starf;</a><a class="rating__item" href="#3"
                      title="Give 3 stars">&starf;</a><a class="rating__item" href="#2"
                      title="Give 2 stars">&starf;</a><a class="rating__item" href="#1" title="Give 1 star">&starf;</a>
                  </div>
                  <div class="rating-number">(12 đánh giá)</div>
                </div>
                <div class="desc"></div>
                <div class="product__price">1.550.000 Đ</div>
                <div class="product__btn"><a class="buy-now" href="#">Mua ngay</a><a class="view-detail" href="#">Xem
                    chi tiết</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sub-slider-container">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="sub-carousel">
            <div class="sub-carousel-inner">
              <input class="sub-carousel-open" id="sub-carousel-1" type="radio" name="sub-carousel" aria-hidden="true"
                hidden="" checked="checked">
              <div class="sub-carousel-item"> <img src="../images/sub-slider1.jpg"><img
                  src="../images/sub-slider2.jpg"><img src="../images/sub-slider3.jpg"><img
                  src="../images/sub-slider4.jpg"><img src="../images/sub-slider5.jpg"></div>
              <input class="sub-carousel-open" id="sub-carousel-2" type="radio" name="sub-carousel" aria-hidden="true"
                hidden="">
              <div class="sub-carousel-item"><img src="../images/sub-slider1.jpg"><img
                  src="../images/sub-slider2.jpg"><img src="../images/sub-slider3.jpg"><img
                  src="../images/sub-slider4.jpg"><img src="../images/sub-slider5.jpg"></div>
              <input class="sub-carousel-open" id="sub-carousel-3" type="radio" name="sub-carousel" aria-hidden="true"
                hidden="">
              <div class="sub-carousel-item"><img src="../images/sub-slider1.jpg"><img
                  src="../images/sub-slider2.jpg"><img src="../images/sub-slider3.jpg"><img
                  src="../images/sub-slider4.jpg"><img src="../images/sub-slider5.jpg"></div>
              <label class="carousel-control prev control-1" for="sub-carousel-3">&lsaquo;</label>
              <label class="carousel-control next control-1" for="sub-carousel-2">&rsaquo;</label>
              <label class="carousel-control prev control-2" for="sub-carousel-1">&lsaquo;</label>
              <label class="carousel-control next control-2" for="sub-carousel-3">&rsaquo;</label>
              <label class="carousel-control prev control-3" for="sub-carousel-2">&lsaquo;</label>
              <label class="carousel-control next control-3" for="sub-carousel-1">&rsaquo;</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="breadcrumb-container">
    <div class="breadcrumb">
      <div class="breadcrumb__title">Đăng ký để nhận tin tức khuyến mại hàng tuần</div>
      <div class="breadcrumb__fill">
        <input class="breadcrumb__fill__input" type="email" placeholder="Nhập email của bạn...">
        <button class="breadcrumb__fill__btn">Đăng kí</button>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="row wrap-links">
        <div class="col-12 col-md-6 col-lg-4 col-xl-4 links">
          <div class="links__title">
            <div class="wrap-icon"><img src="../images/four-square.png" alt="four square"></div>Về Chúng Tôi
          </div>
          <div class="links__desc">
            Công ty Cổ phần Công Nghệ DKT đã và đang khẳng định được vị trí hàng đầutrong lĩnh vực Thương mại điện tử.
          </div>
          <div class="links__icon">
            <div class="wrap-icon"><img src="../images/location.png" alt="location icon"></div>Tầng 4 - Tòa nhà Hanoi
            Group 442 Đội Cấn Ba Đình - Hà Nội
          </div>
          <div class="links__icon">
            <div class="wrap-icon"><img src="../images/email-icon.png" alt="email icon"></div>support@dkt.com.vn
          </div>
          <div class="links__icon">
            <div class="wrap-icon"><img src="../images/mobilephone-icon.png" alt="mobile phone icon"></div><a
              href="tel:0466558868">(84-4) 66558868</a><a href="tel:0466558868">(84-4) 37868904</a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-2 links">
          <div class="links__title">
            <div class="wrap-icon"><img src="../images/four-square.png" alt="four square"></div>Chính sách
          </div>
          <div class="links__item"><a href="#">Chính sách giao hàng</a></div>
          <div class="links__item"><a href="#">Chính sách đổi sản phẩm</a></div>
          <div class="links__item"><a href="#">Chính sách bảo hành</a></div>
          <div class="links__item"><a href="#">Chính sách trả góp</a></div>
          <div class="links__item"><a href="#">Giới thiệu hàng đổi trả</a></div>
          <div class="links__item"><a href="#">Vận chuyển miễn phí</a></div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-2 links">
          <div class="links__title">
            <div class="wrap-icon"><img src="../images/four-square.png" alt="four square"></div>Chính sách
          </div>
          <div class="links__item"><a href="#">Hệ thống cửa hàng</a></div>
          <div class="links__item"><a href="#">Hướng dẫn mua hàng</a></div>
          <div class="links__item"><a href="#">Hướng dẫn thanh toán</a></div>
          <div class="links__item"><a href="#">Tích điểm đổi thưởng</a></div>
          <div class="links__item"><a href="#">Dịch vụ đổi trả hàng</a></div>
          <div class="links__item"><a href="#">Câu hỏi thường gặp</a></div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-2 links">
          <div class="links__title">
            <div class="wrap-icon"><img src="../images/four-square.png" alt="four square"></div>Chính sách
          </div>
          <div class="links__item"><a href="#">Tin tức mới nhất</a></div>
          <div class="links__item"><a href="#">Tin tức khuyến mại</a></div>
          <div class="links__item"><a href="#">Tuyển dụng, đãi ngộ</a></div>
          <div class="links__item"><a href="#">Download tài liệu</a></div>
          <div class="links__item"><a href="#">Chương trình đối tác</a></div>
          <div class="links__item"><a href="#">Nhà phát triểu ứng dụng</a></div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-2 links">
          <div class="links__title">
            <div class="wrap-icon"><img src="../images/four-square.png" alt="four square"></div>Kết nối
          </div>
          <div class="links__item link">
            <div class="wrap-icon"><img src="../images/email-icon.png" alt="email icon"></div><a href="#">Facebook</a>
          </div>
          <div class="links__item link">
            <div class="wrap-icon"><img src="../images/email-icon.png" alt="email icon"></div><a href="#">Twitter</a>
          </div>
          <div class="links__item link">
            <div class="wrap-icon"><img src="../images/email-icon.png" alt="email icon"></div><a href="#">Google</a>
          </div>
          <div class="links__item link">
            <div class="wrap-icon"><img src="../images/email-icon.png" alt="email icon"></div><a href="#">Skype</a>
          </div>
          <div class="links__item link">
            <div class="wrap-icon"><img src="../images/email-icon.png" alt="email icon"></div><a href="#">Instagram</a>
          </div>
        </div>
      </div>
      <div class="row wrap-credit-card">
        <div class="col-12 col-md-6 credit-card">
          <div class="credit-card__title">Thanh toán:</div>
          <div class="row credit-card__bank">
            <div class="col-6 col-md-4 col-lg-3 creadit-card__item"><img src="../images/viettin-bank.jpg"
                alt="credit card"></div>
            <div class="col-6 col-md-4 col-lg-3 creadit-card__item"><img src="../images/techcom-bank.jpg"
                alt="credit card"></div>
            <div class="col-6 col-md-4 col-lg-3 creadit-card__item"><img src="../images/vp-bank.jpg" alt="credit card">
            </div>
            <div class="col-6 col-md-4 col-lg-3 creadit-card__item"><img src="../images/tienphong.jpg"
                alt="credit card"></div>
            <div class="col-6 col-md-4 col-lg-3 creadit-card__item"><img src="../images/maritime.jpg" alt="credit card">
            </div>
            <div class="col-6 col-md-4 col-lg-3 creadit-card__item"><img src="../images/donga.jpg" alt="credit card">
            </div>
            <div class="col-6 col-md-4 col-lg-3 creadit-card__item"><img src="../images/abb-bank.jpg" alt="credit card">
            </div>
            <div class="col-6 col-md-4 col-lg-3 creadit-card__item"><img src="../images/viet-capital.jpg"
                alt="credit card"></div>
          </div>
        </div>
        <div class="col-12 col-md-6 hotline">
          <div class="credit-card__title">Giải đáp nhanh:</div>
          <div class="row hotline__row">
            <div class="col-12 col-sm-6 hotline__col">
              <div class="hotline__col__item"><img src="../images/hotline.png" alt="hotline">
                <div class="hotline__col__item__sub">
                  <div class="hotline__col__item__sub__text"> Tư vấn miễn phí (24/7)</div><a
                    class="hotline__col__item__sub__number" href="tel:1900650650">1900 650 650</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 hotline__col">
              <div class="hotline__col__item"><img src="../images/hotline.png" alt="hotline">
                <div class="hotline__col__item__sub">
                  <div class="hotline__col__item__sub__text"> Góp ý - phản hồi - thắc mắc</div><a
                    class="hotline__col__item__sub__number" href="tel:1900650650">1900 650 650</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-footer">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6 bottom-footer__col">
            <div class="bottom-footer__col__copyright">Bản quyền thuộc về<strong>&nbsp;Design Tem.</strong>Phát hiện
              bởi<strong>&nbsp;Bizweb.</strong></div>
          </div>
          <div class="col-12 col-sm-6 bottom-footer__col">
            <ul class="navbar-footer">
              <li class="navbar__item"><a href="index.html">Trang chủ</a></li>
              <li class="navbar__item"><a href="#">Giới thiệu</a></li>
              <li class="navbar__item"><a href="list-page">Sản phẩm</a></li>
              <li class="navbar__item"><a href="#">Tin khuyến mại</a></li>
              <li class="navbar__item"><a href="#">Dịch vụ</a></li>
              <li class="navbar__item"><a href="#">Liên hệ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>