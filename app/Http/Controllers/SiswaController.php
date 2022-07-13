<?php

namespace App\Http\Controllers;
use App\Models\RfidTemp;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $data = Siswa::All();
        return view('siswa.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $delete = \DB::table('temp_rfid')->delete();
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = Siswa::create([
            'uid' => $request->input('kartu'),
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'jabatan' => $request->input('jabatan'),

        ]);
         $delete = \DB::table('temp_rfid')->delete();

        return redirect('/siswa')->with('success', 'Data Berhasil Ditambahkan !!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Siswa::where('id', $id)->get();
        return view('siswa.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        $data = Siswa::where('id', $id)->update([
          'nama' => $request->input('nama'),
          'email' => $request->input('email'),
          'jabatan' => $request->input('jabatan'),
      ]);

        return redirect('/siswa')->with('success', 'Data Berhasil Diedit !!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $data = Siswa::where('id', $id)->delete();
      return redirect('/siswa')->with('success', 'Data Berhasil Dihapus !!');  
    }
}
