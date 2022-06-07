<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transactions;
use App\Models\Wallets;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
    function adminDashboard(){
        $allUsers = User::all();
        unset($allUsers[0]);
        $sessionData = [
            'userData'=>User::where('id', '=', session('AuthenticatedUser'))->first(),
            'userList'=>$allUsers,
        ];
        return view('admin.dashboard', $sessionData);
    }

    function adminProfile(){
        $sessionData = ['userData'=>User::where('id', '=', session('AuthenticatedUser'))->first()];
        return view('admin.profile', $sessionData);
    }

    function adminTransactionHistory(){
        $sessionData = [
            'userData'=>User::where('id', '=', session('AuthenticatedUser'))->first(),
            'userTransactionList'=>Transactions::orderBy('id', 'DESC')->get()
        ];
        return view('admin.transactions', $sessionData);
    }

    function editTransaction($userId){
        $sessionData = ['userData'=>User::where('id', '=', $userId)->first()];
        return view('admin.editUserProfile', $sessionData);
    }

    function viewTransaction($transId){
        $transactionInfo = Transactions::where('id', '=', $transId)->first();
        $transactionUserInfo = User::where('id', '=', $transactionInfo->userId)->first();

        $transactionDetail['transaction'] = $transactionInfo;
        $transactionDetail['user'] = $transactionUserInfo;

        $sessionData = [
            'userData'=>User::where('id', '=', session('AuthenticatedUser'))->first(),
            'transactionDetail'=>$transactionDetail,
        ];
        return view('admin.transactionDetail', $sessionData);
    }

    function updateUserProfileInfo($userId, Request $request){

        $request->validate([
            'email'=>'required|email',
        ]);

        if(!$request->firstName){
            return back()->with("fail", "First name is required!");
        }

        if($request->phone && !is_numeric($request->phone)){
            return back()->with("fail", "Phone Number must be a number!");
        }

        $userInfo = User::where('id', '=', $userId)->first();

        if($request->email != $userInfo->email){
            $userExist = User::where('email', '=', $userInfo->email)->first();
            if($userExist){
                return back()->with("fail", "Email already taken!");
            }
        }

        $fileLink = '';
        $allowedExtensions = ["svg", 'png', 'jpg', 'jpeg'];
        if($request->hasFile('profile')){

           $fileDestination = 'public/images/profiles';            
           $file = $request->file('profile');            
           $fileName = $file->getClientOriginalName();    
           $fileExtension = $file->getClientOriginalExtension();
           
           if(!in_array($fileExtension, $allowedExtensions)){
                return back()->with("fail", "Invalid image, Image extension '" . $fileExtension . "' is not allowed");
           }

           $filePath = $file->storeAs($fileDestination, $fileName);
           
           $fileLink = "/storage/images/profiles/" . $fileName;
           $userInfo->profile = $fileLink;
        }

        
        $userInfo->fullName = $request->firstName . " " . $request->lastName;
        $userInfo->email = $request->email;
        $userInfo->phone = $request->phone ? $request->phone : "";
        $userInfo->language = $request->language ? $request->language : "";
        $userInfo->currency = $request->currency ? $request->currency : "";
        $sucess = $userInfo->save();

        return back()->with("success", $request->firstName . " " . $request->lastName. " Account info updated!");;
    }

    function processUserTransaction($transId, Request $request){
        $userTransInfo = Transactions::where('id', '=', $transId)->first();
        $userWalletInfo = Wallets::where('userId', '=', $userTransInfo->userId)->first();

        switch ($request->actionType) {
            case 'approve':
                switch ($userTransInfo->type) {
                    case 'DEPOSIT':
                        $userWalletInfo->amount = floatval($userWalletInfo->amount) + floatval($userTransInfo->amount);

                        break;

                    case 'TRANSFER':
                        $senderUserWallet = Wallets::where('userAddress', '=', $userTransInfo->senderAddress)->first();
                        $userWalletInfo->amount = floatval($userWalletInfo->amount) - floatval($userTransInfo->amount);
                        $senderUserWallet->amount = floatval($senderUserWallet->amount) + floatval($userTransInfo->amount);
                        
                        $senderUserWallet->save();

                        break;

                    case 'WITHDRAWAL':
                        $userWalletInfo->amount = floatval($userWalletInfo->amount) - floatval($userTransInfo->amount);
                        
                        break;
                    
                    default:
                        break;
                }
                $userWalletInfo->save();

                $userTransInfo->status = "APPROVED";
                $userTransInfo->save();

                return back()->with("success", "Successfull user transaction approved");

            case 'reject':

                $userTransInfo->status = "REJECTED";
                $userTransInfo->save();

                return back()->with("success", "Successfull user transaction rejected");
            
            default:
                return back()->with("fail", "Something went wrong, try again later");
        }

        return back()->with("fail", "Something went wrong, try again later");
    }
}
