<?php

namespace App\Http\Controllers;

use App\News;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'news_title' => 'required',
            'news_link' => 'required',
            'image' => 'required',

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(250, 250);
            $image_resize->save(public_path('/images/news/' . $image_name));
            $request['news_image'] = '/images/news/' . $image_name;

        }
        try {
            News::create($request->except('_token', 'image'));
            return back()->with('success', "Successfully Saved");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());

        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        $results = News::OrderBy('created_at', "DESC")->get();
        return view('admin.news.show')->with('results', $results);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $validator = Validator::make($request->all(), [
            'news_title' => 'required',
            'news_link' => 'required',

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(250, 250);
            $image_resize->save(public_path('/images/news/' . $image_name));
            $request['news_image'] = '/images/news/' . $image_name;

        }
        try {
            News::where('news_id', $request['news_id'])->update($request->except('_token', 'image'));
            return back()->with('success', "Successfully Saved");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            News::where('news_id', $id)->delete();
            return back()->with('success', "Successfully Deleted");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());

        }
    }
}
