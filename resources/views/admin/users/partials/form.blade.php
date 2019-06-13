<div class="form-group">
    <label for="name">Имя пользователя</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
            name="name" value="{{ $item->name ?? old('name') }}">
</div>
<div class="form-group">
    <label for="email">Адрес электронной почты</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
            name="email" value="{{ $item->email ?? old('email') }}">
</div>
<div class="form-group">
    <label for="password">Пароль</label>
    <input type="text" class="form-control @error('password') is-invalid @enderror" id="password"
            name="password" value="{{ $item->password ?? old('password') }}">
</div>

<div class="form-group">
    <label for="role">Роль пользователя</label>
    <select class="form-control @error('role') is-invalid @enderror" id="role" name="role">
      <option value="admin" {{ (($item->role ?? old('role')) == "admin") ? "selected" : "" }}>Администратор</option>
      <option value="seller" {{ (($item->role ?? old('role')) == "seller") ? "selected" : "" }}>Продавец-консультант</option>
      <option value="master" {{ (($item->role ?? old('role')) == "master") ? "selected" : "" }}>Мастер по ремонту</option>
    </select>
  </div>

<button type="submit" class="btn btn-primary"> Сохранить </button>
