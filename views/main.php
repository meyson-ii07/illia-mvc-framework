<div class="w-70">
    <h1>Add student</h1>
    <form method="get" action="">
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" class="form-control" id="firstname" placeholder="Firstname">
            <?php
                foreach ($student->getErrors('firstname') as $error) {
                    echo "<small class=\"form-text text-danger\">{$error}</small>";
                }
            ?>

        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control" id="lastname" placeholder="Lastname">
            <?php
            foreach ($student->getErrors('lastname') as $error) {
                echo "<small class=\"form-text text-danger\">{$error}</small>";
            }
            ?>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            <?php
            foreach ($student->getErrors('email') as $error) {
                echo "<small class=\"form-text text-danger\">{$error}</small>";
            }
            ?>
        </div>
        <div class="form-group">
            <label for="course">Course</label>
            <input type="text" class="form-control" id="course" aria-describedby="course" placeholder="Course">
            <?php
            foreach ($student->getErrors('course') as $error) {
                echo "<small class=\"form-text text-danger\">{$error}</small>";
            }
            ?>
        </div>
        <div class="form-group">
            <label for="faculty">Faculty</label>
            <input type="text" class="form-control" id="faculty" aria-describedby="faculty" placeholder="Faculty">
            <?php
            foreach ($student->getErrors('faculty') as $error) {
                echo "<small class=\"form-text text-danger\">{$error}</small>";
            }
            ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>