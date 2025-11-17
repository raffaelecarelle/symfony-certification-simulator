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
    [
        'text' => 'OOP: What type of copy does PHP perform when cloning an object with the clone keyword?',
        'answers' => [
            'A' => 'Shallow copy of all object properties',
            'B' => 'Deep copy of all object properties',
            'C' => 'References are preserved as references',
            'D' => 'Static properties are cloned',
        ],
        'correctAnswers' => [
            0 => 'A',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/cloning.xml',
    ],
    [
        'text' => 'OOP: When is the __clone() magic method called during object cloning?',
        'answers' => [
            'A' => 'After cloning is complete on the newly created object',
            'B' => 'Before cloning starts on the original object',
            'C' => 'During the cloning process',
            'D' => 'On both original and cloned objects',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/cloning.xml',
    ],
    [
        'text' => 'OOP: What happens if __sleep() returns a private property name from a parent class?',
        'answers' => [
            'A' => 'Causes an E_NOTICE error',
            'B' => 'Works correctly and serializes the property',
            'C' => 'Throws a fatal error',
            'D' => 'The property is silently ignored',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/serialization.xml',
    ],
    [
        'text' => 'OOP: Which modern serialization methods take precedence over __sleep() and __wakeup()?',
        'answers' => [
            'A' => '__serialize()',
            'B' => '__unserialize()',
            'C' => '__toString()',
            'D' => '__set_state()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/serialization.xml',
    ],
    [
        'text' => 'OOP: What must __serialize() return or else it will throw a TypeError?',
        'answers' => [
            'A' => 'An associative array',
            'B' => 'An array of property names',
            'C' => 'A string',
            'D' => 'void',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/serialization.xml',
    ],
    [
        'text' => 'OOP Late Static Bindings: What is the key difference between self:: and static::?',
        'answers' => [
            'A' => 'self:: resolves to the class where the method is defined',
            'B' => 'static:: resolves to the class that was called at runtime',
            'C' => 'self:: is faster than static::',
            'D' => 'static:: can only be used in static methods',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/late-static-bindings.xml',
    ],
    [
        'text' => 'OOP Late Static Bindings: Which types of calls are considered "forwarding calls" in LSB?',
        'answers' => [
            'A' => 'self::',
            'B' => 'parent::',
            'C' => 'static::',
            'D' => 'ClassName::method()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/late-static-bindings.xml',
    ],
    [
        'text' => 'OOP: When comparing objects with ==, which conditions must be met for them to be equal?',
        'answers' => [
            'A' => 'Same class',
            'B' => 'Same attributes with same values (recursive ==)',
            'C' => 'Same memory address',
            'D' => 'Implement Comparable interface',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/object-comparison.xml',
    ],
    [
        'text' => 'OOP: What does the === operator check when comparing objects?',
        'answers' => [
            'A' => 'Same instance of same class (reference comparison)',
            'B' => 'Same class and same property values',
            'C' => 'Same memory address only',
            'D' => 'Strict type equality',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/object-comparison.xml',
    ],
    [
        'text' => 'Type System: Which scalar type aliases are NOT supported and will be treated as class/interface names?',
        'answers' => [
            'A' => 'boolean',
            'B' => 'integer',
            'C' => 'double',
            'D' => 'float',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/types/declarations.xml',
    ],
    [
        'text' => 'Type System: When are pass-by-reference parameter types checked?',
        'answers' => [
            'A' => 'Only on function entry',
            'B' => 'On function entry and return',
            'C' => 'Every time the variable is modified',
            'D' => 'Never checked',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/types/declarations.xml',
    ],
    [
        'text' => 'Type System: From which PHP version was the void return type deprecated for functions returning by reference?',
        'answers' => [
            'A' => 'PHP 8.1',
            'B' => 'PHP 8.0',
            'C' => 'PHP 7.4',
            'D' => 'PHP 8.2',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/types/declarations.xml',
    ],
    [
        'text' => 'Type System: Can the callable type be used as a class property type declaration?',
        'answers' => [
            'A' => 'No, it cannot be used for property types',
            'B' => 'Yes, in all PHP versions',
            'C' => 'Yes, starting from PHP 8.0',
            'D' => 'Yes, but only for static properties',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/types/declarations.xml',
    ],
    [
        'text' => 'Type System: What does the mixed type alias represent?',
        'answers' => [
            'A' => 'object|resource|array|string|float|int|bool|null',
            'B' => 'string|int|float|bool',
            'C' => 'any type except null',
            'D' => 'object|array only',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/types/type-system.xml',
    ],
    [
        'text' => 'Type System: What does the iterable type alias represent?',
        'answers' => [
            'A' => 'Traversable|array',
            'B' => 'array|Iterator',
            'C' => 'ArrayAccess|Traversable',
            'D' => 'array only',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/types/type-system.xml',
    ],
    [
        'text' => 'SPL: Which interfaces does ArrayIterator implement?',
        'answers' => [
            'A' => 'SeekableIterator',
            'B' => 'ArrayAccess',
            'C' => 'Serializable',
            'D' => 'Countable',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/arrayiterator.xml',
    ],
    [
        'text' => 'SPL: What is the ArrayIterator::ARRAY_AS_PROPS flag used for?',
        'answers' => [
            'A' => 'Makes array entries accessible as object properties',
            'B' => 'Converts array to object',
            'C' => 'Makes properties accessible as array entries',
            'D' => 'Enables property validation',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/arrayiterator.xml',
    ],
    [
        'text' => 'SPL: What is the official recommendation about wrapping objects with ArrayObject?',
        'answers' => [
            'A' => 'Its usage with objects is discouraged as fundamentally flawed',
            'B' => 'It is recommended for all object wrapping',
            'C' => 'It is safe for all use cases',
            'D' => 'It is required for Serializable objects',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/arrayobject.xml',
    ],
    [
        'text' => 'SPL: What are the two purposes of SplObjectStorage?',
        'answers' => [
            'A' => 'Object set (ignoring data)',
            'B' => 'Map from objects to data',
            'C' => 'Array of arrays',
            'D' => 'String key-value store',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/splobjectstorage.xml',
    ],
    [
        'text' => 'SPL: What is the critical behavior note about SplPriorityQueue regarding elements with identical priority?',
        'answers' => [
            'A' => 'The order is undefined and may differ from insertion order',
            'B' => 'They are ordered by insertion time',
            'C' => 'They are ordered alphabetically',
            'D' => 'They cause an exception',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/splpriorityqueue.xml',
    ],
    [
        'text' => 'SPL: Can SplHeap be instantiated directly?',
        'answers' => [
            'A' => 'No, it is abstract and must be extended',
            'B' => 'Yes, it can be instantiated',
            'C' => 'Yes, but only in PHP 8.0+',
            'D' => 'Yes, but requires configuration',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/splheap.xml',
    ],
    [
        'text' => 'SPL: What iteration mode does SplStack use?',
        'answers' => [
            'A' => 'IT_MODE_LIFO (Last In, First Out)',
            'B' => 'IT_MODE_FIFO (First In, First Out)',
            'C' => 'IT_MODE_KEEP',
            'D' => 'IT_MODE_DELETE',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/splstack.xml',
    ],
    [
        'text' => 'SPL: Which RecursiveIteratorIterator modes are available?',
        'answers' => [
            'A' => 'LEAVES_ONLY (default, only leaf nodes)',
            'B' => 'SELF_FIRST (parent before children)',
            'C' => 'CHILD_FIRST (children before parent)',
            'D' => 'CATCH_GET_CHILD (catch exceptions during getChildren)',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/recursiveiteratoriterator.xml',
    ],
    [
        'text' => 'Arrays: What does array_filter() do when called without a callback function?',
        'answers' => [
            'A' => 'Removes "empty" entries as defined by empty() function',
            'B' => 'Returns the array unchanged',
            'C' => 'Throws an exception',
            'D' => 'Removes null values only',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/array/functions/array-filter.xml',
    ],
    [
        'text' => 'Arrays: Which array_filter() mode constants are available?',
        'answers' => [
            'A' => 'ARRAY_FILTER_USE_KEY (pass key only)',
            'B' => 'ARRAY_FILTER_USE_BOTH (pass both value and key)',
            'C' => 'ARRAY_FILTER_USE_VALUE (pass value only)',
            'D' => 'Default mode 0 (pass value only)',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/reference/array/functions/array-filter.xml',
    ],
    [
        'text' => 'Arrays: What does array_map(null, $a, $b, $c) do?',
        'answers' => [
            'A' => 'Performs a zip operation on the arrays',
            'B' => 'Returns an empty array',
            'C' => 'Throws an exception',
            'D' => 'Returns only the first array',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/array/functions/array-map.xml',
    ],
    [
        'text' => 'Arrays: What happens to array keys when array_map() is used with multiple arrays?',
        'answers' => [
            'A' => 'Returns sequential integer keys (0, 1, 2, ...)',
            'B' => 'Preserves keys from the first array',
            'C' => 'Preserves keys from all arrays',
            'D' => 'Throws an exception if keys conflict',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/array/functions/array-map.xml',
    ],
    [
        'text' => 'Arrays: What does array_reduce() return when given an empty array with no initial value?',
        'answers' => [
            'A' => 'null',
            'B' => 'false',
            'C' => '0',
            'D' => 'Throws an exception',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/array/functions/array-reduce.xml',
    ],
    [
        'text' => 'Arrays: Which data structures can array_column() work with?',
        'answers' => [
            'A' => 'Multi-dimensional arrays',
            'B' => 'Arrays of objects with public properties',
            'C' => 'Arrays of objects with protected/private properties (requires __get() and __isset())',
            'D' => 'Strings',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/reference/array/functions/array-column.xml',
    ],
    [
        'text' => 'Arrays: Which SORT flags can be used with array_multisort()?',
        'answers' => [
            'A' => 'SORT_REGULAR (normal comparison)',
            'B' => 'SORT_NUMERIC (numeric comparison)',
            'C' => 'SORT_STRING (string comparison)',
            'D' => 'SORT_NATURAL (natural ordering)',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/reference/array/functions/array-multisort.xml',
    ],
    [
        'text' => 'Arrays: What is important to know about the stability of array_multisort()?',
        'answers' => [
            'A' => 'It is an unstable sort - elements with equal values may not maintain original order',
            'B' => 'It is a stable sort - maintains original order for equal elements',
            'C' => 'Stability depends on the SORT flag used',
            'D' => 'Stability is only guaranteed for numeric arrays',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/array/functions/array-multisort.xml',
    ],
    [
        'text' => 'Arrays: What is the difference between array_diff() and array_diff_key()?',
        'answers' => [
            'A' => 'array_diff() compares values, array_diff_key() compares keys',
            'B' => 'array_diff() compares keys, array_diff_key() compares values',
            'C' => 'They are identical functions',
            'D' => 'array_diff_key() is case-sensitive',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/array/functions/array-diff.xml',
    ],
    [
        'text' => 'Errors: What is the relationship between Error and Exception classes?',
        'answers' => [
            'A' => 'Error does NOT inherit from Exception',
            'B' => 'Both implement Throwable',
            'C' => 'catch (Exception $e) will NOT catch Error objects',
            'D' => 'Error inherits from Exception',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/errors/php7.xml',
    ],
    [
        'text' => 'Errors: Which error types are descendants of Error class?',
        'answers' => [
            'A' => 'ArithmeticError',
            'B' => 'TypeError',
            'C' => 'ValueError',
            'D' => 'RuntimeException',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/errors/php7.xml',
    ],
    [
        'text' => 'Errors: Which error type extends ArithmeticError?',
        'answers' => [
            'A' => 'DivisionByZeroError',
            'B' => 'TypeError',
            'C' => 'ValueError',
            'D' => 'ParseError',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/errors/php7.xml',
    ],
    [
        'text' => 'Errors: Which error type extends TypeError?',
        'answers' => [
            'A' => 'ArgumentCountError',
            'B' => 'ValueError',
            'C' => 'ParseError',
            'D' => 'AssertionError',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/errors/php7.xml',
    ],
    [
        'text' => 'Errors: Which error type extends CompileError?',
        'answers' => [
            'A' => 'ParseError',
            'B' => 'TypeError',
            'C' => 'ValueError',
            'D' => 'ArithmeticError',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/errors/php7.xml',
    ],
    [
        'text' => 'Errors: What is the recommended error_reporting setting for production environments?',
        'answers' => [
            'A' => 'E_ALL & ~E_NOTICE & ~E_DEPRECATED or still E_ALL',
            'B' => 'E_ALL',
            'C' => '0 (disable all errors)',
            'D' => 'E_ERROR only',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/errors/basics.xml',
    ],
    [
        'text' => 'HTTP: Which HTTP status codes indicate successful responses?',
        'answers' => [
            'A' => '200 OK',
            'B' => '201 Created',
            'C' => '204 No Content',
            'D' => '304 Not Modified',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/features/http-auth.xml',
    ],
    [
        'text' => 'HTTP: Which HTTP status codes indicate redirection?',
        'answers' => [
            'A' => '301 Moved Permanently',
            'B' => '302 Found',
            'C' => '307 Temporary Redirect',
            'D' => '400 Bad Request',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/features/http-auth.xml',
    ],
    [
        'text' => 'HTTP: Which HTTP methods are idempotent?',
        'answers' => [
            'A' => 'GET',
            'B' => 'PUT',
            'C' => 'DELETE',
            'D' => 'POST',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/features/http-auth.xml',
    ],
    [
        'text' => 'HTTP: What is the purpose of the HEAD method?',
        'answers' => [
            'A' => 'Retrieve headers like GET but without response body',
            'B' => 'Submit form data',
            'C' => 'Delete a resource',
            'D' => 'Create a new resource',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/features/http-auth.xml',
    ],
    [
        'text' => 'HTTP: What do Cache-Control: no-cache and no-store directives mean?',
        'answers' => [
            'A' => 'no-cache means must revalidate before using cached response',
            'B' => 'no-store means do not cache at all',
            'C' => 'no-cache means do not cache at all',
            'D' => 'no-store means revalidate before use',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/features/cookies.xml',
    ],
    [
        'text' => 'OOP Variance: When is a type considered MORE SPECIFIC in the type system?',
        'answers' => [
            'A' => 'A type is removed from a union type',
            'B' => 'A type is added to an intersection type',
            'C' => 'A class type is changed to a child class type',
            'D' => 'A type is added to a union type',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/variance.xml',
    ],
    [
        'text' => 'Type System: Which PHP version introduced class property typing?',
        'answers' => [
            'A' => 'PHP 7.4',
            'B' => 'PHP 7.3',
            'C' => 'PHP 8.0',
            'D' => 'PHP 7.2',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/types/declarations.xml',
    ],
    [
        'text' => 'Type System: Which PHP version introduced class constant typing?',
        'answers' => [
            'A' => 'PHP 8.3',
            'B' => 'PHP 8.2',
            'C' => 'PHP 8.1',
            'D' => 'PHP 8.0',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/types/declarations.xml',
    ],
    [
        'text' => 'Traits: What happens when a class redefines a trait property with different characteristics?',
        'answers' => [
            'A' => 'Fatal error unless identical (same visibility, type, readonly, initial value)',
            'B' => 'Class property overrides trait property',
            'C' => 'Trait property takes precedence',
            'D' => 'Properties are merged',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/traits.xml',
    ],
    [
        'text' => 'Traits: Which statements about trait constants (PHP 8.2.0+) are correct?',
        'answers' => [
            'A' => 'Traits can define constants',
            'B' => 'Trait constants can have the final modifier',
            'C' => 'Class must have compatible constant or fatal error occurs',
            'D' => 'Trait constants can be private',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/traits.xml',
    ],
    [
        'text' => 'Traits: Which operators are used for trait conflict resolution and aliasing?',
        'answers' => [
            'A' => 'insteadof for selecting between conflicting methods',
            'B' => 'as for creating method aliases',
            'C' => 'as for changing method visibility',
            'D' => 'override for replacing methods',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/traits.xml',
    ],
    [
        'text' => 'Traits: What is true about the as operator when used on trait methods?',
        'answers' => [
            'A' => 'It creates an alias without renaming the original method',
            'B' => 'It renames the original method',
            'C' => 'It can change method visibility',
            'D' => 'It deletes the original method',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/traits.xml',
    ],
    [
        'text' => 'Interfaces: From PHP 8.0.0, why are interface parameter names important?',
        'answers' => [
            'A' => 'Due to named arguments support',
            'B' => 'Strongly recommended to use same names as interface',
            'C' => 'Parameter names must match exactly or fatal error',
            'D' => 'Parameter names are used for documentation only',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/interfaces.xml',
    ],
    [
        'text' => 'Interfaces: Which statements about interface properties (PHP 8.4.0+) are correct?',
        'answers' => [
            'A' => 'Must specify { get; }, { set; }, or { get; set; }',
            'B' => 'Readable interface property can be satisfied by readonly property',
            'C' => 'Settable interface property can be satisfied by readonly property',
            'D' => 'Apply only to public read/write access',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/interfaces.xml',
    ],
    [
        'text' => 'Abstract Classes: Which visibility modifiers can abstract properties have (PHP 8.4.0+)?',
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
        'text' => 'Abstract Classes: How can abstract properties (PHP 8.4.0+) be satisfied?',
        'answers' => [
            'A' => 'By standard property',
            'B' => 'By property with hooks',
            'C' => 'Protected abstract property can be satisfied by public property',
            'D' => 'Must be satisfied with exact visibility match only',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/abstract.xml',
    ],
    [
        'text' => 'Late Static Bindings: Which constant contains the name of the class where the method is defined?',
        'answers' => [
            'A' => '__CLASS__',
            'B' => '__NAMESPACE__',
            'C' => 'get_called_class()',
            'D' => 'static::class',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/late-static-bindings.xml',
    ],
    [
        'text' => 'Late Static Bindings: Which calls preserve the "forwarding" behavior for static:: resolution?',
        'answers' => [
            'A' => 'self::method()',
            'B' => 'parent::method()',
            'C' => 'static::method()',
            'D' => 'ClassName::method()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/late-static-bindings.xml',
    ],
    [
        'text' => 'Magic Methods: Which magic methods can have non-public visibility without triggering warnings?',
        'answers' => [
            'A' => '__construct()',
            'B' => '__destruct()',
            'C' => '__clone()',
            'D' => '__toString()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/magic.xml',
    ],
    [
        'text' => 'Magic Methods: Which statements about __toString() in PHP 8.0.0+ are correct?',
        'answers' => [
            'A' => 'Implicitly implements Stringable interface',
            'B' => 'Can throw exceptions',
            'C' => 'Must return string or Error is thrown',
            'D' => 'Cannot throw exceptions',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/magic.xml',
    ],
    [
        'text' => 'Magic Methods: What happens if magic method signatures do not match documented signatures in PHP 8.0.0+?',
        'answers' => [
            'A' => 'Fatal error',
            'B' => 'Warning only',
            'C' => 'Notice only',
            'D' => 'No diagnostic',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/magic.xml',
    ],
    [
        'text' => 'Magic Methods: Which serialization method pair takes precedence if both are defined?',
        'answers' => [
            'A' => '__serialize() and __unserialize()',
            'B' => '__sleep() and __wakeup()',
            'C' => 'They are used together',
            'D' => 'Fatal error if both defined',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/magic.xml',
    ],
    [
        'text' => 'Magic Methods: What must __serialize() return in PHP 7.4.0+?',
        'answers' => [
            'A' => 'An associative array',
            'B' => 'An array of property names',
            'C' => 'A string',
            'D' => 'Returning non-array causes TypeError',
        ],
        'correctAnswers' => [
            0 => 'A',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/magic.xml',
    ],
    [
        'text' => 'Anonymous Classes: Which features can anonymous classes use?',
        'answers' => [
            'A' => 'Constructor arguments',
            'B' => 'Extend classes',
            'C' => 'Implement interfaces',
            'D' => 'Use traits',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/anonymous.xml',
    ],
    [
        'text' => 'Anonymous Classes: What scope access does nesting an anonymous class inside an outer class provide?',
        'answers' => [
            'A' => 'No automatic access to private/protected members',
            'B' => 'Can extend outer class to access protected members',
            'C' => 'Must pass private properties through constructor',
            'D' => 'Full access to all outer class members',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/anonymous.xml',
    ],
    [
        'text' => 'Covariance and Contravariance: From which PHP version was full covariance and contravariance support added?',
        'answers' => [
            'A' => 'PHP 7.4.0',
            'B' => 'PHP 7.2.0',
            'C' => 'PHP 8.0.0',
            'D' => 'PHP 7.3.0',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/variance.xml',
    ],
    [
        'text' => 'Covariance and Contravariance: Which variance rules apply to properties (PHP 8.4.0+)?',
        'answers' => [
            'A' => 'Properties are invariant by default',
            'B' => 'Abstract/virtual properties with only get can be covariant',
            'C' => 'Abstract/virtual properties with only set can be contravariant',
            'D' => 'All properties are covariant',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/variance.xml',
    ],
    [
        'text' => 'Namespaces: Which statement about namespace name case sensitivity is correct?',
        'answers' => [
            'A' => 'Namespace names are case-insensitive',
            'B' => 'Namespace names are case-sensitive',
            'C' => 'Only on Unix systems are they case-sensitive',
            'D' => 'Depends on autoloader implementation',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/namespaces.xml',
    ],
    [
        'text' => 'Namespaces: What types of code are affected by namespaces?',
        'answers' => [
            'A' => 'Classes',
            'B' => 'Interfaces',
            'C' => 'Traits',
            'D' => 'Enums',
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
        'text' => 'Namespaces: What types of code are affected by namespaces regarding callables?',
        'answers' => [
            'A' => 'Functions',
            'B' => 'Constants',
            'C' => 'Variables',
            'D' => 'Superglobals',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/language/namespaces.xml',
    ],
    [
        'text' => 'Namespaces: Where must use statements appear in a file?',
        'answers' => [
            'A' => 'In outermost scope only',
            'B' => 'After namespace declaration',
            'C' => 'Cannot be inside functions or methods',
            'D' => 'Can appear anywhere',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/namespaces.xml',
    ],
    [
        'text' => 'Namespaces: What is the value of __NAMESPACE__ constant in global scope?',
        'answers' => [
            'A' => 'Empty string \'\'',
            'B' => 'NULL',
            'C' => 'The string "global"',
            'D' => 'False',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/namespaces.xml',
    ],
    [
        'text' => 'Namespaces: What does the namespace keyword do when used as prefix?',
        'answers' => [
            'A' => 'Explicitly requests element from current namespace',
            'B' => 'Equivalent to self for classes',
            'C' => 'Example: namespace\\func() calls CurrentNamespace\\func()',
            'D' => 'References the global namespace',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/namespaces.xml',
    ],
    [
        'text' => 'Exceptions: Which statements about the finally block are correct?',
        'answers' => [
            'A' => 'Always executes after try/catch blocks',
            'B' => 'Can be specified instead of catch blocks',
            'C' => 'Executes before return value is returned',
            'D' => 'Prevents exception propagation',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/exceptions.xml',
    ],
    [
        'text' => 'Exceptions: What is the complete signature of Exception::__construct()?',
        'answers' => [
            'A' => '__construct(string $message = "", int $code = 0, ?Throwable $previous = null)',
            'B' => '__construct(string $message, int $code = 0)',
            'C' => '__construct(string $message = "", ?Throwable $previous = null)',
            'D' => '__construct($message = "")',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/exceptions.xml',
    ],
    [
        'text' => 'Exceptions: Which Exception class methods are declared as final?',
        'answers' => [
            'A' => 'getMessage()',
            'B' => 'getCode()',
            'C' => 'getFile()',
            'D' => '__toString()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/exceptions.xml',
    ],
    [
        'text' => 'Closures: Which language construct is used to inherit parent scope variables?',
        'answers' => [
            'A' => 'use',
            'B' => 'global',
            'C' => 'inherit',
            'D' => 'import',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/functions.xml',
    ],
    [
        'text' => 'Closures: Which statements about variable inheritance with use are correct?',
        'answers' => [
            'A' => 'Inherited by value by default',
            'B' => 'Use & for inheritance by reference',
            'C' => 'Value captured when function defined, not called',
            'D' => 'Value captured when function called',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/functions.xml',
    ],
    [
        'text' => 'Closures: From PHP 7.1+, which cannot be included in use clause?',
        'answers' => [
            'A' => 'Superglobals',
            'B' => '$this',
            'C' => 'Same-named parameters',
            'D' => 'Static variables',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/functions.xml',
    ],
    [
        'text' => 'Arrow Functions (PHP 7.4+): Which statements about arrow functions are correct?',
        'answers' => [
            'A' => 'Variables from parent scope implicitly captured by-value',
            'B' => 'No use keyword needed',
            'C' => 'Body is single expression',
            'D' => 'Can contain multiple statements',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/functions.xml',
    ],
    [
        'text' => 'SPL Exceptions: Which are children of LogicException?',
        'answers' => [
            'A' => 'BadFunctionCallException',
            'B' => 'DomainException',
            'C' => 'InvalidArgumentException',
            'D' => 'LengthException',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/logicexception.xml',
    ],
    [
        'text' => 'SPL Exceptions: Which exception extends BadFunctionCallException?',
        'answers' => [
            'A' => 'BadMethodCallException',
            'B' => 'InvalidArgumentException',
            'C' => 'DomainException',
            'D' => 'OutOfRangeException',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/badfunctioncallexception.xml',
    ],
    [
        'text' => 'SPL Exceptions: Which are children of RuntimeException?',
        'answers' => [
            'A' => 'OutOfBoundsException',
            'B' => 'OverflowException',
            'C' => 'RangeException',
            'D' => 'UnderflowException',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/runtimeexception.xml',
    ],
    [
        'text' => 'SPL Data Structures: Which are valid heap implementations in SPL?',
        'answers' => [
            'A' => 'SplMaxHeap',
            'B' => 'SplMinHeap',
            'C' => 'SplHeap (abstract)',
            'D' => 'SplPriorityQueue',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/splheap.xml',
    ],
    [
        'text' => 'SPL Data Structures: What are the key differences between SplFixedArray and standard PHP arrays?',
        'answers' => [
            'A' => 'SplFixedArray must be resized manually',
            'B' => 'SplFixedArray only accepts integer indexes',
            'C' => 'SplFixedArray is contiguous (not hashtable)',
            'D' => 'SplFixedArray auto-grows like standard arrays',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/splfixedarray.xml',
    ],
    [
        'text' => 'SPL Iterators: Which core iterator interfaces exist in SPL?',
        'answers' => [
            'A' => 'OuterIterator',
            'B' => 'RecursiveIterator',
            'C' => 'SeekableIterator',
            'D' => 'UniqueIterator',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/iteratoriterator.xml',
    ],
    [
        'text' => 'SPL: Which methods does the RecursiveIterator interface add to Iterator?',
        'answers' => [
            'A' => 'hasChildren()',
            'B' => 'getChildren()',
            'C' => 'getDepth()',
            'D' => 'seek()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/recursiveiterator.xml',
    ],
    [
        'text' => 'OOP Overloading: Which statements about property overloading magic methods are correct?',
        'answers' => [
            'A' => 'All overloading methods must be declared as public',
            'B' => 'None of the arguments can be passed by reference',
            'C' => 'Property overloading only works in object context (not static)',
            'D' => 'Overloading methods can be declared as protected',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/overloading.xml',
    ],
    [
        'text' => 'OOP Overloading: What is the return value behavior of __set() magic method?',
        'answers' => [
            'A' => 'Return value is ignored due to assignment operator processing',
            'B' => 'Must return true on success, false on failure',
            'C' => 'Must return void',
            'D' => 'Return value becomes the assigned value',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/overloading.xml',
    ],
    [
        'text' => 'OOP Overloading: When does the __get() magic method get called?',
        'answers' => [
            'A' => 'Reading from inaccessible or non-existing properties',
            'B' => 'Writing to inaccessible properties',
            'C' => 'On chained assignments like $a = $obj->b = 8',
            'D' => 'Within itself (recursively)',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/overloading.xml',
    ],
    [
        'text' => 'OOP Overloading: Which magic methods are invoked when calling isset() or empty() on inaccessible properties?',
        'answers' => [
            'A' => '__isset()',
            'B' => '__get()',
            'C' => '__set()',
            'D' => '__unset()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/overloading.xml',
    ],
    [
        'text' => 'OOP Overloading: Which statements about __call() and __callStatic() are correct?',
        'answers' => [
            'A' => '__call() is invoked for inaccessible methods in object context',
            'B' => '__callStatic() is invoked for inaccessible methods in static context',
            'C' => 'Method name passed to these methods is case-sensitive',
            'D' => 'Method name is case-insensitive',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/overloading.xml',
    ],
    [
        'text' => 'OOP Final: From which PHP version can constants be declared as final?',
        'answers' => [
            'A' => 'PHP 8.1.0',
            'B' => 'PHP 8.0.0',
            'C' => 'PHP 8.2.0',
            'D' => 'PHP 7.4.0',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/final.xml',
    ],
    [
        'text' => 'OOP Final: Which statements about final private methods are correct in PHP 8.0.0+?',
        'answers' => [
            'A' => 'Private methods may NOT be declared final (except constructors)',
            'B' => 'Private constructors can be declared final',
            'C' => 'All private methods can be declared final',
            'D' => 'Final modifier is ignored for private methods',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/final.xml',
    ],
    [
        'text' => 'OOP Final: What happens when a class is declared final?',
        'answers' => [
            'A' => 'The class cannot be extended',
            'B' => 'All methods become implicitly final',
            'C' => 'All properties become readonly',
            'D' => 'The class cannot be instantiated',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/final.xml',
    ],
    [
        'text' => 'OOP Visibility: Which statements about asymmetric property visibility (PHP 8.4) are correct?',
        'answers' => [
            'A' => 'Only typed properties can have separate set visibility',
            'B' => 'Set visibility must be same or more restrictive than get visibility',
            'C' => 'private(set) properties are automatically final',
            'D' => 'Untyped properties can have asymmetric visibility',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/visibility.xml',
    ],
    [
        'text' => 'OOP Visibility: What syntax is used for asymmetric property visibility in PHP 8.4?',
        'answers' => [
            'A' => 'public private(set) string $title',
            'B' => 'public string $title { private set; }',
            'C' => 'public private( set ) string $title',
            'D' => 'If property is public, main visibility may be omitted: private(set)',
        ],
        'correctAnswers' => [
            0 => 'A',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/visibility.xml',
    ],
    [
        'text' => 'OOP Visibility: Can objects of the same type access each other\'s private and protected members?',
        'answers' => [
            'A' => 'Yes, even if they are different instances',
            'B' => 'No, only the same instance',
            'C' => 'Only protected members',
            'D' => 'Only in static contexts',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/visibility.xml',
    ],
    [
        'text' => 'OOP Visibility: From which PHP version can class constants have visibility modifiers?',
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
        'text' => 'OOP Static: What happens when trying to access a static property using the object operator -> ?',
        'answers' => [
            'A' => 'Triggers a Notice or Warning',
            'B' => 'Works correctly',
            'C' => 'Fatal error',
            'D' => 'Property is treated as non-static',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/static.xml',
    ],
    [
        'text' => 'OOP Static: Which statements about static methods are correct?',
        'answers' => [
            'A' => 'Static methods cannot use $this',
            'B' => 'Calling non-static methods statically throws Error in PHP 8.0+',
            'C' => 'Static methods can access static properties',
            'D' => 'Static methods can use $this in PHP 7.4',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/static.xml',
    ],
    [
        'text' => 'OOP Iterations: What properties are visible when iterating over an object with foreach from outside the class?',
        'answers' => [
            'A' => 'Only public properties',
            'B' => 'Public and protected properties',
            'C' => 'Public, protected, and private properties',
            'D' => 'All declared properties',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/iterations.xml',
    ],
    [
        'text' => 'OOP Iterations: What properties are visible when iterating over an object with foreach from inside the class?',
        'answers' => [
            'A' => 'Public, protected, AND private properties',
            'B' => 'Only public properties',
            'C' => 'Only public and protected properties',
            'D' => 'Depends on visibility modifiers',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/iterations.xml',
    ],
    [
        'text' => 'OOP Scope Resolution: What does the scope resolution operator :: allow access to?',
        'answers' => [
            'A' => 'Constants',
            'B' => 'Static properties',
            'C' => 'Static methods',
            'D' => 'Instance properties',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/oop5/paamayim-nekudotayim.xml',
    ],
    [
        'text' => 'Closures: Which statements about Closure::bindTo() are correct?',
        'answers' => [
            'A' => 'Duplicates closure with new bound object and class scope',
            'B' => 'Static closures cannot have bound object ($newThis must be null)',
            'C' => 'Returns new Closure or null on failure',
            'D' => 'Can pass internal class as $newScope',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/predefined/closure/bindto.xml',
    ],
    [
        'text' => 'Closures: What is the difference between Closure::bind() and Closure::bindTo()?',
        'answers' => [
            'A' => 'bind() is static, bindTo() is instance method',
            'B' => 'bind() is faster than bindTo()',
            'C' => 'bind() returns the same closure, bindTo() returns new one',
            'D' => 'They have the same signature except bind() is static',
        ],
        'correctAnswers' => [
            0 => 'A',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/language/predefined/closure/bind.xml',
    ],
    [
        'text' => 'Closures: What does Closure::call() do in PHP 7.0+?',
        'answers' => [
            'A' => 'Temporarily binds closure to object and calls it',
            'B' => 'More efficient than bindTo() for one-time calls',
            'C' => 'Permanently binds closure to object',
            'D' => 'Creates a copy of the closure',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/language/predefined/closure/call.xml',
    ],
    [
        'text' => 'Closures: What does Closure::fromCallable() do in PHP 7.1+?',
        'answers' => [
            'A' => 'Converts callable to closure using current scope',
            'B' => 'Checks if callable is valid in current scope',
            'C' => 'Throws TypeError if not callable',
            'D' => 'Returns null if not callable',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/language/predefined/closure/fromcallable.xml',
    ],
    [
        'text' => 'SPL: Which interfaces does ArrayObject implement?',
        'answers' => [
            'A' => 'IteratorAggregate',
            'B' => 'ArrayAccess',
            'C' => 'Serializable',
            'D' => 'Countable',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/arrayobject.xml',
    ],
    [
        'text' => 'SPL: Which ArrayObject constants control behavior?',
        'answers' => [
            'A' => 'STD_PROP_LIST - properties have normal functionality',
            'B' => 'ARRAY_AS_PROPS - entries accessible as properties',
            'C' => 'PROPS_AS_ARRAY - properties accessible as array',
            'D' => 'CASE_INSENSITIVE - case-insensitive keys',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/arrayobject.xml',
    ],
    [
        'text' => 'SPL: Which RecursiveIteratorIterator mode constants are available?',
        'answers' => [
            'A' => 'LEAVES_ONLY (default, only leaf nodes)',
            'B' => 'SELF_FIRST (parent before children)',
            'C' => 'CHILD_FIRST (children before parent)',
            'D' => 'CATCH_GET_CHILD (catch exceptions during getChildren)',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/recursiveiteratoriterator.xml',
    ],
    [
        'text' => 'SPL: What is FilterIterator?',
        'answers' => [
            'A' => 'Abstract class that must be extended',
            'B' => 'Must implement accept() method',
            'C' => 'Extends IteratorIterator',
            'D' => 'Concrete class ready to use',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/filteriterator.xml',
    ],
    [
        'text' => 'SPL: What is the callback signature for CallbackFilterIterator?',
        'answers' => [
            'A' => 'function($current, $key, $iterator): bool',
            'B' => 'function($value): bool',
            'C' => 'Callback accepts up to 3 arguments',
            'D' => 'function($iterator, $current): bool',
        ],
        'correctAnswers' => [
            0 => 'A',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/callbackfilteriterator.xml',
    ],
    [
        'text' => 'SPL: Which RegexIterator operation modes are available?',
        'answers' => [
            'A' => 'MATCH - only execute match (filter)',
            'B' => 'GET_MATCH - return first match',
            'C' => 'ALL_MATCHES - return all matches',
            'D' => 'SPLIT - return split values',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/regexiterator.xml',
    ],
    [
        'text' => 'SPL: Which RegexIterator flags are available?',
        'answers' => [
            'A' => 'USE_KEY - match entry key instead of value',
            'B' => 'INVERT_MATCH - invert return value of accept()',
            'C' => 'CASE_INSENSITIVE - case-insensitive matching',
            'D' => 'MULTILINE - multiline matching',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/reference/spl/regexiterator.xml',
    ],
    [
        'text' => 'PHP 8.0: Which new features were introduced?',
        'answers' => [
            'A' => 'Named arguments',
            'B' => 'Attributes (annotations)',
            'C' => 'Constructor property promotion',
            'D' => 'Union types',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration80/new-features.xml',
    ],
    [
        'text' => 'PHP 8.0: Which statements about the match expression are correct?',
        'answers' => [
            'A' => 'Uses strict comparison (===)',
            'B' => 'Returns a value directly',
            'C' => 'Is exhaustive and throws UnhandledMatchError if no match',
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
        'text' => 'PHP 8.0: What syntax allows getting class name from an object?',
        'answers' => [
            'A' => '$object::class',
            'B' => 'Same as get_class($object)',
            'C' => '$object->class',
            'D' => 'class($object)',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration80/new-features.xml',
    ],
    [
        'text' => 'PHP 8.0: Which new types were introduced?',
        'answers' => [
            'A' => 'mixed',
            'B' => 'static (return type)',
            'C' => 'never',
            'D' => 'Union types (int|string)',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration80/new-features.xml',
    ],
    [
        'text' => 'PHP 8.0: What is the syntax for non-capturing catch blocks?',
        'answers' => [
            'A' => 'catch (Exception) { }',
            'B' => 'catch (Exception $_) { }',
            'C' => 'catch { }',
            'D' => 'catch (Exception as _) { }',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration80/new-features.xml',
    ],
    [
        'text' => 'PHP 8.0: Which new classes were introduced?',
        'answers' => [
            'A' => 'WeakMap',
            'B' => 'ValueError',
            'C' => 'Stringable interface',
            'D' => 'UnhandledMatchError',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration80/new-features.xml',
    ],
    [
        'text' => 'PHP 8.1: What is the first-class callable syntax?',
        'answers' => [
            'A' => 'myFunc(...)',
            'B' => 'Same semantics as Closure::fromCallable()',
            'C' => '... is part of the syntax, not omission',
            'D' => 'Closure::wrap(myFunc)',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration81/new-features.xml',
    ],
    [
        'text' => 'PHP 8.1: What are intersection types?',
        'answers' => [
            'A' => 'Types combined with & requiring all types',
            'B' => 'Example: Countable&ArrayAccess',
            'C' => 'Cannot be mixed with union types',
            'D' => 'Can be mixed with union types',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration81/new-features.xml',
    ],
    [
        'text' => 'PHP 8.1: What does the never return type indicate?',
        'answers' => [
            'A' => 'Function exits, throws exception, or does not terminate',
            'B' => 'Function never returns a value',
            'C' => 'Function always throws',
            'D' => 'Function cannot be called',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration81/new-features.xml',
    ],
    [
        'text' => 'PHP 8.1: What is the new octal literal prefix?',
        'answers' => [
            'A' => '0o14 or 0O14',
            'B' => '0x14',
            'C' => '0b14',
            'D' => 'Only 014 (old style)',
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
        'text' => 'PHP 8.1: What new feature allows using new in initializers?',
        'answers' => [
            'A' => 'new can be used in default parameter values',
            'B' => 'new can be used in class property initializers',
            'C' => 'Example: public Logger $logger = new NullLogger()',
            'D' => 'new can only be used in method bodies',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration81/new-features.xml',
    ],
    [
        'text' => 'PHP 8.2: What are DNF types (Disjunctive Normal Form)?',
        'answers' => [
            'A' => 'Combination of intersection and union types',
            'B' => 'Example: (A&B)|C',
            'C' => 'Allows complex type expressions',
            'D' => 'DNF stands for Do Not Format',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
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
            'A' => 'Redacts sensitive data in stack traces',
            'B' => 'Redacts sensitive data in error messages',
            'C' => 'Encrypts parameter values',
            'D' => 'Validates parameter format',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration82/new-features.xml',
    ],
    [
        'text' => 'PHP 8.2: What is the effect of declaring a class as readonly?',
        'answers' => [
            'A' => 'All properties are automatically readonly',
            'B' => 'The class cannot be extended',
            'C' => 'All methods become final',
            'D' => 'Constructor promotion works with all properties',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration82/new-features.xml',
    ],
    [
        'text' => 'PHP 8.2: Can traits define constants starting from PHP 8.2?',
        'answers' => [
            'A' => 'Yes',
            'B' => 'No, only classes can define constants',
            'C' => 'Only public constants',
            'D' => 'Only private constants',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'php-doc/appendices/migration82/new-features.xml',
    ],
];
