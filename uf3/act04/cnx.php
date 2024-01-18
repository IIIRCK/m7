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
                $sql = "select * from $a";
                $r = $cnx->query($sql);
                if ($r ){
                    $d = $r->fetch_all(MYSQLI_ASSOC);
                    return $d;
                }else{
                    throw new Exception ("select slq". $cnx->error);
                }
            }catch (Exception $e){
                echo 'Error: ' . $e->getMessage();
            } finally {
                $cnx->close();
            }
        }

        public  function insert($a,$b,$d)
        {
            try {
                $cnx = new cnx();
                $sql = "insert into test01 ('name','surname','img')values (?,?,?)";
                $stm = $cnx->prepare($sql);
                $stm->bind_param('sss',$a,$b,$d);
                if ($stm->execute()){
                    throw new Exception ('Insert sql'.$cnx->error);
                }
                $stm->close();
            }catch (Exception $e){
                echo 'Error: ' . $e->getMessage();

            } finally {
                $cnx->close();
            }

        }




}