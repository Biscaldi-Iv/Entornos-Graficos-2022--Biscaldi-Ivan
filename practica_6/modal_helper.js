var table = document.getElementById('tbl_ciudades');
for (var r = 0, n = table.rows.length; r < n; r++) {
    table.rows[r].onclick = function () {
            //let r = table.rows[r];
            document.getElementById('formId1').value = this.cells[0].innerHTML;
            document.getElementById('ciudad').value = this.cells[1].innerHTML;
            document.getElementById('pais').value = this.cells[2].innerHTML;
            document.getElementById('habitantes').value = this.cells[3].innerHTML;
            document.getElementById('superficie').value = this.cells[4].innerHTML;
            document.getElementById('metro').selectedIndex= this.cells[5].innerHTML;
        };
}


function regMode(){

	document.getElementById('env').className="btn btn-success";
	document.getElementById('env').innerHTML="Registrar";
	
    document.getElementById('ciudad').removeAttribute("readonly"  , false);
    document.getElementById('pais').removeAttribute("readonly"  , false);
    document.getElementById('habitantes').removeAttribute("readonly", false);
    document.getElementById('superficie').removeAttribute("readonly"  , false);
    
	document.getElementById('formId1').value = null;
    document.getElementById('ciudad').value = null;
    document.getElementById('pais').value = null;
    document.getElementById('habitantes').value = null;
    document.getElementById('superficie').value = null;
    for (x = 0; x < document.getElementById('metro').options.length; x++){
        document.getElementById('metro').options[x].removeAttribute("readonly", false);
    };

    document.getElementById('accion').selectedIndex=0;
}

function editMode(){

	document.getElementById('env').className="btn btn-success";
	document.getElementById('env').innerHTML="Guardar";
	
	document.getElementById('ciudad').removeAttribute("readonly"  , false);
    document.getElementById('pais').removeAttribute("readonly"  , false);
    document.getElementById('habitantes').removeAttribute("readonly", false);
    document.getElementById('superficie').removeAttribute("readonly", false);
    for (x = 0; x < document.getElementById('metro').options.length; x++){
        document.getElementById('metro').options[x].removeAttribute("readonly", false);
    };
	
	document.getElementById('accion').selectedIndex=1;
}

function deleteMode(){

	document.getElementById('env').className="btn btn-danger";
	document.getElementById('env').innerHTML="Eliminar";
	
	document.getElementById('ciudad').setAttribute("readonly" , "readonly" , false);
    document.getElementById('pais').setAttribute("readonly" , "readonly" , false);
    document.getElementById('habitantes').setAttribute("readonly", "readonly", false);
    document.getElementById('superficie').setAttribute("readonly", "readonly", false);
    for (x = 0; x < document.getElementById('metro').options.length; x++){
        document.getElementById('metro').options[x].setAttribute("readonly","readonly",false);
    }
	
	document.getElementById('accion').selectedIndex=2;
}
