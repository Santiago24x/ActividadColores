<!DOCTYPE html>
<html>
<body>

<?php
        class Basquetbolista{
            //atributo
            var $nombre;
            var $altura;
            var $Alsalto;
            var $disAnota; 
            //constructor
            function Basquetbolista($n,$a,$s,$dA){
            	$this->nombre=$n;
                $this->altura=$a;
                $this->Alsalto=$s;
            	$this->disAnota=$dA;
            }
            //metodo
            function tamaño(){
            	if ($this->altura>1.8){echo "El jugador es apto para el deporte";}
                else {echo "No puede ta chiquito";}
            }
            function saltoanota(){
            if ($this->Alsalto>=2){echo"El jugador anota con salto de".$this->Alsalto."M";}
            else{echo"Tan cerca pereo tan lejos";}
            }
            function puntuacion(){
            if ($this->disAnota<=1){echo "El jugador ".$this->nombre." anota un punto";}
            if ($this->disAnota>1){echo "El jugador ".$this->nombre." anota dos puntos";}
            if ($this->disAnota>5){echo "El jugador ".$this->nombre." anota tres puntos";}
            } 
        }
        $objeto1=new Basquetbolista ("pepe",2,2,3);
        $objeto2=new Basquetbolista ("josue",1.7,1.5,2);
        $objeto1->puntuacion()
?> 


</body>
</html>