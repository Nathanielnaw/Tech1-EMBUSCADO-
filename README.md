# POS Foundations (CodeIgniter 4)

This project is the **IT0049 - TFA1 - From Zero to Four Pages** activity. It is a small Point-of-Sale (POS) website demonstrating CodeIgniter 4 routes, controllers, views, navigation, and MVC organization.

## Prerequisites

- PHP 8.2 or newer
- Composer
- PHP extensions `intl`, `mbstring`, and `zip` (Zip is needed for Composer archive downloads)

## Setup

From the project directory, install the Composer dependencies:

```bash
composer install
```

The local `.env` file is configured with:

```dotenv
app.baseURL = 'http://localhost:8080/'
```

Change that value if the application is hosted at a different URL. Keep machine-specific values and secrets out of version control. This activity does not require database credentials.

## Run the application

Start CodeIgniter's development server:

```bash
php spark serve
```

Open <http://localhost:8080/> in a browser.

## Routes

| URL | Page | Controller |
| --- | --- | --- |
| `/` | Landing page | `Pages::home` |
| `/about` | About page | `Pages::about` |
| `/customers` | Customer Accounts | `Customers::index` |
| `/users` | User Accounts | `Users::index` |

All four pages share the main navigation and use framework URL helpers for links.

## Data scope

Customer and staff records are temporary static PHP arrays in their controllers. There is intentionally no database, migration, seed, or database-backed model in this activity.

The activity sheet may mention submitting a database export, but that conflicts with this no-database scope. No export should be invented for this implementation; submit the project as a static-array foundation unless your instructor gives different requirements.

## Student submission steps

1. Run the project locally and verify the four routes.
2. Create or use an authorized GitHub repository, commit this project, and submit its repository URL.
3. Deploy the application to an authorized hosting service whose document root points to the `public` directory, then submit the hosted URL.
4. Do not claim repository or hosting links until you have created and verified them. No GitHub repository or hosted application has been created by this project setup.
