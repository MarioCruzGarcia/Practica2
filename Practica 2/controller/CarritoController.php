<?php

class CarritoController{

    public static function agregarCarrito(){
        if(isset($_SESSION['carrito'])){
            

        }

        
        $juegoCarrito = array(
            'id' => $_POST['id'],
            'cantidad' => 1,
            'precio_unitario' => $_POST['precio']
        );
    }

    



}




?>