<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->all();
        $colors=Color::getColor($request);
        
        return view('color.color_search', [
            'colors' => $colors,
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
        return view('color.color_register');
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

        $color = Color::firstOrCreate(['print_color' => $create_data['print_color']]);
        /* if ($color->wasRecentlyCreated) {
            
            return redirect('/color/show/'.$color->id);
        }else{

            
            return redirect('/color/show/'.$color->id);
        } */

        return redirect('/color/show/'.$color->id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $color = Color::where('id',$id)->first();
        $date = date_create(NOW()); 
        $date = date_format($date , 'Y-m-d');

        return view('color.color', [
            'color' => $color,
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

        $color = Color::where('print_color', $update_data['print_color'])->first();

        
        if (!empty($color)) {
            
            $colors=Color::getMatchColor($update_data['id'],$color->id);
            
            return view('color.color_search', [
                'colors' => $colors,
                'request'=>$request
            ]);
        }else{

            $color2 = Color::where('id',$update_data['id'])->update([
                'print_color' => $update_data['print_color'],
            ]);
            return redirect('/color/show/'.$request->id);
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
