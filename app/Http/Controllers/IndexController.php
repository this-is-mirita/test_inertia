<?php

namespace App\Http\Controllers;

use App\Models\Lists;
use Inertia\Inertia;
use Illuminate\Http\Request;
class IndexController extends Controller
{
    public function index(){
        return Inertia::render('Index',
            [
                'lists' => Lists::all()
            ]
        );
    }

    public function destroy($id) {
        $list = Lists::findOrFail($id);
        $list->delete();

        return response()->json(['message' => 'Deleted successfully']);
    }

    public function create()
    {
        return Inertia::render('Create');
    }

    public function store(Request $request)
    {
        $list = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        Lists::create($list);
        return response()->json(['message' => 'Created successfully']);


    }

}
