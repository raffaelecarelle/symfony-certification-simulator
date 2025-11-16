# symfony-certification-program
UNOFFICIAL Symfony Certification Program with exercises

# Symfony Certification Simulator

A lightweight tool to simulate the official Symfony certification exam.

### Goals
- Simulate a 100-question multiple-choice exam for Symfony certification.
- Support questions with one or more correct answers (single or multiple selection).
- Help candidates practice under exam-like conditions, with references to the official documentation.

### What this project includes
- sf-doc: a packaged subset or links to the official Symfony documentation used as reference.
- php-doc: a packaged subset or links to the official PHP documentation used as reference.
- A question bank and the simulator logic (100-question mode, randomization, scoring).

### Key features
- 100-question simulated session.
- Multiple-choice questions with support for multiple correct answers.
- Scoring and feedback with correct/incorrect indication and a link for further reading when available.
- Ability to consult the reference documentation (sf-doc and php-doc) for each question.

## Requirements
- PHP >= 8.2
- Standard PHP extensions (no additional special requirements)
- Composer

## Installation
```bash
git clone https://github.com/raffaelecarelle/symfony-certification-program.git
cd symfony-certification-program
composer install
```

### Usage (CLI)
- Unix/macOS:
  ```bash
  php bin/console exam:start
  # or, if executable
  chmod +x bin/console
  ./bin/console exam:start
  ```
- Windows (PowerShell/CMD):
  ```powershell
  php bin/console exam:start
  ```

### Usage notes
- Some questions have multiple correct answers: select them by separating with a comma (e.g., "A,C").
- When the answer is incorrect, a link to the corresponding official documentation (if available) will be shown.
- At the end of the exam, a table with percentage, number of correct and incorrect answers is displayed.

## Development: tests and code quality
- Run tests (PHPUnit):
  ```bash
  ./vendor/bin/phpunit -c phpunit.xml.dist
  ```
- Static analysis (PHPStan):
  ```bash
  ./vendor/bin/phpstan analyse -c phpstan.neon
  ```
- Automated refactoring (Rector):
  ```bash
  ./vendor/bin/rector
  ```
- Formatting and style fixes (PHP-CS-Fixer):
  ```bash
  ./vendor/bin/php-cs-fixer fix --diff
  ```

## Contributing
### Contributions of any kind are welcome. Suggested guidelines:
- Open an issue to propose new questions or to fix existing ones.
- For PRs that modify the question bank, keep explanations concise and include a reference (sf-doc/php-doc) when possible.
- Run tests and quality tools locally before opening the PR:
  - `./vendor/bin/phpunit -c phpunit.xml.dist`
  - `./vendor/bin/phpstan analyse -c phpstan.neon`
  - `./vendor/bin/php-cs-fixer fix --diff`
- Stick to PHP >= 8.2 and the project's current standards.

## License
- This project is released under the GPL-3.0-or-later license. See the [LICENSE](LICENSE) file.

## Disclaimer
- UNOFFICIAL project, not affiliated with Symfony or SensioLabs. Trademarks and logos are the property of their respective owners.
