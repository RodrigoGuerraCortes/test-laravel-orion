# Test 

## Overview
This project is a Laravel-based system designed to demonstrate features such as Orion, Pest. The project will evolve to include more advanced features like code coverage measurement, testing capabilities, and continuous integration.

## Features

- **Orion Installed**: The system currently includes Orion, a package for creating RESTful API resources with Laravel. This enables rapid development of API endpoints and helps in keeping your codebase clean.
- **Future Additions**: Planned features include code coverage measurement using tools like PCOV or Xdebug, which will provide insights into test coverage, ensuring high-quality and reliable code.

## Installation

To install and set up the project on your local machine, follow these steps:

1. Clone the repository:
   ```bash
   git clone <repository-url>
   ```
2. Navigate into the project directory:
   ```bash
   cd project-directory
   ```
3. Install dependencies:
   ```bash
   composer install
   ```
4. Set up environment variables:
   - Copy `.env.example` to `.env` and configure it according to your setup.
   ```bash
   cp .env.example .env
   ```
5. Generate an application key:
   ```bash
   php artisan key:generate
   ```

## Usage

To start the application:

```bash
php artisan serve
```

Visit `http://localhost:8000` to see the application in action.

## Testing

Currently, the system uses PHPUnit for testing. To run tests:

```bash
php artisan test
```
### Code Coverage

The project uses **PCOV** to measure code coverage. To generate a code coverage report:

bash
php -d pcov.enabled=1 ./vendor/bin/phpunit --coverage-html coverage


This will create an HTML report in the coverage directory that you can open in your browser to see detailed test coverage information.

### Planned Updates

- **Continuous Integration**: Continuous integration tools will be added soon to automate testing and code quality checks.

## Contribution Guidelines

If you'd like to contribute to the project, please fork the repository and use a feature branch. Pull requests are warmly welcome.

## Contact

For any questions or suggestions, feel free to contact me at rguerracortes@gmail.com

