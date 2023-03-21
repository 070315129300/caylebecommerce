@include('css')
@include('navbar')

<section id="cart" class="section-p1">
    <table width="100%">
        <thead>
        <tr>
            <th>REMOVE</th>
            <th>IMAGE</th>
            <th>PRODUCT</th>
            <th>PRICE</th>
            <th>QUANTITY</th>
            <th>SUBTOTAL</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href=""><span class="icon-times-circle"></span></a></td>
            <td><img src="" alt=""></td>
            <td>name of cloth</td>
            <td>$125.56</td>
            <td><input type="number" value="1"></td>
            <td>124.56</td>

        </tr>

        <tr>
            <td><a href=""><span class="icon-times-circle"></span></a></td>
            <td><img src="images/image8.jpg" alt=""></td>
            <td>name of cloth</td>
            <td>$125.56</td>
            <td><input type="number" value="1"></td>
            <td>124.56</td>

        </tr>

        <tr>
            <td><a href=""><span class="icon-times-circle"></span></a></td>
            <td><img src="" alt=""></td>
            <td>name of cloth</td>
            <td>$125.56</td>
            <td><input type="number" value="1"></td>
            <td>124.56</td>

        </tr>
        </tbody>

    </table>
</section>

<section id="cart-add" class="section-p1">
    <div id="coupon">
        <h3>Apply Coupon</h3>
        <div>
            <form action="">
            <input type="text" placeholder="Enter Your Coupon">
            <button class="btn btn-primary">Apply</button>
            </form>
        </div>
    </div>
    <div id="subtotal">
        <h3>Cart Totals</h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td>$ 500</td>

            </tr>
            <tr>
                <td>Shipping</td>
                <td>Free</td>
            </tr>
            <tr>
                <td><b>Total</b></td>
                <td><b>$ 500</b></td>
            </tr>

        </table>
        <button class="btn btn-primary" style="width: 35%">Proceed to checkout</button>
    </div>
</section>









