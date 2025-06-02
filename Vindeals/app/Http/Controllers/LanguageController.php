<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LanguageController extends Controller
{
    public function changeLanguageForCurrentUser(Request $request){

        $user = User::find(Auth::user()->id);
        $user->language = $user->language == 'nl' ? 'en' : 'nl';
        $user->save();

        return back();
    }
}
