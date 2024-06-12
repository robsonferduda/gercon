@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-9">
                    <h4 class="card-title">
                        <i class="fa fa-files-o"></i> Boletim
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> Detalhes 
                    </h4>
                </div>
                <div class="col-md-3">
                    <a href="{{ url('boletins') }}" class="btn btn-info pull-right ml-3" style="margin-right: 12px;"><i class="fa fa-files-o"></i> Boletins</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                @include('layouts.mensagens')
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5>{!! $boletim->titulo !!}</h5>
                    {!! $boletim->texto !!}
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
@section('script')    
    <script>
        $(document).ready(function(){
             
        });
    </script>
@endsection