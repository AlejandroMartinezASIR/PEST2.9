<?php
use App\Calculator;
it('adds', fn() => expect((new Calculator())->add(2,3))->toBe(5));
it('subtracts', fn() => expect((new Calculator())->subtract(5,3))->toBe(2));
it('multiplies', fn() => expect((new Calculator())->multiply(3,4))->toBe(12));
it('divides', fn() => expect((new Calculator())->divide(10,2))->toBe(5));
it('throws on zero', function() { $this->expectException(InvalidArgumentException::class); (new Calculator())->divide(1,0); });
