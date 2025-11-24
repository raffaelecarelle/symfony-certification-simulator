<?php

return [
    [
        'text' => 'Console: which constant indicates a successful command execution?',
        'answers' => [
            'A' => 'Command::SUCCESS',
            'B' => 'Command::OK',
            'C' => 'ExitCode::SUCCESS',
            'D' => 'STATUS_SUCCESS',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Routing: which Route attribute option restricts the allowed HTTP methods?',
        'answers' => [
            'A' => 'methods',
            'B' => 'verbs',
            'C' => 'http',
            'D' => 'allow',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: in YAML route definitions, what is the required format for the \'controller\' value?',
        'answers' => [
            'A' => 'controller_class::method_name',
            'B' => 'Controller#method',
            'C' => 'controller.class@method',
            'D' => 'service_id:method',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'HTTP Cache: which YAML value enables the built-in reverse proxy in the prod environment?',
        'answers' => [
            'A' => 'http_cache: true',
            'B' => 'framework.cache: true',
            'C' => 'cache.http: enabled',
            'D' => 'reverse_proxy: on',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'Dependency Injection: which service tag registers a service as a Twig extension?',
        'answers' => [
            'A' => 'twig.extension',
            'B' => 'twig.tag',
            'C' => 'twig.bundle',
            'D' => 'twig.service',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container/tags.rst',
    ],
    [
        'text' => 'Twig: what is the default value of the \'default_path\' option in TwigBundle configuration?',
        'answers' => [
            'A' => '%kernel.project_dir%/templates',
            'B' => '%kernel.root_dir%/views',
            'C' => 'templates/',
            'D' => '%kernel.cache_dir%/twig',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/reference/configuration/twig.rst',
    ],
    [
        'text' => 'Twig: what is the default value of \'form_themes\'?',
        'answers' => [
            'A' => '[\'form_div_layout.html.twig\']',
            'B' => '[\'bootstrap_5_layout.html.twig\']',
            'C' => '[\'form_table_layout.html.twig\']',
            'D' => '[\'uikit_layout.html.twig\']',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/reference/configuration/twig.rst',
    ],
    [
        'text' => 'Controllers: which helper method of AbstractController generates the URL for a given route?',
        'answers' => [
            'A' => 'generateUrl',
            'B' => 'createUrl',
            'C' => 'urlFor',
            'D' => 'buildRoute',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which methods of AbstractController are used to render templates?',
        'answers' => [
            'A' => 'render()',
            'B' => 'renderView()',
            'C' => 'renderBlock()',
            'D' => 'renderTemplate()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Routing: which Route attribute options are used to define route matching conditions?',
        'answers' => [
            'A' => 'requirements',
            'B' => 'condition',
            'C' => 'host',
            'D' => 'schemes',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Twig: which functions generate URLs in templates?',
        'answers' => [
            'A' => 'path()',
            'B' => 'url()',
            'C' => 'absolute_url()',
            'D' => 'generate_url()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Forms: which FormBuilderInterface methods add fields to a form?',
        'answers' => [
            'A' => 'add()',
            'B' => 'addField()',
            'C' => 'field()',
            'D' => 'create()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Validation: which ConstraintViolation methods provide error information?',
        'answers' => [
            'A' => 'getMessage()',
            'B' => 'getMessageTemplate()',
            'C' => 'getParameters()',
            'D' => 'getPropertyPath()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Dependency Injection: which attributes configure service injection?',
        'answers' => [
            'A' => '#[Autowire(service: "id")]',
            'B' => '#[Autowire("%parameter%")]',
            'C' => '#[Autowire(expression: "expr")]',
            'D' => '#[AutowireCallable]',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Security: which UserInterface method returns unique user identification?',
        'answers' => [
            'A' => 'getUserIdentifier()',
            'B' => 'getUsername()',
            'C' => 'getId()',
            'D' => 'getIdentifier()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'HTTP Cache: which Response methods configure cache expiration?',
        'answers' => [
            'A' => 'setPublic()',
            'B' => 'setPrivate()',
            'C' => 'setMaxAge()',
            'D' => 'setSharedMaxAge()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'Console: which InputArgument modes are available?',
        'answers' => [
            'A' => 'InputArgument::REQUIRED',
            'B' => 'InputArgument::OPTIONAL',
            'C' => 'InputArgument::IS_ARRAY',
            'D' => 'InputArgument::MULTIPLE',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'MapQueryParameter: which types are supported by the attribute?',
        'answers' => [
            'A' => 'BackedEnum',
            'B' => 'array',
            'C' => 'bool',
            'D' => 'AbstractUid',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'MapQueryString: which options are available for validation?',
        'answers' => [
            'A' => 'validationGroups',
            'B' => 'validationFailedStatusCode',
            'C' => 'constraints',
            'D' => 'validate',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'MapRequestPayload: which options configure payload mapping?',
        'answers' => [
            'A' => 'acceptFormat',
            'B' => 'serializationContext',
            'C' => 'resolver',
            'D' => 'validationGroups',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Architecture: which directories are part of the default Symfony Flex structure?',
        'answers' => [
            'A' => 'bin/',
            'B' => 'config/',
            'C' => 'public/',
            'D' => 'templates/',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/best_practices.rst',
    ],
    [
        'text' => 'Routing: which syntax maps a route parameter to an entity property?',
        'answers' => [
            'A' => '{slug:post}',
            'B' => '{slug->post}',
            'C' => '{slug@post}',
            'D' => '{post:slug}',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which attribute registers a custom routing condition service?',
        'answers' => [
            'A' => '#[AsRoutingConditionService]',
            'B' => '#[RoutingCondition]',
            'C' => '#[RouteCondition]',
            'D' => '#[ConditionService]',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Controllers: which Template attribute option specifies a block to render?',
        'answers' => [
            'A' => 'block',
            'B' => 'section',
            'C' => 'fragment',
            'D' => 'part',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Security: which IsGranted attribute options configure access denial?',
        'answers' => [
            'A' => 'message',
            'B' => 'statusCode',
            'C' => 'exceptionCode',
            'D' => 'redirectUrl',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: which PasswordHasherInterface methods are available?',
        'answers' => [
            'A' => 'hashPassword()',
            'B' => 'isPasswordValid()',
            'C' => 'needsRehash()',
            'D' => 'verifyPassword()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Dependency Injection: which Autoconfigure attribute options are available?',
        'answers' => [
            'A' => 'public',
            'B' => 'shared',
            'C' => 'lazy',
            'D' => 'autowire',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which AsTaggedItem attribute option sets item priority?',
        'answers' => [
            'A' => 'priority',
            'B' => 'order',
            'C' => 'weight',
            'D' => 'index',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Validation: which Regex constraint option controls matching behavior?',
        'answers' => [
            'A' => 'match',
            'B' => 'matches',
            'C' => 'mustMatch',
            'D' => 'positive',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which Choice constraint options control multiple selections?',
        'answers' => [
            'A' => 'multiple',
            'B' => 'min',
            'C' => 'max',
            'D' => 'count',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'HTTP Cache: which method sets an absolute cache expiration time?',
        'answers' => [
            'A' => 'setExpires()',
            'B' => 'setExpiresAt()',
            'C' => 'setExpiration()',
            'D' => 'expire()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'Routing: which query parameter stores URI expiration for signed URIs?',
        'answers' => [
            'A' => '_expiration',
            'B' => '_expires',
            'C' => '_expire_at',
            'D' => '_exp',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Forms: what is the default form theme in Symfony?',
        'answers' => [
            'A' => 'form_div_layout.html.twig',
            'B' => 'bootstrap_5_layout.html.twig',
            'C' => 'form_table_layout.html.twig',
            'D' => 'foundation_layout.html.twig',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Architecture: which KernelEvents constant represents the event dispatched when a controller is about to be called?',
        'answers' => [
            'A' => 'KernelEvents::CONTROLLER',
            'B' => 'KernelEvents::CONTROLLER_ARGUMENTS',
            'C' => 'KernelEvents::REQUEST',
            'D' => 'KernelEvents::VIEW',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/event_dispatcher.rst',
    ],
    [
        'text' => 'Architecture: which methods does MicroKernelTrait require to be implemented in the Kernel class?',
        'answers' => [
            'A' => 'configureContainer()',
            'B' => 'configureRoutes()',
            'C' => 'registerBundles()',
            'D' => 'No one',
        ],
        'correctAnswers' => [
            0 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/event_dispatcher.rst',
    ],
    [
        'text' => 'Controllers: which attribute injects the decorated service in a decorator class constructor?',
        'answers' => [
            'A' => '#[AutowireDecorated]',
            'B' => '#[Autowire(service: ".inner")]',
            'C' => '#[DecoratedService]',
            'D' => '#[InnerService]',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Routing: which inline syntax combines both requirement and default value for a route parameter?',
        'answers' => [
            'A' => '{page<\\d+>?1}',
            'B' => '{page?1<\\d+>}',
            'C' => '{page:\\d+:1}',
            'D' => '{page=1|\\d+}',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Twig: which parameters does the trans filter accept?',
        'answers' => [
            'A' => 'arguments',
            'B' => 'domain',
            'C' => 'locale',
            'D' => 'parameters',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Forms: in which FormEvent can you still add or remove form fields?',
        'answers' => [
            'A' => 'FormEvents::PRE_SET_DATA',
            'B' => 'FormEvents::POST_SET_DATA',
            'C' => 'FormEvents::PRE_SUBMIT',
            'D' => 'FormEvents::POST_SUBMIT',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Validation: which constraint validates that a value is a valid email according to HTML5?',
        'answers' => [
            'A' => 'Email with mode: "html5"',
            'B' => 'Email with mode: "strict"',
            'C' => 'Email with mode: "loose"',
            'D' => 'Html5Email',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Dependency Injection: which AutowireIterator attribute options configure tagged service iteration?',
        'answers' => [
            'A' => 'indexAttribute',
            'B' => 'defaultIndexMethod',
            'C' => 'defaultPriorityMethod',
            'D' => 'exclude',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'HTTP Cache: which Response method checks if content has been modified based on request headers?',
        'answers' => [
            'A' => 'isNotModified()',
            'B' => 'isModified()',
            'C' => 'checkModified()',
            'D' => 'compareModified()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'Console: which lifecycle methods are called in order during command execution?',
        'answers' => [
            'A' => 'initialize()',
            'B' => 'interact()',
            'C' => 'execute()',
            'D' => 'configure()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Testing: which WebTestCase method creates a test HTTP client?',
        'answers' => [
            'A' => 'static::createClient()',
            'B' => 'static::getClient()',
            'C' => 'static::makeClient()',
            'D' => 'static::newClient()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Security: which Passport Badge classes are available for authentication?',
        'answers' => [
            'A' => 'UserBadge',
            'B' => 'PasswordCredentials',
            'C' => 'CsrfTokenBadge',
            'D' => 'RememberMeBadge',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Which form field options control data mapping between the form and underlying object?',
        'answers' => [
            'A' => 'mapped',
            'B' => 'property_path',
            'C' => 'inherit_data',
            'D' => 'by_reference',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
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
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Architecture: which KernelEvents are dispatched during the Symfony request-response cycle?',
        'answers' => [
            'A' => 'KernelEvents::REQUEST',
            'B' => 'KernelEvents::CONTROLLER',
            'C' => 'KernelEvents::VIEW',
            'D' => 'KernelEvents::RESPONSE',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/event_dispatcher.rst',
    ],
    [
        'text' => 'Architecture: which event class is used for the kernel.exception event?',
        'answers' => [
            'A' => 'ExceptionEvent',
            'B' => 'ErrorEvent',
            'C' => 'ThrowableEvent',
            'D' => 'KernelExceptionEvent',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/event_dispatcher.rst',
    ],
    [
        'text' => 'Architecture: which ExceptionEvent method sets a custom response for the exception?',
        'answers' => [
            'A' => 'setResponse()',
            'B' => 'replaceResponse()',
            'C' => 'createResponse()',
            'D' => 'handleResponse()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/event_dispatcher.rst',
    ],
    [
        'text' => 'Architecture: which ExceptionEvent method allows replacing the thrown exception?',
        'answers' => [
            'A' => 'setThrowable()',
            'B' => 'setException()',
            'C' => 'replaceException()',
            'D' => 'changeThrowable()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/event_dispatcher.rst',
    ],
    [
        'text' => 'Architecture: what is the default priority value for event listeners if not specified?',
        'answers' => [
            'A' => '0',
            'B' => '1',
            'C' => '10',
            'D' => '100',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/event_dispatcher.rst',
    ],
    [
        'text' => 'Controllers: which Request method checks if the request is a main request?',
        'answers' => [
            'A' => '$event->isMainRequest()',
            'B' => '$request->isMasterRequest()',
            'C' => '$request->isMainRequest()',
            'D' => '$event->getRequestType()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/event_dispatcher.rst',
    ],
    [
        'text' => 'Controllers: which Request ParameterBag methods retrieve filtered values?',
        'answers' => [
            'A' => 'getAlpha()',
            'B' => 'getAlnum()',
            'C' => 'getDigits()',
            'D' => 'getBoolean()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Request method retrieves an enum from query parameters?',
        'answers' => [
            'A' => 'getEnum()',
            'B' => 'getEnumValue()',
            'C' => 'toEnum()',
            'D' => 'parseEnum()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which AbstractController method forwards to another controller internally?',
        'answers' => [
            'A' => 'forward()',
            'B' => 'redirect()',
            'C' => 'redirectToRoute()',
            'D' => 'render()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which forward() method parameters are available?',
        'answers' => [
            'A' => 'controller',
            'B' => 'path',
            'C' => 'query',
            'D' => 'headers',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Response subclass streams content using a callback?',
        'answers' => [
            'A' => 'StreamedResponse',
            'B' => 'CallbackResponse',
            'C' => 'GeneratorResponse',
            'D' => 'AsyncResponse',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Response subclass is used for JSON streaming with generators?',
        'answers' => [
            'A' => 'StreamedJsonResponse',
            'B' => 'JsonStreamResponse',
            'C' => 'GeneratorJsonResponse',
            'D' => 'AsyncJsonResponse',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which BinaryFileResponse method sets Content-Disposition header?',
        'answers' => [
            'A' => 'setContentDisposition()',
            'B' => 'setDisposition()',
            'C' => 'setAttachment()',
            'D' => 'setDownload()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Response HTTP status constants are available?',
        'answers' => [
            'A' => 'Response::HTTP_OK',
            'B' => 'Response::HTTP_NOT_FOUND',
            'C' => 'Response::HTTP_MOVED_PERMANENTLY',
            'D' => 'Response::HTTP_UNPROCESSABLE_ENTITY',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Cookie factory method creates a cookie with fluent interface?',
        'answers' => [
            'A' => 'Cookie::create()',
            'B' => 'Cookie::make()',
            'C' => 'Cookie::new()',
            'D' => 'Cookie::build()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Cookie methods configure cookie properties?',
        'answers' => [
            'A' => 'withValue()',
            'B' => 'withExpires()',
            'C' => 'withDomain()',
            'D' => 'withSecure()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Cookie method creates partitioned cookies for CHIPS?',
        'answers' => [
            'A' => 'withPartitioned()',
            'B' => 'setPartitioned()',
            'C' => 'enableCHIPS()',
            'D' => 'withCHIPS()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Session methods manage session lifecycle?',
        'answers' => [
            'A' => 'start()',
            'B' => 'invalidate()',
            'C' => 'migrate()',
            'D' => 'clear()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Session method retrieves all attributes?',
        'answers' => [
            'A' => 'all()',
            'B' => 'getAll()',
            'C' => 'getAttributes()',
            'D' => 'toArray()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which FlashBag methods retrieve messages without removing them?',
        'answers' => [
            'A' => 'peek()',
            'B' => 'peekAll()',
            'C' => 'get()',
            'D' => 'all()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Routing: which requirement pattern allows slashes in a route parameter?',
        'answers' => [
            'A' => '.+',
            'B' => '.*',
            'C' => '[^/]+',
            'D' => '\\S+',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which requirement pattern allows slashes but excludes dots?',
        'answers' => [
            'A' => '[^.]+',
            'B' => '[^\\.]+',
            'C' => '.+',
            'D' => '[^/\\.]+',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which Requirement constant matches date in YYYY-MM-DD format?',
        'answers' => [
            'A' => 'Requirement::DATE_YMD',
            'B' => 'Requirement::DATE',
            'C' => 'Requirement::ISO_DATE',
            'D' => 'Requirement::YYYY_MM_DD',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which Requirement constants are available for UID validation?',
        'answers' => [
            'A' => 'Requirement::UID_BASE58',
            'B' => 'Requirement::UID_BASE32',
            'C' => 'Requirement::UID_RFC4122',
            'D' => 'Requirement::UUID',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which special parameter automatically sets the request locale?',
        'answers' => [
            'A' => '_locale',
            'B' => 'locale',
            'C' => '_language',
            'D' => 'lang',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which Route attribute syntax defines localized paths?',
        'answers' => [
            'A' => 'path: ["en" => "/about", "fr" => "/a-propos"]',
            'B' => 'localizedPath: ["en" => "/about", "fr" => "/a-propos"]',
            'C' => 'paths: ["en" => "/about", "fr" => "/a-propos"]',
            'D' => 'i18nPath: ["en" => "/about", "fr" => "/a-propos"]',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which console command tests if a URL matches a route?',
        'answers' => [
            'A' => 'router:match',
            'B' => 'debug:router --match',
            'C' => 'router:test',
            'D' => 'debug:route',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Twig: which Twig configuration option sets the default path for templates?',
        'answers' => [
            'A' => 'default_path',
            'B' => 'template_dir',
            'C' => 'base_path',
            'D' => 'root_dir',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which filter converts snake_case and camelCase to human-readable format?',
        'answers' => [
            'A' => 'humanize',
            'B' => 'titleize',
            'C' => 'readable',
            'D' => 'format',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which filter serializes an object to JSON or other formats?',
        'answers' => [
            'A' => 'serialize',
            'B' => 'encode',
            'C' => 'json_encode',
            'D' => 'toJson',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which filter abbreviates class names with HTML abbr tag?',
        'answers' => [
            'A' => 'abbr_class',
            'B' => 'abbr_method',
            'C' => 'abbreviate',
            'D' => 'short_class',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which filter sanitizes HTML content using HTML Sanitizer component?',
        'answers' => [
            'A' => 'sanitize_html',
            'B' => 'sanitize',
            'C' => 'clean_html',
            'D' => 'purify',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which function creates a CSRF token for the given intention?',
        'answers' => [
            'A' => 'csrf_token()',
            'B' => 'token()',
            'C' => 'generate_token()',
            'D' => 'create_csrf()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which form rendering function renders unrendered fields including CSRF?',
        'answers' => [
            'A' => 'form_rest()',
            'B' => 'form_remaining()',
            'C' => 'form_hidden()',
            'D' => 'form_finish()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Forms: which form type is the parent of all other form types?',
        'answers' => [
            'A' => 'FormType',
            'B' => 'BaseType',
            'C' => 'AbstractType',
            'D' => 'ParentType',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which form type accepts backed enum values?',
        'answers' => [
            'A' => 'EnumType',
            'B' => 'BackedEnumType',
            'C' => 'ChoiceType',
            'D' => 'SelectType',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which form types handle UID (UUID/ULID) values?',
        'answers' => [
            'A' => 'UuidType',
            'B' => 'UlidType',
            'C' => 'UidType',
            'D' => 'IdentifierType',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which form type is specifically for birthday selection?',
        'answers' => [
            'A' => 'BirthdayType',
            'B' => 'DateType',
            'C' => 'BirthDateType',
            'D' => 'AgeType',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which form type supports week selection (HTML5)?',
        'answers' => [
            'A' => 'WeekType',
            'B' => 'WeekNumberType',
            'C' => 'CalendarWeekType',
            'D' => 'IsoWeekType',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which form option specifies a custom property path for data binding?',
        'answers' => [
            'A' => 'property_path',
            'B' => 'data_path',
            'C' => 'bind_path',
            'D' => 'field_path',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which form option controls whether setters or property access is used?',
        'answers' => [
            'A' => 'by_reference',
            'B' => 'use_setter',
            'C' => 'direct_access',
            'D' => 'property_setter',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which form options customize the block name in form templates?',
        'answers' => [
            'A' => 'block_name',
            'B' => 'block_prefix',
            'C' => 'form_name',
            'D' => 'template_block',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which form option provides a custom getter callable for reading data?',
        'answers' => [
            'A' => 'getter',
            'B' => 'reader',
            'C' => 'accessor',
            'D' => 'data_getter',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which form option provides a custom setter callable for writing data?',
        'answers' => [
            'A' => 'setter',
            'B' => 'writer',
            'C' => 'mutator',
            'D' => 'data_setter',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which ChoiceType options customize choice rendering?',
        'answers' => [
            'A' => 'choice_value',
            'B' => 'choice_label',
            'C' => 'choice_name',
            'D' => 'choice_attr',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which ChoiceType option groups choices together?',
        'answers' => [
            'A' => 'group_by',
            'B' => 'groups',
            'C' => 'choice_groups',
            'D' => 'grouped',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which ChoiceType option renders choices as radio buttons or checkboxes?',
        'answers' => [
            'A' => 'expanded',
            'B' => 'multiple',
            'C' => 'inline',
            'D' => 'widget',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Validation: which constraint validates that a value is false?',
        'answers' => [
            'A' => 'IsFalse',
            'B' => 'False',
            'C' => 'NotTrue',
            'D' => 'EqualFalse',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which constraint validates that a value is null?',
        'answers' => [
            'A' => 'IsNull',
            'B' => 'Null',
            'C' => 'Empty',
            'D' => 'Blank',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which constraint validates that a value is NOT null?',
        'answers' => [
            'A' => 'NotNull',
            'B' => 'IsNotNull',
            'C' => 'Required',
            'D' => 'Present',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which constraint validates that a value is NOT blank (not empty string)?',
        'answers' => [
            'A' => 'NotBlank',
            'B' => 'NotEmpty',
            'C' => 'Required',
            'D' => 'Filled',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which constraint validates a value against a regular expression?',
        'answers' => [
            'A' => 'Regex',
            'B' => 'Pattern',
            'C' => 'Matches',
            'D' => 'RegularExpression',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which constraint validates that a value is a valid IBAN?',
        'answers' => [
            'A' => 'Iban',
            'B' => 'BankAccount',
            'C' => 'IBAN',
            'D' => 'InternationalBankAccount',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which constraint validates that a value is a valid ISBN?',
        'answers' => [
            'A' => 'Isbn',
            'B' => 'ISBN',
            'C' => 'BookNumber',
            'D' => 'InternationalStandardBookNumber',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which constraint validates that a value is a valid ISSN?',
        'answers' => [
            'A' => 'Issn',
            'B' => 'ISSN',
            'C' => 'SerialNumber',
            'D' => 'InternationalSerialNumber',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which class creates a sequence of validation groups?',
        'answers' => [
            'A' => 'GroupSequence',
            'B' => 'SequenceGroup',
            'C' => 'ValidationSequence',
            'D' => 'GroupChain',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: what happens when a constraint fails in a GroupSequence?',
        'answers' => [
            'A' => 'Subsequent groups are not validated',
            'B' => 'All groups are still validated',
            'C' => 'Only the Default group continues',
            'D' => 'Validation stops completely',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Dependency Injection: which YAML key specifies the service constructor method?',
        'answers' => [
            'A' => 'constructor',
            'B' => 'factory',
            'C' => 'builder',
            'D' => 'create',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which YAML key registers service method calls after instantiation?',
        'answers' => [
            'A' => 'calls',
            'B' => 'methods',
            'C' => 'setters',
            'D' => 'configure',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which YAML syntax marks a method call as returning a clone?',
        'answers' => [
            'A' => '!returns_clone',
            'B' => '!immutable',
            'C' => '!clone',
            'D' => '!copy',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which decoration_on_invalid values are valid?',
        'answers' => [
            'A' => 'ignore',
            'B' => 'exception',
            'C' => 'null',
            'D' => 'skip',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which Autowire attribute option injects an environment variable?',
        'answers' => [
            'A' => 'env',
            'B' => 'environment',
            'C' => 'envVar',
            'D' => 'variable',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which Autowire attribute option evaluates an expression?',
        'answers' => [
            'A' => 'expression',
            'B' => 'expr',
            'C' => 'evaluate',
            'D' => 'exprLang',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which attribute marks a method for required dependency injection?',
        'answers' => [
            'A' => '#[Required]',
            'B' => '#[Autowire]',
            'C' => '#[Inject]',
            'D' => '#[Dependency]',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'HTTP Cache: which Response method marks content as immutable?',
        'answers' => [
            'A' => 'setCache() with immutable: true',
            'B' => 'setImmutable()',
            'C' => 'markImmutable()',
            'D' => 'enableImmutable()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'HTTP Cache: which Response method forces revalidation when stale?',
        'answers' => [
            'A' => 'setCache() with must_revalidate: true',
            'B' => 'mustRevalidate()',
            'C' => 'forceRevalidation()',
            'D' => 'enableRevalidation()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'HTTP Cache: which Response method prevents caching entirely?',
        'answers' => [
            'A' => 'setCache() with no_store: true',
            'B' => 'preventCache()',
            'C' => 'disableCache()',
            'D' => 'noStore()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'HTTP Cache: which Response method marks the response as expired?',
        'answers' => [
            'A' => 'expire()',
            'B' => 'setExpired()',
            'C' => 'markStale()',
            'D' => 'invalidate()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'Console: which command lifecycle method is NOT called when --no-interaction flag is used?',
        'answers' => [
            'A' => 'interact()',
            'B' => 'initialize()',
            'C' => 'execute()',
            'D' => 'configure()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which OutputInterface method writes without a trailing newline?',
        'answers' => [
            'A' => 'write()',
            'B' => 'writeln()',
            'C' => 'output()',
            'D' => 'print()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which OutputInterface constant represents --silent verbosity?',
        'answers' => [
            'A' => 'VERBOSITY_SILENT',
            'B' => 'VERBOSITY_QUIET',
            'C' => 'VERBOSITY_NONE',
            'D' => 'VERBOSITY_MINIMAL',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which OutputInterface constant represents -vvv verbosity?',
        'answers' => [
            'A' => 'VERBOSITY_DEBUG',
            'B' => 'VERBOSITY_VERY_VERBOSE',
            'C' => 'VERBOSITY_VERBOSE',
            'D' => 'VERBOSITY_MAXIMUM',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which SymfonyStyle methods display result messages?',
        'answers' => [
            'A' => 'success()',
            'B' => 'info()',
            'C' => 'warning()',
            'D' => 'error()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which SymfonyStyle method creates a progress bar?',
        'answers' => [
            'A' => 'createProgressBar()',
            'B' => 'progressStart()',
            'C' => 'makeProgressBar()',
            'D' => 'newProgressBar()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which SymfonyStyle methods create tables?',
        'answers' => [
            'A' => 'table()',
            'B' => 'horizontalTable()',
            'C' => 'definitionList()',
            'D' => 'createTable()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Testing: which Client method disables automatic exception catching?',
        'answers' => [
            'A' => 'catchExceptions(false)',
            'B' => 'disableExceptions()',
            'C' => 'throwExceptions()',
            'D' => 'enableExceptions()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Testing: which Client method enables the profiler for the next request?',
        'answers' => [
            'A' => 'enableProfiler()',
            'B' => 'withProfiler()',
            'C' => 'profileNext()',
            'D' => 'startProfiling()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Testing: which Client method simulates user login?',
        'answers' => [
            'A' => 'loginUser()',
            'B' => 'authenticate()',
            'C' => 'login()',
            'D' => 'setUser()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Testing: which Client method makes an AJAX request?',
        'answers' => [
            'A' => 'xmlHttpRequest()',
            'B' => 'ajax()',
            'C' => 'xhr()',
            'D' => 'asyncRequest()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Testing: which Crawler method selects a link by its text?',
        'answers' => [
            'A' => 'selectLink()',
            'B' => 'findLink()',
            'C' => 'getLink()',
            'D' => 'clickableLink()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Testing: which Crawler method selects a button by its text?',
        'answers' => [
            'A' => 'selectButton()',
            'B' => 'findButton()',
            'C' => 'getButton()',
            'D' => 'clickableButton()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Testing: which Crawler method extracts multiple attributes from matched nodes?',
        'answers' => [
            'A' => 'extract()',
            'B' => 'getAttributes()',
            'C' => 'attributes()',
            'D' => 'pluck()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Architecture: which EventSubscriberInterface method returns subscribed events?',
        'answers' => [
            'A' => 'getSubscribedEvents()',
            'B' => 'subscribe()',
            'C' => 'getEvents()',
            'D' => 'subscribeToEvents()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/event_dispatcher.rst',
    ],
    [
        'text' => 'Architecture: which formats can getSubscribedEvents() return?',
        'answers' => [
            'A' => 'Array with event name as key and method name as value',
            'B' => 'Array with event name as key and array [method, priority] as value',
            'C' => 'Array with event name as key and array of [method, priority] arrays as value',
            'D' => 'Array of event names only',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'sf-doc/event_dispatcher.rst',
    ],
    [
        'text' => 'Architecture: which event has the highest priority value?',
        'answers' => [
            'A' => 'Events with positive numbers execute first',
            'B' => 'Events with negative numbers execute first',
            'C' => 'Events with zero execute first',
            'D' => 'Priority does not affect order',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/event_dispatcher.rst',
    ],
    [
        'text' => 'Controllers: which Request method retrieves the client IP address?',
        'answers' => [
            'A' => 'getClientIp()',
            'B' => 'getIpAddress()',
            'C' => 'getRemoteAddr()',
            'D' => 'getClientAddress()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Request method returns the request method (GET, POST, etc.)?',
        'answers' => [
            'A' => 'getMethod()',
            'B' => 'getHttpMethod()',
            'C' => 'getRequestMethod()',
            'D' => 'method()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Request methods check for specific HTTP methods?',
        'answers' => [
            'A' => 'isMethod()',
            'B' => 'isMethodSafe()',
            'C' => 'isMethodIdempotent()',
            'D' => 'isMethodCacheable()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Request method retrieves the preferred language?',
        'answers' => [
            'A' => 'getPreferredLanguage()',
            'B' => 'getLocale()',
            'C' => 'getLanguage()',
            'D' => 'getPreferredLocale()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Request method returns accepted content types from Accept header?',
        'answers' => [
            'A' => 'getAcceptableContentTypes()',
            'B' => 'getContentTypes()',
            'C' => 'getAcceptedTypes()',
            'D' => 'getAcceptHeader()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Response methods manage headers?',
        'answers' => [
            'A' => 'headers->set()',
            'B' => 'headers->get()',
            'C' => 'headers->has()',
            'D' => 'headers->remove()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Response method sets the Content-Type header?',
        'answers' => [
            'A' => 'headers->set("Content-Type", $value)',
            'B' => 'setContentType()',
            'C' => 'setMimeType()',
            'D' => 'contentType()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Response method sets the charset?',
        'answers' => [
            'A' => 'setCharset()',
            'B' => 'setEncoding()',
            'C' => 'charset()',
            'D' => 'headers->set("charset")',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Response method prepares the response before sending?',
        'answers' => [
            'A' => 'prepare()',
            'B' => 'finalize()',
            'C' => 'ready()',
            'D' => 'build()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Routing: which RouteCollection method adds a route?',
        'answers' => [
            'A' => 'add()',
            'B' => 'addRoute()',
            'C' => 'register()',
            'D' => 'set()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which RouteCollection methods retrieve routes?',
        'answers' => [
            'A' => 'get()',
            'B' => 'all()',
            'C' => 'getIterator()',
            'D' => 'find()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which RouteCollection method adds a prefix to all routes?',
        'answers' => [
            'A' => 'addPrefix()',
            'B' => 'prefix()',
            'C' => 'setPrefix()',
            'D' => 'prependPrefix()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which RouteCollection method adds a name prefix to all routes?',
        'answers' => [
            'A' => 'addNamePrefix()',
            'B' => 'prefixName()',
            'C' => 'setNamePrefix()',
            'D' => 'prependName()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Twig: which syntax references a template in a bundle?',
        'answers' => [
            'A' => '@BundleName/directory/template.html.twig',
            'B' => 'BundleName:directory:template.html.twig',
            'C' => 'Bundle/BundleName/directory/template.html.twig',
            'D' => '#BundleName/directory/template.html.twig',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which syntax adds a template namespace?',
        'answers' => [
            'A' => '@namespace_name/template.html.twig',
            'B' => 'namespace:template.html.twig',
            'C' => 'namespace_name::template.html.twig',
            'D' => '#namespace_name/template.html.twig',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which Twig tag embeds a controller result?',
        'answers' => [
            'A' => 'No tag, use render() function',
            'B' => '{% render %}',
            'C' => '{% controller %}',
            'D' => '{% embed_controller %}',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which syntax defines a block without content?',
        'answers' => [
            'A' => '{% block name %}{% endblock %}',
            'B' => '{% block name / %}',
            'C' => '{% empty_block name %}',
            'D' => '{% block name empty %}',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which function checks if a block is defined?',
        'answers' => [
            'A' => 'block() returns empty string if not defined',
            'B' => 'block_exists()',
            'C' => 'is_block_defined()',
            'D' => 'has_block()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which syntax prevents template inheritance?',
        'answers' => [
            'A' => 'Do not use extends tag',
            'B' => '{% no_extends %}',
            'C' => '{% standalone %}',
            'D' => '{% isolated %}',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Forms: which form view variables are available in Twig templates?',
        'answers' => [
            'A' => 'form.vars.value',
            'B' => 'form.vars.errors',
            'C' => 'form.vars.attr',
            'D' => 'form.vars.label',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which form view variable contains the form name?',
        'answers' => [
            'A' => 'form.vars.name',
            'B' => 'form.vars.id',
            'C' => 'form.name',
            'D' => 'form.vars.full_name',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which form view variable contains validation errors?',
        'answers' => [
            'A' => 'form.vars.errors',
            'B' => 'form.errors',
            'C' => 'form.vars.violations',
            'D' => 'form.validation_errors',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which form view variable indicates if the form is submitted?',
        'answers' => [
            'A' => 'form.vars.submitted',
            'B' => 'form.isSubmitted',
            'C' => 'form.vars.is_submitted',
            'D' => 'form.submitted',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which form view variable indicates if a form field is compound?',
        'answers' => [
            'A' => 'form.vars.compound',
            'B' => 'form.isCompound',
            'C' => 'form.vars.is_compound',
            'D' => 'form.compound',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: what does compound form field mean?',
        'answers' => [
            'A' => 'The field contains nested fields',
            'B' => 'The field has multiple values',
            'C' => 'The field uses multiple transformers',
            'D' => 'The field has multiple constraints',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Validation: which constraint targets are available?',
        'answers' => [
            'A' => 'PROPERTY_CONSTRAINT',
            'B' => 'CLASS_CONSTRAINT',
            'C' => 'METHOD_CONSTRAINT',
            'D' => 'GETTER_CONSTRAINT',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which method defines constraint targets in a custom constraint?',
        'answers' => [
            'A' => 'getTargets()',
            'B' => 'targets()',
            'C' => 'getAppliesTo()',
            'D' => 'appliesTo()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which Constraint options are available in all constraints?',
        'answers' => [
            'A' => 'message',
            'B' => 'groups',
            'C' => 'payload',
            'D' => 'priority',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which Count constraint options validate array size?',
        'answers' => [
            'A' => 'min',
            'B' => 'max',
            'C' => 'divisibleBy',
            'D' => 'exactly',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which Range constraint options define numeric boundaries?',
        'answers' => [
            'A' => 'min',
            'B' => 'max',
            'C' => 'minMessage',
            'D' => 'maxMessage',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Dependency Injection: which YAML key creates a service alias?',
        'answers' => [
            'A' => 'alias',
            'B' => 'aliasOf',
            'C' => 'parent',
            'D' => 'extends',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which interface should an alias reference implement?',
        'answers' => [
            'A' => 'The same interface as the target service',
            'B' => 'AliasInterface',
            'C' => 'ServiceAliasInterface',
            'D' => 'No specific requirement',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which YAML key marks an alias as public?',
        'answers' => [
            'A' => 'public',
            'B' => 'visible',
            'C' => 'exposed',
            'D' => 'accessible',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which YAML key defines an abstract service?',
        'answers' => [
            'A' => 'abstract',
            'B' => 'template',
            'C' => 'base',
            'D' => 'prototype',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which YAML key inherits from an abstract service?',
        'answers' => [
            'A' => 'parent',
            'B' => 'extends',
            'C' => 'inherits',
            'D' => 'base',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: can abstract services be instantiated?',
        'answers' => [
            'A' => 'No, they serve as templates only',
            'B' => 'Yes, if marked as public',
            'C' => 'Yes, using factory pattern',
            'D' => 'Yes, via service locator',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Security: which password hashing algorithms are available?',
        'answers' => [
            'A' => 'auto',
            'B' => 'bcrypt',
            'C' => 'sodium',
            'D' => 'plaintext',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: which algorithm is recommended for password hashing?',
        'answers' => [
            'A' => 'auto',
            'B' => 'bcrypt',
            'C' => 'sodium',
            'D' => 'argon2i',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: which algorithm should NOT be used in production?',
        'answers' => [
            'A' => 'plaintext',
            'B' => 'bcrypt',
            'C' => 'sodium',
            'D' => 'auto',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: which access decision strategies are available?',
        'answers' => [
            'A' => 'affirmative',
            'B' => 'consensus',
            'C' => 'unanimous',
            'D' => 'priority',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: what is the default access decision strategy?',
        'answers' => [
            'A' => 'affirmative',
            'B' => 'consensus',
            'C' => 'unanimous',
            'D' => 'priority',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: what does the affirmative strategy require?',
        'answers' => [
            'A' => 'At least one voter must grant access',
            'B' => 'All voters must grant access',
            'C' => 'Majority of voters must grant access',
            'D' => 'No voter must deny access',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: what does the unanimous strategy require?',
        'answers' => [
            'A' => 'All voters must grant access',
            'B' => 'At least one voter must grant access',
            'C' => 'No voter must abstain',
            'D' => 'Majority of voters must grant access',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'HTTP Cache: which Response method sets the Vary header?',
        'answers' => [
            'A' => 'setVary()',
            'B' => 'vary()',
            'C' => 'addVary()',
            'D' => 'headers->set("Vary")',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'HTTP Cache: what does the Vary header control?',
        'answers' => [
            'A' => 'Which request headers affect cache variations',
            'B' => 'Cache expiration time',
            'C' => 'Cache validation method',
            'D' => 'Cache storage location',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'HTTP Cache: which headers are commonly used in Vary?',
        'answers' => [
            'A' => 'Accept',
            'B' => 'Accept-Language',
            'C' => 'Accept-Encoding',
            'D' => 'Cookie',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'Console: which ProgressBar methods control the progress?',
        'answers' => [
            'A' => 'start()',
            'B' => 'advance()',
            'C' => 'setProgress()',
            'D' => 'finish()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which ProgressBar method sets the maximum steps?',
        'answers' => [
            'A' => 'setMaxSteps()',
            'B' => 'setMax()',
            'C' => 'setTotal()',
            'D' => 'maxSteps()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which ProgressBar method sets the progress message?',
        'answers' => [
            'A' => 'setMessage()',
            'B' => 'message()',
            'C' => 'setLabel()',
            'D' => 'setText()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which ProgressBar method sets the format?',
        'answers' => [
            'A' => 'setFormat()',
            'B' => 'format()',
            'C' => 'setTemplate()',
            'D' => 'setStyle()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which SymfonyStyle methods ask questions?',
        'answers' => [
            'A' => 'ask()',
            'B' => 'askHidden()',
            'C' => 'confirm()',
            'D' => 'choice()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which method asks for a password without displaying it?',
        'answers' => [
            'A' => 'askHidden()',
            'B' => 'askPassword()',
            'C' => 'askSecret()',
            'D' => 'prompt()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which method asks a yes/no confirmation?',
        'answers' => [
            'A' => 'confirm()',
            'B' => 'askConfirmation()',
            'C' => 'askYesNo()',
            'D' => 'yesNo()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Testing: which assertion checks for specific HTML selector?',
        'answers' => [
            'A' => 'assertSelectorExists()',
            'B' => 'assertSelectorNotExists()',
            'C' => 'assertSelectorTextContains()',
            'D' => 'assertSelectorTextSame()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Testing: which assertion checks response has specific header?',
        'answers' => [
            'A' => 'assertResponseHasHeader()',
            'B' => 'assertResponseHeaderSame()',
            'C' => 'assertResponseHeaderNotSame()',
            'D' => 'assertHeaderExists()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Testing: which assertion checks for form validation errors?',
        'answers' => [
            'A' => 'assertFormHasErrors()',
            'B' => 'assertNoFormErrors()',
            'C' => 'assertFormIsValid()',
            'D' => 'assertValidForm()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Configuration: which syntax references environment variables in YAML?',
        'answers' => [
            'A' => '%env(VAR_NAME)%',
            'B' => '${VAR_NAME}',
            'C' => '$env(VAR_NAME)',
            'D' => '{{VAR_NAME}}',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/configuration.rst',
    ],
    [
        'text' => 'Configuration: which env processors are available?',
        'answers' => [
            'A' => 'env(string:VAR)',
            'B' => 'env(bool:VAR)',
            'C' => 'env(int:VAR)',
            'D' => 'env(float:VAR)',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/configuration.rst',
    ],
    [
        'text' => 'Configuration: which env processor decodes JSON?',
        'answers' => [
            'A' => 'env(json:VAR)',
            'B' => 'env(decode:VAR)',
            'C' => 'env(parse_json:VAR)',
            'D' => 'env(json_decode:VAR)',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/configuration.rst',
    ],
    [
        'text' => 'Configuration: which env processor reads from a file?',
        'answers' => [
            'A' => 'env(file:VAR)',
            'B' => 'env(read:VAR)',
            'C' => 'env(file_contents:VAR)',
            'D' => 'env(load:VAR)',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/configuration.rst',
    ],
    [
        'text' => 'Serializer: which formats does the Serializer component support by default?',
        'answers' => [
            'A' => 'json',
            'B' => 'xml',
            'C' => 'csv',
            'D' => 'yaml',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/serializer.rst',
    ],
    [
        'text' => 'Serializer: which attribute controls property serialization?',
        'answers' => [
            'A' => '#[Ignore]',
            'B' => '#[SerializedName]',
            'C' => '#[Groups]',
            'D' => '#[MaxDepth]',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/serializer.rst',
    ],
    [
        'text' => 'Serializer: which normalizer converts DateTime objects?',
        'answers' => [
            'A' => 'DateTimeNormalizer',
            'B' => 'DateNormalizer',
            'C' => 'TimeNormalizer',
            'D' => 'DateTimeFormatNormalizer',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/serializer.rst',
    ],
    [
        'text' => 'Messenger: which interface must a message implement?',
        'answers' => [
            'A' => 'No specific interface required',
            'B' => 'MessageInterface',
            'C' => 'MessengerInterface',
            'D' => 'AsyncMessageInterface',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/messenger.rst',
    ],
    [
        'text' => 'Messenger: which attribute marks a message handler?',
        'answers' => [
            'A' => '#[AsMessageHandler]',
            'B' => '#[MessageHandler]',
            'C' => '#[Handler]',
            'D' => '#[HandlesMessage]',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/messenger.rst',
    ],
    [
        'text' => 'Messenger: which method must a message handler implement?',
        'answers' => [
            'A' => '__invoke()',
            'B' => 'handle()',
            'C' => 'execute()',
            'D' => 'process()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/messenger.rst',
    ],
    [
        'text' => 'Messenger: which MessageBusInterface method dispatches a message?',
        'answers' => [
            'A' => 'dispatch()',
            'B' => 'send()',
            'C' => 'publish()',
            'D' => 'emit()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/messenger.rst',
    ],
    [
        'text' => 'Architecture: which HttpKernelInterface constant creates a sub-request?',
        'answers' => [
            'A' => 'HttpKernelInterface::SUB_REQUEST',
            'B' => 'HttpKernelInterface::CHILD_REQUEST',
            'C' => 'HttpKernelInterface::INTERNAL_REQUEST',
            'D' => 'HttpKernelInterface::NESTED_REQUEST',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/components/http_kernel.rst',
    ],
    [
        'text' => 'Architecture: which HttpKernelInterface constant represents the main request?',
        'answers' => [
            'A' => 'HttpKernelInterface::MAIN_REQUEST',
            'B' => 'HttpKernelInterface::MASTER_REQUEST',
            'C' => 'HttpKernelInterface::PRIMARY_REQUEST',
            'D' => 'HttpKernelInterface::ROOT_REQUEST',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/components/http_kernel.rst',
    ],
    [
        'text' => 'Controllers: which Request method returns the request format?',
        'answers' => [
            'A' => 'getRequestFormat()',
            'B' => 'getFormat()',
            'C' => 'getContentFormat()',
            'D' => 'format()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Request method sets the request format?',
        'answers' => [
            'A' => 'setRequestFormat()',
            'B' => 'setFormat()',
            'C' => 'format()',
            'D' => 'setContentFormat()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Request method gets format from MIME type?',
        'answers' => [
            'A' => 'getFormat()',
            'B' => 'getMimeType()',
            'C' => 'formatFromMime()',
            'D' => 'mimeToFormat()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which Request method gets MIME types for a format?',
        'answers' => [
            'A' => 'getMimeTypes()',
            'B' => 'getFormatMimeTypes()',
            'C' => 'mimeTypes()',
            'D' => 'formatMimeTypes()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which ResponseHeaderBag method creates Content-Disposition header?',
        'answers' => [
            'A' => 'makeDisposition()',
            'B' => 'setDisposition()',
            'C' => 'createDisposition()',
            'D' => 'disposition()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which disposition types are available in ResponseHeaderBag?',
        'answers' => [
            'A' => 'ResponseHeaderBag::DISPOSITION_ATTACHMENT',
            'B' => 'ResponseHeaderBag::DISPOSITION_INLINE',
            'C' => 'ResponseHeaderBag::DISPOSITION_FORM_DATA',
            'D' => 'ResponseHeaderBag::DISPOSITION_DOWNLOAD',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which JsonResponse method sets the data?',
        'answers' => [
            'A' => 'setData()',
            'B' => 'setJson()',
            'C' => 'setContent()',
            'D' => 'data()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which JsonResponse options control encoding?',
        'answers' => [
            'A' => 'JSON_HEX_TAG',
            'B' => 'JSON_HEX_APOS',
            'C' => 'JSON_HEX_AMP',
            'D' => 'JSON_HEX_QUOT',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which JsonResponse method sets encoding options?',
        'answers' => [
            'A' => 'setEncodingOptions()',
            'B' => 'setJsonOptions()',
            'C' => 'setOptions()',
            'D' => 'jsonOptions()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which RedirectResponse method sets the target URL?',
        'answers' => [
            'A' => 'setTargetUrl()',
            'B' => 'setUrl()',
            'C' => 'setLocation()',
            'D' => 'redirect()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Controllers: which RedirectResponse method returns the target URL?',
        'answers' => [
            'A' => 'getTargetUrl()',
            'B' => 'getUrl()',
            'C' => 'getLocation()',
            'D' => 'targetUrl()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => 'Routing: which Route option sets the path?',
        'answers' => [
            'A' => 'path',
            'B' => 'route',
            'C' => 'url',
            'D' => 'pattern',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which Route method sets defaults?',
        'answers' => [
            'A' => 'setDefaults()',
            'B' => 'setDefault()',
            'C' => 'addDefaults()',
            'D' => 'defaults()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which Route method sets requirements?',
        'answers' => [
            'A' => 'setRequirements()',
            'B' => 'setRequirement()',
            'C' => 'addRequirements()',
            'D' => 'requirements()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which Route method sets options?',
        'answers' => [
            'A' => 'setOptions()',
            'B' => 'setOption()',
            'C' => 'addOptions()',
            'D' => 'options()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which Route method sets the host?',
        'answers' => [
            'A' => 'setHost()',
            'B' => 'host()',
            'C' => 'setDomain()',
            'D' => 'domain()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which RouterInterface method matches a request?',
        'answers' => [
            'A' => 'matchRequest()',
            'B' => 'match()',
            'C' => 'findRoute()',
            'D' => 'resolve()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which exception is thrown when no route matches?',
        'answers' => [
            'A' => 'ResourceNotFoundException',
            'B' => 'RouteNotFoundException',
            'C' => 'NoMatchException',
            'D' => 'RoutingException',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Routing: which exception is thrown when HTTP method is not allowed?',
        'answers' => [
            'A' => 'MethodNotAllowedException',
            'B' => 'InvalidMethodException',
            'C' => 'HttpMethodException',
            'D' => 'NotAllowedException',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => 'Twig: which interface must a Twig extension implement?',
        'answers' => [
            'A' => 'ExtensionInterface',
            'B' => 'TwigExtensionInterface',
            'C' => 'Extension',
            'D' => 'TwigExtension',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which class should a Twig extension extend?',
        'answers' => [
            'A' => 'AbstractExtension',
            'B' => 'Extension',
            'C' => 'BaseExtension',
            'D' => 'TwigExtension',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which extension methods register custom features?',
        'answers' => [
            'A' => 'getFilters()',
            'B' => 'getFunctions()',
            'C' => 'getTests()',
            'D' => 'getOperators()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which function returns the parent template name?',
        'answers' => [
            'A' => 'No such function exists',
            'B' => 'parent_template()',
            'C' => 'get_parent()',
            'D' => 'template_parent()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which syntax includes a template?',
        'answers' => [
            'A' => '{% include %}',
            'B' => '{% import %}',
            'C' => '{% use %}',
            'D' => '{% embed %}',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: which syntax imports macros?',
        'answers' => [
            'A' => '{% import %}',
            'B' => '{% from %}',
            'C' => '{% use %}',
            'D' => '{% include %}',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Forms: which FormInterface method adds a child form?',
        'answers' => [
            'A' => 'add()',
            'B' => 'addChild()',
            'C' => 'addForm()',
            'D' => 'appendChild()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which FormInterface method removes a child form?',
        'answers' => [
            'A' => 'remove()',
            'B' => 'removeChild()',
            'C' => 'delete()',
            'D' => 'removeForm()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which FormInterface method checks if a child exists?',
        'answers' => [
            'A' => 'has()',
            'B' => 'hasChild()',
            'C' => 'contains()',
            'D' => 'exists()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which FormInterface method retrieves a child form?',
        'answers' => [
            'A' => 'get()',
            'B' => 'getChild()',
            'C' => 'child()',
            'D' => 'find()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which FormInterface method returns all children?',
        'answers' => [
            'A' => 'all()',
            'B' => 'getChildren()',
            'C' => 'children()',
            'D' => 'getAll()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which FormInterface method checks if form is valid?',
        'answers' => [
            'A' => 'isValid()',
            'B' => 'valid()',
            'C' => 'hasErrors()',
            'D' => 'validate()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which FormInterface method returns form errors?',
        'answers' => [
            'A' => 'getErrors()',
            'B' => 'errors()',
            'C' => 'getViolations()',
            'D' => 'violations()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Forms: which FormInterface method creates the form view?',
        'answers' => [
            'A' => 'createView()',
            'B' => 'getView()',
            'C' => 'view()',
            'D' => 'toView()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => 'Validation: which ValidatorInterface method validates a value?',
        'answers' => [
            'A' => 'validate()',
            'B' => 'check()',
            'C' => 'verify()',
            'D' => 'assert()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which ValidatorInterface method validates a property?',
        'answers' => [
            'A' => 'validateProperty()',
            'B' => 'validatePropertyValue()',
            'C' => 'checkProperty()',
            'D' => 'verifyProperty()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which method returns ConstraintViolationListInterface?',
        'answers' => [
            'A' => 'validate()',
            'B' => 'validateProperty()',
            'C' => 'validatePropertyValue()',
            'D' => 'getViolations()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which class must a constraint validator extend?',
        'answers' => [
            'A' => 'ConstraintValidator',
            'B' => 'AbstractConstraintValidator',
            'C' => 'BaseValidator',
            'D' => 'Validator',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which method must a constraint validator implement?',
        'answers' => [
            'A' => 'validate()',
            'B' => 'check()',
            'C' => 'verify()',
            'D' => 'assert()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Validation: which ExecutionContextInterface method adds a violation?',
        'answers' => [
            'A' => 'buildViolation()',
            'B' => 'addViolation()',
            'C' => 'violation()',
            'D' => 'createViolation()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => 'Dependency Injection: which ContainerInterface method retrieves a service?',
        'answers' => [
            'A' => 'get()',
            'B' => 'getService()',
            'C' => 'service()',
            'D' => 'retrieve()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which ContainerInterface method checks if service exists?',
        'answers' => [
            'A' => 'has()',
            'B' => 'exists()',
            'C' => 'hasService()',
            'D' => 'contains()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which exception is thrown for missing service?',
        'answers' => [
            'A' => 'ServiceNotFoundException',
            'B' => 'MissingServiceException',
            'C' => 'ContainerException',
            'D' => 'NotFoundException',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which interface must a compiler pass implement?',
        'answers' => [
            'A' => 'CompilerPassInterface',
            'B' => 'PassInterface',
            'C' => 'ContainerPassInterface',
            'D' => 'BuildPassInterface',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which method must a compiler pass implement?',
        'answers' => [
            'A' => 'process()',
            'B' => 'compile()',
            'C' => 'build()',
            'D' => 'execute()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Dependency Injection: which PassConfig constants set compiler pass type?',
        'answers' => [
            'A' => 'PassConfig::TYPE_BEFORE_OPTIMIZATION',
            'B' => 'PassConfig::TYPE_OPTIMIZE',
            'C' => 'PassConfig::TYPE_BEFORE_REMOVING',
            'D' => 'PassConfig::TYPE_REMOVE',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
            2 => 'C',
            3 => 'D',
        ],
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => 'Security: which attribute configures firewall for a controller?',
        'answers' => [
            'A' => 'No attribute exists for this',
            'B' => '#[Firewall]',
            'C' => '#[Security]',
            'D' => '#[IsGranted]',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: which security.yaml key defines firewalls?',
        'answers' => [
            'A' => 'firewalls',
            'B' => 'firewall',
            'C' => 'security_firewalls',
            'D' => 'access_control',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: which firewall option makes it stateless?',
        'answers' => [
            'A' => 'stateless',
            'B' => 'session',
            'C' => 'remember_me',
            'D' => 'lazy',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: which UserInterface method returns the username?',
        'answers' => [
            'A' => 'getUserIdentifier()',
            'B' => 'getUsername()',
            'C' => 'getIdentifier()',
            'D' => 'getId()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: which UserInterface method returns user roles?',
        'answers' => [
            'A' => 'getRoles()',
            'B' => 'roles()',
            'C' => 'getUserRoles()',
            'D' => 'getAuthorities()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'Security: which UserInterface method erases credentials?',
        'answers' => [
            'A' => 'eraseCredentials()',
            'B' => 'clearCredentials()',
            'C' => 'removeCredentials()',
            'D' => 'resetCredentials()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => 'HTTP Cache: which Response method sets cache as private?',
        'answers' => [
            'A' => 'setPrivate()',
            'B' => 'private()',
            'C' => 'setCachePrivate()',
            'D' => 'makePrivate()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'HTTP Cache: which Response method sets s-maxage?',
        'answers' => [
            'A' => 'setSharedMaxAge()',
            'B' => 'setSMaxAge()',
            'C' => 'setProxyMaxAge()',
            'D' => 'sharedMaxAge()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'HTTP Cache: which Response method marks response as immutable?',
        'answers' => [
            'A' => 'setImmutable()',
            'B' => 'immutable()',
            'C' => 'makeImmutable()',
            'D' => 'setCacheImmutable()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'HTTP Cache: which Response method sets ETag?',
        'answers' => [
            'A' => 'setEtag()',
            'B' => 'etag()',
            'C' => 'setEntityTag()',
            'D' => 'entityTag()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'HTTP Cache: which Response method sets Last-Modified?',
        'answers' => [
            'A' => 'setLastModified()',
            'B' => 'lastModified()',
            'C' => 'setModified()',
            'D' => 'modified()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'HTTP Cache: which Request method returns If-None-Match header?',
        'answers' => [
            'A' => 'getETags()',
            'B' => 'getIfNoneMatch()',
            'C' => 'getETag()',
            'D' => 'ifNoneMatch()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'HTTP Cache: which Request method returns If-Modified-Since header?',
        'answers' => [
            'A' => 'headers->get("If-Modified-Since")',
            'B' => 'getIfModifiedSince()',
            'C' => 'ifModifiedSince()',
            'D' => 'getModifiedSince()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => 'Console: which attribute registers a console command?',
        'answers' => [
            'A' => '#[AsCommand]',
            'B' => '#[Command]',
            'C' => '#[Console]',
            'D' => '#[ConsoleCommand]',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which Command method sets the command name?',
        'answers' => [
            'A' => 'setName()',
            'B' => 'name()',
            'C' => 'setCommandName()',
            'D' => 'commandName()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which Command method sets the description?',
        'answers' => [
            'A' => 'setDescription()',
            'B' => 'description()',
            'C' => 'setHelp()',
            'D' => 'help()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which Command method sets the help text?',
        'answers' => [
            'A' => 'setHelp()',
            'B' => 'help()',
            'C' => 'setDescription()',
            'D' => 'setHelpText()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which Command method adds an argument?',
        'answers' => [
            'A' => 'addArgument()',
            'B' => 'argument()',
            'C' => 'setArgument()',
            'D' => 'defineArgument()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which Command method adds an option?',
        'answers' => [
            'A' => 'addOption()',
            'B' => 'option()',
            'C' => 'setOption()',
            'D' => 'defineOption()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which InputArgument mode makes it required?',
        'answers' => [
            'A' => 'InputArgument::REQUIRED',
            'B' => 'InputArgument::MANDATORY',
            'C' => 'InputArgument::NEEDED',
            'D' => 'InputArgument::MUST',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which InputOption mode requires a value?',
        'answers' => [
            'A' => 'InputOption::VALUE_REQUIRED',
            'B' => 'InputOption::REQUIRED',
            'C' => 'InputOption::MUST_HAVE_VALUE',
            'D' => 'InputOption::NEEDS_VALUE',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which InputOption mode makes value optional?',
        'answers' => [
            'A' => 'InputOption::VALUE_OPTIONAL',
            'B' => 'InputOption::OPTIONAL',
            'C' => 'InputOption::MAY_HAVE_VALUE',
            'D' => 'InputOption::CAN_HAVE_VALUE',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Console: which InputOption mode creates a flag?',
        'answers' => [
            'A' => 'InputOption::VALUE_NONE',
            'B' => 'InputOption::NO_VALUE',
            'C' => 'InputOption::FLAG',
            'D' => 'InputOption::BOOLEAN',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => 'Testing: which Client method follows redirects?',
        'answers' => [
            'A' => 'followRedirects()',
            'B' => 'followRedirect()',
            'C' => 'setFollowRedirects()',
            'D' => 'autoRedirect()',
        ],
        'correctAnswers' => [
            0 => 'A',
            1 => 'B',
        ],
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Testing: which Client method gets the response?',
        'answers' => [
            'A' => 'getResponse()',
            'B' => 'response()',
            'C' => 'getLastResponse()',
            'D' => 'lastResponse()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Testing: which Client method gets the crawler?',
        'answers' => [
            'A' => 'getCrawler()',
            'B' => 'crawler()',
            'C' => 'getLastCrawler()',
            'D' => 'dom()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Testing: which Client method gets internal request?',
        'answers' => [
            'A' => 'getInternalRequest()',
            'B' => 'getRequest()',
            'C' => 'request()',
            'D' => 'internalRequest()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Testing: which Crawler method filters by CSS selector?',
        'answers' => [
            'A' => 'filter()',
            'B' => 'filterCss()',
            'C' => 'css()',
            'D' => 'select()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Testing: which Crawler method filters by XPath?',
        'answers' => [
            'A' => 'filterXPath()',
            'B' => 'xpath()',
            'C' => 'filterByXPath()',
            'D' => 'xpathFilter()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Testing: which Crawler method returns element text?',
        'answers' => [
            'A' => 'text()',
            'B' => 'getText()',
            'C' => 'content()',
            'D' => 'innerText()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Testing: which Crawler method returns element HTML?',
        'answers' => [
            'A' => 'html()',
            'B' => 'getHtml()',
            'C' => 'outerHtml()',
            'D' => 'innerHTML()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => 'Testing: which Crawler method returns an attribute value?',
        'answers' => [
            'A' => 'attr()',
            'B' => 'attribute()',
            'C' => 'getAttribute()',
            'D' => 'get()',
        ],
        'correctAnswers' => [
            0 => 'A',
        ],
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
];
