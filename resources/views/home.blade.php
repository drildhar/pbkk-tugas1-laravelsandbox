@extends('layouts.app')

@section('title', 'Beranda - Profil Mahasiswa ITS')

@section('content')
<div class="row gy-4">
    <!-- Hero Banner Card -->
    <div class="col-12">
        <div class="p-4 p-md-5 rounded-4 text-white shadow-sm" style="background: linear-gradient(135deg, #013880 0%, #0353be 60%, #0dcaf0 100%);">
            <div class="row align-items-center gy-3">
                <div class="col-lg-8">
                    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-3 text-uppercase">
                        <i class="bi bi-mortarboard-fill me-1"></i> ITS Academic Profile
                    </span>
                    <h1 class="display-6 fw-extrabold mb-2 text-white">Selamat Datang di Portal Profil Mahasiswa</h1>
                    <p class="lead mb-0 text-white-50">
                        Implementasi terstruktur arsitektur MVC (Model-View-Controller) pada kerangka kerja modern Laravel untuk pemenuhan tugas praktikum PBKK.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('project') }}" class="btn btn-light btn-lg px-4 fw-bold shadow-sm rounded-pill text-primary">
                        <i class="bi bi-arrow-right-circle me-1"></i> Rencana Proyek
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Student Bio Card -->
    <div class="col-lg-7">
        <div class="card card-custom h-100 bg-white">
            <div class="card-header bg-transparent border-0 pt-4 px-4 pb-0 d-flex justify-content-between align-items-center">
                <h5 class="fw-bold mb-0 text-primary">
                    <i class="bi bi-person-badge-fill me-2"></i>Informasi Akademik Mahasiswa
                </h5>
                <span class="badge bg-success-subtle text-success px-3 py-1 rounded-pill">
                    <i class="bi bi-check-circle me-1"></i>{{ $mahasiswa['status'] }}
                </span>
            </div>
            <div class="card-body px-4 py-3">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <tbody>
                            <tr>
                                <th class="text-muted w-35 py-3"><i class="bi bi-person me-2 text-primary"></i>Nama Lengkap</th>
                                <td class="fw-bold text-dark py-3">{{ $mahasiswa['nama'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-muted py-3"><i class="bi bi-upc-scan me-2 text-primary"></i>NRP</th>
                                <td class="fw-semibold text-dark py-3">
                                    <span class="badge bg-primary-subtle text-primary fs-6 px-3 py-1 rounded-pill">
                                        {{ $mahasiswa['nrp'] }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-muted py-3"><i class="bi bi-diagram-3 me-2 text-primary"></i>Departemen</th>
                                <td class="fw-semibold text-dark py-3">{{ $mahasiswa['departemen'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-muted py-3"><i class="bi bi-building me-2 text-primary"></i>Fakultas</th>
                                <td class="text-dark py-3">{{ $mahasiswa['fakultas'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-muted py-3"><i class="bi bi-geo-alt me-2 text-primary"></i>Institusi</th>
                                <td class="text-dark py-3">{{ $mahasiswa['institusi'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-muted py-3"><i class="bi bi-journal-code me-2 text-primary"></i>Mata Kuliah</th>
                                <td class="fw-semibold text-dark py-3">{{ $mahasiswa['kelas'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-muted py-3"><i class="bi bi-calendar-event me-2 text-primary"></i>Semester</th>
                                <td class="text-dark py-3">{{ $mahasiswa['semester'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-muted py-3"><i class="bi bi-person-workspace me-2 text-primary"></i>Dosen Pengampu</th>
                                <td class="text-dark py-3">{{ $mahasiswa['dosen'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-light border-0 px-4 py-3 rounded-bottom-4">
                <p class="small text-muted mb-2 fw-semibold">Bidang Minat & Keahlian Komputasi:</p>
                <div class="d-flex flex-wrap gap-2">
                    @foreach ($mahasiswa['minat'] as $item)
                        <span class="badge badge-tag px-3 py-2 rounded-pill">{{ $item }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Architectural Compliance Summary Card -->
    <div class="col-lg-5">
        <div class="card card-custom h-100 bg-white">
            <div class="card-header bg-transparent border-0 pt-4 px-4 pb-0">
                <h5 class="fw-bold mb-0 text-dark">
                    <i class="bi bi-shield-lock-fill me-2 text-success"></i>Kepatuhan Arsitektur
                </h5>
                <p class="small text-muted mt-1 mb-0">Verifikasi checklist teknis standar silabus PBKK ITS</p>
            </div>
            <div class="card-body px-4 py-3">
                <div class="list-group list-group-flush">
                    <div class="list-group-item px-0 py-3 border-bottom d-flex gap-3 align-items-start">
                        <i class="bi bi-check-circle-fill text-success fs-5 mt-1"></i>
                        <div>
                            <h6 class="mb-1 fw-bold text-dark">Zero Route Closure</h6>
                            <p class="mb-0 small text-muted">Seluruh rute HTTP di-dispatch secara eksplisit ke <code>App\Http\Controllers\PageController</code>.</p>
                        </div>
                    </div>
                    <div class="list-group-item px-0 py-3 border-bottom d-flex gap-3 align-items-start">
                        <i class="bi bi-check-circle-fill text-success fs-5 mt-1"></i>
                        <div>
                            <h6 class="mb-1 fw-bold text-dark">Blade Layout Inheritance</h6>
                            <p class="mb-0 small text-muted">Menggunakan template induk terpusat <code>layouts/app.blade.php</code> dengan direktif &#64;yield dan &#64;extends.</p>
                        </div>
                    </div>
                    <div class="list-group-item px-0 py-3 border-bottom d-flex gap-3 align-items-start">
                        <i class="bi bi-check-circle-fill text-success fs-5 mt-1"></i>
                        <div>
                            <h6 class="mb-1 fw-bold text-dark">Proteksi XSS Otomatis</h6>
                            <p class="mb-0 small text-muted">Rendering data sepenuhnya memanfaatkan sintaks kurung kurawal ganda Blade <code>&#123;&#123; $variabel &#125;&#125;</code>.</p>
                        </div>
                    </div>
                    <div class="list-group-item px-0 py-3 d-flex gap-3 align-items-start">
                        <i class="bi bi-check-circle-fill text-success fs-5 mt-1"></i>
                        <div>
                            <h6 class="mb-1 fw-bold text-dark">Skinny Controller & Passive View</h6>
                            <p class="mb-0 small text-muted">Controller hanya mempersiapkan data terstruktur dan View bertindak murni sebagai perender tampilan.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-light border-0 px-4 py-3 rounded-bottom-4">
                <a href="{{ route('about') }}" class="btn btn-outline-primary btn-sm w-100 rounded-pill fw-semibold">
                    <i class="bi bi-arrow-right me-1"></i> Pelajari Profil Jurusan Informatika
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
