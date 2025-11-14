<?php

return [
    // Symfony Architecture
    [
        'text' => "Symfony Flex: which command triggers the recipe to automatically install and configure a package that has one?",
        'answers' => [
            'A' => 'composer require vendor/package',
            'B' => 'symfony recipe install vendor/package',
            'C' => 'bin/console flex:install vendor/package',
            'D' => 'composer symfony:install vendor/package',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/setup.rst',
    ],
    [
        'text' => "What is Symfony's backward compatibility (BC) promise for public component APIs?",
        'answers' => [
            'A' => 'No promise; APIs can change in any minor',
            'B' => 'BC guaranteed in patches, possible breaks in minors, no guarantee in majors',
            'C' => 'BC guaranteed in minors, possible breaks only in majors',
            'D' => 'BC guaranteed only for official bundles, not for components',
        ],
        'correctAnswers' => 'C',
        'linkAtDocumentation' => 'sf-doc/contributing/community/releases.rst',
    ],

    // Controllers
    [
        'text' => "In a controller extending AbstractController, which method do you use to generate an absolute URL for a route?",
        'answers' => [
            'A' => '$this->generateUrl(\'route_name\', [], UrlGeneratorInterface::ABSOLUTE_URL)',
            'B' => '$this->url(\'route_name\', absolute: true)',
            'C' => '$this->router->absolute(\'route_name\')',
            'D' => '$this->createUrl(\'route_name\', absolute: true)',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => "Which AbstractController method redirects to a specific route with HTTP 302 by default?",
        'answers' => [
            'A' => 'redirect()',
            'B' => 'redirectToRoute()',
            'C' => 'forward()',
            'D' => 'sendRedirect()',
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => "How do you retrieve a cookie from the Request inside a controller?",
        'answers' => [
            'A' => '$request->cookies->get("name")',
            'B' => '$request->getCookie("name")',
            'C' => '$request->headers->get("Cookie-name")',
            'D' => '$request->cookie("name")',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => "Which method sets a flash message in the session when using AbstractController?",
        'answers' => [
            'A' => '$this->session()->flash("success", "ok")',
            'B' => '$this->addFlash("success", "ok")',
            'C' => '$this->flash()->add("success", "ok")',
            'D' => '$this->getSession()->addFlash("success", "ok")',
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/session.rst',
    ],
    [
        'text' => "To perform an internal forward to another controller without changing the URL, which method do you use?",
        'answers' => [
            'A' => '$this->forward()',
            'B' => '$this->redirect()',
            'C' => '$this->renderController()',
            'D' => '$this->internalRedirect()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],

    // Routing
    [
        'text' => "With PHP attributes, how do you define a route that accepts only GET and HEAD?",
        'answers' => [
            'A' => "#[Route('/post', methods: ['GET'])]",
            'B' => "#[Route('/post', methods: ['GET', 'HEAD'])]",
            'C' => "#[Route('/post', httpMethods: ['GET','HEAD'])]",
            'D' => "#[Route('/post', method: 'GET|HEAD')]",
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => "In YAML, how do you set a format requirement for a {slug} parameter to allow only lowercase letters and hyphens?",
        'answers' => [
            'A' => "requirements: { slug: '[a-z-]+' }",
            'B' => "assert: { slug: '[a-z-]+' }",
            'C' => "requirements: { slug: '[a-z\\-]+' }",
            'D' => "where: { slug: '[a-z-]+' }",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => "Which route option do you use for domain (host) matching in YAML?",
        'answers' => [
            'A' => 'domain',
            'B' => 'host',
            'C' => 'authority',
            'D' => 'vhost',
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => "How do you define a request condition (ExpressionLanguage) for matching a route?",
        'answers' => [
            'A' => "condition: 'request.isXmlHttpRequest()'",
            'B' => "where: 'request.xhr'",
            'C' => "if: 'request.method == \'POST\''",
            'D' => "guard: 'is_granted(\'ROLE_USER\')'",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => "Which special route attribute allows handling localization via a URL parameter?",
        'answers' => [
            'A' => '_format',
            'B' => '_locale',
            'C' => '_controller',
            'D' => '_route',
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => "Which command do you use to debug the available routes?",
        'answers' => [
            'A' => 'bin/console debug:container --route',
            'B' => 'bin/console router:debug',
            'C' => 'bin/console debug:router',
            'D' => 'bin/console route:list',
        ],
        'correctAnswers' => 'C',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],

    // Twig
    [
        'text' => "Which Twig function generates an absolute URL for a route?",
        'answers' => [
            'A' => "url('route_name', {id: 10})",
            'B' => "path('route_name', {id: 10})",
            'C' => "link('route_name', {id: 10}, true)",
            'D' => "absolute_url('route_name', {id: 10})",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => "Which Twig filter do you use to bypass auto-escaping for a safe string?",
        'answers' => [
            'A' => 'noescape',
            'B' => 'raw',
            'C' => 'safe',
            'D' => 'escape(false)',
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => "How do you include a template while passing variables in Twig?",
        'answers' => [
            'A' => "{{ include('partial.html.twig', {foo: 'bar'}) }}",
            'B' => "{% include 'partial.html.twig' with {'foo': 'bar'} only %}",
            'C' => "{{ render('partial.html.twig', {foo: 'bar'}) }}",
            'D' => "{% import 'partial.html.twig' as foo with {'foo':'bar'} %}",
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => "Which Twig function renders the output of a controller (fragment rendering)?",
        'answers' => [
            'A' => "{{ controller('App\\Controller\\DefaultController::sidebar') }}",
            'B' => "{{ render(controller('App\\Controller\\DefaultController::sidebar')) }}",
            'C' => "{{ render_path('route_name') }}",
            'D' => "{{ path_render('route_name') }}",
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => "Which Twig function uses the Translation component to translate a string with variables and domain?",
        'answers' => [
            'A' => "{{ trans('message', { '%name%': name }, 'admin') }}",
            'B' => "{{ translate('message', { '%name%': name }, 'admin') }}",
            'C' => "{{ t('message', domain='admin', vars={'%name%': name}) }}",
            'D' => "{{ i18n('message', { '%name%': name }, 'admin') }}",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/translation.rst',
    ],

    // Forms
    [
        'text' => "Which sequence correctly checks submission and validity of a form in a controller?",
        'answers' => [
            'A' => '$form->isValid() && $form->isSubmitted()',
            'B' => '$form->submit($request) && $form->isValid()',
            'C' => '$form->handleRequest($request); if ($form->isSubmitted() && $form->isValid()) {...}',
            'D' => '$form->bind($request); if ($form->isValid()) {...}',
        ],
        'correctAnswers' => 'C',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => "How do you enable CSRF protection for forms in Symfony?",
        'answers' => [
            'A' => 'It is enabled by default for forms that extend FormTypeInterface',
            'B' => 'By adding the _csrf field in the form',
            'C' => 'By setting csrf_protection: true in the form or globally',
            'D' => 'By manually registering CsrfTokenManager in the container',
        ],
        'correctAnswers' => 'A,C',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => "Which form event is most suitable to normalize data right after submit and before final validation?",
        'answers' => [
            'A' => 'FormEvents::PRE_SUBMIT',
            'B' => 'FormEvents::SUBMIT',
            'C' => 'FormEvents::POST_SUBMIT',
            'D' => 'FormEvents::PRE_SET_DATA',
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => "Which Form Type do you use to upload a single file and how do you access the UploadedFile object?",
        'answers' => [
            'A' => 'FileType; $form["file"]->getData() returns UploadedFile',
            'B' => 'UploadType; $form->getFile()',
            'C' => 'InputFileType; $request->files->get("file")',
            'D' => 'BinaryType; $form->getSubmittedFile()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => "How do you apply a specific Twig form theme for a single form within a template?",
        'answers' => [
            'A' => "{% form_theme form 'bootstrap_5_layout.html.twig' %}",
            'B' => "{{ form_theme(form, 'bootstrap_5_layout.html.twig') }}",
            'C' => "{% use_form_theme form 'bootstrap_5_layout.html.twig' %}",
            'D' => "{% form_theme 'bootstrap_5_layout.html.twig' for form %}",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],

    // Validation
    [
        'text' => "How do you define multiple validation groups via PHP attributes on a property?",
        'answers' => [
            'A' => "#[Assert\NotBlank(groups: ['Default','registration'])]",
            'B' => "#[Groups(['Default','registration'])]",
            'C' => "#[Assert\Group(['Default','registration'])]",
            'D' => "#[Assert\NotBlank(groupSequence: ['Default','registration'])]",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => "How do you define a custom GroupSequence at the class level?",
        'answers' => [
            'A' => "#[Assert\GroupSequence(['User','Strict'])]",
            'B' => "#[Assert\GroupSequenceProvider(groups: ['User','Strict'])]",
            'C' => "#[Assert\Sequence(['User','Strict'])]",
            'D' => "#[Assert\Groups(['User','Strict'])]",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => "What is the correct method to add a manual violation in the Validator inside a Callback?",
        'answers' => [
            'A' => '$context->buildViolation("msg")->addViolation()',
            'B' => '$context->addViolation("msg")',
            'C' => '$context->violate("msg")',
            'D' => '$validator->addViolation("msg")',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => "Which constraint checks that a value is unique in a Doctrine table at the entity level?",
        'answers' => [
            'A' => 'Unique',
            'B' => 'UniqueField',
            'C' => 'UniqueEntity',
            'D' => 'EntityUnique',
        ],
        'correctAnswers' => 'C',
        'linkAtDocumentation' => 'sf-doc/doctrine.rst',
    ],

    // Dependency Injection
    [
        'text' => "In services.yaml, what is the recommended default setting for service visibility?",
        'answers' => [
            'A' => 'public: true',
            'B' => 'public: false',
            'C' => 'visibility: private',
            'D' => 'public_by_default: false',
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => "How do you define a factory for a service in YAML?",
        'answers' => [
            'A' => "factory: '@app.factory.create'",
            'B' => "factory: ['@app.factory', 'create']",
            'C' => "factory_method: 'create'",
            'D' => "use_factory: app.factory:create",
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/service_container/factories.html',
    ],
    [
        'text' => "How do you register a service decorator in YAML?",
        'answers' => [
            'A' => "decorates: 'app.inner'",
            'B' => "decorates: 'app.service'",
            'C' => "decorate: 'app.service'",
            'D' => "wrapper_of: 'app.service'",
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => "Which tag must you use to register an EventSubscriber as a service?",
        'answers' => [
            'A' => 'kernel.event_listener',
            'B' => 'kernel.event_subscriber',
            'C' => 'event.subscriber',
            'D' => 'dispatcher.subscriber',
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/event_dispatcher.rst',
    ],
    [
        'text' => "Where do you add custom CompilerPass classes in a Symfony app?",
        'answers' => [
            'A' => 'In the build() method of the Kernel or Bundle',
            'B' => 'In config/services.yaml',
            'C' => 'In the composer.json file',
            'D' => 'In public/index.php',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],

    // Security
    [
        'text' => "In security.yaml, how do you define password hashers for a custom user class?",
        'answers' => [
            'A' => "password_hashers: { App\\Entity\\User: 'auto' }",
            'B' => "encoders: { App\\Entity\\User: 'bcrypt' }",
            'C' => "hashers: { App\\Entity\\User: 'auto' }",
            'D' => "password_encoders: { App\\Entity\\User: 'auto' }",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => "Which voter strategy grants access if at least one voter grants it?",
        'answers' => [
            'A' => 'affirmative',
            'B' => 'consensus',
            'C' => 'unanimous',
            'D' => 'priority',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => "In the new authentication system (Symfony 6+), which class represents the credentials and badges of a login?",
        'answers' => [
            'A' => 'Passport',
            'B' => 'TokenInterface',
            'C' => 'SecurityBadge',
            'D' => 'UserChecker',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => "How do you protect a route using a role-based access control?",
        'answers' => [
            'A' => "access_control: - { path: '^/admin', allow_if: 'has_role(\'ROLE_ADMIN\')' }",
            'B' => "access_control: - { path: '^/admin', roles: ROLE_ADMIN }",
            'C' => "access_control: - { path: '^/admin', attributes: ROLE_ADMIN }",
            'D' => "access_control: - { path: '^/admin', is_granted: ROLE_ADMIN }",
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],

    // HTTP Caching
    [
        'text' => "Which header sets shared cache for 600 seconds with revalidation?",
        'answers' => [
            'A' => "Cache-Control: max-age=600, public",
            'B' => "Cache-Control: s-maxage=600, public",
            'C' => "Cache-Control: max-age=600, private",
            'D' => "Cache-Control: s-maxage=600, private",
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => "How do you enable ESI for fragment rendering in Symfony?",
        'answers' => [
            'A' => 'By using HttpCache and activating the ESI Surrogate',
            'B' => 'By enabling twig.esi: true in config/packages/twig.yaml',
            'C' => 'By adding the EsiBundle',
            'D' => 'It is not supported in Symfony',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => "Which headers are used for conditional validation on the client side?",
        'answers' => [
            'A' => 'ETag and Last-Modified',
            'B' => 'If-None-Match and If-Modified-Since',
            'C' => 'Vary and Age',
            'D' => 'Expires and Cache-Control',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],

    // Console
    [
        'text' => "Which PHP attribute do you add on a Command class to define name and description?",
        'answers' => [
            'A' => 'AsConsole',
            'B' => 'AsCommand',
            'C' => 'ConsoleCommand',
            'D' => 'CommandName',
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => "How do you define an option with a required value in a Console command in configure()?",
        'answers' => [
            'A' => '$this->addOption(\'opt\', \'o\', InputOption::VALUE_REQUIRED)',
            'B' => '$this->addOption(\'opt\', \'o\', InputOption::REQUIRED)',
            'C' => '$this->addOption(\'opt\', \'o\')',
            'D' => '$this->addOption(\'opt\', \'o\', InputArgument::REQUIRED)',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => "Which built-in helper facilitates interactive questions to the user?",
        'answers' => [
            'A' => 'DialogHelper',
            'B' => 'QuestionHelper',
            'C' => 'AskHelper',
            'D' => 'PromptHelper',
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => "What is the increasing order of Console verbosity levels?",
        'answers' => [
            'A' => 'NORMAL < VERBOSE < VERY_VERBOSE < DEBUG',
            'B' => 'QUIET < NORMAL < VERBOSE < DEBUG',
            'C' => 'NORMAL < DEBUG < VERBOSE < VERY_VERBOSE',
            'D' => 'QUIET < NORMAL < DEBUG < VERBOSE',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],

    // Testing
    [
        'text' => "Which base class do you use for functional tests that simulate HTTP requests in Symfony?",
        'answers' => [
            'A' => 'KernelTestCase',
            'B' => 'WebTestCase',
            'C' => 'HttpClientTestCase',
            'D' => 'FunctionalTestCase',
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => "How do you get the Crawler after a GET request in the test client?",
        'answers' => [
            'A' => '$client->request(\'GET\', \'/\')->crawler',
            'B' => '$crawler = $client->request(\'GET\', \'/\')',
            'C' => '$client->getCrawler(\'GET\', \'/\')',
            'D' => '$crawler = $client->send(\'GET\', \'/\')',
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => "How do you enable the profiler in a functional test?",
        'answers' => [
            'A' => '$client->enableProfiler()',
            'B' => '$client->getProfile()->enable()',
            'C' => '$client->startProfiler()',
            'D' => '$client->debug(true)',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => "How do you access the service container in an integration test extending KernelTestCase?",
        'answers' => [
            'A' => 'static::getContainer()',
            'B' => '$this->getContainer()',
            'C' => 'self::$container',
            'D' => 'Container::getInstance()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],

    // Miscellaneous
    [
        'text' => "How do you define a default environment variable with Dotenv?",
        'answers' => [
            'A' => 'In .env: FOO=bar',
            'B' => 'In .env.local: FOO=bar',
            'C' => 'In phpunit.xml.dist as <server name="FOO" value="bar"/>',
            'D' => 'In .env.dist: FOO=bar as an example',
        ],
        'correctAnswers' => 'A,D',
        'linkAtDocumentation' => 'sf-doc/configuration.rst',
    ],
    [
        'text' => "Which Cache component adapter stores data on the filesystem?",
        'answers' => [
            'A' => 'FilesystemAdapter',
            'B' => 'ArrayAdapter',
            'C' => 'PhpFilesAdapter',
            'D' => 'DoctrineAdapter',
        ],
        'correctAnswers' => 'A,C',
        'linkAtDocumentation' => 'sf-doc/cache.rst',
    ],
    [
        'text' => "With Messenger, how do you configure dispatching commands to an AMQP queue named messages?",
        'answers' => [
            'A' => "routing: { 'App\\Message\\MyCommand': amqp } and defined amqp transport",
            'B' => "bus: command on transport: messages",
            'C' => "transports: [amqp: 'amqp://localhost/%2f/messages']",
            'D' => "middleware: amqp_queue('messages')",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/messenger.rst',
    ],
    [
        'text' => "In the Serializer component, which normalizer automatically handles objects with public getters/setters?",
        'answers' => [
            'A' => 'ObjectNormalizer',
            'B' => 'PropertyNormalizer',
            'C' => 'GetSetMethodNormalizer',
            'D' => 'SerializerNormalizer',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/serializer.rst',
    ],
    [
        'text' => "Finder: how do you select all .php files recursively while excluding the vendor directory?",
        'answers' => [
            'A' => "Finder::create()->files()->in(__DIR__)->exclude('vendor')->name('*.php')",
            'B' => "Finder::create()->files()->path('!vendor')->name('*.php')",
            'C' => "Finder::create()->files()->notIn('vendor')->name('*.php')",
            'D' => "Finder::create()->in(__DIR__)->filter('!vendor')->name('*.php')",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/finder.rst',
    ],
    [
        'text' => "Mailer: how do you send a simple email in a controller using MailerInterface?",
        'answers' => [
            'A' => '$email = (new Email())->from(\'a@b\')->to(\'c@d\')->subject(\'S\')->text(\'T\'); $mailer->send($email);',
            'B' => '$message = Swift_Message::newInstance()->setSubject(\'S\'); $mailer->send($message);',
            'C' => '$mailer->send(\'a@b\',\'c@d\',\'S\',\'T\');',
            'D' => '$mailer->mail((new Email())->to(\'c@d\'));',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/mailer.rst',
    ],
    [
        'text' => "Web Profiler: which package/bundle enables the debug toolbar in the dev environment?",
        'answers' => [
            'A' => 'symfony/profiler-bundle',
            'B' => 'symfony/web-profiler-bundle',
            'C' => 'symfony/debug-bundle',
            'D' => 'symfony/var-dumper',
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/profiler.rst',
    ],
    [
        'text' => "Lock component: which store is suitable for distributed multi-process locks?",
        'answers' => [
            'A' => 'FlockStore',
            'B' => 'SemaphoreStore',
            'C' => 'RedisStore',
            'D' => 'InMemoryStore',
        ],
        'correctAnswers' => 'C',
        'linkAtDocumentation' => 'sf-doc/lock.rst',
    ],
    [
        'text' => "HttpClient: which method sends a GET request and returns a ResponseInterface?",
        'answers' => [
            'A' => '$client->request(\'GET\', \'https://example.com\')',
            'B' => '$client->get(\'https://example.com\')',
            'C' => 'HttpClient::get(\'https://example.com\')',
            'D' => 'new Request(\'GET\',\'https://example.com\')',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/http_client.rst',
    ],
    [
        'text' => "RateLimiter: how do you create a token bucket limiter per IP via YAML configuration?",
        'answers' => [
            'A' => "framework: rate_limiter: api: policy: 'token_bucket'" ,
            'B' => "framework: rate_limiter: api: policy: 'sliding_window'",
            'C' => "framework: rate_limiter: api: policy: 'fixed_window'",
            'D' => "framework: rate_limiter: api: policy: 'bucket'",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/rate_limiter.rst',
    ],
    [
        'text' => "Scheduler: which annotation/attribute allows scheduling a command?",
        'answers' => [
            'A' => 'AsScheduledTask',
            'B' => 'Schedule',
            'C' => 'AsCommand + configuration in the Scheduler',
            'D' => 'CronTask',
        ],
        'correctAnswers' => 'C',
        'linkAtDocumentation' => 'sf-doc/scheduler.rst',
    ],
    [
        'text' => "Translation: how do you handle pluralization in Twig?",
        'answers' => [
            'A' => "{{ transchoice('msg', count) }}",
            'B' => "{{ trans({'%count%': count}, 'messages', count) }}",
            'C' => "{{ 'msg'|trans({'%count%': count}, 'messages') }}",
            'D' => "{{ 'msg'|transchoice(count) }}",
        ],
        'correctAnswers' => 'C',
        'linkAtDocumentation' => 'sf-doc/translation.rst',
    ],
    [
        'text' => "Workflow: how do you define a transition from draft to published in YAML?",
        'answers' => [
            'A' => "transitions: publish: from: draft to: published",
            'B' => "transitions: - { name: publish, from: draft, to: published }",
            'C' => "steps: publish: draft -> published",
            'D' => "edges: publish: draft > published",
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/workflow.rst',
    ],
    [
        'text' => "Routing: how do you define default values for {page} in YAML?",
        'answers' => [
            'A' => "defaults: { page: 1 }",
            'B' => "default: { page: 1 }",
            'C' => "options: { page: 1 }",
            'D' => "vars: { page: 1 }",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => "Controller: how do you return a properly typed JSON Response?",
        'answers' => [
            'A' => 'return new JsonResponse(["ok"=>true]);',
            'B' => 'return $this->json(["ok"=>true]);',
            'C' => 'return Response::json(["ok"=>true]);',
            'D' => 'return $this->response()->json(["ok"=>true]);',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/controller.rst',
    ],
    [
        'text' => "Session: what is the default key used for flash messages?",
        'answers' => [
            'A' => '_flashes',
            'B' => 'flashes',
            'C' => '_flash_bag',
            'D' => 'flash_bag',
        ],
        'correctAnswers' => 'C',
        'linkAtDocumentation' => 'sf-doc/session.rst',
    ],
    [
        'text' => "Event Dispatcher: how do you declare a listener in YAML for kernel.request with method onKernelRequest?",
        'answers' => [
            'A' => "tags: [{ name: 'kernel.event_listener', event: 'kernel.request', method: 'onKernelRequest' }]",
            'B' => "tags: [{ name: 'event.listener', event: 'kernel.request', call: 'onKernelRequest' }]",
            'C' => "listener: kernel.request@onKernelRequest",
            'D' => "subscribe: kernel.request:onKernelRequest",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/event_dispatcher.rst',
    ],
    [
        'text' => "Serializer: how do you exclude a field from serialization using attributes?",
        'answers' => [
            'A' => "#[Ignore]",
            'B' => "#[NotSerialized]",
            'C' => "#[Exclude]",
            'D' => "#[SkipSerialization]",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/serializer.rst',
    ],
    [
        'text' => "Templates: how do you pass global variables to Twig via configuration?",
        'answers' => [
            'A' => "twig: globals: foo: 'bar'",
            'B' => "twig: variables: foo: 'bar'",
            'C' => "twig: params: foo: 'bar'",
            'D' => "twig: inject: foo: 'bar'",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => "Forms: which DataTransformer do you use to convert string <-> DateTimeImmutable?",
        'answers' => [
            'A' => 'CallbackTransformer',
            'B' => 'DateTimeImmutableTransformer',
            'C' => 'DateTimeToStringTransformer',
            'D' => 'StringToDateTimeImmutableTransformer',
        ],
        'correctAnswers' => 'C',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => "Routing: how do you force HTTPS on a route?",
        'answers' => [
            'A' => "schemes: ['https']",
            'B' => "requirements: { scheme: 'https' }",
            'C' => "secure: true",
            'D' => "https_only: true",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => "Routing: how do you inject default values with localization (i18n) using attributes?",
        'answers' => [
            'A' => "#[Route(path: '/{_locale}/blog', name: 'blog', defaults: ['_locale' => 'en'], requirements: ['_locale' => 'en|fr'])]",
            'B' => "#[Route('/blog', locale: 'en|fr')]",
            'C' => "#[Route('/{locale}/blog', defaults: { locale: 'en' }, regex: { locale: 'en|fr' })]",
            'D' => "#[Route('/blog', i18n: true)]",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/routing.rst',
    ],
    [
        'text' => "Security: which method in a controller checks an authorization and throws 403 if denied?",
        'answers' => [
            'A' => '$this->denyUnlessGranted(\'EDIT\', $object)',
            'B' => '$this->denyAccessUnlessGranted(\'EDIT\', $object)',
            'C' => '$this->isGrantedOr403(\'EDIT\', $object)',
            'D' => '$this->ensureGranted(\'EDIT\', $object)',
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => "Console: which event is dispatched before a command is executed?",
        'answers' => [
            'A' => 'ConsoleEvents::START',
            'B' => 'ConsoleEvents::INIT',
            'C' => 'ConsoleEvents::COMMAND',
            'D' => 'ConsoleEvents::PRE_RUN',
        ],
        'correctAnswers' => 'C',
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => "HTTP Cache: which header tells proxies which headers to vary the cache on?",
        'answers' => [
            'A' => 'Vary',
            'B' => 'Age',
            'C' => 'Warning',
            'D' => 'Via',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => "Templating: how do you debug the contents of a variable in Twig?",
        'answers' => [
            'A' => "{{ dump(var) }}",
            'B' => "{{ dd(var) }}",
            'C' => "{% dump var %}",
            'D' => "{{ debug(var) }}",
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => "Forms: how do you extend an existing form type globally?",
        'answers' => [
            'A' => 'By creating a FormTypeExtension and tagging it with form.type_extension',
            'B' => 'By overriding the form.factory service',
            'C' => 'By extending the type class and registering it as an alias',
            'D' => 'By adding options in config/forms.yaml',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => "Validation: how do you define a callback validator at the class level with attributes?",
        'answers' => [
            'A' => "#[Assert\\Callback('validate')]",
            'B' => "#[Assert\\Callback(callback: 'validate')]",
            'C' => "#[Assert\\Validate('validate')]",
            'D' => "#[Callback('validate')]",
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => "DI: how do you define a ServiceLocator for lazy injection of heterogeneous services?",
        'answers' => [
            'A' => "@service_locator { foo: '@App\\Foo', bar: '@App\\Bar' }",
            'B' => "arguments: [!service_locator { foo: '@App\\Foo', bar: '@App\\Bar' }]",
            'C' => "arguments: [ServiceLocator(['@App\\Foo','@App\\Bar'])]",
            'D' => "use: service_locator: ['@App\\Foo','@App\\Bar']",
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => "Security: how do you hash a password for a User entity in a controller?",
        'answers' => [
            'A' => '$hashed = $passwordHasher->hashPassword($user, $plainPassword);',
            'B' => '$hashed = password_hash($plainPassword, PASSWORD_BCRYPT);',
            'C' => '$hashed = $encoder->encodePassword($user, $plainPassword);',
            'D' => '$hashed = $user->hashPassword($plainPassword);',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => "Twig: which filter merges arrays, avoiding duplicates?",
        'answers' => [
            'A' => 'merge',
            'B' => 'unique',
            'C' => 'join',
            'D' => 'combine',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => "Twig: how do you perform manual escaping in a specific context (e.g., html_attr)?",
        'answers' => [
            'A' => "{{ value|e('html_attr') }}",
            'B' => "{{ escape(value, 'attr') }}",
            'C' => "{{ value|escape_attr }}",
            'D' => "{{ value|raw('attr') }}",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => "Forms: how do you make a field not mapped to the data object?",
        'answers' => [
            'A' => "mapped: false",
            'B' => "standalone: true",
            'C' => "unbind: true",
            'D' => "detached: false",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => "Validation: how do you apply a constraint to each element of an array property?",
        'answers' => [
            'A' => "#[Assert\\All(new Assert\\Email())]",
            'B' => "#[Assert\\Each(new Assert\\Email())]",
            'C' => "#[Assert\\CollectionOf(new Assert\\Email())]",
            'D' => "#[Assert\\Every(new Assert\\Email())]",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => "DI: how do you force autowiring for scalar types with parameter binding in services.yaml?",
        'answers' => [
            'A' => "bind: string \$env: '%env(APP_ENV)%'",
            'B' => "bind: '\$projectDir': '%kernel.project_dir%'",
            'C' => "bind: '\$dsn': '%env(resolve:MESSENGER_TRANSPORT_DSN)%'",
            'D' => "bind: 'dsn': '%env(DSN)%'",
        ],
        'correctAnswers' => 'B,C',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => "Security: how do you configure a firewall that requires form login with a custom check route?",
        'answers' => [
            'A' => "form_login: check_path: app_login",
            'B' => "form_login: login_check: app_login",
            'C' => "form_auth: check_route: app_login",
            'D' => "form_login: firewall_check: app_login",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => "HTTP Cache: how do you set Last-Modified on a Response?",
        'answers' => [
            'A' => '$response->headers->set(\'Last-Modified\', \'...\')',
            'B' => '$response->setLastModified(new \DateTimeImmutable())',
            'C' => '$response->lastModified(new \DateTimeImmutable())',
            'D' => '$response->withLastModified(new \DateTimeImmutable())',
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => "Console: how do you define an array (repeatable) argument?",
        'answers' => [
            'A' => "addArgument('names', InputArgument::IS_ARRAY)",
            'B' => "addArgument('names', InputArgument::ARRAY)",
            'C' => "addArgument('names', InputOption::IS_ARRAY)",
            'D' => "addArgument('names', InputArgument::REPEATABLE)",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => "Testing: how do you assert that a page contains a link with text 'Home'?",
        'answers' => [
            'A' => '$crawler->selectLink(\'Home\')->count() > 0',
            'B' => '$crawler->filter(\'a:contains(\\\'Home\\\')\')->count() > 0',
            'C' => '$this->assertSelectorTextContains(\'a\', \'Home\')',
            'D' => '$this->assertPageHasLink(\'Home\')',
        ],
        'correctAnswers' => 'A,C',
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => "Mailer: how do you send an email with an attachment?",
        'answers' => [
            'A' => '$email->attachFromPath(\'/path/file.pdf\'); $mailer->send($email)',
            'B' => '$email->addAttachment(\'/path/file.pdf\'); $mailer->send($email)',
            'C' => '$mailer->attach(\'/path/file.pdf\')->send($email)',
            'D' => '$email->withAttachment(\'/path/file.pdf\'); $mailer->send($email)',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/mailer.rst',
    ],
    [
        'text' => "Messenger: how do you consume messages from a defined transport?",
        'answers' => [
            'A' => 'bin/console messenger:consume',
            'B' => 'bin/console messenger:consume async',
            'C' => 'bin/console messenger:run async',
            'D' => 'bin/console consume:messenger async',
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/messenger.rst',
    ],
    [
        'text' => "Profiler: how do you get the current profile in a test after enableProfiler()?",
        'answers' => [
            'A' => '$profile = $client->getProfile()',
            'B' => '$profile = $client->getProfiler()',
            'C' => '$profile = $client->profile()',
            'D' => '$profile = $client->profiler()',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/profiler.rst',
    ],
    [
        'text' => "Twig: how do you include assets managed by Webpack Encore?",
        'answers' => [
            'A' => "{{ asset('build/app.js') }}",
            'B' => "{{ encore_entry_script_tags('app') }}",
            'C' => "{{ encore_entry_link_tags('app') }}",
            'D' => "{{ webpack_asset('app') }}",
        ],
        'correctAnswers' => 'B,C',
        'linkAtDocumentation' => 'sf-doc/frontend.rst',
    ],
    [
        'text' => "Routing: how do you generate an absolute URL in Twig for a route with parameter id=5?",
        'answers' => [
            'A' => "{{ url('route_name', {id: 5}) }}",
            'B' => "{{ path('route_name', {id: 5}) }}",
            'C' => "{{ absolute_url(path('route_name', {id: 5})) }}",
            'D' => "{{ absolute_path('route_name', {id: 5}) }}",
        ],
        'correctAnswers' => 'A,C',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => "Validation: how do you translate constraint messages?",
        'answers' => [
            'A' => 'file translations/validators.<locale>.yaml',
            'B' => 'file translations/messages.<locale>.yaml with validators domain',
            'C' => 'file translations/validation.<locale>.yaml',
            'D' => 'In the constraint with directly translated message',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => "Forms: how do you add a data-* attribute to a field in Twig?",
        'answers' => [
            'A' => "{{ form_widget(form.field, { attr: { 'data-foo': 'bar' } }) }}",
            'B' => "{{ form_row(form.field, { data: { foo: 'bar' } }) }}",
            'C' => "{{ form_attr(form.field, { 'data-foo': 'bar' }) }}",
            'D' => "{{ form_widget_attr(form.field, { 'data-foo': 'bar' }) }}",
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => "DI: how do you mark a service as public (an exception) in services.yaml?",
        'answers' => [
            'A' => 'visibility: public',
            'B' => 'public: true',
            'C' => 'shared: true',
            'D' => 'expose: true',
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => "Security: which badges might you add to a Passport?",
        'answers' => [
            'A' => 'CsrfTokenBadge',
            'B' => 'RememberMeBadge',
            'C' => 'PasswordUpgradeBadge',
            'D' => 'LoginRateLimitBadge',
        ],
        'correctAnswers' => 'A,B,D',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => "HTTP Cache: how do you set an ETag on a Response?",
        'answers' => [
            'A' => '$response->setEtag(\'abc\')',
            'B' => '$response->setETag(\'abc\')',
            'C' => '$response->headers->set(\'ETag\',\'abc\')',
            'D' => '$response->etag(\'abc\')',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => "Console: how do you access the value of a boolean --force option in execute()?",
        'answers' => [
            'A' => '$input->getOption(\'force\')',
            'B' => '$input->hasOption(\'force\')',
            'C' => '$input->getBoolean(\'force\')',
            'D' => '$io->option(\'force\')',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => "Testing: how do you assert the status code of a Response in the client?",
        'answers' => [
            'A' => '$this->assertSame(200, $client->getResponse()->getStatusCode())',
            'B' => '$this->assertResponseIsSuccessful()',
            'C' => '$this->assertStatusCode(200)',
            'D' => '$this->assertResponseStatusCodeSame(200)',
        ],
        'correctAnswers' => 'A,B,D',
        'linkAtDocumentation' => 'sf-doc/testing.rst',
    ],
    [
        'text' => "Twig: how do you iterate over an array with index?",
        'answers' => [
            'A' => "{% for i, item in items %}",
            'B' => "{% for loop.index, item in items %}",
            'C' => "{% for item in items with index %}",
            'D' => "{% for key, item in items %}",
        ],
        'correctAnswers' => 'D',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => "Twig: which filter converts an array to JSON?",
        'answers' => [
            'A' => 'json',
            'B' => 'json_encode',
            'C' => 'to_json',
            'D' => 'encode',
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => "Forms: how do you add a field in the builder that depends on the value of another (dynamic)?",
        'answers' => [
            'A' => 'Using FormEvents::PRE_SET_DATA or PRE_SUBMIT for add()',
            'B' => 'Using $form->addDynamic()',
            'C' => 'Using OptionResolver::depend()',
            'D' => 'It is not possible',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/forms.rst',
    ],
    [
        'text' => "Validation: how do you ensure that an association property is validated recursively?",
        'answers' => [
            'A' => 'Using #[Assert\\Valid]',
            'B' => 'Using #[Assert\\Cascade]',
            'C' => 'It is automatic always',
            'D' => 'Using #[Assert\\Nested] ',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/validation.rst',
    ],
    [
        'text' => "DI: how do you define a service with autowiring disabled?",
        'answers' => [
            'A' => 'autowire: false',
            'B' => 'autowiring: off',
            'C' => 'wire: false',
            'D' => 'inject: false',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/service_container.rst',
    ],
    [
        'text' => "Security: which method in UserPasswordHasherInterface verifies a plain password against a user?",
        'answers' => [
            'A' => 'isPasswordValid($user, $plainPassword)',
            'B' => 'verify($user, $plainPassword)',
            'C' => 'check($user, $plainPassword)',
            'D' => 'validate($user, $plainPassword)',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/security.rst',
    ],
    [
        'text' => "HTTP Cache: how do you disable caching for a specific Response?",
        'answers' => [
            'A' => '$response->setPrivate()',
            'B' => '$response->headers->addCacheControlDirective(\'no-cache\', true)',
            'C' => '$response->setMaxAge(0); $response->setPrivate()',
            'D' => '$response->headers->set(\'Cache-Control\',\'no-store, no-cache, must-revalidate\')',
        ],
        'correctAnswers' => 'D',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst',
    ],
    [
        'text' => "Console: how do you set detailed help on a command?",
        'answers' => [
            'A' => '$this->setHelp(\'...\')',
            'B' => "#[AsCommand(help: '...') ]",
            'C' => '$io->help(\'...\')',
            'D' => 'PHPDoc comment on the class',
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/console.rst',
    ],
    [
        'text' => "Testing: how do you access the profiler for the DB collector in a test?",
        'answers' => [
            'A' => '$profile = $client->getProfile(); $collector = $profile->getCollector(\'db\')',
            'B' => '$collector = $client->getCollector(\'db\')',
            'C' => '$collector = $profiler->db()',
            'D' => '$collector = $this->getCollector(\'db\')',
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/profiler.rst',
    ],
    [
        'text' => "Twig: how do you set template inheritance from base.html.twig?",
        'answers' => [
            'A' => "{% use 'base.html.twig' %}",
            'B' => "{% import 'base.html.twig' %}",
            'C' => "{% extends 'base.html.twig' %}",
            'D' => "{{ parent('base.html.twig') }}",
        ],
        'correctAnswers' => 'C',
        'linkAtDocumentation' => 'sf-doc/templates.rst',
    ],
    [
        'text' => 'Twig: how do you display a value with a default if null/empty?',
        'answers' => [
            'A' => '{{ value|default(\'n/a\') }}',
            'B' => '{{ value ?? \'n/a\' }}',
            'C' => '{{ value ?: \'n/a\' }}',
            'D' => '{{ value|fallback(\'n/a\') }}'
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/templates.rst'
    ],
    [
        'text' => 'Forms: how do you set a placeholder on a TextType field?',
        'answers' => [
            'A' => 'attr: { placeholder: \'...\' }',
            'B' => 'placeholder: \'...\'',
            'C' => 'html_attr: { placeholder: \'...\' }',
            'D' => 'widget_attr: { placeholder: \'...\' }'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/forms.rst'
    ],
    [
        'text' => 'Validation: what is a GroupSequenceProvider?',
        'answers' => [
            'A' => 'A translation provider for groups',
            'B' => 'An object that dynamically determines the validation order of groups',
            'C' => 'A service that merges groups at runtime',
            'D' => 'A deprecated feature'
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/validation.rst'
    ],
    [
        'text' => 'DI: how do you define a service alias?',
        'answers' => [
            'A' => 'App\\Service\\Foo: \'@App\\Service\\Bar\'',
            'B' => 'App\\Service\\Foo: alias: \'App\\Service\\Bar\'',
            'C' => 'App\\Service\\Bar: \'@App\\Service\\Foo\'',
            'D' => 'aliases: { \'App\\Service\\Foo\': \'@App\\Service\\Bar\' }'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/service_container.rst'
    ],
    [
        'text' => 'Security: which voter interface do you implement for a custom voter?',
        'answers' => [
            'A' => 'VoterInterface',
            'B' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\Voter',
            'C' => 'AuthorizationVoterInterface',
            'D' => 'SecurityVoter'
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/security.rst'
    ],
    [
        'text' => 'HTTP Cache: what is the difference between max-age and s-maxage?',
        'answers' => [
            'A' => 'max-age for client, s-maxage for shared caches',
            'B' => 's-maxage for client, max-age for proxy',
            'C' => 'They are equivalent',
            'D' => 's-maxage is deprecated'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst'
    ],
    [
        'text' => 'Console: how do you handle non-interactive input for confirmations?',
        'answers' => [
            'A' => 'Using QuestionHelper::ask with ConfirmationQuestion',
            'B' => 'Passing --no-interaction',
            'C' => 'Using $io->confirm()',
            'D' => 'It\'s not possible'
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/console.rst'
    ],
    [
        'text' => 'Testing: how do you log in a user in the test client without a form?',
        'answers' => [
            'A' => '$client->loginUser($user)',
            'B' => '$client->authenticate($user)',
            'C' => '$client->setUser($user)',
            'D' => '$client->impersonate($user)'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/testing.rst'
    ],
    [
        'text' => 'Twig: how do you conditionally include a template only if it exists?',
        'answers' => [
            'A' => '{{ include(\'partial.html.twig\', ignore_missing = true) }}',
            'B' => '{{ include(\'partial.html.twig\') ?? \'\' }}',
            'C' => '{% if template_exists(\'partial.html.twig\') %}{{ include(\'partial.html.twig\') }}{% endif %}',
            'D' => '{{ render_if_exists(\'partial.html.twig\') }}'
        ],
        'correctAnswers' => 'A,C',
        'linkAtDocumentation' => 'sf-doc/templates.rst'
    ],
    [
        'text' => 'Forms: how do you customize the form_row block of a specific type via a theme?',
        'answers' => [
            'A' => 'Redefining the _<form>_<field>_row block',
            'B' => 'Redefining the <type>_row block (e.g. text_row)',
            'C' => 'Redefining the global form_row block',
            'D' => 'It is not supported'
        ],
        'correctAnswers' => 'B,C',
        'linkAtDocumentation' => 'sf-doc/templates.rst'
    ],
    [
        'text' => 'Validation: how do you limit the groups applied through Valid?',
        'answers' => [
            'A' => '#[Assert\\Valid(groups: [\'registration\'])]',
            'B' => '#[Assert\\Valid(groupSequence: [\'registration\'])]',
            'C' => '#[Assert\\Cascade(groups: [\'registration\'])]',
            'D' => '#[Assert\\Valid(only: [\'registration\'])]'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/validation.rst'
    ],
    [
        'text' => 'DI: what does autoconfigure: true do?',
        'answers' => [
            'A' => 'Automatically makes services public',
            'B' => 'Automatically adds known tags based on interfaces/attributes',
            'C' => 'Enables cache for metadata',
            'D' => 'Registers aliases for interfaces'
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/service_container.rst'
    ],
    [
        'text' => 'Security: how do you implement a custom authenticator based on a login form?',
        'answers' => [
            'A' => 'Extending AbstractLoginFormAuthenticator',
            'B' => 'Implementing AuthenticatorInterface',
            'C' => 'Extending AbstractAuthenticator and handling supports/authenticate/onAuthenticationSuccess/onAuthenticationFailure',
            'D' => 'Using GuardAuthenticator'
        ],
        'correctAnswers' => 'A,C',
        'linkAtDocumentation' => 'sf-doc/security.rst'
    ],
    [
        'text' => 'HTTP Cache: how do you enable the built-in HttpCache reverse proxy?',
        'answers' => [
            'A' => 'Using App\\Kernel as HttpCacheKernel',
            'B' => 'Creating App\\HttpCacheKernel that extends HttpCache and a front controller for it',
            'C' => 'Setting framework.http_cache.enabled: true',
            'D' => 'Adding symfony/http-cache-bundle'
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst'
    ],
    [
        'text' => 'Console: how do you display a progress bar?',
        'answers' => [
            'A' => '$progressBar = new ProgressBar($output); $progressBar->start(); ...',
            'B' => '$io->progressStart(); ... $io->progressFinish();',
            'C' => '$io->bar()->start()',
            'D' => '$output->progress()'
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/console.rst'
    ],
    [
        'text' => 'Testing: how do you assert that a form has an error on the \'email\' field?',
        'answers' => [
            'A' => '$this->assertSelectorExists(\'#email.is-invalid\')',
            'B' => '$this->assertTrue($form->get(\'email\')->getErrors(true)->count() > 0)',
            'C' => '$this->assertFormHasError(\'email\')',
            'D' => '$this->assertResponseContains(\'email: error\')'
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/testing.rst'
    ],
    [
        'text' => 'Twig: which function builds an absolute asset URL from a relative path?',
        'answers' => [
            'A' => '{{ absolute_url(asset(\'image.png\')) }}',
            'B' => '{{ asset_absolute(\'image.png\') }}',
            'C' => '{{ url_asset(\'image.png\') }}',
            'D' => '{{ path(\'image.png\', absolute=true) }}'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/templates.rst'
    ],
    [
        'text' => 'Forms: how do you set help and help_attr on a field?',
        'answers' => [
            'A' => 'help: \'Text\'; help_attr: { class: \'small\' }',
            'B' => 'attr: { help: \'Text\', help_class: \'small\' }',
            'C' => 'helptext: \'Text\'; helpclass: \'small\'',
            'D' => 'widget_help: { text: \'Text\', attr: { class:\'small\' } }'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/forms.rst'
    ],
    [
        'text' => 'Validation: how do you define a custom message for NotBlank?',
        'answers' => [
            'A' => '#[Assert\\NotBlank(message: \'This field is required\')]',
            'B' => '#[Assert\\NotBlank(\'This field is required\')]',
            'C' => '#[Assert\\NotBlank(msg: \'This field is required\')]',
            'D' => '#[NotBlank(\'This field is required\')]'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/validation.rst'
    ],
    [
        'text' => 'DI: how do you pass the value of an env parameter to a service argument?',
        'answers' => [
            'A' => '\'%env(FOO)%\'',
            'B' => 'env(FOO)',
            'C' => '\'@env(FOO)\'',
            'D' => '\'%env(resolve:FOO)%\''
        ],
        'correctAnswers' => 'A,D',
        'linkAtDocumentation' => 'sf-doc/configuration.rst'
    ],
    [
        'text' => 'Security: how do you limit routes by role directly in a route annotation/attribute?',
        'answers' => [
            'A' => '#[IsGranted(\'ROLE_ADMIN\')] above the method',
            'B' => '#[Route(..., roles: [\'ROLE_ADMIN\'])]',
            'C' => 'condition: \'is_granted(\\\'ROLE_ADMIN\\\')\'',
            'D' => '#[DenyAccess(\'ROLE_ADMIN\')]'
        ],
        'correctAnswers' => 'A,C',
        'linkAtDocumentation' => 'sf-doc/security.rst'
    ],
    [
        'text' => 'HTTP Cache: how do you invalidate a response with ETag on the client side?',
        'answers' => [
            'A' => 'Setting a different ETag',
            'B' => 'Responding 304 if If-None-Match matches',
            'C' => 'Removing ETag',
            'D' => 'Setting Age to 0'
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst'
    ],
    [
        'text' => 'Console: how do you return a non-zero exit code from execute()?',
        'answers' => [
            'A' => 'return 1;',
            'B' => 'throw new RuntimeException()',
            'C' => 'exit(1);',
            'D' => '$output->setExitCode(1)'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/console.rst'
    ],
    [
        'text' => 'Testing: how do you assert that a JSON response has a specific property?',
        'answers' => [
            'A' => '$this->assertJsonContains([\'ok\' => true])',
            'B' => '$this->assertResponseHasJsonPath(\'ok\')',
            'C' => '$this->assertResponseFormatSame(\'json\')',
            'D' => '$this->assertResponseJsonMatchesSchema()'
        ],
        'correctAnswers' => 'A,C',
        'linkAtDocumentation' => 'sf-doc/testing.rst'
    ],
    [
        'text' => 'Twig: how do you include a partial with only the specified variables (no globals)?',
        'answers' => [
            'A' => '{{ include(\'partial.html.twig\', {a:1}, with_context = false) }}',
            'B' => '{{ include(\'partial.html.twig\', {a:1}, only = true) }}',
            'C' => '{% include \'partial.html.twig\' with {a:1} only %}',
            'D' => '{{ include_only(\'partial.html.twig\', {a:1}) }}'
        ],
        'correctAnswers' => 'C',
        'linkAtDocumentation' => 'sf-doc/templates.rst'
    ],
    [
        'text' => 'Forms: how do you create a custom type that adds a default option?',
        'answers' => [
            'A' => 'Implementing configureOptions(OptionsResolver $resolver)',
            'B' => 'Implementing setDefaults(array $options)',
            'C' => 'Redefining buildForm() and adding option',
            'D' => 'Adding @DefaultOption on the attribute'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/forms.rst'
    ],
    [
        'text' => 'Validation: how do you make a property valid only in a specific scenario (group)?',
        'answers' => [
            'A' => '#[Assert\\Length(min:3, groups:[\'registration\'])]',
            'B' => '#[Assert\\Length(min:3, when:\'registration\')]',
            'C' => '#[Assert\\Conditional(\'registration\', Length(min:3))]',
            'D' => '#[Assert\\Group(\'registration\', Length(min:3))]'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/validation.rst'
    ],
    [
        'text' => 'DI: how do you change the factory method when using a factory service?',
        'answers' => [
            'A' => 'factory_method: \'make\'',
            'B' => 'factory: [\'@factory\', \'make\']',
            'C' => 'use: factory.method=make',
            'D' => 'with: factory=\'@factory\', method=\'make\''
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/service_container.rst'
    ],
    [
        'text' => 'Security: how do you perform impersonation (switch user) in an app?',
        'answers' => [
            'A' => 'Enabling switch_user in the firewall and using _switch_user in the query',
            'B' => 'Using $security->switchUser($username)',
            'C' => 'Enabling masquerade: true in security.yaml',
            'D' => 'Using impersonate() of the token storage'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/security.rst'
    ],
    [
        'text' => 'HTTP Cache: how do you enable private cache for 120 seconds?',
        'answers' => [
            'A' => '$response->setMaxAge(120); $response->setPrivate();',
            'B' => '$response->setSharedMaxAge(120);',
            'C' => '$response->headers->set("Cache-Control","private, max-age=120")',
            'D' => '$response->setTtl(120);'
        ],
        'correctAnswers' => 'A,C',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst'
    ],
    [
        'text' => 'Console: how do you wrap typed input and output in execute() with SymfonyStyle?',
        'answers' => [
            'A' => '$io = new SymfonyStyle($input, $output)',
            'B' => '$io = SymfonyStyle::create()',
            'C' => '$io = $this->getIO()',
            'D' => '$style = new Style($input, $output)'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/console.rst'
    ],
    [
        'text' => 'Testing: how do you inspect the Location header after a redirect?',
        'answers' => [
            'A' => '$client->getResponse()->headers->get(\'Location\')',
            'B' => '$client->getRedirectUrl()',
            'C' => '$client->response()->redirectUrl()',
            'D' => '$crawler->getLocation()'
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/testing.rst'
    ],
    [
        'text' => 'Twig: how do you safely escape dynamically generated HTML attributes?',
        'answers' => [
            'A' => '{{ attribute|e(\'html_attr\') }}',
            'B' => '{{ attribute|escapeAttr }}',
            'C' => '{{ attr_escape(attribute) }}',
            'D' => '{{ attribute|raw }}'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/templates.rst'
    ],
    [
        'text' => 'Forms: which option sets an initial displayed value that is not mapped?',
        'answers' => [
            'A' => 'empty_data',
            'B' => 'data',
            'C' => 'placeholder',
            'D' => 'initial'
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/forms.rst'
    ],
    [
        'text' => 'Validation: how do you define a dynamic conditional group sequence?',
        'answers' => [
            'A' => 'Implementing GroupSequenceProviderInterface',
            'B' => 'Using #[Assert\\GroupSequenceDynamic]',
            'C' => 'Using ExpressionLanguage on GroupSequence',
            'D' => 'Not supported'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/validation.rst'
    ],
    [
        'text' => 'DI: how do you define services by folder with resource globbing?',
        'answers' => [
            'A' => 'services: _defaults: { autowire: true, autoconfigure: true } App\\: resource: \'../src/*\' exclude: \'../src/{DependencyInjection,Entity,Tests,Kernel.php}\'',
            'B' => 'resource: \'../src\' include: all',
            'C' => 'scan: \'../src/*\'',
            'D' => 'autoload: psr4: App\\: src/'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/service_container.rst'
    ],
    [
        'text' => 'Security: how do you get the current user in a controller?',
        'answers' => [
            'A' => '$this->getUser()',
            'B' => '$security->getUser()',
            'C' => '$tokenStorage->getToken()->getUser()',
            'D' => 'Request::getUser()'
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/security.rst'
    ],
    [
        'text' => 'HTTP Cache: what does Response::isNotModified(Request) do?',
        'answers' => [
            'A' => 'Compares ETag/Last-Modified with the Request and sets 304 if appropriate',
            'B' => 'Checks if the Response has expired',
            'C' => 'Verifies no-store/no-cache',
            'D' => 'Disables cache'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst'
    ],
    [
        'text' => 'Console: how do you register a command automatically without services.yaml?',
        'answers' => [
            'A' => 'With #[AsCommand] and autoconfigure',
            'B' => 'With manual console.command tag',
            'C' => 'With composer scripts',
            'D' => 'It\'s not possible'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/console.rst'
    ],
    [
        'text' => 'Testing: how do you perform a POST request with form data in the client?',
        'answers' => [
            'A' => '$client->request(\'POST\',\'/submit\', [\'name\'=>\'Fabien\'])',
            'B' => '$client->submitForm(\'Submit\', [\'name\'=>\'Fabien\'])',
            'C' => '$client->post(\'/submit\', [\'name\'=>\'Fabien\'])',
            'D' => '$client->send(\'POST\',\'/submit\',[\'name\'=>\'Fabien\'])'
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/testing.rst'
    ],
    [
        'text' => 'Twig: how do you print a variable literally without interpreting it?',
        'answers' => [
            'A' => '{% verbatim %}{{ var }}{% endverbatim %}',
            'B' => '{{ \'{{ var }}\' }}',
            'C' => '{% raw %}{{ var }}{% endraw %}',
            'D' => '{{ var|literal }}'
        ],
        'correctAnswers' => 'C',
        'linkAtDocumentation' => 'sf-doc/templates.rst'
    ],
    [
        'text' => 'Forms: how do you make a field required at the form level without a constraint?',
        'answers' => [
            'A' => 'required: true',
            'B' => 'not_blank: true',
            'C' => 'attr: { required: true }',
            'D' => 'mandatory: true'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/forms.rst'
    ],
    [
        'text' => 'Validation: how do you validate that a date is greater than today?',
        'answers' => [
            'A' => '#[Assert\\GreaterThan(\'today\')]',
            'B' => '#[Assert\\DateAfter(\'today\')]',
            'C' => '#[Assert\\GreaterThan(value: \'today\')]',
            'D' => '#[Assert\\DateGreater(\'today\')]'
        ],
        'correctAnswers' => 'A,C',
        'linkAtDocumentation' => 'sf-doc/validation.rst'
    ],
    [
        'text' => 'DI: how do you declare a non-shared (prototype) service?',
        'answers' => [
            'A' => 'scope: prototype',
            'B' => 'shared: false',
            'C' => 'prototype: true',
            'D' => 'factory_shared: false'
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/service_container.rst'
    ],
    [
        'text' => 'Security: how do you define the access decision strategy?',
        'answers' => [
            'A' => 'security: strategy: affirmative',
            'B' => 'security: access_decision_manager: strategy: affirmative',
            'C' => 'framework: security: strategy: unanimous',
            'D' => 'security: voters: strategy: consensus'
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/security.rst'
    ],
    [
        'text' => 'HTTP Cache: how do you enable ESI support in the HttpCache kernel?',
        'answers' => [
            'A' => 'Enabled by default',
            'B' => 'Override createSurrogate() to return Esi instance',
            'C' => 'Setting framework.http_cache.esi: true',
            'D' => 'Installing symfony/esi'
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst'
    ],
    [
        'text' => 'Console: how do you define synopsis and usage examples?',
        'answers' => [
            'A' => '$this->setDescription(\'...\'); $this->setHelp("Example: ...")',
            'B' => '$this->setSynopsis(\'...\')',
            'C' => '#[AsCommand(description: \'...\', help: \'Example: ...\')]',
            'D' => '$io->help(\'Example: ...\')'
        ],
        'correctAnswers' => 'A,C',
        'linkAtDocumentation' => 'sf-doc/console.rst'
    ],
    [
        'text' => 'Testing: how do you check the content of the page <title>?',
        'answers' => [
            'A' => '$this->assertSelectorTextContains(\'title\', \'Home\')',
            'B' => '$this->assertPageTitleContains(\'Home\')',
            'C' => '$this->assertSelectorExists(\'title:contains(\\\'Home\\\')\')',
            'D' => '$crawler->filter(\'title\')->text() === \'Home\''
        ],
        'correctAnswers' => 'A,B,D',
        'linkAtDocumentation' => 'sf-doc/testing.rst'
    ],
    [
        'text' => 'Twig: how do you perform an include in sandbox mode?',
        'answers' => [
            'A' => 'Enabling sandbox extension and using sandbox tag',
            'B' => 'Using include_safe()',
            'C' => 'Using sandbox_include() function',
            'D' => 'Not natively supported by Twig'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/templates.rst'
    ],
    [
        'text' => 'Forms: how do you define a CollectionType field with allow_add and allow_delete?',
        'answers' => [
            'A' => 'entry_type: TextType::class; allow_add: true; allow_delete: true',
            'B' => 'type: text; mutable: true',
            'C' => 'items: TextType; removable: true',
            'D' => 'collection: add: true, delete: true'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/forms.rst'
    ],
    [
        'text' => 'Validation: how do you customize the property path for a violation with the builder?',
        'answers' => [
            'A' => '$context->buildViolation(\'msg\')->atPath(\'email\')->addViolation()',
            'B' => '$context->buildViolation(\'msg\')->on(\'email\')->addViolation()',
            'C' => '$context->violation(\'msg\',\'email\')',
            'D' => '$context->addViolationAt(\'email\',\'msg\')'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/validation.rst'
    ],
    [
        'text' => 'DI: how do you pass a typed service locator to a constructor?',
        'answers' => [
            'A' => 'Type-hint Psr\\Container\\ContainerInterface',
            'B' => 'Type-hint ServiceProviderInterface with autowire',
            'C' => 'Type-hint ServiceLocator and bind !service_locator',
            'D' => 'Use ContainerAwareInterface'
        ],
        'correctAnswers' => 'C',
        'linkAtDocumentation' => 'sf-doc/service_container.rst'
    ],
    [
        'text' => 'Security: how do you add remember me with authenticators?',
        'answers' => [
            'A' => 'firewalls: main: remember_me: secret: \'%kernel.secret%\'',
            'B' => 'remember_me: token_provider: \'app.storage\'',
            'C' => 'Adding RememberMeBadge in the Passport',
            'D' => 'Only via manual cookie'
        ],
        'correctAnswers' => 'A,C',
        'linkAtDocumentation' => 'sf-doc/security.rst'
    ],
    [
        'text' => 'HTTP Cache: which header indicates the response generation date?',
        'answers' => [
            'A' => 'Age',
            'B' => 'Date',
            'C' => 'Expires',
            'D' => 'Last-Modified'
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst'
    ],
    [
        'text' => 'Console: how do you read hidden input (password) with the helper?',
        'answers' => [
            'A' => '$question = new Question("Password:"); $question->setHidden(true); $helper->ask(...)',
            'B' => '$helper->askHidden("Password:")',
            'C' => '$io->askHidden("Password:")',
            'D' => '$io->askQuestion(new QuestionHidden("Password"))'
        ],
        'correctAnswers' => 'A,C',
        'linkAtDocumentation' => 'sf-doc/console.rst'
    ],
    [
        'text' => 'Testing: how do you access a private service in the container during tests?',
        'answers' => [
            'A' => 'It\'s not possible',
            'B' => 'Using static::getContainer()->get()',
            'C' => 'Making it public: true in test config',
            'D' => 'Autowire in the test via constructor'
        ],
        'correctAnswers' => 'B,C',
        'linkAtDocumentation' => 'sf-doc/testing.rst'
    ],
    [
        'text' => 'Twig: how do you import macros from a file?',
        'answers' => [
            'A' => '{% import \'macros.html.twig\' as m %}',
            'B' => '{% use \'macros.html.twig\' %}',
            'C' => '{{ import(\'macros.html.twig\') }}',
            'D' => '{% from \'macros.html.twig\' import input as input_macro %}'
        ],
        'correctAnswers' => 'A,D',
        'linkAtDocumentation' => 'sf-doc/templates.rst'
    ],
    [
        'text' => 'Forms: how do you customize a field label?',
        'answers' => [
            'A' => 'label: \'Email\'',
            'B' => 'attr: { label: \'Email\' }',
            'C' => 'label_text: \'Email\'',
            'D' => 'widget_label: \'Email\''
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/forms.rst'
    ],
    [
        'text' => 'Validation: how do you define a Regex constraint with flags?',
        'answers' => [
            'A' => '#[Assert\\Regex(pattern: \'/^[a-z]+$/i\')]',
            'B' => '#[Assert\\Regex(\'/^[a-z]+$/i\')]',
            'C' => '#[Assert\\Regex(regex: \'^[a-z]+$\', flags: \'i\')]',
            'D' => '#[Assert\\Regex(pattern: \'^[a-z]+$\', options: \'i\')]'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/validation.rst'
    ],
    [
        'text' => 'DI: how do you define an autowire alias for an interface?',
        'answers' => [
            'A' => 'App\\Contract\\FooInterface: \'@App\\Service\\Foo\'',
            'B' => 'autowire: { App\\Contract\\FooInterface: \'@App\\Service\\Foo\' }',
            'C' => 'bind: \'App\\Contract\\FooInterface $foo\': \'@App\\Service\\Foo\'',
            'D' => 'alias: { \'App\\Contract\\FooInterface\': \'@App\\Service\\Foo\' }'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/service_container.rst'
    ],
    [
        'text' => 'Security: in Twig, how do you check an authorization?',
        'answers' => [
            'A' => '{% if is_granted(\'EDIT\', post) %}...{% endif %}',
            'B' => '{{ is_granted(\'EDIT\', post) ? \'ok\' : \'ko\' }}',
            'C' => '{% authorize \'EDIT\' post %}',
            'D' => '{{ granted(\'EDIT\', post) }}'
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/security.rst'
    ],
    [
        'text' => 'HTTP Cache: what does Response::setTtl() do?',
        'answers' => [
            'A' => 'Sets shared time-to-live (s-maxage)',
            'B' => 'Sets the remaining time-to-live calculated from Date',
            'C' => 'Sets Expires',
            'D' => 'Clears cache'
        ],
        'correctAnswers' => 'B',
        'linkAtDocumentation' => 'sf-doc/http_cache.rst'
    ],
    [
        'text' => 'Console: how do you handle OS signals (SIGINT) during a long-running command?',
        'answers' => [
            'A' => 'Using pcntl_signal in the command',
            'B' => 'Using SignalRegistry and addSignalListener',
            'C' => 'Not supported',
            'D' => 'Using Process component that forwards signals'
        ],
        'correctAnswers' => 'D',
        'linkAtDocumentation' => 'sf-doc/process.rst'
    ],
    [
        'text' => 'Testing: how do you simulate HTTP basic authentication in the client?',
        'answers' => [
            'A' => '$client->setServerParameter(\'PHP_AUTH_USER\',\'u\'); $client->setServerParameter(\'PHP_AUTH_PW\',\'p\')',
            'B' => '$client->authenticate(\'u\',\'p\')',
            'C' => '$client->loginBasic(\'u\',\'p\')',
            'D' => '$client->request(\'GET\',\'/\', server: [\'PHP_AUTH_USER\'=>\'u\',\'PHP_AUTH_PW\'=>\'p\'])'
        ],
        'correctAnswers' => 'A,D',
        'linkAtDocumentation' => 'sf-doc/testing.rst'
    ],
    [
        'text' => 'Twig: how do you count elements of an array?',
        'answers' => [
            'A' => '{{ items|count }}',
            'B' => '{{ count(items) }}',
            'C' => '{{ items.length }}',
            'D' => '{{ length(items) }}'
        ],
        'correctAnswers' => 'A,B,D',
        'linkAtDocumentation' => 'sf-doc/templates.rst'
    ],
    // Components: Clock
    [
        'text' => 'Clock: which ClockInterface implementations are provided out of the box?',
        'answers' => [
            'A' => 'Symfony\\Component\\Clock\\NativeClock',
            'B' => 'Symfony\\Component\\Clock\\MockClock',
            'C' => 'Symfony\\Component\\Clock\\MonotonicClock',
            'D' => 'Symfony\\Component\\Clock\\SystemClock'
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/components/clock.rst'
    ],
    [
        'text' => 'Clock: which function returns the current time as a DatePoint and accepts an optional modifier string?',
        'answers' => [
            'A' => 'now()',
            'B' => 'time()',
            'C' => 'current()',
            'D' => 'tick()'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/components/clock.rst'
    ],
    [
        'text' => 'Clock: how do you change the timezone used by a clock instance?',
        'answers' => [
            'A' => "$clock->withTimeZone('Europe/Paris')",
            'B' => "$clock->setTimezone('Europe/Paris')",
            'C' => "$clock->setTimeZone('Europe/Paris')",
            'D' => "$clock->timezone('Europe/Paris')"
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/components/clock.rst'
    ],
    [
        'text' => 'Clock: the MonotonicClock relies on which PHP function to provide a high-resolution, monotonic source of time?',
        'answers' => [
            'A' => 'hrtime()',
            'B' => 'microtime(true)',
            'C' => 'time()',
            'D' => 'gettimeofday()'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/components/clock.rst'
    ],
    // Components: Runtime
    [
        'text' => 'Runtime: which file is automatically created by the Composer plugin to bootstrap the runtime?',
        'answers' => [
            'A' => 'vendor/autoload_runtime.php',
            'B' => 'vendor/autoload.php',
            'C' => 'config/runtime.php',
            'D' => 'public/runtime.php'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/components/runtime.rst'
    ],
    [
        'text' => 'Runtime: under which Composer options will autoload_runtime.php not be created (and what version constraint applies)?',
        'answers' => [
            'A' => 'Using --no-plugins prevents its creation',
            'B' => 'Using --no-scripts requires Composer >= 2.1.3; otherwise it is not created',
            'C' => 'Using --no-dev prevents its creation',
            'D' => 'Using --classmap-authoritative prevents its creation'
        ],
        'correctAnswers' => 'A,B',
        'linkAtDocumentation' => 'sf-doc/components/runtime.rst'
    ],
    [
        'text' => 'Runtime: how do you change the Runtime class via composer.json configuration?',
        'answers' => [
            'A' => 'Set extra.runtime.class to the fully-qualified class name',
            'B' => 'Set config.runtime.class to the fully-qualified class name',
            'C' => 'Set autoload.runtime.class to the fully-qualified class name',
            'D' => 'Set extra.runtime.autoload to the fully-qualified class name'
        ],
        'correctAnswers' => 'A',
        'linkAtDocumentation' => 'sf-doc/components/runtime.rst'
    ],
    [
        'text' => 'Runtime: which arguments are supported by both SymfonyRuntime and GenericRuntime (type and variable name are important)?',
        'answers' => [
            'A' => 'array $context',
            'B' => 'array $argv',
            'C' => 'array $request',
            'D' => 'Request $request'
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/components/runtime.rst'
    ],
    [
        'text' => 'Runtime: which application return types can the SymfonyRuntime handle directly?',
        'answers' => [
            'A' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
            'B' => 'Symfony\\Component\\HttpFoundation\\Response',
            'C' => 'Symfony\\Component\\Console\\Command\\Command',
            'D' => 'Psr\\Http\\Server\\RequestHandlerInterface'
        ],
        'correctAnswers' => 'A,B,C',
        'linkAtDocumentation' => 'sf-doc/components/runtime.rst'
    ],
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
]
;