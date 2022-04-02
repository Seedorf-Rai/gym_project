
{{-- @import url('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />') --}}
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container ">
      <a class="navbar-brand" href="#" style="color: #9640FB">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/trainer">Our Trainers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Pricing</a>
          </li>
          
          <li class="nav-item">
           
              
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">
                  <button class="button-63" role="button">Login</button>
                </a>
                
            
          </li>
          <li class="nav-item">
           
            <a href="{{ route('login') }}" class="button-63">
              Register
            
            </a>
            
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
            <i class="fa-solid  fa-2x fa-cart-shopping"></i>

            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
