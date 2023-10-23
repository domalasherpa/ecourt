# Cyber Legal Partners - E-Governance Laravel App

Cyber Legal Partners is an E-Governance Laravel application that aims to connect citizens with lawyers for legal advice and assistance. This application provides three distinct modes: Admin, Citizen, and Lawyers. The Admin serves as a super user, overseeing the system's operations. Citizens can file cases and hire lawyers, while Lawyers can register themselves with their verified Bar License Number.

![Alt text](https://github.com/domalasherpa/ecourt/blob/main/gitassests/Screenshot%20from%202023-10-23%2013-16-57.png)
## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
  - [Admin Mode](#admin-mode)
  - [Citizen Mode](#citizen-mode)
  - [Lawyer Mode](#lawyer-mode)
- [Configuration](#configuration)
- [Contributing](#contributing)
- [License](#license)
- [Contact Information](#contact-information)

## Installation

To install and set up the Cyber Legal Partners application, follow these steps:

1. Clone this repository to your local machine:
   ```
   git clone https://github.com/your-username/cyber-legal-partners.git
   ```
2. Navigate to the project directory:
   ```
   cd 4-bit-Adder
   ```
3. Install PHP dependencies using Composer:
   ```
   composer install
   ```
4. Install node dependencies using nom:
   ```
   npm install
   npm run dev
   ```
5. Create a copy of the `.env.example` file and rename it to `.env`. Update the configuration settings, including the database connection details and any other necessary settings.
6. Generate an application key:
   ```
   php artisan key:generate
   ```
7. Run database migrations and seed the initial data:
   ```
   php artisan migrate --seed
   ```
8. Start the Laravel development server:
   ```
   php artisan serve
   ```
9. Access the application in your web browser at http://localhost:8000.

## Usage

Cyber Legal Partners offers three distinct modes for users: Admin, Citizen, and Lawyers. Each mode has its specific functionalities and access rights.

### Admin Mode

- **Access**: Admin mode is accessible to super users with administrative privileges.
- **Functionality**:
  - Manage and monitor the entire system.
  - Create and manage accounts for Lawyers and Citizens.
  - View and manage case records.
  - Verify Lawyer accounts by validating their Bar License Number.
  - Perform system maintenance tasks.

### Citizen Mode

- **Access**: Accessible to registered citizens.
- **Functionality**:
  - Create and submit legal cases.
  - Search for and hire lawyers for legal assistance.
  - Track the progress of their cases.
  - Communicate with hired lawyers through the platform.
  - View their case history.

### Lawyer Mode

- **Access**: Accessible to registered lawyers with verified Bar License Numbers.
- **Functionality**:
  - Register and manage their lawyer accounts.
  - Receive case invitations from citizens.
  - Accept or decline case invitations.
  - Communicate with citizens and handle their legal cases.
  - Update their profile and availability.

## Configuration

### Environment Variables

To configure the Cyber Legal Partners application, update the following environment variables in your `.env` file:

- `APP_NAME`: The name of your application.
- `APP_ENV`: The application environment (e.g., development, production).
- `DB_CONNECTION`: Database connection (e.g., mysql, sqlite).
- `DB_HOST`: Database host.
- `DB_PORT`: Database port.
- `DB_DATABASE`: Database name.
- `DB_USERNAME`: Database username.
- `DB_PASSWORD`: Database password.
- `MAIL_*`: Configuration settings for sending email notifications.
- `...` (Add any additional environment variables specific to your application)

## Contributing

We welcome contributions from the community to improve Cyber Legal Partners. To contribute:

1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Make your changes and commit them with clear messages.
4. Push your branch to your forked repository.
5. Create a pull request to the main repository.

Please follow our [contributing guidelines](CONTRIBUTING.md) for more details.
