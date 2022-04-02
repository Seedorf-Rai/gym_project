@extends('frontend.app')
@section('name')
    Home Page
@endsection
@section('content')
<div class="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="background-color: white; height: 70vh;">
              <div class="start">
                  <div class="typed-js">
                     <span class="typed-js-child">
                 
                     <span>
                  </div>
                <div class="start-your" data-aos="fade-right">
                 <h1>Start Your </h1>
                    
               </div>  
               <div class="fitness" data-aos="fade-right">
                   <h1>Fitness Journey With </h1>
               </div>    
               <div class="us" data-aos="fade-right">
                   <h1>
                   Us.    
                   </h1></div> 
                   <div class="hero-para-div" data-aos="fade-left">
                       <p class="hero-para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium itaque dignissimos ad veniam vitae ipsam quisquam at odit quidem maiores.</p>    
                   </div> 
                  <div class="get-started-btn" data-aos="fade-left">
                   <a href="{{ route('login') }}">
                       <button class="button-63-get-started" role="button">Get Started</button>
                   </a>  
                  </div>         
              </div>
           
            </div>
            <div class="col-md-6">
                <div class="hero-image">
                <img class="img-fluid" src="/photo/workingout.png" alt="" >

                </div>
            </div>
        </div>
    </div>
    {{-- Hero Section Ends --}}
    <div class="space">

    </div>
     {{-- View Products and Details --}}
  <div class="container-fluid bg-light ">
   <div class="container ">
     {{-- View Products and Details --}}
   <div class="trainer-head">
     <div class="trainer-head-child my-5">
       <h1 class="get-trainer">Get Your Own Trainer</h1>
     </div>
   </div>
   <div class="space"></div>
   <div>
     <div class="row">
       <div class="col-md-5">
         <img class="img-fluid" src="/photo/trainer-removebg-preview.png" alt="">
       </div>
       <div class="col-md-1"></div>
       <div class="col-md-5 ">
          <h1 style="font-family: 'BIZ UDPMincho', serif;">Guidance From Professionals</h1>
          <div data-aos="fade-left">
            
          <p style="padding-top: 20px" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cumque laboriosam deleniti perferendis est iusto nesciunt quia ipsum, nisi dignissimos maiores odio corrupti architecto error quibusdam asperiores sunt impedit officiis!</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam, molestiae! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta ex deleniti dolores dolorem eligendi laborum nam repellendus. Necessitatibus, quidem vero.</p>
          </div>
          <div data-aos="fade-left" >
            <a href="/trainer" >
              <button class="button-63-get-started" role="button">Get Started</button>
          </a>
          </div>
       </div>
     </div>
   </div>
   <div class="space">

   </div>
  

   {{-- View Products and Details Ends --}}
  </div>
  </div>

   {{-- View Products and Details Ends --}}
   <div class="container">
     <div class="trainer-head">
       <div class="trainer-head-child">
         {{-- <div class="divider"></div> --}}
         <h1>Our Products</h1>
         {{-- <div class="divider"></div> --}}
       </div>
     </div>
     <div class="space"></div>
    <div class="responsive" data-aos="flip-left">
     
       <div>
         <div class="card" style="width: 18rem;">
           <img src="https://www.fastandup.in/images/product-img/fast-up-whey-advanced-rich-chocolate-1-825_1628574743.jpg" class="card-img-top" alt="...">
           <div class="card-body">
             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <button class="button-28" role="button">Enquire</button>

           </div>
         </div>
       </div>
       <div>
         <div class="card" style="width: 18rem;">
         <img src="https://cdn.pixabay.com/photo/2016/12/07/13/40/optimum-nutrition-1889486_960_720.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           <button class="button-28" role="button">Enquire</button>

         </div>
       </div></div>
       <div><div class="card" style="width: 18rem;">
         <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
         <div class="card-body">
           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           <button class="button-28" role="button">Enquire</button>

         </div>
       </div></div>
       <div><div class="card" style="width: 18rem;">
         <img src="https://cdn.webshopapp.com/shops/87334/files/373503110/image.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<button class="button-28" role="button">Enquire</button>
           
         </div>
       </div></div>
       <div><div class="card" style="width: 18rem;">
         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiE07dUG0liIHU7_S9Twdl11bSK7AqQTrUSg&usqp=CAU" class="card-img-top" alt="...">
         <div class="card-body">
           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<button class="button-28" role="button">Enquire</button>

         </div>
       </div>
     </div>
      
        
    </div>

   </div>
   <div class="space"></div>

@endsection