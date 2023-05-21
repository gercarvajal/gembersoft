

function validarpubli()
{
    if(document.form1.frmtipop.value=="0")
    {
        swal("Error!", "Debe ingresar un tipo de propiedad ", "error");
        document.form1.frmtipop.focus();
        return false;
    }
    if(document.form1.region.value=="0")
    {
        swal("Error!", "Debe ingresar una region ", "error");
        document.form1.region.focus();
        return false;
    }
    if(document.form1.prov.value=="0")
    {
        swal("Error!", "Debe ingresar una provincia ", "error");
        document.form1.prov.focus();
        return false;
    }
    if(document.form1.comu.value=="0")
    {
        swal("Error!", "Debe ingresar una comuna ", "error");
        document.form1.comu.focus();
        return false;
    }
    if(document.form1.frmprecio.value=="")
    {
        swal("Error!", "Debe ingresar un precio ", "error");
        document.form1.frmprecio.focus();
        return false;
    }
    if(document.form1.frmpreciouf.value=="")
    {
        swal("Error!", "Debe ingresar un precio en uf", "error");
        document.form1.frmpreciouf.focus();
        return false;
    }
    if(document.form1.frmarea.value=="")
    {
        swal("Error!", "Debe ingresar el area total", "error");
        document.form1.frmarea.focus();
        return false;
    }
    if(document.form1.frmareac.value=="")
    {
        swal("Error!", "Debe ingresar el area construida", "error");
        document.form1.frmareac.focus();
        return false;
    }
    if(document.form1.frmdormitorios.value=="")
    {
        swal("Error!", "Debe ingresar la cantidad de dormitorios", "error");
        document.form1.frmdormitorios.focus();
        return false;
    }
    if(document.form1.frmbanos.value=="")
    {
        swal("Error!", "Debe ingresar la cantidad de baños", "error");
        document.form1.frmbanos.focus();
        return false;
    }
    if(document.form1.frmdesc.value=="")
    {
        swal("Error!", "Debe ingresar Una descripcion", "error");
        document.form1.frmdesc.focus();
        return false;
    }

    var imagen = document.getElementById("imagenes[]").files;
 
    if(imagen.length>10 ||imagen.length<1)
    {
        swal("Error!", "Debe ingresar entre 1 y 10 imagenes", "error");
        imagen.focus();
    return false;
    }
    



    swal("Completado!", "Propiedad Publicada Correctamente", "success");

    setTimeout(function(){
        document.form1.submit();
    }, 2500);

}


function ValidarAgregar()
{


    if(document.form1.name.value=="")
    {
        swal("Error!", "Debe ingresar un nombre", "error");
        document.form1.name.focus();
        return false;
    }

    if(document.form1.Pre.value=="")
    {
        swal("Error!", "Debe ingresar un precio", "error");
        document.form1.Pre.focus();
        return false;
    }

    if(document.form1.tipo.value=="")
    {
        swal("Error!", "Debe ingresar tipo", "error");
        document.form1.tipo.focus();
        return false;
    }

    if(document.form1.estado.value=="0")
    {
        swal("Error!", "Debe ingresar un estado ", "error");
        document.form1.estado.focus();
        return false;
    }

    if(document.form1.Des.value=="")
    {
        swal("Error!", "Debe ingresar una descripcion", "error");
        document.form1.Des.focus();
        return false;
    }


    swal("Completado!", "Producto agregado Correctamente", "success");

    setTimeout(function(){
        document.form1.submit();
    }, 2000);

}


