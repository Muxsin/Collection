<?php 

class Collection {
    protected $data = [1,2,3,2,6,5,3,4];

    /*  
    --> Return all elements from array  
    */
    public function toArray() {
        $arr = $this->data;
        return $arr;
    }

    /*  
    --> Searches the array for a given 
        value and returns in array all
        corresponding keys if successful  
    */
    public function findAll($value) {
        $arr = $this->data;
        $arr_values = [];
        
        foreach ($arr as $key=>$values) {
            if ($values == $value) {
                $arr_values[] = $key;
            }
        }
        if (empty($arr_values)) {
            return -1;
        } else {
            return $arr_values;
        }
    }

    /*  
    --> Searches the array for a given 
        value and returns the first 
        corresponding key if successful  
    */
    public function findFirst($value) {
        $arr = $this->data;
        return !array_search($value, $arr)?(-1):array_search($value, $arr);
    }

    /*  
    --> Searches the array for a given 
        value and returns the last 
        corresponding key if successful  
    */
    public function findLast($value) {
        $arr = $this->data;
        $arr = array_reverse($arr,true);
        return !array_search($value, $arr)?(-1):array_search($value, $arr);
    }

    /*  
    --> Checks if a value exists in an array 
    */
    public function has($value) {
        $arr = $this->data;
        return in_array($value,$arr);
    }
}

$coll = new Collection;
var_dump("[1,2,3,2,6,5,3,4]");
var_dump($coll->has(3));