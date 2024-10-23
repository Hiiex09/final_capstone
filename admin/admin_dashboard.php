
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMIN DASHBOARD</title>
</head>
<body>
  <section>
    <div class="b_container">
      <?php
        include("admin_header_section.php");
      ?>
       <div class="container-full p-5 m-3 rounded main_container">
          <div>
            <h1 class="fs-1 text-white">Hello Welcome Administrator</h1>
            <span>
              <p class="fs-5 text-white">School Year: 2024 - 2025, 1st Semester</p>
              <p class="fs-5 text-white">Status: On-Going</p>
            </span>
          </div>
          <div class="container-full mt-5">
            <div class="row justify-content-start align-items-center">
              <div class="col-4">
                <div class="card w-100">
                  <div class="card-body">
                    <h5 class="card-title">Teacher</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Teacher Table & Manage Teacher</h6>
                    <p class="card-text">To view the data click Manage Teacher below.</p>
                    <a href="teacher_table.php" class="btn btn-sm btn-primary text-white fs-6">
                      Manage Teacher
                    <span 
                      class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger fs-6">
                      99+
                      <span class="visually-hidden">unread messages</span>
                    </span>
                    </a>
                  </div>
                </div>
              </div>
              
              <div class="col-4">
                <div class="card w-100">
                  <div class="card-body">
                    <h5 class="card-title">Student</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Student Table & Manage Student</h6>
                    <p class="card-text">To view the data click Manage Student below.</p>
                    <a href="student_table.php" class="btn btn-sm btn-primary text-white fs-6">
                      Manage Student
                    <span 
                      class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger fs-6">
                      99+
                      <span class="visually-hidden">unread messages</span>
                    </span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-4">
                <div class="card w-100">
                  <div class="card-body">
                    <h5 class="card-title">Admin</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Admin Table & Manage Admin</h6>
                    <p class="card-text">To view the data click Manage Admin below.</p>
                    <a href="#" class="btn btn-sm btn-primary text-white fs-6">
                      Manage Admin
                    <span 
                      class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger fs-6">
                      99+
                      <span class="visually-hidden">unread messages</span>
                    </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
       </div>
    </div>
    
  </section>
  
  
</body>
</html>