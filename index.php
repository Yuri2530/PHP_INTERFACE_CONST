<?php
//Declaración de constantes
/*const nombre = array("Yuri Sanguino Rodriguez");
echo nombre[0];
echo "<br>";
define('Nombre', array("Jhoan, Yuri"));
echo Nombre[0];

interface boca{
    const hablar = 'Soy Yuri';
}
echo boca::hablar;
*/


interface Vida{
    const tipo = array('organica','no organica');
//métodos
    public function respirar($tiempo,$cantidad_oxigeno,$estado);
    public function bombearsangre();
    
}

interface muerte extends Vida{
    const estado = array('pulso leve', 'no tiene pulso');
    public function pulso();

}

interface finaldevida extends muerte{
    
}

//implementación de la interface
class Humano implements Vida{
    public function saludar(){
        return "Hola ".Vida::tipo[0].", cómo estás";
    }
    public function respirar($tiempo,$cantidad_oxigeno,$estado){

    }
    public function bombearsangre(){

    }
    public function pulso(){

    }
}
$obj = new Humano();
echo $obj->saludar();

?>