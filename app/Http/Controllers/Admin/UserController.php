<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
  public function index()
  {
   
    // $collection = User::get();
    $collection = User::where('status',1)->get();
     dd($collection);

    return view('admin.user.index', ['collection' => $collection]);
  }
  public function view($id)
  {
    // $user = User::where('id',$id)->first();
    $user = User::find($id);
  // dd($user);
    return view('admin.user.view', compact('user'));
  }

  public function create()
  {
    $user_roles = UserRole::orderBy('serial','DESC')->get();

    return view('admin.user.create',compact('user_roles'));
  }
  
  public function edit($id)
  {
     $user_roles = UserRole::orderBy('serial','DESC')->get();
     $user = User::find($id);
    return view('admin.user.edit', compact('user_roles','user'));
  }


  public function store(Request $request)
  {
    //  dd($request->all());
    $this->validate($request, [
      'first_name' => ['required'],
      'last_name' => ['required'],
      'username' => ['required'],
      'email' => ['required'],

      'image' => ['required', 'image'],
      'password' => ['required', 'string', 'min:8', 'confirmed'],

    ]);

    //  $validator = Validator::make($request->all(), [
            
    //   'first_name' => ['required'],
    //   'last_name' => ['required'],
    //   'username' => ['required'],
    //   'email' => ['required'],
    //   'image' => ['required', 'image'],
    //   'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    //     dd($validator->errors());

    $user = new User();
    
    $user->first_name  = $request->first_name;
    $user->last_name  = $request->last_name;
    $user->username  = $request->username;
    $user->role_id  = $request->role_id;
    $user->email  = $request->email;
    $user->phone  = $request->phone;
    $user->password  = Hash::make($request->password);
    $user->created_at = Carbon::now()->toDateTimeString();
    $user->creator = Auth::user()->id;
    $user->save();
    // dd($request->all(),$user);

    $user->slug = $user->id.uniqid(10);
    $user->save();

    if ($request->hasFile('image')) {
      $user->image = Storage::put('uploads/user', $request->file('image'));
      $user->save();
    }
    
    // return view('admin.user.view', compact('user'));
    return redirect()->route('admin_user_view', $user->id);
    // dd($request->all());
  }


  public function update(Request $request)
  {
    $this->validate($request, [
      'first_name' => ['required'],
      'last_name' => ['required'],
      'username' => ['required'],
      'email' => ['required'],
      
      

    ]);
// dd($request->all());
    $user =User::find($request->id);

  if($user->email != $request->email){
  $this->validate($request,[
   'email' => ['required','unique:users'],
]);
$user->email  = $request->email;
    }

    if($user->username != $request->username){
  $this->validate($request,[
   'username' => ['required','unique:users'],
]);
$user->username  = $request->username;
    }

    if($user->phone != $request->phone){
  $this->validate($request,[
   'phone' => ['required','unique:users'],
]);
$user->phone  = $request->phone;
    }

  if($request->old_password != NULL  && $request->password != NULL && $request->password_confirmation != NULL){
$this->validate($request,[
      'password' => [ 'string', 'min:8', 'confirmed'],
]);
if(Hash::check($request->old_password,$user->password)){
$user->password  = Hash::make($request->password);
    }else{
     return redirect()->back()->with('old_password','old password does not match');
    }
  }

    $user->first_name  = $request->first_name;
    $user->last_name  = $request->last_name;
    $user->role_id  = $request->role_id;
    $user->updated_at = Carbon::now()->toDateTimeString();
    $user->creator = Auth::user()->id;
    $user->save();
    // dd($request->all(),$user);
   

    if ($request->hasFile('image')) {
      if(!file_exists(public_path().'/'.$user->image)){
        unlink(public_path().'/'.$user->image);
      }
      $user->image = Storage::put('uploads/user', $request->file('image'));
      $user->save();
    }
    
    // return view('admin.user.view', compact('user'));
    // return redirect()->route('admin_user_view', $user->id);
    // return redirect()->back()->with('success','data updated');
    // dd($request->all());
    return $user;
  }



public function delete(Request $request)
{
    $user =User::find($request->id);
    $user->status = 0;
    $user->creator = Auth::user()->id;
    $user->save();
    return redirect()->back()->with('success','data deactivated');
    
}

}



