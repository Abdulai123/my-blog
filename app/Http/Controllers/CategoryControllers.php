<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryControllers extends Controller
{
    //
    public function add_category(Request $request){
        $values = $request->validate([
            'name' => ['Required', 'string'],
            'description' => ['Required', 'string'],
            'parent_id' => ['number']
        ]);

        Category::create($values);

        return 'wow you did it.';
    }
}
