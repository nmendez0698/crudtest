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
 
}
?>