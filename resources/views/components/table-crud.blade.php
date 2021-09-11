<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Copertina</th>
            <th scope="col">Azione</th>
          </tr>
        </thead>
        <tbody>

        @foreach($items as $item)
            <tr id="comics-{{ $item->id }}">
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->title }}</td>
                <td>{{ $item->price }} €</td>
                <td><img style="width: 80px" src="{{ $item->thumb }}" alt="{{ $item->title }}"></td>
                <td>
                    <a href="{{ route('comics.show', $item->id) }}" class="btn btn-primary">Show</a>
                    <a href="{{ route('comics.edit', $item->id) }}" class="btn btn-secondary">Edit</a>

                    <form action="{{ route('comics.destroy', $item->id) }}" method="post" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Destroy</button>
                    </form>

                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>