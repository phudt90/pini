<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include_once 'partials/head.php'; ?>

<body class="">

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

    <div class="home-section">
      <div class="m-container">
        <div class="row">
          <div class="col-md-3">
            <div class="home-banner-title home-banner-title--bg-1">
              <h3 class="home-banner-title-text">Ắc quy ô tô</h3>
              <div class="home-banner-title-subtext">Mauris risus felis adipiscing eu consequat in tincidunt leo tempor est adipiscing nulla eget est malesuada consequat iaculis vitae quis dui neque a arcu fusce erat dolor varius</div>
              <a href="javascript:;" class="btn btn-success">More Products</a>
            </div>
          </div>
          <div class="col-md-9">
            <?php
            $brands = ['DAEWOO', 'YUASA', 'TOPLITE', 'GS', 'AMARON', 'Đồng Nai', 'ENIMAC'];
            $names = [
              'Ắc Quy DAEWOO 40B19FL 12V 35Ah', 'Ắc Quy DAEWOO 40B19FR 12V 35Ah', 'Ắc Quy DAEWOO 26R-525 12V 50Ah',
              'Ắc Quy GS MF 44B19L 12V 40Ah', 'Ắc Quy GS MF 55D23R 12V 60Ah', 'Ắc Quy GS MF 75D23L 12V 65Ah',
              'Ắc Quy GS MF 44B19L 12V 40Ah', 'Ắc Quy GS MF 55D23R 12V 60Ah', 'Ắc Quy GS MF 75D23L 12V 65Ah',
              'Ắc Quy AMARON 42B20L 12V 35Ah', 'Ắc Quy AMARON 65B24LS 12V 50Ah', 'Ắc Quy AMARON 90D23R 12V 65Ah',
              'Ắc Quy Đồng Nai CMF 44B20R 12V 43Ah', 'Ắc Quy Đồng Nai CMF 55B24LS 12V 52Ah', 'Ắc Quy Đồng Nai CMF 55D23R 12V 60Ah',
            ];
            $count = 16;
            $products = [];
            for($i= 0; $i<$count; $i++) {
              array_push($products, [
                'name' => $names[array_rand($names)],
                'thumb' => $basePath . '/dist/assets/media/img/product/b'.rand(1, 10).'.jpg',
                'brand' => $brands[array_rand($brands)],
                'price' => rand(1, 4) . '.' . rand(1, 9) . '00.000',
                'price_old' => rand(1, 0) ? (rand(1, 4) . '.' . rand(1, 9) . '00.000') : ''
              ]);
            }
            ?>
            <div class="swiper-viewport m-products m-swiper-products" id="m-swiper-products-1" data-slides-per-view="4">
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

    <div class="home-section">
      <div class="m-container">
        <div class="row">
          <div class="col-md-9">
            <?php
            $brands = ['DAEWOO', 'YUASA', 'TOPLITE', 'GS', 'AMARON', 'Đồng Nai', 'ENIMAC'];
            $names = [
              'Ắc Quy DAEWOO 40B19FL 12V 35Ah', 'Ắc Quy DAEWOO 40B19FR 12V 35Ah', 'Ắc Quy DAEWOO 26R-525 12V 50Ah',
              'Ắc Quy GS MF 44B19L 12V 40Ah', 'Ắc Quy GS MF 55D23R 12V 60Ah', 'Ắc Quy GS MF 75D23L 12V 65Ah',
              'Ắc Quy GS MF 44B19L 12V 40Ah', 'Ắc Quy GS MF 55D23R 12V 60Ah', 'Ắc Quy GS MF 75D23L 12V 65Ah',
              'Ắc Quy AMARON 42B20L 12V 35Ah', 'Ắc Quy AMARON 65B24LS 12V 50Ah', 'Ắc Quy AMARON 90D23R 12V 65Ah',
              'Ắc Quy Đồng Nai CMF 44B20R 12V 43Ah', 'Ắc Quy Đồng Nai CMF 55B24LS 12V 52Ah', 'Ắc Quy Đồng Nai CMF 55D23R 12V 60Ah',
            ];
            $count = 16;
            $products = [];
            for($i= 0; $i<$count; $i++) {
              array_push($products, [
                'name' => $names[array_rand($names)],
                'thumb' => $basePath . '/dist/assets/media/img/product/b'.rand(1, 10).'.jpg',
                'brand' => $brands[array_rand($brands)],
                'price' => rand(1, 4) . '.' . rand(1, 9) . '00.000',
                'price_old' => rand(1, 0) ? (rand(1, 4) . '.' . rand(1, 9) . '00.000') : ''
              ]);
            }
            ?>
            <div class="swiper-viewport m-products m-swiper-products" id="m-swiper-products-2" data-slides-per-view="4">
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
          <div class="col-md-3">
            <div class="home-banner-title home-banner-title--bg-2">
              <h3 class="home-banner-title-text">Ắc quy xe phân khối lớn</h3>
              <div class="home-banner-title-subtext">Mauris risus felis adipiscing eu consequat in tincidunt leo tempor est adipiscing nulla eget est malesuada consequat iaculis vitae quis dui neque a arcu fusce erat dolor varius</div>
              <a href="javascript:;" class="btn btn-success">More Products</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="home-section">
      <div class="m-container">
        <div class="row">
          <div class="col-md-3">
            <div class="home-banner-title home-banner-title--bg-1">
              <h3 class="home-banner-title-text">Ắc quy ô tô truyền thống</h3>
              <div class="home-banner-title-subtext">Mauris risus felis adipiscing eu consequat in tincidunt leo tempor est adipiscing nulla eget est malesuada consequat iaculis vitae quis dui neque a arcu fusce erat dolor varius</div>
              <a href="javascript:;" class="btn btn-success">More Products</a>
            </div>
          </div>
          <div class="col-md-9">
            <?php
            $brands = ['DAEWOO', 'YUASA', 'TOPLITE', 'GS', 'AMARON', 'Đồng Nai', 'ENIMAC'];
            $names = [
              'Ắc Quy DAEWOO 40B19FL 12V 35Ah', 'Ắc Quy DAEWOO 40B19FR 12V 35Ah', 'Ắc Quy DAEWOO 26R-525 12V 50Ah',
              'Ắc Quy GS MF 44B19L 12V 40Ah', 'Ắc Quy GS MF 55D23R 12V 60Ah', 'Ắc Quy GS MF 75D23L 12V 65Ah',
              'Ắc Quy GS MF 44B19L 12V 40Ah', 'Ắc Quy GS MF 55D23R 12V 60Ah', 'Ắc Quy GS MF 75D23L 12V 65Ah',
              'Ắc Quy AMARON 42B20L 12V 35Ah', 'Ắc Quy AMARON 65B24LS 12V 50Ah', 'Ắc Quy AMARON 90D23R 12V 65Ah',
              'Ắc Quy Đồng Nai CMF 44B20R 12V 43Ah', 'Ắc Quy Đồng Nai CMF 55B24LS 12V 52Ah', 'Ắc Quy Đồng Nai CMF 55D23R 12V 60Ah',
            ];
            $count = 16;
            $products = [];
            for($i= 0; $i<$count; $i++) {
              array_push($products, [
                'name' => $names[array_rand($names)],
                'thumb' => $basePath . '/dist/assets/media/img/product/b'.rand(1, 10).'.jpg',
                'brand' => $brands[array_rand($brands)],
                'price' => rand(1, 4) . '.' . rand(1, 9) . '00.000',
                'price_old' => rand(1, 0) ? (rand(1, 4) . '.' . rand(1, 9) . '00.000') : ''
              ]);
            }
            ?>
            <div class="swiper-viewport m-products m-swiper-products" id="m-swiper-products-1" data-slides-per-view="4">
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