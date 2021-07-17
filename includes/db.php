<?php

class db{

    var $con;
    public function connect(){
        $this->con=mysqli_connect("localhost","root","","wedding");
        return $this->con;
    }
}

?>