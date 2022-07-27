<?php

namespace App\Http\Controllers;

use App\Student;
use App\EducationInfo;
use App\CollegeInfo;
use App\ParentInfo;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::all();
        foreach($students as $student){
            
            $college_info = CollegeInfo::where('student_id',$student->id)->get();
            $education_info = EducationInfo::where('student_id',$student->id)->get();
            $parent_info = ParentInfo::where('student_id',$student->id)->get();

            if(count($college_info)!=0)
                $student['is_college_info']=true;
            else
                $student['is_college_info']=false;

            if(count($education_info)!=0)
                $student['is_education_info']=true;
            else
                $student['is_education_info']=false;

            if(count($parent_info)!=0)
                $student['is_parent_info']=true;
            else    
                $student['is_parentinfo']=false;
        }

        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name=$request->get('name');
        $email=$request->get('email'); 
        $mobile=$request->get('mobile');
        $picture=$request->get('picture');
        $dob=$request->get('dob');
        $gender=$request->get('gender');
        $citizenship=$request->get('citizenship');
        $blood_group=$request->get('blood_group');
        $p_address=$request->get('p_address');
        $t_address=$request->get('t_address');
        
        try{
            Student::create([
            'name'=>$name,
            'email'=>$email,
            'mobile'=>$mobile,
            'citizenship'=>$citizenship,
            'bloodgroup'=>$blood_group,
            'picture'=>$picture,
            'perm_address'=>$p_address,
            'temp_address'=>$t_address,
            'dob'=>$dob,
            'gender'=>$gender,
            'is_active'=>true,
            'is_alumi'=>false 
        ]);
        return redirect()-> route('students.index');
        }
        catch(\Exception $e){
            dd($e->getMessage());
            return redirect()->back();
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // select * from student where id = $id
        $student =Student::find($id);
        //dd($student);
        return view ('student.show',compact('student'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $student =Student::find($id);

        return view ('student.edit',compact('student'));
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
        //
        $student =Student::find($id);

        $name=$request->get('name');
        $email=$request->get('email'); 
        $phone=$request->get('phone');
        $picture=$request->get('picture');
        $dob=$request->get('dob');
        $gender=$request->get('gender');
        $citizenship=$request->get('citizenship');
        $blood_group=$request->get('blood_group');
        $p_address=$request->get('p_address');
        $t_address=$request->get('t_address');

        $student['name'] = $name;
        $student['email'] = $email;
        $student['mobile'] = $phone;
        $student['picture'] = $picture;
        $student['dob'] = $dob;
        $student['gender'] = $gender;
        $student['citizenship'] = $citizenship;
        $student['blood_group'] = $blood_group;
        $student['temp_address'] = $t_address;
        $student['perm_address'] = $p_address;
        $student->update();
        return redirect()->route('students.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect()->route('students.index');
    }
}
