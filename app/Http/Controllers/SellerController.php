<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SellerController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.sellers.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.sellers.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name'=>'required|max:50',
            'email'=>'required|max:50|unique:users,email,'.$user->id,
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return redirect()->route('admin.sellers.sellersIndex')
        ->with('message_status', 'Vendedor actualizado exitosamente')
        ->with('icon', 'success');
    }

    
}
