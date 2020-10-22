function Play(){
    var a = document.getElementById('song');
    var link = a.value;
    if(link === null){
        return(alert("Enter link"));
    }
    else{
        var audio = new Audio(link);
        audio.play();
    }
}