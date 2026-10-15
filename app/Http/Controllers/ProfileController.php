<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('subscriber.profile.edit', compact('profile'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileRequest $request, Profile $profile): RedirectResponse
    {
        /**@var \App\Models\User $user*/
        $user = Auth::user();

        if($request->hasFile('photo')){
            //Eliminar foto anterior
            File::delete(public_path('storage/' . $profile->photo));
            //Asignar nueva foto
            $photo = $request['photo']->store('profiles');
        }else {
            $photo = $user->profile->photo;
        }

        //Asignar nombre y correo
        $user->full_name = $request->full_name;
        $user->email = $request->email;
        //Asignar foto
        $user->profile->photo = $photo;

        //Guardar campos de usuario
        $user->save();
        //Guardar campos de perfil
        $user->profile->save();

        return redirect()->route('profiles.edit', $user->profile->id);
    }

        /*$request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
         */
    /**
     * Delete the user's account.
     */
    public function destroy(ProfileRequest $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
