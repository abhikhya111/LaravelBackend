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
              <h3 class="page-title">Category List</h3>

            </div>
            <button type="button"  class="btn btn-warning"> <a href="/api/createCategory" style="color:white" >Add Category </a></button>
            <br>
            <br>
            <div class="row">
            
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Categories</h4>
                    
                    <div class="table-responsive">
                    
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Slug</th>
                            <!-- <th>Meta Title</th>
                            <th>Meta Description</th>
                            <th>Meta Keyword</th> -->
                            <th>Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>
                            {{$category->desc}}</td>
                            <td>{{$category->slug}}</td>
                            <!-- <td>{{$category->metaTitle}}</td>
                            <td>{{$category->metaDesc}}</td>
                            <td>{{$category->metaKeyword}}</td> -->
                            <td ><img src="{{$category->image}}"/></td>
                            <td>
                            <form action="{{ route('editCategory', $category->id)}}" method="GET">  
                            @csrf  
                            
                            <button class="btn btn-success" type="submit">Edit</button>  
                          </form>                             <button class="btn btn-danger"><a style="color:white; text-decoration:none" href="/api/listCategory">Delete</a></button>
                             
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
  </body>
</html>