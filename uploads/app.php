<?php
    require "../vendor/autoload.php"; //se trae el autoload desde el vendor creado por composer
    $router = new \Bramus\Router\Router();
    

/**1- Tabla CAMPERS------------------------------------------------------------------------------------------------------------------------------------------------- */

    $router->get("/campus", function(){
        $cox = new \App\connect();
        $res = $cox->con->prepare("SELECT * FROM campers");
        $res -> execute();
        $res = $res->fetchAll(\PDO::FETCH_ASSOC);
         // retorna la consulta como un array asociativo 
        echo json_encode($res);
    });

    $router->put("/campus", function(){
        $_DATA = json_decode(file_get_contents("php://input"), true);
        $cox = new \App\connect();
        $res = $cox->con->prepare("UPDATE campers SET nombrecamper = :NOMBRE, apellidoCamper =:APELLIDO, idReg=:IDREG  WHERE idCamper =:ID");
        $res-> bindValue("ID", $_DATA['idCamper']);
        $res-> bindValue("NOMBRE", $_DATA['nombrecamper']);
        $res-> bindValue("APELLIDO", $_DATA['apellidoCamper']);
        $res-> bindValue("IDREG", $_DATA['idReg']);
        $res -> execute();
        $res = $res->rowCount();
        echo json_encode($res);
    });

    $router -> delete("/campus", function(){
        $_DATA = json_decode(file_get_contents("php://input"), true);
        $cox = new \App\connect();
        $res = $cox->con->prepare("DELETE FROM campers WHERE idCamper =:ID");
        $res->bindValue("ID", $_DATA["idCamper"]);
        $res->execute();
        $res = $res->rowCount();
        echo json_encode($res);
    });

    $router->post("/campus", function(){
        $_DATA = json_decode(file_get_contents("php://input"), true);
        $cox = new \App\connect();
        $res = $cox->con->prepare("INSERT INTO campers (idCamper,nombrecamper,apellidoCamper,idReg) VALUES (:ID,:NOMBRE,:APELLIDO,:IDREG)");
        $res-> bindValue("ID", $_DATA['idCamper']);
        $res-> bindValue("NOMBRE", $_DATA['nombrecamper']);
        $res-> bindValue("APELLIDO", $_DATA['apellidoCamper']);
        $res-> bindValue("IDREG", $_DATA['idReg']);
        $res -> execute();
        $res = $res->rowCount();
        echo json_encode($res);
    });

    /**-------------------------------------------------------------------------------------------------------------------------------------------------- */
    

$router->run();
    /*
        Preparar -> 
            - Se llama a la conexion    
        Enviar  ->
        Ejecutar ->
        Esperar ->
    */
?>