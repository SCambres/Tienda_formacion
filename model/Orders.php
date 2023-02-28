<?php

class Orders {
    public $Id;
    public $UserId;
    public $TotalPrice;
    public $Date;

    public $allOrders;

    //METODO CONSTRUCTOR PARA CREAR UNN OBJETO DE LA CLASE ORDERS CON TODOS LOS ATRIBUTOS
    public function __construct(){
    }

    //METODO PARA CARGAR UNA ORDEN FILTRADO POR SU ID
    public function load (){

        global $conexion;

        $query = "SELECT * FROM `Orders` WHERE `Id`='{$this->Id}'";

        $resultado = $conexion ->query($query);

        if ($conexion->error){
            return false;
        }
        else {
            if ($resultado->num_rows>0){
                while ($row = $resultado->fetch_assoc())
                    foreach ($row as $key => $value) {
                        $name_column = str_replace('-', '_', $key);
                        $this->{"set$name_column"}($value);
                    }
                    return true;
            }
            else{
                return false;
            }
        }
    }

    //METODO PARA CARGAR TODAS LAS ORDENES DE LA TABLA ORDERS
    public function load_all () {
        global $conexion;

        $query = "SELECT * FROM `Orders`";

        $resultado = $conexion->query($query);

        if ($conexion->error){
            return false;
        }
        else {
            if ($resultado->num_rows>0){
                while ($row = $resultado->fetch_assoc()){
                    $this->allOrders[] = array(
                        "Id" => $row["Id"],
                        "UserId" => $row["UserId"],
                        "TotalPrice" => $row["TotalPrice"],
                        "Date" => $row["Date"],
                    );
            }
            return true;
        }
            else {
                return false;
            }
        }
    }

    //METODO PARA INSERTAR UNA NUEVA ORDEN EN LA TABLA ORDERS
    public function create()
    {
        global $conexion;

        $query = "INSERT INTO `Orders` (`UserId`, `TotalPrice`, `Date`)
                                VALUES ('" . $conexion->real_escape_string($this->getUserId()) . "',
                                        '" . $conexion->real_escape_string($this->getTotalPrice()) . "',
                                        '" . $conexion->real_escape_string($this->getDate()) . "');";

        $conexion->query($query);

        if ($conexion->error) {
            return false;
        } else {
            $this->setId($conexion->insert_id);
            self::load();
            return true;
        }
    }

    //METODO PARA ACTUALIZAR LOS DATOS DE UNA ORDEN SELECCIONADO POR SU ID DE LA TABLA ORDERS
    public function save () {
        global $conexion;

        $query = "UPDATE `Orders` SET 
                  `UserId` = '". $conexion->real_escape_string($this->getUserId())."',
                  `TotalPrice` = '".$conexion->real_escape_string($this->getTotalPrice())."',
                  `Date` = '".$conexion->real_escape_string($this->getDate())."'
                  WHERE `Id` = '{$this->getId()}'";
        
       $conexion->query($query);

       if ($conexion->error){
           return false;
       }
       else {
           return true;
       }
    }

    //METODO PARA BORRAR UNA ORDEN SELECCIONADA POR SU ID DE LA TABLA ORDERS
    public function delete () {
        global $conexion;

        $query = "DELETE FROM `Orders` WHERE `Id` = '{$this->getId()}'";

        $conexion->query($query);

        if ($conexion->error){
            return false;
        }
        else {
            return true;
        }
    }

    //GETTERES Y SETTERS DE LOS ATRIBUTOS
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     */
    public function setId($Id)
    {
        $this->Id = $Id;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->UserId;
    }

    /**
     * @param mixed $UserId
     */
    public function setUserId($UserId)
    {
        $this->UserId = $UserId;
    }

    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->TotalPrice;
    }

    /**
     * @param mixed $TotalPrice
     */
    public function setTotalPrice($TotalPrice)
    {
        $this->TotalPrice = $TotalPrice;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param mixed $Date
     */
    public function setDate($Date)
    {
        $this->Date = $Date;
    }

}