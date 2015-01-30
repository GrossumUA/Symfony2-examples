Dependency Injection and Unittests usage example in Symfony2
========================
Usually, we try to organize all previous experience. Use more successful 
practices more often. In programming, best practises are manifested by
design patterns. One of these practices is Dependency Injection pattern 
and, near walking, Inversion of Control:

  - The main idea of the first one (DI) is injection needed dependencies
  into the needed object. The object is implementing only one sort of
  logic. All needed dependencies (services) should be injected, and should
  not be created inside of the object. The app turns in a set of independent
  services. Each service is responsible only for one function or functionality.
  - The main idea of the second one (IoC) is service should not be related
  on the implementation of the other service. It should be related to it's
  abstraction/interface, but not to the logic or implementation.
Use Case description:
---------------------
User can make a request http://lessons.loc/sendemail/{email} set instead
of {email} needed email address. As result, user should see validation
message about email. System administrator should get information about this
checking by email. The same as user, in case when correct email was set.
Books:
------
- [PHP Objects, Patterns and Practice by Matt Zandstra](http://www.amazon.com/Objects-Patterns-Practice-Experts-Source/dp/143022925X)
- [Patterns of Enterprise Application Architecture by Martin Fowler ](http://www.amazon.com/Patterns-Enterprise-Application-Architecture-Martin/dp/0321127420)
- [Design Patterns: Elements of Reusable Object-Oriented Software by Erich Gamma, Richard Helm, Ralph Johnson, John Vlissides](http://www.amazon.com/Design-Patterns-Elements-Reusable-Object-Oriented/dp/0201633612)

Links:
------
- en http://symfony.com/doc/current/components/dependency_injection/index.html
- en http://symfony.com/doc/current/book/testing.html
- en http://martinfowler.com/articles/injection.html
- en http://en.wikipedia.org/wiki/Inversion_of_control
- ru http://habrahabr.ru/post/117572/
- ru http://habrahabr.ru/post/232851/
- ru http://habrahabr.ru/post/183658/