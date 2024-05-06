<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function showprofilprofessor(){
        return view('professor.profilprofessor');
    }
    public function indextask()
    {
       // $tasks = Task::all();
        return view('professor.task');
    }

    public function addTask(Request $request)
    {
        // Validation des données du formulaire
       /* $request->validate([
            'project_name' => 'required|string',
            'task_title' => 'required|string',
            'task_description' => 'required|string',
        ]);

        // Création d'une nouvelle tâche
        $task = new Task();
        $task->project_name = $request->input('project_name');
        $task->title = $request->input('task_title');
        $task->description = $request->input('task_description');
        $task->status = 'En cours'; // Par défaut
        $task->save();

        return redirect()->back();
        */
    }

    public function downloadTaskDocument($taskId)
    {
        // Logique pour télécharger le document associé à la tâche
        // (non implémenté dans cet exemple)
    }
    public function showProjectForm()
    {
        return view('professor.project');
    }

    public function addProject(Request $request)
    {
        // Validation des données du formulaire (à ajouter si nécessaire)

        // Création d'un nouveau projet avec les données du formulaire
        /*
        $project = new Project();
        $project->title = $request->input('title');
        $project->description = $request->input('description');

        // Enregistrement du projet dans la base de données
        $project->save();

        // Redirection avec un message de succès
        return redirect()->route('professor.project.form')->with('success', 'Projet ajouté avec succès!');
        */
    }
    public function listgroup()
    {
        //$groups = Group::all(); // Récupérer tous les groupes depuis la base de données
        return view('professor.groups');
    }
}
