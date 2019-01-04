<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;


class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->all();
        $sizes=Size::getSize($request);
        
        return view('size.size_search', [
            'sizes' => $sizes,
            'request'=>$request
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $date = date_create(NOW()); 
        $date = date_format($date , 'Y-m-d');
        $prefs = config('pref');

        return view('size.size_register',[
            'date'=>$date,
            'prefs'=>$prefs
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create_data=$request->all();
        $size = Size::firstOrCreate([
            'print_size' => $create_data['print_size'],
            'gender'=>$create_data['gender']
        ]);

        return redirect('/size/show/'.$size->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $size = Size::where('id',$id)->first();
        $date = date_create(NOW()); 
        $date = date_format($date , 'Y-m-d');
        return view('size.size', [
            'size' => $size,
            'date'=>$date,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $update_data=$request->all();
        $size = Size::where('print_size', $update_data['print_size'])
        ->where('gender',$update_data['gender'])
        ->first();
        
        if (!empty($size)) {
            $sizes=Size::getMatchSize($update_data,$size);
            
            return view('size.size_search', [
                'sizes' => $sizes,
                'request'=>$request
            ]);
        }else{
            $size2 = Size::where('id',$update_data['id'])->update([
                'gender'=>$update_data['gender'],
                'print_size' => $update_data['print_size']
            ]);
            return redirect('/size/show/'.$request->id);
            }
        }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
