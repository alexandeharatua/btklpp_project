<?php

namespace App\Http\Controllers;

use App\Models\Downloads;
use Illuminate\Http\Request;


class DownloadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Downloads::all();
        return view('download.index', ["data" => $data]);
        // $data = Downloads::latest()->paginate(5);
        // return view('download.index', compact('data'))
        //             ->with('i',(request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('download.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no'            => 'required',
            'nama_dokumen'  => 'required',
            'jenis_dokumen' => 'required',
            'file'          => 'required|file|mimes:doc,xlsx,pdf,docx,zip',
        ]);

        $file = $request->file('file');

        $new_name = $file->getClientOriginalName();
        $file->move(\public_path('images'), $new_name);
        $form_data = array(
            'no'            => $request->no,
            'nama_dokumen'  => $request->nama_dokumen,
            'jenis_dokumen' => $request->jenis_dokumen,
            'file'          => $new_name
        );

        Downloads::create($form_data);
        return \redirect('/admin/unduh/downloads')->with('success', ' Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Downloads  $downloads
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Downloads::findOrFail($id);
        return view('download.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Downloads  $downloads
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Downloads::findOrFail($id);

        return view('download.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Downloads  $downloads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Downloads::find($id);

        $data->no = $request->input('no');
        $data->nama_dokumen = $request->input('nama_dokumen');
        $data->jenis_dokumen = $request->input('jenis_dokumen');

        if($request->hasFile('file')) {
            $file = $request->file('file');
            $new_name = $file->getClientOriginalName();
            $destinationPath = (public_path('tes/img/file'));
            $file->move($destinationPath, $new_name);
            $data->file = $new_name;
        }

        $data->save();


        return redirect('/admin/unduh/downloads')->with('success', 'Data berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Downloads  $downloads
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Downloads::destroy($id);
        return redirect('/admin/unduh/downloads');
    }
}
