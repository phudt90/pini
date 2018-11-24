<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include_once 'partials/head.php'; ?>

<body class="m-content--skin-light2">

<?php include_once 'partials/pre_wrapper.php'; ?>

<div id="wrapper" class="wrapper full-width">
  <?php include_once 'partials/header.php'; ?>

  <div class="m-body">
    <div class="home-search">
      <div class="home-search-bg"></div>
      <div class="home-search-wrapper">
        <div class="m-container">
          <div class="home-search-content">
            <h3 class="home-search-title h4">Ắc quy Nguyễn Hòa - Uy tín và chất lượng tốt nhất</h3>
            <form id="home-search-form" class="home-search-form">
              <div class="input-group m-input-group">
                <input type="search" placeholder="Nhập tên, mã sản phẩm hoặc thương hiệu để tìm kiếm..." class="form-control m-input">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary m-btn m-btn--icon home-search-form__submit">
                    <span><i class="la la-search"></i> <span>Tìm kiếm</span></span>
                  </button>
                </div>
              </div>
            </form>
            <div class="home-search-note">
              *Quý khách vui lòng nhập tiếng việt có dấu hoặc tiếng anh để có kết quả tìm kiếm chính xác nhất.<br/>
              VD: "điện thoại", "đồng hồ", watch, iphone, ssd...
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="home-feature">
      <div class="m-container">
        <div class="home-feature-wrapper">
          <h4 class="home-feature-title">Yên tâm trải nghiệm mua sắm xuyên biên giới</h4>
          <div class="home-feature-benefit">
            <div class="home-feature-benefit__panel">
              <div class="home-feature-benefit__body">
              <div class="home-feature-benefit__panel-title">Yên tâm mua sắm</div>
              <div class="home-feature-benefit__panel-desc">
                Đảm bảo giao dịch, hỗ trợ khiếu nại đổi, trả xuyên biên giới dễ dàng, bảo vệ người mua...
              </div>
              <i class="svg-icon svg-icon--shield-gray"></i>
              </div>
            </div>
            <div class="home-feature-benefit__panel">
              <div class="home-feature-benefit__body">
                <div class="home-feature-benefit__panel-title">Không lo thủ tục</div>
                <div class="home-feature-benefit__panel-desc">
                  Thông quan, chuyển hàng tới tận tay...Quý khách chỉ việc ngồi nhà tận hưởng
                </div>
                <i class="svg-icon svg-icon--paper-gray"></i>
              </div>
            </div>
            <div class="home-feature-benefit__panel">
              <div class="home-feature-benefit__body">
                <div class="home-feature-benefit__panel-title">Tận hưởng giá shock toàn cầu</div>
                <div class="home-feature-benefit__panel-desc">
                  Black Friday, Cyber Monday, Daily deals, Clear stock từ Amazon, và từ các website chính hãng.
                </div>
                <i class="svg-icon svg-icon--tag-gray"></i>
              </div>
            </div>
            <div class="home-feature-benefit__panel">
              <div class="home-feature-benefit__body">
                <div class="home-feature-benefit__panel-title">Thêm tiết kiệm, thêm ưu đãi</div>
                <div class="home-feature-benefit__panel-desc">
                  Nhận thêm ưu đãi (điểm thưởng, mã giảm giá...) và luôn miễn phí giao hàng toàn quốc
                </div>
                <i class="svg-icon svg-icon--save-gray"></i>
              </div>
            </div>
            <div class="home-feature-benefit__panel">
              <div class="home-feature-benefit__body">
                <div class="home-feature-benefit__panel-title">Không giới hạn lựa chọn</div>
                <div class="home-feature-benefit__panel-desc">
                  Hơn 4 tỷ sản phẩm chất lượng từ khắp thế giới được cập nhật realtime
                </div>
                <i class="svg-icon svg-icon--cart-gray"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="home-products">
      <div class="m-container">
        <div class="row">
          <div class="col-md-3">
            <div class="home-banner-title">
              <div class="home-banner-title-wrapper">
                <h3>Electronics</h3>
                <div class="home-banner-subtitle">Mauris risus felis adipiscing eu consequat in tincidunt leo tempor est adipiscing nulla eget est malesuada consequat iaculis vitae quis dui neque a arcu fusce erat dolor varius</div>
                <a href="javascript:;" class="btn btn-success">More Products</a>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <?php
            $brands = ['DAEWOO', 'YUASA', 'TOPLITE', 'GS', 'AMARON', 'Đồng Nai', 'ENIMAC'];
            $names = [
              'Dầu Hyundai Xteer Heavy Duty 15W40 Ci-4 (6L)', 'Nhớt Xe Shell Rimula R4 X 15W-40 (4L)', 'Nhớt Xe Caltex Havoline Formula 15W40/20W50 (4L)',
              'Dầu Trợ Lực Tay Lái Esnaoil ATF Automatic Transmissionfluid (1L)', 'Phụ Gia Hỗ Trợ Làm Mát Coolant Revive (300ml)', 'Dầu Hyundai Xteer Heavy Duty 20W50/15W40_Cf-4 (18L)',
              'Nhớt Xe Shell Helix Hx3 20W50 (4L)', 'Nhớt Xe Shell Rimula R4 X 15W-40 (18L)', 'Lọc Nhớt Dầu Hyundai Xteer Kia 26300-35503',
              'Dầu Hộp Số Sunsoil Gear Oil Sae 90 (1L)', 'Nhớt Xe Shell Helix Hx7 5W-40 (4L)', 'Dầu Hyundai Xteer Gasoline 10W40 SN (4L)',
              'Dầu Thắng Sunsoil Brake Fluid 500 Dot-3 (4L)', 'Nhớt Xe Shell Helix Ultra 5W40 (4L)', 'Dầu Hyundai Xteer Gasoline G700 10W30 SN (4L)',
            ];
            $count = 10;
            $products = [];
            for($i= 0; $i<$count; $i++) {
              array_push($products, [
                'name' => $names[array_rand($names)],
                'thumb' => $basePath . '/dist/assets/media/img/product/d'.rand(1, 10).'.jpg',
                'brand' => $brands[array_rand($brands)],
                'price' => rand(1, 4) . '.' . rand(1, 9) . '00.000',
                'price_old' => rand(1, 0) ? (rand(1, 4) . '.' . rand(1, 9) . '00.000') : ''
              ]);
            }
            ?>
            <div class="swiper-viewport m-products m-swiper-products" data->
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <?php foreach($products as $product) { ?>
                    <div class="swiper-slide m-swiper-product-item">
                      <div class="m-product-item">
                        <div class="m-product-item__inner">
                          <div class="m-product-item__thumb">
                            <a href="<?php echo $basePath ?>/pages/product.php">
                              <img src="<?php echo $product['thumb'] ?>"
                                   alt="<?php echo $product['name'] ?>"
                                   title="<?php echo $product['name'] ?>"
                                   class="img-responsive">
                            </a>
                          </div>
                          <div class="m-product-item__info">
                            <div class="m-product-item__caption">
                              <div class="m-product-item__brand">
                                <a href="javascript:;"><?php echo $product['brand'] ?></a></div>
                              <div class="m-product-item__name">
                                <h4><a href="<?php echo $basePath ?>/pages/product.php"><?php echo $product['name'] ?></a></h4>
                              </div>
                              <p class="m-product-item__price">
                                <span class="price-new"><?php echo $product['price'] ?>đ</span>
                                <?php if($product['price_old']) { ?>
                                  <span class="price-old"><?php echo $product['price_old'] ?>đ</span>
                                <?php } ?>
                              </p>
                              <div class="m-product-item__actions">
                                <button type="button"
                                        class="btn btn-primary m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill btn-cart"
                                        data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Thêm vào giỏ">
                                  <i class="la la-shopping-cart"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>

                <div class="swiper-pager">
                  <div class="swiper-button swiper-button--prev">
                    <i class="la la-angle-left"></i>
                  </div>
                  <div class="swiper-button swiper-button--next">
                    <i class="la la-angle-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

  <?php include_once 'partials/footer.php'; ?>
</div>
</body>
</html>