# ITS Academic Profile - Laravel Sandbox

[![Laravel Framework](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=flat-square&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=flat-square&logo=php&logoColor=white)](https://www.php.net)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=flat-square&logo=bootstrap&logoColor=white)](https://getbootstrap.com)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg?style=flat-square)](https://opensource.org/licenses/MIT)

An academic web application built from scratch with **Laravel** demonstrating strict **Model-View-Controller (MVC)** architectural principles, **Blade layout inheritance**, and defensive programming practices.

This repository serves as the individual assignment (*Tugas Mandiri 1: Laravel Sandbox Pertama*) for the **Framework-Based Programming (Pemrograman Berbasis Kerangka Kerja - PBKK)** course at the **Department of Informatics, Faculty of Intelligent Electrical and Informatics Technology (FTEIC), Institut Teknologi Sepuluh Nopember (ITS)**.

---

## Author Profile

- **Name:** Adriel Mahira Dharma
- **Student ID (NRP):** 5025241097
- **Department:** Informatics (Teknik Informatika - FTEIC ITS)
- **Course & Class:** Pemrograman Berbasis Kerangka Kerja (PBKK) - B
- **Lecturer:** Dwi Sunaryono, S.Kom., M.Kom.
- **Academic Term:** Odd Semester 2026/2027

---

## Architecture & Technical Compliance

This project strictly adheres to the course rubrics and standard Laravel architectural guidelines:

1. **Zero Route Closure:** No view is rendered directly inside closures in `routes/web.php`. Every request is routed to `App\Http\Controllers\PageController`.
2. **Skinny Controller & Passive View:** Controllers handle HTTP parameter negotiation and data preparation; Blade views act strictly as renderers.
3. **Blade Template Inheritance:** Central layout defined in `resources/views/layouts/app.blade.php` leveraging `@yield`, `@section`, and `@extends`.
4. **XSS Protection:** Data output relies on Blade double-curly syntax `{{ $variable }}` to utilize htmlspecialchars escaping automatically.
5. **Defensive Programming:** The dynamic calculator handles non-numeric values, invalid operations, and division by zero gracefully without raising unhandled HTTP 500 errors.

---

## Application Pages & Features

### Core Pages
- **Home (`GET /`):** Student identity, academic info, and architectural compliance overview.
- **Department Profile (`GET /about`):** Overview of Informatics ITS, vision, mission, international accreditations (ASIIN / LAM INFOKOM), and active research laboratories.
- **Final Project Idea (`GET /project-idea`):** Proposal for Option 3 &mdash; *"Network Port Scanner & Log Analyzer Agent"* combining **NativePHP**, **Laravel Livewire**, and local LLMs (**Ollama** / **Senopati AI ITS**).

### Bonus Challenge: Dynamic URL Calculator
- **Endpoint:** `GET /hitung/{angka1}/{angka2}/{operasi}`
- **Supported operations:** `tambah` (+), `kurang` (-), `kali` (*), `bagi` (/)
- **Quick links:** Included directly in the calculator UI for rapid testing and grading.

---

## Prerequisites

Before running the project, make sure you have the following installed on your system:

- **PHP** `>= 8.2` (Extensions required: `openssl`, `pdo`, `mbstring`, `tokenizer`, `xml`, `ctype`, `curl`, `zip`, `pdo_sqlite` or `pdo_mysql`)
- **Composer** `2.x`
- **Git**
- *(Optional)* SQLite / MySQL database (default configuration runs out-of-the-box with SQLite)

---

## Local Development Setup

### 1. Clone the Repository
```bash
git clone https://github.com/drildhar/pbkk-tugas1-laravelsandbox.git
cd pbkk-tugas1-laravelsandbox
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Environment Configuration
Copy `.env.example` to `.env` and generate the unique application encryption key:

**On Linux / macOS / Git Bash:**
```bash
cp .env.example .env
php artisan key:generate
```

**On Windows PowerShell:**
```powershell
Copy-Item .env.example .env
php artisan key:generate
```

### 4. Database Setup (Optional / Default SQLite)
If you want to run default framework migrations:
```bash
php artisan migrate
```

### 5. Start the Development Server
```bash
php artisan serve
```
By default, the server will start at:
```
http://127.0.0.1:8000
```

---

## Running Automated Tests

The repository includes comprehensive automated feature tests covering all web routes, controller responses, and calculator edge cases:

```bash
php artisan test
```

Expected output:
```text
PASS  Tests\Feature\ExampleTest
✓ the application returns a successful response

PASS  Tests\Feature\PageRoutesTest
✓ home page returns success
✓ about page returns success
✓ project page returns success
✓ kalkulator kali
✓ kalkulator tambah
✓ kalkulator kurang
✓ kalkulator bagi
✓ kalkulator division by zero
✓ kalkulator non numeric
✓ kalkulator invalid operation

Tests:    12 passed (29 assertions)
```

---

## Quick Evaluation URLs

For quick evaluation by lecturers or teaching assistants (Asdos):

| Route / Test Case | URL | Expected Behavior |
|---|---|---|
| **Home Page** | `http://127.0.0.1:8000/` | HTTP 200 - Student profile (Adriel Mahira Dharma) |
| **Department Page** | `http://127.0.0.1:8000/about` | HTTP 200 - Informatics ITS profile & labs |
| **Project Idea** | `http://127.0.0.1:8000/project-idea` | HTTP 200 - Network Port Scanner Agent proposal |
| **Multiply (Valid)** | `http://127.0.0.1:8000/hitung/10/5/kali` | HTTP 200 - "Hasil dari 10 kali 5 adalah 50" |
| **Add (Valid)** | `http://127.0.0.1:8000/hitung/50/25/tambah` | HTTP 200 - "Hasil dari 50 tambah 25 adalah 75" |
| **Subtract (Valid)** | `http://127.0.0.1:8000/hitung/100/35/kurang` | HTTP 200 - "Hasil dari 100 kurang 35 adalah 65" |
| **Divide (Valid)** | `http://127.0.0.1:8000/hitung/100/4/bagi` | HTTP 200 - "Hasil dari 100 bagi 4 adalah 25" |
| **Division by Zero** | `http://127.0.0.1:8000/hitung/15/0/bagi` | HTTP 200 - Defensive alert (No crash / 500 error) |
| **Non-Numeric Input** | `http://127.0.0.1:8000/hitung/sepuluh/5/kali` | HTTP 200 - Defensive validation alert |
| **Invalid Operation** | `http://127.0.0.1:8000/hitung/10/5/modulus` | HTTP 200 - Unrecognized operation warning |

---

## Project Directory Structure

```text
pbkk-tugas1-laravelsandbox/
├── app/
│   └── Http/
│       └── Controllers/
│           ├── Controller.php
│           └── PageController.php          # Skinny Controller managing all routes
├── bootstrap/
│   └── app.php
├── config/
├── database/
├── public/
│   └── index.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php               # Master layout template (Bootstrap 5.3 CDN)
│       ├── about.blade.php                 # Department profile view
│       ├── home.blade.php                  # Student profile view
│       ├── kalkulator.blade.php            # Dynamic URL calculator view
│       └── project.blade.php               # Final project idea view
├── routes/
│   ├── console.php
│   └── web.php                             # All routes bound to PageController
├── tests/
│   └── Feature/
│       ├── ExampleTest.php
│       └── PageRoutesTest.php              # Automated test suite
├── .env.example
├── .gitignore                              # Excludes /vendor/ and .env
├── composer.json
├── phpunit.xml
└── README.md
```

---

## License

This project is open-source software licensed under the [MIT License](LICENSE).
