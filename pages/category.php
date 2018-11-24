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

      <div id="m-page-content" class="row">
        <aside class="column-left col-xs-12 col-md-3">
          <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/partials/widgets/category-menu.php'; ?>

          <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/partials/widgets/side-filters.php'; ?>
        </aside>
        <div class="col-xs-12 col-md-7">
          <div class="m-content">
            <div class="m-panel mb-0">
              <div class="m-panel__heading">
                <h1 class="h3">Ắc quy ô tô</h1>
              </div>
              <div class="m-panel__body">
                <div class="m-panel__description">
                  Aenean egestas congue est, nec convallis nunc viverra ac. Duis sit amet mattis quam. Nulla imperdiet
                  tincidunt lorem ac ornare. Nulla velit eu volutpat ornare, justo sem blandit ante, et eleifend lacus
                  mauris sed risus. Nunc vestibulum purus eu feugiat lobortis dolor velit suscipit lacus pretium velit id dui.
                  Sed pulvinar sodales sapien. Phasellus leo erat laoreet vel luctus sit amet fermentum egestas lacus.
                </div>
              </div>
            </div>

            <?php $categories = [
              'Ắc quy Đồng Nai', 'Ắc quy 3K', 'Ắc quy BOSCH', 'Ắc quy CSB', 'Ắc quy DELKO', 'Ắc quy GP', 'Ắc quy GS',
              'Ắc quy FIAMM', 'Ắc quy PANASONIC', 'Ắc quy OUTDO'
            ]; ?>
            <div class="category-links d-none">
              <?php foreach (array_chunk($categories, 5) as $row) { ?>
                <div class="row align-items-center">
                  <?php foreach ($row as $category) { ?>
                    <div class="col">
                      <div class="category-link">
                        <a href="javascript:;">
                          <span><?php echo $category ?></span>
                        </a>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              <?php } ?>
            </div>

            <div class="m-filters">
              <div class="row">
                <div class="col-md-8">
                  <div class="btn-group btn-group-sm hidden-xs hidden-sm">
                    <button type="button" id="list-view" class="btn btn-default" data-toggle="m-tooltip" title=""
                            data-original-title="List"><i class="fa fa-th-list"></i></button>
                    <button type="button" id="small-list-view" class="btn btn-default" data-toggle="m-tooltip" title=""
                            data-original-title="Small List"><i class="fa fa-list"></i></button>
                    <button type="button" id="gallery-view" class="btn btn-default" data-toggle="m-tooltip" title=""
                            data-original-title="Gallery"><i class="fa fa-th-large"></i></button>
                    <button type="button" id="grid-view-3" class="btn btn-default" data-toggle="m-tooltip" title=""
                            data-original-title="Grid">3</button>
                    <button type="button" id="grid-view-4" class="btn btn-default" data-toggle="m-tooltip" title=""
                            data-original-title="Grid">4</button>
                    <button type="button" id="grid-view-5" class="btn btn-default" data-toggle="m-tooltip" title=""
                            data-original-title="Grid">5</button>
                    <button type="button" id="grid-view-6" class="btn btn-default" data-toggle="m-tooltip" title=""
                            data-original-title="Grid">6</button>
                  </div>
                </div>
                <div class="col-md-2 text-right">
                  <select id="input-sort" class="form-control form-control-sm">
                    <option value="1" selected="selected">Default</option>
                    <option value="2">Name (A - Z)</option>
                    <option value="3">Name (Z - A)</option>
                    <option value="4">Price (Low &gt; High)</option>
                    <option value="5">Price (High &gt; Low)</option>
                    <option value="6">Rating (Highest)</option>
                    <option value="7">Rating (Lowest)</option>
                    <option value="8">Model (A - Z)</option>
                    <option value="9">Model (Z - A)</option>
                  </select>
                </div>
                <div class="col-md-2 text-right">
                  <select id="input-limit" class="form-control form-control-sm">
                    <option value="1" selected="selected">10</option>
                    <option value="2">20</option>
                    <option value="3">30</option>
                    <option value="4">40</option>
                    <option value="4">50</option>
                  </select>
                </div>
              </div>
            </div>

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

            <div class="m-products">
              <div class="row m-products-grid product-grid-wrapper">
                <?php foreach($products as $product) { ?>
                <div class="m-product-item m-product-layout m-product-grid m-product-grid--3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                  <div class="m-product-item__inner">
                    <div class="m-product-item__thumb">
                      <a href="<?php echo $basePath ?>/pages/product.php">
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
                <?php } ?>
              </div>
            </div>

            <div class="row align-items-center mt-4 mb-4">
              <div class="col-sm-6 text-left">
                <ul class="pagination">
                  <li class="page-item active"><span class="page-link">1</span></li>
                  <li class="page-item"><a href="javascript:;" class="page-link">2</a></li>
                  <li class="page-item"><a href="javascript:;" class="page-link">&gt;</a></li>
                  <li class="page-item"><a href="javascript:;" class="page-link">&gt;|</a></li>
                </ul>
              </div>
              <div class="col-sm-6 text-right">
                <span class="">Showing 1 to 12 of 18 (2 Pages)</span>
              </div>
            </div>

          </div>
        </div>

        <aside class="column-right col-md-2 hidden-xs">
          <div data-toggle="m-sticky-sidebar" data-container="#m-page-content">
            <div class="banner-pro">
              <div class="banner-pro-item content-bottom-center effect-5">
                <div class="banner-pro-item-wrapper">
                  <a href="javascript:;">
                    <img src="<?php echo $basePath ?>/dist/assets/media/img/banner/banner_sidebar_right_1.jpg"
                         alt="Adidas Adizero Adios 3" title="Adidas Adizero Adios 3" class="img-responsive">
                    <span class="banner-pro-bg"></span>
                    <div class="banner-pro-content-wrapper">
                      <div class="banner-pro-content-table">
                        <div class="banner-pro-content-table-cell">
                          <h2 class="banner-pro-title text-white">Adidas Adizero Adios 3</h2>
                          <span class="banner-pro-subtitle subtitle text-white">
                            Open mesh upper for maximumbreathability and synthetic overlays
                          </span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>

  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
</div>
</body>
</html>