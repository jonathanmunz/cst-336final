<!DOCTYPE html>

<html>

  <head>

    <title>Welcome</title>

  </head>

  <body>

    <h1>Meme Generator</h1>

    <img height="100px" width="150px" src="https://www.publicdomainpictures.net/pictures/90000/velka/alpaca-chewing.jpg" alt="a-chewing-alpaca">

    <h2>Welcome to my Meme Generator!</h2>

    

    <form method="post">

        Line 1: <input type="text" name="line1"></input> <br/>

        Line 2: <input type="text" name="line2"></input> <br/>
        Meme Type:
        <select name="meme-type">
          <option value="college-grad">Happy College Grad</option>
          <option value="thinking-ape">Deep Thought Monkey</option>
          <option value="coding">Learning to Code</option>
          <option value="old-class">Old Classroom</option>
        </select>
        <br/>
        
        <input type="radio" name="order-by-date" value="newest-first"> Newest first 
        <input type="radio" name="order-by-date" value="oldest-first"> Oldest first
        
        <br>



        <input type="submit"></input>
    </form>
    
    <a href="./memep.php">View all memes</a>

  </body>

</html>