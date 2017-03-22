# Functional PHP

The project is born out of constant frustration with certain communities and 
their quips that they have functional features, or that there is some new
library that solves all of their problems by doing something `functional`.  The
PHP community seems especially prone to this sort of misinformation, which is 
why this project targets that taudry language.  It is also somewhat related to 
the diatribe on the same topic in my [Peave About Map, Reduce and People Who Talk About 'The Functional Style'](https://github.com/ColinShaw/peave-map-reduce) repo.

In being reminded of the overwhelming interest in `the functional style`,
I decided to create something as close as possible to a functional DSL in 
PHP.  This is a bit limited, as PHP does not really have the 
ability to support new syntax, so this exercise stops with abstract
syntax.  The objective is to concisely show what the closest thing to
functional might be using PHP. 

Take a moment to see how this is done.  There is what you might call a 
two-minute linked list class, meaning that it took all of two minutes or
so to code up, and a few functions that gives it a nudge in the 
direction of looking like function evaluation rather than objects.  The 
normal cadre of basic list functions are implemented, including `map`
in tail-recursive form.  You might note the use of `nil` for the empty 
list.  That is `empty` is not possible in PHP since it is as built-in 
function.  Not only is `null` not possible since it is a PHP type, but 
it isn't the correct form of the word for an empty element anyway, nil 
is.  Please take this code and spread it to the wind,
help educate people on what functional programming actually is, and have
fun with it.

There you have it, now you can say you actually saw something functional
in PHP.  Facilitated by writing a new abstract syntax DSL in PHP.  So
it isn't really PHP, it is a new mini-language that is LISP-like.  Please take
this code and spread it to the wind, help educate people about some of the 
things that are special about functional programming, and have fun
with it.  You might find the [notes](https://docs.google.com/presentation/d/1IEFzjppa1-UlqauOotJmVs2B4lT5xVit4Ziwq3v8zPQ/pub) 
from a presentation I gave helpful.  Or you might want to read more about function
programming, perhaps starting from one of the fine resources I have listed in
[this repo](https://github.com/ColinShaw/functional-programming-resources).

No, it isn't really `functional`, in that we don't really have true first-class
or higher-order functions.  Yes, it is `functional` in that the list 
processing generates the proper algebra for provable computation.  Both of these
are important aspects of a true functional language.  The limitation here isn't 
that we can use the host language to define the requisite operations for the
algebra, but that we don't have the ability to handle functions `as values` as
we would with a true functional language.
