<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\EmployeeSalary;
use App\Models\Payment;
use App\Models\ExShareHolder;
class FinanceController extends Controller
{
    //
    public function employeesalary()
    {
        $users = User::whereRole('employee')->get();
        $getEmployeeSalaries = EmployeeSalary::get();
        return view('employee.salary', compact('users','getEmployeeSalaries'));
    }
        public function addEmployeesalary(Request $request){
            $request->validate([
                'amount' => 'required',
                'email'=>'required'
            ]);
            $email = $request->email;
            $findUser = User::whereEmail($email)->first();
            $employeeName = $findUser->fname. " " .$findUser->lname;
            $addEmployeeSalary = new EmployeeSalary;
            $addEmployeeSalary->email = $email;
            $addEmployeeSalary->amount= request('amount');
            $addEmployeeSalary->employeeName= $employeeName;
            $addEmployeeSalary->save();
            $notify[] = ['success', 'Employee Salary Updated successfully'];
            return redirect('employeesalary')->withNotify($notify);
        }


        public function payment()
        {
            $users = User::whereRole('client')->get();
            $payments = Payment::get();

            return view('deposit',compact('users','payments'));
        }

        public function addPayment(Request $request){

            $request->validate([
                'amount' => 'required',
                'email'=>'required'
            ]);
            $email = $request->email;
            $findUser = User::whereEmail($email)->first();
            $clientName = $findUser->fname. " " .$findUser->lname;
            $addPayment = new Payment;
            $addPayment->email = $email;
            $addPayment->amount = request('amount');
            $addPayment->clientName = $clientName;
            $addPayment->save();
            $notify[] = ['success', 'Payment added successfully'];
            return redirect('payment')->withNotify($notify);
        }   
}


