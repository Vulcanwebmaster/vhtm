<div class="main-container col1-layout">
    <div class="main">
        <div class="bg-inner">
            <div class="col-main">
                <div class="col-inner">
                    <div class="cart">
                        <div class="page-title title-buttons">
                            <h1>
                                Shopping Cart</h1>
                            <ul class="checkout-types">
                                <li>
                                    <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout btn-checkout"
                                        onclick="window.location='http://demo.emthemes.com/casualwear/checkout/onepage/';">
                                        <span><span>Proceed to Checkout</span></span></button>
                                </li>
                            </ul>
                        </div>
                        <div class="cart-container-inner">
                            <form action="http://demo.emthemes.com/casualwear/checkout/cart/updatePost/" method="post">
                            <fieldset>
                                <table id="shopping-cart-table" class="data-table cart-table">
                                    <colgroup>
                                        <col width="1">
                                        <col width="1">
                                        <col>
                                        <col width="1">
                                        <col width="1">
                                        <col width="1">
                                        <col width="1">
                                    </colgroup>
                                    <thead>
                                        <tr class="first last">
                                            <th rowspan="1">
                                                &nbsp;
                                            </th>
                                            <th rowspan="1">
                                            </th>
                                            <th rowspan="1">
                                                <span class="nobr">Product Name</span>
                                            </th>
                                            <th class="a-center" colspan="1">
                                                Edit
                                            </th>
                                            <th rowspan="1" class="a-center">
                                                <span class="nobr">Unit Price</span>
                                            </th>
                                            <th class="a-center" colspan="1">
                                                Qty
                                            </th>
                                            <th rowspan="1" class="a-center">
                                                Subtotal
                                            </th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr class="first last">
                                            <td colspan="50" class="a-right last">
                                                <button type="button" title="Continue Shopping" class="button btn-continue" onclick="setLocation('http://demo.emthemes.com/casualwear/')">
                                                    <span><span>Continue Shopping</span></span></button>
                                                <button type="submit" title="Update Shopping Cart" class="button btn-update">
                                                    <span><span>Update Shopping Cart</span></span></button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr class="first last odd">
                                            <td class="a-center">
                                                <a href="http://demo.emthemes.com/casualwear/checkout/cart/delete/id/762/uenc/aHR0cDovL2RlbW8uZW10aGVtZXMuY29tL2Nhc3VhbHdlYXIvY2hlY2tvdXQvY2FydC8,/"
                                                    title="Remove item" class="btn-remove2">Remove item</a>
                                            </td>
                                            <td>
                                                <a href="http://demo.emthemes.com/casualwear/all-star-reverse-print.html" title="all star reverse print">
                                                    <img src="http://demo.emthemes.com/casualwear/media/catalog/product/cache/1/thumbnail/75x/9df78eab33525d08d6e5fb8d27136e95/u/n/untitled-11.png"
                                                        width="75" height="75" alt="all star reverse print"></a>
                                            </td>
                                            <td>
                                                <h2 class="product-name">
                                                    <a href="http://demo.emthemes.com/casualwear/all-star-reverse-print.html">all star reverse
                                                        print</a>
                                                </h2>
                                            </td>
                                            <td class="a-center">
                                                <a href="http://demo.emthemes.com/casualwear/checkout/cart/configure/id/762/" title="Edit item parameters">
                                                    Edit</a>
                                            </td>
                                            <td class="a-right">
                                                <span class="cart-price"><span class="price">$120.00</span> </span>
                                            </td>
                                            <td class="a-center">
                                                <input name="cart[762][qty]" value="1" size="4" title="Qty" class="input-text qty"
                                                    maxlength="12">
                                            </td>
                                            <td class="a-right last">
                                                <span class="cart-price"><span class="price">$120.00</span> </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <script type="text/javascript">                                    decorateTable('shopping-cart-table')</script>
                            </fieldset>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
