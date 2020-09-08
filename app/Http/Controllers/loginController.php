<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\MessageBag;
use App;
use Hash;
use Session;
use Auth;

class loginController extends Controller
{
    public function getLogin(){
        return view('Page.login');
    } 
	

    public function postLogin(Request $request){
    $rules = [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ];

        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ], 200);
        } else {
            $email = $request->email;
            $password = $request->password;
            if ($user = App\user::where('email', $email)->first()) {
                if (Hash::check($password, $user->password)) {
                    if (isset($request->remember)) {
                        Cookie::queue('remember', 'true', 43200); // 30days
                        Cookie::queue('remember_email', $request->email, 43200); 
                        Cookie::queue('remember_password', $request->password, 43200);
                        
                    }

                
                    Session::put('user', $user);

                    return response()->json([
                        'error' => false,
                        'role' => $user->role
                    ], 200);
                }
                else {
                    $message = new MessageBag(['errorlogin' => 'Địa chỉ email hoặc mật khẩu không chính xác']);
                    return response()->json([
                        'error' => true,
                        'message' => $message
                    ], 200);
                }
            } 
            else {
                $errors = new MessageBag(['errorlogin' => 'Địa chỉ email chưa tồn tại']);
                return response()->json([
                    'error' => true,
                    'message' => $errors
                ], 200);
            }
        }
    }

    //logout
    public function postLogout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('trangchu');

    }
}
