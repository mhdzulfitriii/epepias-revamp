<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\otpNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Ichtrojan\Otp\Otp;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
// use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification;

class RegisterController extends Controller
{
    protected $otp;

    public function __construct()
    {
        $this->otp = new Otp();
    }
    public function M_Ahli()
    {
        return view('auth.register');
    }

    public function otp(Request $request)
    {
        $email = $request->query('email');

        return view('auth.otp-verify', compact('email'));
    }

    public function M_Akaun(Request $request)
    {
        $userEmail = $request->query('email');
        return view('auth.akaun', compact('userEmail'));
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'FullName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'IcNumber' => ['required', 'string', 'size:12', 'unique:users,IcNumber'],
            'NoTel' => ['required', 'string', 'max:15'],
            'Persatuan_ID' => ['required', 'string', 'max:255'],
            'Alamat1' => ['required', 'string', 'max:255'],
            'Alamat2' => ['nullable', 'string', 'max:255'],
            'Alamat3' => ['nullable', 'string', 'max:255'],
            'Poskod' => ['nullable', 'string', 'size:5'],
            'Negeri' => ['nullable', 'string', 'max:255'],
            'Bandar' => ['nullable', 'string', 'max:255'],
            'NamaPenjaga' => ['nullable', 'string', 'max:255'],
            'Hubungan' => ['nullable', 'string', 'max:255'],
            'NoTelPenjaga' => ['nullable', 'string', 'max:15'],
        ]);

        Session::put('otp_verification', [
            'FullName' => $request->FullName,
            'email' => $request->email,
            'IcNumber' => $request->IcNumber,
            'NoTel' => $request->NoTel,
            'Persatuan_ID' => $request->Persatuan_ID,
            'Alamat1' => $request->Alamat1,
            'Alamat2' => $request->Alamat2,
            'Alamat3' => $request->Alamat3,
            'Poskod' => $request->Poskod,
            'Negeri' => $request->Negeri,
            'Bandar' => $request->Bandar,
            'NamaPenjaga' => $request->NamaPenjaga,
            'Hubungan' => $request->Hubungan,
            'NoTelPenjaga' => $request->NoTelPenjaga,
        ]);


        return redirect()->route('info-akaun', ['email' => $request->email]);
    }

    public function M_akaun_perform(Request $request)
    {
        $validator = $request->validate([
            'password' => ['required', 'string', 'min:8'],
        ]);

        Session::put('acc_password', [
            'password' => Hash::make($request->password),
        ]);

        $accData = session('otp_verification');

        $otpData = (new Otp)->generate($accData['email'], 'numeric', 6, 5);

        Notification::route('mail', $accData['email'])
            ->notify(new otpNotification($otpData->token));

        return redirect()->route('otp', ['email' => $accData['email']]);
    }

    public function verify(Request $request)
    {
        // dd($request);
        $email = $request->email;
        $otpValidation = $this->otp->validate($email, $request->otp);

        // dd($otpValidation);
        if (!$otpValidation->status) {
            return redirect()->back()->with('error', 'Invalid or expired OTP');
        }

        $accData = session('otp_verification');
        $password = session('acc_password');

        if (!$accData || !$password) {
            return redirect()->back()->with('error', 'Session expired. Please register again.');
        }

        $user = User::create([
            'FullName'       => $accData['FullName'],
            'email'          => $accData['email'],  // Corrected email assignment
            'IcNumber'       => $accData['IcNumber'],
            'NoTel'          => $accData['NoTel'],
            'Persatuan_ID'   => $accData['Persatuan_ID'],
            'Alamat1'        => $accData['Alamat1'],
            'Alamat2'        => $accData['Alamat2'],
            'Alamat3'        => $accData['Alamat3'],
            'Poskod'         => $accData['Poskod'],
            'Negeri'         => $accData['Negeri'],
            'Bandar'         => $accData['Bandar'],
            'NamaPenjaga'    => $accData['NamaPenjaga'],
            'Hubungan'       => $accData['Hubungan'],
            'NoTelPenjaga'   => $accData['NoTelPenjaga'],
            'password'       => $password['password'],  // Ensure password is hashed
            'email_verified_at' => now(),
        ]);

        // event(new Registered($user));

        Auth::login($user);
        session()->forget(['otp_verification', 'acc_password']);
        return redirect(route('dashboard', absolute: false));
    }

    public function resend(Request $request)
    {
        $email = $request->email;

        $otpData = (new Otp)->generate($email, 'numeric', 6, 5);

        Notification::route('mail', $email)
            ->notify(new otpNotification($otpData->token));

        return redirect()->back()->with('success', 'Code OTP dah resend');
    }
}
