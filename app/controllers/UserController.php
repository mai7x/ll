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


	public function doLogin()
	{
		$rules = array(
				'name' => 'required',
				'password' => 'required|alphaNum|min:3',
			      );

		$val = Validator::make(Input::all(), $rules);
		
		if($val->fails()){//Validation NG
			return Redirect::to('login')
				->withErrors($val)
				->withInput(Input::except('password'));
		}else{ //Validation OK
			if(Auth::attempt( Input::only('name','password')))
			{//認証OK
				return Redirect::intended('companies');
			}else{ //Validation OK, 認証失敗
				return Redirect::to('login')
					->with('flash_error','IDまたはパスワードが誤っています。')
					->withInput(Input::except('password'));
			}
		}
	}
}

?>
