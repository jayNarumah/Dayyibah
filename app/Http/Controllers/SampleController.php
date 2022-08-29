<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    // public function login(Request $request, UserNotificationLogger $userNotificationLogger)
    // {
    //     $attr = $request->validate([
    //         'email' => 'required|string|email',
    //         'password' => 'required|string|min:6'
    //     ]);


    //     if (auth()->attempt($request->only('email', 'password'))) {
    //         $user = auth()->user();
    //         $userType = $user->user_type;

    //         if ($userType->value !== UserType::STAFF->value) {
    //             auth()->user()->tokens()->delete();
    //             return $this->error('The provided credentials are incorrect.', 401);
    //         }
    //         if ($user->email_verified && $user->is_active) {
    //             $hr_staff = HrStaff::where('user_id', $user->id)->first();
    //             Log::debug($hr_staff);

    //             // Log success attempt
    //             $userNotificationLogger->createForAuthUser(
    //                 subject: 'Successful Login',
    //                 content: 'You successfully logged in @ ' . now() . '.'
    //             );

    //             $recepient = $user->email;

    //             $details = [
    //                 'user' => $user,
    //                 'subject' => 'Successful Login',
    //                 'content' => 'You successfully logged in to the Bayelsa State Judiciary Court Management System @ ' . now() . '.',
    //             ];

    //             try {
    //                 Mail::to($recepient)->queue(new LoginSuccess($details));
    //                 Log::debug('Email sent to ' . $recepient);
    //             } catch (Exception $e) {
    //                 Log::error($e->getMessage());
    //             }

    //             return $this->success([
    //                 'access_token' => $user->createToken('access_token')->plainTextToken,
    //                 'token_type' => 'Bearer',
    //                 'user' => new UserResource($user),
    //                 'name' => $hr_staff->full_name,
    //                 'staffInfo' => $hr_staff,
    //             ]);
    //         }
    //         return $this->error('User is inactive or not verified', 401);
    //     }

    //     throw ValidationException::withMessages([
    //         'email' => ['The provided credentials are incorrect.'],
    //     ]);
    // }

    // public function register(Request $request)
    // {
    //     $rules = [
    //         'email' => 'required|string|email|unique:users,email',
    //         'password' => 'required|string|min:6|confirmed',
    //         'full_name' => 'required|string|max:500',
    //         'profile_picture' => 'nullable|string|max:500',
    //         'phone_number' => 'required|string|max:500',
    //     ];

    //     $validated = $request->validate($rules);
    //     $validated['password'] = bcrypt($request->password);
    //     $user = User::create($validated);

    //     $customer = new Customer();
    //     $customer->full_name = $request->full_name;
    //     $customer->email = $user->email;
    //     $customer->user_id = $user->id;
    //     $customer->phone_number = $request->phone_number;
    //     $customer->save();

    //     // $user->is_active = true;
    //     // $user->email_verified = true;

    //     // $user->save();


    //     // create customer affidavit profile

    //     $customerAffidavitProfile = new CustomerAffidavitProfile();
    //     $customerAffidavitProfile->customer_id = $customer->id;
    //     $customerAffidavitProfile->deponent_name = $customer->full_name;
    //     $customerAffidavitProfile->save();

    //     if ($user) {
    //         $email_verification = new UserEmailVerification();
    //         $email_verification->email = $user->email;
    //         $email_verification->verification_token = uniqid('hca_');
    //         $email_verification->save();

    //         $recepient = $user->email;

    //         $details = [
    //             'user' => $user,
    //             'subject' => 'EMAIL VERIFICATION',
    //             'content' => "Congratulations! You have successfully registered on the Bayelsa State Judiciary E-Affidavit/E-Probate portal. Please click on the link below to verify your email address.",
    //             'action_link' => env('APP_URL') . '/customer/verify/' . $email_verification->verification_token,
    //         ];

    //         try {
    //             Mail::to($recepient)->queue(new EmailVerification($details));
    //             Log::debug('Email sent to ' . $recepient);
    //         } catch (Exception $e) {
    //             Log::error($e->getMessage());
    //         }
    //     }

    //     return $this->success(['user' => $user], 201);
    // }
}
