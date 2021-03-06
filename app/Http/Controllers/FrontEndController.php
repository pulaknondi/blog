<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Carbon\Carbon;
class FrontEndController extends Controller
{
    public function index(){
        $data = Post::join('categories', 'categories.id', '=', 'posts.category_id')
        ->get(['posts.*', 'categories.name','categories.slug as catslug']);
        return view('index',compact('data'));     
    }

    public function DetailPost($slug){
        $data =  Post::join('categories', 'categories.id', '=', 'posts.category_id')->where('posts.slug', '=', $slug)
        ->get(['posts.*', 'categories.name'])->first();
        // $data = Post::firstOrFail($slug);
        // dd($data);
        return view('front.postdetail',compact('data'));  
    }

    public function CategoryPost($slug){
        $data =  Post::join('categories', 'categories.id', '=', 'posts.category_id')->where('categories.slug', '=', $slug)
        ->get(['posts.*', 'categories.name']);
        return view('front.frontcat',compact('data')); 
    }

    public function NameByPost($id){
        $data =  Post::join('categories', 'categories.id', '=', 'posts.category_id')->where('posts.user_id', '=', $id)
        ->get(['posts.*', 'categories.name']);
        return view('front.namebypost',compact('data'));
    }

    public function ArchivesPost($id){
        $data = Post::all()->where('created_at', '=', $id)->get();
        return view('front.site.component.sidebar',compact('data'));  
    }

    
    public function monthWisePost($month){
        $post = Post::where('created_at', 'like',$month.'%')->get();
        return view('front.datebypost',compact('post'));
    }


    
}
