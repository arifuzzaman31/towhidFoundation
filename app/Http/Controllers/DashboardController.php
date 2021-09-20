<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use Auth;
use Session;

class DashboardController extends Controller
{
   public function index()
   {
    	return view('admin.dashboard');	
   }

   public function login()
   {
   	return view('admin.login.login');
   }

   public function loginCheck(Request $request)
   {
   		$credential = [
   			'email' 	=> $request->email,
   			'password'  => $request->password
   		];

   		if (Auth::guard('admin')->attempt($credential)) {
            Session::put('admin', Auth::guard('admin')->user()->email);
            return redirect(route('dashboard'));
        } else {
            return back()->with(['alert-type' => 'error','message'=>'You Are not Admin!']);
        } 

   }
  public function logout()
    {
        if (Session::has('admin')) {
            // Session::forget(Auth::guard('admin')->user()->email);
            auth('admin')->logout();
            // Session::destroy();
            Session::flush();
            return redirect(route('login'));
        }
    }

  public function changePassword()
  {
    return view('admin.login.changePassword');
  }

  public function updatePassword(Request $request)
  {
    $user = User::where('email',Session::get('admin'))->first();
    $validation = Validator::make($request->all(),[
          'old_pass' => 'required',
          'password' => 'confirmed|different:old_pass',
        ]);

    if (!$validation->fails()) {
      if (Hash::check($request->old_pass, $user->password)) { 
         $user->fill([
            'password' => Hash::make($request->new_pass)
          ])->save();

          return back()->with(['alert-type' => 'success','message' => 'Password changed']);

      } else {
          return back()->with(['alert-type' => 'error','message' => 'Password not changed']);
      }
    }
    else {
       return back()->with(['alert-type' => 'error','message' => 'Validation Error Occured!']);
    }
  }

  public function getForgotPassw()
  {
      return view('admin.login.forgetPassword');
  }

  public function sendmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email|exists:users,email'
        ]);

        $token = \Hash::make(substr(str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789'),0,6));
        $result = User::where('email',$request->email)->first();
        $result->reset_token = $token;
        $result->update();

        $subject = 'Confim Email For Reset Admin Password';
        $to = $request->email;
        $email = "host@towhidfoundation.org";
        $name = "towhidfoundation.org";
        \Mail::send('admin.login.reset_password_mail_temp',['token' => $token], 
                  function ($message) use ($to,$email,$name,$subject){
                      $message->from($email,$name);
                      $message->to($to)->subject($subject);
             });
        \Session::flash('message','A fresh verification link has been sent to your email address.');
        return redirect()->back();
    }

    public function viewResetPage(Request $request)
    { 
      $result = User::where('reset_token',$request->token)->first();
      if($result->count() > 0){
        return view('admin.login.confirm_mail',['token' => $request->token]);
      } else {
        Session::flash('error','Please, try again!!');
        return redirect()->back();
      }
    }

    public function storeNewPassword(Request $request)
    { 
      $request->validate([
        'password' => 'required|confirmed|min:6'
      ]);
      $admin = User::where('reset_token',$request->identity)->first();
      $admin->password = Hash::make($request->password);
      $admin->update();
      Auth::guard('admin')->logout();
      Session::flash('message','Password is Changed Successfully!');
      return redirect()->route('login');
    }
}
