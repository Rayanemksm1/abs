<?php
session_start();
include("includes/connection.php");
include("includes/head.php");
include("includes/functions.php");
include("includes/main.php"); //header
?>
<div id="content">
<div class="container">

    <div class="col-md-9" id="cart">
        <div class="box">
        <form action="cart.php" method="post" enctype="multipart/form-data">

            <h1>Panier</h1>

            <?php
                $ip_add = getRealUserIp();
                $select_cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";
                $run_cart = mysqli_query($con, $select_cart);
                $count = mysqli_num_rows($run_cart);
            ?>

            <p class="text-muted">Vous avez <?php echo $count; ?> éléments dans votre panier</p>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="2">Produit</th>
                            <th>Quantité</th>
                            <th>Prix unitaire</th>
                            <th>Supprimer</th>
                            <th colspan="2">Sous-total</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
                    $total = 0;

                    while($row_cart = mysqli_fetch_array($run_cart)){

                        $pro_id = $row_cart['p_id'];
                        $pro_qty = $row_cart['qty'];
                        $only_price = $row_cart['p_price'];

                        $get_products = "SELECT * FROM products WHERE product_id='$pro_id'";
                        $run_products = mysqli_query($con, $get_products);

                        while($row_products = mysqli_fetch_array($run_products)){

                            $product_title = $row_products['product_title'];
                            $product_img = $row_products['product_img'];

                            $sub_total = $only_price * $pro_qty;
                            $_SESSION['pro_qty'] = $pro_qty;
                            $total += $sub_total;
                    ?>

                    <tr>
                        <td><img style="width: 40px;" src="images/products/<?php echo $product_img; ?>"></td>

                        <td><a href="#"><?php echo $product_title; ?></a></td>

                        <td>
                            <input type="text"
                                   name="quantity"
                                   value="<?php echo $_SESSION['pro_qty']; ?>"
                                   data-product_id="<?php echo $pro_id; ?>"
                                   class="quantity form-control">
                        </td>

                        <td><?php echo number_format($only_price, 2); ?> €</td>

                        <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>"></td>

                        <td><?php echo number_format($sub_total, 2); ?> €</td>
                    </tr>

                    <?php } } ?>
                    </tbody>

                    <tfoot>
                        <tr>
                            <th colspan="5">Total</th>
                            <th colspan="2"><?php echo number_format($total, 2); ?> €</th>
                        </tr>
                    </tfoot>

                </table>

                <div class="box-footer">
                    <div class="pull-right">
                        <button class="btn btn-info" type="submit" name="update" value="Update Cart">
                            Mettre à jour panier
                        </button>
                        <a href="checkout.php" class="btn btn-success">Commander</a>
                    </div>
                </div>

            </div>
        </form>
        </div>
    </div>

    <br><br><br><br><br><br><br>

<?php
function update_cart(){
    global $con;
    if(isset($_POST['update'])){
        if(isset($_POST['remove'])){
            foreach($_POST['remove'] as $remove_id){
                mysqli_query($con, "DELETE FROM cart WHERE p_id='$remove_id'");
            }
        }
        echo "<script>window.open('cart.php','_self')</script>";
    }
}
update_cart();
?>

</div>
</div>

<?php include("includes/footer.php"); ?>

<script>
$(document).ready(function(){
    $(document).on('keyup', '.quantity', function(){
        var id = $(this).data("product_id");
        var quantity = $(this).val();

        if(quantity != ''){
            $.ajax({
                url: "change.php",
                method: "POST",
                data:{id:id, quantity:quantity},
                success:function(data){
                    $("body").load('cart_body.php');
                }
            });
        }
    });
});
</script>

</body>
</html>
