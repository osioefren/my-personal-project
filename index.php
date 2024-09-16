<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/popup.css">
    <!-- <link rel="stylesheet" href="./assets/css/grid.css"> -->
</head>
<body>
    <main>
        <!-- Responsive Grid Design -->
        <!-- <section id="table" class="container">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
            <div class="four"></div>
            <div class="five"></div>
        </section> -->

        <section id="crud-table" class="crud-table container">
            <div class="container table-nav">
                <button class="primary-btn">
                    Add user 
                    <span><i class="fa-solid fa-user"></i></span>
                </button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th><h6>ID</h6></th>
                        <th><h6>Name</h6></th>
                        <th><h6>Username</h6></th>
                        <th><h6>Email</h6></th>
                        <th><h6>Password</h6></th>
                        <th><h6>Action</h6></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Test</td>
                        <td>uname</td>
                        <td>test@mail.com</td>
                        <td>test</td>
                        <td>
                            <form class="crud-table-form">
                                <button class="crud-table-edit">
                                    <span><i class="fa-solid fa-pen-to-square"></i></span>
                                </button>

                                <button class="crud-table-delete">
                                    <span><i class="fa-solid fa-trash"></i></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Test</td>
                        <td>uname</td>
                        <td>test@mail.com</td>
                        <td>test</td>
                        <td>
                            <form class="crud-table-form">
                                <button class="crud-table-edit">
                                    <span><i class="fa-solid fa-pen-to-square"></i></span>
                                </button>

                                <button class="crud-table-delete">
                                    <span><i class="fa-solid fa-trash"></i></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <?php
        // To include the popup in the page
        require_once './includes/popup.php'
    ?>

    <script src="https://kit.fontawesome.com/61c5d3d4be.js" crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/popup.js"></script>
</body>
</html>