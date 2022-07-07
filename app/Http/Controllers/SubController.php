<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\listsubject;
use Illuminate\Support\Facades\Auth;

class SubController extends Controller
{
    //
    public function savesubject(Request $request) {
        echo json_encode($request->all());
        $newSubjectItem = new listsubject();
        $newSubjectItem->sub_title = $request->title;
        $newSubjectItem->sub_desc = $request->desc;
        $newSubjectItem->sub_price = $request->price;
        $newSubjectItem->sub_hours = $request->hours;
        $newSubjectItem->save();
        return redirect('main')->with('save', 'Success')->withErrors('error', 'Failed');
    }

    public function main()
    {
        if (Auth::check()) {
            //return view('main');
            return view('main', ['listsubject' => Subject::all()]);
        }
        return redirect("login")->withSuccess('You do not have access');
    }

    public function markDelete($id)
    {
        $listItem = Sub::find($id);
        $listItem->delete();
        return redirect('main');
    }

    public function markUpdate($id, Request $request)
    {
        $listItem = Sub::find($id);
        $listItem->sub_title = $request->sub_title;
        $listItem->sub_desc = $request->sub_desc;
        $listItem->sub_price = $request->sub_price;
        $listItem->sub_hours = $request->sub_hours;
        $listItem->update();
        return redirect('main');
    }


}
