<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Home</title>
    <style>
      body {
        text-align: center;
      }

      #NavBar ul li {
        background: linear-gradient(black, pink);
        list-style-type: none;
        padding-inline-start: 0px;
      }
      #NavBar ul li {
        color: white;
      }
      #NavBar ul li {
        display: inline-block;
        padding: 12px 40px;
      }
      #NavBar ul li:hover {
        background: linear-gradient(to left, pink, pink);
      }
      aside {
        display: flex;
        flex-direction: column;
      }
      .fakeLink {
        background: linear-gradient(to right, pink, black);
        box-sizing: border-box;
        color: white;
        cursor: pointer;
        padding: 3px;
        text-align-center;
      }
      .fakeLink2 {
        background: linear-gradient(to left, black, pink, lightpink);
        box-sizing: border-box;
        color: white;
        cursor: pointer;
        padding: 20px;
        text-align-center;
      }
      .fakeLink3 {
        background: linear-gradient(to right, black, pink, lightpink);
        box-sizing: border-box;
        color: white;
        cursor: pointer;
        padding: 20px;

      }
      .fakeLink:hover,
      .fakeLink2:hover,
      .fakeLink3:hover {
        opacity: 80%;
      }
      @media screen and (max-width: 480px) {
        aside {
          flex-wrap: wrap;
          flex-direction: row;
        }
        aside .fakeLink {
        flex-basis: 50%;
      }
      aside .fakeLink2 {
      flex: 1;
      padding: 30px;
    }
      }

      </style>
  </head>
  <body>
  <nav id="NavBar">
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="gallery.html">Gallery</a></li>
    <li><a href="aboutme.html">About Me</a></li>
    <li><a href="extrainfo.html">Extra Info</a></li>
    </ul>
    </nav>
    <h1>Hello!</h1>
    <h1>I Am <i>Nancy</i></h1>
    <aside>
    <div class="fakeLink">What do i do?</div>
    <div class="fakeLink2">Logos</div>
    <div class="fakeLink3">Websites</div>




  </body>
</html>
