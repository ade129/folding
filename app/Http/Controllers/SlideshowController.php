<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slideshow;
use Illuminate\Support\Str;
use Image;
use File;

class SlideshowController extends Controller
{
    public function index()
    {
        $contents = [
            'slideshow' => Slideshow::all(),
        ];

        $pagecontent = view('slideshow.index', $contents);

        $pagemain = array(
            'title' => 'Slideshow Products',
            'menu' => 'slideshow',
            'submenu' => '',
            'pagecontent' => $pagecontent
        );

        return view('masterpage', $pagemain);
    }

    public function create_page()
    {
        $contents = [
            'slideshow' => Slideshow::all(),
        ];

        $pagecontent = view('slideshow.create', $contents);

        $pagemain = array(
            'title' => 'Slideshow Products',
            'menu' => 'slideshow',
            'submenu' => '',
            'pagecontent' => $pagecontent
        );

        return view('masterpage', $pagemain);
    }

    public function save_page(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required',
            'fungsi' => 'required',
            'desc' => 'required',
        ]);


        $saveSlideshow = new Slideshow;
        $saveSlideshow->name = $request->name;
        $saveSlideshow->fungsi = $request->fungsi;
        // return $savePremium;
        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $re_image = Str::random(20).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save( public_path('/porducts_images/' . $re_image) );
            $saveSlideshow->images = $re_image;
        }
        $saveSlideshow->desc = $request->desc;
        $saveSlideshow->save();  
        // return $saveSlideshow; 
        return redirect('slideshow')->with('status_success','Created Best Slideshow products');
    }
}
