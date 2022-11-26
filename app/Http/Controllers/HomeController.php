<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Assign;
use App\Models\ExShareHolder;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{

    // Auth function
    public function index()

    {
        $client = User::where('role', 'client')->where('status', 'active')->count();
        $employee = User::where('role', 'employee')->where('status', 'active')->count();


        $leftclient = User::where('role', 'client')->where('status', 'left')->count();
        $leftemployee = User::where('role', 'employee')->where('status', 'left')->count();
        return view('admin.dashboard', compact('employee', 'client', 'leftemployee', 'leftclient'));


        $role=Auth::user()->role;

        if($role== 'admin')
        {
            return view('admin.dashboard');
        }

        if($role== 'client')
        {
            return view('client.dashboard');
        }
        else
        {
           return view('employee.dashboard');
        }


    }


    public function searchByName($param)
    {
        $search_by_fname = User:: where('fname', 'like', "%" .$param."%")->get();
        $result = $search_by_fname;
        if($result){
            return ["result" => $search_by_fname, "result found"];
        }else{
            return ["result" => $search_by_fname, "result not found"];
        }

    }

    public function searchById($param){
        $search_by_id = User::where('id', 'like', "%" .$param."%")->get();
        $result = $search_by_id;
        if($result){
            return ["result" => $search_by_id, "result found"];
        }else{
            return ["result" => $search_by_id, "result not found"];
        }

    }



// employee Function
//Employee Function
/*
********************************************************************************************************************
********************************************************************************************************************
********************************************************************************************************************
********************************************************************************************************************
Employee Function Starts Here

***/
    public function employee()
    {
        return view('employee.view-all-employee');
    }
    public function employeelist()
    {
      $users = User::whereRole('employee')->get();

        return view('employee.employee-list',compact('users'));
    }
    public function employeeterminate()
    {
        return view('employee.terminate');
    }

    public function assignedEmployee(){

        $assignedEmployee = Assign::get();
        return view('employee.assigned',compact('assignedEmployee'));
    }




    public function addemployee(Request $request)
    {
        $data=new user;
        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->ehr=$request->ehr;
        $data->email=$request->email;
        $data->ear=$request->ear;
        $data->date_of_birth=$request->date_of_birth;
        $data->epi=$request->epi;
        $data->ewwh=$request->ewwh;
        $data->gbwp=$request->gbwp;
        $data->get=$request->get;
        $data->rsn=$request->rsn;
        $data->ydgp=$request->ydgp;
        $data->bp_ytd=$request->bp_ytd;
        $data->ers=$request->ers;
        $data->evvcn=$request->evvcn;
        $data->status='active';


        //$data->password=bcrypt($request->password);
        $data->role='employee';

        $data->save();

        return redirect()->route('employee.employee-list');
    }


    public function editEmployee($id)
    {
        // $users = User::where('id', '=' ,'$id')->first();
        $findUser = User::findOrfail($id);

        // dd($findUser);
        return view('employee.edit-employee', compact('findUser'));
    }

    public function updateEmployee (Request $request, $id)
    {
        $findUser = User::findOrFail($id);

        $findUser->fname=request('fname');
        $findUser->lname=request('lname');
        $findUser->ehr=request('ehr');
        $findUser->ear=request('ear');
        $findUser->date_of_birth=request('date_of_birth');
        $findUser->epi=request('epi');
        $findUser->ewwh=request('ewwh');
        $findUser->gbwp=request('gbwp');
        $findUser->get=request('get');
        $findUser->rsn=request('rsn');
        $findUser->ydgp=request('ydgp');
        $findUser->bp_ytd=request('bp_ytd');
        $findUser->ers=request('ers');
        $findUser->evvcn=request('evvcn');
        $findUser->status=request('status');

        $findUser->update();
        $notify[] = ['success', 'Employee Data Updated successfully'];
        return redirect("/employeelist")->withNotify($notify);
    }

//

    public function deleteEmployee($id)
    {
        User::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Employee Data Deleted successfully');
    }


//Employee Function
/*
********************************************************************************************************************
********************************************************************************************************************
********************************************************************************************************************
********************************************************************************************************************
Employee Function Ends Here

***/





// clients Function
/*
********************************************************************************************************************
********************************************************************************************************************
********************************************************************************************************************
********************************************************************************************************************
Client Function Starts Here

***/


    public function client()
    {
        return view('client.view-all-client');
    }
    public function addclient(Request $request)
    {
        $request->validate([
            'email'=> 'unique:users',
        ]);

        $data=new user;
        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->sdate=$request->sdate;
        $data->endate=$request->endate;
        $data->date_of_birth=$request->date_of_birth;
        $data->nfhpd=$request->nfhpd;
        $data->bgr=$request->bgr;
        $data->rsn=$request->rsn;
        $data->evvcn=$request->evvcn;
        $data->email=$request->email;
        $data->ea=$request->ea;
        $data->role='client';
        $data->status='active';
        $data->save();
        $addAssign = [
            'user_id'=> $data->id,
            'assignedTo'=> $request->ea,

        ];
        Assign::create($addAssign);

        return redirect()->route('client.client-list');
    }
    public function clientlist()
    {
        $findEmployees = User::where('role','employee')->get();
        $findClient = User::where('role','client')->get();
        $activeClient = User::where('role','client')->where('status','active')->get();

        return view('client.client-list', compact('findEmployees','findClient','activeClient'));
    }

    public function deleteClient ($id){
        $findClient = User::findOrFail($id);
        $findClient->delete();
        $notify[] = ['success', 'Client deleted successfully'];
        return redirect('/clientlist')->withNotify($notify);

    }

    public function getClient ($id){
        $findClientDelete = User::findOrFail($id);


        return view('client.getclient',compact('findClientDelete'));
    }


        public function editClient($id){
          $findUser = User::findOrFail($id);
          $findEmployees = User::where('role','employee')->get();
          return view('client.edit-client',compact('findUser','findEmployees'));

        }
    public function updateClient (Request $request, $id)
    {
        $findUser = User::findOrFail($id);
        $findUser->fname=request('fname');
        $findUser->lname=request('lname');
        $findUser->date_of_birth=request('date_of_birth');
        $findUser->evvcn=request('evvcn');
        $findUser->sdate=request('sdate');
        $findUser->endate=request('endate');
        $findUser->bgr=request('bgr');
        $findUser->rsn=request('rsn');
        $findUser->email=request('email');
        $findUser->status=request('status');

        $findUser->update();
        $notify[] = ['success', 'Client Data Updated successfully'];
        return redirect("/clientlist")->withNotify($notify);
    }


// clients Function
/*
********************************************************************************************************************
********************************************************************************************************************
********************************************************************************************************************
********************************************************************************************************************
Client Function End  Here

***/




    // External share holder Function
    public function exshareholders()
    {
      $shareHolders = ExShareHolder::get();

        return view('ex-share-holders', compact('shareHolders'));
    }

    public function addExshareHolders (Request $request){
        $request->validate([
            'firstName' => 'required',
            'lastName' =>    'required',
        ]);
        $addExshareH = new ExShareHolder;
        $addExshareH->lastName=request('lastName');
        $addExshareH->firstName=request('firstName');
        $addExshareH->save();
        $notify[] = ['success', 'Share Holder Added Successfully'];
        return redirect ('/exshareholders')->withNotify($notify);
    }


    public function logout() {
        'Auth'::logout();

        return redirect('/');
      }
}
