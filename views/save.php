<div class="w-70">
    <h1>Add student</h1>
    <form method="post" action="/">
        <input type="hidden" name="id" class="form-control" value="<?= $student->getId() ?>" id="id" placeholder="Firstname">
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" class="form-control" value="<?= $student->getFirstname() ?>" id="firstname" placeholder="Firstname">

            <?php
            foreach ($student->getErrors('firstname') as $error) {
                echo "<small class=\"form-text text-danger\">{$error}</small>";
            }
            ?>

        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" class="form-control" value="<?= $student->getLastname() ?>" id="lastname" placeholder="Lastname">
            <?php
            foreach ($student->getErrors('lastname') as $error) {
                echo "<small class=\"form-text text-danger\">{$error}</small>";
            }
            ?>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" value="<?= $student->getEmail() ?>" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            <?php
            foreach ($student->getErrors('email') as $error) {
                echo "<small class=\"form-text text-danger\">{$error}</small>";
            }
            ?>
        </div>
        <div class="form-group">
            <label for="course">Course</label>
            <input type="text" name="course" class="form-control" value="<?= $student->getCourse() ?>" id="course" aria-describedby="course" placeholder="Course">
            <?php
            foreach ($student->getErrors('course') as $error) {
                echo "<small class=\"form-text text-danger\">{$error}</small>";
            }
            ?>
        </div>
        <div class="form-group">
            <label for="faculty">Faculty</label>
            <input type="text" name="faculty" class="form-control" id="faculty" value="<?= $student->getFaculty() ?>" aria-describedby="faculty" placeholder="Faculty">
            <?php
            foreach ($student->getErrors('faculty') as $error) {
                echo "<small class=\"form-text text-danger\">{$error}</small>";
            }
            ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>