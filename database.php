<?php
class connexion
{
    public function Cnx()
    {
        try{
            $DB=new PDO("mysql:host=localhost;dbname=ideal_school","root","");
        }
        catch(PDOException $e){
            echo"La base n'est pas disponible";
        }    
    }
}
?>
