<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $nama = "Afzan Baitul Akmal";
        $tanggal_lahir = "2005-05-20";
        $hobi = ['Memancing', 'Badminton', 'Fotografi', 'Berenang'];
        $tanggal_harus_wisuda = "2028-10-25";
        $semester_saat_ini = 3;
        $cita_cita = "Menjadi Orang Sukses";

        // Perhitungan umur menggunakan fungsi PHP bawaan
        $tanggal_lahir_dt = new \DateTime($tanggal_lahir);
        $hari_ini = new \DateTime();
        $umur = $tanggal_lahir_dt->diff($hari_ini)->y;

        // Perhitungan selisih hari menuju wisuda
        $tanggal_wisuda_dt = new \DateTime($tanggal_harus_wisuda);
        $selisih_hari = $tanggal_wisuda_dt->diff($hari_ini)->days;

        if ($tanggal_wisuda_dt < $hari_ini) {
            $selisih_hari = -$selisih_hari;
        }

        // Keterangan semester
        $status_semester = ($semester_saat_ini < 3)
                         ? "Masih Awal, Kejar TAK"
                         : "Jangan main-main, kurang-kurangi main game!";

        return view('pegawai', [
            'name' => $nama,
            'my_age' => $umur,
            'hobbies' => $hobi,
            'tgl_harus_wisuda' => $tanggal_harus_wisuda,
            'time_to_study_left' => $selisih_hari,
            'current_semester' => $semester_saat_ini,
            'status_semester' => $status_semester,
            'future_goal' => $cita_cita,
        ]);

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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
