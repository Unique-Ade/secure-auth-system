# Secure Auth System

## Overview
Secure Auth System is an advanced authentication and user management system built with Laravel. It provides secure login, registration, role-based access control, and third-party authentication (Google & GitHub).

## Features
- **User Authentication** (Email & Password, Google, GitHub)
- **Role-Based Access Control** (Admin, User, etc.)
- **User Profile Management**
- **Password Reset & Recovery**
- **Admin Dashboard** for User & Role Management
- **API Integration** for authentication
- **Dark Mode Toggle**

## Tech Stack
- **Backend**: Laravel
- **Frontend**: HTML, CSS (TailwindCSS)
- **Database**: MySQL
- **Version Control**: Git & GitHub
- **Authentication**: Laravel Breeze/Sanctum, Socialite (Google, GitHub login)

## Installation
### Prerequisites
- PHP 8+
- Composer
- MySQL
- Node.js & npm (for frontend assets)

### Steps
1. Clone the repository:
   ```sh
   git clone https://github.com/yourusername/secure-auth-system.git
   cd secure-auth-system
   ```
2. Install dependencies:
   ```sh
   composer install
   npm install && npm run dev
   ```
3. Configure environment:
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```
4. Set up the database:
   ```sh
   php artisan migrate --seed
   ```
5. Start the development server:
   ```sh
   php artisan serve
   ```

## Usage
- Visit `http://localhost:8000` to access the authentication system.
- Admin panel available at `/admin` (restricted access).

## Contribution
Feel free to fork this repository and submit pull requests. Suggestions and improvements are welcome!

## License
This project is open-source and available under the [MIT License](LICENSE).
