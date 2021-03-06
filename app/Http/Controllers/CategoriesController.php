<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;


class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('admin');
    }

    public function index()
    {
        $contents = [
            'categories' => Categories::all(),
        ];
        // ini untuk track data masuk atau tidak
        // dd($contents);

        $pagecontent = view('categories.index',$contents ); // unuk menampilkan view categories dr view

        // masterpage
        $pagemain = array(
            'title' => 'Categories',
            'menu' => 'master',
            'submenu' => 'categories',
            'pagecontent' => $pagecontent
        );
        
        return view('masterpage', $pagemain);
    }


    public function create_page()
    {
      $pagecontent = view('categories.create');
  
      //masterpage
      $pagemain = array(
          'title' => 'Categories',
          'menu' => 'categories',
          'submenu' => 'categories',
          'pagecontent' => $pagecontent,
      );
  
      return view('masterpage', $pagemain);
    }

    public function save_page(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required',
        ]);
            // kiri dari dat    abase kanan dari blade
        $saveCategories = new Categories;
        $saveCategories->name = $request->name;
        $saveCategories->slug = $slug = Str::slug($request->name, '-');
        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $re_image = Str::random(20).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save( public_path('/porducts_images/' . $re_image) );
            $saveCategories->images = $re_image;
        }
        $saveCategories->save();
        // return $saveCategories;
        return redirect('categories')->with('status_success','Created categories');
    }

    public function update_page(Categories $categories)
    {
        $content = [
            'categories' => Categories::find($categories->idcategories)
        ];

        // return $content;

        $pagecontent = view('categories.update',$content);

        // masterpage
        $pagemain = array(
            'title' => 'Categories',
            'menu' => 'categories',
            'submenu' => 'categories',
            'pagecontent' => $pagecontent
        );
        
        return view('masterpage', $pagemain);
    }

    public function update_save(Request $request,Categories $categories)
  {
    // return $request->all();

    $request->validate([
         'name' => 'required',
     ]);

     $updateCategories = Categories::find($categories->idcategories);
     $updateCategories->name = $request->name;
     $updateCategories->slug = $slug = Str::slug($request->name, '-');
     $updateCategories->save();
     return redirect('categories')->with('status_success','Update categories');
  }

// $categories dapat di web.php delete {categories}
  public function delete(Categories $categories)
  {
      $deleteCategories = Categories::find($categories->idcategories);
    //   return $deleteCategories;
    $deleteCategories->delete();
    return redirect('categories')->with('status_success','Deleted categories');

  }

  public function show($slug)
    {
        $slud = Categories::where('name',$slug)->first();
        return $slud;
    }

  public function view_categories()
  {
    $contents = [
        'categories' => Categories::all(),
    ];
    // ini untuk track data masuk atau tidak
    // dd($contents);

   // $pagecontent = view('categories.view',$contents ); // unuk menampilkan view categories dr view

    // masterpage
    $pagemain = array(
        'title' => 'Categories',
        'menu' => 'master',
        'submenu' => 'categories',
        'pagecontent' => $contents
    );
    
    return json_encode($pagemain);
    //return view('masterpage', $pagemain);
  }
  
    
}
