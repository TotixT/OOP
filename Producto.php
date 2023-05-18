<?php
    class Producto{
        public $id;
        public $nombre;
        public $categoria;
        public $marca;
        public $color;
        public $stock;
        public $precio;


        public function __construct($id, $nombre, $categoria, $marca, $color, $stock, $precio){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->categoria = $categoria;
            $this->marca = $marca;
            $this->color = $color;
            $this->stock = $stock;
            $this->precio = $precio;
        }

        public function getDatos(){
            return $this->id . '<br>' . $this->nombre . '<br>' . $this->categoria . '<br>' . $this->marca . '<br>' . $this->color . '<br>' . $this->stock . '<br>' . $this->precio;
        }

        public function setDatos($id, $nombre, $categoria, $marca, $color, $stock, $precio){
            return $this->id = $id . '<br>' . $this->nombre = $nombre . '<br>' . $this->categoria = $categoria . '<br>' . $this->marca = $marca . '<br>' . $this->color = $color . '<br>' . $this->stock = $stock . '<br>' . $this->precio = $precio;
        }
    }

    $producto1 = new Producto(1,"Televisor", "Electrodomesticos", "Samsung", "Negro", 300, "$2.999.900");
    echo $producto1->getDatos() . '<br> <br>';
    echo $producto1->setDatos(2,"Ropa", "Vestuario", "LaCoste", "Blanco", 200, "$200.000") . '<br>';
    $producto2 = new Producto(3,"Arma", "Armamento", "Epsilon", "Negro", 100, "$7.999.900");
    echo '<br>' . $producto2->getDatos() . '<br> <br>';
    /* echo $producto1->getDatos(); */

?>