@extends('layouts.layout')

@section('content')
<div id="content-header">
    <div id="breadcrumb"> <a href="/" title="" class="tip-bottom">Перевозки</a></div>
</div>
<div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Редактирование маршрута</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="/traffics/{{ $traffic->id }}" method="POST" class="form-horizontal">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                @include('traffics.components.fields')
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Созранить</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
