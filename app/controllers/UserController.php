<?php
class UserController extends BaseController {
 
    /**
     * Show the profile for the given user.
     */

    public function crearUser()
    {
        $user = new User;
        $user->name = Input::get('nombre');
        $user->username = Input::get('usuario');
        $user->email = Input::get('correo');
        $user->pass = Input::get('contra');
        $user->phone = Input::get('tel');
        $user->save();
        return Redirect::to('/');
    }

    public function borrarUser($id)
    {
        $user = User::where('id_user', $id)->delete();
        return Redirect::to('/');
    }

    public function editUser($id)
    {
        $user = User::where('id_user', $id)->get();
        return $user;
    }

    public function updateUser()
    {
        $id = Input::get('id_user');
        $user = User::where('id_user', $id)->update([
            'name' => Input::get('nombre_edit'),
            'username' => Input::get('usuario_edit'),
            'email' => Input::get('correo_edit'),
            'pass' => Input::get('contra_edit'),
            'phone' => Input::get('tel_edit')
        ]);
        return Redirect::to('/');
    }
 
}
?>