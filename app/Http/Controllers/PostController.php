<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Auth\Events\Validated;

class PostController extends Controller
{
    public function index() {
      $post = Post::all();  
      return view('index',compact('post'));
    }
    public function create() {
        return view('create');
      }
    public function save(Request $request) {

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'contact'=>'required',
        ]);
        $post = new Post;
        $post->name = $request->input('name');
        $post->email = $request->input('email');
        $post->contact = $request->input('contact');
        $post->save();
        return redirect()->route('index');
     }  
     public function edit(Request $request ,$id) {
      $post = Post::find($id);
      return view('edit',compact('post'));
    }
    public function update(Request $request,$id) {
     
      $post = Post::find($id);
      $request->validate([
        'name'=>'required',
        'email'=>'required',
        'contact'=>'required',
      ]);
      $post->name = $request->name;
      $post->email = $request->email;
      $post->contact = $request->contact;     
      $post->save();
      return redirect()->route('index');
   } 
   public function delete($id) {
    $post = Post::find($id);
    $post->delete();
    return redirect()->route('index');
  }
      
}
