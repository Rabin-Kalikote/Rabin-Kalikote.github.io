    /* Js preared by Rabin K. Kalikote*/
    /* for the styling of game in personal website*/
    /* Copyright (c): Rabin K. Kalikote*/


    //global variables.
    var canvas = document.getElementById("canvas");
    var c = canvas.getContext("2d");


    // register event handler 
    document.addEventListener("keydown", keyPressedHandler, false);

    var Hero = {
    speed: 0.75,
    miss: 0,
    aappleY: 50,
    bappleY: 50,
    cappleY: 50,
    dappleY: 50,
    buckX: Math.floor((Math.random() * 500) + 1),
    arandX: Math.floor((Math.random() * 500) + 1),
    brandX: Math.floor((Math.random() * 500) + 1),
    crandX: Math.floor((Math.random() * 500) + 1),
    drandX: Math.floor((Math.random() * 500) + 1),

    // catcher movement.
    leftHandler: function(){
      this.buckX -= 10;
    },

    rightHandler: function(){
      this.buckX += 10;    
    },


    drawbackground: function(){
        // basic background
          c.fillStyle = '#00FFFF';
          c.fillRect(0, 0, canvas.width, canvas.height);

          //cloud on background.
          c.beginPath();// 1
          c.arc(80,0, 100, 0, Math.PI * 2, false);
          c.fillStyle = 'white';
          c.fill();
          c.beginPath();// 2
          c.arc(240,0, 90, 0, Math.PI * 2, false);
          c.fillStyle = 'white';
          c.fill();
          c.beginPath();// 3
          c.arc(380,0, 80, 0, Math.PI * 2, false);
          c.fillStyle = 'white';
          c.fill();
          c.beginPath();// 4
          c.arc(500,0, 100, 0, Math.PI * 2, false);
          c.fillStyle = 'white';
          c.fill();

          // score.
          c.fillStyle = '#F70D1A';
          c.font = '15px Helvetica';
          c.fillText('Score: ' + theGame.Score, 50, 30);


          // chances.
          c.fillStyle = '#F70D1A';
          c.font = '15px Helvetica';
          c.fillText('Missed: ' + hero.miss, 400, 30)


          //apple 1.
          c.beginPath();// a
          c.arc(this.arandX,this.aappleY, 10, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();
          c.beginPath();// b
          c.arc(this.arandX-10,this.aappleY, 10, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();
          c.beginPath();//c
          c.arc(this.arandX-5,this.aappleY+5, 12, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();

          //apple 2.
          c.beginPath();// a
          c.arc(this.brandX,this.bappleY, 10, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();
          c.beginPath();// b
          c.arc(this.brandX-10,this.bappleY, 10, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();
          c.beginPath();//c
          c.arc(this.brandX-5,this.bappleY+5, 12, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();

          //apple 3.
          c.beginPath();// a
          c.arc(this.crandX,this.cappleY, 10, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();
          c.beginPath();// b
          c.arc(this.crandX-10,this.cappleY, 10, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();
          c.beginPath();//c
          c.arc(this.crandX-5,this.cappleY+5, 12, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();

          //apple 4.
          c.beginPath();// a
          c.arc(this.drandX,this.dappleY, 10, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();
          c.beginPath();// b
          c.arc(this.drandX-10,this.dappleY, 10, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();
          c.beginPath();//c
          c.arc(this.drandX-5,this.dappleY+5, 12, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();


          // bucket.
          c.fillStyle = '#78866B';
          c.fillRect(this.buckX, 450, 50, 40);
          c.fillStyle = '#B6B6B4';
          c.fillRect(this.buckX+2, 452, 46, 10);
      }
};

    // declaring constant comparing variables.
    var Game = {
      Score: 0
    }
    var theGame = Object.create(Game); 
    var hero = Object.create(Hero);


  //  implementing the function to for the program to be ready.
    $(document).ready(function(){
        if(hero.miss <= 25){
          setInterval(mainLoop, 10); // looping the program every 50 mili secs.
        }
      })

    // declaring mainloop function.
    function mainLoop() {
        hero.drawbackground(); // draw new screen.

        // making the apple fall.
        hero.aappleY = hero.aappleY+hero.speed;
        hero.bappleY = hero.bappleY+hero.speed;
        hero.cappleY = hero.cappleY+hero.speed;
        hero.dappleY = hero.dappleY+hero.speed;

        hero.speed = hero.speed+0.0001; // Increasing speed slowly.

        applefallchecker();
        bucketChecker();
        ScoreChecker();
    }


    function applefallchecker() {
      if (hero.aappleY >= 495){
        hero.miss += 1;
        hero.aappleY = 50;
        //fixing new location for new objs.
        hero.arandX = Math.floor((Math.random() * 500) + 1);
        // notice.
        c.fillStyle = '#F70D1A';
        c.font = '30px Helvetica';
        c.fillText('+1 Missed', 200, 30)
      }

      if (hero.bappleY >= 495){
        hero.miss += 1;
        hero.bappleY = 50;
        //fixing new location for new objs.
        hero.brandX = Math.floor((Math.random() * 500) + 1);
        // notice.
        c.fillStyle = '#F70D1A';
        c.font = '30px Helvetica';
        c.fillText('+1 Missed', 200, 30)
      }

      if (hero.cappleY >= 495){
        hero.miss += 1;
        hero.cappleY = 50;
        //fixing new location for new objs.
        hero.crandX = Math.floor((Math.random() * 500) + 1);
        // notice.
        c.fillStyle = '#F70D1A';
        c.font = '30px Helvetica';
        c.fillText('+1 Missed', 200, 30)
      }

      if (hero.dappleY >= 495){
        hero.miss += 1;
        hero.dappleY = 50;
        //fixing new location for new objs.
        hero.drandX = Math.floor((Math.random() * 500) + 1);
        // notice.
        c.fillStyle = '#F70D1A';
        c.font = '30px Helvetica';
        c.fillText('+1 Missed', 200, 30)
      }
    }


    function bucketChecker() {
      // finding the distance between bucket and apples.
      var adist = distancefmla(hero.arandX, hero.aappleY, hero.buckX+25, 450);
      var bdist = distancefmla(hero.brandX, hero.bappleY, hero.buckX+25, 450);
      var cdist = distancefmla(hero.crandX, hero.cappleY, hero.buckX+25, 450);
      var ddist = distancefmla(hero.drandX, hero.dappleY, hero.buckX+25, 450);
      console.log(theGame.Score);

      if(adist <=50 && hero.aappleY >= 430){
          theGame.Score += 5;
          hero.aappleY = 50;
          hero.arandX = Math.floor((Math.random() * 500) + 1);
      }

      if(bdist <=50 && hero.bappleY >= 430){
          theGame.Score += 5;
          hero.bappleY = 50;
          hero.brandX = Math.floor((Math.random() * 500) + 1);
      }

      if(cdist <=50 && hero.cappleY >= 430){
          theGame.Score += 5;
          hero.cappleY = 50;
          hero.crandX = Math.floor((Math.random() * 500) + 1);
      }

      if(ddist <=50 && hero.dappleY >= 430){
          theGame.Score += 5;
          hero.dappleY = 50;
          hero.drandX = Math.floor((Math.random() * 500) + 1);
      }
    }


    function ScoreChecker() {
      if(hero.miss >= 25) {
        document.write('<p>Ohh.. You missed 25 apples.</p> <p>Conguratulations.. Your Score is ' + theGame.Score + '.</p>');
        document.write('<p>GAME OVER..!</p>');
      }
    }

    function distancefmla(x1,y1,x2,y2){
      var Xvalue = x2 - x1;
      var Yvalue = y2 - y1;

      var sqX = Math.pow(Xvalue,2);
      var sqY = Math.pow(Yvalue,2);

      var totlsq = sqY + sqX;

      return Math.sqrt(totlsq); // avoids the problem of NaN.
    }


    function keyPressedHandler(e) {

        switch(e.keyCode) {
            case 37:
                if(hero.buckX > 0){
                  hero.leftHandler();
                }
                break;
            case 39:
                if(hero.buckX < 500-50){
                  hero.rightHandler();
                }
                break;
        }
    }