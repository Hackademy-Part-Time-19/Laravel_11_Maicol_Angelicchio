<x-main>
    <h1>LIBRI</h1>
    <div>
        @foreach($books as $book)
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4>{{$book['titolo']}}</h4>
                        <h4>{{$book['anno']}}</h4>
                        <h4>{{$book['genere']}}</h4>
                    </div>
                    @auth
                    <div class="col">
                        <div>
                            <button type="button" class="btn btn-warning">
                                <a href="{{ route('book.edit', ['book'=>$book->id])}}">Modified</a>
                            </button>
                            <form action=" {{ route('book.destroy', ['book'=>$book->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-main>
