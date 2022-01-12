@extends('layouts.admin_layout')
@section('title')Меню@endsection
@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Название меню</th>
            <th scope="col">Управление</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($menus as $menu)
            <tr>
                <th scope="row">{{ $menu->id }}</th>
                <td>{{ $menu->menu }}</td>
                <td> <button class="btn btn-danger">Удалить</button> <button class="btn btn-warning">Редактировать</button> <button class="btn btn-info">Подробнее</button></td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $menus->links() }}

@endsection
