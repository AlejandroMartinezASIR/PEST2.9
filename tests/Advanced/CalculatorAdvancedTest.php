<?php
use App\Calculator;
beforeEach(fn()=> $this->calc=new Calculator());
dataset('add_cases', [[0,0,0],[1.5,2.5,4],[ -1,1,0],[1e6,1e6,2e6]]);
it('adds dataset', fn($a,$b,$exp)=> expect($this->calc->add($a,$b))->toBe($exp))->with('add_cases');
it('float precision', fn()=> expect(round($this->calc->add(0.1,0.2),8))->toBe(0.3));
it('chained expectations', fn()=> expect($this->calc->add(2,3))->toBeNumeric()->toBe(5));
