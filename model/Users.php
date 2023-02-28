<?php

class Users {
    public $id;
    public $Name;
    public $Email;
    public $Password;
    public $Phone;
    public $LastAcces;
    public $Disabled;
    public $Type;

    public $allUsers;

    //METODO CONSTRUCTOR PARA CREAR UNN OBJETO DE LA CLASE USERS
    public function __construct(){

    }

    public function login (){
        global $conexion;

        $query = "SELECT * FROM `Users` WHERE `Email` = '{$this->Email}'
                                                    AND `Password` = '{$this->Password}'";

        $resultado = $conexion->query($query);

        if ($conexion->error){
            echo $conexion->error;
            return false;
        } else {
            if ($resultado->num_rows==1){
                $usuario = mysqli_fetch_assoc($resultado);

                $_SESSION['Id'] = $usuario['Id'];
                $_SESSION['Email'] = $usuario['Email'];
                $_SESSION['Password'] = $usuario['Password'];
                $_SESSION['Name'] = $usuario['Name'];

                return true;

            } else{

                return false;
            }
        }
    }

    //METODO PARA CARGAR UN USUARIO FILTRADO POR SU ID
    public function load (){
        global $conexion;

        $query = "SELECT * FROM `Users` WHERE `Id` = '{$this->id}'";

        $resultado = $conexion->query($query);

        if ($conexion->error){
            return false;
        }
        else{
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

    //METODO PARA CARGAR TODOS LOS USUARIOS DE LA TABLA USERS
    public function load_all () {
        global $conexion;

        $query = "SELECT * FROM `Users`";

        $resultado = $conexion->query($query);

        if ($conexion->error){
            return false;
        }
        else {
            if ($resultado->num_rows>0){
                while ($row = $resultado->fetch_assoc()){

                    $this->allUsers[] = array(
                        "Id" => $row["Id"],
                        "Name" => $row["Name"],
                        "Email" => $row["Email"],
                        "Password" => $row["Password"],
                        "Phone" => $row["Phone"],
                        "LastAcces" => $row["LastAcces"],
                        "Disabled" => $row["Disabled"],
                        "Type" => $row["Type"],
                    );
                }
                return true;
            }
            else {
                return false;
            }
        }
    }

    //METODO PARA INSERTAR UN NUEVO USUARIO EN LA TABLA USERS
    public function create () {
        global $conexion;

        $query = "INSERT INTO `Users` (`Name`, `Email`, `Password`, `Phone`, `LastAcces`, `Disabled`, `Type`)
                                VALUES ('".$conexion->real_escape_string($this->getName())."',
                                        '".$conexion->real_escape_string($this->getEmail())."',
                                        '".$conexion->real_escape_string($this->getPassword())."',
                                        '".$conexion->real_escape_string($this->getPhone())."',
                                        '".$conexion->real_escape_string($this->getLastAcces())."',
                                        '".$conexion->real_escape_string($this->getDisabled())."',
                                        '".$conexion->real_escape_string($this->getType())."');";

        $conexion->query($query);

        if ($conexion->error){
            return false;
        }
        else {
            $this->setId($conexion->insert_id);
            self::load();
            return true;
        }

    }

    //METODO PARA ACTUALIZAR LOS DATOS DE UN USUARIO SELECCIONADO POR SU ID DE LA TABLA USERS
    public function save () {
        global $conexion;

        $query = "UPDATE `Users` SET 
                  `Name` = '". $conexion->real_escape_string($this->getName())."',
                  `Email` = '".$conexion->real_escape_string($this->getEmail())."',
                  `Password` = '".$conexion->real_escape_string($this->getPassword())."',
                  `Phone` = '".$conexion->real_escape_string($this->getPhone())."',
                  `LastAcces` = '".$conexion->real_escape_string($this->getLastAcces())."',
                  `Disabled` = '".$conexion->real_escape_string($this->getDisabled())."',
                  `Type` = '".$conexion->real_escape_string($this->getType())."'
                  WHERE `Id` = '{$this->getId()}'";

        $conexion->query($query);

        if ($conexion->error){
            return false;
        }
        else {
            return true;
        }
    }

    //METODO PARA BORRAR UN USUARIO SELECCIONADO POR SU ID DE LA TABLA USERS
    public function delete () {
        global $conexion;

        $query = "DELETE FROM `Users` WHERE `Id` = '{$this->getId()}'";

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
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
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
    public function setName($Name): void
    {
        $this->Name = $Name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email): void
    {
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param mixed $Password
     */
    public function setPassword($Password): void
    {
        $this->Password = $Password;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param mixed $Phone
     */
    public function setPhone($Phone): void
    {
        $this->Phone = $Phone;
    }

    /**
     * @return mixed
     */
    public function getLastAcces()
    {
        return $this->LastAcces;
    }

    /**
     * @param mixed $LastAcces
     */
    public function setLastAcces($LastAcces): void
    {
        $this->LastAcces = $LastAcces;
    }

    /**
     * @return mixed
     */
    public function getDisabled()
    {
        return $this->Disabled;
    }

    /**
     * @param mixed $Disabled
     */
    public function setDisabled($Disabled): void
    {
        $this->Disabled = $Disabled;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param mixed $Type
     */
    public function setType($Type): void
    {
        $this->Type = $Type;
    }


}