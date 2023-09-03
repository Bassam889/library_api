# Bookmark API with Sanctum Authentication

The Bookmark API is a RESTful web service built using Laravel, designed to help you manage and organize your bookmarks efficiently. This API allows you to create, retrieve, update, and delete bookmarks while providing secure authentication via Laravel Sanctum.

## About

The Bookmark API is a powerful tool to manage your bookmarks. It provides a RESTful interface to interact with your bookmarks, making it easy to integrate with various platforms and applications. The added security of Laravel Sanctum ensures your data is safe.

## Features

- **Bookmark Management**: Create, retrieve, update, and delete bookmarks.
- **User Authentication**: Secure user authentication with Laravel Sanctum.
- **User Registration**: Allow users to register and create accounts.
- **API Documentation**: Detailed documentation on available endpoints.
- **Customizable**: Extend and customize the API to meet your needs.

## Getting Started

### Prerequisites

Before you begin, ensure you have the following prerequisites:

- **PHP**: Make sure you have PHP (>= 7.4) installed on your server.
- **Composer**: Composer is required to install PHP dependencies.
- **Laravel**: This project is built using Laravel, so you'll need to have Laravel (>= 8.x) installed.
- **Database**: Choose a database system like MySQL, PostgreSQL, SQLite, or others. Make sure you have the necessary credentials.
- **Web Server**: You can use Laravel's built-in development server or set up a web server like Apache or Nginx.

### Installation

1. Clone the repository:

```bash
git clone https://github.com/yourusername/bookmark-api.git
```

2. Change into the project directory:

```bash
cd bookmark-api
```

3. Install dependencies:

```bash
composer install
```

4. Copy the `env.example` file to `.env`:

```bash
cp .env.example .env
```

5. Configure your environment variables:
   Open the .env file and set your database connection details and other configuration options. Ensure you configure Laravel Sanctum properly for authentication.
6. Generate the application key:

```bash
cp .env.example .env
```

7. Migrate and seed the databse:

```bash
php artisan key:generate
```

8. Start the development server:

```bash
php artisan migrate --seed
```

9. Your Bookmark API should now be accessible at `http://127.0.0.1:8000`.

```bash
php artisan serve
```

## Usage

The Bookmark API provides a set of endpoints to interact with your bookmarks. You can create, retrieve, update, and delete bookmarks using these endpoints.

## API Endpoints

GET /api/bookmarks: Get a list of all bookmarks.
GET /api/bookmarks/{id}: Get a specific bookmark by ID.
POST /api/bookmarks: Create a new bookmark.
PUT /api/bookmarks/{id}: Update an existing bookmark.
DELETE /api/bookmarks/{id}: Delete a bookmark.
Please refer to the API documentation for detailed information on each endpoint.

## Authentication

This API uses Laravel Sanctum for user authentication. You need to register and log in to access certain API endpoints. Sanctum provides secure token-based authentication.
