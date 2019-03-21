<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Display index page
        $students =Student::all();
        return view('vendor.multiauth.student.index') -> with ('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //display students form
        return view('vendor.multiauth.student.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Store data create form
        $this->validate($request, [
            
            'stud_name' => 'required',
            'stud_age' => 'required',            
            'stud_mykid' => 'required',
            'stud_class' => 'required',
            'stud_address' => 'required',
            'father_name' => 'required',
            'father_ic' => 'required',
            'father_phone' => 'required',
            'father_email' => 'required',
            'father_job' => 'required',
            'mother_name' => 'required',
            'mother_ic' => 'required',
            'mother_phone' => 'required',
            'mother_email' => 'required',
            'mother_job' => 'required',
            'stud_img' => 'required',

        ]);
               
        
        $student=new Student;
        $student->stud_name=$request->input('stud_name');
        $student->stud_age=$request->input('stud_age');
        $student->stud_mykid=$request->input('stud_mykid');
        $student->stud_class=$request->input('stud_class');
        $student->stud_address=$request->input('stud_address');
        $student->father_name=$request->input('father_name');
        $student->father_ic=$request->input('father_ic');
        $student->father_phone=$request->input('father_phone');
        $student->father_email=$request->input('father_email');
        $student->father_job=$request->input('father_job');
        $student->mother_name=$request->input('mother_name');
        $student->mother_ic=$request->input('mother_ic');
        $student->mother_phone=$request->input('mother_phone');
        $student->mother_email=$request->input('mother_email');
        $student->mother_job=$request->input('mother_job');
        $student->stud_img=$request->input('stud_img');
        $student->save();
        return redirect('/student')->with('success','Pendaftaran Murid Baru Berjaya!');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($stud_id)
    {
        $students=Student::find($stud_id);
        
        return view('vendor.multiauth.student.show')->with('students',$students);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($stud_id)
    {
        //$programid=Victim::all();
        //return view('pages.volunteers.edit') -> with ('victims', $programid);
        $volunteers = Volunteer::find($id);
        return view('pages.volunteers.edit')->with('volunteers',$volunteers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            'volName' => 'required',
            'volPhone' => 'required',
            'volEmail' => 'required',
            
            'volAddress' => 'required|max:255',
            'volStatus' => 'required',
            'program_id' => 'required'
        ]);
        $programid=Program::pluck('programName', 'id');
        $volunteers = Volunteer::find($id);
        $volunteers->volName=$request->input('volName');
        $volunteers->volPhone=$request->input('volPhone');
        $volunteers->volEmail=$request->input('volEmail');
        
        $volunteers->volAddress=$request->input('volAddress');
        $volunteers->volStatus=$request->input('volStatus');
        $volunteers->program_id=$request->input('program_id');
        $volunteers->save();
        return redirect('/volunteers')->with('success','Volunteerism updated successfully!');
        
    }

    /**


* Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        //delete data
        $volunteer=Volunteer::find($id);
      
       
        $volunteer->delete();
        return redirect('/volunteers')->with('success','Volunteer request deleted');
    }
}