<x-main>
    <h1>LIBRI</h1>
    <div>
        @foreach($books as $book)
        <div class="card">
            <div class="card-body">
              <h4>{{$book['titolo']}}</h4>
              <h4>{{$book['anno']}}</h4>
              <h4>{{$book['genere']}}</h4>
            </div>
        </div>
        @endforeach
    </div>
</x-main>