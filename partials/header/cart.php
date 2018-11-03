<?php $basePath  = "http://" . $_SERVER['SERVER_NAME']?>
<div id="cart" class="buttons-header m-dropdown m-dropdown--inline m-dropdown--align-right" m-dropdown-toggle="hover" aria-expanded="false">
  <a class="m-dropdown__toggle btn dropdown-toggle">
    <span class="la la-shopping-cart"></span>
    <span id="cart-total" class="button-i">5</span>
  </a>
  <ul class="m-dropdown__wrapper cart-content list-unstyled">
    <li>
      <div class="text-center"><span class="la la-shopping-cart"></span><br>Your shopping cart is empty!</div>
    </li>
    <li>
      <div class="cart-title h5">
        <div class="cart-total"><span class="la la-shopping-cart"></span> Your Cart: <span class="price-color">6</span></div>
      </div>
    </li>
    <li class="li-cart-products">
      <div class="checkout checkout-mobile visible-xs"><a
          href="http://getcart.321cart.com/black-white/index.php?route=checkout/cart"
          class="btn btn-xs btn-primary"><span class="lnr lnr-cart"></span> View Cart</a><a
          href="http://getcart.321cart.com/black-white/index.php?route=checkout/checkout"
          class="btn btn-xs btn-primary"><span class="lnr lnr-enter"></span> Checkout</a></div>
      <table class="table table-striped">
        <tbody>
        <tr>
          <td class="text-center"><a
              href="http://getcart.321cart.com/black-white/index.php?route=product/product&amp;product_id=91"><img
                src="http://getcart.321cart.com/black-white/image/cache/catalog/products/321product_2_1-60x60.jpg"
                alt="Sony PlayStation 4 Launch Edition 500GB Glacier White Console"
                title="Sony PlayStation 4 Launch Edition 500GB Glacier White Console" class="img-thumbnail"></a>
          </td>
          <td class="text-left"><span class="name"><a
                href="http://getcart.321cart.com/black-white/index.php?route=product/product&amp;product_id=91">Sony PlayStation 4 Launch Edition 500GB Glacier White Console</a></span>
            <br>
            <span class="price price-color">$2,695.00</span></td>
          <td class="text-right"><span class="quantity price-color">x5</span></td>
          <td class="text-center">
            <button type="button" onclick="cart.remove('1');" title="Remove" class="btn btn-xs item-remove"><span
                class="lnr lnr-cross-circle"></span></button>
          </td>
        </tr>
        <tr>
          <td class="text-center"><a
              href="http://getcart.321cart.com/black-white/index.php?route=product/product&amp;product_id=94"><img
                src="http://getcart.321cart.com/black-white/image/cache/catalog/products/321product_5_1-60x60.jpg"
                alt="Adidas Men's Adizero Adios 3 Energy Returning Running Shoes"
                title="Adidas Men's Adizero Adios 3 Energy Returning Running Shoes" class="img-thumbnail"></a>
          </td>
          <td class="text-left"><span class="name"><a
                href="http://getcart.321cart.com/black-white/index.php?route=product/product&amp;product_id=94">Adidas Men's Adizero Adios 3 Energy Returning Running Shoes</a></span>
            <br>
            <span class="price price-color">$95.20</span></td>
          <td class="text-right"><span class="quantity price-color">x1</span></td>
          <td class="text-center">
            <button type="button" onclick="cart.remove('2');" title="Remove" class="btn btn-xs item-remove"><span
                class="lnr lnr-cross-circle"></span></button>
          </td>
        </tr>
        </tbody>
      </table>
    </li>
    <li class="li-cart-total">
      <div>
        <table class="table cart-total">
          <tbody>
          <tr>
            <td class="text-left">Sub-Total</td>
            <td class="text-right"><span class="price-color">$95.20</span></td>
          </tr>
          <tr>
            <td class="text-left">Total</td>
            <td class="text-right"><span class="price-color">$95.20</span></td>
          </tr>
          </tbody>
        </table>
        <div class="checkout hidden-xs"><a href="http://getcart.321cart.com/black-white/index.php?route=checkout/cart"
                                           class="btn btn-xs btn-primary"><span class="lnr lnr-cart"></span> View
            Cart</a><a href="http://getcart.321cart.com/black-white/index.php?route=checkout/checkout"
                       class="btn btn-xs btn-primary"><span class="lnr lnr-enter"></span> Checkout</a></div>
      </div>
    </li>
  </ul>
</div>