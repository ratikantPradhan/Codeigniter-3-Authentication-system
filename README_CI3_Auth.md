# CodeIgniter 3 Authentication System

A secure, lightweight authentication system built with CodeIgniter 3 framework, featuring user registration, login functionality, and session management with modern UI styling.

## Features

- **User Registration** - Form validation with email uniqueness verification
- **Secure Authentication** - BCRYPT password hashing and session management
- **Protected Routes** - Dashboard access control with session validation
- **User Feedback** - Flash messaging system for notifications
- **Modern UI** - Responsive design with TailwindCSS/Bootstrap integration
- **MVC Architecture** - Clean separation of concerns following CodeIgniter conventions

## Technology Stack

- **Backend**: PHP 7.x with CodeIgniter 3.x
- **Database**: MySQL/MariaDB
- **Frontend**: HTML5, CSS3, TailwindCSS/Bootstrap
- **Version Control**: Git

## Project Structure

```
dummy_auth/
├── application/
│   ├── controllers/     # Auth and Dashboard controllers
│   ├── models/         # User data model
│   ├── views/          # Template files (login, register, dashboard)
│   └── config/         # Application configuration files
├── assets/             # Static assets (CSS, JS, images)
└── .gitignore         # Git ignore rules
```

## Installation

### Prerequisites
- PHP 7.0 or higher
- MySQL 5.6+ or MariaDB
- Web server (Apache/Nginx) or PHP built-in server

### Setup Steps

1. **Clone Repository**
   ```bash
   git clone https://github.com/ratikantPradhan/Codeigniter-3-Authentication-system.git
   cd Codeigniter-3-Authentication-system
   ```

2. **Database Configuration**
   
   Update `application/config/database.php` with your database credentials:
   ```php
   $db['default']['hostname'] = 'localhost';
   $db['default']['username'] = 'your_username';
   $db['default']['password'] = 'your_password';
   $db['default']['database'] = 'your_database';
   ```

3. **Create Database Table**
   ```sql
   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       username VARCHAR(100) NOT NULL,
       email VARCHAR(100) NOT NULL UNIQUE,
       password VARCHAR(255) NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

4. **Launch Application**
   
   **Option A: PHP Built-in Server**
   ```bash
   php -S localhost:8000
   ```
   
   **Option B: Local Development Environment**
   ```
   http://localhost/dummy_auth/
   ```

## Usage

1. Navigate to the application URL
2. Register a new account or login with existing credentials
3. Access the protected dashboard after successful authentication
4. Use logout functionality to terminate sessions securely

## Security Features

- Password hashing using PHP's `password_hash()` with BCRYPT
- Form validation and sanitization
- Session-based authentication
- CSRF protection (CodeIgniter built-in)
- SQL injection prevention through query builder

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/enhancement`)
3. Commit changes (`git commit -am 'Add new feature'`)
4. Push to branch (`git push origin feature/enhancement`)
5. Create Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Author

**Ratikant Pradhan**  
Developer & Software Engineer  
GitHub: [@ratikantPradhan](https://github.com/ratikantPradhan)

---

*For issues or questions, please open an issue on the GitHub repository.*