<?php

namespace App\Http\Controllers\Dashboard;

use App\Blogs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $blogs = Blogs::orderBy('source_date', 'desc')->paginate(10);
        return view('dashboard.blogs.index', compact('blogs',))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'source_image' => 'required|max:2048',
            'details' => 'required',
            'source' => 'required',
            'source_link' => 'required',
            'source_date' => 'required',
        ]);

        $image = $request->file('source_image');

        $image_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(('uploads/news'), $image_name);
        $form_data = array(
            'source_image'       =>   $image_name,
            'details'        =>   $request->details,
            'source'        =>   $request->source,
            'source_link'        =>   $request->source_link,
            'source_date'        =>   $request->source_date,
        );
        Blogs::create($form_data);

        return redirect()->route('blogs.index')
            ->with('success', 'Blog Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs = Blogs::findOrFail($id);
        return view('dashboard.blogs.edit', compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('source_image');
        if ($image != '') {
            $request->validate([
                'source_image' => 'required|max:2048',
                'details' => 'required',
                'source' => 'required',
                'source_link' => 'required',
                'source_date' => 'required',
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(('uploads/news'), $image_name);
        } else {
            $request->validate([
                'details' => 'required',
                'source' => 'required',
                'source_link' => 'required',
                'source_date' => 'required',
            ]);
        }

        $form_data = array(
            'source_image'       =>   $image_name,
            'details'        =>   $request->details,
            'source'        =>   $request->source,
            'source_link'        =>   $request->source_link,
            'source_date'        =>   $request->source_date,
        );

        Blogs::whereId($id)->update($form_data);
        return redirect()->route('blogs.index')
            ->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Blogs::findOrFail($id);
        $data->delete();
        return redirect()->route('blogs.index')
            ->with('success', 'Blog deleted successfully.');
    }
}
