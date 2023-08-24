<?php

use App\Mail\SendEmail;
use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $projects = Project::orderBy('date','DESC')->paginate(4);
    // dd($projects);
    return view('home', compact('projects'));
});

// Route::get('/projects', function () {
//     $projects = Project::All();
//     return view('projects', compact('projects'));
// });

Route::post('/contact', function (Request $request) {
    // dd(shibal); 
    // return 'shibal';
    $validatedData = $request->validate(
        [
            'name' => 'required|max:255',
            'email' => ["required" ,"regex:/(.+)@gmail\\.com/i", "unique:users"],
            'message' => 'required'
            ]
        );
        Contact::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    });