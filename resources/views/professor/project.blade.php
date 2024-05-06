@include('dashboard.header')
@include('professor.navbarprofessor')
@include('dashboard.topbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Projet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #000000;
        }

        .card {
            margin-bottom: 20px;
        }

        .form-label {
            color: #000000;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .full-width-form {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <h5 class="card-title fw-semibold mb-4">Ajouter un Nouveau Projet</h5>
                        <form method="post" action="{{ route('project.add') }}" class="full-width-form">
                            @csrf
                            <div class="mb-3">
                                <label for="projectTitle" class="form-label">Titre du Projet</label>
                                <input name="title" type="text" class="form-control" id="projectTitle">
                            </div>
                            <div class="mb-3">
                                <label for="projectDescription" class="form-label">Description</label>
                                <textarea name="description" class="form-control" id="projectDescription" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Liste des Projets Proposés</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0"><h6 class="fw-semibold mb-0">ID du Projet</h6></th>
                                        <th class="border-bottom-0"><h6 class="fw-semibold mb-0">Titre</h6></th>
                                        <th class="border-bottom-0"><h6 class="fw-semibold mb-0">Description</h6></th>
                                        <th class="border-bottom-0"><h6 class="fw-semibold mb-0">Filière</h6></th>
                                        <th class="border-bottom-0"><h6 class="fw-semibold mb-0">Niveau</h6></th>
                                    </tr>
                                </thead>

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
