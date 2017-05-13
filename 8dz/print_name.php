<?php
session_start();
echo 'Привет ' . $_SESSION['name'];
session_unset();
session_destroy();
