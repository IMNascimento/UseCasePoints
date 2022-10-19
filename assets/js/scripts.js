function infoOpen(el) {
    var display = document.getElementById(el).style.display;
    
    if (display  == "none") {
        document.getElementById(el).style. display  = 'block';
        document.documentElement.style.overflow = 'hidden';
    }else{
        document.getElementById(el).style. display  = 'none';
        document.documentElement.style.overflow = 'auto';
    }
} 
function infoClose(el) {
    var display = document.getElementById(el).style.display;

    if (display  == "block") {
        document.getElementById(el).style. display  = 'none';
        document.documentElement.style.overflow = 'auto';
    }else{
        document.getElementById(el).style. display  = 'block';
        
    }
   
}





   
