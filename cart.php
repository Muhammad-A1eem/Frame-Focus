<?php include 'navbar.php'; ?>

<style>
    .cart-item img {
        max-width: 100px;
        height: auto;
    }
    .btn-remove {
        color: red;
    }
    .btn-remove:hover {
        text-decoration: underline;
    }
</style>

<div class="container mt-4">
    <h2 class="text-center">Your Shopping Cart</h2>
    
    <?php if (!empty($_SESSION['cart'])): ?>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['cart'] as $item): ?>
                    <tr>
                        <td class="cart-item">
                            <img src="<?php echo htmlspecialchars($item['images'][0] ?? ''); ?>" alt="Product Image">
                            <p><?php echo htmlspecialchars($item['name'] ?? ''); ?></p>
                        </td>
                        <td>PKR <?php echo htmlspecialchars(number_format(floatval($item['price'] ?? 0), 2)); ?></td>
                        <td>
                            <?php echo htmlspecialchars(intval($item['quantity'] ?? 1)); ?>
                        </td>
                        <td>PKR <?php echo htmlspecialchars(number_format(floatval($item['price'] ?? 0) * intval($item['quantity'] ?? 1), 2)); ?></td>
                        <td>
                            <a href="detail1.php?id=<?php echo urlencode($item['id'] ?? ''); ?>" class="btn btn-primary">Details</a>
                            <form method="post" action="cart.php" style="display:inline;">
                                <input type="hidden" name="remove_id" value="<?php echo htmlspecialchars($item['id'] ?? ''); ?>">
                                <button type="submit" class="btn btn-remove">Remove</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-right"><strong>Total Price:</strong></td>
                    <td>PKR <?php echo htmlspecialchars(number_format($totalPrice, 2)); ?></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    <?php else: ?>
        <p class="text-center mt-5">Your cart is empty.</p>
    <?php endif; ?>

    <div class="text-center mt-4 space">
        <a href="home.php" class="btn btn-secondary">Continue Shopping</a>
        <a href="checkout.php" class="btn btn-success">Checkout</a>
    </div>
</div>

<?php include 'Footer.php'; ?>
