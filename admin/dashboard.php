<?php include('../templates/header.php');

// User type verification
if ($_SESSION['usertable'] != 'admin')
    header("Location: /index.php");

?>

<div class="container mt-5 align-items-center">
    <div class="col text-center">
        <h1>Admin Dashboard</h1>
        <h2>Welcome, <?= $_SESSION['usersname'] ?> !</h2>
        <hr>

        <div class="container">


            <div id="adminCard" class="row row-cols-1 row-cols-md-3">
                <div class="col mb-5">
                    <a class="card border-0" href="/admin/register/admin.php">
                        <img src="/img/admin.svg" class="card-img-top" style="width: 70%; margin: auto;">
                        <div class="card-body" style="text-align: center;">
                            <h3 class="card-title">Admin</h3>
                        </div>
                    </a>
                </div>

                <div class="col mb-4">
                    <a class="card border-0" href="/admin/register/lecturer.php">
                        <img src="/img/lecturer.svg" class="card-img-top" style="width: 70%; margin: auto;">
                        <div class="card-body" style="text-align: center;">
                            <h3 class="card-title">Lecturer</h3>
                        </div>
                    </a>
                </div>

                <div class="col mb-4">
                    <a class="card border-0" href="/admin/register/student.php">
                        <img src="/img/student-card.svg" class="card-img-top" style="width: 70%; margin: auto;">
                        <div class="card-body" style="text-align: center;">
                            <h3 class="card-title">Student</h3>
                        </div>
                    </a>
                </div>

                <div class="col mb-4">
                    <a class="card border-0" href="/admin/register/subject.php">
                        <img src="/img/subject.svg" class="card-img-top" style="width: 70%; margin: auto; padding: 20px">
                        <div class="card-body" style="text-align: center;">
                            <h3 class="card-title">Subject</h3>
                        </div>
                    </a>
                </div>

                <div class="col mb-4">
                    <a class="card border-0" href="/admin/workload.php">
                        <img src="/img/workload.svg" class="card-img-top" style="width: 70%; margin: auto; padding: 20px">
                        <div class="card-body" style="text-align: center;">
                            <h3 class="card-title">Workload</h3>
                        </div>
                    </a>
                </div>
            </div>


        </div>

        <?php include('../templates/footer.php') ?>