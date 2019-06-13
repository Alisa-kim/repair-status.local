<div class="form-group">
    <label for="name">Имя пользователя</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
            name="name" value="{{ old ('name') }}">
</div>
<div class="form-group">
    <label for="email">Адрес электронной почты</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
            name="email" value="{{ old ('email') }}">
</div>
<div class="form-group">
    <label for="password">Пароль</label>
    <input type="text" class="form-control @error('password') is-invalid @enderror" id="password"
            name="password" value="{{ old ('password') }}">
</div>

<div class="form-group">
    <label for="role">Роль пользователя</label>
    <select class="form-control @error('role') is-invalid @enderror" id="role" name="role">
      <option value="dmin">Администратор</option>
      <option value="seller">Продавец-консультант</option>
      <option value="master">Мастер по ремонту</option>
    </select>
  </div>

<button type="submit" class="btn btn-primary"> Сохранить </button>
