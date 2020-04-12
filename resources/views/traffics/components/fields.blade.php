<div class="control-group">
    <label class="control-label">Водитель :</label>
    <div class="controls">
        <select name="driver_id" required>
            @if(!isset($traffic->brand_id)) 
                <option value={{ null }}>Выберите водителя</option>
            @endif
            @forelse ($drivers as $driver)
                <option 
                    value="{{ $driver->id }}"
                    @if(isset($traffic->driver_id))
                        @if($traffic->driver_id == $driver->id)
                            selected
                        @endif
                    @endif
                >
                    {{ $driver->name }}, 
                    {{ $driver->experience }} 
                    @if($driver->experience == 1) 
                        год
                    @elseif($driver->experience >= 2 && $driver->experience <= 4)
                        года
                    @else
                        лет
                    @endif
                </option>
            @empty
                <option value={{ null }}>Не найдено водителей</option>
            @endforelse
        </select>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Автомобиль :</label>
    <div class="controls">
        <select name="car_id" required>
            @if(!isset($traffic->brand_id)) 
                <option value={{ null }}>Выберите автомобиль</option>
            @endif
            @forelse ($cars as $car)
                <option 
                    value="{{ $car->id }}"
                    @if(isset($traffic->car_id))
                        @if($traffic->car_id == $car->id)
                            selected
                        @endif
                    @endif
                >
                   {{ $car->brand->name }}, {{ $car->model }}
                </option>
            @empty
                <option value={{ null }}>Не найдено автомобилей</option>
            @endforelse
        </select>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Начало маршрута :</label>
    <div class="controls">
    <input type="text" class="span11" name="route_from" placeholder="Введите адрес начала маршрута" required @if(isset($traffic->route_from)) value="{{ $traffic->route_from }}" @endif/>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Конец маршрута :</label>
    <div class="controls">
    <input type="text" class="span11" name="route_to" placeholder="Введите адрес конца маршрута" required @if(isset($traffic->route_to)) value="{{ $traffic->route_to }}" @endif/>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Груз :</label>
    <div class="controls">
    <input type="text" class="span11" name="cargo" placeholder="Введите название груза, например: молоко или бетон" required @if(isset($traffic->cargo)) value="{{ $traffic->cargo }}" @endif/>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Вес груза :</label>
    <div class="controls">
    <input type="text" class="span11" name="cargo_weight" placeholder="Введите вес, например: 13 л или 15 кг"  @if(isset($traffic->cargo_weight)) value="{{ $traffic->cargo_weight }}" @endif/>
    </div>
</div>