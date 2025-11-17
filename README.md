# Symfony Certification Simulator

An interactive CLI tool to practice for the Symfony and PHP certification exams.

## Overview
A lightweight, customizable exam simulator built with Symfony Console components. Practice with separate PHP and Symfony question banks, configure question counts, and get instant feedback with links to official documentation.

### Goals
- Simulate realistic certification exam conditions with customizable question counts
- Support questions with single or multiple correct answers
- Provide immediate feedback with references to official PHP and Symfony documentation
- Help candidates practice under exam-like conditions with randomized answer ordering

### What this project includes
- **Question bank**: Separate PHP and Symfony question sets in `data/` directory
- **Documentation links**: Automatic linking to official PHP and Symfony documentation
- **Exam simulator**: Customizable exam sessions with configurable question counts
- **Interactive CLI**: Built with Symfony Console components for a smooth user experience

### Key features
- **Customizable exam sessions**: Configure the number of PHP and Symfony questions (default: 50 each)
- **Flexible question filtering**: Run PHP-only, Symfony-only, or mixed question sets
- **Multiple-choice support**: Questions with single or multiple correct answers
- **Answer randomization**: Answer order is shuffled for each question to prevent pattern memorization
- **Interactive CLI interface**: Progress bar, formatted output, and easy answer selection
- **Instant feedback**: Immediate correct/incorrect indication after each answer
- **Documentation links**: Direct links to official PHP and Symfony documentation for incorrect answers
- **Score summary**: Final results table showing percentage, correct, and incorrect answer counts

## Architecture
The project is organized into the following components:

### Core Classes (`src/`)
- **`ExamCommand`**: Symfony Console command handling user interaction, question presentation, and answer collection
- **`ExamFactory`**: Factory class responsible for creating exam instances with randomized questions based on provided options
- **`Exam`**: Value object representing an exam session with scoring and percentage calculation methods
- **`Question`**: Value object representing a single question with answers, correct answers, and documentation links
- **`QuestionProvider`**: Service for loading PHP and Symfony questions from data files

### Entry Point (`bin/`)
- **`exam-start`**: CLI entry point that bootstraps the Symfony Console application

### Question Banks (`data/`)
- **`php-questions.php`**: Array of PHP questions covering OOP, SPL, type system, and more
- **`sf-questions.php`**: Array of Symfony framework questions

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
  php bin/exam-start
  # or, if executable
  chmod +x bin/exam-start
  ./bin/exam-start
  ```
- Windows (PowerShell/CMD):
  ```powershell
  php bin/exam-start
  ```

### Command options
The exam simulator supports several options to customize your practice session:

- `--php-only` or `-p`: Run the exam with only PHP questions
- `--sf-only` or `-S`: Run the exam with only Symfony questions
- `--php-questions=N`: Set the number of PHP questions (default: 50)
- `--sf-questions=N`: Set the number of Symfony questions (default: 50)

**Examples:**
```bash
# Run exam with only PHP questions
php bin/exam-start --php-only

# Run exam with only Symfony questions
php bin/exam-start --sf-only

# Custom number of questions
php bin/exam-start --php-questions=30 --sf-questions=70

# Combined: only PHP questions with custom count
php bin/exam-start --php-only --php-questions=25
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
