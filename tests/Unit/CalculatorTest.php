<?php
use App\Calculator;

it('adds', fn() => expect((new Calculator())->add(2,3))->toEqual(5));
it('subtracts', fn() => expect((new Calculator())->subtract(5,3))->toEqual(2));
it('multiplies', fn() => expect((new Calculator())->multiply(3,4))->toEqual(12));
it('divides', fn() => expect((new Calculator())->divide(10,2))->toEqual(5));

it('throws on zero', function() {
    $this->expectException(\InvalidArgumentException::class);
    (new Calculator())->divide(1,0);
});
