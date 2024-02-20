<x-main>
  @if(session()->has('success'))
        <h2 class="alert alert-success">{{session('success')}}</h2>
  @endif
  <form action="{{ route('book.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label class="form-label">Titolo</label>
      <input type="text" class="form-control" id="titolo" name="titolo">
    </div>
    <div class="mb-3">
      <label class="form-label">Anno</label>
      <input type="text" class="form-control" id="anno" name="anno">
    </div>
    <div class="mb-3">
      <label class="form-label">Genere</label>
      <input type="text" class="form-control" id="genere" name="genere">
    </div>
    <button type="submit" class="btn btn-primary">Inserisci</button>
  </form>
</x-main>