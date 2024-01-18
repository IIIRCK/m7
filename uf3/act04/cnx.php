<?php

class cnx extends \mysqli
{
        private static $a= "localhost";
        private static $b = "root";
        private static $c = "";
        private static $d = "daw";
        public function __construct()
        {
          parent::__construct(self::$a,self::$b,self::$c,self::$d);

            if ($this->connect_error){
                throw new Exception("Connection Failed: ". $this->connect_error);
            }
        }
        public function select($a)
        {
            try {
                $cnx = new cnx();
                $cnx = new cnx();
                $sql = "select * from $a";
                $r = mysqli_query($cnx,$sql);
                if ($r ){
                    $d = $r->fetch_all(MYSQLI_ASSOC);
                    return $d;
                }else{
                    throw new Exception ("select slq". $cnx->error);
                }
            }catch (Exception $e){
                echo 'Error: ' . $e->getMessage();
                return false;
            } finally {
                $cnx->close();
            }
        }




}