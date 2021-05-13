<?php

namespace App\Http\Controllers;
use App\Models\Clubclassrecord;
use App\Models\Classrecord_pic;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClubofclassrecordController extends Controller
{
    private $table1='club_classrecord';
    private $table2='club_semester';
    private $table3='club_info';
    private $table4='classrecord_pic';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //公開的
        // $club=club_info::all();
        $club = DB::table($this->table1)
        ->leftJoin($this->table2, $this->table1.'.club_semester', '=',  $this->table2.'.club_semester')
        ->leftJoin($this->table3, $this->table2.'.club_id', '=',  $this->table3.'.club_id')
        ->leftJoin($this->table4, $this->table1.'.flow_of_classrecord', '=',  $this->table4.'.flow_of_classrecord')
        ->where('PLC','1')
        ->groupBy($this->table1.'.flow_of_classrecord')
        ->get();
        return $club;
        // 傳過去時要使用的變數名稱 變數
    }

    public function create()
    {
        //公開的
        // $club=club_info::all();

        return view('club.m-class_add');
        // 傳過去時要使用的變數名稱 變數
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    //    dd($request->all());
       $this->validate($request, [
        'class_name' => 'required',
        'class_teacher' => 'required',
        'class_place' => 'required',
        'class_contect' => 'required',
        'pic'=>'image|nullable'
    ]);
    $record = new Clubclassrecord;
    $record->flow_of_classrecord =$request->input('flow_of_classrecord');
    $record->class_name=$request->input('class_name');
    $record->class_teacher=$request->input('class_teacher');
    $record->class_place=$request->input('class_place');
    $record->class_contect=$request->input('class_contect');
    $record->date=$request->input('date');
    $record->PLC =$request->input('PLC');
    $record->club_semester=$request->input('club_semester');
    $record->save();
    if($request->hasFile('pic')){
        // Get filename with the extension
        $filenameWithExt = $request->file('pic')->getClientOriginalName();
        // Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $request->file('pic')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore= $filename.'_'.time().'.'.$extension;
        // Upload Image
        $path = $request->file('pic')->storeAs('public/newpic/', $fileNameToStore);
    
    } else {
        $fileNameToStore = '';
    }
    $classrecord_pic = new Classrecord_pic;
    $classrecord_pic->flow_of_pic =$request->input('flow_of_pic');
    $classrecord_pic->flow_of_classrecord =$request->input('flow_of_classrecord');
    $classrecord_pic->pic =$fileNameToStore;
    $classrecord_pic->save();
    return redirect("clubOfclassrecord/$request->club_name")->with('success', '成功！');


    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showALL($id)
    {
        //
        $class = DB::table($this->table1)
        ->leftJoin($this->table2, $this->table1.'.club_semester', '=',  $this->table2.'.club_semester')
        ->leftJoin($this->table3, $this->table2.'.club_id', '=',  $this->table3.'.club_id')
        ->leftJoin($this->table4, $this->table1.'.flow_of_classrecord', '=',  $this->table4.'.flow_of_classrecord')
        ->where('club_name',$id)
        ->get();
        return view('club.m-class')->with("classrecord",$class);
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$date)
    {
        //
        $club = DB::table($this->table1)
        ->leftJoin($this->table2, $this->table1.'.club_semester', '=',  $this->table2.'.club_semester')
        ->leftJoin($this->table3, $this->table2.'.club_id', '=',  $this->table3.'.club_id')
        ->where('club_name', $id)
        ->Where('date', $date)
        ->get();
        return $club;
    }

    public function edit($id)
    {
        //
        $class = Clubclassrecord::find($id);
        // return view('club.m-class_edit')->with('class', $class);
         return $class;
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
        dd($request->all());
        $club=DB::table($this->table1)
        ->where('flow_of_classrecord',$id)
        ->update($request->all());

        return $club;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $club=DB::table($this->table1)->where('flow_of_classrecord',$id)->delete();
        return $club;
    }
}
