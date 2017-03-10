# Reverse Polish notation

Reverse **Polish notation (RPN)** is a mathematical notation in which every operator follows all of its operands, 
in contrast to Polish notation (PN), which puts the operator before its operands. It is also known as postfix notation. 
It does not need any parentheses as long as each operator has a fixed number of operands.  visit [wikipedia](https://www.wikiwand.com/en/Reverse_Polish_notation)

## Cloning Project

`https://github.com/thebhandariprakash/reversePolishNotation.git`

## Run project in browser
Type `http://localhost/reversePolishNotation` in your web browser

## Examples

Evaluate the value of an arithmetic expression in Reverse Polish Notation.
Valid operators are +, -, *, /. and %

Each operand may be an integer(number) or another expression.

**A Numeric Example:**



Expression: 5 + ((1 + 2) * 4) - 3  
RPN representation:  

5 1 2 + 4 * + 3 -  

The result of this example is 14 and is calculated in the following manner:  

1+2 = 3  
3*4 = 12  
12+5 = 17  
17-3 = 14  
