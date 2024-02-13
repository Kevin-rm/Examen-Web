<?php

require_once '../functions/utils.php';

session_start();
session_destroy();

redirect('layout/layout_1.php?who=cueilleur');
