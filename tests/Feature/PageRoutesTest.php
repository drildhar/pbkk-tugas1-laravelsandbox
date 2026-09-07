<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageRoutesTest extends TestCase
{
    /**
     * Test Home page.
     */
    public function test_home_page_returns_success(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Adriel Mahira Dharma');
        $response->assertSee('5025241097');
        $response->assertSee('Teknik Informatika');
        $response->assertSee('PBKK');
        $response->assertSee('Dwi Sunaryono');
    }

    /**
     * Test About page.
     */
    public function test_about_page_returns_success(): void
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
        $response->assertSee('Departemen Teknik Informatika');
        $response->assertSee('ASIIN');
    }

    /**
     * Test Project Idea page.
     */
    public function test_project_page_returns_success(): void
    {
        $response = $this->get('/project-idea');
        $response->assertStatus(200);
        $response->assertSee('Network Port Scanner & Log Analyzer Agent');
        $response->assertSee('NativePHP');
        $response->assertSee('Livewire');
    }

    /**
     * Test Calculator normal operations.
     */
    public function test_kalkulator_kali(): void
    {
        $response = $this->get('/hitung/10/5/kali');
        $response->assertStatus(200);
        $response->assertSee('Hasil dari 10 kali 5 adalah 50');
    }

    public function test_kalkulator_tambah(): void
    {
        $response = $this->get('/hitung/50/25/tambah');
        $response->assertStatus(200);
        $response->assertSee('Hasil dari 50 tambah 25 adalah 75');
    }

    public function test_kalkulator_kurang(): void
    {
        $response = $this->get('/hitung/100/35/kurang');
        $response->assertStatus(200);
        $response->assertSee('Hasil dari 100 kurang 35 adalah 65');
    }

    public function test_kalkulator_bagi(): void
    {
        $response = $this->get('/hitung/100/4/bagi');
        $response->assertStatus(200);
        $response->assertSee('Hasil dari 100 bagi 4 adalah 25');
    }

    /**
     * Test Calculator defensive edge cases.
     */
    public function test_kalkulator_division_by_zero(): void
    {
        $response = $this->get('/hitung/15/0/bagi');
        $response->assertStatus(200);
        $response->assertSee('Pembagian dengan angka nol');
    }

    public function test_kalkulator_non_numeric(): void
    {
        $response = $this->get('/hitung/sepuluh/5/kali');
        $response->assertStatus(200);
        $response->assertSee('Parameter tidak valid');
    }

    public function test_kalkulator_invalid_operation(): void
    {
        $response = $this->get('/hitung/10/5/modulus');
        $response->assertStatus(200);
        $response->assertSee('tidak dikenali');
    }
}
