<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Satker;
use App\Models\Personil;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Imports\PersonilsImport;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function index()
    {
        $jabatankosong = Personil::where('nama', null)->count();
        $personil = Personil::all()->where('keterangan', '!=', 'PENSIUN')->where('nama', '!=', null)->count();
        $satker = Satker::count();
        $pensiun = Personil::where('keterangan', 'PENSIUN')->count();
        $sakit = Personil::where('keterangan', 'SAKIT')->count();
        $kasus = Personil::where('kasus', '!=', null)->count();
        $islam = Personil::where('agama', 'ISLAM')->count();
        $protestan = Personil::where('agama', 'PROTESTAN')->count();
        $katolik = Personil::where('agama', 'KATOLIK')->count();
        $hindu = Personil::where('agama', 'HINDU')->count();
        $buddha = Personil::where('agama', 'BUDDHA')->count();
        $khonghucu = Personil::where('agama', 'KHONGHUCU')->count();
        $lainnya = Personil::where('nama', '!=', null)->where('agama', null)->count();
        return view('admin.dashboard', compact('personil', 'satker', 'pensiun', 'sakit', 'kasus', 'islam', 'protestan', 'katolik', 'hindu', 'buddha', 'khonghucu', 'lainnya', 'jabatankosong'));
    }

    public function view_personil()
    {
        // $matching = DB::table('personils')->join('users', 'personils.nrp_nip', '=', 'users.nrp_nip')->select('personils.nama', 'personils.nrp_nip', 'personils.jabatan')->get();
        // $jabatan = $matching->pluck('jabatan')->unique();
        // dd($jabatan);
        $personil = Personil::all()->where('keterangan', '!=', 'PENSIUN')->where('nama', '!=', null);
        return view('admin.personil', compact('personil'));
    }

    public function detail_personil($id)
    {
        $satker = Satker::all();
        $personil = Personil::find($id);
        return view('admin.detail_personil', compact('personil', 'satker'));
    }

    public function update_personil(Request $request, $id)
    {
        $rules = [
            'nama' => 'nullable',
            'pangkat' => 'nullable',
            'tmt_pangkat' => 'nullable|date',
            'tmt_berkala' => 'nullable|date',
            'nrp_nip' => 'nullable',
            'satker_id' => 'nullable',
            'jabatan' => 'nullable',
            'tmt_jabatan' => 'nullable|date',
            'status_marital' => 'nullable',
            'nama_isteri_suami' => 'nullable',
            'agama' => 'nullable',
            'tanggal_lahir' => 'nullable',
            'alamat' => 'nullable',
            'no_hp' => 'nullable',
            'fasilitas_kesehatan' => 'nullable',
            'no_bpjs' => 'nullable',
            'nik' => 'nullable',
            'kasus' => 'nullable',
            'keterangan' => 'nullable',
        ];
        $validated = $request->validate($rules);
        if ($validated['status_marital'] == 'KAWIN') {
            $validated['status_marital'] = 'BLM KAWIN';
        } else {
            $validated['status_marital'] = 'KAWIN';
        }
        $personil = Personil::where('id', $id)->update($validated);

        Toastr::success('Data berhasil diupdate', 'Sukses', ["positionClass" => "toast-top-right"]);
        return redirect()->back()->with(compact('personil'));
    }

    public function import_personil(Request $r)
    {
        // dd($r->file('file'));
        Excel::import(new PersonilsImport, $r->file('file'));
        Toastr::success('Data berhasil diimport', 'Sukses', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function view_satker()
    {
        $satker = Satker::all();
        return view('admin.satker', compact('satker'));
    }

    public function view_struktur($id)
    {
        $satker = Satker::find($id);
        $personil = Personil::where('satker_id', $id)->get();
        $count_personil = Personil::where('satker_id', $id)->count();
        $current_personil = Personil::where('satker_id', $id)->where('nama', '!=', null)->count();
        $null_personil = Personil::where('satker_id', $id)->where('nama', null)->count();
        $percentage_personil = number_format($current_personil / ($current_personil + $null_personil) * 100, 2);


        return view('admin.struktur', compact('satker', 'personil', 'count_personil', 'current_personil', 'null_personil', 'percentage_personil'));
    }

    public function view_agama_islam()
    {
        $agama = Personil::where('agama', 'ISLAM')->get();
        return view('admin.agama.islam', compact('agama'));
    }

    public function view_agama_protestan()
    {
        $agama = Personil::where('agama', 'PROTESTAN')->get();
        return view('admin.agama.protestan', compact('agama'));
    }

    public function view_agama_katolik()
    {
        $agama = Personil::where('agama', 'KATOLIK')->get();
        return view('admin.agama.katolik', compact('agama'));
    }


    public function view_agama_hindu()
    {
        $agama = Personil::where('agama', 'HINDU')->get();
        return view('admin.agama.hindu', compact('agama'));
    }


    public function view_agama_buddha()
    {
        $agama = Personil::where('agama', 'BUDDHA')->get();
        return view('admin.agama.buddha', compact('agama'));
    }


    public function view_agama_khonghucu()
    {
        $agama = Personil::where('agama', 'KHONGHUCU')->get();
        return view('admin.agama.khonghucu', compact('agama'));
    }

    public function view_agama_lainnya()
    {
        $agama = Personil::where('agama', null)->whereNotNull('nama')->get();
        return view('admin.agama.lainnya', compact('agama'));
    }

    public function view_riwayat_personil()
    {
        $riwayat = Personil::where('keterangan', '!=', null)->get();

        return view('admin.riwayat_personil', compact('riwayat'));
    }


    public function view_riwayat_pensiun(Request $r)
    {

        $pensiun = Personil::whereYear('tanggal_lahir', Carbon::now()->subYear(58)->year)->get();

        if (request()->tgl_awal && request()->tgl_akhir) {
            $tgl_awal = request()->tgl_awal;
            $tgl_akhir = request()->tgl_akhir;
            // dd($tgl_awal, $tgl_akhir);
            $pensiun =  Personil::whereMonth('tanggal_lahir', Carbon::now()->subYear(58)->month)->whereYear('tanggal_lahir', Carbon::now()->subYear(58)->year)->whereBetween('tanggal_lahir', [$tgl_awal, $tgl_akhir])->get();
        } else {
            $pensiun = Personil::whereYear('tanggal_lahir', Carbon::now()->subYear(58)->year)->get();
        }
        // dd($pensiun);
        return view('admin.riwayat_pensiun', compact('pensiun'));
    }

    public function view_riwayat_sakit()
    {
        $sakit = Personil::where('keterangan', 'SAKIT')->get();
        return view('admin.riwayat_sakit', compact('sakit'));
    }

    public function view_riwayat_bermasalah()
    {
        $bermasalah = Personil::where('kasus', '!=', null)->get();
        return view('admin.riwayat_bermasalah', compact('bermasalah'));
    }

    public function view_semua_akun()
    {

        $user = User::all();
        return view('admin.semua_akun', compact('user'));
    }

    public function update_status_akun($id)
    {
        $user = User::select('status')->where('id', $id)->first();
        if ($user->status == 'active') {
            $status = 'inactive';
        } else {
            $status = 'active';
        }
        User::where('id', $id)->update([
            'status' => $status
        ]);
        Toastr::success('Status akun berhasil diupdate', 'Sukses', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function view_buat_akun()
    {
        return view('admin.buat_akun');
    }

    public function view_edit_akun(Request $request, $id)
    {
        $user = User::find($id);
        return view('admin.edit_akun', compact('user'));
    }

    public function update_akun(Request $r, $id)
    {
        $validated = $r->validate([
            'email' => 'required|email|unique:users,email',
        ], [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
        ]);

        $user = User::where('id', $id)->update([
            'email' => $validated['email']
        ]);
        Toastr::success('Akun berhasil diupdate', 'Sukses', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.kelola.akun.semua', compact('user'));
    }

    public function delete_akun($id)
    {
        $user = User::find($id);
        $user->delete();
        Toastr::success('Akun berhasil dihapus', 'Sukses', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.kelola.akun.semua');
    }


    public function autocomplete()
    {
        $personil = Personil::select("nama")->where('nama', '!=', null)->get();
        $data = [];

        foreach ($personil as $p) {
            $data[] = $p->nama;
        }

        return $data;
    }

    public function search_personil(Request $r)
    {
        $validated =  $r->validate([
            'search_personil' => 'required|string'
        ], [
            'search_personil.required' => 'Nama personil tidak boleh kosong'
        ]);
        $search_personil = $validated['search_personil'];


        if ($search_personil != "") {
            $personil = Personil::where('nama', 'LIKE', '%' . $search_personil . '%')->get();
            if ($personil) {
                return redirect('admin/personil' . '/' . $personil[0]->id);
            } else {
                return redirect()->back();
            }
        }
    }
}
