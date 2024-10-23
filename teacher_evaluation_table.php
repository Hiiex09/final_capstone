<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher Table</title>
</head>
<body>
  
<?php
  include 'header_section.php';
?>

  <section>
    <div class="m-5">
      <a href="admin_dashboard.php" class="btn btn-primary">
        <i class="bi bi-arrow-return-left mx-3"></i>Return</a>
    </div>

    <div class="px-1 m-5">
      <h1>TEACHER EVALUATION STATUS</h1>
    </div>

    <div class="p-1 m-5">
    <table class="table table-light table-bordered text-center">
      <thead>
        <tr>
          <th scope="col">Teacher ID</th>
          <th scope="col">Teacher Name</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="p-2">111456</td>
          <td class="p-2">Boss Thanos</td>
          <td class="p-2">
            <a class="nav-link btn btn-sm btn-primary text-center p-2" href="teacher_status.php">View</a>
          </td>
        </tr>
        <tr>
          <td class="p-2">111467</td>
          <td class="p-2">Boss Oscar</td>
          <td class="p-2">
            <button class="btn btn-sm btn-primary btnView">
                <span>View</span>
            </button>
          </td>
  
        </tr>
        <tr>
          <td class="p-2">111789</td>
          <td class="p-2">Boss Ampol</td>
          <td class="p-2">
            <button class="btn btn-sm btn-primary btnView">
              <span>View</span>
            </button>
          </td>
        </tr>
      </tbody>
      </table>
    </div>
    
  </section>
</body>
</html>