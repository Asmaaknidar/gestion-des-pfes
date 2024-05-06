@include('dashboard.header'),
@include('group.navbargroup'),
@include('dashboard.topbar'),


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tâche</title>
    <!-- Intégration de Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Tâche</h1>
        <!-- Affichage des informations sur la tâche -->
        <h2>{{ $task->title }}</h2>
        <p>Description : {{ $task->description }}</p>

        <!-- Formulaire pour saisir le statut de la tâche -->
        <form action="{{ route('update.task.status', $task->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="status">Statut de la Tâche :</label>
                <input type="text" class="form-control" id="status" name="status" required>
            </div>
            <!-- Bouton pour soumettre le formulaire de mise à jour du statut -->
            <button type="submit" class="btn btn-primary">Mettre à Jour le Statut</button>
        </form>

        <!-- Formulaire pour soumettre le travail demandé -->
        <form action="{{ route('submit.task.work', $task->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="work">Parcourir le Travail Demandé :</label>
                <input type="file" class="form-control-file" id="work" name="work" required>
            </div>
            <!-- Bouton pour soumettre le formulaire de téléchargement du travail -->
            <button type="submit" class="btn btn-primary">Soumettre le Travail</button>
        </form>
    </div>
</body>
</html>
@include('dashboard.script')
@include('dashboard.footer')
