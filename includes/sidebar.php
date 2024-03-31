<nav class="sidebar">
    <!-- header -->
    <div class="sidebar-header">
        <h3>SMS</h3>
    </div>
    <!-- components -->
    <ul class="list-unstyled navbar-items m-4">
        <li class=" <?= trim($_SERVER['REQUEST_URI'], '/') == 'index.php' ? 'active' : '' ?>">

            <a href="index.php">Dashboard</a>
        </li>
        <li class=" <?= trim($_SERVER['REQUEST_URI'], '/') == 'student.php' ? 'active' : '' ?>">

            <a href="student.php">Student</a>
        </li>
        <li class=" <?= trim($_SERVER['REQUEST_URI'], '/') == 'course.php' ? 'active' : '' ?>">

            <a href="course.php">Course</a>
        </li>
        <li class=" <?= trim($_SERVER['REQUEST_URI'], '/') == 'teacher.php' ? 'active' : '' ?>">

            <a href="teacher.php">Teacher</a>
        </li>
        <li class=" <?= trim($_SERVER['REQUEST_URI'], '/') == 'something.php' ? 'active' : '' ?>">

            <a href="something.php">something</a>
        </li>
    </ul>
</nav>