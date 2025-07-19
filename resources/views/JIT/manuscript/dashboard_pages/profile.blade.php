
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
 
   <!-- Paper Submission Section -->
   <div class="container mt-4">
     <div class="paper-form">
       <h4 class="section-title">User Profile</h4>
       @if($authUser)

       <div>
        <span class="font-weight-bold">  Name:  </span> <span> {{ $authUser->first_name }} {{ $authUser->last_name }}</span>
       </div>
       <div>
        <span class="font-weight-bold">  Email:  </span> <span> {{ $authUser->email }} </span>
       </div>
       <div>
        <span class="font-weight-bold">  University:  </span> <span> {{ $authUser->university }} </span>
       </div>
       <div>
        <span class="font-weight-bold">  Department:  </span> <span> {{ $authUser->department }} </span>
       </div>
       <div>
        <span class="font-weight-bold">  City:  </span> <span> {{ $authUser->city }} </span>
       </div>
       <div>
        <span class="font-weight-bold">  Country:  </span> <span> {{ $authUser->country }} </span>
       </div>

       @endif
     </div>
   </div>
 
 