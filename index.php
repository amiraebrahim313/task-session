<?php
require 'session.php';
require 'function.php';
if (!check('user')) {
    require 'start_page.php';
} else {
    require 'welcome.php';
}