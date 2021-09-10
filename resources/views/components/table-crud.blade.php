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
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->title }}</td>
                <td>{{ $item->price }} €</td>
                <td><img style="width: 80px" src="{{ $item->thumb }}" alt="{{ $item->title }}"></td>
                <td>
                    <a href=" {{ route('comics.show', $item->id) }} " class="btn btn-primary">Show</a>
                    <a href="#" class="btn btn-secondary">Edit</a>
                    <a href="#" class="btn btn-danger">Destroy</a>

                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>