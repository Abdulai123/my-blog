<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostControllers extends Controller
{
    //
    public function add(Request $request){
        if ($request->isMethod('post')) {
            $action = $request->input('add');

        if ($action === 'Add User') {
            return "Hello user";

        } elseif ($action === 'Add Post') {
            //view('post', ['categories', Category::all()])
            
            //return dd(DB::);

        }elseif ($action === 'Add Category') {
            return view('category');
        }
        }
    
 
    }
    
    public function add_post(Request $request){
        $values = $request->validate([
            'author_id' => 'Required',
            'title' => ['Required', 'string', 'min:3'],
            'contents' => ['Required', 'string'],
            'category_id' => ['Required', 'number'],
            'status' => ['Required', 'string']
            
        ]);

        $values['author_id'] = auth()->id();
        $values['title'] = strip_tags($values['title']);
        $values['contents'] = strip_tags($values['contents']);

        if ( $request->input('back') === '« Back' ) {
            return redirect('/');

        }elseif ($request->input('draft') === 'Save As Draft') {
            $values['status'] = 'draft';
            Post::create($values);

            return 'Post draft';
            
        }elseif ($request->input('publich') === 'Publish') {
            $values['status'] = 'publish';
            Post::create($values);

            return 'Post published';
        }
    }
}
