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
                'name' => 'Adidas Men Adizero Adios 3 Energy Returning Running Shoes',
                'thumb' => 'http://getcart.321cart.com/black-white/image/cache/catalog/products/321product_5_1-600x600.jpg',
                'brand' => 'Delko',
                'price' => '1.500.000',
                'price_old' => '900.000'
              ],
            ]; ?>

            <div class="m-products">
              <div class="row m-product-items product-grid-wrapper">
                <?php foreach($producsts as $product) { ?>
                <div class="m-product-items product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-6">
                  <div class="m-product-item__insner">
                    <div class="m-product-item__thumb">
                      <a href="javascript:;">
                        <img
                          src="<?php echo $product['thumb'] ?>"
                          alt="<?php echo $product['name'] ?>"
                          title="<?php echo $product['name'] ?>"
                          class="img-responsive lazyloaded">
                      </a>
                    </div>
                    <div class="m-product-item__info">
                      <div class="m-product-item__caption">
                        <div class="m-product-item_brand">
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
                        <div class="m-product-item__buttons">
                          <button type="button" class="btn btn-primary add-cart" data-toggle="tooltip" title="" data-original-title="Add to Cart">
                            <span class="la la-shopping-cart"></span>
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