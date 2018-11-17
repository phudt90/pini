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

      <div class="m-product row">
        <div class="col-md-5">
          <div class="m-product__left">gallery</div>
        </div>
        <div class="col-md-5">
          <div class="m-product__center">
            <h1 class="m-product__name">Ắc quy ô tô DAEWOO DIN 56219 12V 62Ah</h1>

            <div class="m-product__terms">
              <div><span>Thương hiệu:</span> <a target="_blank" href="javascript:;">DAEWOO</a></div>
              <div><span>Mã sản phẩm:</span> DAEWOO DIN 56219</div>
              <div class="m-product__brand">
                <a href="javascript:;">
                  <img src="<?php echo $basePath; ?>/dist/assets/media/img/brand/daewoo.png" class="img-responsive" />
                </a>
              </div>
            </div>

            <div class="m-product__buy">
              <div class="m-product__price">
                <p class="m-product__price-new">
                  <span class="price-label">Giá:</span>
                  <span class="price-value">1,890,000 đ</span>
                </p>
              </div>
              <div class="m-product__cart">
                <a href="javascript:;" class="btn btn-primary m-btn m-btn--icon">
                  <span>
                    <i class="la la-cart-plus"></i>
                    <span>Thêm vào giỏ</span>
                  </span>
                </a>
              </div>
            </div>

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
              <p><strong>* Dòng xe sử dụng:</strong></p>
              <p><strong>- CHERVOLET:</strong>&nbsp;CRUSE, ORLANDO</p>
              <p><strong>- MINICOOPER:&nbsp;</strong>CONVERTIBLE, COUNTRYMAN&nbsp;2.0,&nbsp;COOPER&nbsp;2.0S</p>
              <p><strong>-&nbsp;HYUNDAI:</strong> ELANTRA SPORT, SONATA 2012,&nbsp;TUCSON '16-17'</p>
              <p><strong>- KIA:</strong> K3,&nbsp;SEPHIA, RONDO</p>
            </div>

            <div class="m-product__specs">
              <dl class="dl-props">
                <dt class="dl-props__label nano-terminal-label">Kiểu cọc</dt>
                <dd class="dl-props__value"><span class="nano-terminal-type nano-terminal-type--2"></span></dd>
                <dt class="dl-props__label nano-terminal-label">Vị trí cọc</dt>
                <dd class="dl-props__value"><span class="nano-terminal-layout nano-terminal-layout--2"></span></dd>
                <dt class="dl-props__label">Điện thế (V)</dt>
                <dd class="dl-props__value">12 V</dd>
                <dt class="dl-props__label">
                  Dung lượng (AH)
                </dt>
                <dd class="dl-props__value">
                  62 Ah
                </dd>
                <dt class="dl-props__label">CCA</dt>
                <dd class="dl-props__value">540 A</dd>
                <dt class="dl-props__label">RC</dt>
                <dd class="dl-props__value">100</dd>
                <dt class="dl-props__label">Kích thước:</dt>
                <dd class="dl-props__value">242 x 174 x 189 mm</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="m-product__right">marketing</div>
        </div>
      </div>
    </div>
  </div>

  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
</div>
</body>
</html>