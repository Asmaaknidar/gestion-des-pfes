@include('dashboard.header'),
@include('dashboard.navbar'),
@include('dashboard.topbar')

<div class="title" style="font-size: 1.5rem; font-weight: bold; margin-bottom: 20px; text-align: center; color: black;">Liste des professeurs encadrants</div>

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
            <th>ID du professeur</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Spécialité</th>
            <th>Opérations</th>
        </tr>
    </thead>
    <tbody>
        @foreach($professeurs as $professeur)
        <tr>
            <td>{{ $professeur->id }}</td>
            <td>{{ $professeur->first_name }}</td>
            <td>{{ $professeur->last_name }}</td>
            <td>{{ $professeur->email }}</td>
            <td>{{ $professeur->sector }}</td>
            <td>
                <!-- Formulaire de suppression -->
                <form action="{{ route('professors.destroy', $professeur->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('professors.create') }}" class="btn btn-success" style="background-color: green;">Ajouter</a>





@include('dashboard.script'),
@include('dashboard.footer'),
