# CLAUDE.md - AI Assistant Context Guide

## Project Overview
**Symfony Certification Simulator** - An interactive CLI tool to practice for Symfony and PHP certification exams.

This is an UNOFFICIAL certification practice tool built with Symfony Console components, featuring separate question banks for PHP and Symfony, customizable exam sessions, and instant feedback with documentation links.

## Project Identity
- **Name**: raffaelecarelle/symfony-certification-program
- **License**: GPL-3.0-or-later
- **Author**: Raffaele Carelle (raffaele.carelle@gmail.com)
- **Status**: UNOFFICIAL project, not affiliated with Symfony or SensioLabs

## Technical Stack
- **PHP Version**: >= 8.2
- **Main Dependencies**:
  - symfony/console: ^6.4|^7.0
- **Dev Dependencies**:
  - PHPUnit (testing)
  - PHPStan (static analysis)
  - Rector (automated refactoring)
  - PHP-CS-Fixer (code formatting)

## Architecture & Core Components

### Directory Structure
```
├── bin/
│   └── exam-start           # CLI entry point
├── src/
│   ├── ExamCommand.php      # Console command (user interaction)
│   ├── ExamFactory.php      # Creates exam instances
│   ├── Exam.php             # Value object (exam session)
│   ├── Question.php         # Value object (single question)
│   └── QuestionProvider.php # Loads questions from data files
├── data/
│   ├── php-questions.php    # PHP question bank
│   └── sf-questions.php     # Symfony question bank
├── tests/
│   └── ExamCommandTest.php  # PHPUnit tests
├── php-guidelines.md        # Guidelines for PHP question generation
├── php-program-index.md     # PHP topics scope
├── sf-guidelines.md         # Guidelines for Symfony question generation
└── sf-program-index.md      # Symfony topics scope
```

### Key Classes
1. **ExamCommand** (`src/ExamCommand.php`)
   - Symfony Console command
   - Handles user interaction, question presentation, answer collection
   - Supports options: `--php-only`, `--sf-only`, `--php-questions`, `--sf-questions`

2. **ExamFactory** (`src/ExamFactory.php`)
   - Factory pattern implementation
   - Creates exam instances with randomized questions
   - Respects configurable question limits (default: 50 PHP + 50 Symfony)

3. **Exam** (`src/Exam.php`)
   - Value object representing an exam session
   - Methods for scoring and percentage calculation

4. **Question** (`src/Question.php`)
   - Value object for a single question
   - Properties: text, answers, correctAnswers, linkAtDocumentation

5. **QuestionProvider** (`src/QuestionProvider.php`)
   - Service for loading questions from `data/` directory

## Question Bank Structure

### Question Format (PHP Array)
```php
[
    'text' => 'Question text here',
    'answers' => [
        'A' => 'Answer option A',
        'B' => 'Answer option B',
        'C' => 'Answer option C',
        'D' => 'Answer option D',
    ],
    'correctAnswers' => ['A', 'C'], // Single or multiple correct answers
    'linkAtDocumentation' => 'https://...' // Official PHP/Symfony docs
]
```

### Question Guidelines

#### PHP Questions (`php-guidelines.md`)
- **Target Audience**: Advanced candidates, senior developers
- **Topics**: See `php-program-index.md` (OOP, SPL, Type System, Namespaces, Traits, etc.)
- **Focus**: PHP API up to 8.2, public APIs, method names/parameters, syntax precision
- **Language**: English only
- **Requirements**:
  - `linkAtDocumentation` must point to valid PHP documentation
  - Correct answers must exist in the referenced documentation
  - Avoid ambiguity
  - Challenge in-depth knowledge

#### Symfony Questions (`sf-guidelines.md`)
- **Target Audience**: Advanced Symfony developers
- **Topics**: See `sf-program-index.md` (Architecture, Controllers, Routing, Forms, Security, etc.)
- **Focus**:
  - Symfony components (Twig 3.8, Console, DI, Security, etc.)
  - Configuration in YAML and PHP attributes
  - Public APIs, method signatures
  - Twig filters/functions
- **Special Requirements**:
  - Highly technical questions (14/15 questions)
  - Only 1/15 questions on general concepts
  - Create question pairs with similar text but different correct answers
  - English only

## CLI Usage

### Basic Commands
```bash
# Standard exam (50 PHP + 50 Symfony questions)
docker run --rm -ti -u 1000 --network host -v .:/app -w /app --user=root composer php bin/exam-start

# PHP questions only
docker run --rm -ti -u 1000 --network host -v .:/app -w /app --user=root composer php bin/exam-start --php-only

# Symfony questions only
docker run --rm -ti -u 1000 --network host -v .:/app -w /app --user=root composer php bin/exam-start --sf-only

# Custom question counts
docker run --rm -ti -u 1000 --network host -v .:/app -w /app --user=root composer php bin/exam-start --php-questions=30 --sf-questions=70

# Combined options
docker run --rm -ti -u 1000 --network host -v .:/app -w /app --user=root composer php bin/exam-start --php-only --php-questions=25
```

### Features
- Multiple-choice questions (single or multiple correct answers)
- Answer randomization (prevents pattern memorization)
- Interactive CLI with progress bar
- Instant feedback (correct/incorrect)
- Documentation links for incorrect answers
- Final score summary (percentage, correct/incorrect counts)

## Development Workflow

### Running Tests
```bash
docker run --rm -ti -u 1000 --network host -v .:/app -w /app --user=root composer ./vendor/bin/phpunit -c phpunit.xml.dist
```

### Static Analysis
```bash
docker run --rm -ti -u 1000 --network host -v .:/app -w /app --user=root composer ./vendor/bin/phpstan analyse -c phpstan.neon
```

### Code Formatting
```bash
docker run --rm -ti -u 1000 --network host -v .:/app -w /app --user=root composer ./vendor/bin/php-cs-fixer fix --diff
```

### Automated Refactoring
```bash
docker run --rm -ti -u 1000 --network host -v .:/app -w /app --user=root composer ./vendor/bin/rector
```

## Important Context for AI Assistants

### When Adding/Modifying Questions
1. **Respect the scope**:
   - PHP questions: Only topics in `php-program-index.md`
   - Symfony questions: Only topics in `sf-program-index.md`

2. **Maintain quality**:
   - Advanced/senior level difficulty
   - No ambiguity
   - Valid documentation links
   - Correct answers verifiable in docs

3. **Format consistency**:
   - Use PHP associative arrays
   - Follow exact structure (text, answers, correctAnswers, linkAtDocumentation)
   - English language only

### When Modifying Code
1. **Standards**:
   - PHP >= 8.2 features
   - PSR-4 autoloading
   - Run quality tools before committing

2. **Testing**:
   - Update tests for new features
   - Ensure all tests pass
   - Use data providers for comprehensive coverage (see `tests/ExamCommandTest.php`)

3. **Architecture**:
   - Maintain separation of concerns
   - Keep value objects immutable
   - Use factory pattern for exam creation
   - Follow Symfony Console best practices

### Contributing Guidelines
- Open issues for new questions or fixes
- Keep explanations concise in PRs
- Include documentation references
- Run all quality tools locally before PR
- Follow existing code standards

## Disclaimer
This is an UNOFFICIAL project for exam practice. Not affiliated with Symfony, SensioLabs, or any official certification body. All trademarks and logos are the property of their respective owners.
