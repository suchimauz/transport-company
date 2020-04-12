@extends('layouts.layout')

@section('content')
<div id="content-header">
    <div id="breadcrumb"> <a href="/" title="" class="tip-bottom">Перевозки</a></div>
</div>
<div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        @if(!Auth::guest())
          <a href="/traffics/create" class="btn btn-primary">+ Создать</a>
        @endif
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Список маршрутов</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th class="pointer">Водитель</th>
                  <th class="pointer">Автомобиль</th>
                  <th class="pointer">Маршрут</th>
                  <th class="pointer">Поддержали</th>
                  <th class="pointer">Дата</th>
                  <th class="pointer">Груз</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($traffics as $traffic)
                  <tr class="gradeX">
                    <td>
                      {{ $traffic->driver->name }}, 
                      {{ $traffic->driver->experience }} 
                      @if($traffic->driver->experience == 1) 
                        год
                      @elseif($traffic->driver->experience >= 2 && $traffic->driver->experience <= 4)
                          года
                      @else
                          лет
                      @endif
                      стажа
                    </td>
                    <td>{{ $traffic->car->brand->name }}, {{ $traffic->car->model }}</td>
                    <td>{{ $traffic->route_from }} <i class="icon-arrow-right"></i> {{ $traffic->route_to }}</td>
                    <td>
                      {{ $traffic->donates->count() }}
                      @if($traffic->donates->count() >= 5 || $traffic->donates->count() <= 1 )
                        раз
                      @else
                        раза
                      @endif
                      на сумму
                      {{ $traffic->donates->sum('amount') }}
                      рублей.
                      (<a href="/traffics/{{ $traffic->id }}/donates">Все</a>)
                      <a class="float-right" href="/traffics/{{ $traffic->id }}/donates/create">Поддержать</a>
                    </td>
                    <td>{{ date('d.m.Y H:i',strtotime($traffic->created_at . ' + 3 hours')) }}
                    </td>
                    <td>
                      {{ $traffic->cargo }}, {{ $traffic->cargo_weight }}
                      @if(!Auth::guest())
                        <a class="float-right" href="/traffics/{{ $traffic->id }}/edit">Редактировать</a>
                      @endif
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
