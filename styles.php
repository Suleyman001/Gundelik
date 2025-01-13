<style>
body {
    background-color: #ffffff;
    color: #000000;
    font-family: Arial, sans-serif;
}

.header {
    background-color: #f1f1f1;
    color: #000000;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
}

.header a {
    color: #000000;
    text-decoration: none;
    margin: 0 10px;
    padding: 5px 10px;
    border-radius: 3px;
}

.header a:hover {
    background-color: #cccccc;
}

.header button {
    padding: 5px 10px;
    background-color: #000000;
    color: #ffffff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

.header button:hover {
    background-color: #333333;
}

/* Dark Mode */
body.dark {
    background-color: #121212;
    color: #ffffff;
}

body.dark .header {
    background-color: #333333;
    color: #ffffff;
}

body.dark .header a {
    color: #ffffff;
}

body.dark .header a:hover {
    background-color: #555555;
}

body.dark .header button {
    background-color: #ffffff;
    color: #000000;
}

body.dark .header button:hover {
    background-color: #dddddd;
}
.footer {
    text-align: center;

    position: fixed;
    bottom: 0;
    width: 100%;
}
</style>
