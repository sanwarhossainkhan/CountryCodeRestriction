# CountryCodeRestriction Laravel Application

CountryCodeRestriction is a Laravel application that demonstrates how to implement IP-based country code restriction for web access.  This application showcases the ability to selectively allow or deny access to specific routes based on the visitor's geographic location.

## Features

- Secure your web application by restricting access based on visitor's country codes.
- Comply with regional regulations or optimize performance by serving users from specific countries.
- Efficiently manage and cache geolocation data to enhance performance.
- Learn about Laravel middleware, geolocation fetching, and cache tagging.

## Installation

1. Clone the repository:
   git clone CountryCodeRestriction repro
   cd CountryCodeRestriction

 ## Install dependencies using Composer:
    composer install

## Configure your .env file with database and cache settings.

## Migrate the database:
    php artisan migrate
    
## Start the development server:
    php artisan serve

# Usage
1.Access the homepage at http://localhost:8000.

2.Explore the implemented country code restriction in the example routes.

3.Learn from the code examples and adapt them to your own projects.

## Contributing
Contributions are welcome! If you find any issues or have improvements, feel free to submit a pull request.

## License
This project is open-source and available under the MIT License.

Disclaimer: This application is intended for educational purposes. Make sure to review and adjust the implementation to your specific requirements before deploying it in production.
