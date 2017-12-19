<?php

namespace App\Http\Controllers;

use App\User;

use Session;
use Auth;
use Storage;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      if(Auth::user()->role == 'Admin'  ){
      $title = 'Management User';
      $route = 'user';

      $user = User::orderby('created_at','desc')->paginate(500);
      return view('user.index', compact('title','user','route'));
      }else{
        return "
        <script language='javascript'>
        alert('Anda tidak punya akses');
        document.location='".asset('/')."';
        </script>";
      }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if(Auth::user()->role == 'Admin'  ){
      $title = 'Tambah Data User';
      $button = 'Simpan';
      $route  = 'user';

      return view('layouts.create', compact('title','button','route'));
      }else{
        return "
        <script language='javascript'>
        alert('Anda tidak punya akses');
        document.location='".asset('/')."';
        </script>";
      }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
         'name'           => 'required|unique:users,name',
         'email'          => 'required|unique:users,email',
         'password'       => 'required|string|min:6|max:12',
         'ulang_password' => 'required|same:password',
         'role'           => 'required',
         'foto'           => 'required'
         ]);

     if ( $request->hasFile('foto') ) {
         $foto     = $request->file('foto');
         $ext     = $foto->getClientOriginalExtension();

         if ( $request->file('foto')->isValid() ) {
             $foto_name = "user_". $request->name .".$ext";

             $path_foto = 'foto/';
             $request->file('foto')->move($path_foto, $foto_name);
         }
     }

     $user = new User;

     $user->name           = $request->name;
     $user->email          = $request->email;
     $user->password       = bcrypt($request->password);
     $user->role           = $request->role;
     $user->foto           = $foto_name;
     $user->save();

     Session::flash("flash_notif",[
         "level" => "dismissible alert-success",
         "massage" => "Berhasil Menyipan Data <strong>$user->name</strong>"
         ]);

     return \Redirect::route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      if(Auth::user()->role == 'Admin'  ){
      $route      = 'user';
      $controller = 'UserController';
      $title      = 'Edit User';
      $button     = 'Edit';

      $data       = User::findOrFail($id);

      return view('layouts.edit', compact('title', 'data','button', 'route','controller'));
      }else{
        return "
        <script language='javascript'>
        alert('Anda tidak punya akses');
        document.location='".asset('/')."';
        </script>";
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request,[
         'name'           => 'unique:users,name,'.$id,
         'email'          => 'unique:users,email,'.$id,
         'password'       => 'required|string|min:6|max:12',
         'ulang_password' => 'required|same:password',
       ]);

     $user = User::findOrFail($id);

     if($request->file('foto')){

         $exists = Storage::disk('foto')->exists($user->foto);

         if(isset($user->foto) && $exists){
             $delete = Storage::disk('foto')->delete($user->foto);
         }

         $foto = $request->file('foto');
         $ext = $foto->getClientOriginalExtension();

         if($request->file('foto')->isValid()){
             $foto_name = "user_". $request->name .".$ext";
             $upload_path = 'foto/';
             $request->file('foto')->move($upload_path, $foto_name);
             $user->foto = $foto_name;
             }
     }

     $user->name     = $request->name;
     $user->password = bcrypt($request->password);
     $user->role     = $request->role;
     $user->update();
     Session::flash(
     "flash_notif",[
         "level"   => "dismissible alert-info",
         "massage" => "Berhasil Mengubah data <strong>$user->name</strong>"
     ]);

     return \Redirect::route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = User::findOrFail($id);

      $exists = Storage::disk('foto')->exists($data->foto);

      if(isset($data->foto) && $exists){
          Storage::disk('foto')->delete($data->foto);
      }

      $data->delete();

      Session::flash(
          "flash_notif",[
              "level"   => "dismissible alert-info",
              "massage" => "Berhasil Mengapus Data <strong>$data->name</strong>"
          ]);

      return \Redirect::route('user.index');
    }
    public function setting($id)
    {
        $login_id    = Auth::user()->id;
        if($id == $login_id  ){

        $route      = 'user';
        $controller = 'UserController';
        $title      = 'Pengaturan User';
        $button     = 'Ubah';

        $data       = User::findOrFail($id);


        return view('user.edit', compact('title', 'data', 'kode', 'button', 'route', 'subtittle', 'crumb','controller'));
      }else{
        return "
        <script language='javascript'>
        alert('Anda tidak punya akses');
        document.location='".asset('/')."';
        </script>";
      }
    }

    public function updatesr(Request $request, $id)
    {
        $this->validate($request,[
            'name'           => 'required|unique:users,name,'.$id,
            'email'          => 'required|unique:users,email,'.$id,
            'password'       => 'required|string|min:6|max:12',
            'ulang_password' => 'required|same:password',
          ]);

        $user = User::findOrFail($id);

        if($request->file('foto')){

            $exists = Storage::disk('foto')->exists($user->foto);

            if(isset($user->foto) && $exists){
                $delete = Storage::disk('foto')->delete($user->foto);
            }

            $foto = $request->file('foto');
            $ext = $foto->getClientOriginalExtension();

            if($request->file('foto')->isValid()){
                $foto_name = "user_". $request->name .".$ext";
                $upload_path = 'foto/';
                $request->file('foto')->move($upload_path, $foto_name);
                $user->foto = $foto_name;
                }
        }


        $user->name     = $request->name;
        $user->password = bcrypt($request->password);

        $user->update();
        Session::flash(
        "flash_notif",[
            "level"   => "dismissible alert-info",
            "massage" => "Berhasil Mengubah data <strong>$user->name</strong>"
        ]);

        return redirect('setting/'.Auth::user()->id);

    }
}
