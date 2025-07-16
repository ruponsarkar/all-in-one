@extends('layout') @section('title', 'Login') @section('content')

<style>
   .paper-form {
      max-width: 700px;
      margin: auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.05);
    }
</style>

  <!-- Login Section -->
  <div class="container mt-5">
    <div class="paper-form">
      <h4 class="section-title">LOG IN</h4>
      <form action="user-login" method="post">
        @csrf
        <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control" name="email" placeholder="Enter username" />
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="password" placeholder="Enter password" />
        </div>

        <button type="submit" class="btn btn-primary btn-submit mt-3"><i class="fas fa-upload"></i> Login</button>


      </form>
    </div>
  </div>

  @endsection