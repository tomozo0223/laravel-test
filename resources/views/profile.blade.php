@extends('layouts.app')

@section('title', 'プロフィールページ')

@section('content')
    <h1>Profile</h1>
    <h2>ようこそ{{ $name }}さん!</h2>
    @if ($is_admin)
        <p>あなたは管理者です</p>
    @else
        <p>あなたは一般Peopleです</p>
    @endif
    <ul>
        @foreach ($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
    {{-- ログイン状態なら表示 --}}
    @auth
        <p>ログイン中です</p>
        <button>ログアウト</button>
    @endauth
    @guest
        <button>ログイン</button>
        <p>非ログイン中です</p>
    @endguest

    <img src="{{ asset('images/261a8ca4-c196-4d08-99af-fdda0bedf56b.jpg.png') }}" alt="">

@endsection

<x-alert bg="bg-rose-600" role="alert">
    <h1>Test</h1>
    <x-slot:title>
        Light
    </x-slot:title>
</x-alert>
