@extends('layouts.app')

@section('content')
<div class="container-fluid mx-4">
    <!-- Alarm type 01 -->
    <div class="row justify-content-center align-items-center mx-4">
        <div class="col-md-12">
            <h4>Alarm Type 1</h4>
            <p>Regular Alarm that will run from monday to saturday, but on <b class="text-danger">Friday</b> they
                have seperated schedule.</p>
        </div>
    </div>
    <div class="row justify-content-center align-items-center mx-4">
        <!-- Alarm 1 -->
        <div class="col-md-3 align-self-start">
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
                    <div class="row overflow-auto" style="height:350px">
                        <div class="col-md-6">
                            @foreach ($data01 as $dt01)
                            <div class="row my-1">
                                <div class="col-md-12 align-self-center">{{str_pad($ind01++, 2, '0', STR_PAD_LEFT)}}
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
                            <div class="row my-1">
                                <div class="col-md-12 align-self-center">{{str_pad($ind02++, 2, '0', STR_PAD_LEFT)}}
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
        <div class="col-md-3 align-self-start">
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
                    <div class="row overflow-auto" style="height:350px">
                        <div class="col-md-6">
                            @foreach ($data02 as $dt02)
                            <div class="row my-1">
                                <div class="col-md-12 align-self-center">{{str_pad($ind03++, 2, '0', STR_PAD_LEFT)}}
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
                            <div class="row my-1">
                                <div class="col-md-12 align-self-center"> {{str_pad($ind04++, 2, '0', STR_PAD_LEFT)}}
                                    <button type="button" class="btn  btn-sm btn-outline-success"
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
        <div class="col-md-3 align-self-start">
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
                    <div class="row overflow-auto" style="height:350px">
                        <div class="col-md-6">
                            @foreach ($data03 as $dt03)
                            <div class="row my-1">
                                <div class="col-md-12 align-self-center"> {{str_pad($ind05++, 2, '0', STR_PAD_LEFT)}} <button type="button"
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
                            <div class="row my-1">
                                <div class="col-12 align-self-center"> {{str_pad($ind06++, 2, '0', STR_PAD_LEFT)}}<button type="button"
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
        <div class="col-md-3 align-self-start">
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
                    <div class="row overflow-auto" style="height:350px">
                        <div class="col-md-6">
                            @foreach ($data04 as $dt04)
                            <div class="row my-1">
                                <div class="col-md-12 align-self-center">{{str_pad($ind07++, 2, '0', STR_PAD_LEFT)}} <button type="button"
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
                            <div class="row my-1">
                                <div class="col-md-12 align-self-center">{{str_pad($ind08++, 2, '0', STR_PAD_LEFT)}}
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
    </div>

    <!-- Alarm type 02 -->
    <div class="row justify-content-center align-items-center mt-3 mx-4">
        <div class="col-md-12">
            <h4>Alarm Type 2</h4>
            <p>Regular Alarm That Run Normaly from monday to saturday.</p>
        </div>
    </div>
    <!-- Reqular Schedule -->
    <div class="row justify-content-center align-items-center mx-4">
        <!-- Alarm 01-->
        <div class="col-md-3 align-self-start">
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
                    <div class="row overflow-auto" style="height:350px">
                        <div class="col-12">
                            @foreach ($data06 as $dt06)
                            <div class="row my-1">
                                <div class="col-md-6 align-self-center">{{str_pad($ind09++, 2, '0', STR_PAD_LEFT)}}
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
            </div>
        </div>
        <!-- Alarm 02-->
        <div class="col-md-3 align-self-start">
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
                    <div class="row overflow-auto" style="height:350px">
                        <div class="col-12">
                            @foreach ($data07 as $dt07)
                            <div class="row my-1">
                                <div class="col-md-6 align-self-center">{{str_pad($ind10++, 2, '0', STR_PAD_LEFT)}}
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
            </div>
        </div>
        <!-- Alarm 03-->
        <div class="col-md-3 align-self-start">
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
                    <div class="row overflow-auto" style="height:350px">
                        <div class="col-12">
                            @foreach ($data08 as $dt08)
                            <div class="row my-1">
                                <div class="col-md-6 align-self-center">{{str_pad($ind11++, 2, '0', STR_PAD_LEFT)}}
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
            </div>
        </div>
        <!-- Alarm 04-->
        <div class="col-md-3 align-self-start">
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
                    <div class="row overflow-auto" style="height:350px">
                        <div class="col-12">
                            @foreach ($data09 as $dt09)
                            <div class="row my-1">
                                <div class="col-md-6 align-self-center">{{str_pad($ind12++, 2, '0', STR_PAD_LEFT)}}
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
            </div>
        </div>
    </div>

    <!-- Alarm type 03 -->
    <div class="row justify-content-center align-items-center mt-3 mx-4">
        <div class="col-md-12">
            <h4>Alarm Type 3</h4>
            <p>Regular Alarm That Run Normaly from monday to saturday. But they have exception date, it will not play on
                specific date : <b class="text-danger">{{$exclude}}</b> <button class="btn btn-sm btn-outline-success"
                    onclick="editExclude()"><i class="fas fa-pencil-alt"></i>
                    Edit</button></p>
        </div>
    </div>
    <div class="row justify-content-center align-items-center mx-4">
        <!-- Alarm 01-->
        <div class="col-md-3 align-self-start">
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
                    <div class="row overflow-auto" style="height:350px">
                        <div class="col-12">
                            @foreach ($data11 as $dt11)
                            <div class="row my-1">
                                <div class="col-md-6 align-self-center">{{str_pad($ind13++, 2, '0', STR_PAD_LEFT)}}
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
            </div>
        </div>
        <!-- Alarm 02-->
        <div class="col-md-3 align-self-start">
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
                    <div class="row overflow-auto" style="height:350px">
                        <div class="col-12">
                            @foreach ($data12 as $dt12)
                            <div class="row my-1">
                                <div class="col-md-6 align-self-center">{{str_pad($ind14++, 2, '0', STR_PAD_LEFT)}}
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
            </div>
        </div>
        <!-- Alarm 03-->
        <div class="col-md-3 align-self-start">
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
                    <div class="row overflow-auto" style="height:350px">
                        <div class="col-12">
                            @foreach ($data13 as $dt13)
                            <div class="row my-1">
                                <div class="col-md-6 align-self-center">{{str_pad($ind15++, 2, '0', STR_PAD_LEFT)}}
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
            </div>
        </div>
        <!-- Alarm 04-->
        <div class="col-md-3 align-self-start">
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
                    <div class="row overflow-auto" style="height:350px">
                        <div class="col-12">
                            @foreach ($data14 as $dt14)
                            <div class="row my-1">
                                <div class="col-md-6 align-self-center">{{str_pad($ind16++, 2, '0', STR_PAD_LEFT)}}
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
    <div class="modal fade" id="excludeModal" tabindex="-1" role="dialog" aria-labelledby="excludeModalTitle"
        aria-hidden="true">
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
                        <div class="col-md-5"><input type="text" value="{{$exclude}}" disabled class="form-control"
                                name="Number" id="Number"></div>
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