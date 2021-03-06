<!DOCTYPE html>
<html lang="en">
<!--Add head-->
<?php include dirname(__FILE__) . '/../common/head.php'; ?>

<body>
<!--Add header-->
<?php include dirname(__FILE__) . '/../common/header.php'; ?>

<!--Add navigation-->
<?php include dirname(__FILE__) . '/../common/nav.php'; ?>

<!--Add main-->
<main>
    <h2>Assignments</h2>
    <div class="row">
        <div class="col-sm-4">
            <div class="card no-border" style="width: 30rem;">
                <div class="card-body">
                    <div class="card-front">
                    <h5 class="card-title">Fun with Forms</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Week 03 - Team Assignment</h6>
                        <p class="card-text">This was our first official team assignment. As group 4, we met together at 10:30am on Wednesday, January 23, 2019 to complete the assignment. David Durrant drove and each of us chipped in on what to put into the code.The core requirements took only 25 minutes or so to complete. All three stretch goals were completed.</p>   
                        <p class="text-center">
                            <a href="index.php?action=team03" class="btn btn-primary">Go to assignment</a>
                            <a class="btn btn-primary flip-btn">View requirements</a>
                        </p>
                    </div>
                    <div class="card-back">
                        <h5 class="card-title">Core Requirements: <span class="badge badge-success">Complete!</span></h5>
                        <ul>
                            <li class="task-complete">01 - Create an HTML form</li>
                            <li class="task-complete">02 - Create a PHP script to handle the form</li>
                            <li class="task-complete">03 - Add "Continents Visited" checkbox</li>
                        </ul>
                        <h5 class="card-title">Stretch Challenges: <span class="badge badge-success">Complete!</span></h5>
                        <ul>
                            <li class="task-complete">01 - Use PHP to populate radio buttons</li>
                            <li class="task-complete">02 - Use PHP to convert Continents from ID to text</li>
                            <li class="task-complete">03 - Deploy to server</li>
                        </ul>
                        <p class="text-center">
                            <a href="index.php?action=team03" class="btn btn-primary">Go to assignment</a>
                            <a class="btn btn-primary flip-btn">View description</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-sm-4">
            <div class="card no-border" style="width: 30rem;">
                <div class="card-body">
                    <div class="card-front">
                    <h5 class="card-title">eStore</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Week 03 - Prove Assignment</h6>
                        <p class="card-text">This assignment involved creating a shopping cart system. Although we didn't need to take credit card information, we still needed to use form data to get addresses. A lot of dynamic generation, ajax requests, and jQuery were used to make this run smoothly. I wanted to create an auto-generated item description page, but I ended up running out of time.</p>   
                        <p class="text-center">
                            <a href="index.php?action=browse03" class="btn btn-primary">Go to assignment</a>
                            <a class="btn btn-primary flip-btn">View requirements</a>
                        </p>
                    </div>
                    <div class="card-back">
                        <h5 class="card-title">Core Requirements: <span class="badge badge-success">Complete!</span></h5>
                        <ul>
                            <li class="task-complete">01 - Create Browse page</li>
                            <li class="task-complete">02 - Create Cart page</li>
                            <li class="task-complete">03 - Create Checkout page</li>
                            <li class="task-complete">04 - Create Confirmation page</li>
                        </ul>
                        <h5 class="card-title">Extra Stuff: </h5>
                        <ul>
                            <li class="task-complete">01 - Clean UI and Design</li>
                            <li class="task-complete">02 - Add multiple items</li>
                            <li class="">03 - Add Item Details page</li>
                        </ul>
                        <p class="text-center">
                            <a href="index.php?action=browse03" class="btn btn-primary">Go to assignment</a>
                            <a class="btn btn-primary flip-btn">View description</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-sm-4">
            <div class="card no-border" style="width: 30rem;">
                <div class="card-body">
                    <div class="card-front">
                    <h5 class="card-title">Scripture Search</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Week 05 - Team Assignment</h6>
                        <p class="card-text">This assignment involved creating a new database table and populating it with scriptures. We then created a dynamically generated PHP page that would populate with the contents of the table rows. The most difficult part of this project was just making it work with my MVC environment.</p>   
                        <p class="text-center">
                            <a href="index.php?action=team04" class="btn btn-primary">Go to assignment</a>
                            <a class="btn btn-primary flip-btn">View requirements</a>
                        </p>
                    </div>
                    <div class="card-back">
                        <h5 class="card-title">Core Requirements: <span class="badge badge-success">Complete!</span></h5>
                        <ul>
                            <li class="task-complete">01 - Create Scriptures table</li>
                            <li class="task-complete">02 - Insert rows into Scriptures</li>
                            <li class="task-complete">03 - Create dynamic pages from Scriptures data</li>
                        </ul>
                        <h5 class="card-title">Stretch Challenges: <span class="badge badge-success">Complete!</span></h5>
                        <ul>
                            <li class="task-complete">01 - Add search bar</li>
                            <li class="task-complete">02 - Link scripture to separate page</li>
                            <li class="task-complete">03 - Build Scripture Details page</li>
                        </ul>
                        <p class="text-center">
                            <a href="index.php?action=team04" class="btn btn-primary">Go to assignment</a>
                            <a class="btn btn-primary flip-btn">View description</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-sm-4">
            <div class="card no-border" style="width: 30rem;">
                <div class="card-body">
                    <div class="card-front">
                    <h5 class="card-title">Student Dashboard</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Week 05 - Prove Assignment</h6>
                        <p class="card-text">This assignment involved creating a student dashboard that students can use to view curriculum. Students will log in (non-students can use the demo account) and will then be directed to their dashboard where they can view all the curriculum for their belt. Lower belts can also be viewed.</p>   
                        <p class="text-center">
                            <a href="index.php?action=w4Login" class="btn btn-primary">Go to assignment</a>
                            <a class="btn btn-primary flip-btn">View requirements</a>
                        </p>
                    </div>
                    <div class="card-back">
                        <h5 class="card-title">Core Requirements: <span class="badge badge-success">Complete!</span></h5>
                        <ul>
                            <li class="task-complete">01 - Insert data into tables</li>
                            <li class="task-complete">02 - Create dynamic PHP pages with data</li>
                        </ul>
                        <h5 class="card-title">Extra Stuff: <span class="badge badge-success">Complete!</span></h5>
                        <ul>
                            <li class="task-complete">01 - Make Student Login page</li>
                            <li class="task-complete">02 - Add all curriculum</li>
                            <li class="task-complete">03 - Dynamically generate entire dashboard</li>
                            <li class="task-complete">04 - Make lower belts viewable</li>
                        </ul>
                        <p class="text-center">
                            <a href="index.php?action=w4Login" class="btn btn-primary">Go to assignment</a>
                            <a class="btn btn-primary flip-btn">View description</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!--Add footer and extra scripting-->
<?php include dirname(__FILE__) . '/../common/footer.php'; ?>
</body>

</html>