# symfony-certification-program
UNOFFICIAL Symfony Certification Program with exercises

# Symfony Certification Simulator

A lightweight tool to simulate the official Symfony certification exam.

Purpose
- Simulate a 75-question multiple-choice exam for Symfony certification.
- Questions may have one or more correct answers (single or multiple selection).
- Help candidates practice under exam-like conditions using official documentation.

What this project includes
- sf-doc: a packaged subset or links to the official Symfony documentation used as reference.
- php-doc: a packaged subset or links to the official PHP documentation used as reference.
- Question bank and exam simulator logic (75-question run mode, randomization, scoring).

Key features
- 75-question simulated exam session.
- Multiple-choice questions with support for multiple correct answers.
- Scoring and feedback indicating correct/incorrect selections and explanations (when available).
- Option to review referenced documentation from sf-doc and php-doc for each question.

Project layout (example)
- /sf-doc/      -> Official Symfony documentation references or extracts
- /php-doc/     -> Official PHP documentation references or extracts
- /questions/   -> Question definitions and metadata
- /src/         -> Simulator source code
- /bin/         -> CLI or web entry points
- README.md     -> This file

Question format (simple example)
- id: unique identifier
- text: question text
- choices: array of answer choices
- correct: array of index/ids of correct choices (supports 1..N)
- docs: optional links or references to sf-doc/php-doc entries

Usage (high level)
1. Install project dependencies (if any).
2. Run the simulator entry point (CLI or web).
3. Start a 75-question session; answer questions in sequence or review at the end.
4. Get a final score and review explanations and doc references.

Contributing
- Add or improve questions in /questions/ following the question format.
- Keep explanations concise and include doc references (sf-doc/php-doc) when possible.
- Submit PRs with tests or validation for new questions.

License
- [LICENSE](LICENSE)
