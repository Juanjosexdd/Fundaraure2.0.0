<?php

namespace App\Http\Controllers\Config;
use Caffeinated\Shinobi\Models\Role;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // if($request){

        //     $sql=trim($request->get('buscarTexto'));
        //     $users=DB::table('users')->where('cedula','LIKE','%'.$sql.'%')
        //     ->orderBy('id','desc')
        //     ->paginate(6);
        //     return view('config.users.index',["users"=>$users,"buscarTexto"=>$sql]);
        //     //return $categorias;
        // }
        $users = User::orderBy('id', 'DESC')->paginate(8);

        return view('config.users.index', compact('users'));
    }

    public function trashed()
    {
        return view('config.users.trashed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('config.users.show', compact('user'));
    }

    public function create()
    {
        $roles = Role::get();
        return view('config.users.create', compact('roles'),[
            'user' => new User
        ]);
    }

    public function store(UserRequest $request)
    {
        
        $user = User::create($request->all());
        $user->roles()->sync($request->get('roles'));

        // return User::create([
        //     'cedula' => $request['cedula'],
        //     'name' => $request['name'],
        //     'last_name' => $request['last_name'],
        //     'phome' => $request['phone'],
        //     'address' => $request['address'],
        //     'email' => $request['email'],
        //     'password' => Hash::make($request['password']),
        // ]);
        
        // 'cedula' => $request['cedula'],
        // 'name' => $request['name'],
        // 'last_name' => $request['last_name'],
        // 'phone' => $request['phone'],
        // 'address' => $request['address'],
        // 'email' => $request['email'],
        // 'password' => bcrypt($request['password'])

        return redirect()->route('config.users.index')
            ->with('success', 'Usuario guardado con éxito.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::get();
        return view('config.users.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->all());

        $user->roles()->sync($request->get('roles'));

        //Imagen 
        if($request->file('file'))
        {
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $user->fill(['file' => asset($path)])->save();
        }

        $user->save();

        return redirect()->route('config.users.edit', $user->id)
            ->with('success', 'Usuario actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('config.users.trashed')
            ->with('success', 'Usuario eliminado correctamente.');

    }
    public function restore($id)
    {
        $user = User::onlyTrashed()->find($id);
        $user->restore();

        return redirect()->route('config.users.index')
            ->with('success', 'Usuario restaurado correctamente.');

    }
    public function permanentDeleteSoftDeleted($id)
    {
        $user = User::onlyTrashed()->find($id);
        $user->forceDelete();

        return redirect()->route('config.users.index')
            ->with('success', 'Usuario eliminado correctamente.');

    }

}
