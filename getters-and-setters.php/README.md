# Getters and Setters

Use them to give ourselves some protection and security.
There can be behavior associated with getting or setting a property, such as restricting access by age, etc.
Getter just adds a new hook for introducing some kind of behavior. Example, if you wanted age in days instead of years, you could multiple the setAge value in the getAge method by 365.