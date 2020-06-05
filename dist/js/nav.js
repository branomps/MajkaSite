let count = 0;
function openNav() {
    if (count === 0){
        document.getElementById("sidenav").style.width = "250px";
        count += 1;
        //console.log("count is" + count);
    }else{
        closeNav();
        //console.log("count is" + count);
    }
    
  }
  
  function closeNav() {
    document.getElementById("sidenav").style.width = "0";
    count -= 1;
    //console.log("I got into closeNav");
  }