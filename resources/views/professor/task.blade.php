@include('dashboard.header')
@include('professor.navbarprofessor')
@include('dashboard.topbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Tâche</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #000000; /* Couleur du texte */
        }

        .card {
            margin-bottom: 20px;
        }

        .form-label {
            color: #000000; /* Couleur des libellés */
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* La forme prend toute la largeur de la page */
        .full-width-form {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <!--  Formulaire d'ajout de tâche -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <h5 class="card-title fw-semibold mb-4">Ajouter une Nouvelle Tâche</h5>
                        <form method="post" action="{{ route('add.task') }}" class="full-width-form">
                            @csrf

                            <div class="mb-3">
                                <label for="topictitle" class="form-label">Nom du projet</label>
                                <input name="title" type="text" class="form-control" id="topictitle" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="topictitle" class="form-label">Titre de la tache</label>
                                <input name="title" type="text" class="form-control" id="topictitle" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="topicdescription" class="form-label">Description</label>
                                <textarea name="description" class="form-control" id="topicdescription" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer la tâche</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--  Tableau des tâches affectées -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Tableau des tâches affectées</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">ID de la tâche</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Titre</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Description</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Nom du groupe</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Niveau</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Compte rendu</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <!-- Corps du tableau -->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


@include('dashboard.script')
@include('dashboard.footer')

