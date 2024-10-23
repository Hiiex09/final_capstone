<?php
  include("header_table_section.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher Table</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
 <section>
  <div class="container-full p-3">
    <div class="container-full rounded shadow bg-light">
      <div class="fs-3 p-3 d-flex justify-content-between align-items-center cec-bgck text-white rounded-top">
        <div>
            <h1 class="h3">Teacher Evaluation Status</h1>
        </div>
        <div>
          <form class="d-flex" role="search" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-light fs-6 text-black fw-semibold" type="submit">Search</button>
          </form>
        </div>
      </div>

      <div class="table-responsive p-2">
          <table class="table table-striped table-hover table-bordered align-middle">
            <thead class="table-info text-center">
              <tr>
                <th scope="col">Teacher_ID</th>
                <th scope="col">School_ID</th>
                <th scope="col">FullName</th>
                <th scope="col">Email</th>
                <th scope="col">Year & Section</th>
                <th scope="col">Department</th>
                <th scope="col">Subject</th>  
                <th scope="col">Teacher_Count</th> 
                <th scope="col">Is_Done</th> 
                <th scope="col">Date_Created</th> 
                <th scope="col">Action</th> 
              </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                <th scope="row">1</th>
                <td>2</td>
                <td>Nelson Mendoza</td>
                <td>nelson@gmail.com</td>
                <td>4th year & Section 1</td>
                <td>BSIT</td>
                <td>Data Structure & Algorithm</td>
                <td>0</td>
                <td>Pending</td>
                <td>10/23/2024</td>
                <td>
                  <div class="d-flex flex-row justify-content-center align-items-center">
                    <div>
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm px-5 mb-1 btn-dark" data-bs-toggle="modal" data-bs-target="#ratingsTeacher">
                        <i class="bi bi-eye fs-6 px-1"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal modal-lg fade" id="ratingsTeacher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              <div class="row justify-content-center align-items-center">
                                  <!-- Profile Section -->
                                  <div class="col-12 col-md-4 col-lg-3 text-center mb-4">
                                    <img src="../Profiles User/Teacher 1.png" class="img-thumbnail" alt="Boss Thanos">
                                    <h2 class="m-2">Boss Thanos</h2>
                                    <div class="fs-5">IT Department</div>
                                  </div>
                                  
                                  <!-- Ratings Section -->
                                  <div class="col-12 col-md-8 col-lg-4 mb-4">
                                    <h2 class="display-6">Ratings Insight</h2>
                                    <div class="mb-3">
                                      <h3 class="d-flex align-items-center">
                                        <span class="ratings-num display-6">3.5</span>
                                        <i class="bi bi-star-fill star text-warning mx-1"></i>
                                        <i class="bi bi-star-fill star text-warning mx-1"></i>
                                        <i class="bi bi-star-fill star text-warning mx-1"></i>
                                      </h3>
                                    </div>
                                    <!-- Progress bars for various ratings -->
                                    <div class="mb-3">
                                      <div class="fs-5">Teaching Quality</div>
                                      <div class="progress">
                                        <div class="progress-bar bg-success" style="width: 25%"></div>
                                      </div>
                                    </div>
                                    <div class="mb-3">
                                      <div class="fs-5">Communication & Skills</div>
                                      <div class="progress">
                                        <div class="progress-bar bg-info" style="width: 50%"></div>
                                      </div>
                                    </div>
                                    <div class="mb-3">
                                      <div class="fs-5">Classroom Management</div>
                                      <div class="progress">
                                        <div class="progress-bar bg-warning" style="width: 75%"></div>
                                      </div>
                                    </div>
                                    <div class="mb-3">
                                      <div class="fs-5">Knowledge & Expertise</div>
                                      <div class="progress">
                                        <div class="progress-bar bg-danger" style="width: 100%"></div>
                                      </div>
                                    </div>
                                    <div class="mb-3">
                                      <div class="fs-5">Student Engagement</div>
                                      <div class="progress">
                                        <div class="progress-bar bg-danger" style="width: 100%"></div>
                                      </div>
                                    </div>
                                  </div>

                                  <!-- Carousel Section -->
                                  <div class="col-12 col-lg-5">
                                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                      <div class="carousel-inner">
                                        <!-- First carousel item -->
                                        <div class="carousel-item active" data-bs-interval="3000">
                                          <div class="card m-4">
                                            <div class="card-body">
                                              <h5 class="card-title fs-6">Anonymous</h5>
                                              <p class="card-text fs-6">It's undeniable that we should be together...</p>
                                            </div>
                                          </div>
                                          <div class="card m-4">
                                            <div class="card-body">
                                              <h5 class="card-title fs-6">Anonymous</h5>
                                              <p class="card-text fs-6">One, you're like a dream come true...</p>
                                            </div>
                                          </div>
                                          <div class="card m-4">
                                            <div class="card-body">
                                              <h5 class="card-title fs-6">Anonymous</h5>
                                              <p class="card-text fs-6">Four, repeat steps one through three...</p>
                                            </div>
                                          </div>
                                        </div>
                                        
                                        <!-- Second carousel item -->
                                        <div class="carousel-item" data-bs-interval="4000">
                                          <div class="card m-4">
                                            <div class="card-body">
                                              <h5 class="card-title fs-6">User Comment</h5>
                                              <p class="card-text fs-6">It's so incredible the way things work themselves out...</p>
                                            </div>
                                          </div>
                                          <div class="card m-4">
                                            <div class="card-body">
                                              <h5 class="card-title fs-6">User Comment</h5>
                                              <p class="card-text fs-6">Undesirable for us to be apart...</p>
                                            </div>
                                          </div>
                                          <div class="card m-4">
                                            <div class="card-body">
                                              <h5 class="card-title fs-6">User Comment</h5>
                                              <p class="card-text fs-6">One, you're like a dream come true...</p>
                                            </div>
                                          </div>
                                        </div>
                                        
                                        <!-- Third carousel item -->
                                        <div class="carousel-item" data-bs-interval="5000">
                                          <div class="card m-4">
                                            <div class="card-body">
                                              <h5 class="card-title fs-6">Bruce Wayne</h5>
                                              <p class="card-text fs-6">Some quick example text to build on the card title...</p>
                                            </div>
                                          </div>
                                          <div class="card m-4">
                                            <div class="card-body">
                                              <h5 class="card-title fs-6">Bruce Wayne</h5>
                                              <p class="card-text fs-6">Repeat steps one through three...</p>
                                            </div>
                                          </div>
                                          <div class="card m-4">
                                            <div class="card-body">
                                              <h5 class="card-title fs-6">Bruce Wayne</h5>
                                              <p class="card-text fs-6">If ever I believe my work is done...</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      
                                      <!-- Carousel controls -->
                                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                      </button>
                                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div>
                      <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-success px-5 fs-6 mb-1" data-bs-toggle="modal" data-bs-target="#updateTeacher">
                          <i class="bi bi-gear px-1"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal modal-lg fade" id="updateTeacher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Teacher Profile</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="container">
                                  <form
                                    action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>"
                                    method="POST">
                                    <div class="row justify-content-center align-items-center">
                                      <div class="col-3">
                                        <div class="mb-3 w-100">
                                          <label for="exampleInputEmail1" class="form-label">First Name</label>
                                          <input type="text" class="form-control" required>
                                          <label for="exampleInputEmail1" class="form-label">Last Name</label>
                                          <input type="text" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                          
                                        </div>
                                      </div>
                                      <div class="col-3">
                                        <div class="mb-3">
                                          <label for="exampleInputPassword1" class="form-label">Password</label>
                                          <input type="password" class="form-control" required>
                                        </div>
                                      </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                                  </form>
                                </div>
                              </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                    <div>
                      <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-sm px-5" data-bs-toggle="modal" data-bs-target="#removeTeacher">
                          <i class="bi bi-trash px-1"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="removeTeacher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>

      </div>

      <div class="container-full m-3 p-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTeacher">
          Add Teacher
        </button>

        <!-- Modal -->
        <div class="modal modal-lg fade" id="addTeacher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>
 </section>

<script>
  function previewImage(event) {
    const imgElement = document.getElementById('imgss');
    const file = event.target.files[0];
    if (file) {
      imgElement.src = URL.createObjectURL(file);
      imgElement.classList.remove('d-none'); // Show the image once uploaded
    }
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
