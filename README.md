# TechNova Solutions — Laravel Company Profile Website

## Introduction

TechNova Solutions is a professional company profile website developed using the Laravel framework. The project demonstrates the fundamental concepts of Laravel's Model-View-Controller (MVC) architecture, URL routing, controllers, Blade templating, reusable layouts, and organized project structure.

The website presents a multi-page corporate profile for a fictional technology company. It includes Home, About, Services, and Contact pages. The project focuses on creating a clean and maintainable Laravel application while demonstrating how a browser request travels through Laravel routes and controllers before being rendered as a Blade view.

---

## Objectives

The main objectives of this project are:

- To understand Laravel's MVC architecture.
- To create and configure a Laravel development project.
- To define routes using `routes/web.php`.
- To create and use controllers.
- To render pages using Blade templates.
- To create reusable layouts and components.
- To build a multi-page company profile website.
- To organize Laravel project files properly.
- To understand the basic Laravel client-server request lifecycle.

---

# MVC Architecture

The project follows Laravel's Model-View-Controller architecture.

```text
User / Browser
      │
      │ HTTP Request
      ▼
routes/web.php
      │
      │ Route Mapping
      ▼
CompanyController
      │
      │ Return View
      ▼
Blade Views
      │
      │ Render HTML
      ▼
User / Browser
```

The project uses the following MVC-related components:

### Route

Routes are defined in:

```text
routes/web.php
```

The routes determine which controller method should handle each URL request.

### Controller

The main controller is:

```text
app/Http/Controllers/CompanyController.php
```

It contains methods for the four main pages:

- `home()`
- `about()`
- `services()`
- `contact()`

### View

The website pages are stored inside:

```text
resources/views/pages/
```

The project contains:

- `home.blade.php`
- `about.blade.php`
- `services.blade.php`
- `contact.blade.php`

Reusable layout and components are also used through:

```text
resources/views/layouts/app.blade.php
resources/views/components/navbar.blade.php
resources/views/components/footer.blade.php
```

---

# Laravel Routing

The main application routes are defined in `routes/web.php`.

| URL | Controller Method | Purpose |
|---|---|---|
| `/` | `home()` | Displays the Home page |
| `/about` | `about()` | Displays the About page |
| `/services` | `services()` | Displays the Services page |
| `/contact` | `contact()` | Displays the Contact page |

The routes connect the browser requests to the appropriate methods inside `CompanyController`.

---

# Controllers

The project uses `CompanyController` to handle requests for the company profile pages.

Example:

```php
class CompanyController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
```

Each controller method returns the appropriate Blade view.

---

# Blade Templating

Laravel Blade is used to create and organize the website's HTML templates.

The main layout is:

```text
resources/views/layouts/app.blade.php
```

The layout provides the common structure of the website, including the navigation bar, page content area, and footer.

Reusable components include:

```text
resources/views/components/navbar.blade.php
resources/views/components/footer.blade.php
```

The individual pages extend the main layout using Blade directives such as:

```blade
@extends('layouts.app')

@section('content')

@endsection
```

This prevents the same navigation and footer code from being repeated across every page.

---

# Website Pages

## Home

The Home page introduces TechNova Solutions and provides an overview of the company's technology services.

![Home Page](screenshots/home.png)

---

## About

The About page presents information about the company, its purpose, and its professional identity.

![About Page](screenshots/about.png)

---

## Services

The Services page presents the technology services offered by TechNova Solutions.

The services include:

1. Web Development
2. Mobile Development
3. Cloud Solutions
4. Cybersecurity
5. Data & Analytics
6. IT Consulting

![Services Page](screenshots/services.png)

---

## Contact

The Contact page provides company contact information and a contact form interface.

![Contact Page](screenshots/contact.png)

---

# Reusable Components

The website uses reusable Blade components to maintain consistency.

### Navigation Bar

```text
resources/views/components/navbar.blade.php
```

The navigation bar provides links to:

- Home
- About
- Services
- Contact

### Footer

```text
resources/views/components/footer.blade.php
```

The footer provides the common footer section displayed throughout the website.

---

# Project Folder Structure

The important project files are organized as follows:

```text
week03-company-profile/
│
├── app/
│   └── Http/
│       └── Controllers/
│           └── CompanyController.php
│
├── documentation/
│   └── architecture.png
│
├── resources/
│   └── views/
│       ├── components/
│       │   ├── navbar.blade.php
│       │   └── footer.blade.php
│       │
│       ├── layouts/
│       │   └── app.blade.php
│       │
│       └── pages/
│           ├── home.blade.php
│           ├── about.blade.php
│           ├── services.blade.php
│           └── contact.blade.php
│
├── routes/
│   └── web.php
│
├── screenshots/
│
├── public/
├── database/
├── config/
├── bootstrap/
│
├── artisan
├── composer.json
├── composer.lock
└── README.md
```

---

# Architecture Diagram

The Laravel request lifecycle used in this project is represented in the following diagram:

![Laravel Architecture Diagram](documentation/architecture.png)

The browser sends a request to a URL. Laravel's routing system receives the request and maps it to the appropriate method in `CompanyController`. The controller then returns the corresponding Blade view, which is rendered into HTML and returned to the browser.

---

# Problems Encountered and Solutions

## 1. Missing `vendor/autoload.php`

During the initial setup, Laravel produced an error indicating that:

```text
vendor/autoload.php
```

could not be found.

### Solution

The project's Composer dependencies were installed using:

```bash
composer install
```

This generated the required Composer autoload files inside the `vendor` directory.

---

## 2. Missing SQLite Database

Laravel initially reported that the SQLite database file did not exist.

### Solution

The project configuration was checked through the `.env` file and the required database setup was completed so that Laravel could start correctly.

---

## 3. Undefined Controller Method

An error occurred when the application attempted to call:

```text
CompanyController::home()
```

### Solution

The `home()` method was added to `CompanyController` together with the other required methods:

```text
home()
about()
services()
contact()
```

---

## 4. Missing Services View

The `/services` route initially produced:

```text
View [pages.services] not found.
```

### Solution

The missing Blade file was created at:

```text
resources/views/pages/services.blade.php
```

After creating the view, the `/services` page worked correctly.

---

# Reflection

Developing the TechNova Solutions company profile website helped me understand how Laravel organizes a web application using the Model-View-Controller architecture. Before working on this project, the relationship between routes, controllers, and views was mostly theoretical. Through this activity, I was able to see how these parts work together when a user visits a website. A request begins in the browser, Laravel checks the route, the route calls the appropriate controller method, and the controller returns a Blade view that is rendered and displayed to the user.

One of the most important lessons I learned was the importance of proper project organization. Instead of placing all HTML code in one large file, Laravel allows pages, layouts, and reusable components to be separated. The use of `app.blade.php`, `navbar.blade.php`, and `footer.blade.php` helped me understand why reusable components are useful. If the navigation bar needs to be changed, I only need to update one component instead of editing every page individually.

I also learned how Laravel routes connect URLs to controller methods. Creating separate routes for Home, About, Services, and Contact made the website easier to understand and navigate. The `CompanyController` then handled the logic for returning the correct view for each route.

During development, I encountered several errors, including a missing Composer autoload file, a missing SQLite database file, an undefined controller method, and a missing Services Blade view. These errors initially prevented the website from running, but troubleshooting them helped me understand how Laravel depends on its project structure and configuration. Instead of simply copying code, I learned to read error messages and identify which file or component was causing the problem.

Overall, this project gave me practical experience with Laravel's MVC architecture, routing, controllers, Blade templates, reusable components, and project organization. It also showed me that small configuration or file-location errors can affect the entire application. The experience provides a strong foundation for developing more advanced Laravel applications in future activities.

---

# Technologies Used

- PHP
- Laravel
- Blade
- Bootstrap
- HTML
- CSS
- Composer
- SQLite

---

# Development Tools

- Visual Studio Code
- PHP
- Composer
- Laravel Artisan
- Web Browser
- Git
- GitHub

---

# Screenshots

The project includes screenshots documenting the completed website and Laravel implementation.

```text
screenshots/
├── home.png
├── about.png
├── services.png
├── contact.png
├── navbar.png
├── footer.png
├── routes.png
├── controller.png
└── blade-layout.png
```

---

# Conclusion

The TechNova Solutions Company Profile Website demonstrates the fundamental Laravel concepts required for a basic MVC-based web application. The project successfully implements multiple pages, URL routing, a controller, Blade templates, reusable layouts, reusable components, and a structured Laravel project organization.

The completed application provides a foundation for more advanced Laravel development and demonstrates the basic client-server request lifecycle using the Laravel framework.

---

# References

Laravel. (n.d.). *Laravel documentation*. https://laravel.com/docs

Laravel. (n.d.). *Controllers*. https://laravel.com/docs/controllers

Laravel. (n.d.). *Blade templates*. https://laravel.com/docs/blade

Bootstrap. (n.d.). *Bootstrap documentation*. https://getbootstrap.com/docs/


