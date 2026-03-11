<?php

namespace App\Http\Controllers\Product;

use App\Models\Size;
use App\Models\Unit;
use App\Models\Brand;
use PHPUnit\Util\Color;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;



class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = Brand::where('status',1)->latest()->paginate(10);
        return view('admin.product.brand.index',compact('collection'));
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //    Brand::create($request->all());
        
         $this->validate($request,[
            'name' =>['required'],
            'icon' =>['required']
         ]);
       $brand = Brand::create($request->except('icon'));
       if($request->hasFile('icon')){
       $brand->logo = Storage::put('uploads/maincategory',$request->file('icon'));
       $brand->save();
       }
       $brand->slug = Str::slug($brand->name);
       $brand->creator = Auth::user()->id;
       $brand->save();
       
    //    dd($request, $brand);
    //    return 'success';
//   return redirect()->back()->with('success','data created successfully');
return response()->json([
        'html'=>"<option value='".$brand->id."'>".$brand->name."</option>",
        'value' =>$brand->id,
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
    public function edit(Brand $brand)
    {
        return view('admin.product.brand.edit',['brand'=>$brand]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        // return $request->all();
         
     $this->validate($request,[
            'name' => ['required']
        ]);

        $brand->update($request->except('icon'));
        if($request->hasFile('icon')){
            $brand->logo = Storage::put('uploads/maincategory',$request->file('icon'));
            $brand->save();
        }

        $brand->slug = Str::slug($brand->name);
        $brand->creator = Auth::user()->id;
        $brand->save();

        return 'success';
        // return redirect()->back()->with('success','data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        // return dd($id);
        $brand->delete();
        return 'success';
    }
}
