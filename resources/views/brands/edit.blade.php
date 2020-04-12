@extends('layouts.layout')

@section('content')
<div id="content-header">
    <div id="breadcrumb"> <a href="/brands" title="" class="tip-bottom">Марки автомобилей</a></div>
</div>
<div class="container-fluid">
    <div class="row-fluid">
      <div class="span3"></div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Редактирование марки автомобиля</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="/brands/{{ $brand->id }}" method="POST" class="form-horizontal">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                @include('brands.components.fields')
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Сохранить</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
