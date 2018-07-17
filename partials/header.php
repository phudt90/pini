<header id="header">

<?php //include 'header_topbar.php';?>

<div class="site-header">
  <div class="site-header__main">
    <div class="container">
      <div class="slds-grid slds-grid_vertical-align-center slds-wrap slds-gutters_x-small">
        <div class="slds-col slds-size_3-of-12 d-md-none d-lg-none">
          <a href="javascript:;" class="btn menu-mobile-toggle" id="menu-mobile-toggle">
            <span class="lnr lnr-menu"></span>
          </a>
        </div>
        <div class="slds-col slds-size_6-of-12 slds-large-size_3-of-12">
          <?php include 'header/logo.php'; ?>
        </div>
        <div class="slds-col slds-size_12-of-12 slds-large-size_6-of-12">
          <?php include 'header/search.php'; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="site-header__navigation">
    <?php include 'nav_main.php' ?>
  </div>
</div>
</header>
<div id="menu-fix"></div>
<?php include 'nav_mobile.php'; ?>