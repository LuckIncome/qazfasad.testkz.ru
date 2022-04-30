<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Objects;

use Illuminate\Http\Request;

class ObjectsController extends Controller
{
    public function index()
    {
        $objects = Objects::select('title', 'image', 'type', 'size', 'address', 'slug')
            ->where('status',true)
            ->orderBy('sort_id')
            ->get();
        $page = Page::select('type', 'id', 'title', 'excerpt', 'body', 'image', 'slug', 'seo_title', 'meta_description', 'meta_keywords', 'status')
            ->where(['type' => 'objects', 'status' => Page::STATUS_ACTIVE])
            ->firstOrFail();
        return view('pages.objects.index', compact('page', 'objects'));
    }

    public function show($articleSlug)
    {
        $one_object = Objects::where('slug', $articleSlug)->where('status',true)->firstOrFail();
        $objects = Objects::select('title', 'image', 'type', 'size', 'address', 'slug')
            ->where('status',true)
            ->orderBy('sort_id')
            ->get();
        $page = Page::select('type', 'id', 'title', 'excerpt', 'body', 'image', 'slug', 'seo_title', 'meta_description', 'meta_keywords', 'status')
            ->where(['type' => 'objects', 'status' => Page::STATUS_ACTIVE])
            ->firstOrFail();
        return view('pages.objects.show', compact('page', 'one_object', 'objects'));
    }
}
