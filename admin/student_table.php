<?php
  include("header_table_section.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Table</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
 <section>
  <div class="container-full p-3">
    <div class="container-full rounded shadow bg-light">
      <div class="fs-3 p-3 d-flex justify-content-between align-items-center cec-bgck text-white rounded-top">
        <div>
            <h1 class="h3">Student Evaluation Status</h1>
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
                <th scope="col">Student_ID</th>
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
                  <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a href="#" class="btn btn-sm btn-dark px-5 text-white"><i class="bi bi-slash-circle"></i> Hold</a>
                  </div>
                  <div>
                     <!-- Button trigger modal -->
                      <button type="button" class="btn btn-sm btn-success px-4 fs-6 " data-bs-toggle="modal" data-bs-target="#updateTeacher">
                      <i class="bi bi-gear px-1 fs-6"></i> Update
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
                    <a href="#" class="btn btn-sm btn-danger px-4 text-white"><i class="bi bi-trash"></i> Remove</a>
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
