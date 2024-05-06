@include('dashboard.header')
@include('dashboard.navbar')
@include('dashboard.topbar')
<div class="title" style="font-size: 1.5rem; font-weight: bold; margin-bottom: 20px; text-align: center; color: black;">Liste des groupes</div>
<!-- Affichage des messages de succès et d'erreur -->
@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
@if(session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>ID du groupe</th>
            <th>ID de l'encadrant</th>
            <th>nom du groupe</th>
            <th>Filière</th>
            <th>Niveau</th>
            <th>les membres</th>
            <th>Opération</th>
        </tr>
    </thead>
    <tbody>
        @foreach($groupes as $groupe)
        <tr>
            <td>{{ $groupe->id }}</td>
            <td>{{ $groupe->encadrant_id }}</td>
            <td>{{ $groupe->name }}</td>
            <td>{{ $groupe->sector }}</td>
            <td>{{ $groupe->level }}</td>
            <td>{{ $groupe->nb_etudiant }}</td>
            <td>
                <!-- Formulaire de suppression -->
                <form action="{{ route('groupes.destroy', $groupe->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('groupes.create') }}" class="btn btn-success" style="background-color: green;">Ajouter</a>
@include('dashboard.script')
@include('dashboard.footer')
