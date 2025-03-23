@extends('layouts.app')

@section('content')

<!-- Inclure Bootstrap et notre CSS personnalisé -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


<div class="animated-bg">
    <div class="slideshow-container">
        <img src="{{ asset('images/images1.jpg') }}" class="slide" alt="Image 1">
        <img src="{{ asset('images/images2.jpg') }}" class="slide" alt="Image 2">
        <img src="{{ asset('images/images3.jpg') }}" class="slide" alt="Image 3">
    </div>
    
    <div class="custom-card text-white text-center">
        <h3 class="mb-4">🔑 Connexion</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input type="email" class="form-control custom-input" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control custom-input" id="password" name="password" placeholder="Mot de passe" required>
            </div>
            <button type="submit" class="btn custom-btn w-100">🚀 Se connecter</button>
        </form>

        <div class="text-center mt-3">
            <a href="#" class="text-white text-decoration-none">Mot de passe oublié ?</a>
        </div>
    </div>
</div>

<!-- Ajout des icônes FontAwesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

@endsection
