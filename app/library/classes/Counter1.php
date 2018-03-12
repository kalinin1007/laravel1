<?php


namespace App\library\classes;

use App\library\Interfaces\Counter;
/**
 * Description of Counter1
 *
 * @author k
 */
class Counter1 implements Counter{
    
    private $count = 0;
    //put your code here
    public function increment(){
        $this->count += 1;
    }
    public function decrement(){
        $this->count -= 1;
    }
    public function getCount(){
        return $this->count;
    }
}
