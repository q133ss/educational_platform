<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function header_index(){
        $header = Header::find(1);
        return view('admin.content.header',[
            'header' => $header
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function header_update(Request $request)
    {
        $header = Header::find(1);
//        $header->logo = $request->logo;
        $path_logo = $request->file('logo')->store('uploads', 'public');
        $header->logo = '/storage/'.$path_logo;
        $header->string1 = $request->string1;
        $header->string2 = $request->string2;
        //$header->banner = $request->banner;
        $path_banner = $request->file('banner')->store('uploads', 'public');
        $header->banner = '/storage/'.$path_banner;
        $header->soc1 = $request->soc1;
        $header->soc2 = $request->soc2;
        $header->soc3 = $request->soc3;
        $header->soc4 = $request->soc4;

        $header->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(Header $header)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Header $header)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {
        //
    }
}
