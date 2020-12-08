<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Location;
use App\Models\Department;
use App\Models\Branch;
use App\Models\Store;
use App\Models\Modal;
use App\Models\Makee;
use App\Models\Vendor;
use App\Models\Role;
use App\Models\Inventory;
class FormController extends Controller
{
    public function add_category(){
        return view('add_category');
    }
    public function add_branch(){
        return view('add_branch');
    }
    public function add_department(){
        return view('add_department');
    }
    public function add_location(){
        return view('add_location');
    }
    public function add_model(){
        return view('add_model');
    }
    public function add_role(){
        return view('add_role');
    }
    public function add_store(){
        return view('add_store');
    }
    public function add_user(){
        $role = Role::all();
        return view('add_user', ['roles'=>$role]);
    }
    public function add_inventory(){
        $data = array();
        $data['categories'] = Category::all();
        $data['departments'] = Department::all();
        $data['locations'] = Location::all();
        $data['branches'] = Branch::all();
        $data['stores'] = Store::all();
        $data['models'] = Modal::all();
        $data['makes'] = Makee::all();
        $data['vendors'] = Vendor::all();
        return view('add_inventory', $data);
    }
    public function add_make(){
        return view('add_make');
    }
    public function add_vendor(){
        return view('add_vendor');
    }
    public function issue_inventory(){
        $inventory = Inventory::where('issued_to', NULL)->orderBy('id', 'desc')->get();
        return view('issue_inventory', ['inventories' => $inventory]);
    }
}
