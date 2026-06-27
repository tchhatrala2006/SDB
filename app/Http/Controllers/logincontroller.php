<?php

namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use App\Models\login;
    use App\Models\admin;
    use App\Models\singup;
    use App\Models\adminfrg;
    use App\Models\adminsing;
    use App\Models\events;
    use App\Models\sports;
    use App\Models\Examtable;

    class logincontroller extends Controller
    {
        //
        
        function login(Request $r)
    {
        $r->validate([
            'en' => 'required',
            'pd' => 'required'
        ]);

        $user = singup::where('ennumber', $r->en)->first();

        if($user && Hash::check($r->pd, $user->password))
        {
            session()->put('loginId', $user->id);
            session()->put('en',$r->en);
            return redirect('index');
        }
        else
        {
            return back()->with('fail','Invalid Enrollment Number or Password');
        }
    }
     

 function adminlogin(Request $r1)
{
    $r1->validate([
        'em' => 'required|email',
        'pd' => 'required'
    ]);

    $user1 = adminsing::where('email', $r1->em)->first();

    if($user1 && Hash::check($r1->pd, $user1->password))
    {
        session()->put('admin',$user1->email);
        return redirect('layout');
    }
    else
    {
        return back()->with('fail','Invalid Email or Password');
    }
}



        function singup(Request $r2)
        {
            
        $r2->validate([
                'name' => 'required',
                'ennumber' => 'required|unique:singup,ennumber',
                'pd1' => 'required|min:6',
                'pd2' => 'required|same:pd1',
                'sem' => 'required|file|max:2048'
            ]);
            $filename=$r2->file('sem')->getClientOriginalName();
            $r2->file('sem')->move(public_path('images'),$filename);
// $filename=$r->file('sem')->getClientOriginalName();
// $r->file('sem')->move(public_path('images'),$filename);
            $singup=new singup();
            $singup->name=$r2->name;
            session()->put('name',$r2->name);
            $singup->ennumber=$r2->ennumber;
            $singup->sem=$filename;
            $singup->password= Hash::make($r2->pd1);
            // $singup->Confirm_password=$r2->pd2;
            $singup->save();
            return redirect('login');
        }
        function adminsing(Request $r)
        {
            $r->validate([
                'name' => 'required',
                'email' => 'required|unique:adminsing|email',
                'password' => 'required|min:6',
                'password2' => 'required|same:password',
            ]);
            $as=new adminsing();
            $as->name=$r->name;
            $as->email=$r->email;
            $as->password=Hash::make($r->password2);
            
            $as->save();
            return redirect('admin');
        }
        function adminfrg(Request $r3)
        {
            $adminfrg=new adminfrg();
            $adminfrg->email=$r3->email;
            $adminfrg->save();
            return redirect('adminForget');
        }
        function displaylogin()
        {
            $data=login::all();
            return view('viewlogin',['data'=>$data]);
        }
        function displayadmin()
        {
            $data=admin::all();
            return view('viewadmin',['data'=>$data]);
        }
        function displaysing()
        {
            $JEEL=singup::paginate(4);
            return view('viewsing',['data'=>$JEEL]);
        }
        function viewadminsing()
        {
            $data=adminsing::paginate(2);
            return view('viewadminsing',['data'=>$data]);
        }
        function addevent(Request $r)
        {
            $data=new events();
            $data->event_date=$r->event_date;
            $data->venue=$r->venue;
            $data->events=$r->events;
            $data->save();
            return redirect('Notice');
        }
        function eventdetails()
        {
            $data=events::all();
            return view('event-details',['data'=>$data]);
        }
        function sport(Request $r)
        {
            $data=new sports();
            $data->name=$r->name;
            $data->enrollment_number=$r->enrollment;
            $data->game=$r->game;
            $data->save();
            return redirect('viewNotice');
        }
        function sportshow()
        {
            $data=sports::paginate(10);
            return view('sportrgs',['data'=>$data]);
        }
       public function addexam(Request $r)
        {
            $exam = new Examtable();
             $exam->date = $r->date;
              $exam->subject   = $r->subject;
            $exam->save();

            return redirect('Notice');
        }
        
        function examshow()
        {
            $data = Examtable::all();
            return view('examdt', ['data' => $data]);
        }
        function deleteexam(Request $r)
        {
            $data=$r->subject;
            $table=examtable::where('subject',$data);
            if($table==null)
                {
                    return back()->with(['error'=>'Subject is not Aviable']);

                }
            $table->delete();
            $table=examtable::all();
            return redirect('/DN');

        } 
        function deleteevent(Request $r)
        {
            $data=$r->venue;
            $table=events::where('venue',$data);
            if($table==null)
                {
                    return back()->with(['error'=>'Venue is not Aviable']);
                }
            $table->delete();
            $table=events::all();
            return redirect('/DN');

        }
        function updateExam(Request $r)

        {
            $data1=$r->date;
            $data=$r->subject;
            $id=$r->id;
            if($data1 && $data==null)
                {
                    $table=examtable::where('id',$id)->first();
                //    $table=[$table];
                //    $table->date=$r->date;
                 $table->date=$r->date;
                // $table->subject=$r->subject;
                $table->save();
                    return redirect('/DN');
                }
                elseif($data && $data1==null)
                    {
                        $table=examtable::where('id',$id)->first();
                //    $table=[$table];
                // $table->date=$r->date;
                //    $table->subject=$r->subject;
                $table->subject=$r->subject;
                $table->save();
                    return redirect('/DN');
                    }
                elseif($data1 && $data)
                    {
                        $table=examtable::where('id',$id)->first();
                //    $table=[$table];
                $table->date=$r->date;
                $table->subject=$r->subject;
                $table->save();
                    return redirect('/DN');
                    }

        }
        // function updateEvent(Request $r)

        // {
        //     $data=$r->event_date;
        //     $data1=$r->venue;
        //     $data2=$r->events;
        //     $id=$r->id;
        //     if($data)
        //         {
        //         $table=events::where('id',$id)->first();
        //         //    $table=[$table];
        //         //    $table->date=$r->date;
        //         $table->event_date=$r->event_date;
        //         $table->save();
        //             return redirect('/DN');
        //         }
        //         elseif($data1)
        //             {
        //                 $table=events::where('id',$id)->first();
        //         //    $table=[$table];
        //         $table->venue=$r->venue;
        //         //    $table->subject=$r->subject;
        //         $table->save();
        //             return redirect('/DN');
        //             }
        //         elseif($data2)
        //             {
        //                 $table=events::where('id',$id)->first();
        //         //    $table=[$table];
        //         //    $table->date=$r->date;
        //         $table->events=$r->events;
        //         $table->save();
        //             return redirect('/DN');
        //             }
        //             else
        //                 {
        //                     $table=events::where('id',$id)->first();
        //         //    $table=[$table];
        //         //    $table->date=$r->date;
        //         $table->event_date=$r->event_date;
        //         $table->venue=$r->venue;
        //         $table->events=$r->events;
        //         $table->save();
        //             return redirect('/DN');
        //                 }

        // }
        function updateEvent(Request $r)

        {
             $data=$r->event_date;
            $data1=$r->venue;
            $data2=$r->events;
            $id=$r->id;
            if($data && $data1==null && $data2==null)
                {
                $table=events::where('id',$id)->first();
                //    $table=[$table];
                //    $table->date=$r->date;
                $table->event_date=$r->event_date;
                $table->save();
                    return redirect('/DN');
                }
                elseif($data1 && $data==null && $data2==null)
                    {
                        $table=events::where('id',$id)->first();
                
                $table->venue=$r->venue;
                //    $table->subject=$r->subject;
                $table->save();
                    return redirect('/DN');
                    }
                    elseif($data2 && $data==null && $data1==null)
                    {
                        $table=events::where('id',$id)->first();
                //  $table->event_date=$r->event_date;
            //   $table->venue=$r->venue;
                $table->events=$r->events;
                //    $table->subject=$r->subject;
                $table->save();
                    return redirect('/DN');
                    }

                elseif($data && $data1 && $data2)
                    {
                        $table=events::where('id',$id)->first();
                //    $table=[$table];
                $table->event_date=$r->event_date;
              $table->venue=$r->venue;
               $table->events=$r->events;
                $table->save();
                    return redirect('/DN');
                    }

        }

        function searchuser(Request $r)
        {
            // return $r;
            $JEEL=singup::where('name','like',"%$r->name%")->paginate(10);
             return view('viewsing',[
                'data'=>$JEEL,
                'search'=>$r->name
                
                ]);


        }
       function searchadmin(Request $r)
        {
            // return $r;
            $data=adminsing::where('name','like',"%$r->name%")->paginate(10);
             return view('viewadminsing',['data'=>$data, 'search'=>$r->name]);
            //  return view('viewsing',[
            //     'data'=>$JEEL,
            //     'search'=>$r->name
                
            //     ]);


        }

        function searchsport(Request $r)
        {
             $data=sports::where('name','like',"%$r->name%")->paginate(10);
            return view('sportrgs',['data'=>$data,'search'=>$r->name]);
            //  return view('viewsing',[
            //     'data'=>$JEEL,
            //     'search'=>$r->name
                
            //     ]);
        }

    }
    
