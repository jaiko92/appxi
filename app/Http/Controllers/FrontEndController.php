<?php

namespace App\Http\Controllers;

use App\Page;
use App\Block;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    function default()
    {
        $page = setting('site.page');
        $collection = Page::where('slug', $page)->first();

        if($collection){
            $blocks = Block::where('page_id', $collection->id)->orderBy('position', 'asc')->get();
            return view($collection->direction, [
                'collection' => json_decode($collection->details, true),
                'page' => $collection,
                'blocks' => $blocks
            ]);
        }else{
            return view('welcome');
        }
    }
    public function pages($slug)
    {
        $collection = Page::where('slug', $slug)->first();
        $blocks = Block::where('page_id', $collection->id)->orderBy('position', 'asc')->get();
        return view($collection->direction, [
            'collection' => json_decode($collection->details, true),
            'page' => $collection,
            'blocks'     => $blocks
        ]);
    }
}
