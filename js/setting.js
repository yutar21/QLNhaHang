function show_Edit_MonAn(){
    document.getElementById('table_edit_monan').style.display="table";
    document.getElementById('get_member').style.display="none";
}
function showUpdate_member(){
    document.getElementById('get_member').style.display="inline";
    document.getElementById('table_edit_monan').style.display="none";
    document.getElementById('mon_phu').style.display = "none";
    document.getElementById('mon_chinh').style.display = "none";
    document.getElementById('do_uong').style.display = "none";
    document.getElementById('hoa_qua').style.display = "none";
}
function showTable1(){
    document.getElementById('mon_phu').style.display = "table";
    document.getElementById('mon_chinh').style.display = "none";
    document.getElementById('do_uong').style.display = "none";
    document.getElementById('hoa_qua').style.display = "none";
}
function showTable2(){
    document.getElementById('mon_phu').style.display = "none";
    document.getElementById('mon_chinh').style.display = "table";
    document.getElementById('do_uong').style.display = "none";
    document.getElementById('hoa_qua').style.display = "none";
}
function showTable3(){
    document.getElementById('mon_phu').style.display = "none";
    document.getElementById('mon_chinh').style.display = "none";
    document.getElementById('do_uong').style.display = "table";
    document.getElementById('hoa_qua').style.display = "none";
}
function showTable4(){
    document.getElementById('mon_phu').style.display = "none";
    document.getElementById('mon_chinh').style.display = "none";
    document.getElementById('do_uong').style.display = "none";
    document.getElementById('hoa_qua').style.display = "table";
}

