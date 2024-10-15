@extends('layouts.app')

@section('title', 'USER EDIT')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">

    <div class="container">
        <form class="form signup" method="POST" action="{{ route('user.update', ['user' => $user->id]) }}">

            @csrf
            @method('PATCH')

            <h2>EDIT USER</h2>

            <div class="inputBox">
                @error('document_number')
                    <h5>{{ $message }}</h5>
                @enderror
            </div>

            <div class="first-row">
                <div class="inputBox">
                    <input type="text" name="name" required value="{{ old('name', $user->name) }}" autofocus
                        autocomplete="name" />
                    <i class="fas fa-user-circle"></i>
                    <span>NAME</span>
                    @error('name')
                        <h5>{{ $message }}</h5>
                    @enderror
                </div>

                <div class="inputBox">
                    <input type="text" name="last_name" required value="{{ old('last_name', $user->last_name) }}"
                        autocomplete="last_name" />
                    <i class="fas fa-font"></i>
                    <span>LAST NAME</span>
                    @error('last_name')
                        <h5>{{ $message }}</h5>
                    @enderror
                </div>
            </div>

            <div class="second-row">
                <div class="inputBox">
                    <input type="text" name="telephone" required value="{{ old('telephone', $user->telephone) }}"
                        autocomplete="telephone" />
                    <i class="fas fa-phone"></i>
                    <span>TELEPHONE</span>
                    @error('telephone')
                        <h5>{{ $message }}</h5>
                    @enderror
                </div>

                <div class="inputBox">
                    <input type="email" name="email" required value="{{ old('email', $user->email) }}"
                        autocomplete="email" />
                    <i class="fas fa-envelope"></i>
                    <span>EMAIL</span>
                    @error('email')
                        <h5>{{ $message }}</h5>
                    @enderror
                </div>
            </div>

            <div class="third-row">
                <div class="selection">
                    <i class="fas fa-id-card"></i>
                    <select name="document_type" required autocomplete="document_type">
                        <option value="" disabled></option>
                        <option value="CC" @if (old('document_type', $user->document_type) == 'CC') selected @endif>Cédula Ciudadanía</option>
                        <option value="TI" @if (old('document_type', $user->document_type) == 'TI') selected @endif>Tarjeta Identidad</option>
                        <option value="CE" @if (old('document_type', $user->document_type) == 'CE') selected @endif>Cédula Extranjería</option>
                        <option value="PA" @if (old('document_type', $user->document_type) == 'PA') selected @endif>Pasaporte</option>
                    </select>
                    <span>DOCUMENT TYPE</span>
                    <div class="arrow-down"></div>
                    @error('document_type')
                        <h5>{{ $message }}</h5>
                    @enderror
                </div>

                <div class="inputBox">
                    <input type="text" name="document_number" required
                        value="{{ old('document_number', $user->document_number) }}" autocomplete="document_number" />
                    <i class="fas fa-address-card"></i>
                    <span>DOCUMENT NUMBER</span>
                </div>
            </div>

            <div class="inputBox">
                <input type="submit" value="UPDATE" />
            </div>

            <div class="backBox">
                <a class="back" href=" {{ route('user.index') }}">BACK</a>
            </div>

        </form>
    </div>
@endsection
