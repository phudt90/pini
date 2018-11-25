<?php
$basePath  = "http://" . $_SERVER['SERVER_NAME'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/partials/head.php'; ?>

<body class="m-content--skin-light">

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/partials/pre_wrapper.php'; ?>

<div id="wrapper" class="wrapper full-width">
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php'; ?>

  <div class="m-body">
    <div class="m-container">
      <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/partials/breadcrumb.php'; ?>

      <div class="m-product row" id="m-product">
        <div class="col-md-4">
          <div class="m-product__left mb-5" data-toggle="m-sticky-sidebar" data-container="#m-product">
            <div class="m-product__gallery">
              <div class="m-product__image-preview">
                <?php $image_preview = $basePath . '/dist/assets/media/img/product/b'.rand(1, 10).'.jpg'; ?>
                <a class="cloud-zoom thumbnail" id="m-product-zoom" rel="position:'inside', adjustX: 15, adjustY: 0, tint:'#ffffff', tintOpacity:0.1, smoothMove:3, showTitle:false"
                   href="<?php echo $image_preview ?>" title="Ắc quy ô tô DAEWOO DIN 56219 12V 62Ah">
                  <img src="<?php echo $image_preview ?>"
                       alt="Ắc quy ô tô DAEWOO DIN 56219 12V 62Ah"
                       class="m-product__image img-responsive img-normal" id="m-product-image" />
                </a>
              </div>
              <div class="swiper-viewport m-product__thumbnails">
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <?php for($i= 0; $i<10; $i++) { ?>
                    <?php $n = $basePath . '/dist/assets/media/img/product/b'.rand(1, 10).'.jpg' ?>
                    <div class="swiper-slide">
                      <div class="m-product__thumbnail-item" data-target="<?php echo $i ?>">
                        <a class="cloud-zoom-gallery" rel="useZoom: 'm-product-zoom', smallImage: '<?php echo $n ?>'" href="<?php echo $n ?>">
                          <img src="<?php echo $n ?>" class="img-responsive" />
                        </a>
                      </div>
                    </div>
                    <?php } ?>
                  </div>
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
        <div class="col-md-5">
          <div class="m-product__center mb-5">
            <h1 class="m-product__name">Ắc quy ô tô DAEWOO DIN 56219 12V 62Ah</h1>

            <div class="m-product__flexbox justify-content-between align-items-end">
              <div class="m-product__terms">
                <ul class="list-unstyled">
                  <li><span>Thương hiệu:</span> <a target="_blank" href="javascript:;">DAEWOO</a></li>
                  <li><span>Mã sản phẩm:</span> DAEWOO DIN 56219</li>
                </ul>
              </div>
              <div class="m-product__brand">
                <a href="javascript:;" data-toggle="m-tooltip" title="See all products by Sample Brand">
                  <img src="<?php echo $basePath; ?>/dist/assets/media/img/brand/usbattery.png" class="img-responsive" />
                </a>
              </div>
            </div>

            <div class="m-product__buy">
              <div class="m-product__price">
                <span class="price-label">Giá:</span>
                <span class="price-new">1,890,000 đ</span>
                <span class="price-old">990,000 đ</span>
              </div>
              <div class="m-product__cart">
                <div class="m-product__qty m-bootstrap-touchspin-brand">
                  <input id="m_touchspin_qty" type="text" class="form-control" value="1" name="demo1" placeholder="" type="text">
                </div>
                <div class="m-product__add-cart">
                  <a href="javascript:;" class="btn btn-primary m-btn m-btn--icon">
                    <span>
                      <i class="la la-cart-plus"></i>
                      <span>Thêm vào giỏ</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>

            <div class="m-product__section">
              <div class="m-product__section-heading">
                <h3 class="m-product__section-title">Mô tả sản phẩm:</h3>
              </div>
              <div class="m-product__section-body">
                <div class="m-product__info">
                  <p><strong>DAEWOO &nbsp;– MF BATTERY (ẮC QUY MIỄN BẢO DƯỠNG CÔNG NGHỆ CAO)</strong></p>
                  <p><strong>* Hãng sản xuất:</strong> POSCO DAEWOO</p>
                  <p><strong>* Xuất xứ:</strong> Hàn Quốc</p>
                  <p><strong>* Ưu điểm:</strong></p>
                  <p>- Công nghệ tấm lưới bản cực hợp kim Chì-Canxi: Cán - Dập áp lực cao (PowerFrame<sup>®</sup>) khả năng
                    chống ăn mòn cao, giúp tăng tuổi thọ ắc quy.</p>
                  <p>- Thiết kế tấm cách điện dạng bao thư, điện trở thấp giúp tăng hiệu suất dòng khởi động (CCA) lên đến
                    70%.</p>
                  <p>- Thiết kế vỏ nhựa bằng chất liệu cứng, bền và chịu được sốc và rung trên đường.</p>
                </div>
              </div>
            </div>

            <div class="m-product__section">
              <div class="m-product__section-heading">
                <h3 class="m-product__section-title">Dòng xe sử dụng:</h3>
              </div>
              <div class="m-product__section-body">
                <div class="m-product__vehicles">
                  <p><strong>- CHERVOLET:</strong>&nbsp;CRUSE, ORLANDO</p>
                  <p><strong>- MINICOOPER:&nbsp;</strong>CONVERTIBLE, COUNTRYMAN&nbsp;2.0,&nbsp;COOPER&nbsp;2.0S</p>
                  <p><strong>-&nbsp;HYUNDAI:</strong> ELANTRA SPORT, SONATA 2012,&nbsp;TUCSON '16-17'</p>
                  <p><strong>- KIA:</strong> K3,&nbsp;SEPHIA, RONDO</p>
                </div>
              </div>
            </div>

            <div class="m-product__section">
              <div class="m-product__section-heading">
                <h3 class="m-product__section-title">Thông số kỹ thuật</h3>
              </div>
              <div class="m-product__section-body">
                <div class="m-product__specification">
                  <ul class="m-props list-unstyled">
                    <li class="m-props__item">
                      <div class="m-props__item-label">Điện thế (V)</div>
                      <div class="m-props__item-info">12 V</div>
                    </li>
                    <li class="m-props__item">
                      <div class="m-props__item-label">Dung lượng (Ah)</div>
                      <div class="m-props__item-info">62 Ah</div>
                    </li>
                    <li class="m-props__item">
                      <div class="m-props__item-label">CCA</div>
                      <div class="m-props__item-info">540 A</div>
                    </li>
                    <li class="m-props__item">
                      <div class="m-props__item-label">RC</div>
                      <div class="m-props__item-info">100</div>
                    </li>
                    <li class="m-props__item">
                      <div class="m-props__item-label">Kích thước:</div>
                      <div class="m-props__item-info">242 x 174 x 189 mm</div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="m-product__right mb-5" data-toggle="m-sticky-sidebar" data-container="#m-product">
            <div class="m-product__segment">
              <div class="m-product__segment-title">Duy nhất tại <br/>Ắc quy Nguyễn Hòa</div>
              <ul class="m-product__feature-list list-unstyled">
                <li>
                  <i class="la la-check-circle"></i>
                  <b>Yên tâm mua sắm</b><br>
                  Đảm bảo giao dịch, hỗ trợ khiếu nại đổi, trả xuyên biên giới dễ dàng, bảo vệ người mua tuyệt đối
                </li>
                <li>
                  <i class="la la-check-circle"></i>
                  <b>Không lo thủ tục</b><br>
                  Thông quan, chuyển hàng tới tận tay...Quý khách chỉ việc ngồi nhà tận hưởng
                </li>
                <li>
                  <i class="la la-check-circle"></i>
                  <b>Tận hưởng giá shock toàn cầu</b><br>
                  Black Friday, Cyber Monday, Daily deals, Clear stock từ Amazon, và từ các website chính hãng.
                </li>
                <li>
                  <i class="la la-check-circle"></i>
                  <b>Thêm tiết kiệm, thêm ưu đãi</b><br>
                  Nhận thêm ưu đãi từ (điểm thưởng, mã giảm giá...) và luôn miễn phí giao hàng toàn quốc
                </li>
                <li>
                  <i class="la la-check-circle"></i>
                  <b>Không giới hạn lựa chọn</b><br>
                  Hơn 4 tỷ sản phẩm chất lượng từ khắp thế giới được cập nhật realtime, giúp quý khách mua được giá hời, giá rẻ.
                </li>
                <li>
                  <i class="la la-check-circle"></i>
                  <b>Thông minh và tiện lợi</b><br>
                  Giúp quý khách biết mua từ đâu và khi nào, 1 click chuột mua được ngay hàng từ khắp thế giới.
                </li>
              </ul>
            </div>
            <div class="m-product__segment">
              <div class="m-product__segment-title">Quý khách cần trợ giúp</div>
              <div class="m-product__support">
                <div class="row no-gutters m-product__support-info">
                  <div class="col-6 m-product__support-item">
                    <a href="tel:1900545403"><i class="la la-phone-square"></i> 1900 545 403</a>
                  </div>
                  <div class="col-6 m-product__support-item">
                    <a href="mailto:acquynh@gmail.com"><i class="la la-envelope"></i> acquynh@gmail.com</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="m-panel mt-5">
        <div class="m-panel__heading">
          <h3 class="h3">Sản phẩm liên quan</h3>
        </div>
        <div class="m-panel__body">
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

          <div class="swiper-viewport m-products m-swiper-products" id="m-product-related" data-slides-per-view="6">
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

  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
</div>
</body>
</html>