<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Welcome to Library</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Library</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">


            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" id="searchTxt" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div id="message"></div>


    <div class="container my-3">
        <h1>Library</h1>
        <hr>
        <form id="libraryForm">
            <div class="form-group row">
                <label for="bookName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="bookName" placeholder="Book Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="Author" class="col-sm-2 col-form-label">Author</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="author" placeholder="Author">
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Type</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="fiction" value="fiction" checked>
                            <label class="form-check-label" for="fiction">
                                Fiction
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="programming" value="programming">
                            <label class="form-check-label" for="programming">
                                Computer Programming
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="type" id="cooking" value="cooking">
                            <label class="form-check-label" for="cooking">
                                Cooking
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Add Book</button>
                </div>
            </div>
        </form>

        <div id="table">
            <h1>Your books</h1>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Author</th>
                        <th scope="col">Type</th>
                    </tr>
                </thead>
                <tbody id='tableBody'></tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="index.js"></script> -->
    <script src="indexes6.js"></script>
    <script src="index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!-- index.js  -->
    <script>
        console.log("This is index.js");
        // Todos"
        // 1. Store all the data to the localStorage
        // 2. Give another column as an option to delete the book
        // 3. Add a scroll bar to the view

        // Constructor
        function Book(name, author, type) {
            this.name = name;
            this.author = author;
            this.type = type;
        }

        // Display Constructor
        function Display() {

        }

        // Add methods to display prototype
        Display.prototype.add = function(book) {
            console.log("Adding to UI");
            tableBody = document.getElementById('tableBody');
            let uiString = `<tr>
                        <td>${book.name}</td>
                        <td>${book.author}</td>
                        <td>${book.type}</td>
                    </tr>`;
            tableBody.innerHTML += uiString;
        }

        // Implement the clear function
        Display.prototype.clear = function() {
            let libraryForm = document.getElementById('libraryForm');
            libraryForm.reset();
        }

        // Implement the validate function
        Display.prototype.validate = function(book) {
            if (book.name.length < 2 || book.author.length < 2) {
                return false
            } else {
                return true;
            }
        }
        Display.prototype.show = function(type, displayMessage) {
            let message = document.getElementById('message');
            message.innerHTML = `<div class="alert alert-${type} alert-dismissible fade show" role="alert">
                            <strong>Messge:</strong> ${displayMessage}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>`;
            setTimeout(function() {
                message.innerHTML = ''
            }, 2000);

        }


        // Add submit event listener to libraryForm
        let libraryForm = document.getElementById('libraryForm');
        libraryForm.addEventListener('submit', libraryFormSubmit);

        function libraryFormSubmit(e) {
            console.log('YOu have submitted library form');
            let name = document.getElementById('bookName').value;
            let author = document.getElementById('author').value;
            let type;
            let fiction = document.getElementById('fiction');
            let programming = document.getElementById('programming');
            let cooking = document.getElementById('cooking');

            if (fiction.checked) {
                type = fiction.value;
            } else if (programming.checked) {
                type = programming.value;
            } else if (cooking.checked) {
                type = cooking.value;
            }

            let book = new Book(name, author, type);
            console.log(book);

            let display = new Display();

            if (display.validate(book)) {

                display.add(book);
                display.clear();
                display.show('success', 'Your book has been successfully added')
            } else {
                // Show error to the user
                display.show('danger', 'Sorry you cannot add this book');
            }

            e.preventDefault();
        }
    </script>

    <!-- indexex6.js  -->
    <script>
        console.log('This is ES6 version of Project 2');
        class Book {
            constructor(name, author, type) {
                this.name = name;
                this.author = author;
                this.type = type;
            }
        }

        class Display {
            add(book) {
                console.log("Adding to UI");
                let tableBody = document.getElementById('tableBody');
                let uiString = `<tr>
                            <td>${book.name}</td>
                            <td>${book.author}</td>
                            <td>${book.type}</td>
                        </tr>`;
                tableBody.innerHTML += uiString;
            }

            clear() {
                let libraryForm = document.getElementById('libraryForm');
                libraryForm.reset();
            }

            validate(book) {
                if (book.name.length < 2 || book.author.length < 2) {
                    return false
                } else {
                    return true;
                }
            }

            show(type, displayMessage) {
                let message = document.getElementById('message');
                let boldText;
                if (type === 'success') {
                    boldText = 'Success';
                } else {
                    boldText = 'Error!';
                }
                message.innerHTML = `<div class="alert alert-${type} alert-dismissible fade show" role="alert">
                                <strong>${boldText}:</strong> ${displayMessage}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>`;
                setTimeout(function() {
                    message.innerHTML = ''
                }, 8000);

            }
        }

        // Add submit event listener to libraryForm
        let libraryForm = document.getElementById('libraryForm');
        libraryForm.addEventListener('submit', libraryFormSubmit);

        function libraryFormSubmit(e) {
            console.log('YOu have submitted library form');
            let name = document.getElementById('bookName').value;
            let author = document.getElementById('author').value;
            let type;
            let fiction = document.getElementById('fiction');
            let programming = document.getElementById('programming');
            let cooking = document.getElementById('cooking');

            if (fiction.checked) {
                type = fiction.value;
            } else if (programming.checked) {
                type = programming.value;
            } else if (cooking.checked) {
                type = cooking.value;
            }

            let book = new Book(name, author, type);
            console.log(book);

            let display = new Display();

            if (display.validate(book)) {

                display.add(book);
                display.clear();
                display.show('success', 'Your book has been successfully added')
            } else {
                // Show error to the user
                display.show('danger', 'Sorry you cannot add this book');
            }

            e.preventDefault();
        }
    </script>

</body>

</html>