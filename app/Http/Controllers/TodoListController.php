<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelListItem;

class TodoListController extends Controller
{
    //

    public function saveItem(Request $request){
        $newListItem = new modelListItem;
        $newListItem->name = $request->listItem;
        $newListItem->is_complete = 0;
        $newListItem->save();

        return redirect('/');
    }

    public function index(){
        return view('welcome',['listItemsAll' => modelListItem::where('is_complete',0)->get()]);
    }

    public function markComplete($id){
        $getTodo = modelListItem::find($id);
        $getTodo->is_complete = 1;
        $getTodo->save();
        return redirect('/'); 
    }
}
