<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Image;
use Storage;
use App\dokumen;

class documentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $documents=dokumen::create($request->all());
        if($request->hasFile('fileToUpload')){
            $file=$request->file('fileToUpload');
            $fileName=time().'.'.$file->getClientOriginalName();
            $location='image/'.$fileName;
            $file->move('image', $fileName);
            $documents->fileToUpload=$fileName;
            $documents->save();

        }
            $documents->save();
            return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $query=$request->get('mode');
        if($query){
            $documents=$query ? dokumen::search($query)->orderBy('id')->paginate(3):dokumen::all();
        return view('page.show', compact('documents'));
        }
        else{
            $documents= dokumen::all();
            return view('page.show', compact('documents'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $document = dokumen::find($id);
        return view('page.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dokumen $document,$id)
    {
        $document = dokumen::find($id);
        $document->update($request->all());
        $document->save();
        $documents= dokumen::where('id','=',0);
        return redirect()->route('display');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dokumen::destroy($id);
        return back();
    }
}
