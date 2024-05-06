@include('dashboard.header')
@include('dashboard.navbar')
@include('dashboard.topbar')
<div class="title" style="font-size: 1.5rem; font-weight: bold; margin-bottom: 20px; text-align: center; color: black;">Liste des étudiants</div>
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
            <th>ID de l'étudiant</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Filière</th>
            <th>Niveau</th>
            <th>Opérations</th>
        </tr>
    </thead>
    <tbody>
        @foreach($etudiants as $etudiant)
        <tr>
            <td>{{ $etudiant->id }}</td>
            <td>{{ $etudiant->first_name }}</td>
            <td>{{ $etudiant->last_name }}</td>
            <td>{{ $etudiant->email }}</td>
            <td>{{ $etudiant->sector }}</td>
            <td>{{ $etudiant->level }}</td>
            <td>
                <!-- Formulaire de suppression -->
                <form action="{{ route('students.destroy', $etudiant->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('students.create') }}" class="btn btn-success" style="background-color: green;">Ajouter</a>


@include('dashboard.script')
@include('dashboard.footer')
