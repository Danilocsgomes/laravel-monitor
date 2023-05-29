<h1> Editar Site</h1>

<x-alerts></x-alerts>

<form action="{{ route('sites.update', $site->id) }}" method="post">
    @method('PUT')
    @include('admin/sites/partials/form')
</form>


<form action="{{ route('sites.destroy', $site->id) }}" method="post">
    @csrf()
    @method('DELETE')
    <button type="submit">Deletar Site</button>
</form>