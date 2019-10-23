<?php 

class Collection {
    protected $data = [1,2,3,2,6,5,3,4,7];

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
        
        return $arr_values;
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

    /*
    --> Count all elements in an array
    */
    public function count() {
        $arr = $this->data;
        return count($arr);
    }
    
    public function prepend($value) {
        $arr = $this->data;
        $arr1[] = $value;
        return array_merge($arr1, $arr);
    }

    public function append($value) {
        $arr = $this->data;
        $arr1[] = $value;
        return array_merge($arr, $arr1);
    }

    static function collect($array) {
        $collect = new Collection;
        $array = $collect->data;
        return $collect;
    }
}

// Checking

$coll = new Collection;
var_dump($coll::collect([1,2,3])->has(2));
var_dump('[1,2,3,2,6,5,3,4,7]');
var_dump($coll->append(8));
