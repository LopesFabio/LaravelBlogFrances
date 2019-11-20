@if(auth()->check())
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{route('commentaire.store')}}" method="post" class="form">
        <input type="hidden" name="publier_id" value="{{ $publier->id }}">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" name="titre" placeholder="titre" class="form-control">
        </div>
        <div class="form-group">
            <textarea name="commentaire" cols="30" rows="5" placeholder="commentaire" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </div>
    </form>
@else
    <p><a href="{{route('login')}}">Se connecter pour commenter</a></p>
@endif

