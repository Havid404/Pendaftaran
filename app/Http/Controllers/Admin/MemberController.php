<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\JobEducation;
use App\Member;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index(){

        $members = Member::with('education')->when(Auth::user()->user_type == 'member', function($query){
            return $query->where('id', Auth::user()->member->id);
        })->get();
        return view ('admin.member_request', compact('members'));
    }

    public function datamember(){

        $members = Member::with('education')->when(Auth::user()->user_type == 'member', function($query){
            return $query->where('id', Auth::user()->member->id);
        })->get();
        return view ('admin.member', compact('members'));
    }

    public function detailMember($id){
        $detail = Member::find($id);
        return view('admin.member_detail', compact('detail'));  
    }

    public function cetak(){
        return view('admin.cetak');
    }

}
