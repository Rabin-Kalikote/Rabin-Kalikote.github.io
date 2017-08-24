    /* Js preared by Rabin K. Kalikote*/
    /* for the styling of game in personal website*/
    /* Copyright (c): Rabin K. Kalikote*/

    //global variables.
    var canvas = document.getElementById("game-canvas");
    var c = canvas.getContext("2d");
    var currentfig = "None";

    // register event handler 
    document.addEventListener("keydown", keyPressedHandler, false);
    canvas.addEventListener("click", clickReporter, false);

    var Hero = {
      // declaring the speed.
    speed: 1,

      // creating random variables for random position.
    lerandX: Math.floor((Math.random() * 550) + 1),
    lerandY: Math.floor((Math.random() * 350) + 1),
    lebrandY: Math.floor((Math.random() * 350) + 1),
    lebrandX: Math.floor((Math.random() * 550) + 1),
    rerandX: Math.floor((Math.random() * 550) + 1),
    rerandY: Math.floor((Math.random() * 350) + 1),
    rebrandY: Math.floor((Math.random() * 350) + 1),
    rebrandX: Math.floor((Math.random() * 550) + 1),
    nrandX: Math.floor((Math.random() * 550) + 1),
    nrandY: Math.floor((Math.random() * 350) + 1),
    mrandX: Math.floor((Math.random() * 550) + 1),
    mrandY: Math.floor((Math.random() * 360) + 1),

    // left eye movement.
    leleftHandler: function(){
      this.lerandX -= this.speed
    },
    leupHandler: function(){
      this.lerandY -= this.speed
    },
    lerightHandler: function(){
      this.lerandX += this.speed    
    },
    ledownHandler: function(){
      this.lerandY += this.speed   
    },

      // left eye ball movement.
    lebleftHandler: function(){
      this.lebrandX -= this.speed
    },
    lebupHandler: function(){
      this.lebrandY -= this.speed
    },
    lebrightHandler: function(){
      this.lebrandX += this.speed    
    },
    lebdownHandler: function(){
      this.lebrandY += this.speed
    },

      // right eye movement.
    releftHandler: function(){
      this.rerandX -= this.speed
    },
    reupHandler: function(){
      this.rerandY -= this.speed
    },
    rerightHandler: function(){
      this.rerandX += this.speed
    },
    redownHandler: function(){
      this.rerandY += this.speed
    },

      // right eye ball movement.
    rebleftHandler: function(){
      this.rebrandX -= this.speed
    },
    rebupHandler: function(){
      this.rebrandY -= this.speed
    },
    rebrightHandler: function(){
      this.rebrandX += this.speed
    },
    rebdownHandler: function(){
      this.rebrandY += this.speed    
    },

      // nose movement.
    nleftHandler: function(){
      this.nrandX -= this.speed
    },
    nupHandler: function(){
      this.nrandY -= this.speed
    },
    nrightHandler: function(){
      this.nrandX += this.speed    

    },
    ndownHandler: function(){
      this.nrandY += this.speed    
    },

      // mouth movement.
    mleftHandler: function(){
      this.mrandX -= this.speed
    },
    mupHandler: function(){
      this.mrandY -= this.speed
    },
    mrightHandler: function(){
      this.mrandX += this.speed
    },
    mdownHandler: function(){
      this.mrandY += this.speed
    },

    drawbackground: function(){
      // basic background
          c.fillStyle = '#00FFFF';
          c.fillRect(0, 0, canvas.width, canvas.height);

          c.fillStyle = '#728C00';
          c.font = '20px Helvetica';
          c.fillText('Here are some challanges for you!', 150, 40);

          c.fillStyle = '#728C00';
          c.font = '15px Helvetica';
          c.fillText('Press Enter for help', 460, 390);

          c.beginPath();
          c.arc(300,220, 160, 0, Math.PI * 2, false);
          c.fillStyle = '#F7E7CE';
          c.fill();
    },

    drawmodel: function(){
        // model
          c.fillStyle = '#F70D1A';
          c.font = '10px Helvetica';
          c.fillText('MODEL', 520, 20);

          c.fillStyle = '#00FFFF';
          c.fillRect(500, 25, 80, 60);
          c.strokeStyle = '#008000';
          c.lineWidth = 3;
          c.strokeRect(500, 25, 80, 60);

          c.beginPath();
          c.arc(540,55, 25, 0, Math.PI * 2, false);
          c.fillStyle = '#F7E7CE';
          c.fill();

          //left eye
          c.beginPath();
          c.arc(549,50, 4, 0, Math.PI * 2, false);
          c.fillStyle = 'white';
          c.fill();

          c.beginPath();
          c.arc(549,50, 1, 0, Math.PI * 2, false);
          c.fillStyle = 'black';
          c.fill();

          // right eye
          c.beginPath();
          c.arc(530,50, 4, 0, Math.PI * 2, false);
          c.fillStyle = 'white';
          c.fill();

          c.beginPath();
          c.arc(530,50, 1, 0, Math.PI * 2, false);
          c.fillStyle = 'black';
          c.fill();

          //nose
          c.beginPath();
          c.moveTo(540, 55);
          c.lineTo(536, 62);
          c.lineTo(544, 62);
          c.closePath();
          c.fillStyle = '#E2A76F';
          c.fill();

          // mouth
          c.fillStyle = '#EE9A4D';
          c.fillRect(533, 66, 14, 6);
    },

    drawrandom: function(){
        // unmanaged figure.
          // For left eye.
          c.beginPath();
          c.arc(this.lerandX, this.lerandY, 30, 0, Math.PI * 2, false);
          c.fillStyle = 'white';
          c.fill();

          // For right eye.
          c.beginPath();
          c.arc(this.rerandX,this.rerandY, 30, 0, Math.PI * 2, false);
          c.fillStyle = 'white';
          c.fill();

          // For left eye ball.
          c.beginPath();
          c.arc(this.lebrandX,this.lebrandY, 6, 0, Math.PI * 2, false);
          c.fillStyle = 'black';
          c.fill();


          // For right eye ball.
          c.beginPath();
          c.arc(this.rebrandX,this.rebrandY, 6, 0, Math.PI * 2, false);
          c.fillStyle = 'black';
          c.fill();

          // For nose.
          c.beginPath();
          c.moveTo(this.nrandX, this.nrandY);
          c.lineTo(this.nrandX - 30, this.nrandY + 60);
          c.lineTo(this.nrandX + 30, this.nrandY + 60);
          c.closePath();
          c.fillStyle = '#E2A76F';
          c.fill();

          //For mouth.
          c.fillStyle = '#EE9A4D';
          c.fillRect(this.mrandX, this.mrandY, 130, 40);
    }
  };

  // declaring constant comparing variables.
  var Game = {
    Score: 0
  }


    var theGame = Object.create(Game); 
    var hero = Object.create(Hero);


    $(document).ready(function(){
        setInterval(mainLoop, 50);
      })

    function mainLoop() {
      // clears the screen.
      clear_screen();

      // draw new screen.
      hero.drawbackground();
      hero.drawmodel();
      hero.drawrandom();

      // checks the screen.
      positionchecker();
    }

    function clear_screen() {
    c.clearRect(0, 0, canvas.width, canvas.height);
    }

    // checks whether the figure is in exact position or not.
    var lebreaker = 0;
    var lebbreaker = 0;
    var rebreaker = 0;
    var rebbreaker = 0;
    var nberaker = 0;
    var mbreaker = 0;

    function positionchecker(){
      if (currentfig == "lefteye"){

        var checkerX = hero.lerandX;
        var checkerY = hero.lerandY;
        var exactX = 225;
        var exactY = 180;

        if( checkerX == exactX && checkerY == exactY && lebreaker == 0){
          theGame.Score += 200;
          alert('Congratulations..! Left eye gets its position!');
          alert(' Your Score is ' + theGame.Score);
          lebreaker += 1;
          lefteyedist = 0;
        }
      }

      else if(currentfig == "lefteyeball"){
          var checkerX = hero.lebrandX;
          var checkerY = hero.lebrandY;
          var exactX = 225;
          var exactY = 180;

        if( checkerX == exactX && checkerY == exactY && lebbreaker == 0){
          theGame.Score += 200;
          alert('Congratulations..! Left eye ball gets its position!');
          alert(' Your Score is ' + theGame.Score);
          lebbreaker += 1;
        }   
      }

      else if(currentfig == "righteye"){
          var checkerX = hero.rerandX;
          var checkerY = hero.rerandY;
          var exactX = 375;
          var exactY = 180;

        if( checkerX == exactX && checkerY == exactY && rebreaker == 0){
          theGame.Score += 200;
          alert('Congratulations..! Right eye gets its position!');
          alert(' Your Score is ' + theGame.Score);
          rebreaker += 1;
        }  
      }

      else if(currentfig == "righteyeball"){
          var checkerX = hero.rebrandX;
          var checkerY = hero.rebrandY;
          var exactX = 375;
          var exactY = 180;

        if( checkerX == exactX && checkerY == exactY && rebbreaker == 0){
          theGame.Score += 200;
          alert('Congratulations..! Right eye ball gets its position!');
          alert(' Your Score is ' + theGame.Score);
          rebbreaker += 1;
        } 
      }

      else if(currentfig == "nose") {
          var checkerX = hero.nrandX;
          var checkerY = hero.nrandY;
          var exactX = 300;
          var exactY = 200;

        if( checkerX == exactX && checkerY == exactY && nberaker == 0){
          theGame.Score += 200;
          alert('Congratulations..! Nose gets its position!');
          alert(' Your Score is ' + theGame.Score);
          nberaker += 1;
        } 
      }

      else if(currentfig == "mouth"){
          var checkerX = hero.mrandX;
          var checkerY = hero.mrandY;
          var exactX = 235;
          var exactY = 285;

        if( checkerX == exactX && checkerY == exactY && mbreaker == 0){
          theGame.Score += 200;
          alert('Congratulations..! Mouth gets its position!');
          alert(' Your Score is ' + theGame.Score);
          mbreaker += 1;
        } 
      }
      else{
      }
    }


    function keyPressedHandler(e) {
        // if user press enter, gives help.
      if(e.keyCode == 13){
          c.beginPath();
          c.arc(225,180, 30, 0, Math.PI * 2, false);
          c.fillStyle = 'white'
          c.fill();

          c.beginPath();
          c.arc(225,180, 6, 0, Math.PI * 2, false);
          c.fillStyle = 'black'
          c.fill();

          c.beginPath();
          c.arc(375,180, 30, 0, Math.PI * 2, false);
          c.fillStyle = 'white'
          c.fill();

          c.beginPath();
          c.arc(375,180, 6, 0, Math.PI * 2, false);
          c.fillStyle = 'black'
          c.fill();

          c.beginPath();
          c.moveTo(300, 200);
          c.lineTo(270, 260);
          c.lineTo(330, 260);
          c.closePath();
          c.fillStyle = '#E2A76F';
          c.fill();

          c.fillStyle = '#EE9A4D';
          c.fillRect(235, 285, 130, 40);
      }

      // else move the selected figure.
      else{
      if (currentfig == "lefteye"){
        switch(e.keyCode) {
            case 65:
                hero.leleftHandler();
                break;
            case 87:
                hero.leupHandler();
                break;
            case 68:
                hero.lerightHandler();
                break;
            case 83:
                hero.ledownHandler();
                break;  
        }
      }

      else if(currentfig == "lefteyeball"){
          switch(e.keyCode) {
            case 65:
                hero.lebleftHandler()
                break;
            case 87:
                hero.lebupHandler()
                break;
            case 68:
                hero.lebrightHandler()
                break;
            case 83:
                hero.lebdownHandler()
                break;  
        }   
      }

      else if(currentfig == "righteye"){
          switch(e.keyCode) {
            case 65:
                hero.releftHandler()
                break;
            case 87:
                hero.reupHandler()
                break;
            case 68:
                hero.rerightHandler()
                break;
            case 83:
                hero.redownHandler()
                break;  
        }  
      }

      else if(currentfig == "righteyeball"){
          switch(e.keyCode) {
            case 65:
                hero.rebleftHandler()
                break;
            case 87:
                hero.rebupHandler()
                break;
            case 68:
                hero.rebrightHandler()
                break;
            case 83:
                hero.rebdownHandler()
                break;  
        }
      }

      else if(currentfig == "nose") {
          switch(e.keyCode) {
            case 65:
                hero.nleftHandler()
                break;
            case 87:
                hero.nupHandler()
                break;
            case 68:
                hero.nrightHandler()
                break;
            case 83:
                hero.ndownHandler()
                break;  
        } 
      }

      else if(currentfig == "mouth"){
          switch(e.keyCode) {
            case 65:
                hero.mleftHandler()
                break;
            case 87:
                hero.mupHandler()
                break;
            case 68:
                hero.mrightHandler()
                break;
            case 83:
                hero.mdownHandler()
                break;  
        }
      }

      else{
      }
    }
    }

    function clickReporter(e) {
      var clickx = e.clientX;
      var clicky = e.clientY;
      console.log('clicked at ' + clickx + ', ' + clicky);

      var lefteyedist = distancefmla(hero.lerandX, hero.lerandY, clickx, clicky);
      var lefteyeballdist = distancefmla(hero.lebrandX, hero.lebrandY, clickx, clicky);
      var righteyedist = distancefmla(hero.rerandX, hero.rerandY, clickx, clicky);
      var righteyeballdist = distancefmla(hero.rebrandX, hero.rebrandY, clickx, clicky);
      var nosedist = distancefmla(hero.nrandX, hero.nrandY, clickx, clicky);
      var mouthdist = distancefmla(hero.mrandX, hero.mrandY, clickx, clicky);

      console.log('lefteye ' +lefteyedist);
      console.log('lefteyeball ' +lefteyeballdist);
      console.log('righteye ' +righteyedist);
      console.log('righteyeball ' +righteyeballdist);
      console.log('nose ' +nosedist);
      console.log('mouth ' +mouthdist);


      if (lefteyedist < lefteyeballdist && lefteyedist < righteyedist && lefteyedist < righteyeballdist && lefteyedist < nosedist && lefteyedist < mouthdist){
        currentfig = "lefteye";
      }
      else if (lefteyeballdist < lefteyedist && lefteyeballdist < righteyedist && lefteyeballdist < righteyeballdist && lefteyeballdist < nosedist && lefteyeballdist < mouthdist){
        currentfig = "lefteyeball";
      }
      else if (righteyedist < lefteyeballdist && righteyedist < lefteyedist && righteyedist < righteyeballdist && righteyedist < nosedist && righteyedist < mouthdist){
        currentfig = "righteye";
      }
      else if(righteyeballdist < lefteyedist && righteyeballdist < righteyedist && righteyeballdist < lefteyeballdist && righteyeballdist < nosedist && righteyeballdist < mouthdist){
        currentfig = "righteyeball";
      }
      else if(nosedist < lefteyeballdist && nosedist < righteyedist && nosedist < righteyeballdist && nosedist < lefteyedist && nosedist < mouthdist){
        currentfig = "nose";
      }
      else if(mouthdist < lefteyeballdist && mouthdist < righteyedist && mouthdist < righteyeballdist && mouthdist < nosedist && mouthdist < lefteyedist){
        currentfig = "mouth";
      }
      else {
        console.log('Invalid selection');
      }
    }

    function distancefmla(x1,y1,x2,y2){
      var Xvalue = x2 - x1;
      var Yvalue = y2 - y1;

      var sqX = Xvalue^2;
      var sqY = Yvalue^2;

      var totlsq = sqY + sqX;

      return Math.sqrt(totlsq); // avoids the problem of NaN.
    }

    function speed(){
      hero.speed = document.getElementById("myNumber").value;
    }

    // button press handler.
    function moveup(){
      if (currentfig == "lefteye"){
        hero.leupHandler();
        }
      else if(currentfig == "lefteyeball"){
                hero.lebupHandler();
        }   
      else if(currentfig == "righteye"){
                hero.reupHandler();
        }  
      else if(currentfig == "righteyeball"){
                hero.rebupHandler();
        }
      else if(currentfig == "nose") {
                hero.nupHandler();
        }
      else if(currentfig == "mouth"){
                hero.mupHandler();
        }
    }

    function moveleft(){
      if (currentfig == "lefteye"){
        hero.leleftHandler();
        }
      else if(currentfig == "lefteyeball"){
                hero.lebleftHandler();
        }   
      else if(currentfig == "righteye"){
                hero.releftHandler();
        }  
      else if(currentfig == "righteyeball"){
                hero.rebleftHandler();
        }
      else if(currentfig == "nose") {
                hero.nleftHandler();
        }
      else if(currentfig == "mouth"){
                hero.mleftHandler();
        }
    }

    function movedown(){
      if (currentfig == "lefteye"){
                hero.ledownHandler();
        }
      else if(currentfig == "lefteyeball"){
                hero.lebdownHandler();
        }   
      else if(currentfig == "righteye"){
                hero.redownHandler();
        }  
      else if(currentfig == "righteyeball"){
                hero.rebdownHandler();
        }
      else if(currentfig == "nose") {
                hero.ndownHandler();
        }
      else if(currentfig == "mouth"){
                hero.mdownHandler();
        }
    }
            
    function moveright(){
      if (currentfig == "lefteye"){
        hero.lerightHandler();
        }
      else if(currentfig == "lefteyeball"){
                hero.lebrightHandler();
        }   
      else if(currentfig == "righteye"){
                hero.rerightHandler();
        }  
      else if(currentfig == "righteyeball"){
                hero.rebrightHandler();
        }
      else if(currentfig == "nose") {
                hero.nrightHandler();
        }
      else if(currentfig == "mouth"){
                hero.mrightHandler();
        }
    }

    function help(){
          c.beginPath();
          c.arc(225,180, 30, 0, Math.PI * 2, false);
          c.fillStyle = 'white'
          c.fill();

          c.beginPath();
          c.arc(225,180, 6, 0, Math.PI * 2, false);
          c.fillStyle = 'black'
          c.fill();

          c.beginPath();
          c.arc(375,180, 30, 0, Math.PI * 2, false);
          c.fillStyle = 'white'
          c.fill();

          c.beginPath();
          c.arc(375,180, 6, 0, Math.PI * 2, false);
          c.fillStyle = 'black'
          c.fill();

          c.beginPath();
          c.moveTo(300, 200);
          c.lineTo(270, 260);
          c.lineTo(330, 260);
          c.closePath();
          c.fillStyle = '#E2A76F';
          c.fill();

          c.fillStyle = '#EE9A4D';
          c.fillRect(235, 285, 130, 40);
      }

      function score(){
        document.getElementById("score-shower").innerHTML = theGame.Score;
      }

      function selection(){
        document.getElementById("selection-shower").innerHTML = currentfig;
      }