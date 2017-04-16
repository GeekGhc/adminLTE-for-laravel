<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
//use App\Repository\AdminRepository;
use App\Repository\AdminRepository;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public $admin;

    public function __construct(AdminRepository $admin)
    {
        $this->admin = $admin;
    }

    //管理员主页
    public function index()
    {
        $collects = $this->admin->dashboard_init_data();
        return view('admin.dashboard.index', compact('collects'));
    }

    //用户信息资料
    public function userMember()
    {
        return view('admin.users.index');
    }

    //管理员信息
    public function adminInfo()
    {
        return view('admin.users.admin');
    }
}
