<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;


class PageController extends Controller
{
    public function home() {
        return view('home', [
            'latest_posts' => Post::latest()->take(3)->get() // Ambil 3 berita terbaru
        ]);
    }

    public function about() {
        return view('about');
    }

    public function news() {
        return view('news', [
            'posts' => Post::latest()->get()
        ]);
    }

    public function newsDetail(Post $post) {
        return view('news_detail', [
            'post' => $post
        ]);
    }

    public function activities() {
        return view('activities', [
            'activities' => Activity::latest()->get()
        ]);
    }

    public function activityDetail(Activity $activity) {
        return view('activity_detail', [
            'activity' => $activity
        ]);
    }

    public function contact() {
        return view('contact');
    }

    public function handleContactForm(Request $request) {
        // Validasi form
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to('admin-email@example.com')->send(new ContactFormMail($validated));

        return redirect()->route('contact')->with('success', 'Pesan Anda telah berhasil dikirim!');
    }
}
