<?

namespace salam;

class Salam{

    private $name;
    public function __construct($name){
            $this->name = $name;
    }
    public function Say(){
        return "Salam". $this->name;
    }
}