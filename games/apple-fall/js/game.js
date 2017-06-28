// Js code written by Rabin K kalikote.
// For wow apples game.
// Copyright (c): Rabin K. Kalikote.


    //global variables.
    var intervalID;
    var canvas = document.getElementById("canvas");
    var c = canvas.getContext("2d");


    // register event handler 
    document.addEventListener("keydown", keyPressedHandler, false);



    // declaring the variables.
    // 1. declaring constant comparing variables.
    var basicValuesOperations = {
      speed: 1,
      miss: 0,
      missLimit: 30,
      Score: 0,
      scorerName: "",
    };

    // 3. declaring the variables contants for apples Y.
    var apple = {
      aappleY: 50,
      bappleY: 50+180,
      cappleY: 50+250,
      dappleY: 50+120
    };


    // 4. declaring the variables for genarating random numbers.
    var random = {
      buckX: Math.floor((Math.random() * 500) + 1),
      bonusBuckX: Math.floor((Math.random() * 500) + 1),
      arandX: Math.floor((Math.random() * 500) + 1),
      brandX: Math.floor((Math.random() * 500) + 1),
      crandX: Math.floor((Math.random() * 500) + 1),
      drandX: Math.floor((Math.random() * 500) + 1)
    };

    // 5. declaring variables for bucket movemrnt.
    var movementHandler = {
      // catcher movement with default bucket.
      leftHandler: function(){
        random.buckX -= 10;
      },

      rightHandler: function(){
        random.buckX += 10;    
      },
      // catcher movement with bonus bucket.
      bonusleftHandler: function(){
        random.bonusBuckX -= 10;
      },

      bonusrightHandler: function(){
        random.bonusBuckX += 10;    
      }
    };

    // 6. declaring variables for background.
    var drawBackground = {
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
          c.fillText('Score: ' + basicValues.Score, 50, 30);


          // chances.
          c.fillStyle = '#F70D1A';
          c.font = '15px Helvetica';
          c.fillText('Missed: ' + basicValues.miss, 400, 30)


          //apple 1.
          c.beginPath();// a
          c.arc(random.arandX,apple.aappleY, 10, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();
          c.beginPath();// b
          c.arc(random.arandX-10,apple.aappleY, 10, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();
          c.beginPath();//c
          c.arc(random.arandX-5,apple.aappleY+5, 12, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();

          //apple 2.
          c.beginPath();// a
          c.arc(random.brandX,apple.bappleY, 10, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();
          c.beginPath();// b
          c.arc(random.brandX-10,apple.bappleY, 10, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();
          c.beginPath();//c
          c.arc(random.brandX-5,apple.bappleY+5, 12, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();

          //apple 3.
          c.beginPath();// a
          c.arc(random.crandX,apple.cappleY, 10, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();
          c.beginPath();// b
          c.arc(random.crandX-10,apple.cappleY, 10, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();
          c.beginPath();//c
          c.arc(random.crandX-5,apple.cappleY+5, 12, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();

          //apple 4.
          c.beginPath();// a
          c.arc(random.drandX,apple.dappleY, 10, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();
          c.beginPath();// b
          c.arc(random.drandX-10,apple.dappleY, 10, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();
          c.beginPath();//c
          c.arc(random.drandX-5,apple.dappleY+5, 12, 0, Math.PI * 2, false);
          c.fillStyle = 'red';
          c.fill();

          // bucket.
          c.fillStyle = '#78866B';
          c.fillRect(random.buckX, 450, 50, 40);
          c.fillStyle = '#B6B6B4';
          c.fillRect(random.buckX+2, 452, 46, 10);

          if(localStorage.bucketStatus == "unlocked"){
            c.fillStyle = '#78866B';
            c.fillRect(random.bonusBuckX, 450, 50, 40);
            c.fillStyle = '#B6B6B4';
            c.fillRect(random.bonusBuckX+2, 452, 46, 10);
          }
      }
    };

    // 7. declaring variables for score track.
    var hstScore = {
      hstScore1: 0,
      hstScore2: 0,
    }


    // creating objects.
    var basicValues = Object.create(basicValuesOperations);
    var apple = Object.create(apple);
    var random = Object.create(random);
    var drawBackground = Object.create(drawBackground);
    var movementHandler = Object.create(movementHandler);
    var highestScore = Object.create(hstScore);


  //  implementing the function to for the program to be ready.
    function startGame(){
          document.getElementById("notifications").value = "";
          document.getElementById("notifications").value+= "You have started the Game."+"\r\n"+"Goodluck.."+"\r\n";

          ereseScreenContents();
          createCanvas();
          intervalID = setInterval(mainLoop, 10); // looping the program every 50 mili secs.
      }

    // declaring mainloop function.
    function mainLoop() {
      if(basicValues.miss <= basicValues.missLimit){
        drawBackground.drawbackground(); // draw new screen.

        // making the apple fall.
        apple.aappleY = apple.aappleY+basicValues.speed;
        apple.bappleY = apple.bappleY+basicValues.speed;
        apple.cappleY = apple.cappleY+basicValues.speed;
        apple.dappleY = apple.dappleY+basicValues.speed;

        basicValues.speed = basicValues.speed+0.0001; // Increasing speed slowly.

        applefallchecker();
        defaultbucketChecker();
        if(localStorage.bucketStatus == "unlocked"){
          bonusbucketChecker();
        }
      }
      else{
        clearInterval(intervalID);
        document.getElementById("notifications").value = "";
        document.getElementById("notifications").value+= "You have completed the Game."+"\r\n"+"Congurates.."+"\r\n";

        if(basicValues.miss >= basicValues.missLimit){
            ScoreChecker();
            if(localStorage.bucketStatus == "unlocked"){
              localStorage.bucketStatus == "locked";
            }
            if(localStorage.magnetStatus == "unlocked"){
              localStorage.magnetStatus == "locked";
            }
          }
      }
    }


    function applefallchecker() {
      if (apple.aappleY >= 495){
        basicValues.miss += 1;
        apple.aappleY = 50;
        //fixing new location for new objs.
        random.arandX = Math.floor((Math.random() * 500) + 1);
        // notice.
        c.fillStyle = '#F70D1A';
        c.font = '30px Helvetica';
        c.fillText('+1 Missed', 200, 30)
      }

      if (apple.bappleY >= 495){
        basicValues.miss += 1;
        apple.bappleY = 50;
        //fixing new location for new objs.
        random.brandX = Math.floor((Math.random() * 500) + 1);
        // notice.
        c.fillStyle = '#F70D1A';
        c.font = '30px Helvetica';
        c.fillText('+1 Missed', 200, 30)
      }

      if (apple.cappleY >= 495){
        basicValues.miss += 1;
        apple.cappleY = 50;
        //fixing new location for new objs.
        random.crandX = Math.floor((Math.random() * 500) + 1);
        // notice.
        c.fillStyle = '#F70D1A';
        c.font = '30px Helvetica';
        c.fillText('+1 Missed', 200, 30)
      }

      if (apple.dappleY >= 495){
        basicValues.miss += 1;
        apple.dappleY = 50;
        //fixing new location for new objs.
        random.drandX = Math.floor((Math.random() * 500) + 1);
        // notice.
        c.fillStyle = '#F70D1A';
        c.font = '30px Helvetica';
        c.fillText('+1 Missed', 200, 30)
      }

      // if the magnet is unlocked.
      if(localStorage.magnetStatus == "unlocked"){
        // tracking the 1st apple.
        if(random.arandX > random.buckX && apple.aappleY > 200){
          random.arandX -= 1;
        }
        else if(random.arandX < random.buckX && apple.aappleY > 200){
          random.arandX += 1;
        }

        // tracking the 2nd apple.
        if(random.brandX > random.buckX && apple.bappleY > 200){
          random.brandX -= 1;
        }
        else if(random.brandX < random.buckX && apple.bappleY > 200){
          random.brandX += 1;
        }

        // tracking the 3rd apple.
        if(random.crandX > random.buckX && apple.cappleY > 200){
          random.crandX -= 1;
        }
        else if(random.crandX < random.buckX && apple.cappleY > 200){
          random.crandX += 1;
        }

        // tracking the 4th apple.
        if(random.drandX > random.buckX && apple.dappleY > 200){
          random.drandX -= 2;
        }
        else if(random.drandX < random.buckX && apple.dappleY > 200){
          random.drandX += 2;
        }
      }
    }


    function defaultbucketChecker() {
      // finding the distance between bucket and apples.
      var adist = distancefmla(random.arandX, apple.aappleY, random.buckX+25, 450);
      var bdist = distancefmla(random.brandX, apple.bappleY, random.buckX+25, 450);
      var cdist = distancefmla(random.crandX, apple.cappleY, random.buckX+25, 450);
      var ddist = distancefmla(random.drandX, apple.dappleY, random.buckX+25, 450);


      if(adist <=50 && apple.aappleY >= 430){
          basicValues.Score += 5;
          apple.aappleY = 50;
          random.arandX = Math.floor((Math.random() * 500) + 1);
      }

      if(bdist <=50 && apple.bappleY >= 430){
          basicValues.Score += 5;
          apple.bappleY = 50;
          random.brandX = Math.floor((Math.random() * 500) + 1);
      }

      if(cdist <=50 && apple.cappleY >= 430){
          basicValues.Score += 5;
          apple.cappleY = 50;
          random.crandX = Math.floor((Math.random() * 500) + 1);
      }

      if(ddist <=50 && apple.dappleY >= 430){
          basicValues.Score += 5;
          apple.dappleY = 50;
          random.drandX = Math.floor((Math.random() * 500) + 1);
      }
    }


    function bonusbucketChecker(){
      // finding the distance between bucket and apples.
      var adist = distancefmla(random.arandX, apple.aappleY, random.bonusBuckX+25, 450);
      var bdist = distancefmla(random.brandX, apple.bappleY, random.bonusBuckX+25, 450);
      var cdist = distancefmla(random.crandX, apple.cappleY, random.bonusBuckX+25, 450);
      var ddist = distancefmla(random.drandX, apple.dappleY, random.bonusBuckX+25, 450);


      if(adist <=50 && apple.aappleY >= 430){
          basicValues.Score += 5;
          apple.aappleY = 50;
          random.arandX = Math.floor((Math.random() * 500) + 1);
      }

      if(bdist <=50 && apple.bappleY >= 430){
          basicValues.Score += 5;
          apple.bappleY = 50;
          random.brandX = Math.floor((Math.random() * 500) + 1);
      }

      if(cdist <=50 && apple.cappleY >= 430){
          basicValues.Score += 5;
          apple.cappleY = 50;
          random.crandX = Math.floor((Math.random() * 500) + 1);
      }

      if(ddist <=50 && apple.dappleY >= 430){
          basicValues.Score += 5;
          apple.dappleY = 50;
          random.drandX = Math.floor((Math.random() * 500) + 1);
      }
    }


    function ScoreChecker() {
      // erases the canvas.
      var elementD = document.getElementById("canvasContainer");
      var parent = elementD.parentNode;
      parent.removeChild(elementD);

      // giving score notification.
      document.getElementById("notifications").value = "";
      document.getElementById("notifications").value+= "Your score is "+basicValues.Score+"."+"\r\n";


      // making feedback setion visible.
      document.getElementById("feedbackContainer").style.backgroundColor = "#E5E4E2";


      highestScore.hstScore1 = parseFloat(localStorage.preHstScore1);
      highestScore.hstScore2 = parseFloat(localStorage.preHstScore2);


      if(basicValues.Score > highestScore.hstScore1){
        //localStorage.clear();
        localStorage.preHstScore1 = basicValues.Score.toString();
        localStorage.preHstScore2 = highestScore.hstScore1.toString();
        document.getElementById("notifications").value = "";
        document.getElementById("notifications").value+= "You have secure the highest score."+"\r\n"+"Please give name below..";

        document.getElementById("highscorerName").style.visibility = "visible";
        document.getElementById("submitt").style.visibility = "visible";
        document.getElementById("highscorerName").style.height = "30px";
      }
      else if(basicValues.Score < highestScore.hstScore1 && basicValues.Score > highestScore.hstScore2){
        localStorage.preHstScore1 = highestScore.hstScore1; 
        localStorage.preHstScore2 = basicValues.Score.toString();
        document.getElementById("notifications").value = "";
        document.getElementById("notifications").value+= "You have secure the second highest score."+"\r\n"+"Please give name.."+"\r\n";

        document.getElementById("highscorerName").style.visibility = "visible";
        document.getElementById("submitt").style.visibility = "visible";
        document.getElementById("highscorerName").style.height = "30px";
      }

      // creates Feedback section.
      var feedBack = "";
      if(basicValues.Score <= 50){
        feedBack = "Good try.. Play more to unlock Store!";
      }
      else if(basicValues.Score < 50 && basicValues.Score <= 200){
        feedBack = "Almost.. Need a little more!";
      }
      else if(basicValues.Score < 200 && basicValues.Score < 300){
        feedBack = "99% done.. You can increase 1!";
      }
      else if(basicValues.Score <= 300 && basicValues.Score < 400){
        feedBack = "Conguratulations.. You can unlock Buchet!";
        localStorage.bucketUnlockingStatus = "canBeUnlocked";
      }
      else if(basicValues.Score > 400){
        feedBack = "Conguratulations.. You can unlock Magnets!";
        localStorage.magnetUnlockingStatus = "canBeUnlocked";
      }


      var elementF = document.createElement("h2");
      var Feedback = document.getElementById("feedbackContainer");
      Feedback.appendChild(elementF);
      var textH = document.createTextNode(feedBack);
      elementF.appendChild(textH);


      var elementHr = document.createElement("hr");
      Feedback.appendChild(elementHr);


      var elementP = document.createElement("h5");
      Feedback.appendChild(elementP);
      var textP = document.createTextNode("Thank You for trying my game. Please be checking my updates. So you can play my new game!!");
      elementP.appendChild(textP);

      var elementNP = document.createElement("h5");
      Feedback.appendChild(elementNP);
      var textNP = document.createTextNode("Please refresh the page or click the button on right if you want to go to Main Menu and play the game again!! ^_^");
      elementNP.appendChild(textNP);

      // making main menu button visible.
      document.getElementById("backToMenuButton").style.visibility = "visible";
      document.getElementById("backToMenuButton").style.height = "50px";
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
          if(random.buckX > 0){
            movementHandler.leftHandler();
          }
          break;
        case 39:
          if(random.buckX < 500-50){
            movementHandler.rightHandler();
          }
          break;
        case 68:
          if(localStorage.bucketStatus=="unlocked" && random.bonusBuckX<500-50){
            movementHandler.bonusrightHandler();
          }
          break;
        case 65:
          if(localStorage.bucketStatus=="unlocked" && random.bonusBuckX>0){
            movementHandler.bonusleftHandler();
          }
          break;
      }
    }


    function ereseScreenContents(){
      var elementD = document.getElementById("accordianContainer");
      var parent = elementD.parentNode;
      parent.removeChild(elementD);
    }


    function createCanvas(){
      canvas.height = 500;
      canvas.width = 500;
    }


    // extra functions.
    function easyGame(){
      basicValues.speed = 0.75;
      basicValues.missLimit = 30;
      document.getElementById("notifications").value = "";
      document.getElementById("notifications").value+= "You have selected Easy Game."+"\r\n";
    }
    function mediumGame(){
      basicValues.speed = 1.5;
      basicValues.missLimit = 25;
      document.getElementById("notifications").value = "";
      document.getElementById("notifications").value+= "You have selected Medium Game."+"\r\n";
    }
    function hardGame(){
      basicValues.speed = 1.8;
      basicValues.missLimit = 20;
      document.getElementById("notifications").value = "";
      document.getElementById("notifications").value+= "You have selected Hard Game."+"\r\n";
    }

    function updateNotifications(){
      document.getElementById("notifications").value="";
      if(localStorage.bucketUnlockingStatus == "canBeUnlocked"){
        document.getElementById("notifications").value+= "Your score reached 300. You can unlock bucket in store.."+"\r\n";
      }
      else if(localStorage.magnetUnlockingStatus == "canBeUnlocked"){
        document.getElementById("notifications").value+= "Your score reached 400. You can unlock magnet in store.."+"\r\n";
      }
      else{
        document.getElementById("notifications").value+= "You're welcome to Rabin's Apple game."+"\r\n"+"Hope to see your name as Highest Scorer.."+"\r\n";
      }
    }

    function unlckBuckt(){
      if(localStorage.bucketUnlockingStatus == "canBeUnlocked"){
        localStorage.bucketStatus = "unlocked";
        localStorage.bucketUnlockingStatus = "islocked";
        document.getElementById("notifications").value = "";
        document.getElementById("notifications").value+= "You have unlocked Bucket."+"\r\n";
      }
      else{
        localStorage.bucketStatus = "locked";
        document.getElementById("notifications").value = "";
        document.getElementById("notifications").value+= "You need to score 300 to unlock the Bucket."+"\r\n";
      }
    }

    function unlckMgnt(){
      if(localStorage.magnetUnlockingStatus == "canBeUnlocked"){
        localStorage.magnetStatus = "unlocked";
        localStorage.magnetUnlockingStatus = "islocked";
        document.getElementById("notifications").value = "";
        document.getElementById("notifications").value+= "You have unlocked Magnet."+"\r\n";
      }
      else{
        localStorage.magnetStatus = "locked";
        document.getElementById("notifications").value = "";
        document.getElementById("notifications").value+= "You need to score 400 to unlock the Magnet."+"\r\n";
      }
    }

    function basicSetup(){
      localStorage.setItem("preHstScore1","0");
      localStorage.setItem("preHstScore2","0");
      localStorage.setItem("hstScoreName1","Unknown");
      localStorage.setItem("hstScoreName2","Unknown");
      localStorage.setItem("scoreIdentifier","");
      localStorage.setItem("magnetStatus","locked");
      localStorage.setItem("bucketStatus","locked");
      localStorage.setItem("magnetUnlockingStatus","islocked");
      localStorage.setItem("bucketUnlockingStatus","islocked");
      alert("Basic setup is completed.");
    }

    function submittName(){
      if(basicValues.Score > highestScore.hstScore1){
        localStorage.scoreIdentifier ="secured";
        localStorage.hstScoreName2 = localStorage.hstScoreName1;
        localStorage.hstScoreName1 = document.getElementById("highscorerName").value;
        document.getElementById("notifications").value = "";
        document.getElementById("notifications").value+= "Your name is added to highest scorer."+"\r\n";
      }
      else if(basicValues.Score < highestScore.hstScore1 && basicValues.Score > highestScore.hstScore2){
        localStorage.scoreIdentifier ="secured";
        localStorage.hstScoreName2 = document.getElementById("highscorerName").value;
        document.getElementById("notifications").value = "";
        document.getElementById("notifications").value+= "Your name is added to second highest scorer."+"\r\n";
      }
    }

    function updateHighsocre(){
      if(localStorage.scoreIdentifier == "secured"){
        if(localStorage.hstScoreName1 != "Unknown"){
          document.getElementById("hstScre1").style.height="30px";
          document.getElementById("hstScre1").style.visibility="visible";
          document.getElementById("hstScre1").innerHTML="";
          document.getElementById("hstScre1").value += "1. "+localStorage.preHstScore1+" by "+"'"+localStorage.hstScoreName1+"'";
        }
        if(localStorage.hstScoreName2 != "Unknown"){
          document.getElementById("hstScre2").style.height="30px";
          document.getElementById("hstScre2").style.visibility="visible";
          document.getElementById("hstScre2").innerHTML = "";
          document.getElementById("hstScre2").value += "2. "+localStorage.preHstScore2+" by "+"'"+localStorage.hstScoreName2+"'";
        }
      }
      else{
        document.getElementById("notifications").value = "";
        document.getElementById("notifications").value+= "No high scores to be shown.."+"\r\n";
      }
    }

// End of codes.