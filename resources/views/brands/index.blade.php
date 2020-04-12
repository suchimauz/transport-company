@extends('layouts.layout')

@section('content')
<div id="content-header">
  <div id="breadcrumb"> <a href="/brands" title="" class="tip-bottom">Марки автомобилей</a></div>
</div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3"></div>
        <div class="span6">
          <a href="/brands/create" class="btn btn-primary">+ Создать</a>
          <div class="widget-box">
            <div class="widget-title">
              <span class="icon"><i class="icon-th"></i></span> 
              <h5>Список марок автомобилей</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th class="pointer">Название</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($brands as $brand)
                    <tr class="gradeX">
                      <td>
                        {{ $brand->name }}
                        <a href="/brands/{{ $brand->id }}/edit" class="float-right">Редактировать</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
