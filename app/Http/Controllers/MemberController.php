<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function list()
    {
      $members = Member::get()->all();
      // dd($member);

      return view('member.list', compact('members'));
    }
}
