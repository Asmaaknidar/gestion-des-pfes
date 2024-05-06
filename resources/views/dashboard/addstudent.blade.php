@include('dashboard.header')
@include('dashboard.navbar')
@include('dashboard.topbar')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">Ajouter un nouveau étudiant</div>
                <div class="card-body">
                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nom" class="text-dark">Nom:</label>
                            <input type="text" class="form-control" id="nom" name="nom" required>
                        </div>
                        <div class="form-group">
                            <label for="prenom" class="text-dark">Prénom:</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-dark">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="filiere" class="text-dark">Filière:</label>
                            <input type="text" class="form-control" id="filiere" name="filiere" required>
                        </div>
                        <div class="form-group">
                            <label for="niveau" class="text-dark">Niveau:</label>
                            <input type="text" class="form-control" id="niveau" name="niveau" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-dark">Mot de passe:</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password" required>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@include('dashboard.script')
@include('dashboard.footer')
