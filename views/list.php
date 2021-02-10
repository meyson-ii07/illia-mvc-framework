<div class="w-70">
    <h1>Students</h1>
    <a class="material-icons" href="/save">add</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
            <th scope="col">Course</th>
            <th scope="col">Faculty</th>
            <th scope="col">Controls</th>
        </tr>
        </thead>
        <tbody>
            <?php
                foreach ($students as $student) {
                   echo "<tr><td>{$student['id']}</td>
                        <td>{$student['firstname']}</td>
                        <td>{$student['lastname']}</td>
                        <td>{$student['email']}</td>
                        <td>{$student['course']}</td>
                        <td>{$student['faculty']}</td>
                        <td><a class='material-icons' href='/update?id={$student['id']}'>create</a><a class='material-icons' href='/delete?id={$student['id']}'>delete</a></td></tr>";
                }
            ?>
        </tbody>
    </table>
</div>