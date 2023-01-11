<?php
class Profs extends Controller
{

    public function __Construct()
    {
        parent::__Construct('prof');
    }
    public function index()
    {
        parent::view("index",prof::All());
    }
    public function show($id)
    {
        parent::view("show",prof::find($id));
    }
    public function destroy($id)
    {
        $P=prof::find($id);
        // $P->delete();
        $this->Redirect("../../Profs");
    }
    public function store($request)
    {
        $P=new prof();
        $P->nom=$request->nom;
        $P->prenom=$request->prenom;
        $P->specialite=$request->specialite;
        $P->save();
        $this->Redirect("../Profs");
    }
    public function edit($id)
    {
        parent::view("form",prof::find($id));
    }
    public function update($id,$request)
    {
        $P=prof::find($id);
        $P->nom=$request->nom;
        $P->prenom=$request->prenom;
        $P->specialite=$request->specialite;
        $P->save();
        $this->Redirect("../../Profs");
    }
    public function create()
    {
        parent::view("form");
    }   

}
?>
