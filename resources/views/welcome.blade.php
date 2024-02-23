<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
       
        <title>welcome</title>

    </head>
   <body>
       
   <style>
.page-content {
    display: flex;
    justify-content: center;
    align-items: center;
    height:200px;
    padding: 20px;
    width: 100%;
    height: 100%;
    flex-direction:column;
}
body{
    width:100%;
    background-image: url('banner 18.png');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size:  100% 100%;
    height: 100%;
}
html {
    width: 100%;
    height: 100%;
    overflow: hidden;

}
</style>


<div>
<img src="{{ URL()}}" alt="">
     <nav></nav>
            <a href="home.blade.php">home</a>
            <a href="aboutus.blade.php">about</a>
            <a href="contact.blade.php">contact</a>
            <a href="logout.blade.php">logout</a>
            <a href="service.blade.php">service</a>
      </nav>
    </div>
</header>
<main>

<ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
  <li class="nav-item" role="presentation">
    <button class="nav-link active rounded-5" id="home-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link rounded-5" id="contact-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Contact</button>
  </li>
</ul><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown
  </button>
  <ul class="dropdown-menu">
    <li><button class="dropdown-item1" type="button">Dropdown item</button></li>
    <li><button class="dropdown-item2" type="button">Dropdown item</button></li>
    <li><button class="dropdown-item3" type="button">Dropdown item</button></li>
  </ul>
</div>