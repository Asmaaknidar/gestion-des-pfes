<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\professor;
use App\Models\student;
use App\Models\group;

class AdminController extends Controller
{
    public function showprofil(){
        $admin = Admin::find($id);
        return view('dashboard.profil');
    }
    public function showprofessors(){
        $professeurs = Professor::all();
        return view('dashboard.professors',['professeurs' => $professeurs]);
    }
    public function showstudents()
    {
        $etudiants = Student::all();
        return view('dashboard.students', compact('etudiants'));
    }

    public function destroyStudent($id)
    {
        // Recherchez l'étudiant à supprimer dans la base de données
        $etudiant = Student::findOrFail($id);

        // Supprimez l'étudiant
        $etudiant->delete();

        // Redirigez avec un message de succès
        return redirect()->route('students')->with('success', 'Étudiant a été supprimé avec succès.');
    }
    public function createstudents()
    {
        return view('dashboard.addstudent');
    }
    public function storestudents(Request $request)
{
    // Validation des données
    $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email',
        'filiere' => 'required|string|max:255',
        'niveau' => 'required|string|max:10',
        'password' => 'required|string|min:8',
    ]);

    // Création d'un nouvel étudiant
    $etudiant = new student();
    $etudiant->first_name = $request->input('nom');
    $etudiant->last_name = $request->input('prenom');
    $etudiant->email = $request->input('email');
    $etudiant->sector = $request->input('filiere');
    $etudiant->level = $request->input('niveau');
    $etudiant->password = bcrypt($request->input('password'));
    $etudiant->save();

    // Redirection vers une autre page après avoir ajouté l'étudiant
    return redirect()->route('students')->with('success', 'Étudiant ajouté avec succès.');
}

    public function showgroupes(){
        $groupes = group::all();
        return view('dashboard.groupes',compact('groupes'));
    }
    public function destroygroupe($id)
    {
        // Recherchez l'étudiant à supprimer dans la base de données
        $groupe = group::findOrFail($id);

        // Supprimez l'étudiant
        $groupe->delete();

        // Redirigez avec un message de succès
        return redirect()->route('groupes')->with('success', 'groupe a été supprimé avec succès.');
    }
    public function creategroupes()
    {
        return view('dashboard.addgroupe');
    }
    public function storegroupes(Request $request)
{
    // Validation des données
    $request->validate([
        'nom_du_groupe' => 'required|string|max:255',
        'filière' => 'required|string|max:255',
        'niveau' => 'required|string|max:255',
        'nombre_des_membres' => 'required|integer',
        'password' => 'required|string|min:8',
    ]);

    // Création d'un nouveau groupe
    $groupe = new group();
    $groupe->name = $request->input('nom_du_groupe');
    $groupe->sector = $request->input('filière');
    $groupe->level = $request->input('niveau');
    $groupe->nb_etudiant = (int) $request->input('nombre_des_membres');
    $groupe->password = bcrypt($request->input('password'));
    $groupe->save();

    // Redirection vers une autre page après avoir ajouté le groupe
    return redirect()->route('groupes')->with('success', 'Groupe ajouté avec succès.');
}


    public function createprofessors()
    {
        return view('dashboard.addprofessor');
    }


    public function destroyProfessor($id)
    {
        // Recherchez le professeur à supprimer dans la base de données
        $professor = Professor::findOrFail($id);

        // Supprimez tous les projets associés à ce professeur
        $professor->projects()->delete();

        // Supprimez le professeur
        $professor->delete();

        // Redirigez avec un message de succès
        return redirect()->route('professors')->with('success', 'Le professeur a été supprimé avec succès.');
    }

    public function storeprofessors(Request $request)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:professors,email',
            'specialite' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Création du professeur
        $professor = new Professor();
        $professor->first_name = $request->input('nom');
        $professor->last_name = $request->input('prenom');
        $professor->email = $request->input('email');
        $professor->sector = $request->input('specialite');
        $professor->password = bcrypt($request->input('password'));
        $professor->admin = true;
        $professor->save();

        // Redirection vers une autre page après avoir ajouté le professeur
        return redirect()->route('professors')->with('success', 'Le professeur a été ajouté avec succès.');
    }



}
