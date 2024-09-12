<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link rel="stylesheet" href="./assets/css/main.css">
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
            <table>
                <thead>
                    <tr>
                        <th><h4>ID</h4></th>
                        <th><h4>Name</h4></th>
                        <th><h4>Username</h4></th>
                        <th><h4>Email</h4></th>
                        <th><h4>Password</h4></th>
                        <th><h4>Action</h4></th>
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
                            <form id="crud-table-form">
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
                            <form id="crud-table-form">
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

    <script src="https://kit.fontawesome.com/61c5d3d4be.js" crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>