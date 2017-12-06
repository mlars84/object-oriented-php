# OOP Review

Constructor vs method injection:
    Basic rule of thumb is if the only place that a dependency will be referenced is a sinlge controller method, use method. If you're going to reference the object in multiple places of class, use constructor.
    