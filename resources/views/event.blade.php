@extends('layout.master')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Advanced Forms</h2>
            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.html">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Forms</span></li>
                    <li><span>Advanced</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->
        <div class="row">
            <div class="col-xs-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Add Event</h2>
                    </header>
                    <div class="panel-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal form-bordered" method="post" action="/event">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Event Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="eventName">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Band Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="bandNames">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Start Date</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="startDate">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">End Date</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="endDate">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Ticket Price</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="ticketPrice">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Status</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="Status">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-6 col-xs-11">
                                    <button class="btn btn-sm btn-primary colorpicker-element">
                                        Submit
                                    </button>
                                    <button class="btn btn-sm btn-default colorpicker-element">
                                        Reset
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>

        <!-- end: page -->
    </section>
@endsection
