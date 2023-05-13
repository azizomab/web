<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Home - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <body>
  
  <div class="wrapper">

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="./index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="./addComment.php">addComment</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="./blog.php">Blog</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="./editBlog.php">edit blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="./back_end/index.php">admin</a></li>

                   


                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                    <!-- <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p> -->
                </div>
            </div>

        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">

                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <?php
                        require "../controller/blog_DBC.php";
                        $blogDBC=new Blog_DBC;
                        $var=$blogDBC->selectBlogs();
                        foreach($var as $row){
                        ?>
                        <div class="col-lg-10">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="testimonials-1.jpg" alt="..." height=300/></a>
                                <div class="card-body">
                                    <div class="small text-muted"><?php echo $row['date']?></div>
                                    <h2 class="card-title h4"><?php echo $row['title']?></h2>
                                    <p class="card-text"><?php echo $row['message']?></p>
                                    
                                    
                                    <a class="btn btn-primary" href="addComment.php?idB=<?php echo $row['idBlog']?>">Comment →</a>
                                    <a href="pdf.php?imprimer=<?= $row["idBlog"]; ?>" style="margin: 10px;" class="btn btn-primary" name="imprimer" target="_blank">imprimer</a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#idComment</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">comment</th>
                        <th scope="col">titleBlog</th>
                        <th scope="col">idBlog</th>
                        <th scope="col">dateComment</th>
                        <th scope="col">option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require "../controller/comment_DBC.php";
                        $commentDBC=new Comment_DBC;
                        $var=$commentDBC->selectComments();
                        foreach($var as $row){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $row['idComment'] ?></th>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['comment'] ?></td>
                            <td><?php echo $row['title'] ?></td>
                            <td><?php echo $row['idBlog'] ?></td>
                            <td><?php echo $row['date'] ?></td>
                            <td><a class="btn btn-danger" href="../controller/blogComment.php?idCDelete=<?php echo $row['idComment']?>">Delete →</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    </table>
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Web Design</a></li>
                                        <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Freebies</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">Tutorials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Side widget-->
                    <div class="card mb-4">
                        

                     <button class="btn btn-primary" id="button-search" type="button"onclick="location.href='blog.php'">entrer un blog</button>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
