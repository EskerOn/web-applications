<?PHP
class Rectangulo
{
   private $base;
   private $altura;

   public function __construct($ba,$al)
   {
     $this->base=$ba;
     $this->altura=$al; 
   }

   public function area()
   {
     return $this->base*$this->altura;
   }

   public function perimetro()
   {
     return $this->base*2+$this->altura*2;
   }
   
   public function escribir($str)
   {
      echo "<br>$str<br>";
      echo "Base = $this->base <br>";
      echo "Altura = $this->altura <br>";
   }
   
   public function suma($rec1, $rec2)
   {
     $this->base=$rec1->base + $rec2->base;
     $this->altura=$rec1->altura + $rec2->altura;
   }
   
}
?>