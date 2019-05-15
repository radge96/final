<div id="footer"><!-- #footer Begin -->
    <div class="container"><!-- container Begin -->
        <div class="row"><!-- row Begin -->
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->

               <h4>Paginas</h4>

                <ul><!-- ul Begin -->
                    <li><a href="../cart.php">Carrito de Compras</a></li>
                    <li><a href="../contact.php">Contactanos</a></li>
                    <li><a href="../shop.php">Catalogo</a></li>
                    <li><a href="my_account.php">Mi Cuenta</a></li>
                </ul><!-- ul Finish -->

                <hr>

                <h4>Seccion del Usuario</h4>

                <ul><!-- ul Begin -->

                           <?php

                           if(!isset($_SESSION['customer_email'])){

                               echo"<a href='../checkout.php'>Iniciar Sesion</a>";

                           }else{

                              echo"<a href='my_account.php?my_orders'>Mi Cuenta</a>";

                           }

                           ?>

                    <li>

                            <?php

                           if(!isset($_SESSION['customer_email'])){

                               echo"<a href='../checkout.php'>Iniciar Sesion</a>";

                           }else{

                              echo"<a href='my_account.php?edit_account'>Editar Cuenta</a>";

                           }

                           ?>

                    </li>
                </ul><!-- ul Finish -->

                <hr class="hidden-md hidden-lg hidden-sm">

            </div><!-- col-sm-6 col-md-3 Finish -->

            <div class="com-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->

                <h4>Categorias</h4>

                <ul><!-- ul Begin -->

                    <?php

                        $get_p_cats = "select * from product_categories";

                        $run_p_cats = mysqli_query($con,$get_p_cats);

                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){

                            $p_cat_id = $row_p_cats['p_cat_id'];

                            $p_cat_title = $row_p_cats['p_cat_title'];

                            echo "

                                <li>

                                    <a href='../shop.php?p_cat=$p_cat_id'>

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

                <h4>Info de desarrollo</h4>

                <p><!-- p Start -->

                    <strong>Universidad Anahuac Norte</strong>
                    <br/>Edgar Lopez Rosas
                    <br/>Programacion Para Internet
                    <br/>edgar.lpr1797@gmail.com

                </p><!-- p Finish -->

                <a href="../contact.php">Check Our Contact Page</a>

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
