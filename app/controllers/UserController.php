<?php 
class UserController extends BaseController {
/**
     * 指定されたユーザーのプロファイルを表示する
     */
    public function showProfile($id)
    {
        $user = User::find($id);
 
        return View::make('user.profile', array('user' => $user));
    }

}

?>
