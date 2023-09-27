<?php
    
    class Onibus extends Veiculo implements TransportePublico{
        
        public function pegarTransportePublico(){

            if($this->estado == true){
                echo "Pode Pegar";
            }else{
                echo "Não";
            }

        }
    }
