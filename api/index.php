<?php

// Forward Vercel requests to normal index.php
error_log('Vercel request');
require __DIR__ . '/../public/index.php';