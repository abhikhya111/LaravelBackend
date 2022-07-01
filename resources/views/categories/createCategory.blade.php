<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Xtra Tools</title>
   
    <link href="/css/style.css" rel="stylesheet"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">



  </head>
  <body>
    
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      @include('partials/Sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_settings-panel.html -->
        
        <!-- partial -->
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch">
          
            
            
           
           
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Create Category</h3>
              
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <form class="form-sample" 
                        action="{{ route('storeCategory') }}" 
                        method="POST" 
                        enctype="multipart/form-data">
                        {{ csrf_token() }}
                    <div class="row">
                    <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category Id</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="id" placeholder="Enter Category Name"/>
                            </div>
                          </div>
                        </div>
                    </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="name" placeholder="Enter Category Name"/>
                            </div>
                          </div>
                        </div>
                       
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                            <textarea
                                class="form-control"
                                id="exampleTextarea1"
                                rows="4"
                                placeholder="Enter Category Description" 
                                name="desc"
                                >
                            </textarea>                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Slug</label>
                            <div class="col-sm-9">
                              <input type="text" name="slug" class="form-control" placeholder="Enter Category Slug"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Meta Title</label>
                            <div class="col-sm-9">
                              <input type="text" name="metaTitle" class="form-control" placeholder="Enter Meta Title" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Meta Description</label>
                            <div class="col-sm-9">
                              <input type="text" name="metaDesc" class="form-control" placeholder="Enter Meta Description" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Meta Keyword</label>
                            <div class="col-sm-9">
                              <input type="text" name="metaKeyword" class="form-control" placeholder="Enter Meta Keyword" />
                            </div>
                          </div>
                        </div>
                        
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                        <div class="form-group row">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default" />
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" />
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-warning" type="button"> Upload </button>
                          </span>
                        </div>
                       </div>
                      </div>
                     </div>
                     <button type="submit" class="btn btn-primary me-2"> Submit </button>
                      <button class="btn btn-secondary"><a style="color:white; text-decoration:none" href="/api/listCategory">Cancel</a></button>
                    </form>
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
    
  </body>
</html>