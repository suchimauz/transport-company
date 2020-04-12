<div class="control-group">
    <label class="control-label">Название марки:</label>
    <div class="controls">
    <input type="text" class="span11" name="name" placeholder="Введите марку автомобиля (уникальное)" required @if(isset($brand->name)) value="{{ $brand->name }}" @endif/>
    </div>
</div>