<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        return view('index')->with('members', Member::all());
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $member = new Member;

        $member->name = $request->name;
        $member->email = $request->email;
        $member->membership_type = $request->membership_type;
        $member->membership_expiration = $request->membership_expiration;
        $member->trainer_id = $request->trainer_id;
        $member->membership_id = $request->membership_id;
        

        $member->save();

        return redirect()->route('index')->with('success', 'New member added successfully!');
    }

    public function show($id)
    {
        $member = Member::find($id);

        return view('show')->with('member', $member);
    }

    

    public function edit($id)
    {
        $member = Member::find($id);

        return view('edit')->with('member', $member);
    }

    public function update(Request $request)
    {
        $member = Member::find($request->id);

        $member->name = $request->name;
        $member->email = $request->email;
        $member->membership_type = $request->membership_type;
        $member->membership_expiration = $request->membership_expiration;
        $member->trainer_id = $request->trainer_id;
        $member->membership_id = $request->membership_id;

        $member->save();

        return redirect()->route('index')->with('success', 'Member updated successfully!');
    }

    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();

        return redirect()->route('index')->with('success', 'Member deleted successfully!');
    }

    public function showTrainer(Request $request)
    {
        $member = Member::findOrFail($request->id);
        return view('trainer')->with('member', $member);
    }

    public function showMembership(Request $request)
    {
        $member = Member::findOrFail($request->id);
        return view('membership')->with('member', $member);
    }


}
