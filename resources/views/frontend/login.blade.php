@extends('frontend.master')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-500 via-purple-500 to-purple-600 flex items-center justify-center py-20 px-8">
  <div class="bg-white/95 backdrop-blur-lg rounded-3xl shadow-2xl p-12 w-full max-w-lg border border-white/20 mx-4">
    <div class="text-center mb-10">
      <h2 class="text-slate-800 font-bold text-3xl mb-2 tracking-tight">Welcome Back</h2>
      <p class="text-slate-500 text-base">Sign in to access your dashboard</p>
    </div>
    
    @if ($errors->any())
      <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 rounded-lg mb-6 text-sm">
        <i class="fa fa-exclamation-triangle mr-2"></i>
        {{ $errors->first() }}
      </div>
    @endif
    
    <form method="POST" action="{{ route('login.post') }}">
      @csrf
      
      <div class="mb-8 relative">
        <label for="email" class="block text-slate-800 font-semibold mb-4 text-sm uppercase tracking-wide">Email Address</label>
        <div class="relative">
          <input 
            type="email" 
            name="email" 
            id="email" 
            placeholder="Enter your email" 
            value="{{ old('email') }}" 
            required
            class="w-full pl-12 pr-4 py-4 border-2 border-slate-200 rounded-xl text-base transition-all duration-300 bg-slate-50 text-slate-800 focus:outline-none focus:border-indigo-500 focus:bg-white focus:shadow-lg focus:-translate-y-0.5"
          >
          <i class="fa fa-envelope absolute left-4 top-1/2 transform -translate-y-1/2 text-slate-400 text-lg transition-colors duration-300"></i>
        </div>
      </div>
      
      <div class="mb-8 relative">
        <label for="password" class="block text-slate-800 font-semibold mb-4 text-sm uppercase tracking-wide">Password</label>
        <div class="relative">
          <input 
            type="password" 
            name="password" 
            id="password" 
            placeholder="Enter your password" 
            required
            class="w-full pl-12 pr-4 py-4 border-2 border-slate-200 rounded-xl text-base transition-all duration-300 bg-slate-50 text-slate-800 focus:outline-none focus:border-indigo-500 focus:bg-white focus:shadow-lg focus:-translate-y-0.5"
          >
          <i class="fa fa-lock absolute left-4 top-1/2 transform -translate-y-1/2 text-slate-400 text-lg transition-colors duration-300"></i>
        </div>
      </div>
      
      <div class="flex justify-center mb-8">
        <button 
          type="submit" 
          class="w-48 bg-gradient-to-r from-indigo-500 to-purple-600 text-white border-0 py-3 px-8 rounded-xl text-sm font-semibold cursor-pointer transition-all duration-300 uppercase tracking-wider hover:-translate-y-1 hover:shadow-xl hover:shadow-indigo-500/25 active:translate-y-0"
        >
          <i class="fa fa-sign-in-alt mr-2"></i>
          Sign In
        </button>
      </div>
      
      <div class="flex justify-between items-center mb-6">
        <label class="flex items-center text-slate-500 text-sm">
          <input type="checkbox" name="remember" class="mr-2 w-auto p-0">
          Remember me
        </label>
        <a href="/" class="text-indigo-500 no-underline text-sm font-medium transition-colors duration-300 hover:text-purple-600">
          <i class="fa fa-arrow-left mr-1"></i>
          Back to site
        </a>
      </div>
    </form>
  </div>
</div>

<style>
  /* Custom focus states for icons */
  .relative input:focus + i {
    color: #6366f1;
  }
</style>
@endsection


