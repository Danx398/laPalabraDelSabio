@include('../shared.navb')
@extends('./layouts.plantilla')
@section('contenido')
    <div class="container">
        <div class="row mb-3">
            <div class="col-4 d-flex d-flex justify-content-evenly mb-5">
                <div class="card mt-2" style="width: 18rem;">
                    <img src="{{ asset('img/diario.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">El diario de Anne Frank</h5>
                        <p class="card-text">En los relatos, se cuenta la historia y vida de Ana Frank como adolescente y los dos años en que permaneció oculta junto a su familia de origen judío de los nazis en Ámsterdam, en plena Segunda Guerra Mundial, hasta que fueron descubiertos.</p>
                        <a href="{{route('anaFrank')}}" class="btn btn-outline-success d-flex justify-content-center mb-2">Descubrelo</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mt-2" style="width: 18rem;">
                    <img src="{{asset('img/pddTeamo.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Posdata Te amo</h5>
                        <p class="card-text mb-5">Una historia de amor apasionante y desgarrante. Un día él fallece y Holly, devastada, realiza durante tres meses una lista que Gerry prepara antes de morir.</p>
                        <a href="{{route('teamo')}}" class="btn btn-outline-success d-flex justify-content-center mb-2 mt-5">Descubrelo</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mt-2" style="width: 18rem;">
                    <img src="{{ asset('img/cienSoledad.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Cien Años de Soledad</h5>
                        <p class="card-text mb-5">Es una novela del escritor colombiano Gabriel García Márquez, ganador del Premio Nobel de Literatura en 1982. Es considerada una obra maestra de la literatura hispanoamericana</p>
                        <a href="{{route('cienAnios')}}" class="btn btn-outline-success d-flex justify-content-center mb-2">Descubrelo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection