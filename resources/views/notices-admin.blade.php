
<!doctype html>
<html class="no-js h-100" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="css/admin_styles/shards-dashboards.1.1.0.min.css">
</head>
<body class="h-100">

  <div class="container-fluid">
    <div class="row">
      <!-- Main Sidebar -->
      <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
        <div class="main-navbar">
          <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
            <a href="home.html" style="margin-left: 35px ; margin-top: 25px; font-weight: bold;">
              <span style="color: black">Peal To</span>
              <span style="color: #1DA1F2">&nbsp Police</span>
            </a>

            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
              <i class="material-icons">&#xE5C4;</i>
            </a>
          </nav>
        </div>
        <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
          <div class="input-group input-group-seamless ml-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-search"></i>
              </div>
            </div>
            <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
          </form>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              
              <li class="nav-item">
                <a class="nav-link " href="admin_components-blog-posts.html">
                  <i class="material-icons">vertical_split</i>
                  <span>Users Posts</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="admin_user-list.html">
                  <i class="material-icons">table_chart</i>
                  <span> User List</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="admin-profile-lite.html">
                  <i class="material-icons">person</i>
                  <span>Admin Profile</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="admin_journalist-list.html">
                  <i class="material-icons">person</i>
                  <span>Journalist List</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="admin_wanted-list.html">
                  <i class="material-icons">person</i>
                  <span>Wanted List</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="admin_missing-list.html">
                  <i class="material-icons">person</i>
                  <span>Missing List</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="admin_criminal-record.html">
                  <i class="material-icons">person</i>
                  <span>Criminal Record</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="admin_notice.html">
                  <i class="material-icons">table_chart</i>
                  <span> Notice</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="#">
                  <i class="material-icons">table_chart</i>
                  <span> Reward List</span>
                </a>
              </li>

            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">

          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Notice</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">List : </h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr style="background-color: black">
                          <th scope="col" class="border-0">#</th>
                          <th scope="col-md-9" class="border-0">Name of Files</th>
                          <th scope="col-md-3" class="border-0">Action-Delete</th>
                          
                        </tr>
                      </thead>

                      <tbody>


                        <tr>
                          <td>1</td>
                          <td>First Notice</td>
                          <td><i class="material-icons">delete_forever</i></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Second Notice</td>
                          <td><i class="material-icons">delete_forever</i></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Third Notice</td>
                          <td><i class="material-icons">delete_forever</i></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Fourth Notice</td>
                          <td><i class="material-icons">delete_forever</i></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Fifth Notice</td>
                          <td><i class="material-icons">delete_forever</i></td>
                        </tr>
                        <tr>
                          <td>#</td>
                          <td> <input type="file" name="image" /> </td>
                          <td> <button> Upload File </button> </td>
                        </tr>
                      </tbody>
                      
                    </table>

                    <!-- <div class="row">
                      <div class="col-25">
                        <button> Upload File </button>
                      </div>
                      <div class="col-75">
                        <input type="file" name="image" />
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
            
          </div>
          
        </main>
      </div>
    </div>

  </body>
  </html>