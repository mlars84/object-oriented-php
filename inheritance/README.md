# Inheritance

We use inheritance when we literally want to inherit behavior from a parent class.
Parent/Child can also be referred to as Base/Sub
When using inheritance, if you need to override a method (any behavior) from a parent class, simply override it by declaring a new method or property in the child class

### Abstract Classes

Cannot be instantiated. Can still pass behaviors for child classes to inherit
When you declare a method abstract, there is no body: 
`abstract protected function getArea();`, which is to be provided by the subclasses.

### Favor Composition over Inheritance

If you find that you constantly want to inherit behavior from other classes, it's possible you should be using Composition.
 