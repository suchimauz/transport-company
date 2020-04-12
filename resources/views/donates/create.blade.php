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
            <h5>Создание маршрута</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="/traffics/{{ Request::route('traffic') }}/donates" method="POST" class="form-horizontal">
                {{ csrf_field() }}
                <div class="control-group">
                    <label class="control-label">Ваше ФИО :</label>
                    <div class="controls">
                    <input type="text" class="span11" name="name" placeholder="Введите ваше ФИО" required autofocus/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Ваш email :</label>
                    <div class="controls">
                    <input type="text" class="span11" name="email" placeholder="Введите ваш email" required/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Сумма пожертвования (руб.) :</label>
                    <div class="controls">
                    <input type="number" class="span11" name="amount" placeholder="Введите сумму пожертвования, например 10000" required/>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Создать</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
