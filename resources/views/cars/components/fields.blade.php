<div class="control-group">
    <label class="control-label">Марка автомобиля:</label>
    <div class="controls">
        <select name="brand_id" required>
            @if(!isset($car->brand_id)) 
                <option value={{ null }}>Выберите марку</option>
            @endif
            @forelse ($brands as $brand)
                <option 
                    value="{{ $brand->id }}"
                    @if(isset($car->brand_id))
                        @if($car->brand_id == $brand->id)
                            selected
                        @endif
                    @endif
                >
                   {{ $brand->name }}
                </option>
            @empty
                <option value={{ null }}>Не найдено марок</option>
            @endforelse
        </select>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Название модели :</label>
    <div class="controls">
        <input type="text" name="model" class="span11" placeholder="Введите название модели" required @if(isset($car->model)) value="{{ $car->model }}" @endif/>
    </div>
</div>