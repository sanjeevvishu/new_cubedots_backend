<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\CMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $searchData = [];
        $CMSQuery = CMS::where('id','>',0);
          
        $CMScontent = $CMSQuery->latest('id');

        $cms = $CMSQuery->paginate(15);
        //$CMSQuery->appends($CMScontent);
        //echo '<BR>DATA<BR>';print_r($CMScontent);exit;
        return view('admin.cms.index', compact('cms', 'searchData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cuEvents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createpage(Request $request)
    {
        $request->validate([
            'title'                 => 'required|max:190',
            'youtube_url'           => 'required|max:190',
            'small_description'     => 'nullable|max:150',
            //'medium_description'    => 'required|max:250',
            'long_description'      => 'required',
            'status'                => 'required|max:10',
        ]);
      
        $inputs = $request->all();
        $cuEvent = new cuEvent();
        $inputs['slug'] = \Illuminate\Support\Str::of($inputs['title'])->slug('-');

        if ($request->hasfile('featured_image')) {
           
            $projectMediaType= 'featured_image';
            $image           = $request->file('featured_image');
            //$fileSize       = $image->getSize();
            $fileName        = time() . '_' . $image->getClientOriginalName();
            //$fileMimeType    = $image->getMimeType();
            $filePath = 'cuevents/' . $projectMediaType . '/' . $fileName;
            Storage::disk('s3')->put($filePath, $image->get());
            $inputs['featured_image'] = $filePath;
        }

        $cuEvent->fill($inputs);
        $cuEvent->save();
        
        return redirect(route('admin.cuEvents.index'))->with('flash_success', 'CuEvent created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CuEvent  $cuEvent
     * @return \Illuminate\Http\Response
     */
    public function show(CuEvent $cuEvent)
    {
        return view('admin.cuEvents.show', compact('cuEvent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CuEvent  $cuEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(CuEvent $cuEvent)
    {
        return view('admin.cuEvents.edit', compact('cuEvent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CuEvent  $cuEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CuEvent $cuEvent)
    {
        $request->validate([
            'title'                 => 'required|max:190',
            'youtube_url'           => 'required|max:190',
            'small_description'     => 'nullable|max:150',
            //'medium_description'    => 'required|max:250',
            'long_description'      => 'required',
            'status'                => 'required|max:10',
        ]);
        $inputs = $request->all();
        $inputs['slug'] = \Illuminate\Support\Str::of($inputs['title'])->slug('-');

        if ($request->hasfile('featured_image')) {

            $projectMediaType= 'featured_image';
            $image           = $request->file('featured_image');
            //$fileSize       = $image->getSize();
            $fileName        = time() . '_' . $image->getClientOriginalName();
            //$fileMimeType    = $image->getMimeType();
            $filePath = 'cuevents/' . $projectMediaType . '/' . $fileName;
            Storage::disk('s3')->put($filePath, $image->get());

            if(Storage::disk('s3')->exists($cuEvent->featured_image)){
                Storage::disk('s3')->delete($cuEvent->featured_image);
            }

            $inputs['featured_image'] = $filePath;
        }

        $cuEvent->fill($inputs);
        $cuEvent->save();

        return redirect(route('admin.cuEvents.index'))->with('flash_success', 'CuEvent updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CuEvent  $cuEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(CuEvent $cuEvent)
    {
        // if(Storage::disk('s3')->exists($cuEvent->featured_image)){
        //     $message = ('Media deleted.');
        //     Storage::disk('s3')->delete($cuEvent->featured_image);
        // }else{
        //     $message = ('Media File does not exists.');
        // }

        $cuEvent->delete();
        return redirect(route('admin.cuEvents.index'))->with('flash_success', 'CuEvent deleted successfully.');
    }
}
