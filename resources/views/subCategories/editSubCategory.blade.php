<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Plus Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../../assets/vendors/select2/select2.min.css" />
    <link rel="stylesheet" href="../../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/demo_1/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
    <link href="/css/style.css" rel="stylesheet"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">



  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link flex-column">
              <div class="nav-profile-image">
                <img src="../../../assets/images/faces/face1.jpg" alt="profile" />
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex ms-0 mb-3 flex-column">
                <!-- <span class="font-weight-semibold mb-1 mt-2 text-center">Antonio Olson</span> -->
                <!-- <span class="text-secondary icon-sm text-center">$3499.00</span> -->
              </div>
            </a>
          </li>
          <li class="nav-item pt-3">
            <a class="nav-link d-block" href="../../index.html">
              <img class="sidebar-brand-logo" src="../../../assets/images/logo.svg" alt="" />
              <img class="sidebar-brand-logomini" src="../../../assets/images/logo-mini.svg" alt="" />
            </a>
            <form class="d-flex align-items-center" action="#">
              <div class="input-group">
                <div class="input-group-prepend">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control border-0" placeholder="Search" />
              </div>
            </form>
          </li>
          <li class="pt-2 pb-1">
            <span class="nav-item-head">Template Pages</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../index.html">
              <i class="mdi mdi-compass-outline menu-icon"></i>
              <span class="menu-title"><a href="/api/listCategory" style="text-decoration:none;"> Category</a></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title"><a href="/api/listSubCategory" style="text-decoration:none;"> Sub Category</a></span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Dropdowns</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/icons/mdi.html">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title"><span class="menu-title"><a href="/api/listProduct" style="text-decoration:none;">Products</a></span></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/basic_elements.html">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title"><a href="/api/listSpecification" style="text-decoration:none;">Specifications</a></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/charts/chartjs.html">
              <i class="mdi mdi-chart-bar menu-icon"></i>
              <span class="menu-title"><a href="/api/listContent" style="text-decoration:none;">Contents</a></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/tables/basic-table.html">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title"><a href="/api/listAboutItems" style="text-decoration:none;">About Items</a></span>
            </a>
          </li>
          <li class="nav-item pt-3">
            <a class="nav-link" href="http://bootstrapdash.com/demo/plus-free/documentation/documentation.html" target="_blank">
              <i class="mdi mdi-file-document-box menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_settings-panel.html -->
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
        
        <!-- partial -->
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch">
           
            
           
        
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Edit Category</h3>
              
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <form class="form-sample" 
                        action="{{ route('updateSubCategory',$subCategory->id) }}" 
                        method="POST" 
                        enctype="multipart/form-data">
                        {{ csrf_token() }}
                    <div class="row">
                    <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category Id</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" value="{{$subCategory->id}}"  name="id" placeholder="Enter Category Name"/>
                            </div>
                          </div>
                        </div>
                    </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" value="{{$subCategory->name}}" name="name" placeholder="Enter Category Name"/>
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
                                >{{$subCategory->desc}}
                            </textarea>                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Slug</label>
                            <div class="col-sm-9">
                              <input type="text" name="slug" value="{{$subCategory->slug}}" class="form-control" placeholder="Enter Category Slug"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Meta Title</label>
                            <div class="col-sm-9">
                              <input type="text" name="metaTitle" value="{{$subCategory->metaTitle}}" class="form-control" placeholder="Enter Meta Title" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Meta Description</label>
                            <div class="col-sm-9">
                              <input type="text" name="metaDesc" value="{{$subCategory->metaDesc}}"class="form-control" placeholder="Enter Meta Description" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Meta Keyword</label>
                            <div class="col-sm-9">
                              <input type="text" name="metaKeyword" value="{{$subCategory->metaKeyword}}"class="form-control" placeholder="Enter Meta Keyword" />
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
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../../assets/vendors/select2/select2.min.js"></script>
    <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../../assets/js/off-canvas.js"></script>
    <script src="../../../assets/js/hoverable-collapse.js"></script>
    <script src="../../../assets/js/misc.js"></script>
    <script src="../../../assets/js/settings.js"></script>
    <script src="../../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../../assets/js/file-upload.js"></script>
    <script src="../../../assets/js/typeahead.js"></script>
    <script src="../../../assets/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>