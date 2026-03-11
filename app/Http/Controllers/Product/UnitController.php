<?php

namespace App\Http\Controllers\product;

use App\Models\Unit;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $collection = Unit::where('status',1)->latest()->paginate(10);
      return view('admin.product.unit.index',compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.unit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $this->validate($request,[
              'name'=>['required'],
           
         ]);

         $unit = Unit::create($request->all());
    
       $unit->slug = Str::slug($unit->name);
       $unit->creator = Auth::user()->id;
       $unit->save();

    //    return redirect()->back()->with('success','data created successfully');
    return response()->json([
        'html'=>"<option value='".$unit->id."'>".$unit->name."</option>",
        'value' =>$unit->id,
    ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        return view('admin.product.unit.edit',compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit)
    {
           $this->validate($request,[
              'name'=>['required'],
          
         ]);

        $unit ->update($request->all());

       $unit->slug = Str::slug($unit->name);
       $unit->creator = Auth::user()->id;
       $unit->save();
    //    return redirect()->back()->with('success','data updated successfully');
       return 'success';
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
      $unit->delete();
        return 'success';
    }
}
