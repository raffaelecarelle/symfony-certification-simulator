<?php

return [
    // PHP Core (Namespaces, OOP, Exceptions, Closures, SPL)
    [
        'text' => 'Namespaces: which syntax correctly imports a function from another namespace?',
        'answers' => [
            'A' => 'use function My\\Full\\functionName;',
            'B' => 'use My\\Full\\functionName();',
            'C' => 'import function My\\Full\\functionName;',
            'D' => 'use func My\\Full\\functionName;',
        ],
        'correctAnswers' => 'A',
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
        'correctAnswers' => 'A',
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
        'correctAnswers' => 'A',
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
        'correctAnswers' => 'A',
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
        'correctAnswers' => 'A',
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
        'correctAnswers' => 'A',
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
        'correctAnswers' => 'A',
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
        'correctAnswers' => 'A',
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
        'correctAnswers' => 'A',
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
        'correctAnswers' => 'A,B',
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
        'correctAnswers' => 'A',
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
        'correctAnswers' => 'A',
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
        'correctAnswers' => 'A',
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
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'php-doc/language/namespaces.xml',
    ],

    // PHP Abstract classes
    [
        'text' => 'Abstract classes: which statement is true about instantiation?',
        'answers' => [
            'A' => 'Classes defined as abstract cannot be instantiated',
            'B' => 'Abstract classes may be instantiated only via late static binding',
            'C' => 'Abstract classes can be instantiated if they have no abstract methods',
            'D' => 'Abstract classes can be instantiated using Reflection only',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'php-doc/language/oop5/abstract.xml',
    ],
    [
        'text' => 'Abstract classes: what must a child class do when inheriting from an abstract class?',
        'answers' => [
            'A' => "All methods marked abstract in the parent's class declaration must be defined by the child class",
            'B' => 'Abstract methods are optional if the child is final',
            'C' => 'Only public abstract methods must be defined by the child class',
            'D' => 'Abstract methods can be ignored if a trait provides them',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'php-doc/language/oop5/abstract.xml',
    ],

    // Closures advanced
    [
        'text' => 'Closures: which statement about static closures and binding is correct?',
        'answers' => [
            'A' => 'Static closures cannot have any bound object',
            'B' => 'Static closures may bind only to protected scope',
            'C' => 'Static closures can bind to any object using Closure::call',
            'D' => 'Static closures are implicitly bound to the declaring class',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'php-doc/language/predefined/closure/bindto.xml',
    ],

    // PHP extensions
    [
        'text' => 'Extensions: what does extension_loaded() return?',
        'answers' => [
            'A' => 'Returns true if the extension identified by name is loaded, false otherwise',
            'B' => 'Returns an array of INI entries for the extension',
            'C' => 'Returns the version string of the extension or false',
            'D' => 'Returns the path to the extension shared object',
        ],
        'correctAnswers' => 'A',
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
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'php-doc/reference/info/functions/get-loaded-extensions.xml',
    ],

    // PHP error handling
    [
        'text' => 'Error handling: when a custom error handler is set, what is the effect of error_reporting on whether the handler is called?',
        'answers' => [
            'A' => "error_reporting settings will have no effect and the error handler will be called regardless",
            'B' => 'The handler is called only if error_reporting includes the error level',
            'C' => 'The handler is called only when display_errors=1',
            'D' => 'The handler is never called if error_reporting=0',
        ],
        'correctAnswers' => 'A',
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
        'correctAnswers' => 'A',
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
        'correctAnswers' => 'A',
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
        'correctAnswers' => 'B',
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
        'correctAnswers' => 'B',
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
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'php-doc/reference/errorfunc/functions/restore-error-handler.xml',
    ],

    // Symfony — Console
    [
        'text' => 'Console: which constant indicates a successful command execution?',
        'answers' => [
            'A' => 'Command::SUCCESS',
            'B' => 'Command::OK',
            'C' => 'ExitCode::SUCCESS',
            'D' => 'STATUS_SUCCESS',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which PHP attribute is used to register a class as a console command?',
        'answers' => [
            'A' => 'AsCommand',
            'B' => 'ConsoleCommand',
            'C' => 'AsConsole',
            'D' => 'Command',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],

    // Symfony — Routing
    [
        'text' => 'Routing: which Route attribute option restricts the allowed HTTP methods?',
        'answers' => [
            'A' => 'methods',
            'B' => 'verbs',
            'C' => 'http',
            'D' => 'allow',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: in config/routes/attributes.yaml, which value must the type option have to load PHP attributes?',
        'answers' => [
            'A' => 'attribute',
            'B' => 'annotation',
            'C' => 'php',
            'D' => 'attributes',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => "Routing: in YAML route definitions, what is the required format for the 'controller' value?",
        'answers' => [
            'A' => 'controller_class::method_name',
            'B' => 'Controller#method',
            'C' => 'controller.class@method',
            'D' => 'service_id:method',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],

    // Symfony — HTTP Cache
    [
        'text' => 'HTTP Cache: which YAML value enables the built-in reverse proxy in the prod environment?',
        'answers' => [
            'A' => 'http_cache: true',
            'B' => 'framework.cache: true',
            'C' => 'cache.http: enabled',
            'D' => 'reverse_proxy: on',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],

    // Symfony — Dependency Injection / Tags
    [
        'text' => 'Dependency Injection: which service tag registers a service as a Twig extension?',
        'answers' => [
            'A' => 'twig.extension',
            'B' => 'twig.tag',
            'C' => 'twig.bundle',
            'D' => 'twig.service',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/service_container/tags.rst',
    ],
    [
        'text' => 'Dependency Injection: which attribute can you apply on an interface to autoconfigure a custom tag?',
        'answers' => [
            'A' => 'AutoconfigureTag',
            'B' => 'Autoconfigure',
            'C' => 'AsTagged',
            'D' => 'ServiceTag',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/service_container/tags.rst',
    ],

    // Symfony — Twig Configuration
    [
        'text' => "Twig: what is the default value of the 'default_path' option in TwigBundle configuration?",
        'answers' => [
            'A' => '%kernel.project_dir%/templates',
            'B' => '%kernel.root_dir%/views',
            'C' => 'templates/',
            'D' => '%kernel.cache_dir%/twig',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/reference/configuration/twig.rst',
    ],
    [
        'text' => "Twig: what is the default value of 'form_themes'?",
        'answers' => [
            'A' => "['form_div_layout.html.twig']",
            'B' => "['bootstrap_5_layout.html.twig']",
            'C' => "['form_table_layout.html.twig']",
            'D' => "['uikit_layout.html.twig']",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/reference/configuration/twig.rst',
    ],

    // Symfony — Controllers
    [
        'text' => 'Controllers: which helper method of AbstractController generates the URL for a given route?',
        'answers' => [
            'A' => 'generateUrl',
            'B' => 'createUrl',
            'C' => 'urlFor',
            'D' => 'buildRoute',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which method redirects the user to a route by its name?',
        'answers' => [
            'A' => 'redirectToRoute()',
            'B' => 'redirect()',
            'C' => 'forwardTo()',
            'D' => 'goToRoute()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],

    // Symfony Controllers - Advanced
    [
        'text' => 'Controllers: which methods of AbstractController are used to render templates?',
        'answers' => [
            'A' => 'render()',
            'B' => 'renderView()',
            'C' => 'renderBlock()',
            'D' => 'renderTemplate()',
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which AbstractController method creates a NotFoundHttpException?',
        'answers' => [
            'A' => 'createNotFoundException()',
            'B' => 'throw404()',
            'C' => 'notFound()',
            'D' => 'abort()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which parameters can be passed to the json() method of AbstractController?',
        'answers' => [
            'A' => '$data',
            'B' => '$status',
            'C' => '$headers',
            'D' => '$context',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: what is the default HTTP status code returned by the json() method?',
        'answers' => [
            'A' => '200',
            'B' => '201',
            'C' => '204',
            'D' => '202',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which ResponseHeaderBag constants are valid for the file() method disposition parameter?',
        'answers' => [
            'A' => 'ResponseHeaderBag::DISPOSITION_ATTACHMENT',
            'B' => 'ResponseHeaderBag::DISPOSITION_INLINE',
            'C' => 'ResponseHeaderBag::DISPOSITION_DOWNLOAD',
            'D' => 'ResponseHeaderBag::DISPOSITION_EMBEDDED',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Request methods access GET parameters?',
        'answers' => [
            'A' => '$request->query->get()',
            'B' => '$request->get()',
            'C' => '$request->getPayload()->get()',
            'D' => '$request->request->get()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Request property bag is used to access POST parameters in modern Symfony?',
        'answers' => [
            'A' => '$request->getPayload()',
            'B' => '$request->request',
            'C' => '$request->post',
            'D' => '$request->body',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Request method checks if a request is an AJAX request?',
        'answers' => [
            'A' => 'isXmlHttpRequest()',
            'B' => 'isAjax()',
            'C' => 'isAsync()',
            'D' => 'isXhr()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Request attribute contains the current route name?',
        'answers' => [
            'A' => '_route',
            'B' => 'route_name',
            'C' => '_route_name',
            'D' => 'current_route',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: what is the default status code for redirectToRoute() method?',
        'answers' => [
            'A' => '302',
            'B' => '301',
            'C' => '303',
            'D' => '307',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],

    // Routing - Advanced
    [
        'text' => 'Routing: which Route attribute options are used to define route matching conditions?',
        'answers' => [
            'A' => 'requirements',
            'B' => 'condition',
            'C' => 'host',
            'D' => 'schemes',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: what is the correct inline syntax to define a requirement for a numeric parameter?',
        'answers' => [
            'A' => '{id<\\d+>}',
            'B' => '{id:\\d+}',
            'C' => '{id|\\d+}',
            'D' => '{id[\\d+]}',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which inline syntax defines a default value for a route parameter?',
        'answers' => [
            'A' => '{page?1}',
            'B' => '{page=1}',
            'C' => '{page:1}',
            'D' => '{page|1}',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which Requirement enum constant matches only digits?',
        'answers' => [
            'A' => 'Requirement::DIGITS',
            'B' => 'Requirement::NUMERIC',
            'C' => 'Requirement::POSITIVE_INT',
            'D' => 'Requirement::INTEGER',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which Requirement enum constants are available for validating UUIDs?',
        'answers' => [
            'A' => 'Requirement::UID_BASE58',
            'B' => 'Requirement::UID_BASE32',
            'C' => 'Requirement::UID_RFC4122',
            'D' => 'Requirement::UID_HEX',
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: what is the pattern value of Requirement::ASCII_SLUG?',
        'answers' => [
            'A' => '[a-zA-Z0-9\\-]+',
            'B' => '[a-z0-9-]+',
            'C' => '[\\w-]+',
            'D' => '[a-zA-Z0-9_-]+',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which special parameters are recognized by the Symfony router?',
        'answers' => [
            'A' => '_controller',
            'B' => '_format',
            'C' => '_locale',
            'D' => '_fragment',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: what syntax forces a parameter to always be included in generated URLs?',
        'answers' => [
            'A' => '{!param}',
            'B' => '{param!}',
            'C' => '{param*}',
            'D' => '{+param}',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which objects are available in the condition expression?',
        'answers' => [
            'A' => 'context',
            'B' => 'request',
            'C' => 'params',
            'D' => 'route',
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which functions can be used in condition expressions?',
        'answers' => [
            'A' => 'env()',
            'B' => 'service()',
            'C' => 'parameter()',
            'D' => 'config()',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which console command shows route aliases?',
        'answers' => [
            'A' => 'debug:router --show-aliases',
            'B' => 'router:debug --aliases',
            'C' => 'debug:routes --aliases',
            'D' => 'router:list --show-aliases',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which UrlGeneratorInterface constants define URL reference types?',
        'answers' => [
            'A' => 'ABSOLUTE_URL',
            'B' => 'ABSOLUTE_PATH',
            'C' => 'RELATIVE_PATH',
            'D' => 'NETWORK_PATH',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which UriSigner method throws exceptions when verification fails?',
        'answers' => [
            'A' => 'verify()',
            'B' => 'check()',
            'C' => 'checkRequest()',
            'D' => 'validate()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],

    // Twig - Advanced
    [
        'text' => 'Twig: which functions generate URLs in templates?',
        'answers' => [
            'A' => 'path()',
            'B' => 'url()',
            'C' => 'absolute_url()',
            'D' => 'generate_url()',
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: what does the path() function return?',
        'answers' => [
            'A' => 'A relative URL',
            'B' => 'An absolute URL',
            'C' => 'A network path',
            'D' => 'A canonical URL',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which app global variable properties provide user information?',
        'answers' => [
            'A' => 'app.user',
            'B' => 'app.token',
            'C' => 'app.authenticated',
            'D' => 'app.session',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which app properties provide environment information?',
        'answers' => [
            'A' => 'app.environment',
            'B' => 'app.debug',
            'C' => 'app.locale',
            'D' => 'app.enabled_locales',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: what is the correct syntax to include parent block content?',
        'answers' => [
            'A' => '{{ parent() }}',
            'B' => '{% parent %}',
            'C' => '{{ super() }}',
            'D' => '{% super %}',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which syntax prevents passing context to an included template?',
        'answers' => [
            'A' => '{% include "template.html.twig" only %}',
            'B' => '{% include "template.html.twig" without_context %}',
            'C' => '{% include "template.html.twig" isolated %}',
            'D' => '{{ include("template.html.twig", {}, false) }}',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which filter disables output escaping?',
        'answers' => [
            'A' => 'raw',
            'B' => 'unescape',
            'C' => 'safe',
            'D' => 'noescape',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which form rendering functions are available?',
        'answers' => [
            'A' => 'form_start()',
            'B' => 'form_end()',
            'C' => 'form_widget()',
            'D' => 'form_row()',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which functions render form field-specific parts?',
        'answers' => [
            'A' => 'form_label()',
            'B' => 'form_errors()',
            'C' => 'form_help()',
            'D' => 'form_value()',
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: what is the correct order for Twig variable access resolution?',
        'answers' => [
            'A' => 'array key, property, method, getter, isser, hasser',
            'B' => 'property, method, array key, getter, isser, hasser',
            'C' => 'method, property, array key, getter, hasser, isser',
            'D' => 'array key, method, property, getter, hasser, isser',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],

    // Forms - Advanced
    [
        'text' => 'Forms: which FormBuilderInterface methods add fields to a form?',
        'answers' => [
            'A' => 'add()',
            'B' => 'addField()',
            'C' => 'field()',
            'D' => 'create()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which methods must be checked after form submission?',
        'answers' => [
            'A' => 'isSubmitted()',
            'B' => 'isValid()',
            'C' => 'isProcessed()',
            'D' => 'hasErrors()',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which FormEvents are triggered during form processing?',
        'answers' => [
            'A' => 'FormEvents::PRE_SET_DATA',
            'B' => 'FormEvents::POST_SET_DATA',
            'C' => 'FormEvents::PRE_SUBMIT',
            'D' => 'FormEvents::SUBMIT',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which FormEvent is triggered after form submission completes?',
        'answers' => [
            'A' => 'FormEvents::POST_SUBMIT',
            'B' => 'FormEvents::SUBMIT',
            'C' => 'FormEvents::AFTER_SUBMIT',
            'D' => 'FormEvents::COMPLETE',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which DataTransformerInterface methods must be implemented?',
        'answers' => [
            'A' => 'transform()',
            'B' => 'reverseTransform()',
            'C' => 'normalize()',
            'D' => 'denormalize()',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which methods add data transformers to form fields?',
        'answers' => [
            'A' => 'addModelTransformer()',
            'B' => 'addViewTransformer()',
            'C' => 'addTransformer()',
            'D' => 'addDataTransformer()',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which form options control field behavior?',
        'answers' => [
            'A' => 'required',
            'B' => 'mapped',
            'C' => 'empty_data',
            'D' => 'constraints',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which option prevents a form field from being mapped to the data object?',
        'answers' => [
            'A' => 'mapped',
            'B' => 'unmapped',
            'C' => 'ignore',
            'D' => 'skip_mapping',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which AbstractTypeExtension method specifies which form types to extend?',
        'answers' => [
            'A' => 'getExtendedTypes()',
            'B' => 'extendedTypes()',
            'C' => 'getTypes()',
            'D' => 'supports()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],

    // Validation - Advanced
    [
        'text' => 'Validation: which ConstraintViolation methods provide error information?',
        'answers' => [
            'A' => 'getMessage()',
            'B' => 'getMessageTemplate()',
            'C' => 'getParameters()',
            'D' => 'getPropertyPath()',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which constraint validates nested objects?',
        'answers' => [
            'A' => 'Valid',
            'B' => 'Cascade',
            'C' => 'Nested',
            'D' => 'Deep',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which Email constraint modes are available?',
        'answers' => [
            'A' => 'html5',
            'B' => 'strict',
            'C' => 'loose',
            'D' => 'basic',
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which validation group is applied by default?',
        'answers' => [
            'A' => 'Default',
            'B' => 'default',
            'C' => 'Basic',
            'D' => 'All',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which ViolationBuilder methods configure error details?',
        'answers' => [
            'A' => 'setParameter()',
            'B' => 'atPath()',
            'C' => 'setCode()',
            'D' => 'addViolation()',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which constraint checks if a value is exactly true?',
        'answers' => [
            'A' => 'IsTrue',
            'B' => 'True',
            'C' => 'EqualTrue',
            'D' => 'Boolean',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which Length constraint options define validation messages?',
        'answers' => [
            'A' => 'exactMessage',
            'B' => 'minMessage',
            'C' => 'maxMessage',
            'D' => 'lengthMessage',
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],

    // Dependency Injection - Advanced
    [
        'text' => 'Dependency Injection: which attributes configure service injection?',
        'answers' => [
            'A' => '#[Autowire(service: "id")]',
            'B' => '#[Autowire("%parameter%")]',
            'C' => '#[Autowire(expression: "expr")]',
            'D' => '#[AutowireCallable]',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which attribute injects a service locator for tagged services?',
        'answers' => [
            'A' => '#[TaggedLocator("tag")]',
            'B' => '#[ServiceLocator("tag")]',
            'C' => '#[TaggedIterator("tag")]',
            'D' => '#[LocateTagged("tag")]',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which attribute configures when a service is loaded?',
        'answers' => [
            'A' => '#[When(env: "dev")]',
            'B' => '#[WhenNot(env: "prod")]',
            'C' => '#[Environment("dev")]',
            'D' => '#[Exclude(env: "prod")]',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which YAML keys configure service behavior?',
        'answers' => [
            'A' => 'autowire',
            'B' => 'autoconfigure',
            'C' => 'public',
            'D' => 'shared',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which service tags register event handlers?',
        'answers' => [
            'A' => 'kernel.event_listener',
            'B' => 'kernel.event_subscriber',
            'C' => 'event.listener',
            'D' => 'event.subscriber',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which YAML key specifies service decoration?',
        'answers' => [
            'A' => 'decorates',
            'B' => 'decorate',
            'C' => 'decorator_of',
            'D' => 'wraps',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which YAML keys control service decoration behavior?',
        'answers' => [
            'A' => 'decoration_priority',
            'B' => 'decoration_inner_name',
            'C' => 'decoration_on_invalid',
            'D' => 'decoration_order',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which CompilerPassInterface method must be implemented?',
        'answers' => [
            'A' => 'process()',
            'B' => 'compile()',
            'C' => 'build()',
            'D' => 'configure()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],

    // Security - Advanced
    [
        'text' => 'Security: which UserInterface method returns unique user identification?',
        'answers' => [
            'A' => 'getUserIdentifier()',
            'B' => 'getUsername()',
            'C' => 'getId()',
            'D' => 'getIdentifier()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: which form_login options configure authentication endpoints?',
        'answers' => [
            'A' => 'login_path',
            'B' => 'check_path',
            'C' => 'success_path',
            'D' => 'failure_path',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: what are the default parameter names for form_login?',
        'answers' => [
            'A' => '_username',
            'B' => '_password',
            'C' => 'username',
            'D' => 'password',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: what is the default CSRF token ID for form_login?',
        'answers' => [
            'A' => 'authenticate',
            'B' => 'login',
            'C' => 'csrf_token',
            'D' => 'form_login',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: which special security attributes check authentication status?',
        'answers' => [
            'A' => 'IS_AUTHENTICATED',
            'B' => 'IS_AUTHENTICATED_FULLY',
            'C' => 'IS_AUTHENTICATED_REMEMBERED',
            'D' => 'IS_REMEMBERED',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: which attribute allows unauthenticated access?',
        'answers' => [
            'A' => 'PUBLIC_ACCESS',
            'B' => 'IS_ANONYMOUS',
            'C' => 'ALLOW_ALL',
            'D' => 'NO_AUTH',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: which Voter methods must be implemented?',
        'answers' => [
            'A' => 'supports()',
            'B' => 'voteOnAttribute()',
            'C' => 'vote()',
            'D' => 'canVote()',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: which security events occur during authentication?',
        'answers' => [
            'A' => 'CheckPassportEvent',
            'B' => 'AuthenticationTokenCreatedEvent',
            'C' => 'AuthenticationSuccessEvent',
            'D' => 'LoginSuccessEvent',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: which event is triggered only during interactive login?',
        'answers' => [
            'A' => 'InteractiveLoginEvent',
            'B' => 'LoginSuccessEvent',
            'C' => 'AuthenticationSuccessEvent',
            'D' => 'UserLoginEvent',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: which authenticator types are available in Symfony?',
        'answers' => [
            'A' => 'form_login',
            'B' => 'json_login',
            'C' => 'http_basic',
            'D' => 'login_link',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],

    // HTTP Cache - Advanced
    [
        'text' => 'HTTP Cache: which Response methods configure cache expiration?',
        'answers' => [
            'A' => 'setPublic()',
            'B' => 'setPrivate()',
            'C' => 'setMaxAge()',
            'D' => 'setSharedMaxAge()',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'HTTP Cache: which Response methods implement validation caching?',
        'answers' => [
            'A' => 'setETag()',
            'B' => 'setLastModified()',
            'C' => 'isNotModified()',
            'D' => 'setExpires()',
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'HTTP Cache: which Twig function renders Edge Side Includes?',
        'answers' => [
            'A' => 'render_esi()',
            'B' => 'esi()',
            'C' => 'render_hinclude()',
            'D' => 'include_esi()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],

    // Console - Advanced
    [
        'text' => 'Console: which InputArgument modes are available?',
        'answers' => [
            'A' => 'InputArgument::REQUIRED',
            'B' => 'InputArgument::OPTIONAL',
            'C' => 'InputArgument::IS_ARRAY',
            'D' => 'InputArgument::MULTIPLE',
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which InputOption value modes are available?',
        'answers' => [
            'A' => 'InputOption::VALUE_NONE',
            'B' => 'InputOption::VALUE_REQUIRED',
            'C' => 'InputOption::VALUE_OPTIONAL',
            'D' => 'InputOption::VALUE_IS_ARRAY',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which InputOption mode creates a negatable option?',
        'answers' => [
            'A' => 'InputOption::VALUE_NEGATABLE',
            'B' => 'InputOption::NEGATABLE',
            'C' => 'InputOption::VALUE_BOOLEAN',
            'D' => 'InputOption::TOGGLE',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which OutputInterface verbosity constants are defined?',
        'answers' => [
            'A' => 'VERBOSITY_QUIET',
            'B' => 'VERBOSITY_NORMAL',
            'C' => 'VERBOSITY_VERBOSE',
            'D' => 'VERBOSITY_DEBUG',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which ConsoleEvents are dispatched during command execution?',
        'answers' => [
            'A' => 'ConsoleEvents::COMMAND',
            'B' => 'ConsoleEvents::TERMINATE',
            'C' => 'ConsoleEvents::ERROR',
            'D' => 'ConsoleEvents::COMPLETE',
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which Command constants indicate execution result?',
        'answers' => [
            'A' => 'Command::SUCCESS',
            'B' => 'Command::FAILURE',
            'C' => 'Command::INVALID',
            'D' => 'Command::ERROR',
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],

    // MapQueryParameter - Advanced
    [
        'text' => 'MapQueryParameter: which types are supported by the attribute?',
        'answers' => [
            'A' => 'BackedEnum',
            'B' => 'array',
            'C' => 'bool',
            'D' => 'AbstractUid',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'MapQueryParameter: which option accepts PHP filter constants?',
        'answers' => [
            'A' => 'filter',
            'B' => 'validator',
            'C' => 'type',
            'D' => 'constraint',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],

    // MapQueryString - Advanced
    [
        'text' => 'MapQueryString: which options are available for validation?',
        'answers' => [
            'A' => 'validationGroups',
            'B' => 'validationFailedStatusCode',
            'C' => 'constraints',
            'D' => 'validate',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'MapQueryString: what is the default validationFailedStatusCode?',
        'answers' => [
            'A' => '404',
            'B' => '400',
            'C' => '422',
            'D' => '500',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],

    // MapRequestPayload - Advanced
    [
        'text' => 'MapRequestPayload: which options configure payload mapping?',
        'answers' => [
            'A' => 'acceptFormat',
            'B' => 'serializationContext',
            'C' => 'resolver',
            'D' => 'validationGroups',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'MapRequestPayload: what is the default validationFailedStatusCode?',
        'answers' => [
            'A' => '422',
            'B' => '400',
            'C' => '404',
            'D' => '500',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],

    // Symfony Architecture
    [
        'text' => 'Architecture: which directories are part of the default Symfony Flex structure?',
        'answers' => [
            'A' => 'bin/',
            'B' => 'config/',
            'C' => 'public/',
            'D' => 'templates/',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/setup.rst',
    ],
    [
        'text' => 'Architecture: which Kernel methods configure application behavior?',
        'answers' => [
            'A' => 'configureContainer()',
            'B' => 'configureRoutes()',
            'C' => 'configure()',
            'D' => 'build()',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/configuration.rst',
    ],
    [
        'text' => 'Architecture: which PSR standards does Symfony comply with?',
        'answers' => [
            'A' => 'PSR-4',
            'B' => 'PSR-7',
            'C' => 'PSR-11',
            'D' => 'PSR-15',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/best_practices.rst',
    ],

    // Advanced Routing Parameter Mapping
    [
        'text' => 'Routing: which syntax maps a route parameter to an entity property?',
        'answers' => [
            'A' => '{slug:post}',
            'B' => '{slug->post}',
            'C' => '{slug@post}',
            'D' => '{post:slug}',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which syntax maps nested entity properties?',
        'answers' => [
            'A' => '{authorName:author.name}',
            'B' => '{author.name:authorName}',
            'C' => '{authorName->author->name}',
            'D' => '{authorName@author.name}',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],

    // AsRoutingConditionService
    [
        'text' => 'Routing: which attribute registers a custom routing condition service?',
        'answers' => [
            'A' => '#[AsRoutingConditionService]',
            'B' => '#[RoutingCondition]',
            'C' => '#[RouteCondition]',
            'D' => '#[ConditionService]',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],

    // Template Attribute Advanced
    [
        'text' => 'Controllers: which Template attribute option specifies a block to render?',
        'answers' => [
            'A' => 'block',
            'B' => 'section',
            'C' => 'fragment',
            'D' => 'part',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],

    // IsGranted Attribute Advanced
    [
        'text' => 'Security: which IsGranted attribute options configure access denial?',
        'answers' => [
            'A' => 'message',
            'B' => 'statusCode',
            'C' => 'exceptionCode',
            'D' => 'redirectUrl',
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],

    // Password Hasher Methods
    [
        'text' => 'Security: which PasswordHasherInterface methods are available?',
        'answers' => [
            'A' => 'hashPassword()',
            'B' => 'isPasswordValid()',
            'C' => 'needsRehash()',
            'D' => 'verifyPassword()',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],

    // Autoconfigure Attribute
    [
        'text' => 'Dependency Injection: which Autoconfigure attribute options are available?',
        'answers' => [
            'A' => 'public',
            'B' => 'shared',
            'C' => 'lazy',
            'D' => 'autowire',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],

    // AsTaggedItem Attribute
    [
        'text' => 'Dependency Injection: which AsTaggedItem attribute option sets item priority?',
        'answers' => [
            'A' => 'priority',
            'B' => 'order',
            'C' => 'weight',
            'D' => 'index',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],

    // Constraint Validation Options
    [
        'text' => 'Validation: which Regex constraint option controls matching behavior?',
        'answers' => [
            'A' => 'match',
            'B' => 'matches',
            'C' => 'mustMatch',
            'D' => 'positive',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],

    // Choice Constraint Advanced
    [
        'text' => 'Validation: which Choice constraint options control multiple selections?',
        'answers' => [
            'A' => 'multiple',
            'B' => 'min',
            'C' => 'max',
            'D' => 'count',
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],

    // Response Cache Methods
    [
        'text' => 'HTTP Cache: which method sets an absolute cache expiration time?',
        'answers' => [
            'A' => 'setExpires()',
            'B' => 'setExpiresAt()',
            'C' => 'setExpiration()',
            'D' => 'expire()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],

    // Signed URIs Advanced
    [
        'text' => 'Routing: which query parameter stores URI expiration for signed URIs?',
        'answers' => [
            'A' => '_expiration',
            'B' => '_expires',
            'C' => '_expire_at',
            'D' => '_exp',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],

    // Form Theme
    [
        'text' => 'Forms: what is the default form theme in Symfony?',
        'answers' => [
            'A' => 'form_div_layout.html.twig',
            'B' => 'bootstrap_5_layout.html.twig',
            'C' => 'form_table_layout.html.twig',
            'D' => 'foundation_layout.html.twig',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],

    // Advanced Symfony Questions - Architecture
    [
        'text' => 'Architecture: which KernelEvents constant represents the event dispatched when a controller is about to be called?',
        'answers' => [
            'A' => 'KernelEvents::CONTROLLER',
            'B' => 'KernelEvents::CONTROLLER_ARGUMENTS',
            'C' => 'KernelEvents::REQUEST',
            'D' => 'KernelEvents::VIEW',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/event_dispatcher.rst',
    ],
    [
        'text' => 'Architecture: which methods does MicroKernelTrait require to be implemented in the Kernel class?',
        'answers' => [
            'A' => 'configureContainer()',
            'B' => 'configureRoutes()',
            'C' => 'registerBundles()',
            'D' => 'configureBundles()',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/configuration.rst',
    ],
    [
        'text' => 'Architecture: which request types are defined in HttpKernelInterface?',
        'answers' => [
            'A' => 'HttpKernelInterface::MAIN_REQUEST',
            'B' => 'HttpKernelInterface::SUB_REQUEST',
            'C' => 'HttpKernelInterface::MASTER_REQUEST',
            'D' => 'HttpKernelInterface::CHILD_REQUEST',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/event_dispatcher.rst',
    ],
    [
        'text' => 'Architecture: in which method should you register compiler passes in a bundle or kernel?',
        'answers' => [
            'A' => 'build()',
            'B' => 'boot()',
            'C' => 'register()',
            'D' => 'configure()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Architecture: which event is dispatched after kernel.response to perform cleanup tasks after response is sent?',
        'answers' => [
            'A' => 'KernelEvents::TERMINATE',
            'B' => 'KernelEvents::FINISH_REQUEST',
            'C' => 'KernelEvents::CLEANUP',
            'D' => 'KernelEvents::SHUTDOWN',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/event_dispatcher.rst',
    ],

    // Controllers - Advanced Value Resolvers
    [
        'text' => 'Controllers: which attribute injects the decorated service in a decorator class constructor?',
        'answers' => [
            'A' => '#[AutowireDecorated]',
            'B' => '#[Autowire(service: ".inner")]',
            'C' => '#[DecoratedService]',
            'D' => '#[InnerService]',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which MapQueryParameter filter option validates a regexp pattern?',
        'answers' => [
            'A' => 'FILTER_VALIDATE_REGEXP',
            'B' => 'FILTER_VALIDATE_REGEX',
            'C' => 'FILTER_REGEXP',
            'D' => 'FILTER_PATTERN',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which UploadedFile method is SAFE for determining file extension?',
        'answers' => [
            'A' => 'guessExtension()',
            'B' => 'getClientOriginalExtension()',
            'C' => 'getExtension()',
            'D' => 'getMimeExtension()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Request property bags contain form data?',
        'answers' => [
            'A' => '$request->request',
            'B' => '$request->getPayload()',
            'C' => '$request->query',
            'D' => '$request->post',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which AbstractController method creates and returns a RedirectResponse to a given route?',
        'answers' => [
            'A' => 'redirectToRoute()',
            'B' => 'redirect()',
            'C' => 'forward()',
            'D' => 'generateUrl()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],

    // Routing - Advanced Features
    [
        'text' => 'Routing: which inline syntax combines both requirement and default value for a route parameter?',
        'answers' => [
            'A' => '{page<\\d+>?1}',
            'B' => '{page?1<\\d+>}',
            'C' => '{page:\\d+:1}',
            'D' => '{page=1|\\d+}',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which Requirement constants are available in Symfony 7.1+?',
        'answers' => [
            'A' => 'Requirement::DIGITS',
            'B' => 'Requirement::ASCII_SLUG',
            'C' => 'Requirement::DATE_YMD',
            'D' => 'Requirement::UUID',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which redirect status codes are set by RedirectController with keepRequestMethod option?',
        'answers' => [
            'A' => '307',
            'B' => '308',
            'C' => '302',
            'D' => '301',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: what is the return type of UrlGeneratorInterface::NETWORK_PATH reference type?',
        'answers' => [
            'A' => '//example.com/path',
            'B' => 'https://example.com/path',
            'C' => '/path',
            'D' => '../path',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which exceptions can UriSigner::verify() throw?',
        'answers' => [
            'A' => 'UnsignedUriException',
            'B' => 'UnverifiedSignedUriException',
            'C' => 'ExpiredSignedUriException',
            'D' => 'InvalidSignatureException',
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],

    // Twig - Advanced Filters and Functions
    [
        'text' => 'Twig: which parameters does the trans filter accept?',
        'answers' => [
            'A' => 'arguments',
            'B' => 'domain',
            'C' => 'locale',
            'D' => 'parameters',
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which function creates a TranslatableMessage object in Symfony?',
        'answers' => [
            'A' => 't()',
            'B' => 'trans()',
            'C' => 'translate()',
            'D' => 'message()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which app global variable properties are available for routing information?',
        'answers' => [
            'A' => 'app.current_route',
            'B' => 'app.current_route_parameters',
            'C' => 'app.route_name',
            'D' => 'app.route_params',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which render function generates ESI tags when ESI support is enabled?',
        'answers' => [
            'A' => 'render_esi()',
            'B' => 'render()',
            'C' => 'esi()',
            'D' => 'render_hinclude()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: what is the difference between the trans filter and trans tag regarding escaping?',
        'answers' => [
            'A' => 'Filter auto-escapes output, tag does not',
            'B' => 'Tag auto-escapes output, filter does not',
            'C' => 'Both auto-escape output',
            'D' => 'Neither auto-escapes output',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],

    // Forms - Advanced Events and Transformers
    [
        'text' => 'Forms: in which FormEvent can you still add or remove form fields?',
        'answers' => [
            'A' => 'FormEvents::PRE_SET_DATA',
            'B' => 'FormEvents::POST_SET_DATA',
            'C' => 'FormEvents::PRE_SUBMIT',
            'D' => 'FormEvents::POST_SUBMIT',
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which FormBuilderInterface methods add data transformers?',
        'answers' => [
            'A' => 'addModelTransformer()',
            'B' => 'addViewTransformer()',
            'C' => 'addNormTransformer()',
            'D' => 'addDataTransformer()',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which built-in form types are available for date and time?',
        'answers' => [
            'A' => 'DateType',
            'B' => 'DateTimeType',
            'C' => 'TimeType',
            'D' => 'DateIntervalType',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which option controls whether form errors bubble up to the parent form?',
        'answers' => [
            'A' => 'error_bubbling',
            'B' => 'bubble_errors',
            'C' => 'propagate_errors',
            'D' => 'cascade_errors',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which CollectionType options enable dynamic add/remove of entries?',
        'answers' => [
            'A' => 'allow_add',
            'B' => 'allow_delete',
            'C' => 'prototype',
            'D' => 'delete_empty',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: what is the default value for the prototype_name option in CollectionType?',
        'answers' => [
            'A' => '__name__',
            'B' => '__index__',
            'C' => '__prototype__',
            'D' => '__item__',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],

    // Validation - Advanced Constraints
    [
        'text' => 'Validation: which constraint validates that a value is a valid email according to HTML5?',
        'answers' => [
            'A' => 'Email with mode: "html5"',
            'B' => 'Email with mode: "strict"',
            'C' => 'Email with mode: "loose"',
            'D' => 'Html5Email',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which ConstraintViolationBuilderInterface methods are chainable?',
        'answers' => [
            'A' => 'setParameter()',
            'B' => 'atPath()',
            'C' => 'setCode()',
            'D' => 'addViolation()',
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which constraint option specifies the validation payload?',
        'answers' => [
            'A' => 'payload',
            'B' => 'data',
            'C' => 'context',
            'D' => 'extra',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which constraint validates nested object properties recursively?',
        'answers' => [
            'A' => 'Valid',
            'B' => 'Cascade',
            'C' => 'Traverse',
            'D' => 'Deep',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],

    // Dependency Injection - Advanced Attributes
    [
        'text' => 'Dependency Injection: which AutowireIterator attribute options configure tagged service iteration?',
        'answers' => [
            'A' => 'indexAttribute',
            'B' => 'defaultIndexMethod',
            'C' => 'defaultPriorityMethod',
            'D' => 'exclude',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which attribute injects a lazy-loading closure for a service?',
        'answers' => [
            'A' => '#[AutowireServiceClosure]',
            'B' => '#[LazyService]',
            'C' => '#[ServiceClosure]',
            'D' => '#[DeferredService]',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which AutowireLocator attribute parameters create a service locator?',
        'answers' => [
            'A' => 'Array of service class names',
            'B' => 'Tag name with indexAttribute',
            'C' => 'defaultIndexMethod',
            'D' => 'defaultPriorityMethod',
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: what is the default behavior for the lazy service option?',
        'answers' => [
            'A' => 'Creates a ghost object',
            'B' => 'Creates a proxy object',
            'C' => 'Defers instantiation',
            'D' => 'Uses factory pattern',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which YAML option references the decorated service in a decorator?',
        'answers' => [
            'A' => 'decoration_inner_name',
            'B' => 'decorated_service',
            'C' => 'inner_service',
            'D' => 'original_service',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],

    // HTTP Cache - Advanced
    [
        'text' => 'HTTP Cache: which Response method checks if content has been modified based on request headers?',
        'answers' => [
            'A' => 'isNotModified()',
            'B' => 'isModified()',
            'C' => 'checkModified()',
            'D' => 'compareModified()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'HTTP Cache: which response methods implement stale-if-error and stale-while-revalidate (RFC 5861)?',
        'answers' => [
            'A' => 'setStaleIfError()',
            'B' => 'setStaleWhileRevalidate()',
            'C' => 'setStaleOnError()',
            'D' => 'enableStaleContent()',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'HTTP Cache: which framework configuration options enable ESI support?',
        'answers' => [
            'A' => 'esi',
            'B' => 'fragments',
            'C' => 'http_cache',
            'D' => 'esi_support',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'HTTP Cache: what HTTP header advertises ESI capability to Symfony?',
        'answers' => [
            'A' => 'Surrogate-Capability',
            'B' => 'ESI-Support',
            'C' => 'X-ESI-Capability',
            'D' => 'Cache-Capability',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'HTTP Cache: which Cache attribute parameters configure response caching?',
        'answers' => [
            'A' => 'public',
            'B' => 'maxage',
            'C' => 'smaxage',
            'D' => 'mustRevalidate',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],

    // Console - Advanced
    [
        'text' => 'Console: which lifecycle methods are called in order during command execution?',
        'answers' => [
            'A' => 'initialize()',
            'B' => 'interact()',
            'C' => 'execute()',
            'D' => 'configure()',
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which OutputInterface constants correspond to -vv verbosity?',
        'answers' => [
            'A' => 'OutputInterface::VERBOSITY_VERY_VERBOSE',
            'B' => 'OutputInterface::VERBOSITY_DEBUG',
            'C' => 'OutputInterface::VERBOSITY_VERBOSE',
            'D' => 'OutputInterface::VERBOSITY_NORMAL',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which SymfonyStyle methods create admonition blocks?',
        'answers' => [
            'A' => 'note()',
            'B' => 'caution()',
            'C' => 'warning()',
            'D' => 'info()',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which Table style constants are built-in?',
        'answers' => [
            'A' => 'default',
            'B' => 'compact',
            'C' => 'borderless',
            'D' => 'box',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which ConsoleEvents constant is dispatched when a signal is received?',
        'answers' => [
            'A' => 'ConsoleEvents::SIGNAL',
            'B' => 'ConsoleEvents::INTERRUPT',
            'C' => 'ConsoleEvents::SIGTERM',
            'D' => 'ConsoleEvents::KILL',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],

    // Testing - Advanced
    [
        'text' => 'Testing: which WebTestCase method creates a test HTTP client?',
        'answers' => [
            'A' => 'static::createClient()',
            'B' => 'static::getClient()',
            'C' => 'static::makeClient()',
            'D' => 'static::newClient()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Testing: which Crawler methods traverse DOM elements?',
        'answers' => [
            'A' => 'filter()',
            'B' => 'filterXPath()',
            'C' => 'children()',
            'D' => 'siblings()',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Testing: which Client methods simulate user interactions?',
        'answers' => [
            'A' => 'click()',
            'B' => 'submit()',
            'C' => 'clickLink()',
            'D' => 'submitForm()',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Testing: which SYMFONY_DEPRECATIONS_HELPER options control deprecation thresholds?',
        'answers' => [
            'A' => 'max[total]',
            'B' => 'max[self]',
            'C' => 'max[direct]',
            'D' => 'max[indirect]',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Testing: which trait enables expectDeprecation() assertions in tests?',
        'answers' => [
            'A' => 'ExpectDeprecationTrait',
            'B' => 'DeprecationTrait',
            'C' => 'AssertDeprecationTrait',
            'D' => 'LegacyTestTrait',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Testing: which assertion methods check response status?',
        'answers' => [
            'A' => 'assertResponseIsSuccessful()',
            'B' => 'assertResponseStatusCodeSame()',
            'C' => 'assertResponseRedirects()',
            'D' => 'assertResponseIsUnprocessable()',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],

    // Security - Advanced Authenticators
    [
        'text' => 'Security: which Passport Badge classes are available for authentication?',
        'answers' => [
            'A' => 'UserBadge',
            'B' => 'PasswordCredentials',
            'C' => 'CsrfTokenBadge',
            'D' => 'RememberMeBadge',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: which AuthenticatorInterface methods must be implemented?',
        'answers' => [
            'A' => 'supports()',
            'B' => 'authenticate()',
            'C' => 'onAuthenticationSuccess()',
            'D' => 'onAuthenticationFailure()',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: what is the difference between IS_AUTHENTICATED_FULLY and IS_AUTHENTICATED_REMEMBERED?',
        'answers' => [
            'A' => 'FULLY excludes remember-me authentication',
            'B' => 'REMEMBERED includes remember-me authentication',
            'C' => 'FULLY requires password authentication',
            'D' => 'REMEMBERED allows anonymous access',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: which access_control options configure firewall matching?',
        'answers' => [
            'A' => 'path',
            'B' => 'host',
            'C' => 'methods',
            'D' => 'roles',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],

    // Advanced Pair Questions (similar text, multiple correct answers)
    [
        'text' => 'Which form field options control data mapping between the form and underlying object?',
        'answers' => [
            'A' => 'mapped',
            'B' => 'property_path',
            'C' => 'inherit_data',
            'D' => 'by_reference',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Which form field options control validation behavior?',
        'answers' => [
            'A' => 'constraints',
            'B' => 'validation_groups',
            'C' => 'invalid_message',
            'D' => 'error_mapping',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Which Twig functions render controller fragments?',
        'answers' => [
            'A' => 'render()',
            'B' => 'render_esi()',
            'C' => 'controller()',
            'D' => 'render_hinclude()',
        ],
        'correctAnswers' => 'A,B,D',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Which Twig functions generate URLs?',
        'answers' => [
            'A' => 'path()',
            'B' => 'url()',
            'C' => 'absolute_url()',
            'D' => 'relative_path()',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Which service container YAML keys configure service instantiation?',
        'answers' => [
            'A' => 'class',
            'B' => 'factory',
            'C' => 'arguments',
            'D' => 'calls',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Which service container YAML keys configure service behavior?',
        'answers' => [
            'A' => 'public',
            'B' => 'shared',
            'C' => 'lazy',
            'D' => 'autowire',
        ],
        'correctAnswers' => 'A,B,C,D',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
];