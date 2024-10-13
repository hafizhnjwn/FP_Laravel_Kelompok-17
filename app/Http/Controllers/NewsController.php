<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Doctors;
use App\Http\Requests\StoreNewsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateNewsRequest;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addnewsview()
    {
        //
        return view('admin.add_news');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_news(Request $request)
    {
        $news=new news;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('newsimage', $imagename);
        $news->image=$imagename;
        $news->title=$request->title;
        $news->content=$request->content;

        $news->save();
        return redirect ()->back()->with('message', 'News Stored Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function showlist(News $news)
    {
        $news=news::all();
        return view('admin.news_list', compact('news'));
    }

    public function deletenews($id){
        if(Auth::user()->usertype=='1')
        {
            $data=news::find($id);
            $data->delete();
        }
        return redirect()->back();
    }

    public function updatenews($id)
    {
        if(Auth::user()->usertype=='1')
        {
            $data = news::find($id);
            return view('admin.edit_news', compact('data'));
        }
        return redirect()->back();
    }

    public function updateberita(Request $request, $id)
    {
        if(Auth::user()->usertype=='1')
        {
            $news = news::find($id);
            $news->title = $request->title;
            $news->content = $request->content;
            
            $image = $request->file;
            if($image)
            {
                $imagename = time().'.'.$image->getClientOriginalExtension();
                $request->file->move('newsimage', $imagename);
                $news->image = $imagename;
            }
            
            $news->save();
            return redirect()->back()->with('message', 'News Details Updated Successfully');
        }
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
