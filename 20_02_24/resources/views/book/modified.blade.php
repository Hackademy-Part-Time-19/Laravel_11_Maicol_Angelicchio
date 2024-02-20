<x-main>
    <h1>Modifica libro</h1>
    @if(session()->has('modified'))
        <h2 class="alert alert-success">{{session('modified')}}</h2>
    @endif
    <form action="{{ route('book.update', compact('book'))}}" method="POST" class="mt-5 mx-auto col-lg-6" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titolo" class="form-label">Titolo:</label>
            <input type="text" class="form-control" id="titolo" placeholder="Inserisci il titolo" name="titolo" value="{{old('titolo')}}">
            @error('titolo') <div><span class="text-danger">{{$message}}</span></div>@enderror
        </div>
        <div class="mb-3">
            <label for="anno" class="form-label">Anno:</label>
            <input type="text" class="form-control" id="anno" placeholder="Inserisci anno" name="anno" value="{{old('anno')}}">
            @error('anno') <div><span class="text-danger">{{$message}}</span></div>@enderror
        </div>
        <div class="mb-3">
            <label for="genere" class="form-label">Descrizione:</label>
            <input type="text" class="form-control" id="genere" placeholder="Inserisci il genere" name="genere" value="{{old('genere')}}">
            @error('genere') <div><span class="text-danger">{{$message}}</span></div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
</x-main>