<!DOCTYPE html5>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script type="text/javascript" src="script.js"></script>
              <title>MONOPRIX</title>
            <link rel="stylesheet" href="styles.css">
    </head>
    <body class="body3">
    	<center>
        <header class="MONOPRIX">
            <h1>MONOPRIX</h1><br>
        </header>

        <h2 class="es"> Enquéte De Satisfaction Salariés  </h2> 
	    <h2 class="user">  <i class="fas">&#xf406</i>  <script>document.write(getCookie('name'))</script> </h2><br>
	    </center>
      <form action="page4.4.php" method="post" >
      <p class="question">Sentez-vous épanoui (e)  dans votre travail?</p>
      <div class="emojibtn">
        <label class="emojibtn">
          <input type="radio" checked="checked" name="radio0"><span style='font-size:50px;'>&#128513;</span>
          <span class="checkmark"></span>
        </label>
        <label class="emojibtn">
          <input type="radio" name="radio0"><span style='font-size:50px;'>&#128528;</span>
          <span class="checkmark"></span>
        </label>
        <label class="emojibtn">
          <input type="radio" name="radio0"><span style='font-size:50px;'>&#128555;</span>
          <span class="checkmark"></span>
        </label>
        
      </div>
			
      <p class="question">Êtes-vous satisfait(e)s des avantages de travail?</p>
      <div class="emojibtn1">
        <label class="emojibtn1">
          <input type="radio" checked="checked" name="radio1" value="1"><span style='font-size:50px;'>&#128513;</span>
          <span class="checkmark"></span>
        </label>
        <label class="emojibtn1">
          <input type="radio" name="radio1" value="2"><span style='font-size:50px;'>&#128528;</span>
          <span class="checkmark"></span>
        </label>
        <label class="emojibtn1">
          <input type="radio" name="radio1"value="3"><span style='font-size:50px;'>&#128544;</span>
          <span class="checkmark"></span>
        </label>
        
      </div>
          <div>
            <p class="question">Que pensez-vous des conditions de travail dans lesquels vous vous trouvez?</p>
            <select class="select">
                <option value="0">Selectionner une option</option>:</option>
                <option value="1">Tres mauvaise</option>
                <option value="2">Mauvaise</option>
                <option value="3">Ca peut aller</option>
                <option value="4">Bien</option>
                <option value="5">Excellent</option>
              </select>
              <p class="question">Votre responsable  est-il à votre écoute?</p> 
            <select class="select">
                <option value="0">Selectionner une option</option>:</option>
                <option value="1">Jamais</option>
                <option value="2.5">Parfois</option>
                <option value="5">Toujours</option>
                
              </select>
            </div>

            <label class="button3">
              <input class="button3" type="button" value="Retour" onclick="window.location.href = 'page2.2.php'"/> 
              <input class="button3" type="submit" value="Suivant" /> 
            </label>
          </form>
            <div class="footer">
                <footer> 3/5 </footer>
                </diV>
            
            
        </body>
    </html>