<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private string $key;

    public function __construct(Request $request)
    {
        if(! $request->has("key")) {
            abort(401, "You must include a key in your request");
        }

        $this->key = $request->get("key");
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Post::query()
            ->select(["id", "title", "categories", "content"])
            ->where("key", "=", $this->key)
            ->latest()
            ->limit(40)
            ->get()
            ->map(fn($post) => $this->postArray($post))
            ->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "title" => "required|max:255",
            "categories" => "required|max:255",
            "content" => "required",
        ]);

        $post = Post::create($validated + [
                "key" => $this->key,
            ]);

        return $this->postArray($post);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $post)
    {
        $post = Post::query()
            ->where("key", "=", $this->key)
            ->where("id", "=", $post)
            ->firstOr(callback: fn() => abort(404));

        return $this->postArray($post);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $post)
    {
        $post = Post::query()
            ->where("key", "=", $this->key)
            ->where("id", "=", $post)
            ->firstOrFail();

        $post->delete();

        return $this->postArray($post);
    }

    private function postArray($post) : array
    {
        return [
            "id" => $post->id,
            "title" => $post->title,
            "categories" => $post->categories,
            "content" => $post->content,
        ];
    }
}
