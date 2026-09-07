@extends('layouts.app')

@section('title', 'Ide Proyek Akhir - Network Port Scanner & Log Analyzer Agent')

@section('content')
<div class="row gy-4">
    <!-- Hero Banner Card -->
    <div class="col-12">
        <div class="p-4 p-md-5 rounded-4 text-white shadow-sm" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0369a1 100%);">
            <div class="d-flex flex-wrap gap-2 mb-3">
                <span class="badge bg-danger px-3 py-2 rounded-pill fw-bold text-uppercase">
                    <i class="bi bi-fire me-1"></i> {{ $proyek['tema_opsi'] }}
                </span>
                <span class="badge bg-info text-dark px-3 py-2 rounded-pill fw-bold">
                    {{ $proyek['kategori'] }}
                </span>
            </div>
            <h1 class="display-6 fw-extrabold mb-2 text-white">{{ $proyek['judul'] }}</h1>
            <p class="lead mb-0 text-white-50">
                {{ $proyek['visi'] }}
            </p>
        </div>
    </div>

    <!-- 4 Core Pillars of the Agentic Architecture -->
    <div class="col-12">
        <h4 class="fw-bold text-dark mb-3">
            <i class="bi bi-diagram-3-fill text-primary me-2"></i>Komponen Inti Arsitektur Proyek
        </h4>
        <div class="row g-3">
            <!-- Visi & NativePHP -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-custom h-100 bg-white">
                    <div class="card-body p-4">
                        <div class="text-primary fs-2 mb-3"><i class="bi bi-window-desktop"></i></div>
                        <h6 class="fw-bold text-dark mb-2">Desktop Native (NativePHP)</h6>
                        <p class="small text-muted mb-0">
                            Aplikasi desktop standalone memanfaatkan <strong>NativePHP</strong> dan <strong>Laravel</strong>, berjalan independen di sistem operasi pengguna tanpa ketergantungan web server terpisah.
                        </p>
                    </div>
                </div>
            </div>

            <!-- UI Reaktif Livewire -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-custom h-100 bg-white">
                    <div class="card-body p-4">
                        <div class="text-info fs-2 mb-3"><i class="bi bi-chat-square-dots-fill"></i></div>
                        <h6 class="fw-bold text-dark mb-2">Antarmuka Reaktif (Livewire)</h6>
                        <p class="small text-muted mb-0">
                            Chat interface interaktif dan reaktif dibangun dengan <strong>Laravel Livewire</strong>, menyajikan stream obrolan, status eksekusi task, dan update event tanpa full reload.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Integrasi LLM Lokal -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-custom h-100 bg-white">
                    <div class="card-body p-4">
                        <div class="text-success fs-2 mb-3"><i class="bi bi-robot"></i></div>
                        <h6 class="fw-bold text-dark mb-2">Integrasi LLM (Ollama / Senopati)</h6>
                        <p class="small text-muted mb-0">
                            Terhubung ke LLM lokal via <strong>API Ollama</strong> (DeepSeek/Llama) dan fallback ke <strong>API Senopati AI ITS</strong> untuk menjaga kerahasiaan data dan log jaringan sensitif.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Tool Calling Execution -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-custom h-100 bg-white">
                    <div class="card-body p-4">
                        <div class="text-warning fs-2 mb-3"><i class="bi bi-tools"></i></div>
                        <h6 class="fw-bold text-dark mb-2">Tool Execution / Backend Tasks</h6>
                        <p class="small text-muted mb-0">
                            Agen otonom mengeksekusi perintah backend nyata: <strong>port scanning</strong> (Nmap/socket), <strong>log tailing & anomaly analyzer</strong>, serta rekomendasi perbaikan firewall otomatis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Technology Stack Specifications -->
    <div class="col-lg-5">
        <div class="card card-custom h-100 bg-white">
            <div class="card-header bg-transparent border-0 pt-4 px-4 pb-0">
                <h5 class="fw-bold text-dark mb-0">
                    <i class="bi bi-layers-fill me-2 text-primary"></i>Teknologi & Dependensi
                </h5>
                <p class="small text-muted mt-1 mb-0">Komponen perangkat lunak yang dirancang terintegrasi</p>
            </div>
            <div class="card-body px-4 py-3">
                <div class="list-group list-group-flush">
                    @foreach ($proyek['stack'] as $kategori => $detail)
                        <div class="list-group-item px-0 py-2 border-bottom">
                            <span class="small text-uppercase text-muted fw-bold d-block">{{ str_replace('_', ' ', $kategori) }}</span>
                            <span class="text-dark small fw-semibold">{{ $detail }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Workflow Execution & Value Proposition -->
    <div class="col-lg-7">
        <div class="card card-custom h-100 bg-white">
            <div class="card-header bg-transparent border-0 pt-4 px-4 pb-0">
                <h5 class="fw-bold text-dark mb-0">
                    <i class="bi bi-arrow-repeat me-2 text-info"></i>Siklus Alur Kerja Agen Otonom
                </h5>
                <p class="small text-muted mt-1 mb-0">Tahapan eksekusi dari instruksi natural ke hasil audit</p>
            </div>
            <div class="card-body px-4 py-3">
                <div class="d-flex flex-column gap-3">
                    @foreach ($proyek['alur_kerja'] as $idx => $langkah)
                        <div class="p-3 bg-light rounded-3 d-flex gap-3 align-items-start border">
                            <span class="badge bg-primary text-white rounded-pill px-2 py-1 fw-bold">
                                #{{ $idx + 1 }}
                            </span>
                            <p class="mb-0 small text-muted">{{ $langkah }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card-footer bg-light border-0 px-4 py-3 rounded-bottom-4">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="small text-muted"><i class="bi bi-shield-check text-success me-1"></i>Keamanan Privasi 100% Lokal</span>
                    <a href="{{ route('kalkulator', ['angka1' => 10, 'angka2' => 5, 'operasi' => 'kali']) }}" class="btn btn-sm btn-primary rounded-pill fw-semibold">
                        Uji Fitur Bonus Kalkulator &rarr;
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
