@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h3>
                  Пользователи
                   <a class="btn btn-success float-right" href="{{ route('admin.users.create')}}" role="button">Добавить</a>
                </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col" style="width: 1%">#</th>
                          <th scope="col" style="width: 20%">Ф.И.О.</th>
                          <th scope="col" style="width: 20%">Должность</th>
                          <th scope="col" class="text-right" style="width: 20%">Действие</th>
                        </tr>
                      </thead>
                      <tbody>

                        @forelse($items as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->position}}</td>
                                <td> {{-- кнопки для действий --}} </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">
                                    нет пользователей
                                </td>
                            </tr>
                        @endforelse
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
