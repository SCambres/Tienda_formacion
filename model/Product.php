<?php

class Product {
    public $Id;
    public $Name;
    public $Stock;
    public $Price;
    public $Image;

    public $allProduct;
    public $InfProduct;
//    public $allDetails;

    public function __construct(){

    }

    //METODO PARA CARGAR UN PRODUCTO FILTRADO POR SU ID
    public function load (){
        global $conexion;

        $query = "SELECT * FROM `Product` WHERE `Id` = '{$this->Id}'";

        $resultado = $conexion->query($query);

        if ($conexion->error){
            return false;
        }
        else {
            if ($resultado->num_rows>0){
                while ($row = $resultado->fetch_assoc())
                    foreach ($row as $key => $value){
                        $nombre_columna = str_replace("-", "_", $key);
                        $this->{"set$nombre_columna"}($value);
                    }
                return true;
            }
            else{
                return false;
            }
        }
    }

    public function loadInfoProduct (){
        global $conexion;

        $query = "SELECT * FROM `Product` WHERE `Id` = '{$this->Id}'";

        $resultado = $conexion->query($query);

        if ($conexion->error){
            return false;
        }
        else {
            if ($resultado->num_rows>0){
                while ($row = $resultado->fetch_assoc())
                    $this->InfProduct[] = array(
                        "Id" => $row["Id"],
                        "Name" => $row["Name"],
                        "Stock" => $row["Stock"],
                        "Price" => $row["Price"],
                        "Image" => $row["Image"],
                    );

                return true;
            }
            else{
                return false;
            }
        }
    }

    //INFORMACION COMPLETA DEL UN PRODUCTO, USUARIO Y ORDENEES
//    public function loadAllDetails(){
//        global $conexion;
//
//        $query = "SELECT p.Id, p.Name, p.Stock, p.Price, p.Image, ol.Quantity
//                            FROM Product p
//                            LEFT JOIN Order_lines ol
//                            ON ol.ProductId = p.Id
//                            WHERE p.Id = '{$this->Id}'";
//         var_dump($query);
//         exit;
//        $resultado = $conexion->query($query);
//
//        if ($conexion->error){
//            return false;
//        }
//        else {
//            if ($resultado->num_rows>0){
//                while ($row = $resultado->fetch_assoc())
//                    $this->allDetails[] = array(
//                        "Id" => $row["Id"],
//                        "Name" => $row["Name"],
//                        "Stock" => $row["Stock"],
//                        "Quantity" => $row["Quantity"],
//                        "Price" => $row["Price"],
//                        "Image" => $row["Image"],
//                    );
//
//                return true;
//            }
//            else{
//                return false;
//            }
//        }
//    }

    //METODO PARA CARGAR TODOS LOS PRODUCTOS DE LA TABLA PRODUCT
    public function load_all () {
        global $conexion;

        $query = "SELECT * FROM `Product`";

        $resultado = $conexion->query($query);

        if ($conexion->error){
            echo "error de conexion";
            return false;
        }
        else {
            if ($resultado->num_rows>0){
                while ($row = $resultado->fetch_assoc()){
                    $this->allProduct[] = array(
                        "Id" => $row["Id"],
                        "Name" => $row["Name"],
                        "Stock" => $row["Stock"],
                        "Price" => $row["Price"],
                        "Image" => $row["Image"],
                    );
                }
                return true;
            }
            else {
                return false;
            }
        }
    }

    //METODO PARA INSERTAR UN NUEVO PRODUCTO EN LA TABLA PRODUCT
    public function create () {
        global $conexion;

        $query = "INSERT INTO `Product` (`Name`, `Stock`, `Price`, `Image`)
                                VALUES ('".$conexion->real_escape_string($this->getName())."',
                                        ".$conexion->real_escape_string($this->getStock()).",
                                        ".$conexion->real_escape_string($this->getPrice()).",
                                        '".$conexion->real_escape_string($this->getImage())."')";

        $conexion->query($query);
        if ($conexion->error){
            echo "error en la conexion";
            return false;
        }
        else {
            $this->setId($conexion->insert_id);
            self::load();
            return true;
        }
    }

    //METODO PARA ACTUALIZAR LOS DATOS DE UN PRODUCTO SELECCIONADO POR SU ID DE LA TABLA PRODUCT
    public function save () {
        global $conexion;

        $query = "UPDATE `Product` SET
                   `Name` = '". $conexion->real_escape_string($this->getName())."',
                   `Stock` = ". $conexion->real_escape_string($this->getStock()).",
                   `Price` = ". $conexion->real_escape_string($this->getPrice()).",
                   `Image` = '". $conexion->real_escape_string($this->getImage())."'
                    WHERE `Id` = {$this->getId()}";

        $conexion->query($query);

        if ($conexion->error){
            return false;
        }
        else{
            return true;
        }
    }

    //METODO PARA BORRAR UN PRODUCTO SELECCIONADO POR SU ID DE LA TABLA PRODUCT
    public function delete () {
        global $conexion;

        $query = "DELETE FROM Product WHERE `Id` = '{$this->getId()}'";

        $conexion->query($query);

        if ($conexion->error){
            return false;
        }
        else {
            return true;
        }
    }

    //GETTERS Y SETTERS DE LOS ATRIBUTOS
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->Id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $Name
     */
    public function setName($Name)
    {
        $this->Name = $Name;
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->Stock;
    }

    /**
     * @param mixed $Stock
     */
    public function setStock($Stock)
    {
        $this->Stock = $Stock;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param mixed $Price
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param mixed $Image
     */
    public function setImage($Image)
    {
        $this->Image = $Image;
    }

}