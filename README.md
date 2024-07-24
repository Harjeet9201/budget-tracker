# Laravel Budget Tracker Application

## Overview
This is a Laravel-based budget tracker application designed to help users manage their income and expenses. It provides features for registering, logging in, and tracking financial transactions.

## Features
- User registration and authentication
- Add, view, update, and delete income and expense records
- Summary dashboard showing total income, total expenses, and balance

## Installation Instructions

### Prerequisites
- PHP 7.4 or higher
- Composer
- Node.js and npm
- MySQL or another supported database

### Setup

1. **Clone the Repository:**
   Open your terminal or command prompt and run:
   ```sh
   git clone https://github.com/Harjeet9201/budget-tracker.git

2. **Install PHP dependencies:**
   composer install

3. **Install PHP dependencies:**
   cp .env.example .env

4. **Generate the application key:**
    php artisan key:generate

5. **Set up the database:**
   Create a database and update the .env file with your database connection details.
    Run migrations to set up the database schema:
   php artisan migrate

6. **serve the application**
   php artisan serve

