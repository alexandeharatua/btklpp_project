<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Redirect;
use PDF;

class NewsController extends Controller
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
       $data['news'] = News::orderBy('id','desc')->paginate(5);
       return view('berita.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
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
            'judul_berita'      => 'required',
            'isi_berita'        => 'required',
            'gambar'            => 'required|image|mimes:jpeg,png,jpg,gif,svg,zip|max:2048',
        ]);

        // if($files = $request->file('image')) {
        //     $destinationPath = 'public/images/'; //upload path
        //     $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
        //     $files->move($destinationPath, $profileImage);
        //     $insert['gambar'] = "$profileImage";
        // }

        // $insert['judul_berita'] = $request->get('judul_berita');
        // $insert['isi_berita'] = $request->get('isi_berita');
        $file = $request->file('gambar');
        $new_name = $file->getClientOriginalName();
        $destinationPath = (public_path('berita'));
        $file->move($destinationPath, $new_name);

        $form_data = array(
            'judul_berita'      => $request->judul_berita,
            'isi_berita'        => $request->isi_berita,
            'gambar'            => $new_name,
        );

        News::insert($form_data);
        return Redirect::to('/admin/berita/news')
        ->with('success','Great! Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = News::findOrFail($id);

        return view('berita.edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = News::findOrFail($id);
        return view('berita.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file = $request->file('gambar');
        if($file != '')
        {
            $request->validate([
                'judul_berita'      => 'required',
                'isi_berita'        => 'required',
                'gambar'            => 'required|image|mimes:jpeg,png,jpg,gif,svg,zip|max:2048',
            ]);

            // $file_name =$file->getClientOriginalName();
            // $file->move(public_path('berita'), $file_name);
            $new_name = $file->getClientOriginalName();
            $destinationPath = (public_path('berita'));
            $file->move($destinationPath, $new_name);
        }
        else
        {
            $request->validate([
                'judul_berita'            => 'required',
                'isi_berita'  => 'required',
            ]);
        }

        // $update = ['judul_berita' => $request->judul_berita, 'isi_berita' => $request->isi_berita];
        // if ($file = $request->file('gambar')) {
        //     $destinationPath = (public_path('berita'));
        //     $new_name = $file->getClientOriginalName();
        //     $file->move($destinationPath, $new_name);
        //      $update['gambar'] = "$new_name";
        // }

        // $update['judul_berita'] = $request->get('judul_berita');
        // $update['isi_berita'] = $request->get('isi_berita');

        $form_data = array(
            'judul_berita'      => $request->judul_berita,
            'isi_berita'        => $request->isi_berita,
        );

        News::whereId($id)->update($form_data);
        return Redirect::to('/admin/berita/news')
        ->with('success','Great! Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::where('id',$id)->delete();
        return Redirect::to('/admin/berita/news')->with('success','Product deleted successfully');    
    }
}