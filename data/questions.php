<?php

return [
    // 1 - Kernel
    [
        'text' => 'What is the primary role of the Symfony Kernel?',
        'answers' => [
            'A' => 'Handle HTTP requests and return responses',
            'B' => 'Serve static assets',
            'C' => 'Manage database migrations',
            'D' => 'Compile Twig templates'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which responsibilities belong to the Symfony Kernel? (multiple correct)',
        'answers' => [
            'A' => 'Handle HTTP requests and return responses',
            'B' => 'Register bundles and services',
            'C' => 'Execute background jobs natively',
            'D' => 'Bootstrap the application environment'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 2 - Routing
    [
        'text' => 'What does a route in Symfony map?',
        'answers' => [
            'A' => 'A URL pattern to a controller',
            'B' => 'A database table to an entity',
            'C' => 'A service to an interface',
            'D' => 'A console command to a user'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which features are available for Symfony routing? (multiple correct)',
        'answers' => [
            'A' => 'Route parameters',
            'B' => 'HTTP method requirements',
            'C' => 'Automatic database indexing',
            'D' => 'Host and scheme requirements'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 3 - Controllers
    [
        'text' => 'What should a Symfony controller return?',
        'answers' => [
            'A' => 'An instance of Symfony\\Component\\HttpFoundation\\Response',
            'B' => 'A raw string only',
            'C' => 'A Doctrine entity',
            'D' => 'A Composer package'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which can a controller do in Symfony? (multiple correct)',
        'answers' => [
            'A' => 'Return a Response object',
            'B' => 'Forward to another controller',
            'C' => 'Directly write to the HTTP socket without a Response',
            'D' => 'Dispatch events'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 4 - Services and Dependency Injection
    [
        'text' => 'What is a Symfony service?',
        'answers' => [
            'A' => 'An object managed by the service container',
            'B' => 'A HTTP route',
            'C' => 'A Twig template',
            'D' => 'A console command'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which statements describe Symfony services and DI? (multiple correct)',
        'answers' => [
            'A' => 'Services are defined in configuration files or PHP',
            'B' => 'The container resolves dependencies automatically when autowiring is enabled',
            'C' => 'Services must always be singletons',
            'D' => 'You can tag services to alter behavior'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 5 - Autowiring
    [
        'text' => 'What does autowiring do in Symfony?',
        'answers' => [
            'A' => 'Automatically injects service dependencies by type',
            'B' => 'Automatically generates REST endpoints',
            'C' => 'Compiles assets',
            'D' => 'Merges configuration files'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Autowiring in Symfony can be influenced by which items? (multiple correct)',
        'answers' => [
            'A' => 'Type hints in constructors',
            'B' => 'Service aliases',
            'C' => 'Routing configuration',
            'D' => 'Service tags and bindings'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 6 - Configuration
    [
        'text' => 'Which formats are supported for Symfony configuration?',
        'answers' => [
            'A' => 'YAML, XML, PHP, and INI',
            'B' => 'YAML, XML, PHP',
            'C' => 'JSON only',
            'D' => 'PHP only'
        ],
        'correctAnswers' => 'B'
    ],
    [
        'text' => 'Which configuration tasks are common in Symfony apps? (multiple correct)',
        'answers' => [
            'A' => 'Setting service defaults',
            'B' => 'Defining routes',
            'C' => 'Configuring security firewalls',
            'D' => 'Editing compiled vendor code'
        ],
        'correctAnswers' => 'A,B,C'
    ],

    // 7 - Console
    [
        'text' => 'What is the Symfony Console component used for?',
        'answers' => [
            'A' => 'Create and run CLI commands',
            'B' => 'Serve HTTP requests',
            'C' => 'Render Twig templates',
            'D' => 'Migrate databases'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Symfony console commands can provide which features? (multiple correct)',
        'answers' => [
            'A' => 'Input arguments and options',
            'B' => 'Interactive prompts',
            'C' => 'Real-time HTTP streaming',
            'D' => 'Return exit codes'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 8 - Event Dispatcher
    [
        'text' => 'What does the Event Dispatcher component do?',
        'answers' => [
            'A' => 'Dispatches events to registered listeners and subscribers',
            'B' => 'Schedules cron jobs',
            'C' => 'Manages Doctrine entities',
            'D' => 'Handles form rendering'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which are valid uses of the Event Dispatcher? (multiple correct)',
        'answers' => [
            'A' => 'Decouple components via events',
            'B' => 'Modify request or response objects during the request lifecycle',
            'C' => 'Replace the service container entirely',
            'D' => 'Implement logging hooks'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 9 - Forms
    [
        'text' => 'What is the primary purpose of the Form component?',
        'answers' => [
            'A' => 'Build, validate and process HTML forms',
            'B' => 'Store form submissions in the database automatically',
            'C' => 'Render JavaScript components',
            'D' => 'Manage user authentication'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which capabilities belong to Symfony forms? (multiple correct)',
        'answers' => [
            'A' => 'Bind data to objects',
            'B' => 'Handle CSRF protection',
            'C' => 'Automatically generate JavaScript validation only',
            'D' => 'Support custom form types'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 10 - Validation
    [
        'text' => 'What is the purpose of the Validator component?',
        'answers' => [
            'A' => 'Validate objects and values against constraints',
            'B' => 'Escape HTML to prevent XSS',
            'C' => 'Optimize database queries',
            'D' => 'Manage sessions'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which are validation features in Symfony? (multiple correct)',
        'answers' => [
            'A' => 'Built-in constraint annotations and YAML/XML definitions',
            'B' => 'Group-based validation',
            'C' => 'Automatic SQL injection prevention',
            'D' => 'Custom constraint creation'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 11 - Security
    [
        'text' => 'Which component handles authentication and authorization in Symfony?',
        'answers' => [
            'A' => 'Security',
            'B' => 'Messenger',
            'C' => 'Form',
            'D' => 'Serializer'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which concepts are part of Symfony Security? (multiple correct)',
        'answers' => [
            'A' => 'Firewalls and access control',
            'B' => 'Encoders and password hashing',
            'C' => 'Routing resolution',
            'D' => 'Voters and role hierarchy'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 12 - Sessions
    [
        'text' => 'Where does Symfony store session data by default in development?',
        'answers' => [
            'A' => 'Files on disk',
            'B' => 'A Doctrine table',
            'C' => 'Redis by default',
            'D' => 'In the service container'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which storage options are supported for Symfony sessions? (multiple correct)',
        'answers' => [
            'A' => 'Filesystem',
            'B' => 'PDO/Database',
            'C' => 'Redis/Memcached',
            'D' => 'Compile-time embedding into PHP binary'
        ],
        'correctAnswers' => 'A,B,C'
    ],

    // 13 - Cache
    [
        'text' => 'What is the Symfony Cache component used for?',
        'answers' => [
            'A' => 'Provide caching abstractions and adapters',
            'B' => 'Disable HTTP caching',
            'C' => 'Automatically clear vendor caches',
            'D' => 'Replace doctrine metadata'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which cache backends are supported by Symfony Cache? (multiple correct)',
        'answers' => [
            'A' => 'Filesystem',
            'B' => 'APCu',
            'C' => 'Redis',
            'D' => 'Automatic ESI compilation'
        ],
        'correctAnswers' => 'A,B,C'
    ],

    // 14 - HTTP Client
    [
        'text' => 'What does the Symfony HttpClient provide?',
        'answers' => [
            'A' => 'A simple and performant HTTP client abstraction',
            'B' => 'A server for hosting the application',
            'C' => 'A templating engine',
            'D' => 'A database ORM layer'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Features of Symfony HttpClient include: (multiple correct)',
        'answers' => [
            'A' => 'Synchronous and asynchronous requests',
            'B' => 'Response streaming',
            'C' => 'Automatic Doctrine hydration',
            'D' => 'Concurrent requests handling'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 15 - Serializer
    [
        'text' => 'What is the Serializer component used for?',
        'answers' => [
            'A' => 'Convert objects to/from arrays and strings (JSON, XML)',
            'B' => 'Serialize PHP sessions to disk',
            'C' => 'Compress HTTP responses',
            'D' => 'Manage form rendering'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Serializer features include: (multiple correct)',
        'answers' => [
            'A' => 'Normalization and denormalization',
            'B' => 'Groups and versioning support',
            'C' => 'Automatically encrypt payloads',
            'D' => 'Custom encoders and normalizers'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 16 - Templates / Twig
    [
        'text' => 'Which templating engine is commonly used with Symfony?',
        'answers' => [
            'A' => 'Twig',
            'B' => 'Blade',
            'C' => 'Mustache',
            'D' => 'Underscore'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Twig features include: (multiple correct)',
        'answers' => [
            'A' => 'Template inheritance',
            'B' => 'Filters and functions',
            'C' => 'Database migrations',
            'D' => 'Sandboxing for untrusted templates'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 17 - Doctrine (ORM integration)
    [
        'text' => 'What does Doctrine provide in a typical Symfony app?',
        'answers' => [
            'A' => 'An object-relational mapper (ORM)',
            'B' => 'Client-side form validation',
            'C' => 'HTTP caching middleware',
            'D' => 'A templating engine'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Doctrine features used with Symfony include: (multiple correct)',
        'answers' => [
            'A' => 'Entities and repositories',
            'B' => 'Migrations and schema management',
            'C' => 'Automatic Twig rendering',
            'D' => 'QueryBuilder and DQL'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 18 - Messenger
    [
        'text' => 'What is the Messenger component used for?',
        'answers' => [
            'A' => 'Dispatch messages to handlers, sync or async',
            'B' => 'Manage user sessions',
            'C' => 'Render forms',
            'D' => 'Perform database migrations'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Messenger supports which capabilities? (multiple correct)',
        'answers' => [
            'A' => 'Message routing and handlers',
            'B' => 'Transport adapters (e.g., AMQP, Redis)',
            'C' => 'Automatic SQL query generation for REST',
            'D' => 'Middleware and retries'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 19 - Testing
    [
        'text' => 'Which tool is recommended for functional and unit testing in Symfony?',
        'answers' => [
            'A' => 'PHPUnit',
            'B' => 'Jest',
            'C' => 'Mocha',
            'D' => 'JUnit'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Symfony testing best practices include: (multiple correct)',
        'answers' => [
            'A' => 'Use the WebTestCase for functional tests',
            'B' => 'Mock external services',
            'C' => 'Directly edit production config during tests',
            'D' => 'Isolate units with unit tests'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 20 - Profiler & Debugging
    [
        'text' => 'What is the Symfony Profiler mainly used for?',
        'answers' => [
            'A' => 'Collect debugging and performance data for requests',
            'B' => 'Compile assets',
            'C' => 'Send emails',
            'D' => 'Manage user authentication'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Profiler and debug toolbar can show: (multiple correct)',
        'answers' => [
            'A' => 'Timeline and performance data',
            'B' => 'Executed database queries',
            'C' => 'Full PHP binary contents',
            'D' => 'Logged messages and exceptions'
        ],
        'correctAnswers' => 'A,B,D'
    ],
    // 1 - PHP: Traits
    [
        'text' => 'What is the main purpose of traits in PHP?',
        'answers' => [
            'A' => 'Reuse methods across unrelated classes',
            'B' => 'Define namespaces',
            'C' => 'Declare interfaces',
            'D' => 'Provide native templating'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which capabilities are provided by PHP traits? (multiple correct)',
        'answers' => [
            'A' => 'Method reuse in multiple classes',
            'B' => 'Conflict resolution with insteadof and as',
            'C' => 'Providing entire class inheritance hierarchies',
            'D' => 'Declaring constructor signatures for interfaces'
        ],
        'correctAnswers' => 'A,B'
    ],

    // 2 - PHP: Namespaces
    [
        'text' => 'What is the purpose of namespaces in PHP?',
        'answers' => [
            'A' => 'Avoid name collisions between classes and functions',
            'B' => 'Manage composer packages',
            'C' => 'Replace autoloading',
            'D' => 'Provide templating scopes'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Namespaces in PHP help with which tasks? (multiple correct)',
        'answers' => [
            'A' => 'Organize code logically',
            'B' => 'Prevent symbol name collisions',
            'C' => 'Automatically generate docs',
            'D' => 'Simplify class aliasing with use statements'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 3 - HTTP: Content negotiation & Language detection
    [
        'text' => 'What is content negotiation in HTTP?',
        'answers' => [
            'A' => 'Selecting the best representation based on request headers',
            'B' => 'Encrypting the request payload',
            'C' => 'Redirecting all requests to a canonical URL',
            'D' => 'Caching responses only on the client'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Language detection and content negotiation can use which request headers? (multiple correct)',
        'answers' => [
            'A' => 'Accept-Language',
            'B' => 'Accept',
            'C' => 'X-CSRF-Token',
            'D' => 'Accept-Encoding'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 4 - Symfony Flex
    [
        'text' => 'What is Symfony Flex primarily used for?',
        'answers' => [
            'A' => 'Automating recipe-based project configuration and package installs',
            'B' => 'Running the development server',
            'C' => 'Generating entity migrations',
            'D' => 'Profiling application performance'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Symfony Flex provides which features? (multiple correct)',
        'answers' => [
            'A' => 'Apply recipes to configure packages',
            'B' => 'Automatically enable bundles',
            'C' => 'Replace Composer entirely',
            'D' => 'Add environment-specific configuration'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 5 - Best practices, deprecations and BC promise
    [
        'text' => 'What is the Symfony Backward Compatibility Promise (BCP)?',
        'answers' => [
            'A' => 'Contract to avoid breaking changes within major releases except for deprecations',
            'B' => 'Policy to never deprecate any feature',
            'C' => 'Automatic migration tool',
            'D' => 'A linting rule set'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which practices relate to handling deprecations and BC in Symfony? (multiple correct)',
        'answers' => [
            'A' => 'Mark behavior as deprecated before breaking it in next major',
            'B' => 'Provide migration guides',
            'C' => 'Remove deprecated features in a patch release',
            'D' => 'Log deprecations during tests'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 6 - Assets & Frontend integration
    [
        'text' => 'What is a common responsibility of asset management in Symfony apps?',
        'answers' => [
            'A' => 'Organize and reference CSS/JS assets and their digests',
            'B' => 'Execute SQL migrations',
            'C' => 'Schedule cron jobs',
            'D' => 'Handle service autowiring'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Frontend and asset management typically include: (multiple correct)',
        'answers' => [
            'A' => 'Cache busting via fingerprints',
            'B' => 'Integration with frontend build tools (Webpack, Vite)',
            'C' => 'Generating database seeders automatically',
            'D' => 'Serving assets with proper cache headers'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 7 - Translations & Intl component
    [
        'text' => 'What is the Intl component used for in Symfony?',
        'answers' => [
            'A' => 'Provide internationalization utilities (formatting numbers, dates, locales)',
            'B' => 'Automatically translate content using external APIs',
            'C' => 'Compile Twig templates for different locales',
            'D' => 'Replace the Translation component'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Translation features in Symfony include: (multiple correct)',
        'answers' => [
            'A' => 'Message catalogs and loaders',
            'B' => 'Locale-aware pluralization',
            'C' => 'Automatic runtime translation without message files',
            'D' => 'Fallback locales'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 8 - DotEnv and ExpressionLanguage
    [
        'text' => 'What is DotEnv typically used for in Symfony applications?',
        'answers' => [
            'A' => 'Load environment variables from a .env file for local development',
            'B' => 'Manage service wiring',
            'C' => 'Encrypt configuration values',
            'D' => 'Define routing rules'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'ExpressionLanguage in Symfony can be used for: (multiple correct)',
        'answers' => [
            'A' => 'Evaluate dynamic configuration expressions',
            'B' => 'Define security access control expressions',
            'C' => 'Compile Twig templates',
            'D' => 'Build complex service container parameter values'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 9 - Filesystem & Finder components
    [
        'text' => 'What is the Finder component used for?',
        'answers' => [
            'A' => 'Locate files and directories using fluent rules',
            'B' => 'Store files in a database',
            'C' => 'Serve static assets',
            'D' => 'Monitor file system events in real time'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Filesystem and Finder tasks include: (multiple correct)',
        'answers' => [
            'A' => 'Copying and removing files programmatically',
            'B' => 'Searching files by name and date',
            'C' => 'Automatically versioning files in Git',
            'D' => 'Creating directories with specific permissions'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 10 - Mailer / Mime / Notifier
    [
        'text' => 'What is the Symfony Mailer component primarily for?',
        'answers' => [
            'A' => 'Compose and send emails via different transports',
            'B' => 'Store email history in Doctrine automatically',
            'C' => 'Serve SMTP servers',
            'D' => 'Replace PSR-7 messages'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Notifier and Mailer can be used to: (multiple correct)',
        'answers' => [
            'A' => 'Send emails, SMS, and push notifications via transports',
            'B' => 'Create Mime messages with attachments',
            'C' => 'Automatically translate message content without templates',
            'D' => 'Queue notifications for async delivery'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 11 - Lock, Scheduler and Rate Limiter
    [
        'text' => 'What is the Lock component used for?',
        'answers' => [
            'A' => 'Coordinate access to shared resources across processes',
            'B' => 'Implement rate limiting for HTTP endpoints',
            'C' => 'Schedule recurring tasks',
            'D' => 'Encrypt local files'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which capabilities relate to Lock, Scheduler and Rate Limiter? (multiple correct)',
        'answers' => [
            'A' => 'Distributed locks via backends like Redis',
            'B' => 'Enforce request quotas per client',
            'C' => 'Native cron-like scheduling within Symfony core',
            'D' => 'Retry and backoff strategies for scheduled jobs'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 12 - Runtime and Clock components
    [
        'text' => 'What is the Symfony Runtime component responsible for?',
        'answers' => [
            'A' => 'Provide the entrypoint logic to run PHP applications in different environments (CLI, FPM, RoadRunner, etc.)',
            'B' => 'Manage service autowiring',
            'C' => 'Handle form submission lifecycle',
            'D' => 'Serve static assets'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Clock and Runtime components can help with: (multiple correct)',
        'answers' => [
            'A' => 'Abstracting time source for easier testing',
            'B' => 'Choosing different application runners',
            'C' => 'Automatically converting timezones in templates',
            'D' => 'Deterministic time in tests'
        ],
        'correctAnswers' => 'A,B,D'
    ],
    [
        'text' => 'What is the primary purpose of a Symfony bundle?',
        'answers' => [
            'A' => 'Package and reuse related features (controllers, services, config)',
            'B' => 'Provide a database schema',
            'C' => 'Replace the Kernel',
            'D' => 'Manage frontend assets only'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which actions relate to Symfony bundles? (multiple correct)',
        'answers' => [
            'A' => 'Group related code and resources',
            'B' => 'Be enabled per environment',
            'C' => 'Automatically run Doctrine migrations',
            'D' => 'Expose configuration to the host application'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // Deployment
    [
        'text' => 'What is a common deployment task for Symfony applications?',
        'answers' => [
            'A' => 'Warm up the cache',
            'B' => 'Reinstall Composer on every request',
            'C' => 'Compile PHP source to binary',
            'D' => 'Commit vendor/ to git'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which steps are typical in a Symfony deployment pipeline? (multiple correct)',
        'answers' => [
            'A' => 'Run database migrations',
            'B' => 'Warm up the cache and dump prod assets',
            'C' => 'Enable debug mode on production',
            'D' => 'Clear and warmup container caches'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // HTTP Cache
    [
        'text' => 'What is the purpose of HTTP caching in Symfony?',
        'answers' => [
            'A' => 'Reduce response latency and backend load by caching responses',
            'B' => 'Encrypt HTTP payloads',
            'C' => 'Serve dynamic content only',
            'D' => 'Replace TLS'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which features relate to Symfony HTTP cache and reverse proxies? (multiple correct)',
        'answers' => [
            'A' => 'HTTP cache-control headers and max-age',
            'B' => 'Edge Side Includes (ESI) for fragment caching',
            'C' => 'Automatic SQL query caching',
            'D' => 'Surrogate control and Vary header handling'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // Logging
    [
        'text' => 'Which library is commonly used for logging in Symfony applications?',
        'answers' => [
            'A' => 'Monolog',
            'B' => 'Log4j',
            'C' => 'Winston',
            'D' => 'SLF4J'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which logging features are available in Symfony via Monolog? (multiple correct)',
        'answers' => [
            'A' => 'Multiple handlers (files, syslog, errors)',
            'B' => 'Processors to add extra context to records',
            'C' => 'Automatic rollback of transactions',
            'D' => 'Channel-based configuration'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // Mercure
    [
        'text' => 'What is Mercure used for in Symfony?',
        'answers' => [
            'A' => 'Real-time push updates (server-to-browser) using a hub',
            'B' => 'Storing large files',
            'C' => 'Running background workers',
            'D' => 'Managing database migrations'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Mercure features include: (multiple correct)',
        'answers' => [
            'A' => 'Publishing updates to topics',
            'B' => 'JWT-based publisher authentication',
            'C' => 'Automatic form generation',
            'D' => 'Subscriber reconnection support in browsers'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // HTML Sanitizer
    [
        'text' => 'What is the purpose of the HTML Sanitizer component?',
        'answers' => [
            'A' => 'Remove or neutralize unsafe HTML content before rendering',
            'B' => 'Minify CSS files',
            'C' => 'Translate strings for templates',
            'D' => 'Provide routing helpers'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which capabilities belong to the HTML Sanitizer? (multiple correct)',
        'answers' => [
            'A' => 'Define allowed tags and attributes',
            'B' => 'Custom policies for different contexts',
            'C' => 'Automatically execute inline scripts',
            'D' => 'Strip dangerous attributes like on* handlers'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // Object Mapper
    [
        'text' => 'What problem does the Object Mapper solve in Symfony?',
        'answers' => [
            'A' => 'Map arrays or request data to PHP DTOs/objects with type conversion',
            'B' => 'Persist objects to the filesystem',
            'C' => 'Create database indices automatically',
            'D' => 'Render forms from objects without a form type'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Object Mapper features typically include: (multiple correct)',
        'answers' => [
            'A' => 'Nested mapping to sub-objects',
            'B' => 'Type conversion and normalizers',
            'C' => 'Automatic HTML escaping of values',
            'D' => 'Integration with validation for mapped objects'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // WebLink
    [
        'text' => 'What does the WebLink component help set in responses?',
        'answers' => [
            'A' => 'HTTP Link headers (e.g., preload, prefetch)',
            'B' => 'Cookie SameSite policy',
            'C' => 'CSRF token storage',
            'D' => 'Database connection pooling'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'WebLink can be used to configure which link relations? (multiple correct)',
        'answers' => [
            'A' => 'preload and prefetch',
            'B' => 'canonical and alternate',
            'C' => 'Automatic sitemap generation',
            'D' => 'dns-prefetch'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // Webhook
    [
        'text' => 'What is a primary concern when implementing webhooks in a Symfony app?',
        'answers' => [
            'A' => 'Verifying the signature of incoming webhook requests',
            'B' => 'Storing webhooks in session storage',
            'C' => 'Rendering webhooks in Twig templates',
            'D' => 'Serving webhooks only over FTP'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which practices are important for webhook handling? (multiple correct)',
        'answers' => [
            'A' => 'Verify request authenticity (signatures)',
            'B' => 'Respond quickly and enqueue processing for async work',
            'C' => 'Store webhook payloads in global variables',
            'D' => 'Implement retries and idempotency'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // Workflow
    [
        'text' => 'What is the Workflow component mainly used for?',
        'answers' => [
            'A' => 'Model state machines or workflows for business objects',
            'B' => 'Define database schemas',
            'C' => 'Handle HTTP routing',
            'D' => 'Perform asset compilation'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Workflow features include: (multiple correct)',
        'answers' => [
            'A' => 'Places (states) and transitions',
            'B' => 'Guards and conditions on transitions',
            'C' => 'Automatic migration of place names',
            'D' => 'Support for marking places and transitions history'
        ],
        'correctAnswers' => 'A,B,D'
    ],
    // 1 - Kernel: boot and lifecycle
    [
        'text' => 'Which Kernel method triggers service container compilation and bundle boot?',
        'answers' => [
            'A' => 'boot()',
            'B' => 'handle()',
            'C' => 'registerBundles()',
            'D' => 'initialize()'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which actions are part of the Kernel boot sequence? (multiple correct)',
        'answers' => [
            'A' => 'Register bundles',
            'B' => 'Compile the service container',
            'C' => 'Send the HTTP response to the client',
            'D' => 'Load environment variables and configs'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 2 - Service container: decoration, synthetic, factory
    [
        'text' => 'What does service decoration let you do in Symfony?',
        'answers' => [
            'A' => 'Wrap or replace an existing service implementation',
            'B' => 'Mark a service as deprecated',
            'C' => 'Automatically autowire arguments',
            'D' => 'Persist services across requests'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which statements about service definitions are valid? (multiple correct)',
        'answers' => [
            'A' => 'A service can be defined with a factory callable',
            'B' => '`synthetic` services are created externally and not by the container',
            'C' => 'Decorating a service removes the original service from the container',
            'D' => 'You can mark services as `lazy` to defer instantiation'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 3 - Compiler passes and tags
    [
        'text' => 'When are compiler passes executed?',
        'answers' => [
            'A' => 'During container compilation (build phase)',
            'B' => 'At runtime on every request',
            'C' => 'Only in test environment',
            'D' => 'After the HTTP response is sent'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Compiler passes are typically used to: (multiple correct)',
        'answers' => [
            'A' => 'Collect services by tag and modify definitions',
            'B' => 'Change service visibility and add method calls',
            'C' => 'Execute long-running background jobs',
            'D' => 'Register new routes dynamically'
        ],
        'correctAnswers' => 'A,B'
    ],

    // 4 - Autowiring / Binding specifics
    [
        'text' => 'What can you use to provide a specific scalar value when autowiring a service?',
        'answers' => [
            'A' => 'Bindings (service container bindings)',
            'B' => 'Route requirements',
            'C' => 'Twig globals',
            'D' => 'Event listeners'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Autowiring behavior can be influenced by: (multiple correct)',
        'answers' => [
            'A' => 'Type hints and parameter names',
            'B' => 'Explicit service `bind` configuration',
            'C' => 'Route path variables',
            'D' => 'Autoconfigure and service tags'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 5 - Routing: requirements, host, condition
    [
        'text' => 'Which routing option lets you restrict a placeholder with a regex?',
        'answers' => [
            'A' => 'requirements',
            'B' => 'methods',
            'C' => 'schemes',
            'D' => 'defaults'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which routing features can be used to refine matching? (multiple correct)',
        'answers' => [
            'A' => 'requirements (regex) for placeholders',
            'B' => 'host and scheme constraints',
            'C' => 'route `condition` expressions using the `request` variable',
            'D' => 'Automatic database lookups for parameters'
        ],
        'correctAnswers' => 'A,B,C'
    ],

    // 6 - Controllers: argument resolvers and invokables
    [
        'text' => 'Which built-in argument is automatically injected into controller actions?',
        'answers' => [
            'A' => 'Request',
            'B' => 'EntityManager without type hint',
            'C' => 'Route name string by default',
            'D' => 'Twig environment if not type-hinted'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Controller argument resolution can provide: (multiple correct)',
        'answers' => [
            'A' => 'Request and Response objects',
            'B' => 'Entity objects via ParamConverter (when configured)',
            'C' => 'Automatic conversion of scalar route params into services',
            'D' => 'UploadedFile instances for file form fields'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 7 - ParamConverter and Sensio/annotations behavior
    [
        'text' => 'What does the ParamConverter do in Symfony controllers?',
        'answers' => [
            'A' => 'Convert request attributes to objects (e.g., Doctrine entities)',
            'B' => 'Convert form data to JSON',
            'C' => 'Transform services into scalar values',
            'D' => 'Generate route requirements automatically'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'ParamConverter usage can include: (multiple correct)',
        'answers' => [
            'A' => 'Automatic entity lookup by id route parameter',
            'B' => 'Custom converters for DTOs',
            'C' => 'Automatic validation of converted objects',
            'D' => 'Injection of environment variables'
        ],
        'correctAnswers' => 'A,B,C'
    ],

    // 8 - HTTP caching: headers, ESI, surrogate keys
    [
        'text' => 'Which response header directly controls shared proxy cache lifetime?',
        'answers' => [
            'A' => 'Cache-Control: s-maxage',
            'B' => 'Expires only for browser caches',
            'C' => 'Set-Cookie',
            'D' => 'Content-Security-Policy'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which mechanisms are used for advanced HTTP caching in Symfony? (multiple correct)',
        'answers' => [
            'A' => 'Edge Side Includes (ESI) for fragment caching',
            'B' => 'Tag-aware invalidation via cache tags',
            'C' => 'Using Doctrine query cache to populate HTTP caches',
            'D' => 'Correct Vary header handling for content negotiation'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 9 - Forms: events and data mappers
    [
        'text' => 'Which form event is typically used to modify form fields based on submitted data before binding?',
        'answers' => [
            'A' => 'PRE_SUBMIT',
            'B' => 'POST_SUBMIT',
            'C' => 'PRE_SET_DATA',
            'D' => 'SUBMIT'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Form customization can include: (multiple correct)',
        'answers' => [
            'A' => 'Using PRE_SET_DATA to change fields for initial data',
            'B' => 'Listening to PRE_SUBMIT to adapt to incoming payload',
            'C' => 'Replacing the data mapper to customize binding',
            'D' => 'Using form events to bypass CSRF protection entirely'
        ],
        'correctAnswers' => 'A,B,C'
    ],

    // 10 - Validation: groups and payloads
    [
        'text' => 'What are validation groups used for?',
        'answers' => [
            'A' => 'Apply different sets of constraints conditionally',
            'B' => 'Group constraints to run in parallel threads',
            'C' => 'Persist validation results in the database',
            'D' => 'Translate constraint messages automatically'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Validation features include: (multiple correct)',
        'answers' => [
            'A' => 'Constraint groups to select which constraints run',
            'B' => 'Custom constraint validators',
            'C' => 'Automatic database uniqueness enforcement without a constraint',
            'D' => 'Payloads for transmitting extra info to validators'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 11 - Security: authenticator system and throttling
    [
        'text' => 'In the new Symfony security system an authenticator class typically implements which responsibility?',
        'answers' => [
            'A' => 'Create a Passport and convert credentials into an authenticated token',
            'B' => 'Store user sessions in Redis by default',
            'C' => 'Automatically hash passwords in the database',
            'D' => 'Generate CSRF tokens for forms'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Security features and protections include: (multiple correct)',
        'answers' => [
            'A' => 'Login throttling to prevent brute-force',
            'B' => 'Remember-me persistent tokens',
            'C' => 'Automatic migration of user passwords to new encoders during login',
            'D' => 'Treating all credentials as public services'
        ],
        'correctAnswers' => 'A,B,C'
    ],

    // 12 - Password hashing: encoders vs hashers
    [
        'text' => 'Which API should new Symfony apps use for password hashing?',
        'answers' => [
            'A' => 'PasswordHasher (newer API)',
            'B' => 'PasswordEncoder (legacy API)',
            'C' => 'crypt() directly in controllers',
            'D' => 'Storing plain text is acceptable if HTTPS is used'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Password hashing considerations include: (multiple correct)',
        'answers' => [
            'A' => 'Use adaptive algorithms (bcrypt/argon2) via the hasher API',
            'B' => 'Rehash passwords when algorithm cost changes',
            'C' => 'Store raw salts in the repository without hashing',
            'D' => 'Avoid using legacy encoders for new applications'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 13 - Doctrine: owning/inverse side and orphanRemoval
    [
        'text' => 'Which side of a Doctrine relation stores the foreign key in the database?',
        'answers' => [
            'A' => 'Owning side',
            'B' => 'Inverse side',
            'C' => 'Neither; Doctrine uses a join table always',
            'D' => 'The service container manages foreign keys'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which Doctrine mapping behaviors are valid? (multiple correct)',
        'answers' => [
            'A' => '`cascade={"persist","remove"}` propagates operations',
            'B' => '`orphanRemoval=true` removes detached children on flush',
            'C' => 'Lazy=false forces eager fetching for relations',
            'D' => 'Automatic schema updates happen on every flush'
        ],
        'correctAnswers' => 'A,B,C'
    ],

    // 14 - Messenger: transports, stamps and retry
    [
        'text' => 'Which component concept attaches metadata to a message for transport handling?',
        'answers' => [
            'A' => 'Stamp',
            'B' => 'EnvelopeFactory',
            'C' => 'MiddlewareChain',
            'D' => 'HandlerLocator'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Messenger features include: (multiple correct)',
        'answers' => [
            'A' => 'Configurable transports (AMQP, Redis, doctrine)',
            'B' => 'Stamps to control behavior (delay, priority)',
            'C' => 'Automatic SQL schema generation for messages only',
            'D' => 'Retry and failure transport configuration'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 15 - HttpClient: options and exceptions
    [
        'text' => 'Which HttpClient option controls maximum time you wait for the entire request?',
        'answers' => [
            'A' => 'timeout',
            'B' => 'verify_peer',
            'C' => 'base_uri',
            'D' => 'http_version'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'HttpClient features and options include: (multiple correct)',
        'answers' => [
            'A' => 'timeout and max_redirects options',
            'B' => 'Concurrent requests via the multi interface',
            'C' => 'Automatic conversion of JSON into Doctrine entities',
            'D' => 'Streaming responses and progress callbacks'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 16 - Serializer: circular refs and groups
    [
        'text' => 'Which serializer feature helps avoid infinite loops on circular relations?',
        'answers' => [
            'A' => 'Circular reference handler',
            'B' => 'Using JSON_PRETTY_PRINT only',
            'C' => 'Turning off normalization entirely',
            'D' => 'Using raw var_export on objects'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Serializer customization can include: (multiple correct)',
        'answers' => [
            'A' => 'Groups to include/exclude properties',
            'B' => 'Custom normalizers and encoders',
            'C' => 'Automatic relation hydration into entities',
            'D' => 'Circular reference handlers to return identifiers'
        ],
        'correctAnswers' => 'A,B,D'
    ],
    // 1 - HttpFoundation: Request API
    [
        'text' => 'Which method on Symfony\\Component\\HttpFoundation\\Request returns the HTTP method used (GET/POST/etc.)?',
        'answers' => [
            'A' => 'getMethod()',
            'B' => 'method()',
            'C' => 'getHttpMethod()',
            'D' => 'fetchMethod()'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which Request API features are available? (multiple correct)',
        'answers' => [
            'A' => 'getMethod() and getPathInfo()',
            'B' => 'headers->get() for header access',
            'C' => 'Automatic DB hydration from request body',
            'D' => 'query->get() and request->get() for GET/POST params'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 2 - HttpFoundation: Response API
    [
        'text' => 'Which method sets the HTTP status code on a Symfony Response?',
        'answers' => [
            'A' => 'setStatusCode()',
            'B' => 'status()',
            'C' => 'withStatus()',
            'D' => 'setCode()'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Response API capabilities include: (multiple correct)',
        'answers' => [
            'A' => 'setStatusCode() to change status',
            'B' => 'headers->set() to add headers',
            'C' => 'auto-serialization of entities to JSON by default',
            'D' => 'send() to send the response to the client'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 3 - HttpClient: HttpClientInterface & Responses
    [
        'text' => 'Which method belongs to Symfony\\Contracts\\HttpClient\\HttpClientInterface to perform a request?',
        'answers' => [
            'A' => 'request()',
            'B' => 'call()',
            'C' => 'fetch()',
            'D' => 'sendRequest()'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'HttpClient related API includes: (multiple correct)',
        'answers' => [
            'A' => 'request() returns a ResponseInterface-like object',
            'B' => 'stream() to iterate streaming responses',
            'C' => 'Automatic conversion of responses into Doctrine entities',
            'D' => 'getStatusCode() and getContent() on responses'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 4 - EventDispatcher: EventDispatcherInterface
    [
        'text' => 'What is the main method of Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface?',
        'answers' => [
            'A' => 'dispatch(object $event, string $eventName = null)',
            'B' => 'trigger(string $name)',
            'C' => 'emit(Event $e)',
            'D' => 'publish(array $events)'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'EventDispatcher API supports: (multiple correct)',
        'answers' => [
            'A' => 'Dispatching events with dispatch()',
            'B' => 'Listener priorities',
            'C' => 'Automatic persistence of events to DB',
            'D' => 'Event subscribers implementing static subscription lists'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 5 - Serializer: SerializerInterface / NormalizerInterface
    [
        'text' => 'Which method on Symfony\\Component\\Serializer\\SerializerInterface converts an object to a string format?',
        'answers' => [
            'A' => 'serialize($data, string $format, array $context = [])',
            'B' => 'toString($data)',
            'C' => 'encode($data)',
            'D' => 'dump($data)'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Serializer public API includes: (multiple correct)',
        'answers' => [
            'A' => 'serialize() and deserialize()',
            'B' => 'NormalizerInterface supports supportsNormalization() and normalize()',
            'C' => 'Automatic DB hydration into entities without configuration',
            'D' => 'Encoders and Decoders for format handling'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 6 - Form: FormFactoryInterface and FormInterface
    [
        'text' => 'Which method on Symfony\\Component\\Form\\FormFactoryInterface creates a new form?',
        'answers' => [
            'A' => 'create()',
            'B' => 'make()',
            'C' => 'build()',
            'D' => 'newForm()'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'FormInterface public methods include: (multiple correct)',
        'answers' => [
            'A' => 'handleRequest(Request $request)',
            'B' => 'isSubmitted() and isValid()',
            'C' => 'persist() to save form data automatically',
            'D' => 'getData() and setData()'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 7 - Validator: ValidatorInterface
    [
        'text' => 'Which method validates an object or value in Symfony\\Component\\Validator\\Validator\\ValidatorInterface?',
        'answers' => [
            'A' => 'validate($value, $constraints = null, $groups = null)',
            'B' => 'check($value)',
            'C' => 'assert($value)',
            'D' => 'verify($value)'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Validator API capabilities include: (multiple correct)',
        'answers' => [
            'A' => 'validate() and validateProperty()',
            'B' => 'Constraint classes and custom ConstraintValidator implementations',
            'C' => 'Automatic DB-level constraint enforcement',
            'D' => 'Groups to control which constraints run'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 8 - Security: UserInterface & TokenStorageInterface
    [
        'text' => 'Which method is required by Symfony\\Component\\Security\\Core\\User\\UserInterface?',
        'answers' => [
            'A' => 'getRoles()',
            'B' => 'getEmail()',
            'C' => 'getProfile()',
            'D' => 'getSession()'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Security public API pieces include: (multiple correct)',
        'answers' => [
            'A' => 'UserInterface with getPassword() and getRoles()',
            'B' => 'TokenStorageInterface::getToken() to access current token',
            'C' => 'Automatic password hashing without configuration',
            'D' => 'Authentication via Authenticators creating Passport objects'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 9 - Password hashing: PasswordHasherInterface
    [
        'text' => 'Which method on Symfony\\Component\\PasswordHasher\\PasswordHasherInterface returns a hashed password?',
        'answers' => [
            'A' => 'hash(string $plainPassword)',
            'B' => 'encode(string $plain)',
            'C' => 'makeHash($p)',
            'D' => 'create()'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Password hasher API includes: (multiple correct)',
        'answers' => [
            'A' => 'hash() to create a hash',
            'B' => 'verify() or isPasswordValid() to check a password',
            'C' => 'Storing raw salts exposed publicly',
            'D' => 'Rehash recommendations via needsRehash()'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 10 - Doctrine: EntityManagerInterface (public API)
    [
        'text' => 'Which EntityManagerInterface method schedules an entity for insertion on flush?',
        'answers' => [
            'A' => 'persist($entity)',
            'B' => 'save($entity)',
            'C' => 'insert($entity)',
            'D' => 'store($entity)'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Common EntityManager public methods include: (multiple correct)',
        'answers' => [
            'A' => 'persist(), remove(), flush()',
            'B' => 'find() to load by id',
            'C' => 'auto-mapping of request data to entities without config',
            'D' => 'getRepository() to obtain repositories'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 11 - Messenger: MessageBusInterface & Envelope
    [
        'text' => 'Which method sends a message to the bus on Symfony\\Component\\Messenger\\MessageBusInterface?',
        'answers' => [
            'A' => 'dispatch($message)',
            'B' => 'send($message)',
            'C' => 'publish($message)',
            'D' => 'enqueue($message)'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Messenger public API items include: (multiple correct)',
        'answers' => [
            'A' => 'dispatch() returns an Envelope',
            'B' => 'Stamps attach metadata to Envelopes',
            'C' => 'Automatic transactional guarantees without config',
            'D' => 'Middleware to intercept messages'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 12 - Mailer: MailerInterface and Email
    [
        'text' => 'Which Mailer method sends an Email object in Symfony\\Component\\Mailer\\MailerInterface?',
        'answers' => [
            'A' => 'send(Email $email)',
            'B' => 'deliver(Email $email)',
            'C' => 'queue(Email $email)',
            'D' => 'push(Email $email)'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Mailer and Email API features include: (multiple correct)',
        'answers' => [
            'A' => 'Email object with from, to, subject and text/html body',
            'B' => 'Attachments via addPart or attach()',
            'C' => 'Automatic locale translation of message bodies',
            'D' => 'Different transports configured by DSN'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 13 - Cache: CacheInterface & ItemInterface
    [
        'text' => 'Which method on Psr\\Cache\\CacheItemInterface returns the cached value?',
        'answers' => [
            'A' => 'get()',
            'B' => 'value()',
            'C' => 'fetch()',
            'D' => 'read()'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Cache public API aspects include: (multiple correct)',
        'answers' => [
            'A' => 'get() and set() via CacheInterface',
            'B' => 'has() to check existence (depending on implementation)',
            'C' => 'Automatic HTTP cache invalidation without headers',
            'D' => 'TTL and namespace support on items'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 14 - Logging: LoggerInterface (PSR-3)
    [
        'text' => 'Which method on Psr\\Log\\LoggerInterface logs a message with a given level?',
        'answers' => [
            'A' => 'log($level, $message, array $context = [])',
            'B' => 'write($level, $message)',
            'C' => 'record($level, $message)',
            'D' => 'push($level, $message)'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'PSR-3 / Logger public API includes: (multiple correct)',
        'answers' => [
            'A' => 'Specific level methods like info(), error(), debug()',
            'B' => 'Context array for message interpolation',
            'C' => 'Automatic DB commits on log calls',
            'D' => 'log() as the generic entry point'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // 15 - Routing: RouterInterface (generate/match)
    [
        'text' => 'Which RouterInterface method generates a URL for a named route?',
        'answers' => [
            'A' => 'generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)',
            'B' => 'urlFor($name)',
            'C' => 'buildUrl($name)',
            'D' => 'createUrl($name)'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Router public API capabilities include: (multiple correct)',
        'answers' => [
            'A' => 'generate() to build URLs',
            'B' => 'match() to match a Request path to route data',
            'C' => 'Automatic DB population of routes',
            'D' => 'Support for route parameter defaults and requirements'
        ],
        'correctAnswers' => 'A,B,D'
    ],
    // Console: Command API
    [
        'text' => 'Which method should you override to configure name, description and options of a Symfony Console Command?',
        'answers' => [
            'A' => 'configure()',
            'B' => 'initialize()',
            'C' => 'setup()',
            'D' => 'boot()'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which methods belong to the Command execution lifecycle? (multiple correct)',
        'answers' => [
            'A' => 'configure() to set metadata',
            'B' => 'execute(InputInterface $in, OutputInterface $out) to run the command',
            'C' => 'interact() to ask interactive questions before execution',
            'D' => 'render() to produce an HTTP response'
        ],
        'correctAnswers' => 'A,B,C'
    ],

    // Console: Input/Output interfaces
    [
        'text' => 'Which InputInterface method retrieves a named argument passed to a command?',
        'answers' => [
            'A' => 'getArgument()',
            'B' => 'argument()',
            'C' => 'fetchArgument()',
            'D' => 'readArgument()'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which OutputInterface methods are commonly used to print text? (multiple correct)',
        'answers' => [
            'A' => 'write() for raw output',
            'B' => 'writeln() to append a newline',
            'C' => 'dump() for serializing objects to logs automatically',
            'D' => 'begin() to open a block (not a real method)'
        ],
        'correctAnswers' => 'A,B'
    ],

    // RequestStack and Request access
    [
        'text' => 'Which RequestStack method returns the current HTTP Request?',
        'answers' => [
            'A' => 'getCurrentRequest()',
            'B' => 'current()',
            'C' => 'fetchRequest()',
            'D' => 'getRequestBag()'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'When using RequestStack you can: (multiple correct)',
        'answers' => [
            'A' => 'Call getCurrentRequest() to obtain the active Request',
            'B' => 'Push and pop requests when handling nested sub-requests',
            'C' => 'Use it to persist session data to disk automatically',
            'D' => 'Avoid type-hinting Request in services that need the current request'
        ],
        'correctAnswers' => 'A,B'
    ],

    // SessionInterface
    [
        'text' => 'Which SessionInterface method stores a value by key?',
        'answers' => [
            'A' => 'set()',
            'B' => 'put()',
            'C' => 'save()',
            'D' => 'persist()'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which SessionInterface methods are available? (multiple correct)',
        'answers' => [
            'A' => 'get() to retrieve a value',
            'B' => 'remove() to delete a key',
            'C' => 'invalidate() to destroy the session and regenerate id',
            'D' => 'flush() to write pending Doctrine entities'
        ],
        'correctAnswers' => 'A,B,C'
    ],

    // Security: AuthorizationCheckerInterface
    [
        'text' => 'Which method checks if the current token has the given permission or role?',
        'answers' => [
            'A' => 'isGranted()',
            'B' => 'checkPermission()',
            'C' => 'authorize()',
            'D' => 'hasRole()'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Authorization checks can use: (multiple correct)',
        'answers' => [
            'A' => 'Attributes (e.g., "ROLE_ADMIN") passed to isGranted()',
            'B' => 'Voters to implement fine-grained logic',
            'C' => 'Automatic DB schema changes upon isGranted() calls',
            'D' => 'Passing a subject (object) and attribute to isGranted()'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // EventSubscriberInterface
    [
        'text' => 'Which static method must an EventSubscriber implement?',
        'answers' => [
            'A' => 'getSubscribedEvents()',
            'B' => 'subscribe()',
            'C' => 'onEvent()',
            'D' => 'registerListeners()'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'EventSubscriber features include: (multiple correct)',
        'answers' => [
            'A' => 'Return an array of event names and listener methods from getSubscribedEvents()',
            'B' => 'Specify listener priorities in the subscription map',
            'C' => 'Automatically persist events to a queue without configuration',
            'D' => 'Be registered as a service and tagged automatically when autoconfigured'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // Lock component
    [
        'text' => 'Which LockFactory method creates a lock instance for a given resource?',
        'answers' => [
            'A' => 'createLock()',
            'B' => 'make()',
            'C' => 'newLock()',
            'D' => 'getLock()'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Common Lock API actions include: (multiple correct)',
        'answers' => [
            'A' => 'acquire() to obtain a lock',
            'B' => 'release() to free it',
            'C' => 'autoExtend() to schedule a lock renewal without implementation',
            'D' => 'Using store-specific factories (Redis, flock, etc.)'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // Rate Limiter
    [
        'text' => 'Which factory creates a limiter instance for a named policy?',
        'answers' => [
            'A' => 'RateLimiterFactory::create()',
            'B' => 'LimiterRegistry::getPolicy()',
            'C' => 'Rate::fromPolicy()',
            'D' => 'LimiterFactory::makeLimiter()'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Rate limiter API commonly provides: (multiple correct)',
        'answers' => [
            'A' => 'consume() or acquire() to decrement available tokens',
            'B' => 'getLimit() to know configured capacity',
            'C' => 'Automatic blocking of requests at kernel level without configuration',
            'D' => 'Different limiter types (fixed-window, token-bucket, sliding window)'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // Notifier / Notification
    [
        'text' => 'Which NotifierInterface method sends a Notification to one or more channels?',
        'answers' => [
            'A' => 'send(Notification $notification, RecipientInterface|array $recipients = null)',
            'B' => 'notify()',
            'C' => 'deliver()',
            'D' => 'push()'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Notifier concepts include: (multiple correct)',
        'answers' => [
            'A' => 'Notification objects describing subject, content and channels',
            'B' => 'Transports and channels configured separately',
            'C' => 'Automatic DB storage of all notifications by default',
            'D' => 'Recipients provided via RecipientInterface or arrays'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // Mime: Email API
    [
        'text' => 'Which Email method sets the subject of the message?',
        'answers' => [
            'A' => 'subject()',
            'B' => 'setSubject()',
            'C' => 'withSubject()',
            'D' => 'title()'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Common Email methods include: (multiple correct)',
        'answers' => [
            'A' => 'from() and to() for addresses',
            'B' => 'text() and html() to set bodies',
            'C' => 'attachFile() as the only way to add attachments (nonexistent)',
            'D' => 'replyTo() to set reply address'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // Stopwatch
    [
        'text' => 'Which Stopwatch method starts a named event?',
        'answers' => [
            'A' => 'start()',
            'B' => 'beginEvent()',
            'C' => 'open()',
            'D' => 'measure()'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Stopwatch usage can include: (multiple correct)',
        'answers' => [
            'A' => 'start() and stop() to measure durations',
            'B' => 'lap() to record intermediate marks if supported',
            'C' => 'Persisting stopwatch events to production logs automatically without configuration',
            'D' => 'Retrieving event details with getEvent() or exported metrics'
        ],
        'correctAnswers' => 'A,B,D'
    ],

    // PropertyAccess
    [
        'text' => 'Which PropertyAccessorInterface method reads a value from an object/array path?',
        'answers' => [
            'A' => 'getValue()',
            'B' => 'read()',
            'C' => 'fetch()',
            'D' => 'access()'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'PropertyAccessor features include: (multiple correct)',
        'answers' => [
            'A' => 'getValue() and setValue() for paths like "author.name"',
            'B' => 'supportsRead() and supportsWrite() to test capability',
            'C' => 'Automatic database hydration of related entities by default',
            'D' => 'Working with arrays and objects uniformly'
        ],
        'correctAnswers' => 'A,B,D'
    ],
    [
        'text' => 'What can PHP Reflection provide about a class?',
        'answers' => [
            'A' => 'Information about methods and properties',
            'B' => 'The ability to execute private methods directly without invocation',
            'C' => 'The source file path and defined start line',
            'D' => 'Automatic instantiation without calling the constructor'
        ],
        'correctAnswers' => 'A,C'
    ],
    [
        'text' => 'What advantage do Generators provide in PHP?',
        'answers' => [
            'A' => 'Memory-efficient iteration over large datasets',
            'B' => 'Parallel execution on multiple CPU cores',
            'C' => 'Automatic conversion of callbacks to promises',
            'D' => 'Persisting variables between HTTP requests'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'What benefits does SPL ArrayObject provide over native arrays?',
        'answers' => [
            'A' => 'Object-oriented access and the ability to extend/override behavior',
            'B' => 'Built-in persistent storage across requests',
            'C' => 'Implements interfaces like Countable and ArrayAccess',
            'D' => 'Automatic JSON conversion with custom rules'
        ],
        'correctAnswers' => 'A,C'
    ],
    [
        'text' => 'What is WeakReference used for in PHP?',
        'answers' => [
            'A' => 'Hold a non-owning reference to an object allowing it to be garbage-collected',
            'B' => 'Make objects immutable at runtime',
            'C' => 'Clone large objects lazily on first write',
            'D' => 'Serialize object references across processes'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'What is the role of PHP OPcache?',
        'answers' => [
            'A' => 'Cache compiled PHP bytecode in shared memory to speed execution',
            'B' => 'Cache database query results transparently',
            'C' => 'Optimize delivery of static assets (CSS/JS)',
            'D' => 'Manage session storage and locking'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'What are PHP Attributes used for?',
        'answers' => [
            'A' => 'Attach structured metadata to classes, functions and properties',
            'B' => 'Replace namespaces and use statements',
            'C' => 'Be read at runtime via Reflection for custom logic',
            'D' => 'Automatically register services in a DI container without config'
        ],
        'correctAnswers' => 'A,C'
    ],
    [
        'text' => 'Which benefit comes from named arguments in PHP?',
        'answers' => [
            'A' => 'Call functions specifying parameters by name regardless of order',
            'B' => 'Skip required parameters at runtime without defaults',
            'C' => 'Provide method overloading semantics',
            'D' => 'Improve readability when functions have many optional parameters'
        ],
        'correctAnswers' => 'A,D'
    ],
    [
        'text' => 'What do union types allow in PHP signatures?',
        'answers' => [
            'A' => 'Accept multiple possible types for a parameter or return value',
            'B' => 'Declare generic type parameters',
            'C' => 'Enforce constraints across unrelated classes',
            'D' => 'Return multiple separate values from a function'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'What feature distinguishes the match expression from switch in PHP?',
        'answers' => [
            'A' => 'match is an expression and returns a value',
            'B' => 'match allows implicit fall-through between arms',
            'C' => 'match requires explicit break statements',
            'D' => 'match uses strict comparison by default'
        ],
        'correctAnswers' => 'A,D'
    ],
    [
        'text' => 'What are Fibers in PHP used for?',
        'answers' => [
            'A' => 'Provide lightweight cooperative concurrency (suspend/resume)',
            'B' => 'Automatically make code thread-safe',
            'C' => 'Schedule cron-like background tasks',
            'D' => 'Fork new OS processes from PHP'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which special type hints were introduced or standardized in recent PHP versions?',
        'answers' => [
            'A' => 'mixed and never',
            'B' => 'any and optional',
            'C' => 'nullable-only types that replace union types',
            'D' => 'dynamic and static'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'Which base interface do Exceptions and Errors implement in PHP?',
        'answers' => [
            'A' => 'Throwable',
            'B' => 'ExceptionInterface',
            'C' => 'ErrorHandlerInterface',
            'D' => 'ThrowableInterface'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'What does PSR-4 autoloading map in Composer?',
        'answers' => [
            'A' => 'Namespace prefixes to filesystem paths',
            'B' => 'Composer scripts to Git hooks',
            'C' => 'Vendor packages to package managers',
            'D' => 'Class constants to environment variables'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'What is a PHPUnit data provider used for?',
        'answers' => [
            'A' => 'Run the same test multiple times with different datasets',
            'B' => 'Automatically mock external HTTP services',
            'C' => 'Generate code coverage reports',
            'D' => 'Persist test results to a database'
        ],
        'correctAnswers' => 'A'
    ],
    [
        'text' => 'What does the JSON_THROW_ON_ERROR option do in PHP\'s json_encode/json_decode?',
        'answers' => [
            'A' => 'Throw a JsonException on error instead of returning false',
            'B' => 'Return null instead of throwing on malformed JSON',
            'C' => 'Silently log errors to the PHP error log',
            'D' => 'Attempt to automatically correct invalid JSON'
        ],
        'correctAnswers' => 'A'
    ],
];