@extends('layouts.layout')

@section('content')
<div id="content-header">
    <div id="breadcrumb"> <a href="/drivers" title="" class="tip-bottom">Водители</a></div>
</div>
<div class="container-fluid">
    <div class="row-fluid">
      <div class="span2"></div>
      <div class="span8">
        <a href="/drivers/create" class="btn btn-primary">+ Создать</a>
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Список водителей</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th class="pointer">ФИО</th>
                  <th class="pointer">Стаж (год)</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($drivers as $driver)
                    <tr class="gradeX">
                      <td>{{ $driver->name }}</td>
                      <td>
                       {{ $driver->experience }}
                        <a class="float-right" href="/drivers/{{ $driver->id }}/edit">Редактировать</a>
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
