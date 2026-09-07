@extends('layouts.app')

@section('title', 'Profil Jurusan - Teknik Informatika ITS')

@section('content')
<div class="row gy-4">
    <!-- Header Banner -->
    <div class="col-12">
        <div class="p-4 p-md-5 rounded-4 text-white shadow-sm" style="background: linear-gradient(135deg, #002352 0%, #013880 70%, #0369a1 100%);">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-3 text-uppercase">
                <i class="bi bi-building me-1"></i> Departemen Unggulan
            </span>
            <h1 class="display-6 fw-extrabold mb-2 text-white">{{ $departemen['nama'] }}</h1>
            <p class="lead mb-0 text-white-50">
                {{ $departemen['fakultas'] }} &bull; {{ $departemen['institusi'] }}
            </p>
        </div>
    </div>

    <!-- Accreditation & Recognition Cards -->
    <div class="col-md-6">
        <div class="card card-custom h-100 bg-white border-primary border-opacity-25">
            <div class="card-body p-4 d-flex align-items-center gap-3">
                <div class="bg-primary-subtle text-primary p-3 rounded-circle fs-3">
                    <i class="bi bi-award-fill"></i>
                </div>
                <div>
                    <span class="text-uppercase text-muted fw-bold small">Akreditasi Nasional</span>
                    <h5 class="fw-bold text-dark mb-0">{{ $departemen['akreditasi_nasional'] }}</h5>
                    <small class="text-secondary">Standar Lembaga Akreditasi Mandiri Informatika dan Komputer</small>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card card-custom h-100 bg-white border-info border-opacity-25">
            <div class="card-body p-4 d-flex align-items-center gap-3">
                <div class="bg-info-subtle text-info p-3 rounded-circle fs-3">
                    <i class="bi bi-globe-americas"></i>
                </div>
                <div>
                    <span class="text-uppercase text-muted fw-bold small">Akreditasi Internasional</span>
                    <h5 class="fw-bold text-dark mb-0">{{ $departemen['akreditasi_internasional'] }}</h5>
                    <small class="text-secondary">Sertifikasi Standar Mutu Pendidikan Rekayasa & Sains Eropa</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Vision and Mission Section -->
    <div class="col-lg-7">
        <div class="card card-custom h-100 bg-white">
            <div class="card-header bg-transparent border-0 pt-4 px-4 pb-0">
                <h5 class="fw-bold text-primary mb-0">
                    <i class="bi bi-compass-fill me-2"></i>Visi & Misi Departemen
                </h5>
            </div>
            <div class="card-body px-4 py-3">
                <!-- Visi Box -->
                <div class="p-3 bg-light rounded-3 border-start border-4 border-primary mb-4">
                    <h6 class="fw-bold text-dark mb-2 text-uppercase small"><i class="bi bi-eye-fill me-1 text-primary"></i>Visi</h6>
                    <p class="mb-0 text-muted fst-italic">"{{ $departemen['visi'] }}"</p>
                </div>

                <!-- Misi List -->
                <h6 class="fw-bold text-dark mb-3 text-uppercase small"><i class="bi bi-bullseye me-1 text-primary"></i>Misi</h6>
                <div class="d-flex flex-column gap-3">
                    @foreach ($departemen['misi'] as $index => $misi)
                        <div class="d-flex gap-3">
                            <span class="badge bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 28px; height: 28px; min-width: 28px;">
                                {{ $index + 1 }}
                            </span>
                            <p class="mb-0 text-muted small">{{ $misi }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Research Laboratories -->
    <div class="col-lg-5">
        <div class="card card-custom h-100 bg-white">
            <div class="card-header bg-transparent border-0 pt-4 px-4 pb-0">
                <h5 class="fw-bold text-dark mb-0">
                    <i class="bi bi-cpu-fill me-2 text-info"></i>Laboratorium Riset Aktif
                </h5>
                <p class="small text-muted mt-1 mb-0">Pusat keunggulan penelitian dan pengembangan sivitas</p>
            </div>
            <div class="card-body px-4 py-3">
                <ul class="list-group list-group-flush">
                    @foreach ($departemen['fasilitas_lab'] as $lab)
                        <li class="list-group-item px-0 py-2 d-flex align-items-center gap-2 border-0">
                            <i class="bi bi-hdd-network text-primary"></i>
                            <span class="text-dark small fw-medium">{{ $lab }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="card-footer bg-light border-0 px-4 py-3 rounded-bottom-4">
                <div class="d-flex align-items-center justify-content-between text-muted small">
                    <span><i class="bi bi-check2-all text-success me-1"></i>Terhubung Jaringan Riset Nasional</span>
                    <a href="{{ route('project') }}" class="fw-bold text-decoration-none">Lihat Proyek &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Strategic Research Pillars -->
    <div class="col-12">
        <div class="card card-custom bg-white">
            <div class="card-header bg-transparent border-0 pt-4 px-4 pb-0">
                <h5 class="fw-bold text-dark mb-1">
                    <i class="bi bi-lightbulb-fill me-2 text-warning"></i>Komitmen Riset di Bidang Komputasi Modern
                </h5>
                <p class="small text-muted mb-0">Fokus riset terapan yang mendasari inisiatif proyek akhir mahasiswa</p>
            </div>
            <div class="card-body p-4">
                <div class="row g-3">
                    @foreach ($departemen['fokus_riset'] as $riset)
                        <div class="col-md-4">
                            <div class="p-3 border rounded-3 h-100 bg-light">
                                <h6 class="fw-bold text-primary mb-2">{{ $riset['judul'] }}</h6>
                                <p class="small text-muted mb-0">{{ $riset['deskripsi'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
