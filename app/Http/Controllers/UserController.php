<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $Employee = Employee::latest()->paginate(5);
        $Company = Company::latest()->paginate(5);

        $count = Employee::groupBy('Company')->count();

        return view('index',compact('Employee','Company'));
    }
    public function createCompany()
    {
        return view('createCompany');
    }
    public function createEmploy()
    {
        $data = Company::all();
        return view('createEmploy',compact('data'));
    }
    public function createCompanyFrom(Request $request)
    {
      $data =new Company();
      $data->Name = $request->Name;
      $data->Email = $request->Email;
      $data->Phone = $request->Phone;
      $data->save();
        return redirect('/')->withSuccess('Company Add Successfully');

    }
    public function createEmployFrom(Request $request)
    {
      $data =new Employee();
      $data->FirstName = $request->FirstName;
      $data->LastName = $request->LastName;
      $data->Company = $request->Company;
      $data->Email = $request->Email;
      $data->Phone = $request->Phone;
      $data->save();
        return redirect('/')->withSuccess('Employ Add Successfully');

    }


    public function CompanyList()
    {
        $data = Company::latest()->paginate(5);
        return view('CompanyList',compact('data'));
    }
    public function EmployList()
    {
        $data = Employee::latest()->paginate(5);
        return view('EmployList',compact('data'));
    }




    public function EditEm($id)
    {
        $data = Employee::find($id);
        $data1 = Company::all();
        return view('EditEm',compact('data','data1'));
    }
    public function EditEmployFrom(Request $request,$id)
    {
        $data = Employee::find($id);
        $data->FirstName = $request->FirstName;
        $data->LastName = $request->LastName;
        $data->Company = $request->Company;
        $data->Email = $request->Email;
        $data->Phone = $request->Phone;
        $data->save();
        return redirect('/EmployList')->withSuccess('Employ Edit Successfully');

    }
    public function DeleteEm($id)
    {
        $data = Employee::find($id);
        $data->delete();
        return redirect('/EmployList')->withSuccess('Employ Delete Successfully');

    }

    public function EditCom($id)
    {
        $data = Company::find($id);
        return view('EditCom',compact('data'));
    }
    public function EditCompanyFrom(Request $request,$id)
    {
        $data = Company::find($id);
        $data->Name = $request->Name;
        $data->Email = $request->Email;
        $data->Phone = $request->Phone;
        $data->save();
        return redirect('/CompanyList')->withSuccess('Company Edit Successfully');

    }
    public function DeleteCom($id)
    {
        $data = Company::find($id);
        $data->delete();
        return redirect('/CompanyList')->withSuccess('Company Delete Successfully');

    }

    public function Count($id)

    {
        $data = Company::find($id);

        $count = Employee::where('Company','=',$data->Name)->count();
        $data1 = Employee::where('Company','=',$data->Name)->get();
        return view('Count',compact('count','data1'));

    }

}
