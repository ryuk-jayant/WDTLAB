
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Google</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
    <style>
    
body {
  font-size: 13px;
}

.page {
  padding-top: 20vh;
  text-align: center;
  padding-bottom: 20px;
  margin-bottom: 25vh;
}

.logo {
  padding-bottom: 15px;
}

.search {
  width: 45vw;
  padding: 14px 4%;
 border-radius:24px;
  border: 1px solid #d9d9d9;
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAACrElEQVR42u2Xz2sTQRSAX8VSb1K8iNqKooJH2Ux6Ksn+iPQqxZMIehJB0do/IMhmQWsvHr2KSEGk0tSLIoWIYNUKij20F2/N7iaUZnYT0kYzzhMKs0HDJiTdLcwHDwKZSd63781LBiQSSW9JZdkhzfKm1Rz9mjZp/W9YdEU3vXv4HsQZ40FtNG36q5rls//Ej4tmbSS2T15Mvp3ExOPmEMQNbBtMMEyoljcFcQN7PqyAlqNfIG7gYQ0tYNIaxA1MrJPY3wImbUqBKAXSFv0tBSIVMOkvKRDtGKWN/T6FdqRAxFNoWwpEPIXqUqBT6ALU/UVgu8GW4GD3f6f9TRDYNJTDrk7YbtiqUumHwIYoUJuHERDAS0r4CvgFECgbY+cFAR7KT+g1POmCKFDNw6WggHc3fBtVb4CAoyauBgXIG+g1Xh5mRAGah6cggBd11fK/h7lOprIs0H6uRl6KAo5O7kOv4QmPiwJ4Jqqv4FiwCtXjvD2+tRmfK6kZ/ygI2HritK0rDVGgrClJ6DWMwYC/AGuCBMYcIC2V0CzvjmbRz3j3xUjn6CfeYreUJ2wQkGD75INPX1mFfsEFrrcIYCvdhC4paWQakxajpJMr0C9YFg54i7AsClRmh9/xnr0NHcInzZStk2aLwAcGMAD9pPIazvFKVDD5rdnhJeHLX5RTyRPQHpz5o66emMc9wdlPtvA8wF7Aq2BUHh1525qEo5JtR1WeOXpickO9cJIpyuD6xJmhYiZ5ytWSl3mlnuOaf+2zDaLDXmJrSgZ/MYVEugo+gSh+FkSBa4yd5Ul87DZ5XpFl/AyIEjzYjkau8WqshU2cr13HPbgX4gJOD97n465GZlyVvC9mSKloKI2iTnbwNT+gBX54H+IaXAtxJzE3ycSAFqSAFJACUkAikXD+AHj5/wx2o5osAAAAAElFTkSuQmCC) no-repeat;
  background-position: 97.5%;
  background-size: 1.5em;
}

.search:hover {
  border: 1px solid #b9b9b9;
  border-top-color: #a0a0a0;
}

.search:focus {
  outline: none;
  border: 1px solid #4d90fe;
}

.Bcontainer {
  text-align: center;
  margin: 0 auto;
  width: 270px;
  padding-top: 20px;
}

.button {
  display: inline-block;
  background: #f2f2f2;
  padding: 8px 12px;
  font-weight: 700;
  font-size: 13px;
  border: 1px solid #f2f2f2;
  border-radius: 2px;
  color: #757575;
  font-family: arial, sans-serif;
}

.button:hover {
  border: 1px solid #c6c6c6;
  color: #222;
  cursor: default;
}

.left {
  float: left;
}

.nav > li > a {
  padding: 0;
  color: #000;
  opacity: .75;
}

.nav > li > .colorfix {
  opacity: 1;
}

.nav>li>a:hover,
.nav>li>a:visited,
.nav>li>a:focus {
  background-color: white;
  text-decoration: underline;
}

.nav-pills {
  margin: 15px 5px;
}

.nav li {
  float: right;
  margin-right: 15px;
}

.firstsbuttons {
  margin-top: 4.5px;
}

.btn,
.btn:active {
  color: white;
  font-weight: 700;
  background: -webkit-linear-gradient(top, #4387fd, #4683ea);
  padding: 4px 10.5px;
  border: 1px solid #4285f4;
  border-radius: 2px;
  font-size: 13px;
}

.btn.focus,
.btn:focus,
.btn:hover,
.btn:visited,
.btn:active {
  color: white;
  cursor: default;
}

.nav>li>a>img {
  opacity: .75;
}

.nav>li>a>img:hover {
  opacity: 1;
  cursor: default;
}

footer {
  background: #f2f2f2;
  border-top: 1px solid #e4e4e4;
  max-height: 40px;
  width: 100%;
  padding: 15px 20px 5px 10px;
  margin-bottom: 0;
  clear: both;
  position:absolute;
  bottom:0;
}

.bottomone {
  display: inline-block;
  padding: 0 10px;
  margin-bottom: 0;
}

.bottomone li a {
  color: #666;
  letter-spacing: 0.2px;
}

.bottomone li {
  margin-right: 27px;
  list-style-type: none;
}

.leftone {
  float: left;
}

.rightone {
  float: right;
  padding-right: 0;
}
.magnifying{
    position: absolute;
    height:1.6rem;
    left: 29%;
    top:32%;
}
    </style>
</head>
<body>
<body>
  <ul class="nav nav-pills">
    <li><a target='_blank' href="https://accounts.google.com/ServiceLogin?hl=en&passive=true&continue=https://www.google.co.uk/%3Fgws_rd%3Dssl" class="colorfix"><button class="btn" role="button">Sign in</button></a></li>
    <li>
      <a target='_blank' title="Google apps" class="firstsbuttons" href="https://www.google.co.uk/intl/en/options/"><img class="quad" src="http://www.englewoodschools.net/cms/lib8/CO01900647/Centricity/Domain/1009/GoogleAppsIcon.png" height="22" width="22"></a>
    </li>
    <li><a target='_blank' class="firstsbuttons" href="https://www.google.co.uk/imghp?hl=en&tab=wi&ei=7sfqVtCHG6TgyQOjo7d4&ved=0EKouCBUoAQ">Images</a></li>
    <li><a target='_blank' class="firstsbuttons" href="https://mail.google.com/mail/?tab=wm">Gmail</a></li>
  </ul>
  <div class="page">

    <img class="logo" src="https://www.google.it/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png">
    <br>
    <div class="InputBox" style="position:relative">
    <img class="magnifying" src="./search.png">
    <input id="searchme" class="search" title="Search" type="text">
    </div>  
    <div class="Bcontainer">
      <div class="button left">Google Search</div>
      <div class="button right">I'm Feeling Lucky</div>
    </div>
  </div>
  <footer class="nav nav-tabs">
    <ul class="bottomone rightone">
      <li><a target="blank" href="https://www.google.co.uk/preferences?hl=en">Settings</a></li>
      <li><a target="blank" href="https://www.google.co.uk/intl/en/policies/terms/?fg=1">Terms</a></li>
      <li><a target="blank" href="https://www.google.co.uk/intl/en/policies/privacy/?fg=1">Privacy</a></li>

    </ul>
    <ul class="leftone bottomone">
      <li><a target="blank" href="https://www.google.co.uk/intl/en/about.html?fg=1">About</a></li>
      <li><a target="blank" href="https://www.google.co.uk/services/?fg=1">Business</a></li>
      <li><a target="blank" href="https://www.google.co.uk/intl/en/ads/?fg=1">Advertising</a></li>
    </ul>
  </footer>

</body>
</html>
