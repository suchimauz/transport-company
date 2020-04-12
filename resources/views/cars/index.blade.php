@extends('layouts.layout')

@section('content')
<div id="content-header">
    <div id="breadcrumb"> <a href="/cars" title="" class="tip-bottom">Автомобили</a></div>
</div>
<div class="container-fluid">
    <div class="row-fluid">
      <div class="span3"></div>
      <div class="span6">
        <a href="/cars/create" class="btn btn-primary">+ Создать</a>
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Список автомобилей</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th class="pointer">Модель</th>
                  <th class="pointer">Марка</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($cars as $car)
                  <tr class="gradeX">
                    <td>
                     {{ $car->model }}
                    </td>
                    <td>
                     {{ $car->brand->name }}
                      <a class="float-right" href="/cars/{{ $car->id }}/edit">Редактировать</a>
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
