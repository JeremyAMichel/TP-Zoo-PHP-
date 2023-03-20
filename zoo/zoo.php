<?php 

include_once('./employee/employee.php');

/**
 * Class zoo.php
 *
 * @author Jeremy Michel
 */
class Zoo{

    protected string $name;
    protected ?Employee $employee;
    protected int $maxEnclosure;
    protected array $enclosures;

    /**
     * Zoo constructor.
     */
    public function __construct(string $name, Employee $employee, int $maxEnclosure)
    {
        $this->name = $name;
        $this->employee = $employee;
        $this->maxEnclosure = $maxEnclosure;
        $this->enclosures = [];
    }

    // TOSTRING ex :
    public function __toString(): string {
        $string= 'Zoo name : ' . $this->getName() . ' <br> ';
        $string.= 'Employee name : ' . $this->getEmployee()->getName() . ' <br> ';
        $string.= 'Max enclosure : ' . $this->getMaxEnclosure() . ' <br> ';
        $string.= 'Enclosures : <br>';
        foreach($this->enclosures as $enclosure){
            $string.= ' * '.$enclosure->getName().'<br>';
        }             
        $string.='<br>';
        return $string;     
        
    }


    ////////////
    // GETTER //
    ////////////

    /**
     * return zoo name
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * return the zoo employee
     * @return Employee
     */
    public function getEmployee(): Employee
    {
        return $this->employee;
    }

    /**
     * return zoo max enclosure
     * @return int
     */
    public function getMaxEnclosure(): int
    {
        return $this->maxEnclosure;
    }

    /**
     * return enclosure tab
     * @return array
     */
    public function getEnclosures(): array
    {
        return $this->enclosures;
    }


    ////////////
    // SETTER //
    ////////////

    /**
     * Set the value of name
     * @return  self
     */ 
    public function setName($newName):self
    {
        $this->name = $newName;

        return $this;
    }

    /**
     * Set the employee of the zoo
     * @return  self
     */ 
    public function setEmployee($newEmployee):self
    {
        $this->employee = $newEmployee;

        return $this;
    }

    /**
     * Set the value of max enclosure
     * @return  self
     */ 
    public function setMaxEnclosure($newMaxEnclosure):self
    {
        $this->maxEnclosure = $newMaxEnclosure;

        return $this;
    }

    /**
     * Add an Enclosure to the zoo
     * @return  self
     */ 
    public function addEnclosure(Enclosure $enclosure):void{
        // if there is enough space to add an enclosure
        if(count($this->getEnclosures())<$this->getMaxEnclosure()){
            // si l'enclos n'existe pas déjà
            if(!in_array($enclosure, $this->enclosures)){
                        $this -> enclosures[] = $enclosure;
            }
        } else {
            echo 'no space in the zoo for another enclosure <br><br>';
        }
        
    }

    /**
     * Remove an Enclosure from the zoo
     * @return  void
     */ 
    public function removeEnclosure(Enclosure $enclosure):void{
        // if the enclosure exist
        if(in_array($enclosure, $this->enclosures)){
            // if there is no animal in the enclosure
            if(count($enclosure->getAnimals())==0){
                unset($this->enclosures[array_search($enclosure, $this->enclosures)]);
            } else {
                echo 'an enclosure must be empty to be removed from the zoo <br><br>';
            }
        }
        
    }

    /**
     * Display all enclosure and there content
     * @return  void
     */ 
    public function displayEnclosureCharacteristicsAndContent():void{
        // if there is enclosures
        if(count($this->enclosures)!=0){
            foreach($this->enclosures as $enclosure){
                echo $enclosure;
                $enclosure->displayAnimalCharacteristics();
            }
        }
        
    }

    /**
     * Display the number of animal in the zoo
     * @return  void
     */ 
    public function countAnimals():void{
        // if there is enclosures
        if(count($this->enclosures)!=0){
            $numberAnimal = 0;
            foreach($this->enclosures as $enclosure){
                $numberAnimal+=count($enclosure->getAnimals());
            }
            echo 'There is '.$numberAnimal.' animal(s) in the zoo<br><br>';
        }
        
    }

}

?>