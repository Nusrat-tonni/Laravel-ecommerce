<?php

namespace App\Http\Controllers\Admin;

use App\Models\UserRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRoleRequest;
use App\Http\Requests\UpdateUserRoleRequest;

class UserRoleController extends Controller
{
   public function index()
   {
    $collection = UserRole::orderBy('serial','ASC')->get();
      return view('admin.user_role.index',compact('collection'));
   }
}
