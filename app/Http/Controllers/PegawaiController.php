<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        // Waktu sekarang (timestamp dalam detik)
        $nowTimestamp = time();

        // Data dasar pegawai
        $birthDateString = '2006-08-06';   // tanggal lahir
        $joinDateString  = '2024-08-15';   // tanggal masuk kerja

        $data['employee_name'] = 'Aisyah Fitri';
        $data['position']      = 'CEO';

        // Hitung umur berdasarkan selisih waktu dari tanggal lahir
        $birthTimestamp = strtotime($birthDateString);
        $ageSeconds     = $nowTimestamp - $birthTimestamp;
        $data['age']    = floor($ageSeconds / (365.25 * 24 * 60 * 60)); // dalam tahun

        // Data skills disimpan dalam array agar bisa ditampilkan per item di Blade
        $data['skills'] = [
            'Leadership',
            'Robotics',
            'Programming',
            'Data Analysis',
            'AI'
        ];

        //format tanggal masuk kerja
        $data['join_date'] = date('d M Y', strtotime($joinDateString));

        // Hitung lama bekerja dalam hari
        $joinTimestamp     = strtotime($joinDateString);
        $durationSeconds   = $nowTimestamp - $joinTimestamp;
        $data['working_duration'] = floor($durationSeconds / (60 * 60 * 24));

        // Tentukan status pegawai berdasarkan lama bekerja
        if ($data['working_duration'] > 730) { // lebih dari 2 tahun
            $data['status'] = 'Sudah senior, jadilah teladan bagi rekan kerja!';
        } else {
            $data['status'] = 'Masih pegawai baru, tingkatkan pengalaman kerja!';
        }

        // Data tambahan
        $data['salary']      = 100000000;
        $data['career_goal'] = 'Mengambil alih OpenAI';

        // Kirim data ke view
        return view('pegawai', $data);
    }
}
