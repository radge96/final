<center><!-- center Begin -->

    <h1> Seguro de Eliminar Cueta ? </h1>

    <form action="" method="post"><!-- form Begin -->

       <input type="submit" name="Si" value="Si, La Quiero Eliminar" class="btn btn-danger">

       <input type="submit" name="No" value="No, Claro Que No" class="btn btn-primary">

    </form><!-- form Finish -->

</center><!-- center Finish -->


<?php

$c_email = $_SESSION['customer_email'];

if(isset($_POST['Si'])){

    $delete_customer = "delete from customers where customer_email='$c_email'";

    $run_delete_customer = mysqli_query($con,$delete_customer);

    if($run_delete_customer){

        session_destroy();

        echo "<script>alert('Lamentamos el cierre de su cuenta. Bye ')</script>";

        echo "<script>window.open('../index.php','_self')</script>";

    }

}

if(isset($_POST['No'])){

    echo "<script>window.open('my_account.php?my_orders','_self')</script>";

}

?>
