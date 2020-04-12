@extends('layouts.layout')

@section('content')
<div id="content-header">
    <div id="breadcrumb"> <a href="/" title="" class="tip-bottom">Перевозки</a></div>
</div>
<div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Список пожертвований на маршрут {{ $traffic->route_from }} <i class="icon-arrow-right"></i> {{ $traffic->route_to }}</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th class="pointer">ФИО</th>
                  <th class="pointer">Сумма</th>
                  <th class="pointer">Кол-во пожертвований</th>
                  <th class="pointer">Дата</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($donates as $donate)
                  <tr class="gradeX">
                    <td>{{ $donate->name }}</td>
                    <td>{{ $donate->amount }}</td>
                    <td>{{ $donate->count }}</td>
                    <td>{{ date('d.m.Y H:i',strtotime($donate->created_at . ' + 3 hours')) }}</td>
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
