<div id="footer"><!-- #footer Begin -->
    <div class="container"><!-- container Begin -->
        <div class="row"><!-- row Begin -->
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->

               <h4>Paginas Disponibles</h4>

                <ul><!-- ul Begin -->
                    <li><a href="cart.php">Carrito de Compras</a></li>
                    <li><a href="contact.php">Contactanos</a></li>
                    <li><a href="shop.php">Catalogo</a></li>
                    <li><a href="customer/my_account.php">Mi Cuenta</a></li>
                </ul><!-- ul Finish -->

                <hr>

                <h4>Seccion de Usuario</h4>

                <ul><!-- ul Begin -->

                           <?php

                           if(!isset($_SESSION['customer_email'])){

                               echo"<a href='checkout.php'>Login</a>";

                           }else{

                              echo"<a href='customer/my_account.php?my_orders'>My Account</a>";

                           }

                           ?>

                    <li><a href="customer_register.php">Registro</a></li>
                </ul><!-- ul Finish -->

                <hr class="hidden-md hidden-lg hidden-sm">

            </div><!-- col-sm-6 col-md-3 Finish -->

            <div class="com-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->

                <h4>Categoria de Productos</h4>

                <ul><!-- ul Begin -->

                    <?php

                        $get_p_cats = "select * from product_categories";

                        $run_p_cats = mysqli_query($con,$get_p_cats);

                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){

                            $p_cat_id = $row_p_cats['p_cat_id'];

                            $p_cat_title = $row_p_cats['p_cat_title'];

                            echo "

                                <li>

                                    <a href='shop.php?p_cat=$p_cat_id'>

                                        $p_cat_title

                                    </a>

                                </li>

                            ";

                        }

                    ?>

                </ul><!-- ul Finish -->

                <hr class="hidden-md hidden-lg">

            </div><!-- col-sm-6 col-md-3 Finish -->

            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->

                <h4>Encuentranos</h4>

                <p><!-- p Start -->

                    <strong>Universidad Anahuac Campus Norte</strong>
                    <br/>Materia:     Programacion para Internet
                    <br/>Correro:     edgar.lpr1797@gmail.com
                    <br/><strong>Alumno:      Edgar Lopez Rosas</strong>

                </p><!-- p Finish -->

                <a href="contact.php">Checa Nuestra Pagina de ContactO</a>

                <hr class="hidden-md hidden-lg">

            </div><!-- col-sm-6 col-md-3 Finish -->

            <div class="col-sm-6 col-md-3">

                <hr>

            </div>
        </div><!-- row Finish -->
    </div><!-- container Finish -->
</div><!-- #footer Finish -->


<div id="copyright"><!-- #copyright Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-6"><!-- col-md-6 Begin -->

            <p class="pull-left">&copy; 2018 M-Dev Store All Rights Reserve</p>

        </div><!-- col-md-6 Finish -->
        <div class="col-md-6"><!-- col-md-6 Begin -->

            <p class="pull-right">Theme by: <a href="#">MrGhie</a></p>

        </div><!-- col-md-6 Finish -->
    </div><!-- container Finish -->
</div><!-- #copyright Finish -->
