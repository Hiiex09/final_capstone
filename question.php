<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Forums</title>
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

    <div class="container-lg m-5">
      <h1>
        <div>CEC FORUM</div>
      </h1>

      <div>
      <form>
        <div class="mb-3">
          <h1>
            <label for="exampleInputEmail1" class="form-label fs-4">Enter A New Questionaire</label>
          </h1>
          <label class="m-1">Title</label>
          <input type="email" class="form-control m-1" id="exampleInputEmail1" placeholder="Title">
          <label class="m-1">Question</label>
          <input type="email" class="form-control m-1" id="exampleInputEmail1" placeholder="Question">
        </div> 
        <input type="submit" value="Insert New Forum" class="btn btn-sm btnSubmit">
      </form>
      </div>
    </div>
  <div class="container-lg m-5">
    <div class="row">
      <div class="col-5">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Questionaier</th>
              <th scope="col">Operation</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <!-- Question 1 -->
                <div class="col-12">
                  <div class="m-2">
                    <div class="m-2">1. Teaching Quality</div>
                    <p class="m-2">How would you rate the teacher's knowledge of the subject?</p>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault1" id="Excellent">
                      <label class="form-check-label" for="Excellent">Excellent</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault1" id="Good">
                      <label class="form-check-label" for="Good">Good</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault1" id="Average">
                      <label class="form-check-label" for="Average">Average</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault1" id="Poor">
                      <label class="form-check-label" for="Poor">Poor</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault1" id="Very Poor">
                      <label class="form-check-label" for="Very Poor">Very Poor</label>
                    </div>
                  </div>
                </div>
                        <!-- Question 2 -->
                    <div class="col-12">
                      <div class="m-2">
                      <div class="m-2">2. Clarity of Instruction</div>
                      <p class="m-2">How effectively does the teacher explain complex topics in a way that is easy to understand?</p>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault2" id="Excellent">
                        <label class="form-check-label" for="Excellent">Excellent</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault2" id="Good">
                        <label class="form-check-label" for="Good">Good</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault2" id="Average">
                        <label class="form-check-label" for="Average">Average</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault2" id="Poor">
                        <label class="form-check-label" for="Poor">Poor</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault2" id="Very Poor">
                        <label class="form-check-label" for="Very Poor">Very Poor</label>
                      </div>
                    </div>
                  </div>
                   <!-- Question 3 -->
                  <div class="col-12">
                  <div class="m-2">
                    <div class="m-2">3. Classroom Management</div>
                    <p class="m-2">How well does the teacher maintain a productive and respectful learning environment?</p>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Excellent">
                      <label class="form-check-label" for="Excellent">Excellent</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Good">
                      <label class="form-check-label" for="Good">Good</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Average">
                      <label class="form-check-label" for="Average">Average</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Poor">
                      <label class="form-check-label" for="Poor">Poor</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Very Poor">
                      <label class="form-check-label" for="Very Poor">Very Poor</label>
                    </div>
                  </div>
                  </div>

                    <!-- Question 4 -->
                  <div class="col-12">
                  <div class="m-2">
                    <div class="m-2">4. Engagement with Students</div>
                    <p class="m-2">How well does the teacher engage students and encourage participation in class discussions?</p>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Excellent">
                      <label class="form-check-label" for="Excellent">Excellent</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Good">
                      <label class="form-check-label" for="Good">Good</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Average">
                      <label class="form-check-label" for="Average">Average</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Poor">
                      <label class="form-check-label" for="Poor">Poor</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Very Poor">
                      <label class="form-check-label" for="Very Poor">Very Poor</label>
                    </div>
                  </div>
                  </div>

                  <!-- Question 5 -->
                  <div class="col-12">
                  <div class="m-2">
                    <div class="m-2">5. Support and Availability</div>
                    <p class="m-2">Is the teacher available and approachable when you need help outside of class hours?</p>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Excellent">
                      <label class="form-check-label" for="Excellent">Excellent</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Good">
                      <label class="form-check-label" for="Good">Good</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Average">
                      <label class="form-check-label" for="Average">Average</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Poor">
                      <label class="form-check-label" for="Poor">Poor</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Very Poor">
                      <label class="form-check-label" for="Very Poor">Very Poor</label>
                    </div>
                  </div>
                  </div>
                  
              </td>
              <td>
               <button class="btn btn-danger">Remove</button>
              </td>
            </tr>
            <tr></tr>
          </tbody>
          </table>
          </div>
      </div>
  </div>
  
  </section>
</body>
</html>