<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MySQLClase
 *
 * @author Daniel
 */
class MySQLClase {

    //put your code here
    private $baseDeDatos;
    private $conecto;

    public function __construct($host, $usuario, $clave, $base_datos) {
        $this->baseDeDatos = new mysqli($host, $usuario, $clave, $base_datos);
        if ($this->baseDeDatos->connect_errno) {
            $this->conecto = FALSE;
        } else {
            $this->conecto = TRUE;
        }
    }

    public function realizarConsulta($query) {
        return $this->baseDeDatos->query($query);
    }

    public function getConecto() {
        return $this->conecto;
    }

}
