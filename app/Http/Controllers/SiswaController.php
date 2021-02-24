<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiswaModel;
use Dompdf\Dompdf;

class SiswaController extends Controller
{
    public function __construct(){
        $this->SiswaModel = new SiswaModel();
        $this->middleware('auth');
    }

    public function index(){
        $data = [
        'siswa' => $this->SiswaModel->allData(),
        ];
        return view('v_siswa', $data );
    }

    public function detail($id_siswa){
        if (!$this->SiswaModel->detailData($id_siswa)) {
            abort(404);
        }

        $data = [
            'siswa' => $this->SiswaModel->detailData($id_siswa),
            ];
            return view('v_detailsiswa', $data );
    }

    public function add(){
        return view('v_addsiswa');
    }

    public function insert(){
        Request()->validate([
            'nis' => 'required|unique:tbl_Siswa,nis|min:4|max:5',
            'nama_siswa' => 'required',
            'id_kelas' => 'required',
            'id_jurusan' => 'required',
            'foto_siswa' => 'required',
        ],[
            'nis.required' => 'wajib di isi !!',
            'nis.unique' => 'nis ini sudah di isi !!',
            'nis.min' => 'min 4 karakter',
            'nis.max' => 'max 5 karakter',
            'nama_siswa.required' => 'wajib di isi !!',
            'id_kelas.required' => 'wajib di isi !!',
            'id_jurusan.required' => 'wajib di isi !!',
            'foto_siswa.required' => 'wajib di isi !!',
        ]);

        $file = Request()->foto_siswa;
        $fileName = Request()->nis . '.' . $file->extension();
        $file->move(public_path('foto_siswa'), $fileName);

        $data = [
            'nis' => Request()->nis,
            'nama_siswa' => Request()->nama_siswa,
            'id_kelas' => Request()->id_kelas,
            'id_jurusan' => Request()->id_jurusan,
            'foto_siswa' => $fileName,
        ];

        $this->SiswaModel->addData($data);
        return redirect()->route('siswa')->with('pesan','Data Berhasil di Tambahkan !!!');
    }

    public function edit($id_siswa){
        if (!$this->SiswaModel->detailData($id_siswa)) {
            abort(404);
        }
        $data = [
            'siswa' => $this->SiswaModel->detailData($id_siswa),
            ];
        return view('v_editsiswa', $data);
    }

    public function update($id_siswa){
        Request()->validate([
            'nis' => 'required|min:4|max:5',
            'nama_siswa' => 'required',
            'id_kelas' => 'required',
            'id_jurusan' => 'required',
            'foto_siswa' => 'max:100',
        ],[
            'nis.required' => 'wajib di isi !!',
            'nis.min' => 'min 4 karakter',
            'nis.max' => 'max 5 karakter',
            'nama_siswa.required' => 'wajib di isi !!',
            'id_kelas.required' => 'wajib di isi !!',
            'id_jurusan.required' => 'wajib di isi !!',
        ]);

        if ($file = Request()->foto_siswa <> "") {
            $file = Request()->foto_siswa;
            $fileName = Request()->nis . '.' . $file->extension();
            $file->move(public_path('foto_siswa'), $fileName);

            $data = [
                'nis' => Request()->nis,
                'nama_siswa' => Request()->nama_siswa,
                'id_kelas' => Request()->id_kelas,
                'id_jurusan' => Request()->id_jurusan,
                'foto_siswa' => $fileName,
            ];

            $this->SiswaModel->editData($id_siswa, $data);
        } else {
            $data = [
                'nis' => Request()->nis,
                'nama_siswa' => Request()->nama_siswa,
                'id_kelas' => Request()->id_kelas,
                'id_jurusan' => Request()->id_jurusan,
            ];
            $this->SiswaModel->editData($id_siswa, $data);
        }
        return redirect()->route('siswa')->with('pesan','Data Berhasil di Update !!!');
    }

    public function delete($id_siswa){
        $this->SiswaModel->deleteData($id_siswa);
        return redirect()->route('siswa')->with('pesan','Data Berhasil di Hapus !!!');
    }
}
