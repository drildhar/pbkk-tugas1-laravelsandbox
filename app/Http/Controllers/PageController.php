<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Menampilkan halaman Beranda profil mahasiswa ITS.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $mahasiswa = [
            'nama' => 'Adriel Mahira Dharma',
            'nrp' => '5025241097',
            'departemen' => 'Teknik Informatika',
            'fakultas' => 'Fakultas Teknologi Elektro dan Informatika Cerdas (FTEIC)',
            'institusi' => 'Institut Teknologi Sepuluh Nopember (ITS) Surabaya',
            'kelas' => 'Pemrograman Berbasis Kerangka Kerja (PBKK) - B',
            'semester' => 'Gasal 2026/2027',
            'dosen' => 'Dwi Sunaryono, S.Kom., M.Kom.',
            'status' => 'Mahasiswa Aktif',
            'minat' => ['Software Architecture', 'Network Security', 'Distributed Systems', 'Agentic AI']
        ];

        return view('home', compact('mahasiswa'));
    }

    /**
     * Menampilkan halaman profil Departemen Teknik Informatika ITS.
     *
     * @return \Illuminate\View\View
     */
    public function about(): View
    {
        $departemen = [
            'nama' => 'Departemen Teknik Informatika',
            'fakultas' => 'Fakultas Teknologi Elektro dan Informatika Cerdas (FTEIC)',
            'institusi' => 'Institut Teknologi Sepuluh Nopember',
            'singkatan' => 'Informatika ITS',
            'akreditasi_nasional' => 'Unggul (LAM INFOKOM)',
            'akreditasi_internasional' => 'ASIIN (Akkreditierungsagentur für Studiengänge der Ingenieurwissenschaften, der Informatik, der Naturwissenschaften und der Mathematik)',
            'visi' => 'Menjadi pusat rujukan pendidikan dan riset bidang sains komputasi yang unggul di tingkat nasional dan internasional, serta berkontribusi nyata dalam pemecahan masalah masyarakat dan industri berbasis teknologi informasi modern.',
            'misi' => [
                'Menyelenggarakan pendidikan tinggi bertaraf internasional dalam sains komputasi dan rekayasa perangkat lunak.',
                'Mengembangkan riset inovatif mutakhir berdaya guna dalam bidang kecerdasan komputasional, keamanan jaringan, arsitektur perangkat lunak, dan komputasi awan.',
                'Menjalin kolaborasi strategis dengan komunitas ilmiah, industri teknologi global, dan institusi pemerintahan.',
                'Membina sivitas akademika berkarakter tangguh, adaptif, etis, dan berjiwa wirausaha teknologi (technopreneurship).'
            ],
            'fokus_riset' => [
                [
                    'judul' => 'Arsitektur Komputasi & Jaringan Terdistribusi',
                    'deskripsi' => 'Pengembangan infrastruktur komputasi skala besar, cloud/edge computing, SDN, serta protokol jaringan berkinerja tinggi.'
                ],
                [
                    'judul' => 'Keamanan Siber & Forensika Digital',
                    'deskripsi' => 'Riset vulnerability assessment, pertahanan jaringan cerdas, otomasi deteksi malware, dan protokol kriptografi terkini.'
                ],
                [
                    'judul' => 'Kecerdasan Artifisial & Rekayasa Perangkat Lunak Otonom',
                    'deskripsi' => 'Penerapan Model Bahasa Besar (LLM), Agentic AI, machine learning adaptif, dan metodologi pengembangan perangkat lunak modern.'
                ]
            ],
            'fasilitas_lab' => [
                'Laboratorium Arsitektur dan Jaringan Komputer (AJK)',
                'Laboratorium Komputasi Cerdas dan Visi (KCV)',
                'Laboratorium Rekayasa Perangkat Lunak (RPL)',
                'Laboratorium Komputasi Berbasis Jaringan (KBJ)',
                'Laboratorium Manajemen Informasi (MI)',
                'Laboratorium Algoritma dan Pemrograman (Alpro)'
            ]
        ];

        return view('about', compact('departemen'));
    }

    /**
     * Menampilkan halaman ide proyek akhir kelompok: Opsi 3 (Network Port Scanner & Log Analyzer Agent).
     *
     * @return \Illuminate\View\View
     */
    public function project(): View
    {
        $proyek = [
            'judul' => 'Network Port Scanner & Log Analyzer Agent',
            'tema_opsi' => 'Opsi 3 - Network Port Scanner & Log Analyzer Agent',
            'kategori' => 'Autonomous Agentic AI Desktop Application',
            'visi' => 'Membangun platform Agentic AI mandiri berbasis desktop application menggunakan NativePHP dan kerangka kerja Laravel yang bertindak sebagai analis operasional dan keamanan jaringan lokal secara otonom.',
            'stack' => [
                'framework_inti' => 'Laravel 11 / 12',
                'desktop_runtime' => 'NativePHP (Electron runtime terpadu untuk ekosistem PHP/Laravel)',
                'ui_reaktif' => 'Laravel Livewire 3 (Reactivity tanpa framework JS eksternal yang berat)',
                'llm_engine' => 'Ollama Local API (DeepSeek-R1 / Llama 3) & Integrasi Fallback Senopati AI ITS',
                'analisis_jaringan' => 'Nmap Binary Integration / PHP Socket Scanner Engine',
                'storage_log' => 'SQLite Embedded Database & Redis Queue Driver'
            ],
            'arsitektur_komponen' => [
                [
                    'nama' => 'Antarmuka Obrolan Reaktif (Reactive Chat UI)',
                    'teknologi' => 'Laravel Livewire & Tailwind CSS / Bootstrap',
                    'penjelasan' => 'Antarmuka obrolan dua arah yang merender respons streaming dari model bahasa secara real-time, menampilkan visualisasi proses eksekusi task/tool, serta timeline event keamanan jaringan.'
                ],
                [
                    'nama' => 'Orkestrator Agen & Tool Calling Engine',
                    'teknologi' => 'Laravel Service Container & NativePHP Process Runner',
                    'penjelasan' => 'Pusat logika otonom yang memetakan instruksi bahasa alami pengguna ke JSON schema function/tool calling, memvalidasi parameter eksekusi, serta menjalankan tool secara terisolasi dan aman.'
                ],
                [
                    'nama' => 'Pemindai Port & Pengumpul Log Sistem',
                    'teknologi' => 'Nmap CLI, Raw PHP Sockets, Tail Process Reader',
                    'penjelasan' => 'Modul worker yang melakukan pemindaian rentang port TCP/UDP, identifikasi layanan/banner grabbing, serta pemantauan berkas log web server (Nginx/Apache) dan firewall secara real-time.'
                ],
                [
                    'nama' => 'Mesin Analisis Anomali & Rekomendasi Remediasi',
                    'teknologi' => 'LLM Engine (Ollama / Senopati AI ITS)',
                    'penjelasan' => 'Menganalisis anomali lonjakan akses, dugaan brute-force attack, port berisiko terbuka, dan menghasilkan ringkasan eksekutif beserta rekomendasi konfigurasi firewall (iptables/UFW).'
                ]
            ],
            'alur_kerja' => [
                'Pengguna memasukkan perintah teks natural (misal: "Pindai subnet 192.168.1.0/24 dan identifikasi port database yang terbuka").',
                'Agen AI mengekstrak intent, memanggil Tool Scanner dengan batasan subnet yang ditentukan.',
                'NativePHP menjalankan proses pemindaian secara asinkron di latar belakang tanpa membekukan antarmuka.',
                'Hasil pemindaian mentah (raw JSON) divalidasi dan dianalisis oleh LLM lokal.',
                'Agen menampilkan laporan audit ringkas, visualisasi status port, serta saran mitigasi keamanan langsung pada panel obrolan.'
            ],
            'manfaat_inovasi' => [
                'Penyederhanaan manajemen jaringan bagi administrator melalui pendekatan antarmuka percakapan intuitif.',
                'Privasi data terjamin karena seluruh analisis log dan inferensi LLM dapat dieksekusi 100% lokal tanpa kebocoran ke cloud publik.',
                'Eksekusi aplikasi desktop native lintas platform (Windows, macOS, Linux) tanpa memerlukan setup web server eksternal.'
            ]
        ];

        return view('project', compact('proyek'));
    }

    /**
     * Menjalankan kalkulator dinamis berbasis URL dengan penanganan error defensif.
     *
     * @param mixed $angka1
     * @param mixed $angka2
     * @param string $operasi
     * @return \Illuminate\View\View
     */
    public function hitung($angka1, $angka2, string $operasi): View
    {
        $operasiNormalized = strtolower(trim($operasi));
        $validasiSukses = true;
        $pesanError = null;
        $simbol = '';
        $namaOperasi = '';
        $hasil = null;
        $teksHasil = '';

        // Validasi Defensif: Pastikan kedua parameter adalah numerik
        if (!is_numeric($angka1) || !is_numeric($angka2)) {
            $validasiSukses = false;
            $pesanError = 'Parameter tidak valid! Kedua operan (angka1 dan angka2) wajib bertipe numerik.';
        } else {
            $num1 = $angka1 + 0; // Konversi otomatis ke integer/float
            $num2 = $angka2 + 0;

            switch ($operasiNormalized) {
                case 'tambah':
                    $simbol = '+';
                    $namaOperasi = 'tambah';
                    $hasil = $num1 + $num2;
                    $teksHasil = "Hasil dari {$num1} tambah {$num2} adalah {$hasil}";
                    break;

                case 'kurang':
                    $simbol = '-';
                    $namaOperasi = 'kurang';
                    $hasil = $num1 - $num2;
                    $teksHasil = "Hasil dari {$num1} kurang {$num2} adalah {$hasil}";
                    break;

                case 'kali':
                    $simbol = '×';
                    $namaOperasi = 'kali';
                    $hasil = $num1 * $num2;
                    $teksHasil = "Hasil dari {$num1} kali {$num2} adalah {$hasil}";
                    break;

                case 'bagi':
                    $simbol = '÷';
                    $namaOperasi = 'bagi';
                    // Penanganan Defensif: Cegah pembagian dengan nol (division by zero)
                    if ($num2 == 0) {
                        $validasiSukses = false;
                        $pesanError = 'Kesalahan Aritmatika: Pembagian dengan angka nol (0) tidak terdefinisi secara matematis.';
                    } else {
                        $hasil = $num1 / $num2;
                        // Pembulatan rapi jika angka desimal panjang
                        $hasilFormatted = is_float($hasil) ? round($hasil, 4) : $hasil;
                        $teksHasil = "Hasil dari {$num1} bagi {$num2} adalah {$hasilFormatted}";
                    }
                    break;

                default:
                    $validasiSukses = false;
                    $pesanError = "Operasi '{$operasi}' tidak dikenali. Pilihan operasi valid: 'tambah', 'kurang', 'kali', atau 'bagi'.";
                    break;
            }
        }

        $dataKalkulator = [
            'angka1_raw' => $angka1,
            'angka2_raw' => $angka2,
            'operasi_raw' => $operasi,
            'validasi_sukses' => $validasiSukses,
            'pesan_error' => $pesanError,
            'simbol' => $simbol,
            'nama_operasi' => $namaOperasi,
            'hasil' => $hasil,
            'teks_hasil' => $teksHasil,
        ];

        return view('kalkulator', compact('dataKalkulator'));
    }
}
