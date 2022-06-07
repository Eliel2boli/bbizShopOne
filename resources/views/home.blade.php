
@extends("layouts.master")

@section('contenu')
<div class="row">
    <div class="col-12 p-4">
        <div class="jumbotron ">
                <h1 class="display-3">Bienvenu, <strong>{{userFullName()}}</strong></h1>
                <p class="lead"> Ensemble faisons le bonheur des parents...surtout des enfants!</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
        </div>
    </div>
</div>
@endsection
