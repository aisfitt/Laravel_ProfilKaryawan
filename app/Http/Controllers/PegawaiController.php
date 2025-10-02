<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){
        /* Cara 1 */

        // Definisikan tanggal-tanggal yang akan digunakan
        $nowTimestamp = time();
        $birthDateString = '2006-08-06';
        $joinDateString = '2024-08-15';

        $data ['employee_name']      = 'Aisyah Fitri';

        // 1. PERBAIKAN UMUR: Hitung selisih waktu dalam detik, lalu konversi ke tahun.
        // Kesalahan asli: $data ['age'] = (int)date('Y-m-d') - 2006-08-06;
        $birthTimestamp = strtotime($birthDateString);
        $ageSeconds = $nowTimestamp - $birthTimestamp;

        // Hitung umur dalam tahun (dibagi dengan detik dalam 365.25 hari)
        $data ['age'] = floor($ageSeconds / (365.25 * 24 * 60 * 60)); // Hasil: Tahun bulat

        $data ['position'] = 'CEO';

        // 2. PERBAIKAN SKILLS: Mengubah string menjadi ARRAY agar bisa di-loop di Blade (@foreach)
        $data ['skills'] = [
            'Leadership',
            'Robotics',
            'Programming',
            'Data Analysis',
            'AI'
        ];

        // Menggunakan tanggal gabung yang diformat dengan baik
        $data ['join_date']      = date('d M Y', strtotime($joinDateString));

        // 3. PERBAIKAN LAMA BEKERJA: Hitung selisih waktu dalam detik, lalu konversi ke hari.
        // Kesalahan asli: $data ['working_duration'] = date('Y-m-d') - date('2024-08-15');
        $joinTimestamp = strtotime($joinDateString);
        $durationSeconds = $nowTimestamp - $joinTimestamp;

        // Hitung lama bekerja dalam hari
        $data ['working_duration'] = floor($durationSeconds / (60 * 60 * 24));

        // Logika Status (menggunakan jumlah hari)
        if($data ['working_duration'] > 730){
            $data ['status'] = 'Sudah senior, jadilah teladan bagi rekan kerja!';
        } else {
            $data ['status'] = 'Masih pegawai baru, tingkatkan pengalaman kerja!';
        }

        $data ['salary']             = 100000000;
        $data ['career_goal']        = 'Mengambil alih OpenAI';

        return view('pegawai', $data );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}
