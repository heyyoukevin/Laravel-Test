<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reguser;
use App\Models\category;
use App\Models\task;

use Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function registerpage()
    {
        return view('registerpage');
    }



    public function loginpage()
    {
        return view('loginpage');
    }



    public function register(Request $request)
    {
        $this->validate($request,[            
            'name' => 'required||regex:/^[\p{L}\s-]+$/u',
            'email' => 'required|email|unique:App\Models\reguser,email',            
            'pass' => 'required|min:8',
        ]);

        $getname=request('name');
        $getemail=request('email');        
        $getpass=request('pass');       
       
        $user=new reguser();
        $user->name=$getname;
        $user->email=$getemail;        
        $user->pass=$getpass;
                
        $user->save();
        return view('loginpage');
    }



    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'pass' => 'required',

        ]);

        $user = reguser::where([['email',$request->email],['pass',$request->pass]])->first();

        if($user)
        {
            $request->session()->put('email', $user->email);
            $request->session()->put('userid',$user->id);
            return redirect('/userhome');
        }
        else
        {
            return back()->with('fail','Invalid Credentials ! ! !');
        }

    }



    public function logout()
    {
        if(session()->has('email') && session()->has('userid'))
        {
            session()->pull('email');
            session()->pull('userid');
            return redirect('/loginpage');
        }
    }



    public function userhome()
    {
        $id=session()->get('userid');
        $user=reguser::where('id',$id)->first();
        return view('userhome',compact('user'));
    }



    public function viewcategory()
    {
        $id=session()->get('userid');
        $user=category::where('userid',$id)->get();        
        return view('viewcategory',compact('user'));        
    }



    public function addcategory()
    {
        return view('addcategory');
    }



    public function adcategory(Request $request)
    {        
        $id=session()->get('userid');
        
        $getuserid=$id;
        $getcatname=$request->input('catname');
        
        $user=new category();
        $user->userid=$getuserid;
        $user->catname=$getcatname;
                
        $user->save();
        return redirect('/viewcategory');
    }



    public function addtask($catid)
    {        
        $data=['catid'=>$catid];
        return view('addtask',$data);
    }



    public function adtask(Request $request)
    {
        $id=session()->get('userid');
        
        $getuserid=$id;
        $getcatid=request('catid');
        $gettitle=$request->input('title');
        $getdesc=$request->input('desc');
        $getdate=$request->input('date');

        $user=new task();
        $user->userid=$getuserid;
        $user->catid=$getcatid;
        $user->title=$gettitle;
        $user->desc=$getdesc;
        $user->date=$getdate;
            
        $user->save();
        return redirect('/viewcategory');
    }



    public function viewtask($catid)
    {
        $id=session()->get('userid');
        $user=task::where('userid',$id)->where('catid',$catid)->get();
        return view('viewtask',compact('user'));
    }



    public function viewtaskdetail($catid,$taskid)
    {
        $id=session()->get('userid');
        $user=task::where('userid',$id)->where('id',$taskid)->get();
        return view('viewtaskdetail',compact('user'));
    }



    public function deletetask($catid,$taskid)
    {
        $user=task::find($taskid);
        $user->delete();
        return redirect('/viewtask/'.$catid);
    }



    public function edittask($catid,$taskid)
    {
    $data=['catid'=>$catid];
    $user=task::find($taskid);
    return view('edittask',compact('user'),$data);
    }


    
    public function updatetask(Request $request)
    {
        $updating=DB::table('tasks')->where('id',$request->input('id'))->update([   
            'title'=>$request->input('title'),
            'desc'=>$request->input('desc'),
            'date'=>$request->input('date'),
        ]);
        $catid=$request->input('catid');
        return redirect('/viewtask/'.$catid);
    }

}
