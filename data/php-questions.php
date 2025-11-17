<?php

return [
    [
        'text' => 'Namespaces: which syntax correctly imports a function from another namespace?',
        'answers' => [
            'A' => 'use function My\\Full\\functionName;',
            'B' => 'use My\\Full\\functionName();',
            'C' => 'import function My\\Full\\functionName;',
            'D' => 'use func My\\Full\\functionName;',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/namespaces.xml',
    ],
    [
        'text' => 'Namespaces: which group use syntax is valid to import multiple functions at once?',
        'answers' => [
            'A' => 'use function some\\namespace\\{fn_a, fn_b, fn_c};',
            'B' => 'use some\\namespace\\(fn_a, fn_b, fn_c);',
            'C' => 'use functions some\\namespace\\{fn_a, fn_b, fn_c};',
            'D' => 'import function some\\namespace\\{fn_a, fn_b, fn_c};',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/namespaces.xml',
    ],
    [
        'text' => 'Namespaces: how do you import a constant from another namespace?',
        'answers' => [
            'A' => 'use const My\\Full\\CONSTANT;',
            'B' => 'use My\\Full\\CONSTANT;',
            'C' => 'import const My\\Full\\CONSTANT;',
            'D' => 'use constant My\\Full\\CONSTANT;',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/namespaces.xml',
    ],
    [
        'text' => 'Interfaces: which operator is used by a class to implement an interface?',
        'answers' => [
            'A' => 'implements',
            'B' => 'extends',
            'C' => 'uses',
            'D' => 'with',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/interfaces.xml',
    ],
    [
        'text' => 'Traits: which keyword resolves method name conflicts between imported traits?',
        'answers' => [
            'A' => 'insteadof',
            'B' => 'instead',
            'C' => 'override',
            'D' => 'prefers',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/traits.xml',
    ],
    [
        'text' => 'Exceptions: what must a thrown object be an instance of?',
        'answers' => [
            'A' => 'Throwable',
            'B' => 'Exception',
            'C' => 'Error',
            'D' => 'RuntimeException',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/exceptions.xml',
    ],
    [
        'text' => 'Exceptions: what is the type and name of the third parameter of Exception::__construct?',
        'answers' => [
            'A' => '?Throwable $previous',
            'B' => 'Throwable $previous = null',
            'C' => '?Exception $previous',
            'D' => 'mixed $previous = null',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/exceptions.xml',
    ],
    [
        'text' => 'Closures: which method converts any callable into a Closure instance?',
        'answers' => [
            'A' => 'Closure::fromCallable',
            'B' => 'Closure::wrap',
            'C' => 'callable_to_closure()',
            'D' => 'Closure::bindCallable',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/predefined/closure/fromcallable.xml',
    ],
    [
        'text' => 'Arrays: which call to array_map() zips arrays together when no callback is provided?',
        'answers' => [
            'A' => 'array_map(null, $a, $b, $c)',
            'B' => 'array_map([], $a, $b, $c)',
            'C' => 'array_map(\'\', $a, $b, $c)',
            'D' => 'array_map(fn()=>null, $a, $b, $c)',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/array/functions/array-map.xml',
    ],
    [
        'text' => 'SPL: which iterator mode constants represent the default behavior of SplDoublyLinkedList?',
        'answers' => [
            'A' => 'SplDoublyLinkedList::IT_MODE_FIFO',
            'B' => 'SplDoublyLinkedList::IT_MODE_KEEP',
            'C' => 'SplDoublyLinkedList::IT_MODE_LIFO',
            'D' => 'SplDoublyLinkedList::IT_MODE_DELETE',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/spldoublylinkedlist/setiteratormode.xml',
    ],
    [
        'text' => 'SPL: SplQueue::enqueue is an alias of which SplDoublyLinkedList method?',
        'answers' => [
            'A' => 'SplDoublyLinkedList::push',
            'B' => 'SplDoublyLinkedList::unshift',
            'C' => 'SplDoublyLinkedList::enqueue',
            'D' => 'SplDoublyLinkedList::add',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/splqueue/enqueue.xml',
    ],
    [
        'text' => 'OOP: which statement is true about readonly properties?',
        'answers' => [
            'A' => 'Readonly static properties are not supported.',
            'B' => 'Readonly properties can declare default values.',
            'C' => 'Readonly properties can be unset after initialization.',
            'D' => 'Readonly properties have no type constraints.',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/properties.xml',
    ],
    [
        'text' => 'OOP: which modifier can be applied to a class to enforce that all declared properties are readonly by default?',
        'answers' => [
            'A' => 'readonly',
            'B' => 'final',
            'C' => 'sealed',
            'D' => 'immutable',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/basic.xml',
    ],
    [
        'text' => 'Namespaces: how do you import a function and give it a local alias?',
        'answers' => [
            'A' => 'use function My\\Full\\functionName as func;',
            'B' => 'use My\\Full\\functionName as func();',
            'C' => 'use function My\\Full\\functionName alias func;',
            'D' => 'import function My\\Full\\functionName as func;',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/namespaces.xml',
    ],
    [
        'text' => 'Abstract classes: which statement is true about instantiation?',
        'answers' => [
            'A' => 'Classes defined as abstract cannot be instantiated',
            'B' => 'Abstract classes may be instantiated only via late static binding',
            'C' => 'Abstract classes can be instantiated if they have no abstract methods',
            'D' => 'Abstract classes can be instantiated using Reflection only',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/abstract.xml',
    ],
    [
        'text' => 'Abstract classes: what must a child class do when inheriting from an abstract class?',
        'answers' => [
            'A' => 'All methods marked abstract in the parent\'s class declaration must be defined by the child class',
            'B' => 'Abstract methods are optional if the child is final',
            'C' => 'Only public abstract methods must be defined by the child class',
            'D' => 'Abstract methods can be ignored if a trait provides them',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/abstract.xml',
    ],
    [
        'text' => 'Closures: which statement about static closures and binding is correct?',
        'answers' => [
            'A' => 'Static closures cannot have any bound object',
            'B' => 'Static closures may bind only to protected scope',
            'C' => 'Static closures can bind to any object using Closure::call',
            'D' => 'Static closures are implicitly bound to the declaring class',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/predefined/closure/bindto.xml',
    ],
    [
        'text' => 'Extensions: what does extension_loaded() return?',
        'answers' => [
            'A' => 'Returns true if the extension identified by name is loaded, false otherwise',
            'B' => 'Returns an array of INI entries for the extension',
            'C' => 'Returns the version string of the extension or false',
            'D' => 'Returns the path to the extension shared object',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/info/functions/extension-loaded.xml',
    ],
    [
        'text' => 'Extensions: what does get_loaded_extensions() return?',
        'answers' => [
            'A' => 'Returns an array with the names of all modules compiled and loaded',
            'B' => 'Returns a map of extensions to their INI settings',
            'C' => 'Returns a list of userland Composer packages',
            'D' => 'Returns the full filesystem paths of loaded extensions',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/info/functions/get-loaded-extensions.xml',
    ],
    [
        'text' => 'Error handling: when a custom error handler is set, what is the effect of error_reporting on whether the handler is called?',
        'answers' => [
            'A' => 'error_reporting settings will have no effect and the error handler will be called regardless',
            'B' => 'The handler is called only if error_reporting includes the error level',
            'C' => 'The handler is called only when display_errors=1',
            'D' => 'The handler is never called if error_reporting=0',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/errorfunc/functions/set-error-handler.xml',
    ],
    [
        'text' => 'Error handling: what does set_error_handler() return?',
        'answers' => [
            'A' => 'Returns the previously defined error handler (if any) as a callable.',
            'B' => 'Returns true on success, false on failure',
            'C' => 'Returns an integer error level bitmask',
            'D' => 'Returns void',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/errorfunc/functions/set-error-handler.xml',
    ],
    [
        'text' => 'Error handling: which value ensures every possible error is reported, equivalent to E_ALL?',
        'answers' => [
            'A' => '-1',
            'B' => '0',
            'C' => 'E_ALL & ~E_NOTICE',
            'D' => 'E_STRICT',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/errorfunc/functions/error-reporting.xml',
    ],
    [
        'text' => 'Error handling: when calling trigger_error() without specifying error_level, which level is used by default?',
        'answers' => [
            'A' => 'E_USER_WARNING',
            'B' => 'E_USER_NOTICE',
            'C' => 'E_USER_DEPRECATED',
            'D' => 'E_USER_ERROR',
        ],
        'correctAnswers' => [
            0 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/reference/errorfunc/functions/trigger-error.xml',
    ],
    [
        'text' => 'Error handling: after an uncaught exception is handled by set_exception_handler(), what happens next?',
        'answers' => [
            'A' => 'Execution continues after the callback returns',
            'B' => 'Execution will stop after the callback is called',
            'C' => 'Only the next registered handler is attempted',
            'D' => 'The exception is rethrown automatically',
        ],
        'correctAnswers' => [
            0 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/reference/errorfunc/functions/set-exception-handler.xml',
    ],
    [
        'text' => 'Error handling: what is restore_error_handler() used for?',
        'answers' => [
            'A' => 'Used after changing the error handler function using set_error_handler, to revert to the previous error handler',
            'B' => 'It clears all errors from the error_get_last() buffer',
            'C' => 'It disables error_reporting until the next request',
            'D' => 'It converts all warnings into exceptions',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/errorfunc/functions/restore-error-handler.xml',
    ],
    [
        'text' => 'OOP: Which visibility modifiers are allowed for abstract methods in a class?',
        'answers' => [
            'A' => 'public',
            'B' => 'protected',
            'C' => 'private',
            'D' => 'final',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/abstract.xml',
    ],
    [
        'text' => 'Traits: What is the correct order of precedence for methods with the same name?',
        'answers' => [
            'A' => 'Current Class overrides Trait methods',
            'B' => 'Trait methods override Current Class',
            'C' => 'Inherited methods override Trait methods',
            'D' => 'Trait methods override Inherited methods',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/traits.xml',
    ],
    [
        'text' => 'Traits: In PHP 8.3.0+, how do static properties in traits behave in inheritance hierarchies?',
        'answers' => [
            'A' => 'Child class gets a distinct static property from parent',
            'B' => 'Static property is shared across entire inheritance hierarchy',
            'C' => 'Static properties cannot be defined in traits',
            'D' => 'Static properties in traits are automatically final',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/traits.xml',
    ],
    [
        'text' => 'Interfaces: Starting from which PHP version can interface constants be overridden by implementing classes?',
        'answers' => [
            'A' => 'PHP 8.1.0',
            'B' => 'PHP 8.0.0',
            'C' => 'PHP 7.4.0',
            'D' => 'Interface constants can never be overridden',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/interfaces.xml',
    ],
    [
        'text' => 'OOP: What is the required visibility for all magic methods EXCEPT __construct(), __destruct(), and __clone()?',
        'answers' => [
            'A' => 'public',
            'B' => 'protected',
            'C' => 'private',
            'D' => 'Any visibility is allowed',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/magic.xml',
    ],
    [
        'text' => 'OOP: What does the __sleep() magic method return?',
        'answers' => [
            'A' => 'An array of property names to serialize',
            'B' => 'A boolean indicating success',
            'C' => 'The serialized string representation',
            'D' => 'void',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/magic.xml',
    ],
    [
        'text' => 'Namespaces: What are the valid name resolution types for classes, functions, and constants?',
        'answers' => [
            'A' => 'Unqualified name (e.g., foo)',
            'B' => 'Qualified name (e.g., subnamespace\\foo)',
            'C' => 'Fully qualified name (e.g., \\Foo\\Bar)',
            'D' => 'Relative name (e.g., namespace\\foo)',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/language/namespaces.xml',
    ],
    [
        'text' => 'Namespaces: Which statements correctly describe name resolution fallback behavior?',
        'answers' => [
            'A' => 'Functions fall back to global namespace if not found in current namespace',
            'B' => 'Constants fall back to global namespace if not found in current namespace',
            'C' => 'Classes fall back to global namespace if not found in current namespace',
            'D' => 'Interfaces fall back to global namespace if not found in current namespace',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/language/namespaces.xml',
    ],
    [
        'text' => 'Exceptions: In PHP 8.0.0+, which statements about throw and catch are correct?',
        'answers' => [
            'A' => 'throw is now an expression and can be used in any expression context',
            'B' => 'The variable in catch blocks is now optional',
            'C' => 'throw can only be used as a statement',
            'D' => 'catch blocks must always have a variable',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/language/exceptions.xml',
    ],
    [
        'text' => 'Exceptions: What interface must a thrown object implement?',
        'answers' => [
            'A' => 'Throwable',
            'B' => 'Exception',
            'C' => 'Error',
            'D' => 'Stringable',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/exceptions.xml',
    ],
    [
        'text' => 'Exceptions: What happens when both try and finally blocks throw exceptions?',
        'answers' => [
            'A' => 'The finally block\'s exception propagates',
            'B' => 'The try block\'s exception propagates',
            'C' => 'Both exceptions are thrown simultaneously',
            'D' => 'The try block\'s exception becomes the previous exception of the finally block\'s exception',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/language/exceptions.xml',
    ],
    [
        'text' => 'Exceptions: When a finally block contains a return statement, what is the behavior?',
        'answers' => [
            'A' => 'The finally block\'s return value is used',
            'B' => 'The try block\'s return value is used',
            'C' => 'A fatal error occurs',
            'D' => 'The finally block executes before the return value is returned',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/language/exceptions.xml',
    ],
    [
        'text' => 'Closures: Which Closure method temporarily binds a closure to an object and calls it immediately?',
        'answers' => [
            'A' => 'Closure::call()',
            'B' => 'Closure::bind()',
            'C' => 'Closure::bindTo()',
            'D' => 'Closure::invoke()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/predefined/closure/call.xml',
    ],
    [
        'text' => 'Closures: What can static closures NOT have?',
        'answers' => [
            'A' => 'Any bound object',
            'B' => 'Access to static variables',
            'C' => 'Parameters',
            'D' => 'Return types',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/predefined/closure/bindto.xml',
    ],
    [
        'text' => 'SPL: Which SPL exception classes are children of LogicException?',
        'answers' => [
            'A' => 'BadFunctionCallException',
            'B' => 'DomainException',
            'C' => 'InvalidArgumentException',
            'D' => 'OutOfBoundsException',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/logicexception.xml',
    ],
    [
        'text' => 'SPL: Which SPL exception classes are children of RuntimeException?',
        'answers' => [
            'A' => 'OutOfBoundsException',
            'B' => 'OverflowException',
            'C' => 'UnexpectedValueException',
            'D' => 'InvalidArgumentException',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/runtimeexception.xml',
    ],
    [
        'text' => 'SPL: What is the purpose of LimitIterator?',
        'answers' => [
            'A' => 'Limits iteration to a specific range of elements',
            'B' => 'Limits the memory usage during iteration',
            'C' => 'Limits the execution time of iteration',
            'D' => 'Limits the number of rewinds allowed',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/limititerator.xml',
    ],
    [
        'text' => 'SPL: Which data structure implements FIFO (First In First Out) behavior?',
        'answers' => [
            'A' => 'SplQueue',
            'B' => 'SplStack',
            'C' => 'SplHeap',
            'D' => 'SplPriorityQueue',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/splqueue.xml',
    ],
    [
        'text' => 'SPL: Which iterator allows iteration to continue infinitely?',
        'answers' => [
            'A' => 'InfiniteIterator',
            'B' => 'NoRewindIterator',
            'C' => 'CachingIterator',
            'D' => 'EmptyIterator',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/infiniteiterator.xml',
    ],
    [
        'text' => 'Traits: From which PHP version can traits define constants?',
        'answers' => [
            'A' => 'PHP 8.2.0',
            'B' => 'PHP 8.1.0',
            'C' => 'PHP 8.0.0',
            'D' => 'PHP 7.4.0',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/traits.xml',
    ],
    [
        'text' => 'Traits: Starting from PHP 8.0.0, which visibility modifiers are allowed for abstract methods in traits?',
        'answers' => [
            'A' => 'public',
            'B' => 'protected',
            'C' => 'private',
            'D' => 'final',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/traits.xml',
    ],
    [
        'text' => 'OOP Visibility: In asymmetric visibility (PHP 8.4.0+), which syntax correctly declares a property with public read and private write access?',
        'answers' => [
            'A' => 'public private(set) string $title',
            'B' => 'private(set) string $title',
            'C' => 'public(get) private(set) string $title',
            'D' => 'string public private(set) $title',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/visibility.xml',
    ],
    [
        'text' => 'OOP Visibility: Which statements about asymmetric visibility are correct?',
        'answers' => [
            'A' => 'Only typed properties can have asymmetric visibility',
            'B' => 'Set visibility must be same or more restrictive than get visibility',
            'C' => 'Untyped properties can have asymmetric visibility',
            'D' => 'Set visibility can be wider than get visibility',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/visibility.xml',
    ],
    [
        'text' => 'OOP Variance: What is covariance in the context of method overriding?',
        'answers' => [
            'A' => 'Child method can return a more specific type than parent',
            'B' => 'Child method can accept a less specific parameter type than parent',
            'C' => 'Child method must return the exact same type as parent',
            'D' => 'Child method can widen parameter types',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/variance.xml',
    ],
    [
        'text' => 'OOP Variance: What is contravariance in the context of method overriding?',
        'answers' => [
            'A' => 'Child method can accept a less specific parameter type than parent',
            'B' => 'Child method can return a more specific type than parent',
            'C' => 'Child method must accept the exact same parameter types as parent',
            'D' => 'Child method can narrow return types',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/variance.xml',
    ],
    [
        'text' => 'Interfaces: From which PHP version can interfaces declare properties?',
        'answers' => [
            'A' => 'PHP 8.4.0',
            'B' => 'PHP 8.3.0',
            'C' => 'PHP 8.2.0',
            'D' => 'PHP 8.1.0',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/interfaces.xml',
    ],
    [
        'text' => 'Interfaces: Which property declarations can satisfy an interface property requirement with { get; } hook?',
        'answers' => [
            'A' => 'A public property',
            'B' => 'A readonly property',
            'C' => 'A virtual property with get hook',
            'D' => 'A property with set hook only',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/interfaces.xml',
    ],
    [
        'text' => 'OOP: When an object implements __toString() in PHP 8.0.0+, which interface does it implicitly implement?',
        'answers' => [
            'A' => 'Stringable',
            'B' => 'Serializable',
            'C' => 'Throwable',
            'D' => 'JsonSerializable',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/magic.xml',
    ],
    [
        'text' => 'OOP: Which magic method is called when var_export() is used on an object?',
        'answers' => [
            'A' => '__set_state()',
            'B' => '__toString()',
            'C' => '__serialize()',
            'D' => '__debugInfo()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/magic.xml',
    ],
    [
        'text' => 'OOP: What is the required signature for __set_state()?',
        'answers' => [
            'A' => 'static object __set_state(array $properties)',
            'B' => 'public function __set_state(array $properties): object',
            'C' => 'public static function __set_state(array $properties): self',
            'D' => 'function __set_state(array $properties)',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/magic.xml',
    ],
    [
        'text' => 'Namespaces: Which namespace names are reserved for internal PHP use?',
        'answers' => [
            'A' => 'PHP',
            'B' => 'Compound names starting with PHP\\',
            'C' => 'PECL',
            'D' => 'Pear',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/language/namespaces.xml',
    ],
    [
        'text' => 'Namespaces: What does the __NAMESPACE__ magic constant contain when used in the global namespace?',
        'answers' => [
            'A' => 'An empty string',
            'B' => 'The string "global"',
            'C' => 'NULL',
            'D' => 'The string "\\\\"',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/namespaces.xml',
    ],
    [
        'text' => 'Error Handling: What is the default error level used by trigger_error() when no level is specified?',
        'answers' => [
            'A' => 'E_USER_NOTICE',
            'B' => 'E_USER_WARNING',
            'C' => 'E_USER_ERROR',
            'D' => 'E_USER_DEPRECATED',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/errorfunc/functions/trigger-error.xml',
    ],
    [
        'text' => 'Arrays: What does array_map(null, $a, $b, $c) do?',
        'answers' => [
            'A' => 'Zips the arrays together',
            'B' => 'Returns an empty array',
            'C' => 'Filters out null values',
            'D' => 'Returns the first array only',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/array/functions/array-map.xml',
    ],
    [
        'text' => 'OOP: Which statements about readonly properties are correct?',
        'answers' => [
            'A' => 'Readonly static properties are not supported',
            'B' => 'Readonly properties cannot declare default values',
            'C' => 'Readonly properties can be unset after initialization',
            'D' => 'Readonly properties must have a type declaration',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/properties.xml',
    ],
    [
        'text' => 'OOP: From which PHP version can a class be declared as readonly?',
        'answers' => [
            'A' => 'PHP 8.2.0',
            'B' => 'PHP 8.1.0',
            'C' => 'PHP 8.0.0',
            'D' => 'PHP 7.4.0',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/basic.xml',
    ],
    [
        'text' => 'Traits: From which PHP version can the final modifier be applied to trait methods using the as keyword?',
        'answers' => [
            'A' => 'PHP 8.3.0',
            'B' => 'PHP 8.2.0',
            'C' => 'PHP 8.1.0',
            'D' => 'PHP 8.0.0',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/traits.xml',
    ],
    [
        'text' => 'Closures: Which method creates a Closure from any callable in PHP 7.1+?',
        'answers' => [
            'A' => 'Closure::fromCallable()',
            'B' => 'Closure::toCallable()',
            'C' => 'Closure::create()',
            'D' => 'callable_to_closure()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/predefined/closure/fromcallable.xml',
    ],
    [
        'text' => 'OOP: What happens if a class has at least one abstract method but is not declared abstract?',
        'answers' => [
            'A' => 'A fatal error occurs',
            'B' => 'The method is silently converted to concrete',
            'C' => 'A warning is issued',
            'D' => 'The class becomes implicitly abstract',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/abstract.xml',
    ],
    [
        'text' => 'OOP: Which properties of the Exception class are protected?',
        'answers' => [
            'A' => '$message',
            'B' => '$code',
            'C' => '$file',
            'D' => '$line',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/language/exceptions.xml',
    ],
    [
        'text' => 'OOP: Which properties of the Exception class are private?',
        'answers' => [
            'A' => '$string',
            'B' => '$trace',
            'C' => '$previous',
            'D' => '$message',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/exceptions.xml',
    ],
    [
        'text' => 'Exceptions: What happens if you try to clone an Exception object?',
        'answers' => [
            'A' => 'A fatal error occurs because __clone() is final private',
            'B' => 'The exception is cloned successfully',
            'C' => 'Only public properties are cloned',
            'D' => 'A warning is issued but cloning succeeds',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/exceptions.xml',
    ],
    [
        'text' => 'Exceptions: When using multi-catch syntax (PHP 7.1+), how are multiple exception types separated?',
        'answers' => [
            'A' => 'Using the pipe symbol |',
            'B' => 'Using commas',
            'C' => 'Using the ampersand &',
            'D' => 'Using the word "or"',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/exceptions.xml',
    ],
    [
        'text' => 'HTTP: Which superglobal variables contain HTTP authentication credentials when using Basic authentication?',
        'answers' => [
            'A' => '$_SERVER[\'PHP_AUTH_USER\']',
            'B' => '$_SERVER[\'PHP_AUTH_PW\']',
            'C' => '$_SERVER[\'AUTH_TYPE\']',
            'D' => '$_SERVER[\'HTTP_AUTH\']',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/features/http-auth.xml',
    ],
    [
        'text' => 'HTTP: What HTTP status code must be sent to trigger browser authentication?',
        'answers' => [
            'A' => '401 Unauthorized',
            'B' => '403 Forbidden',
            'C' => '407 Proxy Authentication Required',
            'D' => '511 Network Authentication Required',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/features/http-auth.xml',
    ],
    [
        'text' => 'HTTP: When must setcookie() be called to successfully set a cookie?',
        'answers' => [
            'A' => 'Before any output is sent',
            'B' => 'After all output is sent',
            'C' => 'At any time during script execution',
            'D' => 'Inside a header() callback',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/features/cookies.xml',
    ],
    [
        'text' => 'Traits: What happens when you use the insteadof operator to resolve a method conflict?',
        'answers' => [
            'A' => 'It chooses which trait method to use when multiple traits provide the same method',
            'B' => 'It creates an alias for the method',
            'C' => 'It renames the conflicting method',
            'D' => 'It marks the method as deprecated',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/traits.xml',
    ],
    [
        'text' => 'Traits: When using the as operator on a trait method, which actions can it perform?',
        'answers' => [
            'A' => 'Create an alias for the method',
            'B' => 'Change the method visibility',
            'C' => 'Rename the original method',
            'D' => 'Delete the original method',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/traits.xml',
    ],
    [
        'text' => 'OOP: When can objects of the same type access each other\'s private and protected members?',
        'answers' => [
            'A' => 'Always, even if they are different instances',
            'B' => 'Only when they are the exact same instance',
            'C' => 'Never, private members are always inaccessible',
            'D' => 'Only in static contexts',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/visibility.xml',
    ],
    [
        'text' => 'SPL: What is the purpose of NoRewindIterator?',
        'answers' => [
            'A' => 'Prevents an iterator from being rewound',
            'B' => 'Automatically rewinds on each iteration',
            'C' => 'Skips the first element',
            'D' => 'Iterates in reverse order',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/norewinditerator.xml',
    ],
    [
        'text' => 'OOP: Which magic method is called by var_dump() to customize the debug output?',
        'answers' => [
            'A' => '__debugInfo()',
            'B' => '__toString()',
            'C' => '__dump()',
            'D' => '__debug()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/magic.xml',
    ],
    [
        'text' => 'OOP: Which statement about the __invoke() magic method is correct?',
        'answers' => [
            'A' => 'It is called when trying to call an object as a function',
            'B' => 'It is called when serializing an object',
            'C' => 'It is called when cloning an object',
            'D' => 'It is called when converting an object to string',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/magic.xml',
    ],
    [
        'text' => 'Namespaces: When are import (use) statements processed?',
        'answers' => [
            'A' => 'At compile-time',
            'B' => 'At runtime',
            'C' => 'During autoloading',
            'D' => 'When the class is first instantiated',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/namespaces.xml',
    ],
    [
        'text' => 'Namespaces: Which syntax correctly uses group use declarations to import multiple classes?',
        'answers' => [
            'A' => 'use some\\namespace\\{ClassA, ClassB, ClassC};',
            'B' => 'use some\\namespace\\[ClassA, ClassB, ClassC];',
            'C' => 'use some\\namespace\\(ClassA, ClassB, ClassC);',
            'D' => 'use some\\namespace\\ClassA, ClassB, ClassC;',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/namespaces.xml',
    ],
    [
        'text' => 'OOP: From which PHP version can constants in a class have visibility modifiers?',
        'answers' => [
            'A' => 'PHP 7.1.0',
            'B' => 'PHP 7.0.0',
            'C' => 'PHP 7.2.0',
            'D' => 'PHP 8.0.0',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/visibility.xml',
    ],
    [
        'text' => 'OOP: What happens when both __serialize() and __sleep() are defined in a class?',
        'answers' => [
            'A' => 'Only __serialize() is called',
            'B' => 'Only __sleep() is called',
            'C' => 'Both are called in sequence',
            'D' => 'A fatal error occurs',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/magic.xml',
    ],
    [
        'text' => 'Interfaces: Can an interface extend multiple other interfaces?',
        'answers' => [
            'A' => 'Yes, using comma separation',
            'B' => 'No, only single inheritance is allowed',
            'C' => 'Yes, but only up to two interfaces',
            'D' => 'Only if they are in the same namespace',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/interfaces.xml',
    ],
    [
        'text' => 'Abstract Classes: Can a child class add optional parameters to an abstract method defined in the parent?',
        'answers' => [
            'A' => 'Yes, with default values',
            'B' => 'No, signatures must match exactly',
            'C' => 'Yes, but only before PHP 8.0',
            'D' => 'Only if the parent method has no parameters',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/abstract.xml',
    ],
    [
        'text' => 'OOP Variance: How are properties treated in terms of variance by default?',
        'answers' => [
            'A' => 'Properties are invariant (cannot change type)',
            'B' => 'Properties are covariant',
            'C' => 'Properties are contravariant',
            'D' => 'Properties have no type constraints',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/variance.xml',
    ],
    [
        'text' => 'Namespaces: Where must the namespace declaration appear in a PHP file?',
        'answers' => [
            'A' => 'As the first statement (except for declare)',
            'B' => 'Anywhere in the file',
            'C' => 'After all use statements',
            'D' => 'Before the opening PHP tag',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/namespaces.xml',
    ],
    [
        'text' => 'Generators: Can a generator function return a value in addition to yielding values?',
        'answers' => [
            'A' => 'Yes, using the return statement',
            'B' => 'No, generators can only yield',
            'C' => 'Yes, but only in PHP 7.0+',
            'D' => 'Only if no values are yielded',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/generators.xml',
    ],
    [
        'text' => 'Generators: Which method retrieves the return value from a generator after iteration is complete?',
        'answers' => [
            'A' => 'Generator::getReturn()',
            'B' => 'Generator::getValue()',
            'C' => 'Generator::return()',
            'D' => 'Generator::fetchReturn()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/generators.xml',
    ],
    [
        'text' => 'Generators: Which statements about generator characteristics are correct?',
        'answers' => [
            'A' => 'Generators are forward-only and cannot be rewound after iteration starts',
            'B' => 'The same generator cannot be iterated multiple times',
            'C' => 'Generators can be rewound at any time',
            'D' => 'Generators use significantly less memory than building full arrays',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/language/generators.xml',
    ],
    [
        'text' => 'Attributes: Which PHP version introduced attributes (annotations)?',
        'answers' => [
            'A' => 'PHP 8.0.0',
            'B' => 'PHP 7.4.0',
            'C' => 'PHP 8.1.0',
            'D' => 'PHP 7.3.0',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/attributes.xml',
    ],
    [
        'text' => 'Attributes: Which Attribute constants define valid targets for attributes?',
        'answers' => [
            'A' => 'Attribute::TARGET_CLASS',
            'B' => 'Attribute::TARGET_METHOD',
            'C' => 'Attribute::TARGET_PROPERTY',
            'D' => 'Attribute::TARGET_VARIABLE',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/attributes.xml',
    ],
    [
        'text' => 'Attributes: How are repeatable attributes enabled?',
        'answers' => [
            'A' => 'Using the Attribute::IS_REPEATABLE flag',
            'B' => 'By declaring the attribute class as repeatable',
            'C' => 'Attributes are repeatable by default',
            'D' => 'Using the @Repeatable annotation',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/attributes.xml',
    ],
    [
        'text' => 'Attributes: When are attribute arguments resolved and validated?',
        'answers' => [
            'A' => 'When ReflectionAttribute::newInstance() is called',
            'B' => 'At compile time',
            'C' => 'When the attribute is declared',
            'D' => 'When reflection reads the attribute',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/attributes.xml',
    ],
    [
        'text' => 'Enumerations: Which PHP version introduced enumerations?',
        'answers' => [
            'A' => 'PHP 8.1.0',
            'B' => 'PHP 8.0.0',
            'C' => 'PHP 8.2.0',
            'D' => 'PHP 7.4.0',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/enumerations.xml',
    ],
    [
        'text' => 'Enumerations: Which scalar types can back enum cases?',
        'answers' => [
            'A' => 'int',
            'B' => 'string',
            'C' => 'float',
            'D' => 'bool',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/language/enumerations.xml',
    ],
    [
        'text' => 'Enumerations: Which interface do backed enums implement?',
        'answers' => [
            'A' => 'BackedEnum',
            'B' => 'UnitEnum',
            'C' => 'Enum',
            'D' => 'ScalarEnum',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/enumerations.xml',
    ],
    [
        'text' => 'Enumerations: What do the BackedEnum::from() and BackedEnum::tryFrom() methods do when the value is not found?',
        'answers' => [
            'A' => 'from() throws ValueError, tryFrom() returns null',
            'B' => 'Both throw ValueError',
            'C' => 'Both return null',
            'D' => 'from() returns null, tryFrom() throws ValueError',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/enumerations.xml',
    ],
    [
        'text' => 'Enumerations: Which statements about pure enum cases are correct?',
        'answers' => [
            'A' => 'Cases are singleton objects',
            'B' => 'Comparison with === returns true when both are the same case',
            'C' => 'Comparison operators like < and > work as expected',
            'D' => 'Each case has a read-only name property',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/language/enumerations.xml',
    ],
    [
        'text' => 'Enumerations: Which restrictions apply to enum declarations?',
        'answers' => [
            'A' => 'Enums cannot have constructors or destructors',
            'B' => 'Enums are final and cannot be extended',
            'C' => 'Enums cannot have static or object properties',
            'D' => 'Enums can be instantiated with new',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/enumerations.xml',
    ],
    [
        'text' => 'Fibers: Which PHP version introduced fibers?',
        'answers' => [
            'A' => 'PHP 8.1.0',
            'B' => 'PHP 8.0.0',
            'C' => 'PHP 8.2.0',
            'D' => 'PHP 7.4.0',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/fibers.xml',
    ],
    [
        'text' => 'Fibers: What is the key difference between Fibers and Generators?',
        'answers' => [
            'A' => 'Fibers have a full call stack and can suspend deeply nested functions',
            'B' => 'Generators have a full call stack and can suspend deeply nested functions',
            'C' => 'Fibers are stack-less like generators',
            'D' => 'Generators can suspend anywhere in the call stack',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/fibers.xml',
    ],
    [
        'text' => 'PHP 8.0: Which operator allows safe navigation through potentially null objects?',
        'answers' => [
            'A' => '?->',
            'B' => '??',
            'C' => '??=',
            'D' => '?..',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration80/new-features.xml',
    ],
    [
        'text' => 'PHP 8.0: Which statements about the match expression are correct?',
        'answers' => [
            'A' => 'Uses strict comparison (===)',
            'B' => 'Returns a value directly',
            'C' => 'Is exhaustive by default and throws UnhandledMatchError if no match',
            'D' => 'Uses loose comparison (==)',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration80/new-features.xml',
    ],
    [
        'text' => 'PHP 8.0: What syntax allows throw to be used as an expression?',
        'answers' => [
            'A' => '$user = $session->user ?? throw new Exception();',
            'B' => 'throw is still only a statement in PHP 8.0',
            'C' => 'throw($exception)',
            'D' => 'throw => new Exception()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration80/new-features.xml',
    ],
    [
        'text' => 'PHP 8.0: What is constructor property promotion?',
        'answers' => [
            'A' => 'Declaring and initializing properties directly in constructor parameters',
            'B' => 'Automatically generating getters and setters',
            'C' => 'Making all constructor parameters public',
            'D' => 'Promoting private properties to public',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration80/new-features.xml',
    ],
    [
        'text' => 'PHP 8.0: Which new types were introduced?',
        'answers' => [
            'A' => 'mixed',
            'B' => 'static',
            'C' => 'never',
            'D' => 'readonly',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration80/new-features.xml',
    ],
    [
        'text' => 'PHP 8.0: Which interface is automatically implemented when a class defines __toString()?',
        'answers' => [
            'A' => 'Stringable',
            'B' => 'ToString',
            'C' => 'Convertible',
            'D' => 'Serializable',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration80/new-features.xml',
    ],
    [
        'text' => 'PHP 8.1: What is the syntax for the new explicit octal literal prefix?',
        'answers' => [
            'A' => '0o14 or 0O14',
            'B' => '0x14',
            'C' => '0b14',
            'D' => '014 only',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration81/new-features.xml',
    ],
    [
        'text' => 'PHP 8.1: What is first-class callable syntax?',
        'answers' => [
            'A' => 'Using ... to create a closure from a callable: strlen(...)',
            'B' => 'Declaring callables as first parameter',
            'C' => 'Creating anonymous functions with fn',
            'D' => 'Using Closure::fromCallable()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration81/new-features.xml',
    ],
    [
        'text' => 'PHP 8.1: What are intersection types?',
        'answers' => [
            'A' => 'Types combined with & requiring all types: Countable&ArrayAccess',
            'B' => 'Types combined with | allowing any type',
            'C' => 'Types that can be combined with union types',
            'D' => 'Types that intersect with interfaces only',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration81/new-features.xml',
    ],
    [
        'text' => 'PHP 8.1: What does the never return type indicate?',
        'answers' => [
            'A' => 'The function exits, throws an exception, or does not terminate',
            'B' => 'The function never returns a value',
            'C' => 'The function cannot be called',
            'D' => 'The function always returns null',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration81/new-features.xml',
    ],
    [
        'text' => 'PHP 8.1: Which statements about readonly properties are correct?',
        'answers' => [
            'A' => 'Can only be initialized once',
            'B' => 'Must be typed',
            'C' => 'Cannot have default values except in constructor promotion',
            'D' => 'Can be untyped',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration81/new-features.xml',
    ],
    [
        'text' => 'PHP 8.1: From which PHP version can final be applied to class constants?',
        'answers' => [
            'A' => 'PHP 8.1.0',
            'B' => 'PHP 8.0.0',
            'C' => 'PHP 7.4.0',
            'D' => 'PHP 8.2.0',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration81/new-features.xml',
    ],
    [
        'text' => 'PHP 8.2: What are DNF types (Disjunctive Normal Form)?',
        'answers' => [
            'A' => 'Combination of intersection and union types: (A&B)|C',
            'B' => 'Types that can be null or not null',
            'C' => 'Types that allow dynamic values',
            'D' => 'Types that are never evaluated',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration82/new-features.xml',
    ],
    [
        'text' => 'PHP 8.2: Which standalone types were introduced?',
        'answers' => [
            'A' => 'null',
            'B' => 'false',
            'C' => 'true',
            'D' => 'void',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration82/new-features.xml',
    ],
    [
        'text' => 'PHP 8.2: What does the SensitiveParameter attribute do?',
        'answers' => [
            'A' => 'Redacts sensitive data in stack traces and error messages',
            'B' => 'Encrypts the parameter value',
            'C' => 'Marks the parameter as required',
            'D' => 'Validates the parameter format',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration82/new-features.xml',
    ],
    [
        'text' => 'PHP 8.2: What effect does declaring a class as readonly have?',
        'answers' => [
            'A' => 'All properties are automatically readonly',
            'B' => 'The class cannot be extended',
            'C' => 'All methods are automatically final',
            'D' => 'The class cannot be instantiated',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration82/new-features.xml',
    ],
    [
        'text' => 'Arrays: What does array_is_list() return for an empty array?',
        'answers' => [
            'A' => 'true',
            'B' => 'false',
            'C' => 'null',
            'D' => 'Throws an exception',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/array/functions/array-is-list.xml',
    ],
    [
        'text' => 'Arrays: Which arrays would array_is_list() consider as valid lists?',
        'answers' => [
            'A' => '[\'apple\', 2, 3]',
            'B' => '[0 => \'apple\', \'orange\']',
            'C' => '[1 => \'apple\', \'orange\']',
            'D' => '[0 => \'apple\', 2 => \'bar\']',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/reference/array/functions/array-is-list.xml',
    ],
    [
        'text' => 'Function Handling: What is a critical limitation of call_user_func() regarding parameters?',
        'answers' => [
            'A' => 'Parameters are not passed by reference',
            'B' => 'Maximum 10 parameters allowed',
            'C' => 'Only string callables are supported',
            'D' => 'Return values cannot be captured',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/funchand/functions/call-user-func.xml',
    ],
    [
        'text' => 'Function Handling: Which formats are valid for the callable parameter in call_user_func()?',
        'answers' => [
            'A' => 'String function name: \'strlen\'',
            'B' => 'Array with object: [$object, \'method\']',
            'C' => 'Array with class: [\'ClassName\', \'method\']',
            'D' => 'Integer values for built-in functions',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/reference/funchand/functions/call-user-func.xml',
    ],
    [
        'text' => 'Closures: What happens when you try to bind a static closure to an object?',
        'answers' => [
            'A' => 'It fails because static closures cannot have a bound object',
            'B' => 'The closure becomes non-static',
            'C' => 'It succeeds and the closure can access the object',
            'D' => 'It throws a fatal error',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/predefined/closure/bindto.xml',
    ],
    [
        'text' => 'Closures: What is the difference between Closure::bind() and Closure::bindTo()?',
        'answers' => [
            'A' => 'bind() is a static method, bindTo() is an instance method',
            'B' => 'bind() is faster than bindTo()',
            'C' => 'bindTo() can only bind to the same class',
            'D' => 'bind() cannot change the scope',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/predefined/closure/bind.xml',
    ],
    [
        'text' => 'SPL: Which constant in SplFileObject skips empty lines during iteration?',
        'answers' => [
            'A' => 'SplFileObject::SKIP_EMPTY',
            'B' => 'SplFileObject::IGNORE_EMPTY',
            'C' => 'SplFileObject::EXCLUDE_EMPTY',
            'D' => 'SplFileObject::FILTER_EMPTY',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/splfileobject.xml',
    ],
    [
        'text' => 'SPL: Which interfaces does SplFileObject implement?',
        'answers' => [
            'A' => 'RecursiveIterator',
            'B' => 'SeekableIterator',
            'C' => 'Countable',
            'D' => 'ArrayAccess',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/splfileobject.xml',
    ],
    [
        'text' => 'SPL: What is the key characteristic of SplFixedArray compared to standard PHP arrays?',
        'answers' => [
            'A' => 'Must be resized manually and only accepts integer indexes',
            'B' => 'Automatically grows when accessing out-of-bounds indexes',
            'C' => 'Supports string keys',
            'D' => 'Is always slower than standard arrays',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/splfixedarray.xml',
    ],
    [
        'text' => 'SPL: Which method must be used to change the size of a SplFixedArray?',
        'answers' => [
            'A' => 'setSize()',
            'B' => 'resize()',
            'C' => 'changeSize()',
            'D' => 'allocate()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/splfixedarray.xml',
    ],
    [
        'text' => 'HTTP: What does http_response_code() return in CLI environment when no code is set?',
        'answers' => [
            'A' => 'false',
            'B' => '200',
            'C' => 'null',
            'D' => '0',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/network/functions/http-response-code.xml',
    ],
    [
        'text' => 'HTTP: What is the default HTTP protocol version used by stream contexts in PHP 8.0.0+?',
        'answers' => [
            'A' => '1.1',
            'B' => '1.0',
            'C' => '2.0',
            'D' => '3.0',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/context/http.xml',
    ],
    [
        'text' => 'HTTP: Which HTTP context option determines whether to follow Location header redirects?',
        'answers' => [
            'A' => 'follow_location',
            'B' => 'allow_redirects',
            'C' => 'redirect',
            'D' => 'follow_redirects',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/context/http.xml',
    ],
    [
        'text' => 'Tokens: Which token constant represents the nullsafe operator ?-> introduced in PHP 8.0?',
        'answers' => [
            'A' => 'T_NULLSAFE_OBJECT_OPERATOR',
            'B' => 'T_SAFE_OBJECT_OPERATOR',
            'C' => 'T_OPTIONAL_OBJECT_OPERATOR',
            'D' => 'T_NULLABLE_OPERATOR',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/tokens.xml',
    ],
    [
        'text' => 'Tokens: Which token constants were introduced in PHP 8.1?',
        'answers' => [
            'A' => 'T_ENUM',
            'B' => 'T_READONLY',
            'C' => 'T_MATCH',
            'D' => 'T_ATTRIBUTE',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/tokens.xml',
    ],
    [
        'text' => 'Tokens: What critical characteristic should developers know about T_* token constant values?',
        'answers' => [
            'A' => 'Token values are not stable across PHP versions',
            'B' => 'Token values are always sequential',
            'C' => 'Token values can be used for comparison',
            'D' => 'Token values are guaranteed to be unique',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/tokens.xml',
    ],
    [
        'text' => 'PHP 8.1: Can array unpacking with the spread operator use string keys?',
        'answers' => [
            'A' => 'Yes, starting from PHP 8.1',
            'B' => 'No, only integer keys are allowed',
            'C' => 'Yes, in all PHP versions',
            'D' => 'Only with numeric string keys',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration81/new-features.xml',
    ],
    [
        'text' => 'PHP 8.1: Where can the new keyword be used starting from PHP 8.1?',
        'answers' => [
            'A' => 'In default parameter values and class property initializers',
            'B' => 'Only in method bodies',
            'C' => 'Only in constructor bodies',
            'D' => 'Only in static contexts',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration81/new-features.xml',
    ],
    [
        'text' => 'Generators: How can a generator function yield values by reference?',
        'answers' => [
            'A' => 'By prepending & to the function name: function &gen_reference()',
            'B' => 'By using yield &$value',
            'C' => 'By declaring the return type as &iterable',
            'D' => 'Generators cannot yield by reference',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/generators.xml',
    ],
    [
        'text' => 'Enumerations: Can enum cases be cloned?',
        'answers' => [
            'A' => 'No, enum cases cannot be cloned',
            'B' => 'Yes, using the clone keyword',
            'C' => 'Yes, but only backed enums',
            'D' => 'Yes, but only pure enums',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/enumerations.xml',
    ],
    [
        'text' => 'Enumerations: Can traits used in enums contain properties?',
        'answers' => [
            'A' => 'No, traits used in enums cannot contain properties',
            'B' => 'Yes, all trait properties are allowed',
            'C' => 'Yes, but only static properties',
            'D' => 'Yes, but only readonly properties',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/enumerations.xml',
    ],
    [
        'text' => 'PHP 8.0: Which class is thrown by match expressions when no arm matches?',
        'answers' => [
            'A' => 'UnhandledMatchError',
            'B' => 'MatchException',
            'C' => 'UnmatchedException',
            'D' => 'NoMatchError',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration80/new-features.xml',
    ],
    [
        'text' => 'PHP 8.0: What new collection type was introduced for weak references?',
        'answers' => [
            'A' => 'WeakMap',
            'B' => 'WeakArray',
            'C' => 'WeakCollection',
            'D' => 'WeakReference',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration80/new-features.xml',
    ],
];
