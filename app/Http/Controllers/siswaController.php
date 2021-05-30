<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswaModel;

class siswaController extends Controller
{
    //READ
    public function __construct()
    {
        $this->siswaModel= new siswaModel();
    }
    //READ
    public function index()
    {
        $data = [
            'dm' => $this->siswaModel->allData(),
        ];
        return view('siswa', $data);
    }
}
