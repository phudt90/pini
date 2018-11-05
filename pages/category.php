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
      <div class="row">
        <div class="col-xs-12 col-md-3">
          column left
        </div>
        <div class="col-xs-12 col-md-9">
          <div class="m-content">
            <div class="m-panel">
              <div class="m-panel__heading">
                <h1 class="h3">Thương hiệu ắc quy</h1>
              </div>
            </div>

            <?php $categories = [
              'Ắc quy Đồng Nai', 'Ắc quy 3K', 'Ắc quy BOSCH', 'Ắc quy CSB', 'Ắc quy DELKO', 'Ắc quy GP', 'Ắc quy GS',
              'Ắc quy FIAMM', 'Ắc quy PANASONIC', 'Ắc quy OUTDO'
            ]; ?>
            <div class="category-list">
              <?php foreach (array_chunk($categories, 5) as $row) { ?>
                <div class="row">
                  <?php foreach ($row as $category) { ?>
                    <div class="col">
                      <div class="category-list-item">
                        <a href="javascript:;"><?php echo $category ?></a>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              <?php } ?>
            </div>

            <div class="">filter and layout</div>

            <?php $producsts = [
              [
                'name' => 'Ắc Quy DAEWOO 40B19FL 12V 35Ah',
                'thumb' => $basePath . '/dist/assets/media/img/product/p1.jpg',
                'brand' => 'DAEWOO',
                'price' => '1.500.000',
                'price_old' => '900.000'
              ], [
                'name' => 'Ắc Quy DAEWOO 40B19FR 12V 35Ah',
                'thumb' => $basePath . '/dist/assets/media/img/product/p2.jpg',
                'brand' => 'YUASA',
                'price' => '1.500.000',
                'price_old' => '900.000'
              ], [
                'name' => 'Ắc Quy DAEWOO 55B24L 12V 45Ah',
                'thumb' => $basePath . '/dist/assets/media/img/product/p3.jpg',
                'brand' => 'TOPLITE',
                'price' => '1.500.000',
                'price_old' => '900.000'
              ], [
                'name' => 'Ắc Quy DAEWOO 55B24LS 12V 45Ah',
                'thumb' => $basePath . '/dist/assets/media/img/product/p4.jpg',
                'brand' => 'GS',
                'price' => '1.500.000',
                'price_old' => '900.000'
              ], [
                'name' => 'Ắc Quy DAEWOO 26R-525 12V 50Ah',
                'thumb' => $basePath . '/dist/assets/media/img/product/p5.jpg',
                'brand' => 'AMARON',
                'price' => '1.500.000',
                'price_old' => '900.000'
              ], [
                'name' => 'Ắc Quy DAEWOO 26-525 12V 50Ah',
                'thumb' => $basePath . '/dist/assets/media/img/product/p6.jpg',
                'brand' => 'GLOBE',
                'price' => '1.500.000',
                'price_old' => '900.000'
              ], [
                'name' => 'Ắc Quy DAEWOO 55D23R 12V 60Ah',
                'thumb' => $basePath . '/dist/assets/media/img/product/p7.jpg',
                'brand' => 'KV',
                'price' => '1.500.000',
                'price_old' => '900.000'
              ], [
                'name' => 'Ắc Quy DAEWOO 55D23L 12V 60Ah',
                'thumb' => $basePath . '/dist/assets/media/img/product/p8.jpg',
                'brand' => 'Đồng Nai',
                'price' => '1.500.000',
                'price_old' => '900.000'
              ],
            ]; ?>

            <div class="m-products">
              <div class="row m-product-grid product-grid-wrapper">
                <?php foreach($producsts as $product) { ?>
                <div class="m-product-item product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-6">
                  <div class="m-product-item__inner">
                    <div class="m-product-item__thumb">
                      <a href="javascript:;">
                        <img src="<?php echo $product['thumb'] ?>"
                          alt="<?php echo $product['name'] ?>"
                          title="<?php echo $product['name'] ?>"
                          class="img-responsive lazyloaded">
                      </a>
                    </div>
                    <div class="m-product-item__info">
                      <div class="m-product-item__caption">
                        <div class="m-product-item__brand">
                          <a href="javascript:;"><?php echo $product['brand'] ?></a></div>
                        <div class="m-product-item__name">
                          <h4><a href="javascript:;"><?php echo $product['name'] ?></a></h4>
                        </div>
                        <p class="m-product-item__price">
                          <span class="price-new"><?php echo $product['price'] ?>đ</span>
                          <?php if($product['price_old']) { ?>
                          <span class="price-old"><?php echo $product['price_old'] ?>đ</span>
                          <?php } ?>
                        </p>
                        <div class="m-product-item__actions">
                          <button type="button" class="btn btn-warning m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill btn-cart"
                                  data-toggle="m-tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                            <i class="la la-shopping-cart"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } ?>
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