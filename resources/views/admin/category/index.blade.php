@extends('layouts.admin_layout')
@section('title')Категории-главная@endsection
@section('content')
<ul>
        @foreach ($categories as $category)

        <li>{{ $category->category_name }}</li>
        @endforeach
        {{ $categories->links() }}
    </ul>
@endsection
