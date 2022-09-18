<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title></title>
</head>
<body>
  <?php
    $uri = service('uri');
  ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">CI4</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <?php if (session()->get('isLoggedIn')): ?>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <? ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>">
        <a class="nav-link" href="/dashboard">Dashboard</a>
      </li>
      <li class="nav-item <? ($uri->getSegment(1) == 'profile' ? 'active' : null) ?>">
        <a class="nav-link" href="/profile">Profile</a>
      </li>
    </ul>
    <ul>
    <li class="navbar-nav my-2 my-lg-0">
        <a class="nav-link" href="/logout">Logout</a>
      </li>
    </ul>
  <?php else: ?>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <? ($uri->getSegment(1) == '' ? 'active' : null) ?>">
        <a class="nav-link" href="/">Login</a>
      </li>
      <li class="nav-item <? ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
        <a class="nav-link" href="/register">Register</a>
      </li>
    </ul>
  </div>
  <?php endif; ?>  
  </div>
</nav>