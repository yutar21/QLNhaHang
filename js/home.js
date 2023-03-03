function show_DsBan(){
    document.getElementById('nav-home').style.display="table";
    document.getElementById('nav-profile').style.display="none";
}

function show_Menu(){
    document.getElementById('nav-home').style.display="none";
    document.getElementById('nav-profile').style.display="block";
}

function show_Menu1(){
    document.getElementById('menu1').style.display = "block";
    document.getElementById('menu2').style.display = "none";
    document.getElementById('menu3').style.display = "none";
    document.getElementById('menu4').style.display = "none";
}

function show_Menu2(){
    document.getElementById('menu1').style.display = "none";
    document.getElementById('menu2').style.display = "block";
    document.getElementById('menu3').style.display = "none";
    document.getElementById('menu4').style.display = "none";
}

function show_Menu3(){
    document.getElementById('menu1').style.display = "none";
    document.getElementById('menu2').style.display = "none";
    document.getElementById('menu3').style.display = "block";
    document.getElementById('menu4').style.display = "none";
}

function show_Menu4(){
    document.getElementById('menu1').style.display = "none";
    document.getElementById('menu2').style.display = "none";
    document.getElementById('menu3').style.display = "none";
    document.getElementById('menu4').style.display = "block";
}



function addMealFunction(ma_mon, tenmon, giamon) {
    mamon= "'"+ ma_mon +"'";
    tm=",'"+ tenmon +"'";
    idMealAdded= "idMeal"+ ma_mon;
        var html=` <tr id="${idMealAdded}" class="${ma_mon}"> <td style="width :30%"  class="ten__mon"><input type="hidden" name="ten_mons[]" type="number" value="${ma_mon}" />${tenmon} </td><td style="width :20%" class="so__luong"> <input style="width: 100px" name="so_luongs[]" type="number" min="1" step="1" value="1" /> </td><td style="width :20%" class="gia__mon" name="gia_mons" ><input type="hidden" name="gia_mons[]" type="number" value="${giamon}" />${giamon}</td><td style="width :20%" class="thanh__tien"></td><td hidden> <input type="text" value="${ma_mon}"name="ma_mons[]" > </td><td style="width :10%" > <button class="del_mon" type="button" onclick="deleteMealFunction(${mamon}${tm})" >Del</button> </td> </tr>`;
    document.getElementById("addMeal"+tenmon).disabled= true;
    document.getElementById("bang_hoa_don").insertAdjacentHTML('afterend', html);
    // document.getElementById("addMeal"+tenmon+"db").disabled= true;
    
}

function deleteMealFunction(idMeal, tenmon) {
    var element = document.getElementById("idMeal"+idMeal);
    element.parentNode.removeChild(element);
    document.getElementById("addMeal"+tenmon).disabled= false;
    document.getElementById("addMeal"+tenmon+"db").disabled= false;
}