/** añadir los campos para desaparecer los divs de los grids */
function botonfalta(val){
    if(val==1){
        document.getElementById('rd1').style.display = ''; document.getElementById('rd2').style.display = 'none'; document.getElementById('rd3').style.display = 'none'; 
        document.getElementById('sl1').style.display = 'none'; document.getElementById('sl2').style.display = 'none'; document.getElementById('sl3').style.display = 'none';
    } else if (val==2) {
        document.getElementById('rd1').style.display = 'none'; document.getElementById('rd2').style.display = ''; document.getElementById('rd3').style.display = 'none';
        document.getElementById('sl1').style.display = 'none'; document.getElementById('sl2').style.display = 'none'; document.getElementById('sl3').style.display = 'none';
    } else {
        document.getElementById('rd1').style.display = 'none'; document.getElementById('rd2').style.display = 'none'; document.getElementById('rd3').style.display = '';
        document.getElementById('sl1').style.display = 'none'; document.getElementById('sl2').style.display = 'none'; document.getElementById('sl3').style.display = 'none';
    }
}

function botoncategoria(val){
    if (val==1){
        document.getElementById('sl1').style.display = ''; document.getElementById('sl2').style.display = 'none'; document.getElementById('sl3').style.display = 'none';
    } else if (val==2) {
        document.getElementById('sl2').style.display = ''; document.getElementById('sl1').style.display = 'none'; document.getElementById('sl3').style.display = 'none';
    } else if (val==3){
        document.getElementById('sl3').style.display = ''; document.getElementById('sl2').style.display = 'none'; document.getElementById('sl1').style.display = 'none';
    } else if (val==4){
        document.getElementById('sl4').style.display = ''; document.getElementById('sl5').style.display = 'none'; document.getElementById('sl6').style.display = 'none';
    } else if (val==5) {
        document.getElementById('sl5').style.display = ''; document.getElementById('sl4').style.display = 'none'; document.getElementById('sl6').style.display = 'none';
    } else if (val==6){
        document.getElementById('sl6').style.display = ''; document.getElementById('sl4').style.display = 'none'; document.getElementById('sl5').style.display = 'none';
    } else if (val==7){
        document.getElementById('sl7').style.display = ''; document.getElementById('sl8').style.display = 'none'; document.getElementById('sl9').style.display = 'none';
    } else if (val==8) {
        document.getElementById('sl8').style.display = ''; document.getElementById('sl7').style.display = 'none'; document.getElementById('sl9').style.display = 'none';
    } else {
        document.getElementById('sl9').style.display = ''; document.getElementById('sl7').style.display = 'none'; document.getElementById('sl8').style.display = 'none';
    }
}



