<div class="control-group">
    <label class="control-label">ФИО :</label>
    <div class="controls">
        <input type="text" class="span11" name="name" placeholder="Введите ФИО водителя"
            @if(isset($driver->name)) value="{{ $driver->name }}" @endif 
            required
        />
    </div>
</div>
<div class="control-group">
    <label class="control-label">Стаж :</label>
    <div class="controls">
        <input type="number" class="span11" name="experience" placeholder="Введите стаж работы водителя в годах"
            @if(isset($driver->experience)) value="{{ $driver->experience }}" @endif 
            required
        />
    </div>
</div>