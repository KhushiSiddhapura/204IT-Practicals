<!doctype html>
<html>
  <head>
    <title>Header</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      html,
      body {
        height: 10vh;
        width: 100%;
      }
      nav {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px;
        border-bottom: 2px solid black;
      }
      nav div {
        display: flex;
        gap: 40px;
      }
      button{
        padding: 5px 20px;
      }
    </style>
  </head>
  <body>
    <nav>
      <h3>Logo</h3>
      <div>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact Us</a>
      </div>
      <button>Login</button>
    </nav>
  </body>
</html>
