<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\NewsletterResource;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Hash;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $newsletter = new Newsletter();
        $newsletter->name = $request->name;
        $newsletter->email = $request->email;
        $newsletter->password = Hash::make($request->newPassword);
        if($newsletter->save()) {
            return new newsletterResource($newsletter);
        }
    }
    public function update(Request $request, $id)
    {
        $newsletter = Newsletter::findOrFail($id);
        $newsletter->name = $request->name;
        $newsletter->email = $request->email;
        if($newsletter->save()) 
        {
            return new NewsletterResource($newsletter);
        }
    }

    public function show($id)
    {
        $newsletter = Newsletter::findOrFail($id);
        return new NewsletterResource($newsletter);
    }

    public function index()
    {
        $newsletters = Newsletter::all();
        return NewsletterResource::collection($newsletters);
    }

    public function destroy($id)
    {
        $newsletter = Newsletter::findOrFail($id);
        if($newsletter->delete())
        {
            return new newsletterResource($newsletter);
        }
    }
}

