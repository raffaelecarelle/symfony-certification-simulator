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
];
