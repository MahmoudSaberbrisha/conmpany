@extends('layouts.masterpagecode')
@section('contant')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Fresh and Organic</p>
                        <h1>Cart</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- cart -->
    <div class="cart-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="cart-table-wrap">
                        <table class="cart-table">
                            <thead class="cart-table-head">
                                <tr class="table-head-row">
                                    <th class="product-remove"></th>
                                    <th class="product-image">Product Image</th>
                                    <th class="product-name">Name</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-total">Total</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($products->isEmpty())
                                    <tr>
                                        <td colspan="6" class="text-center">Your cart is empty.</td>
                                    </tr>
                                @else
                                    @foreach ($products as $item)
                                        <tr class="table-body-row">
                                            <td class="product-remove"><a href="#"><i
                                                        class="far fa-window-close"></i></a>
                                            </td>
                                            <td class="product-image"><img src="{{ url($item->image) }}" alt="">
                                            </td>
                                            <td class="product-name">{{ $item->name }}</td>
                                            <td class="product-price">{{ $item->price }}</td>
                                            <td class="product-quantity">
                                                <input type="number" name="quantity" value="0"
                                                    onchange="updateTotal(this, {{ $item->price }})">
                                            </td>
                                            <td class="product-total">{{ $item->price * 0 }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="total-section">
                        <table class="total-table">
                            <thead class="total-table-head">
                                <tr class="table-total-row">
                                    <th>Total</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="total-data">
                                    <td><strong>Subtotal: </strong></td>
                                    <td id="subtotal">$0.00</td>
                                </tr>
                                <tr class="total-data">
                                    <td><strong>Shipping: </strong></td>
                                    <td>$45</td>
                                </tr>
                                <tr class="total-data">
                                    <td><strong>Total: </strong></td>
                                    <td id="total">$0.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="cart-buttons">
                            <a href="cart" class="boxed-btn">Update Cart</a>
                            <a href="checkout" class="boxed-btn black">Check Out</a>
                        </div>
                    </div>

                    <div class="coupon-section">
                        <h3>Apply Coupon</h3>
                        <div class="coupon-form-wrap">
                            <form action="admin/home">
                                <p><input type="text" placeholder="Coupon"></p>
                                <p><input type="submit" value="Apply"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end cart -->

    <script>
        function updateTotal(quantityInput, price) {
            const quantity = quantityInput.value;
            const totalCell = quantityInput.closest('tr').querySelector('.product-total');
            totalCell.innerText = (price * quantity).toFixed(2);
            updateSubtotal();
        }

        function updateSubtotal() {
            let subtotal = 0;
            const totalCells = document.querySelectorAll('.product-total');
            totalCells.forEach(cell => {
                subtotal += parseFloat(cell.innerText) || 0;
            });
            document.getElementById('subtotal').innerText = subtotal.toFixed(2);
            document.getElementById('total').innerText = (subtotal + 45).toFixed(2); // Adding shipping
        }
    </script>
@endsection
