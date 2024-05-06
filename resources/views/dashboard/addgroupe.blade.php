@include('dashboard.header')
@include('dashboard.navbar')
@include('dashboard.topbar')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">Ajouter un nouveau groupe</div>
                <div class="card-body">
                    <form action="{{ route('groupes.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nom_du_groupe" class="text-dark">Nom du groupe:</label>
                            <input type="text" class="form-control" id="nom_du_groupe" name="nom_du_groupe" required>
                        </div>
                        <div class="form-group">
                            <label for="filière" class="text-dark">Filière:</label>
                            <input type="text" class="form-control" id="filière" name="filière" required>
                        </div>
                        <div class="form-group">
                            <label for="niveau" class="text-dark">Niveau:</label>
                            <input type="text" class="form-control" id="niveau" name="niveau" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre_des_membres" class="text-dark">Nombre des membres:</label>
                            <input type="text" class="form-control" id="nombre_des_membres" name="nombre_des_membres" required>
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
