@extends('layouts.app')

@section('content')

@if (count($errors) > 0)
@foreach ($errors->all() as $error)
<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-10">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{$error}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif
<div class="container-fluid">
    <!-- Alarm type 01 -->
    <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
            <h4>Alarm Type 1</h4>
            <p>Regular Alarm that will run from monday to saturday, but on <b class="text-danger">Friday</b> they
                have seperated schedule.</p>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <!-- Alarm 1 -->
        <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 01</h5>
                    <!-- Audio File -->
                    <audio hidden controls id="audio01">
                        <source src="{{ asset('sound/01.ogg') }}" type="audio/ogg">
                    </audio>
                    <div class="row mb-1">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted" id="playbutton"><button type="button"
                                    class="btn btn-sm btn-outline-info border-0" onclick="playaudi(audi01)"><i
                                        id="audi01button" class="fas fa-play"></i> Play</button>
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h6 class="card-subtitle mb-2 text-muted"><button type="button"
                                    onclick="modalchange('Add', 'Non Friday', '01', '01')"
                                    class="btn btn-sm btn-outline-info border-0"><i class="fas fa-plus"></i>
                                    Schedule</button></h6>
                        </div>
                        <div class="col-6">
                            <h6 class="card-subtitle mb-2 text-muted"><button type="button"
                                    onclick="modalchange('Add', 'Friday', '01', '01')"
                                    class="btn btn-sm btn-outline-info border-0"><i class="fas fa-plus"></i>
                                    Schedule</button></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Mon-Thurs
                        </div>
                        <div class="col-md-6">
                            Friday
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            @foreach ($data01 as $dt01)
                            <div class="row">
                                <div class="col-md-12 align-self-center">
                                    <button type="button" class="btn  btn-sm btn-outline-success"
                                        onclick="modalchange('Edit', 'Non Friday', '{{$dt01}}', '01')">{{$dt01}}</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger"
                                        onclick="modalchange('Delete', 'Non Friday', '{{$dt01}}', '01')"><i
                                            class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-md-6">
                            @foreach ($fata01 as $ft01)
                            <div class="row">
                                <div class="col-md-12 align-self-center">
                                    <button type="button" class="btn  btn-sm btn-outline-success"
                                        onclick="modalchange('Edit', 'Friday', '{{$ft01}}', '01')">{{$ft01}}</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger"
                                        onclick="modalchange('Delete', 'Friday', '{{$ft01}}', '01')"><i
                                            class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Alarm 2 -->
        <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 02</h5>
                    <!-- Audio File -->
                    <audio hidden controls id="audio02">
                        <source src="{{ asset('sound/02.ogg') }}" type="audio/ogg">
                    </audio>
                    <div class="row mb-1">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted" id="playbutton"><button type="button"
                                    class="btn btn-sm btn-outline-info border-0" onclick="playaudi(audi02)"><i
                                        id="audi02button" class="fas fa-play"></i> Play</button>
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h6 class="card-subtitle mb-2 text-muted"><button type="button"
                                    onclick="modalchange('Add', 'Non Friday', '02', '02')"
                                    class="btn btn-sm btn-outline-info border-0"><i class="fas fa-plus"></i>
                                    Schedule</button></h6>
                        </div>
                        <div class="col-6">
                            <h6 class="card-subtitle mb-2 text-muted"><button type="button"
                                    onclick="modalchange('Add', 'Friday', '02', '02')"
                                    class="btn btn-sm btn-outline-info border-0"><i class="fas fa-plus"></i>
                                    Schedule</button></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Mon-Thurs
                        </div>
                        <div class="col-md-6">
                            Friday
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            @foreach ($data02 as $dt02)
                            <div class="row">
                                <div class="col-md-12 align-self-center">
                                    <button type="button" class="btn  btn-sm btn-outline-success"
                                        onclick="modalchange('Edit', 'Non Friday', '{{$dt02}}', '02')">{{$dt02}}</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger"
                                        onclick="modalchange('Delete', 'Non Friday', '{{$dt02}}', '02')"><i
                                            class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-md-6">
                            @foreach ($fata02 as $ft02)
                            <div class="row">
                                <div class="col-md-12 align-self-center"> <button type="button"
                                        class="btn  btn-sm btn-outline-success"
                                        onclick="modalchange('Edit', 'Friday', '{{$ft02}}', '02')">{{$ft02}}</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger"
                                        onclick="modalchange('Delete', 'Friday', '{{$ft02}}', '02')"><i
                                            class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Alarm 3 -->
        <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 03</h5>
                    <!-- Audio File -->
                    <audio hidden controls id="audio03">
                        <source src="{{ asset('sound/03.ogg') }}" type="audio/ogg">
                    </audio>
                    <div class="row mb-1">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted" id="playbutton"><button type="button"
                                    class="btn btn-sm btn-outline-info border-0" onclick="playaudi(audi03)"><i
                                        id="audi03button" class="fas fa-play"></i> Play</button>
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h6 class="card-subtitle mb-2 text-muted"><button type="button"
                                    onclick="modalchange('Add', 'Non Friday', '03', '03')"
                                    class="btn btn-sm btn-outline-info border-0"><i class="fas fa-plus"></i>
                                    Schedule</button></h6>
                        </div>
                        <div class="col-6">
                            <h6 class="card-subtitle mb-2 text-muted"><button type="button"
                                    onclick="modalchange('Add', 'Friday', '03', '03')"
                                    class="btn btn-sm btn-outline-info border-0"><i class="fas fa-plus"></i>
                                    Schedule</button></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Mon-Thurs
                        </div>
                        <div class="col-md-6">
                            Friday
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            @foreach ($data03 as $dt03)
                            <div class="row">
                                <div class="col-md-12 align-self-center"> <button type="button"
                                        class="btn btn-sm  btn-outline-success"
                                        onclick="modalchange('Edit', 'Non Friday', '{{$dt03}}', '03')">{{$dt03}}</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger"
                                        onclick="modalchange('Delete', 'Non Friday', '{{$dt03}}', '03')"><i
                                            class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-6">
                            @foreach ($fata03 as $ft03)
                            <div class="row">
                                <div class="col-12 align-self-center"><button type="button"
                                        class="btn btn-sm  btn-outline-success"
                                        onclick="modalchange('Edit', 'Friday', '{{$ft03}}', '03')">{{$ft03}}</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger"
                                        onclick="modalchange('Delete', 'Friday', '{{$ft03}}', '03')"><i
                                            class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Alarm 4 -->
        <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 04</h5>
                    <!-- Audio File -->
                    <audio hidden controls id="audio04">
                        <source src="{{ asset('sound/04.ogg') }}" type="audio/ogg">
                    </audio>
                    <div class="row mb-1">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted" id="playbutton"><button type="button"
                                    class="btn btn-sm btn-outline-info border-0" onclick="playaudi(audi04)"><i
                                        id="audi04button" class="fas fa-play"></i> Play</button>
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h6 class="card-subtitle mb-2 text-muted"><button type="button"
                                    onclick="modalchange('Add', 'Non Friday', '04', '04')"
                                    class="btn btn-sm btn-outline-info border-0"><i class="fas fa-plus"></i>
                                    Schedule</button></h6>
                        </div>
                        <div class="col-6">
                            <h6 class="card-subtitle mb-2 text-muted"><button type="button"
                                    onclick="modalchange('Add', 'Friday', '04', '04')"
                                    class="btn btn-sm btn-outline-info border-0"><i class="fas fa-plus"></i>
                                    Schedule</button></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Mon-Thurs
                        </div>
                        <div class="col-md-6">
                            Friday
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            @foreach ($data04 as $dt04)
                            <div class="row">
                                <div class="col-md-12 align-self-center"> <button type="button"
                                        class="btn btn-sm  btn-outline-success"
                                        onclick="modalchange('Edit', 'Non Friday', '{{$dt04}}', '04')">{{$dt04}}</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger"
                                        onclick="modalchange('Delete', 'Non Friday', '{{$dt04}}', '04')"><i
                                            class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-6">
                            @foreach ($fata04 as $ft04)
                            <div class="row">
                                <div class="col-md-12 align-self-center">
                                    <button type="button" class="btn  btn-sm btn-outline-success"
                                        onclick="modalchange('Edit', 'Friday', '{{$ft04}}', '04')">{{$ft04}}</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger"
                                        onclick="modalchange('Delete', 'Friday', '{{$ft04}}', '04')"><i
                                            class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Alarm 5 -->
        <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 05</h5>
                    <!-- Audio File -->
                    <audio hidden controls id="audio05">
                        <source src="{{ asset('sound/05.ogg') }}" type="audio/ogg">
                    </audio>
                    <div class="row mb-1">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted" id="playbutton"><button type="button"
                                    class="btn btn-sm btn-outline-info border-0" onclick="playaudi(audi05)"><i
                                        id="audi05button" class="fas fa-play"></i> Play</button>
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h6 class="card-subtitle mb-2 text-muted"><button type="button"
                                    onclick="modalchange('Add', 'Non Friday', '05', '05')"
                                    class="btn btn-sm btn-outline-info border-0"><i class="fas fa-plus"></i>
                                    Schedule</button></h6>
                        </div>
                        <div class="col-6">
                            <h6 class="card-subtitle mb-2 text-muted"><button type="button"
                                    onclick="modalchange('Add', 'Friday', '05', '05')"
                                    class="btn btn-sm btn-outline-info border-0"><i class="fas fa-plus"></i>
                                    Schedule</button></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Mon-Thurs
                        </div>
                        <div class="col-md-6">
                            Friday
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            @foreach ($data05 as $dt05)
                            <div class="row">
                                <div class="col-md-12 align-self-center">
                                    <button type="button" class="btn  btn-sm btn-outline-success"
                                        onclick="modalchange('Edit', 'Non Friday', '{{$dt05}}', '05')">{{$dt05}}</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger"
                                        onclick="modalchange('Delete', 'Non Friday', '{{$dt05}}', '05')"><i
                                            class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-6">
                            @foreach ($fata05 as $ft05)
                            <div class="row">
                                <div class="col-md-12 align-self-center">
                                    <button type="button" class="btn  btn-sm btn-outline-success"
                                        onclick="modalchange('Edit', 'Friday', '{{$ft05}}', '05')">{{$ft05}}</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger"
                                        onclick="modalchange('Delete', 'Friday', '{{$ft05}}', '05')"><i
                                            class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Alarm type 02 -->
    <div class="row justify-content-center align-items-center mt-3">
        <div class="col-md-10">
            <h4>Alarm Type 2</h4>
            <p>Regular Alarm That Run Normaly from monday to saturday.</p>
        </div>
    </div>
    <!-- Reqular Schedule -->
    <div class="row justify-content-center align-items-center">
        <!-- Alarm 01-->
        <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 01</h5>
                    <!-- Audio File -->
                    <audio hidden controls id="audio06">
                        <source src="{{ asset('sound/06.ogg') }}" type="audio/ogg">
                    </audio>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><button
                                    onclick="modalchange('Add', 'Regular', '01', '06')"
                                    class="btn btn-sm btn-outline-info border-0"><i class="fas fa-plus"></i>
                                    Schedule</button></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted" id="playbutton"><button type="button"
                                    class="btn btn-sm btn-outline-info border-0" onclick="playaudi(audi06)"><i
                                        id="audi06button" class="fas fa-play"></i> Play</button>
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data06 as $dt06)
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <button type="button" class="btn  btn-sm btn-outline-success"
                                onclick="modalchange('Edit', 'Regular', '{{$dt06}}', '06')">{{$dt06}}</button>
                            <button type="button" class="btn btn-sm btn-outline-danger"
                                onclick="modalchange('Delete', 'Regular', '{{$dt06}}', '06')"><i
                                    class="fas fa-trash"></i></button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Alarm 02-->
        <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 02</h5>
                    <!-- Audio File -->
                    <audio hidden controls id="audio07">
                        <source src="{{ asset('sound/07.ogg') }}" type="audio/ogg">
                    </audio>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><button
                                    onclick="modalchange('Add', 'Regular', '02', '07')"
                                    class="btn btn-sm btn-outline-info border-0"><i class="fas fa-plus"></i>
                                    Schedule</button></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted" id="playbutton"><button type="button"
                                    class="btn btn-sm btn-outline-info border-0" onclick="playaudi(audi07)"><i
                                        id="audi07button" class="fas fa-play"></i> Play</button>
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data07 as $dt07)
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <button type="button" class="btn  btn-sm btn-outline-success"
                                onclick="modalchange('Edit', 'Regular', '{{$dt07}}', '07')">{{$dt07}}</button>
                            <button type="button" class="btn btn-sm btn-outline-danger"
                                onclick="modalchange('Delete', 'Regular', '{{$dt07}}', '07')"><i
                                    class="fas fa-trash"></i></button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Alarm 03-->
        <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 03</h5>
                    <!-- Audio File -->
                    <audio hidden controls id="audio08">
                        <source src="{{ asset('sound/08.ogg') }}" type="audio/ogg">
                    </audio>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><button
                                    onclick="modalchange('Add', 'Regular', '03', '08')"
                                    class="btn btn-sm btn-outline-info border-0"><i class="fas fa-plus"></i>
                                    Schedule</button></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted" id="playbutton"><button type="button"
                                    class="btn btn-sm btn-outline-info border-0" onclick="playaudi(audi08)"><i
                                        id="audi08button" class="fas fa-play"></i> Play</button>
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data08 as $dt08)
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <button type="button" class="btn  btn-sm btn-outline-success"
                                onclick="modalchange('Edit', 'Regular', '{{$dt08}}', '08')">{{$dt08}}</button>
                            <button type="button" class="btn btn-sm btn-outline-danger"
                                onclick="modalchange('Delete', 'Regular', '{{$dt08}}', '08')"><i
                                    class="fas fa-trash"></i></button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Alarm 04-->
        <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 04</h5>
                    <!-- Audio File -->
                    <audio hidden controls id="audio09">
                        <source src="{{ asset('sound/09.ogg') }}" type="audio/ogg">
                    </audio>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><button
                                    onclick="modalchange('Add', 'Regular', '04', '09')"
                                    class="btn btn-sm btn-outline-info border-0"><i class="fas fa-plus"></i>
                                    Schedule</button></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted" id="playbutton"><button type="button"
                                    class="btn btn-sm btn-outline-info border-0" onclick="playaudi(audi09)"><i
                                        id="audi09button" class="fas fa-play"></i> Play</button>
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data09 as $dt09)
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <button type="button" class="btn  btn-sm btn-outline-success"
                                onclick="modalchange('Edit', 'Regular', '{{$dt09}}', '09')">{{$dt09}}</button>
                            <button type="button" class="btn btn-sm btn-outline-danger"
                                onclick="modalchange('Delete', 'Regular', '{{$dt09}}', '09')"><i
                                    class="fas fa-trash"></i></button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Alarm 05-->
        <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 05</h5>
                    <!-- Audio File -->
                    <audio hidden controls id="audio10">
                        <source src="{{ asset('sound/10.ogg') }}" type="audio/ogg">
                    </audio>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><button
                                    onclick="modalchange('Add', 'Regular', '05', '10')"
                                    class="btn btn-sm btn-outline-info border-0"><i class="fas fa-plus"></i>
                                    Schedule</button></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted" id="playbutton"><button type="button"
                                    class="btn btn-sm btn-outline-info border-0" onclick="playaudi(audi10)"><i
                                        id="audi10button" class="fas fa-play"></i> Play</button>
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data10 as $dt10)
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <button type="button" class="btn  btn-sm btn-outline-success"
                                onclick="modalchange('Edit', 'Regular', '{{$dt10}}', '10')">{{$dt10}}</button>
                            <button type="button" class="btn btn-sm btn-outline-danger"
                                onclick="modalchange('Delete', 'Regular', '{{$dt10}}', '10')"><i
                                    class="fas fa-trash"></i></button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Alarm type 03 -->
    <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
            <h4>Alarm Type 3</h4>
            <p>Regular Alarm That Run Normaly from monday to saturday. But they have exception date, it will not play on
                specific date : <b class="text-danger">{{$exclude}}</b> <button class="btn btn-sm btn-outline-success" onclick="editExclude()"><i class="fas fa-pencil-alt"></i>
 Edit</button></p> 
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <!-- Alarm 01-->
        <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 01</h5>
                    <!-- Audio File -->
                    <audio hidden controls id="audio11">
                        <source src="{{ asset('sound/11.ogg') }}" type="audio/ogg">
                    </audio>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><button
                                    onclick="modalchange('Add', 'Exception', '01', '11')"
                                    class="btn btn-sm btn-outline-info border-0"><i class="fas fa-plus"></i>
                                    Schedule</button></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted" id="playbutton"><button type="button"
                                    class="btn btn-sm btn-outline-info border-0" onclick="playaudi(audi11)"><i
                                        id="audi11button" class="fas fa-play"></i> Play</button>
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data11 as $dt11)
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <button type="button" class="btn  btn-sm btn-outline-success"
                                onclick="modalchange('Edit', 'Exception', '{{$dt11}}', '11')">{{$dt11}}</button>
                            <button type="button" class="btn btn-sm btn-outline-danger"
                                onclick="modalchange('Delete', 'Exception', '{{$dt11}}', '11')"><i
                                    class="fas fa-trash"></i></button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Alarm 02-->
        <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 02</h5>
                    <!-- Audio File -->
                    <audio hidden controls id="audio12">
                        <source src="{{ asset('sound/12.ogg') }}" type="audio/ogg">
                    </audio>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><button
                                    onclick="modalchange('Add', 'Exception', '02', '12')"
                                    class="btn btn-sm btn-outline-info border-0"><i class="fas fa-plus"></i>
                                    Schedule</button></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted" id="playbutton"><button type="button"
                                    class="btn btn-sm btn-outline-info border-0" onclick="playaudi(audi12)"><i
                                        id="audi12button" class="fas fa-play"></i> Play</button>
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data12 as $dt12)
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <button type="button" class="btn  btn-sm btn-outline-success"
                                onclick="modalchange('Edit', 'Exception', '{{$dt12}}', '12')">{{$dt12}}</button>
                            <button type="button" class="btn btn-sm btn-outline-danger"
                                onclick="modalchange('Delete', 'Exception', '{{$dt12}}', '12')"><i
                                    class="fas fa-trash"></i></button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Alarm 03-->
        <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 03</h5>
                    <!-- Audio File -->
                    <audio hidden controls id="audio13">
                        <source src="{{ asset('sound/13.ogg') }}" type="audio/ogg">
                    </audio>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><button
                                    onclick="modalchange('Add', 'Exception', '03', '13')"
                                    class="btn btn-sm btn-outline-info border-0"><i class="fas fa-plus"></i>
                                    Schedule</button></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted" id="playbutton"><button type="button"
                                    class="btn btn-sm btn-outline-info border-0" onclick="playaudi(audi13)"><i
                                        id="audi13button" class="fas fa-play"></i> Play</button>
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data13 as $dt13)
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <button type="button" class="btn  btn-sm btn-outline-success"
                                onclick="modalchange('Edit', 'Exception', '{{$dt13}}', '13')">{{$dt13}}</button>
                            <button type="button" class="btn btn-sm btn-outline-danger"
                                onclick="modalchange('Delete', 'Exception', '{{$dt13}}', '13')"><i
                                    class="fas fa-trash"></i></button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Alarm 04-->
        <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 04</h5>
                    <!-- Audio File -->
                    <audio hidden controls id="audio14">
                        <source src="{{ asset('sound/14.ogg') }}" type="audio/ogg">
                    </audio>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><button type="button"
                                    class="btn btn-sm btn-outline-info border-0"><i class="fas fa-plus"></i>
                                    Schedule</button></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted" id="playbutton"><button
                                    onclick="modalchange('Add', 'Exception', '04', '14')"
                                    class="btn btn-sm btn-outline-info border-0" onclick="playaudi(audi14)"><i
                                        id="audi14button" class="fas fa-play"></i> Play</button>
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data14 as $dt14)
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <button type="button" class="btn  btn-sm btn-outline-success"
                                onclick="modalchange('Edit', 'Exception', '{{$dt14}}', '14')">{{$dt14}}</button>
                            <button type="button" class="btn btn-sm btn-outline-danger"
                                onclick="modalchange('Delete', 'Exception', '{{$dt14}}', '14')"><i
                                    class="fas fa-trash"></i></button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Alarm 05-->
        <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 05</h5>
                    <!-- Audio File -->
                    <audio hidden controls id="audio15">
                        <source src="{{ asset('sound/15.ogg') }}" type="audio/ogg">
                    </audio>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><button
                                    onclick="modalchange('Add', 'Exception', '05', '15')"
                                    class="btn btn-sm btn-outline-info border-0"><i class="fas fa-plus"></i>
                                    Schedule</button></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted" id="playbutton"><button type="button"
                                    class="btn btn-sm btn-outline-info border-0" onclick="playaudi(audi15)"><i
                                        id="audi15button" class="fas fa-play"></i> Play</button>
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data15 as $dt15)
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <button type="button" class="btn  btn-sm btn-outline-success"
                                onclick="modalchange('Edit', 'Exception', '{{$dt15}}', '15')">{{$dt15}}</button>
                            <button type="button" class="btn btn-sm btn-outline-danger"
                                onclick="modalchange('Delete', 'Exception', '{{$dt15}}', '15')"><i
                                    class="fas fa-trash"></i></button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal for Proccess -->
<!-- Modal -->
<form action="{{ route('process') }}" enctype="multipart/form-data" method="post">
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tittle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="text-danger" id="Warning"></h3>
                    <p id="descriptionModal">Description</p>
                    @csrf
                    <input type="text" hidden required value="" id="whenEdit" name="whenEdit">
                    <input type="text" hidden required value="" id="typeProses" name="typeProses">
                    <input type="text" hidden required value="" id="trueType" name="trueType">
                    <input type="number" hidden required value="" id="idAlarm" name="idAlarm">
                    <div class="row">
                        <div class="col-md-3">Alarm No</div>
                        <div class="col-md-5"><input type="text" disabled class="form-control" name="Number"
                                id="Number"></div>
                    </div>
                    <div class="row my-1">
                        <div class="col-md-3">Alarm Type</div>
                        <div class="col-md-5"><input type="text" disabled class="form-control" name="Type" id="Type">
                        </div>
                    </div>
                    <div class="row">
                        <div id="labelTime" class="col-md-3">Time</div>
                        <div class="col-md-5"><input type="time" class="form-control" id="Time" name="Time" step="1">
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

<!-- Modal for Exclude -->
<!-- Modal -->
<form action="{{ route('changexclude') }}" enctype="multipart/form-data" method="post">
    <div class="modal fade" id="excludeModal" tabindex="-1" role="dialog"
        aria-labelledby="excludeModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="excludeModalLongTitle">Change Exclude Time</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="text-danger" id="Warning"></h3>
                    <p id="descriptionModal">This Will Make Alaram Type 3 Will not rang on date that set</p>
                    @csrf
                    <div class="row">
                        <div class="col-md-4">Date Exclude From</div>
                        <div class="col-md-5"><input type="text" value="{{$exclude}}" disabled class="form-control" name="Number"
                                id="Number"></div>
                    </div>
                    <div class="row my-1">
                        <div class="col-md-4">Date Exclude To</div>
                        <div class="col-md-5"><input type="date" class="form-control" name="dateNow" id="dateNow">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-waring" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>


@stop

@push('scripts')
<script src="{{ asset('js/home.js') }}" defer></script>
@endpush