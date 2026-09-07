# ITS Academic Profile - Laravel MVC Sandbox

An academic web application built from scratch with **Laravel** demonstrating pure **Model-View-Controller (MVC)** architectural principles, **Blade layout inheritance**, and defensive programming practices.

This project was developed for the **Framework-Based Programming (Pemrograman Berbasis Kerangka Kerja - PBKK)** coursework at the **Department of Informatics, Faculty of Intelligent Electrical and Informatics Technology (FTEIC), Institut Teknologi Sepuluh Nopember (ITS)**.

---

## Features & Highlights

- **Pure MVC Separation of Concerns (SoC):** Zero route closures for view rendering; all HTTP requests are dispatched through `App\Http\Controllers\PageController`.
- **Blade Layout Inheritance:** Centralized layout template (`resources/views/layouts/app.blade.php`) using `@yield`, `@section`, and `@extends`.
- **Responsive UI:** Styled with modern Bootstrap 5.3 CDN, customized with ITS brand color accents, mobile navbar toggle, and dynamic active navigation indicators.
- **Academic Pages:**
  - `/` (Home): Student identity and course information.
  - `/about` (Department Profile): Overview of Informatics ITS, visions, accreditations, and research labs.
  - `/project-idea` (Final Project Proposal): Architecture proposal for *"Network Port Scanner & Log Analyzer Agent"* combining NativePHP, Laravel Livewire, and local LLMs (Ollama / Senopati AI).
- **Dynamic Calculator (`/hitung/{angka1}/{angka2}/{operasi}`):** URL parameter calculation with defensive handling for non-numeric input, invalid operations, and division-by-zero prevention without throwing HTTP 500 errors.

---

## Prerequisites

Ensure your development environment meets the following minimum requirements:

- **PHP:** `^8.2` or higher (with `mbstring`, `openssl`, `tokenizer`, and `xml` extensions enabled)
- **Composer:** `^2.x` (PHP dependency manager)
- **Node.js & npm:** Optional (only if compiling front-end assets locally; Bootstrap 5.3 is delivered via CDN)
- **Git:** Version control system

---

## Installation & Local Development

Follow these steps to run the application locally:

### 1. Clone the Repository
```bash
git clone https://github.com/<your-username>/pbkk-tugas1-laravelsandbox.git
cd pbkk-tugas1-laravelsandbox
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Environment Configuration
Copy the sample environment file and generate a unique application key:
```bash
cp .env.example .env
php artisan key:generate
```
*(On Windows PowerShell, use `copy .env.example .env`)*

### 4. Start the Local Server
```bash
php artisan serve
```

The application will be accessible at:
```
http://127.0.0.1:8000
```

---

## Evaluation & Test Endpoints

| Route | Description | Example URL |
|---|---|---|
| `GET /` | Student Profile & Academic Overview | `http://127.0.0.1:8000/` |
| `GET /about` | Informatics ITS Profile & Research | `http://127.0.0.1:8000/about` |
| `GET /project-idea` | Final Project Proposal (Agentic AI) | `http://127.0.0.1:8000/project-idea` |
| `GET /hitung/{a}/{b}/{op}` | Dynamic Calculator (Multiply) | `http://127.0.0.1:8000/hitung/10/5/kali` |
| `GET /hitung/{a}/{b}/{op}` | Dynamic Calculator (Add) | `http://127.0.0.1:8000/hitung/50/25/tambah` |
| `GET /hitung/{a}/{b}/{op}` | Defensive: Division by Zero | `http://127.0.0.1:8000/hitung/15/0/bagi` |
| `GET /hitung/{a}/{b}/{op}` | Defensive: Non-numeric Input | `http://127.0.0.1:8000/hitung/sepuluh/5/kali` |

---

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
