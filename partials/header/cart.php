<?php $basePath  = "http://" . $_SERVER['SERVER_NAME']?>
<div id="cart" class="buttons-header m-dropdown m-dropdown--inline m-dropdown--align-right" m-dropdown-toggle="hover" aria-expanded="false">
  <a class="m-dropdown__toggle btn dropdown-toggle">
    <span class="la la-shopping-cart"></span>
    <span id="cart-total" class="button-i">5</span>
  </a>
  <ul class="m-dropdown__wrapper cart-content list-unstyled">
    <li>
      <div class="cart-empty text-center">
        <div class="cart-empty-icon">
          <i class="la la-shopping-cart"></i>
        </div>
        <span>Chưa có sản phẩm trong giỏ hàng!</span>
      </div>
    </li>
    <li>
      <div class="cart-total d-flex align-items-center">
        <i class="cart-total-icon la la-shopping-cart"></i>
        <span class="cart-total-title h6">Số sản phẩm:</span>
        <span class="cart-total-number m--font-accent h5">6</span>
      </div>
    </li>
    <li>
      <div class="cart-products">
        <table class="table">
          <tbody>
          <tr class="cart-product">
            <td class="text-left">
              <a href="javascript:;" class="cart-product__thumb">
                <img src="http://getcart.321cart.com/black-white/image/cache/catalog/products/321product_2_1-60x60.jpg"
                  alt="Sony PlayStation 4 Launch Edition 500GB Glacier White Console"
                  title="Sony PlayStation 4 Launch Edition 500GB Glacier White Console">
              </a>
            </td>
            <td class="text-left">
              <a href="javascript:;" class="cart-product__name">Sony PlayStation 4 Launch Edition 500GB Glacier White Console</a>
              <br>
              <span class="cart-product__price">1.500.000 đ</span>
            </td>
            <td class="text-right">
              <span class="cart-product__quantity">x2</span>
            </td>
            <td class="text-center">
              <button type="button" title="Remove" class="btn btn-xs cart-product__remove">
                <i class="la la-remove"></i>
              </button>
            </td>
          </tr>
          <tr class="cart-product">
            <td class="text-left">
              <a href="javascript:;" class="cart-product__thumb">
                <img src="http://getcart.321cart.com/black-white/image/cache/catalog/products/321product_2_1-60x60.jpg"
                     alt="Adidas Men's Adizero Adios 3 Energy Returning Running Shoes"
                     title="Adidas Men's Adizero Adios 3 Energy Returning Running Shoes">
              </a>
            </td>
            <td class="text-left">
              <a href="javascript:;" class="cart-product__name">Adidas Men's Adizero Adios 3 Energy Returning Running Shoes</a>
              <br>
              <span class="cart-product__price">900.000 đ</span>
            </td>
            <td class="text-right">
              <span class="cart-product__quantity">x1</span>
            </td>
            <td class="text-center">
              <button type="button" title="Remove" class="btn btn-xs cart-product__remove">
                <span class="la la-remove"></span>
              </button>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </li>
    <li>
      <div class="cart-summary">
        <table class="table">
          <tbody>
          <tr>
            <td class="text-left">Tổng tiền</td>
            <td class="text-right">
              <span class="m--font-accent">2.400.000 đ</span>
            </td>
          </tr>
          <tr>
            <td class="text-left">Phí giao hàng</td>
            <td class="text-right">
              <span class="m--font-accent">100.000 đ</span>
            </td>
          </tr>
          <tr>
            <td class="text-left">Thành tiền</td>
            <td class="text-right">
              <span class="m--font-accent">2.500.000 đ</span>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </li>
    <li>
      <div class="cart-actions hidden-xs">
        <a href="javascript:;" class="btn btn-primary">
          <i class="la la-shopping-cart"></i> Xem giỏ hàng
        </a>
        <a href="javascript:;" class="btn btn-primary">
          <i class="la la-sign-out"></i> Đặt hàng
        </a>
      </div>
    </li>
  </ul>
</div>