<?php
require MODELS_DIR."users.php";

// http://mvcfriends.com/controller/action
function index() {
    $users = getAllUsers();
    view("users", ["title" => "Vista Users", "users" => $users]);
}

function save() {}
function create() {}
function delete() {}