<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="/css/style.css" rel="stylesheet"/>
  
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      @include('partials/Sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch">
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Images of Products</h3>

              <input type="file" id="myFileInput"/>

            </div>
            <br>
            <br>
            <div class="row">
            <div id="placehere">

              </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Product Images</h4>

                    <input type="file" id="myFileImage">
                    <img id="imagePreview" src="" alt="preview"/>

                    <div class="table-responsive">
                    
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Product Name</th>
                            <th>Image 1</th>
                            <th>Image 2</th>
                            <th>Image 3</th>
                            <th>Image 4</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($productImage as $img)
                        <tr>
                            <td>{{$img->product_name}}</td>
                            <td>
                            
                              @if(empty($img->image1))
                              <form action="{{ route('addImage', ['product_id'=>$img->product_id,'name'=>'image1'])}}" method="POST">  
                                  <label>Enter image SRC</label>
                                  <input  type="text" class="form-control" name="img_src" placeholder="Enter image src"/>
                                  <button class="btn btn-primary" style="margin-top:20px" type="submit">Save</button>
                              </form>
                                  @else
                                  <img src="{{$img->image1}}" alt="Upload Imaged"/>

                                  <form action="{{ route('removeImage', ['product_id'=>$img->product_id,'name'=>'image1'])}}" method="POST">  
                                    @csrf  
                                    
                                    <button class="btn btn-success" type="submit">Remove</button>  
                                </form>
                              @endif
                            
                                
                                    
                            </td>
                              


                          <td>
                          @if(empty($img->image2))
                              <form action="{{ route('addImage', ['product_id'=>$img->product_id,'name'=>'image2'])}}" method="POST">  
                                  <label>Enter image SRC</label>
                                  <input  type="text" class="form-control" name="img_src" placeholder="Enter image src"/>
                                  <button class="btn btn-primary" style="margin-top:20px" type="submit">Save</button>
                              </form>
                                  @else
                                  <img src="{{$img->image2}}" alt="Upload Imaged"/>

                                  <form action="{{ route('removeImage', ['product_id'=>$img->product_id,'name'=>'image2'])}}" method="POST">  
                                    @csrf  
                                    
                                    <button class="btn btn-success" type="submit">Remove</button>  
                                </form>
                              @endif
                        
                          </td>
                           

                            <td> @if(empty($img->image3))
                              <form action="{{ route('addImage', ['product_id'=>$img->product_id,'name'=>'image3'])}}" method="POST">  
                                  <label>Enter image SRC</label>
                                  <input  type="text" class="form-control" name="img_src" placeholder="Enter image src"/>
                                  <button class="btn btn-primary" style="margin-top:20px" type="submit">Save</button>
                              </form>
                                  @else
                                  <img src="{{$img->image3}}" alt="Upload Imaged"/>

                                  <form action="{{ route('removeImage', ['product_id'=>$img->product_id,'name'=>'image3'])}}" method="POST">  
                                    @csrf  
                                    
                                    <button class="btn btn-success" type="submit">Remove</button>  
                                </form>
                              @endif

                            </td>
                            
                            <td>
                            @if(empty($img->image4))
                              <form action="{{ route('addImage', ['product_id'=>$img->product_id,'name'=>'image4'])}}" method="POST">  
                                  <label>Enter image SRC</label>
                                  <input  type="text" class="form-control" name="img_src" placeholder="Enter image src"/>
                                  <button class="btn btn-primary" style="margin-top:20px" type="submit">Save</button>
                              </form>
                                  @else
                                  <img src="{{$img->image4}}" alt="Upload Imaged"/>

                                  <form action="{{ route('removeImage', ['product_id'=>$img->product_id,'name'=>'image4'])}}" method="POST">  
                                    @csrf  
                                    
                                    <button class="btn btn-success" type="submit">Remove</button>  
                                </form>
                              @endif
                            </td>
                            

                    

                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
             
             
          
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
    <script>
      document.querySelector('#myFileInput').addEventListener('change', function(){
          const reader = new FileReader();
          reader.addEventListener('load', () => {
            console.log(reader.result);
          })        
      })
     
      </script>
  </body>
</html>