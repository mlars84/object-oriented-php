# Interfaces/polymorphism

Polymorphism describes a pattern in object oriented programming in which classes have different functionality while sharing a common interface.

Interface is like a contract
No real logic within {}
Instead, a little more abstract
Lays down terms for what any implementation would adhere to 
Are there things that they all share in common?
When you implement an interface, PHP forces you to adhere to the methods within the interface.
PROGRAM TO AN INTERFACE, NOT AN IMPLEMENTATION
If there are ever classes or tasks where you can imagine having multiple implementations for executing task/behavior, it is a telltale sign for an interface.

## Interfaces vs Abstract Classes

Once again, think of interfaces as a contract

An interface defines a public API. It defines a contract that any implementation has to abide by. No logic is stored within an interface. Cheap to use.

With an Abstract Class, so things are similar. You can enforce a contract by creating abstract methods that subclasses must abide by. But then we also resort to inheritance, which isn't always the best idea.

## The difference between an Abstract Class and an Interface

Abstract Classes

An abstract class can provide some functionality and leave the rest for derived class

The derived class may or may not override the concrete functions defined in the base class
A child class extended from an abstract class should logically be related
Interface

An interface cannot contain any functionality. It only contains definitions of the methods

The derived class MUST provide code for all the methods defined in the interface

Completely different and non-related classes can be logically grouped together using an interface

#     