@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Alarm type 01 -->
    <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
            <h4>Alarm Type 1</h4>
            <p>Regular Alarm that still will run from monday to saturday, but be careful on <b class="text-danger">friday</b> they
                have seperated schedule.</p>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <!-- Alarm 1 -->
        <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 01</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="/add/01"><i
                                        class="fas fa-plus"></i> Add Schedule</a></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#" onclick=""><i
                                        class="fas fa-play"></i> Play Sound</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data01 as $dt01)
                    <div class="row">
                        <div class="col-md-7 align-self-center">
                            {{$dt01}}
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-sm btn-outline-success"
                                href="/edit/01/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt01)}}"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-sm btn-outline-danger"
                                href="/delete/01/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt01)}}"><i
                                    class="fas fa-trash"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Alarm 2 -->
        <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 02</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="/add/02"><i
                                        class="fas fa-plus"></i> Add Schedule</a></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#" onclick=""><i
                                        class="fas fa-play"></i> Play Sound</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data02 as $dt02)
                    <div class="row">
                        <div class="col-md-7 align-self-center">
                            {{$dt02}}
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-sm btn-outline-success"
                                href="/edit/02/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt02)}}"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-sm btn-outline-danger"
                                href="/delete/02/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt02)}}"><i
                                    class="fas fa-trash"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Alarm 3 -->
        <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 03</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="/add/03"><i
                                        class="fas fa-plus"></i> Add Schedule</a></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#" onclick=""><i
                                        class="fas fa-play"></i> Play Sound</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data03 as $dt03)
                    <div class="row">
                        <div class="col-md-7 align-self-center">
                            {{$dt03}}
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-sm btn-outline-success"
                                href="/edit/03/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt01)}}"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-sm btn-outline-danger"
                                href="/delete/03/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt01)}}"><i
                                    class="fas fa-trash"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Alarm 4 -->
        <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 04</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="/add/04"><i
                                        class="fas fa-plus"></i> Add Schedule</a></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#" onclick=""><i
                                        class="fas fa-play"></i> Play Sound</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data04 as $dt04)
                    <div class="row">
                        <div class="col-md-7 align-self-center">
                            {{$dt04}}
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-sm btn-outline-success"
                                href="/edit/04/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt04)}}"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-sm btn-outline-danger"
                                href="/delete/04/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt04)}}"><i
                                    class="fas fa-trash"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Alarm 5 -->
        <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 05</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="/add/05"><i
                                        class="fas fa-plus"></i> Add Schedule</a></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#" onclick=""><i
                                        class="fas fa-play"></i> Play Sound</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data05 as $dt05)
                    <div class="row">
                        <div class="col-md-7 align-self-center">
                            {{$dt05}}
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-sm btn-outline-success"
                                href="/edit/05/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt05)}}"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-sm btn-outline-danger"
                                href="/delete/05/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt05)}}"><i
                                    class="fas fa-trash"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Friday Schedule -->
    <div class="row justify-content-center align-items-center my-3">
    <!-- Alarm Friday 01 -->
    <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm Friday 01</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="/add/16"><i
                                        class="fas fa-plus"></i> Add Schedule</a></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#" onclick=""><i
                                        class="fas fa-play"></i> Play Sound</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($fata01 as $ft01)
                    <div class="row">
                        <div class="col-md-7 align-self-center">
                            {{$ft01}}
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-sm btn-outline-success"
                                href="/edit/16/{{preg_replace('/[^a-zA-Z0-9]/', '', $ft01)}}"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-sm btn-outline-danger"
                                href="/delete/16/{{preg_replace('/[^a-zA-Z0-9]/', '', $ft01)}}"><i
                                    class="fas fa-trash"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Alarm Friday 02 -->
    <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm Friday 02</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="/add/17"><i
                                        class="fas fa-plus"></i> Add Schedule</a></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#" onclick=""><i
                                        class="fas fa-play"></i> Play Sound</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($fata02 as $ft02)
                    <div class="row">
                        <div class="col-md-7 align-self-center">
                            {{$ft02}}
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-sm btn-outline-success"
                                href="/edit/17/{{preg_replace('/[^a-zA-Z0-9]/', '', $ft02)}}"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-sm btn-outline-danger"
                                href="/delete/17/{{preg_replace('/[^a-zA-Z0-9]/', '', $ft02)}}"><i
                                    class="fas fa-trash"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Alarm Friday 03 -->
    <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm Friday 03</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="/add/18"><i
                                        class="fas fa-plus"></i> Add Schedule</a></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#" onclick=""><i
                                        class="fas fa-play"></i> Play Sound</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($fata03 as $ft03)
                    <div class="row">
                        <div class="col-md-7 align-self-center">
                            {{$ft03}}
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-sm btn-outline-success"
                                href="/edit/18/{{preg_replace('/[^a-zA-Z0-9]/', '', $ft03)}}"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-sm btn-outline-danger"
                                href="/delete/18/{{preg_replace('/[^a-zA-Z0-9]/', '', $ft03)}}"><i
                                    class="fas fa-trash"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Alarm Friday 04 -->
    <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm Friday 04</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="/add/19"><i
                                        class="fas fa-plus"></i> Add Schedule</a></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#" onclick=""><i
                                        class="fas fa-play"></i> Play Sound</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($fata04 as $ft04)
                    <div class="row">
                        <div class="col-md-7 align-self-center">
                            {{$ft04}}
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-sm btn-outline-success"
                                href="/edit/19/{{preg_replace('/[^a-zA-Z0-9]/', '', $ft04)}}"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-sm btn-outline-danger"
                                href="/delete/19/{{preg_replace('/[^a-zA-Z0-9]/', '', $ft04)}}"><i
                                    class="fas fa-trash"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Alarm Friday 05 -->
    <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm Friday 05</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="/add/20"><i
                                        class="fas fa-plus"></i> Add Schedule</a></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#" onclick=""><i
                                        class="fas fa-play"></i> Play Sound</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($fata05 as $ft05)
                    <div class="row">
                        <div class="col-md-7 align-self-center">
                            {{$ft05}}
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-sm btn-outline-success"
                                href="/edit/20/{{preg_replace('/[^a-zA-Z0-9]/', '', $ft05)}}"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-sm btn-outline-danger"
                                href="/delete/20/{{preg_replace('/[^a-zA-Z0-9]/', '', $ft05)}}"><i
                                    class="fas fa-trash"></i></a>
                        </div>
                    </div>
                    @endforeach
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
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="/add/06"><i
                                        class="fas fa-plus"></i> Add Schedule</a></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#" onclick=""><i
                                        class="fas fa-play"></i> Play Sound</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data06 as $dt06)
                    <div class="row">
                        <div class="col-md-7 align-self-center">
                            {{$dt06}}
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-sm btn-outline-success"
                                href="/edit/06/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt06)}}"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-sm btn-outline-danger"
                                href="/delete/06/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt06)}}"><i
                                    class="fas fa-trash"></i></a>
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
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="/add/07"><i
                                        class="fas fa-plus"></i> Add Schedule</a></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#" onclick=""><i
                                        class="fas fa-play"></i> Play Sound</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data07 as $dt07)
                    <div class="row">
                        <div class="col-md-7 align-self-center">
                            {{$dt07}}
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-sm btn-outline-success"
                                href="/edit/07/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt07)}}"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-sm btn-outline-danger"
                                href="/delete/07/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt07)}}"><i
                                    class="fas fa-trash"></i></a>
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
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="/add/08"><i
                                        class="fas fa-plus"></i> Add Schedule</a></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#" onclick=""><i
                                        class="fas fa-play"></i> Play Sound</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data08 as $dt08)
                    <div class="row">
                        <div class="col-md-7 align-self-center">
                            {{$dt08}}
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-sm btn-outline-success"
                                href="/edit/08/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt08)}}"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-sm btn-outline-danger"
                                href="/delete/08/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt08)}}"><i
                                    class="fas fa-trash"></i></a>
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
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="/add/09"><i
                                        class="fas fa-plus"></i> Add Schedule</a></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#" onclick=""><i
                                        class="fas fa-play"></i> Play Sound</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data09 as $dt09)
                    <div class="row">
                        <div class="col-md-7 align-self-center">
                            {{$dt09}}
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-sm btn-outline-success"
                                href="/edit/09/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt09)}}"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-sm btn-outline-danger"
                                href="/delete/09/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt09)}}"><i
                                    class="fas fa-trash"></i></a>
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
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="/add/10"><i
                                        class="fas fa-plus"></i> Add Schedule</a></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#" onclick=""><i
                                        class="fas fa-play"></i> Play Sound</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data10 as $dt10)
                    <div class="row">
                        <div class="col-md-7 align-self-center">
                            {{$dt10}}
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-sm btn-outline-success"
                                href="/edit/10/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt10)}}"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-sm btn-outline-danger"
                                href="/delete/10/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt10)}}"><i
                                    class="fas fa-trash"></i></a>
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
                specific date : <b class="text-danger">Date</b></p>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
    <!-- Alarm 01-->
    <div class="col-md-2 align-self-start">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alarm 01</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="/add/11"><i
                                        class="fas fa-plus"></i> Add Schedule</a></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#" onclick=""><i
                                        class="fas fa-play"></i> Play Sound</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data11 as $dt11)
                    <div class="row">
                        <div class="col-md-7 align-self-center">
                            {{$dt11}}
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-sm btn-outline-success"
                                href="/edit/11/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt11)}}"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-sm btn-outline-danger"
                                href="/delete/11/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt11)}}"><i
                                    class="fas fa-trash"></i></a>
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
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="/add/12"><i
                                        class="fas fa-plus"></i> Add Schedule</a></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#" onclick=""><i
                                        class="fas fa-play"></i> Play Sound</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data12 as $dt12)
                    <div class="row">
                        <div class="col-md-7 align-self-center">
                            {{$dt12}}
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-sm btn-outline-success"
                                href="/edit/12/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt12)}}"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-sm btn-outline-danger"
                                href="/delete/12/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt12)}}"><i
                                    class="fas fa-trash"></i></a>
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
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="/add/13"><i
                                        class="fas fa-plus"></i> Add Schedule</a></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#" onclick=""><i
                                        class="fas fa-play"></i> Play Sound</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data13 as $dt13)
                    <div class="row">
                        <div class="col-md-7 align-self-center">
                            {{$dt13}}
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-sm btn-outline-success"
                                href="/edit/13/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt13)}}"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-sm btn-outline-danger"
                                href="/delete/13/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt13)}}"><i
                                    class="fas fa-trash"></i></a>
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
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="/add/14"><i
                                        class="fas fa-plus"></i> Add Schedule</a></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#" onclick=""><i
                                        class="fas fa-play"></i> Play Sound</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data14 as $dt14)
                    <div class="row">
                        <div class="col-md-7 align-self-center">
                            {{$dt14}}
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-sm btn-outline-success"
                                href="/edit/14/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt14)}}"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-sm btn-outline-danger"
                                href="/delete/14/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt14)}}"><i
                                    class="fas fa-trash"></i></a>
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
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="/add/15"><i
                                        class="fas fa-plus"></i> Add Schedule</a></h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="card-subtitle mb-2 text-muted"><a class="card-link" href="#" onclick=""><i
                                        class="fas fa-play"></i> Play Sound</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Schedule
                        </div>
                    </div>
                    @foreach ($data15 as $dt15)
                    <div class="row">
                        <div class="col-md-7 align-self-center">
                            {{$dt15}}
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-sm btn-outline-success"
                                href="/edit/15/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt15)}}"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-sm btn-outline-danger"
                                href="/delete/15/{{preg_replace('/[^a-zA-Z0-9]/', '', $dt15)}}"><i
                                    class="fas fa-trash"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
@endsection