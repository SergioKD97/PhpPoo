<?php
        
class Coche{
/* las propiedades han de tener especificada su visibilidad */
    public $potencia="135 C.V.";
    public $tipo_iva="33";
    private $precio="24535 euros";
    protected $modelo="HF345";
    /* un metodo publico ya que no especificamos visibilidad */
    
    
    function precio_final(){
        return (int)($this->precio)*(1+$this->tipo_iva/100);
    } 
    
    private function precio_amigo($descuento=15){
        return $this->precio_final()*(1-$descuento/100);
    }
    
    //un metodo publico que lleva a otro metodo privado
    function puerta_trasera($porcentaje){
        return $this->precio_amigo($porcentaje);
    }
    
    //metodo publico que lleva a propiedad privada
    function cambia_precios($precio){
        $this->precio=$precio;
    }
    
}

$MiNuevCoche = new Coche;

//printo potencia q es public
print "<br>La potencia es: ". $MiNuevCoche->potencia;

$MiNuevCoche->cambia_precios('25');

print "<br> compruebo el precio final: ". $MiNuevCoche->precio_final();

print "<br> el precio de amigo(25% descuento)es: ". $MiNuevCoche->puerta_trasera(25);







?>


