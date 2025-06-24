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

###################
What is CodeIgniter
###################

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

*******************
Release Information
*******************

This repo contains in-development code for future releases. To download the
latest stable release please visit the `CodeIgniter Downloads
<https://codeigniter.com/download>`_ page.

**************************
Changelog and New Features
**************************

You can find a list of all changes for each release in the `user
guide change log <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst>`_.

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

Please see the `installation section <https://codeigniter.com/userguide3/installation/index.html>`_
of the CodeIgniter User Guide.

*******
License
*******

Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Contributing Guide <https://github.com/bcit-ci/CodeIgniter/blob/develop/contributing.md>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.
