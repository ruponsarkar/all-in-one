@extends('layout') @section('title', 'Register') @section('content')

<style>
   .register-container {
      max-width: 600px;
      margin: 40px auto;
      background: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.05);
    }
</style>
  <!-- Registration Form -->
  <div class="register-container">
    <h3 class="mb-4 text-center text-primary"><i class="fas fa-user-plus"></i> Register</h3>

    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Personal Name</label>
          <input type="text" class="form-control" placeholder="First Name" />
        </div>
        <div class="form-group col-md-6">
          <label>Middle Initial</label>
          <input type="text" class="form-control" placeholder="M" />
        </div>
      </div>

      <div class="form-group">
        <label>Family Name</label>
        <input type="text" class="form-control" placeholder="Last Name" />
      </div>

      <div class="form-group">
        <label>Affiliation / University</label>
        <input type="text" class="form-control" placeholder="University/Institution" />
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Department</label>
          <input type="text" class="form-control" placeholder="Department" />
        </div>
        <div class="form-group col-md-6">
          <label>City</label>
          <input type="text" class="form-control" placeholder="City" />
        </div>
      </div>

      <div class="form-group">
        <label>Country</label>
        <select class="form-control">
          <option selected disabled>Select Country</option>
          <option>India</option>
          <option>United States</option>
          <option>United Kingdom</option>
          <option>Australia</option>
          <!-- Add more countries -->
        </select>
      </div>

      <div class="form-group">
        <label>Your Email</label>
        <input type="email" class="form-control" placeholder="example@email.com" />
        <small class="form-text">We will send a confirmation email to this address.</small>
      </div>

      <div class="form-group">
        <label>Set your Password</label>
        <input type="password" class="form-control" placeholder="5 characters or longer" />
        <small class="form-text">Must be 5 characters or more</small>
      </div>

      <div class="form-group">
        <label>Repeat Password</label>
        <input type="password" class="form-control" placeholder="Re-enter password" />
      </div>

      <div class="form-group">
        <label>Enter the code shown below</label>
        <div class="captcha-box mb-2">A7C9D</div>
        <a href="#" class="text-info refresh-link"><i class="fas fa-sync-alt"></i> Refresh</a>
        <input type="text" class="form-control mt-2" placeholder="Enter Captcha Code" />
      </div>

      <button type="submit" class="btn btn-primary mt-3"><i class="fas fa-user-plus"></i> Register</button>
    </form>
  </div>


  @endsection

 