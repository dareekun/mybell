@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Alarm type 01 -->
    <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
            <h4>Add Schedule Type {{$type}}</h4>
            <p>Alarm Number {{$number}}</p>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <!-- Alarm 1 -->
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 01</h5>
                    <!-- Control Audio -->
                    <div class="row">
                        <div class="col-md-5">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="modalchange(01)"><i class="fas fa-pencil-alt"></i> Change</a></h6>
                        </div>
                        <div class="col-md-7">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="playaudi01()"><i class="fas fa-play"></i> Play</a><a class="card-link"
                                    href="#" onclick="stopaudi01()"><i class="fas fa-stop"></i> Stop</a></h6>
                        </div>
                    </div>
                    <!-- Audio File -->
                    <audio hidden controls id="audio01">
                        <source src="{{ asset('sound/01.ogg') }}" type="audio/ogg">
                    </audio>
                    <!-- Audio Duration -->
                    <div class="row">
                        <div class="col-md-6">
                            <p class="card-test">Audio Duration:</p>
                        </div>
                        <div class="col-md-6">
                            <p id="length01"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Alarm 2 -->
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 02</h5>
                    <!-- Control Audio -->
                    <div class="row">
                        <div class="col-md-5">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="modalchange(02)"><i class="fas fa-pencil-alt"></i> Change</a></h6>
                        </div>
                        <div class="col-md-7">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="playaudi02()"><i class="fas fa-play"></i> Play</a><a class="card-link"
                                    href="#" onclick="stopaudi02()"><i class="fas fa-stop"></i> Stop</a></h6>
                        </div>
                    </div>
                    <!-- Audio File -->
                    <audio hidden controls id="audio02">
                        <source src="{{ asset('sound/02.ogg') }}" type="audio/ogg">
                    </audio>
                    <!-- Audio Duration -->
                    <div class="row">
                        <div class="col-md-6">
                            <p class="card-test">Audio Duration:</p>
                        </div>
                        <div class="col-md-6">
                            <p id="length02"></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Alarm 3 -->
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 03</h5>
                    <!-- Control Audio -->
                    <div class="row">
                        <div class="col-md-5">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="modalchange(03)"><i class="fas fa-pencil-alt"></i> Change</a></h6>
                        </div>
                        <div class="col-md-7">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="playaudi03()"><i class="fas fa-play"></i> Play</a><a class="card-link"
                                    href="#" onclick="stopaudi03()"><i class="fas fa-stop"></i> Stop</a></h6>
                        </div>
                    </div>
                    <!-- Audio File -->
                    <audio hidden controls id="audio03">
                        <source src="{{ asset('sound/03.ogg') }}" type="audio/ogg">
                    </audio>
                    <!-- Audio Duration -->
                    <div class="row">
                        <div class="col-md-6">
                            <p class="card-test">Audio Duration:</p>
                        </div>
                        <div class="col-md-6">
                            <p id="length03"></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Alarm 4 -->
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 04</h5>
                    <!-- Control Audio -->
                    <div class="row">
                        <div class="col-md-5">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="modalchange(04)"><i class="fas fa-pencil-alt"></i> Change</a></h6>
                        </div>
                        <div class="col-md-7">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="playaudi04()"><i class="fas fa-play"></i> Play</a><a class="card-link"
                                    href="#" onclick="stopaudi04()"><i class="fas fa-stop"></i> Stop</a></h6>
                        </div>
                    </div>
                    <!-- Audio File -->
                    <audio hidden controls id="audio04">
                        <source src="{{ asset('sound/04.ogg') }}" type="audio/ogg">
                    </audio>
                    <!-- Audio Duration -->
                    <div class="row">
                        <div class="col-md-6">
                            <p class="card-test">Audio Duration:</p>
                        </div>
                        <div class="col-md-6">
                            <p id="length04"></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Alarm 5 -->
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 05</h5>
                    <!-- Control Audio -->
                    <div class="row">
                        <div class="col-md-5">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="modalchange(05)"><i class="fas fa-pencil-alt"></i> Change</a></h6>
                        </div>
                        <div class="col-md-7">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="playaudi05()"><i class="fas fa-play"></i> Play</a><a class="card-link"
                                    href="#" onclick="stopaudi05()"><i class="fas fa-stop"></i> Stop</a></h6>
                        </div>
                    </div>
                    <!-- Audio File -->
                    <audio hidden controls id="audio05">
                        <source src="{{ asset('sound/05.ogg') }}" type="audio/ogg">
                    </audio>
                    <!-- Audio Duration -->
                    <div class="row">
                        <div class="col-md-6">
                            <p class="card-test">Audio Duration:</p>
                        </div>
                        <div class="col-md-6">
                            <p id="length05"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Alarm type 02 -->
    <div class="row justify-content-center align-items-center my-3">
        <div class="col-md-10">
            <h4>Alarm Type 2</h4>
            <p>Regular Alarm that still will run from monday to saturday, but on <b class="text-danger">friday</b> they
                have seperated schedule</p>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <!-- Alarm 1 -->
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 01</h5>
                    <!-- Control Audio -->
                    <div class="row">
                        <div class="col-md-5">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="modalchange(06)"><i class="fas fa-pencil-alt"></i> Change</a></h6>
                        </div>
                        <div class="col-md-7">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="playaudi06()"><i class="fas fa-play"></i> Play</a><a class="card-link"
                                    href="#" onclick="stopaudi06()"><i class="fas fa-stop"></i> Stop</a></h6>
                        </div>
                    </div>
                    <!-- Audio File -->
                    <audio hidden controls id="audio06">
                        <source src="{{ asset('sound/06.ogg') }}" type="audio/ogg">
                    </audio>
                    <!-- Audio Duration -->
                    <div class="row">
                        <div class="col-md-6">
                            <p class="card-test">Audio Duration:</p>
                        </div>
                        <div class="col-md-6">
                            <p id="length06"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Alarm 2 -->
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 02</h5>
                    <!-- Control Audio -->
                    <div class="row">
                        <div class="col-md-5">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="modalchange(07)"><i class="fas fa-pencil-alt"></i> Change</a></h6>
                        </div>
                        <div class="col-md-7">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="playaudi07()"><i class="fas fa-play"></i> Play</a><a class="card-link"
                                    href="#" onclick="stopaudi07()"><i class="fas fa-stop"></i> Stop</a></h6>
                        </div>
                    </div>
                    <!-- Audio File -->
                    <audio hidden controls id="audio07">
                        <source src="{{ asset('sound/07.ogg') }}" type="audio/ogg">
                    </audio>
                    <!-- Audio Duration -->
                    <div class="row">
                        <div class="col-md-6">
                            <p class="card-test">Audio Duration:</p>
                        </div>
                        <div class="col-md-6">
                            <p id="length07"></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Alarm 3 -->
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 03</h5>
                    <!-- Control Audio -->
                    <div class="row">
                        <div class="col-md-5">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="modalchange(08)"><i class="fas fa-pencil-alt"></i> Change</a></h6>
                        </div>
                        <div class="col-md-7">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="playaudi08()"><i class="fas fa-play"></i> Play</a><a class="card-link"
                                    href="#" onclick="stopaudi08()"><i class="fas fa-stop"></i> Stop</a></h6>
                        </div>
                    </div>
                    <!-- Audio File -->
                    <audio hidden controls id="audio08">
                        <source src="{{ asset('sound/08.ogg') }}" type="audio/ogg">
                    </audio>
                    <!-- Audio Duration -->
                    <div class="row">
                        <div class="col-md-6">
                            <p class="card-test">Audio Duration:</p>
                        </div>
                        <div class="col-md-6">
                            <p id="length08"></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Alarm 4 -->
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 04</h5>
                    <!-- Control Audio -->
                    <div class="row">
                        <div class="col-md-5">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="modalchange(09)"><i class="fas fa-pencil-alt"></i> Change</a></h6>
                        </div>
                        <div class="col-md-7">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="playaudi09()"><i class="fas fa-play"></i> Play</a><a class="card-link"
                                    href="#" onclick="stopaudi09()"><i class="fas fa-stop"></i> Stop</a></h6>
                        </div>
                    </div>
                    <!-- Audio File -->
                    <audio hidden controls id="audio09">
                        <source src="{{ asset('sound/09.ogg') }}" type="audio/ogg">
                    </audio>
                    <!-- Audio Duration -->
                    <div class="row">
                        <div class="col-md-6">
                            <p class="card-test">Audio Duration:</p>
                        </div>
                        <div class="col-md-6">
                            <p id="length09"></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Alarm 5 -->
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 05</h5>
                    <!-- Control Audio -->
                    <div class="row">
                        <div class="col-md-5">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="modalchange(10)"><i class="fas fa-pencil-alt"></i> Change</a></h6>
                        </div>
                        <div class="col-md-7">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="playaudi10()"><i class="fas fa-play"></i> Play</a><a class="card-link"
                                    href="#" onclick="stopaudi10()"><i class="fas fa-stop"></i> Stop</a></h6>
                        </div>
                    </div>
                    <!-- Audio File -->
                    <audio hidden controls id="audio10">
                        <source src="{{ asset('sound/10.ogg') }}" type="audio/ogg">
                    </audio>
                    <!-- Audio Duration -->
                    <div class="row">
                        <div class="col-md-6">
                            <p class="card-test">Audio Duration:</p>
                        </div>
                        <div class="col-md-6">
                            <p id="length10"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Alarm type 03 -->
    <div class="row justify-content-center align-items-center my-3">
        <div class="col-md-10">
            <h4>Alarm Type 3</h4>
            <p>Regular Alarm That Run Normaly from monday to saturday. But they have exception date, it will not play on
                specific date</p>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <!-- Alarm 1 -->
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 01</h5>
                    <!-- Control Audio -->
                    <div class="row">
                        <div class="col-md-5">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="modalchange(11)"><i class="fas fa-pencil-alt"></i> Change</a></h6>
                        </div>
                        <div class="col-md-7">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="playaudi11()"><i class="fas fa-play"></i> Play</a><a class="card-link"
                                    href="#" onclick="stopaudi11()"><i class="fas fa-stop"></i> Stop</a></h6>
                        </div>
                    </div>
                    <!-- Audio File -->
                    <audio hidden controls id="audio11">
                        <source src="{{ asset('sound/11.ogg') }}" type="audio/ogg">
                    </audio>
                    <!-- Audio Duration -->
                    <div class="row">
                        <div class="col-md-6">
                            <p class="card-test">Audio Duration:</p>
                        </div>
                        <div class="col-md-6">
                            <p id="length11"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Alarm 2 -->
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 02</h5>
                    <!-- Control Audio -->
                    <div class="row">
                        <div class="col-md-5">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="modalchange(12)"><i class="fas fa-pencil-alt"></i> Change</a></h6>
                        </div>
                        <div class="col-md-7">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="playaudi12()"><i class="fas fa-play"></i> Play</a><a class="card-link"
                                    href="#" onclick="stopaudi12()"><i class="fas fa-stop"></i> Stop</a></h6>
                        </div>
                    </div>
                    <!-- Audio File -->
                    <audio hidden controls id="audio12">
                        <source src="{{ asset('sound/12.ogg') }}" type="audio/ogg">
                    </audio>
                    <!-- Audio Duration -->
                    <div class="row">
                        <div class="col-md-6">
                            <p class="card-test">Audio Duration:</p>
                        </div>
                        <div class="col-md-6">
                            <p id="length12"></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Alarm 3 -->
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 03</h5>
                    <!-- Control Audio -->
                    <div class="row">
                        <div class="col-md-5">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="modalchange(13)"><i class="fas fa-pencil-alt"></i> Change</a></h6>
                        </div>
                        <div class="col-md-7">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="playaudi13()"><i class="fas fa-play"></i> Play</a><a class="card-link"
                                    href="#" onclick="stopaudi13()"><i class="fas fa-stop"></i> Stop</a></h6>
                        </div>
                    </div>
                    <!-- Audio File -->
                    <audio hidden controls id="audio13">
                        <source src="{{ asset('sound/13.ogg') }}" type="audio/ogg">
                    </audio>
                    <!-- Audio Duration -->
                    <div class="row">
                        <div class="col-md-6">
                            <p class="card-test">Audio Duration:</p>
                        </div>
                        <div class="col-md-6">
                            <p id="length13"></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Alarm 4 -->
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 04</h5>
                    <!-- Control Audio -->
                    <div class="row">
                        <div class="col-md-5">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="modalchange(14)"><i class="fas fa-pencil-alt"></i> Change</a></h6>
                        </div>
                        <div class="col-md-7">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="playaudi14()"><i class="fas fa-play"></i> Play</a><a class="card-link"
                                    href="#" onclick="stopaudi14()"><i class="fas fa-stop"></i> Stop</a></h6>
                        </div>
                    </div>
                    <!-- Audio File -->
                    <audio hidden controls id="audio14">
                        <source src="{{ asset('sound/14.ogg') }}" type="audio/ogg">
                    </audio>
                    <!-- Audio Duration -->
                    <div class="row">
                        <div class="col-md-6">
                            <p class="card-test">Audio Duration:</p>
                        </div>
                        <div class="col-md-6">
                            <p id="length14"></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Alarm 5 -->
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 05</h5>
                    <!-- Control Audio -->
                    <div class="row">
                        <div class="col-md-5">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="modalchange(15)"><i class="fas fa-pencil-alt"></i> Change</a></h6>
                        </div>
                        <div class="col-md-7">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#"
                                    onclick="playaudi15()"><i class="fas fa-play"></i> Play</a><a class="card-link"
                                    href="#" onclick="stopaudi15()"><i class="fas fa-stop"></i> Stop</a></h6>
                        </div>
                    </div>
                    <!-- Audio File -->
                    <audio hidden controls id="audio15">
                        <source src="{{ asset('sound/15.ogg') }}" type="audio/ogg">
                    </audio>
                    <!-- Audio Duration -->
                    <div class="row">
                        <div class="col-md-6">
                            <p class="card-test">Audio Duration:</p>
                        </div>
                        <div class="col-md-6">
                            <p id="length15"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- alert -->
    @if (session('status'))
    <div class="row row justify-content-center align-items-center my-3">
        <div class="col-md-10">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @endif

</div>


<!-- Modal for change sound -->
<!-- Modal -->
<form action="{{ route('changesound') }}" enctype="multipart/form-data" method="post">
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Change Sound</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Sound Format used in this system is ogg type</p>
                    @csrf
                    <div class="row">
                        <div class="col-md-2">File Id</div>
                        <div class="col-md-6"><input type="text" class="form-control" name="idsound" id="idsound" required></div>
                    </div>
                    <div class="row my-1">
                        <div class="col-md-2">File</div>
                        <div class="col-md-6"><input class="form-control" type="file" name="file" accept="audio/ogg" required id="file">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline-primary">Save</button>
            </div>
        </div>
    </div>
</div>
</form>

@stop

@push('scripts')
<script src="{{ asset('js/change.sound.js') }}" defer></script>
@endpush