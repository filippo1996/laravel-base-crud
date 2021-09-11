@extends('templates.layout')
@section('title', 'I tuoi comics')
@section('content')

    {{ Breadcrumbs::render('comics.index') }}

    @if(Session::has('alert-message'))
        <x-alert :status="Session::get('alert-message')['status']" :message="Session::get('alert-message')['message']"/>
    @endif

    <h3>Totale comics: <span id="count-comics">{{ $count }}</span></h3>
    <x-table-crud :items="$comics"/>

    <div class="fixed-btn">
        <a class="btn btn-primary" aria-current="page" href="{{ route('comics.create') }}">create</a>
    </div>
@endsection

@section('script-footer')
    @parent

<script>
    document.querySelectorAll('form .btn-danger').forEach(ele => {
        ele.addEventListener('click', async function(event){
            event.preventDefault();
            let url = this.form.action;
            let csrf = this.form.querySelector("input[name='_token']").value;
            try {
                let response = await fetch(url, {
                    method: 'DELETE',
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrf
                    }
                });
                response = await response.json();
                //console.log(response);

                if(response.status){
                    alert('Comics eliminato');
                    // scrittura del render nell'html
                    // importante: open, write, close vanno utilizzati
                    document.open();
                    document.write(response.render);
                    document.close();
                    return;

                } else{
                    console.log(status);
                    alert('errore: Comics non eliminato');
                    return;
                }

            } catch (error){
                console.log(error);
            }
        });
    });

</script>

@endsection