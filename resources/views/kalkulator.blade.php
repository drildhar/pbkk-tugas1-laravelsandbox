@extends('layouts.app')

@section('title', 'Kalkulator Dinamis URL - Fitur Bonus A+')

@section('content')
<div class="row gy-4">
    <!-- Header Banner -->
    <div class="col-12">
        <div class="p-4 p-md-5 rounded-4 text-white shadow-sm" style="background: linear-gradient(135deg, #065f46 0%, #059669 60%, #10b981 100%);">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-3 text-uppercase">
                <i class="bi bi-star-fill me-1"></i> Fitur Tantangan Tambahan (Bonus Nilai A+)
            </span>
            <h1 class="display-6 fw-extrabold mb-2 text-white">Kalkulator Dinamis Berbasis URL</h1>
            <p class="lead mb-0 text-white-50">
                Penerapan route parameter dinamis <code>GET /hitung/{angka1}/{angka2}/{operasi}</code> dengan validasi defensif non-angka dan pencegahan <em>division by zero</em>.
            </p>
        </div>
    </div>

    <!-- Main Calculator Result Display -->
    <div class="col-lg-7">
        <div class="card card-custom h-100 bg-white">
            <div class="card-header bg-transparent border-0 pt-4 px-4 pb-0 d-flex justify-content-between align-items-center">
                <h5 class="fw-bold text-dark mb-0">
                    <i class="bi bi-display me-2 text-primary"></i>Status & Hasil Komputasi
                </h5>
                @if ($dataKalkulator['validasi_sukses'])
                    <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill fw-semibold">
                        <i class="bi bi-check-circle-fill me-1"></i>Validasi Sukses
                    </span>
                @else
                    <span class="badge bg-danger-subtle text-danger px-3 py-2 rounded-pill fw-semibold">
                        <i class="bi bi-exclamation-triangle-fill me-1"></i>Validasi Gagal
                    </span>
                @endif
            </div>

            <div class="card-body px-4 py-4">
                @if ($dataKalkulator['validasi_sukses'])
                    <!-- Success Calculation Box -->
                    <div class="alert alert-success border-success-subtle rounded-4 p-4 mb-4">
                        <span class="text-uppercase small fw-bold text-success-emphasis d-block mb-1">
                            <i class="bi bi-check2-all me-1"></i>Format Output Standar PBKK:
                        </span>
                        <h4 class="fw-extrabold text-success mb-0">
                            "{{ $dataKalkulator['teks_hasil'] }}"
                        </h4>
                    </div>

                    <!-- Calculation Detail Matrix -->
                    <div class="row g-3 text-center">
                        <div class="col-4">
                            <div class="p-3 bg-light rounded-3 border">
                                <span class="small text-muted d-block fw-semibold mb-1">Operan 1</span>
                                <span class="fs-4 fw-bold text-dark">{{ $dataKalkulator['angka1_raw'] }}</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-3 bg-light rounded-3 border">
                                <span class="small text-muted d-block fw-semibold mb-1">Operasi ({{ $dataKalkulator['nama_operasi'] }})</span>
                                <span class="fs-4 fw-bold text-primary">{{ $dataKalkulator['simbol'] }}</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-3 bg-light rounded-3 border">
                                <span class="small text-muted d-block fw-semibold mb-1">Operan 2</span>
                                <span class="fs-4 fw-bold text-dark">{{ $dataKalkulator['angka2_raw'] }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 p-3 bg-light rounded-3 d-flex align-items-center justify-content-between border">
                        <span class="fw-semibold text-muted small">Nilai Numerik Akhir:</span>
                        <span class="badge bg-primary fs-5 px-3 py-2 rounded-pill">{{ $dataKalkulator['hasil'] }}</span>
                    </div>
                @else
                    <!-- Error / Defensive Alert Box -->
                    <div class="alert alert-danger border-danger-subtle rounded-4 p-4 mb-4">
                        <div class="d-flex align-items-start gap-3">
                            <i class="bi bi-shield-fill-x text-danger fs-3 mt-1"></i>
                            <div>
                                <h5 class="alert-heading fw-bold text-danger mb-2">Penanganan Error Defensif Aktif!</h5>
                                <p class="mb-0 text-danger-emphasis">{{ $dataKalkulator['pesan_error'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-3 bg-light rounded-3 border text-muted small">
                        <strong class="text-dark d-block mb-1"><i class="bi bi-info-circle me-1"></i>Parameter yang Dikirim Melalui URL:</strong>
                        <ul class="mb-0 ps-3">
                            <li>Angka 1: <code>{{ $dataKalkulator['angka1_raw'] }}</code></li>
                            <li>Angka 2: <code>{{ $dataKalkulator['angka2_raw'] }}</code></li>
                            <li>Operasi: <code>{{ $dataKalkulator['operasi_raw'] }}</code></li>
                        </ul>
                    </div>
                @endif
            </div>

            <div class="card-footer bg-light border-0 px-4 py-3 rounded-bottom-4">
                <span class="small text-muted">
                    <i class="bi bi-info-circle me-1"></i>URL aktif saat ini: <code>{{ request()->path() }}</code>
                </span>
            </div>
        </div>
    </div>

    <!-- Quick Links for Evaluation (Dosen & Asdos Tester) -->
    <div class="col-lg-5">
        <div class="card card-custom h-100 bg-white">
            <div class="card-header bg-transparent border-0 pt-4 px-4 pb-0">
                <h5 class="fw-bold text-dark mb-0">
                    <i class="bi bi-lightning-charge-fill me-2 text-warning"></i>Quick Links Pengujian Demo
                </h5>
                <p class="small text-muted mt-1 mb-0">Tautan cepat evaluasi untuk menguji semua cabang operasi dan skenario defensif</p>
            </div>
            <div class="card-body px-4 py-3">
                <!-- Skenario Valid -->
                <h6 class="small text-uppercase fw-bold text-success mb-2">
                    <i class="bi bi-check2-circle me-1"></i>Skenario Perhitungan Normal:
                </h6>
                <div class="d-grid gap-2 mb-4">
                    <a href="{{ route('kalkulator', ['angka1' => 10, 'angka2' => 5, 'operasi' => 'kali']) }}" 
                       class="btn btn-sm btn-outline-primary text-start d-flex justify-content-between align-items-center rounded-3 {{ request()->is('hitung/10/5/kali') ? 'active' : '' }}">
                        <span><strong>10 kali 5</strong> (Perkalian)</span>
                        <code class="small text-light-emphasis">/hitung/10/5/kali</code>
                    </a>
                    <a href="{{ route('kalkulator', ['angka1' => 50, 'angka2' => 25, 'operasi' => 'tambah']) }}" 
                       class="btn btn-sm btn-outline-primary text-start d-flex justify-content-between align-items-center rounded-3 {{ request()->is('hitung/50/25/tambah') ? 'active' : '' }}">
                        <span><strong>50 tambah 25</strong> (Penjumlahan)</span>
                        <code class="small text-light-emphasis">/hitung/50/25/tambah</code>
                    </a>
                    <a href="{{ route('kalkulator', ['angka1' => 100, 'angka2' => 35, 'operasi' => 'kurang']) }}" 
                       class="btn btn-sm btn-outline-primary text-start d-flex justify-content-between align-items-center rounded-3 {{ request()->is('hitung/100/35/kurang') ? 'active' : '' }}">
                        <span><strong>100 kurang 35</strong> (Pengurangan)</span>
                        <code class="small text-light-emphasis">/hitung/100/35/kurang</code>
                    </a>
                    <a href="{{ route('kalkulator', ['angka1' => 100, 'angka2' => 4, 'operasi' => 'bagi']) }}" 
                       class="btn btn-sm btn-outline-primary text-start d-flex justify-content-between align-items-center rounded-3 {{ request()->is('hitung/100/4/bagi') ? 'active' : '' }}">
                        <span><strong>100 bagi 4</strong> (Pembagian)</span>
                        <code class="small text-light-emphasis">/hitung/100/4/bagi</code>
                    </a>
                </div>

                <!-- Skenario Edge Cases / Defensif -->
                <h6 class="small text-uppercase fw-bold text-danger mb-2">
                    <i class="bi bi-shield-exclamation me-1"></i>Skenario Defensif & Error Handling:
                </h6>
                <div class="d-grid gap-2">
                    <a href="{{ route('kalkulator', ['angka1' => 15, 'angka2' => 0, 'operasi' => 'bagi']) }}" 
                       class="btn btn-sm btn-outline-danger text-start d-flex justify-content-between align-items-center rounded-3 {{ request()->is('hitung/15/0/bagi') ? 'active' : '' }}">
                        <span><strong>Division by Zero</strong> (Bagi 0)</span>
                        <code class="small text-danger">/hitung/15/0/bagi</code>
                    </a>
                    <a href="{{ route('kalkulator', ['angka1' => 'sepuluh', 'angka2' => 5, 'operasi' => 'kali']) }}" 
                       class="btn btn-sm btn-outline-danger text-start d-flex justify-content-between align-items-center rounded-3 {{ request()->is('hitung/sepuluh/5/kali') ? 'active' : '' }}">
                        <span><strong>Non-Numeric Input</strong> (String)</span>
                        <code class="small text-danger">/hitung/sepuluh/5/kali</code>
                    </a>
                    <a href="{{ route('kalkulator', ['angka1' => 10, 'angka2' => 5, 'operasi' => 'modulus']) }}" 
                       class="btn btn-sm btn-outline-danger text-start d-flex justify-content-between align-items-center rounded-3 {{ request()->is('hitung/10/5/modulus') ? 'active' : '' }}">
                        <span><strong>Operasi Tidak Valid</strong></span>
                        <code class="small text-danger">/hitung/10/5/modulus</code>
                    </a>
                </div>
            </div>
            <div class="card-footer bg-light border-0 px-4 py-3 rounded-bottom-4">
                <small class="text-muted">Aplikasi tidak akan pernah memunculkan crash / error 500 saat parameter anomali dimasukkan.</small>
            </div>
        </div>
    </div>
</div>
@endsection
