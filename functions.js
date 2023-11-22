    // To get the current file name

function titlename(){

    var path = window.location.pathname;
    var fileName = path.split("/").pop();

    console.log("Current file name: " + fileName);

    if(fileName == "home.html"){
        document.title = "New Era | Welcome";

    }else if(fileName == "courses.html"){
        document.title = "Courses | Get started";

    }else if(fileName == "test.html"){
        document.title = "Just for test";
    }
}

    // To generate the favicon for the web page

function generateFavicon() {
      const faviconText = document.getElementById('faviconText').value;
      
      const canvas = document.createElement('canvas');
      canvas.width = 32;
      canvas.height = 32;
      
      const context = canvas.getContext('2d');
      context.fillStyle = '#FF0000'; 
      context.fillRect(0, 0, canvas.width, canvas.height);
      context.font = '16px Arial';
      context.fillStyle = '#FFFFFF'; 
      context.fillText(faviconText, 6, 22); 
      
      const favicon = document.getElementById('favicon');

      var path = window.location.pathname;
      var fileName = path.split("/").pop();

      favicon.href = canvas.toDataURL('images/VR_icon.png');
    }

    //  Program

titlename();
generateFavicon();