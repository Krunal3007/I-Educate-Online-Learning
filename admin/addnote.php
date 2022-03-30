<?php include('../includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"> Notes</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">


        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" id="searchTxt" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>



<div class="container my-3">
    <h1>Welcome To Notes</h1>
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <h5 class="card-title">Add title</h5>
                <input type="text" class="form-control" id="addTitle" aria-describedby="title" placeholder="Enter title">
            </div>
            <h5 class="card-title">Add a note</h5>
            <div class="form-group">
                <textarea class="form-control" id="addTxt" rows="3"></textarea>
            </div>
            <button class="btn btn-primary" id="addBtn">Add Note</button>
        </div>
    </div>
    <hr>
    <h1>Your Notes</h1>
    <hr>
    <div id="notes" class="row container-fluid"> </div>
</div>

<script>
    console.log("Welcome to notes app. This is app.js");
    showNotes();

    // If user adds a note, add it to the localStorage
    let addBtn = document.getElementById("addBtn");
    addBtn.addEventListener("click", function(e) {
        let addTxt = document.getElementById("addTxt");
        let addTitle = document.getElementById("addTitle");
        let notes = localStorage.getItem("notes");
        if (notes == null) {
            notesObj = [];
        } else {
            notesObj = JSON.parse(notes);
        }
        let myObj = {
            title: addTitle.value,
            text: addTxt.value
        }
        notesObj.push(myObj);
        localStorage.setItem("notes", JSON.stringify(notesObj));
        addTxt.value = "";
        addTitle.value = "";
        //   console.log(notesObj);
        showNotes();
    });

    // Function to show elements from localStorage
    function showNotes() {
        let notes = localStorage.getItem("notes");
        if (notes == null) {
            notesObj = [];
        } else {
            notesObj = JSON.parse(notes);
        }
        let html = "";
        notesObj.forEach(function(element, index) {
            html += `
            <div class="noteCard my-2 mx-2 card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">${element.title}</h5>
                        <p class="card-text"> ${element.text}</p>
                        <button id="${index}"onclick="deleteNote(this.id)" class="btn btn-primary">Delete Note</button>
                    </div>
                </div>`;
        });
        let notesElm = document.getElementById("notes");
        if (notesObj.length != 0) {
            notesElm.innerHTML = html;
        } else {
            notesElm.innerHTML = `Nothing to show! Use "Add a Note" section above to add notes.`;
        }
    }

    // Function to delete a note
    function deleteNote(index) {
        //   console.log("I am deleting", index);

        let notes = localStorage.getItem("notes");
        if (notes == null) {
            notesObj = [];
        } else {
            notesObj = JSON.parse(notes);
        }

        notesObj.splice(index, 1);
        localStorage.setItem("notes", JSON.stringify(notesObj));
        showNotes();
    }


    let search = document.getElementById('searchTxt');
    search.addEventListener("input", function() {

        let inputVal = search.value.toLowerCase();
        // console.log('Input event fired!', inputVal);
        let noteCards = document.getElementsByClassName('noteCard');
        Array.from(noteCards).forEach(function(element) {
            let cardTxt = element.getElementsByTagName("p")[0].innerText;
            if (cardTxt.includes(inputVal)) {
                element.style.display = "block";
            } else {
                element.style.display = "none";
            }
            // console.log(cardTxt);
        })
    })

    /*
    Further Features:
    1. Add Title
    2. Mark a note as Important
    3. Separate notes by user
    4. Sync and host to web server 
    */
</script>
<?php include('footer.php') ?>