<?php
session_start();
// TODO: get Bootstrap and Material Design for Bootstrap

// import config
// TODO: write the config file
require('config.php');

// import Classes
require('classes/Bootstrap.php');
require('classes/Controller.php');
// TODO: write models and work out the database connection (Firebase or standard SQL?)
require('classes/Model.php');
require('classes/Message.php');
