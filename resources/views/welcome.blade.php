@extends('layouts.app')
@section('content')

<body style="background-image: url('https://almthali.com/wp-content/uploads/2022/02/%D8%B5%D9%88%D8%B1_%D9%8A%D9%88%D9%85_%D8%A8%D8%AF%D9%86%D9%8A%D8%A7_%D8%A7%D9%84%D8%AA%D8%A7%D8%B3%D9%8A%D8%B3_%D9%84%D9%84%D8%AA%D8%B5%D9%85%D9%8A%D9%85.jpg');">
    <div class="container">
        <div class="row text-center d-flex justify-content-center mt-5">
             <div class="col-sm-3">
              <a href="{{route('showitems')}}" style="text-decoration:none;">
                <div class="card">
                    <div class="card-body" style="background-color: khaki;">
                        <i class="bi bi-phone text-center" style="font-size: 60px;"></i>
                            <h6>الهواتف الذكية </h6>
                    </div>
                </div>
              </a>
             </div>
            
         
             <div class="col-sm-3">
                <div class="card">
                    <div class="card-body" style="background-color: rgb(147, 239, 213);">
                        <i class="bi bi-house text-center" style="font-size: 60px;"></i>
                            <h6> أدوات المنزل  </h6>
                    </div>
                </div>
             </div>
             
        </div>

        <div class="row text-center d-flex justify-content-center mt-5">
            <div class="col-sm-3">
               <div class="card">
                   <div class="card-body" style="background-color: rgb(218, 141, 208);">
                       <i class="bi bi-power text-center" style="font-size: 60px;"></i>
                           <h6>أدوات كهربائية  </h6>
                   </div>
               </div>
            </div>

            <div class="col-sm-3">
               <div class="card">
                   <div class="card-body" style="background-color: rgb(165, 187, 230);">
                       <i class="bi bi-eraser text-center" style="font-size: 60px;"></i>
                           <h6> أدوات النظافة   </h6>
                   </div>
               </div>
            </div>
            
       </div>
    </div>
</body>

@endsection