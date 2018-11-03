<header id="header" class="m-header">

  <?php //include 'header_topbar.php';?>

  <div class="m-header__main">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xs-6 col-md-3">
          <?php include 'header/logo.php'; ?>
        </div>
        <div class="col-md-5">
          <?php include 'header/search.php'; ?>
        </div>
        <div class="col-xs-3 col-md-4">
          <div class="header-widgets">
            <?php include 'header/contact.php'; ?>

            <?php include 'header/cart.php'; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'nav_main.php' ?>
</header>

<div id="menu-fix" style="height:106px;max-height:106px;"></div>
<?php //include 'nav_mobile.php'; ?>