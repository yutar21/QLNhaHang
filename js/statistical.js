function genderChanged(obj){
    var value = obj.value;
    if(value==='month'){
        document.getElementById('div1').style.display = "inline";
        document.getElementById('div2').style.display = "none";
        document.getElementById('div3').style.display = "none";
    }else if(value==='year'){
        document.getElementById('div1').style.display = "none";
        document.getElementById('div2').style.display = "inline";
        document.getElementById('div3').style.display = "none";
    }else{
        document.getElementById('div1').style.display = "none";
        document.getElementById('div2').style.display = "none";
        document.getElementById('div3').style.display = "inline";
    }
}