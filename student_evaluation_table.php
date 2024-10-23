<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Table</title>
</head>
<body>
  
<?php
  include 'header_section_admin.php';
?>

  <section>
    <div class="m-5">
      <a href="admin_dashboard.php" class="btn btn-primary">
        <i class="bi bi-arrow-return-left mx-3"></i>Return</a>
    </div>

    <div class="m-5">
      <a href="#" class="btn btn-success">Add New User</a>
    </div>

    <div class="px-1 m-5">
      <h1>STUDENT EVALUATION STATUS</h1>
    </div>

    <div class="p-1 m-5">
    <table class="table table-light table-bordered text-center">
      <thead>
        <tr>
          <th scope="col">School ID</th>
          <th scope="col">Student Name</th>
          <th scope="col">Year & Section</th>
          <th scope="col">Status</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>111456</td>
          <td>Juan Dela Cruz</td>
          <td>1st Year - Section 1</td>
          <td>Pending</td>
          <td>
            <button class="btn btn-sm btn-danger btnDanger">
                <span>Remove</span>
            </button>
            <button class="btn btn-sm btn-success btnHold">
                <span>Hold</span>
            </button>
          </td>
        </tr>
        <tr>
          <td>111467</td>
          <td>Nelson Nellas</td>
          <td>2nd Year - Section 2</td>
          <td>Approved</td>
          <td>
            <button class="btn btn-sm btn-danger btnDanger">
                <span>Remove</span>
            </button>
            <button class="btn btn-sm btn-success btnHold">
                <span>Hold</span>
            </button>
          </td>
  
        </tr>
        <tr>
          <td>111789</td>
          <td>Jean Henri Mendoza</td>
          <td>3rd Year - Section 3</td>
          <td>Approved</td>
          <td>
            <button class="btn btn-sm btn-danger btnDanger">
              <span>Remove</span>
            </button>
            <button class="btn btn-sm btn-success btnHold">
              <span>Hold</span>
            </button>
          </td>
        </tr>
      </tbody>
      </table>
    </div>
    
  </section>
</body>
</html>