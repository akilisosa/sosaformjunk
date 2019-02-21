<?php
class Entree {
    public $name;
    public$ingredients = array();

    public function _construct($name, $ingredients){
        if (! is_array($ingredients)){
            throw new Exception('$ingredients must be an array');
        }
        $this->name=$name;
        $this->ingredients=$ingredients;
    }

    public function hasIngredient($ingredient){
        return in_array($ingredient, $this->ingredients);
    }

}

$drink = new Entree('glass of milk','milk');
if ($drink->hasIngredient('milk')){
    print "Yummy!";
}

print $drink;b   

