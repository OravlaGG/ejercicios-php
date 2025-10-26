/*

Validaciones para el formulario del ejercicio 12
Álvaro Gómez González

*/

document.getElementById('formT').addEventListener("submit",function(event){
    
    event.preventDefault();

    if(validarFormulario())
    {
        document.getElementById('formT').submit();//impide que envie nada al php
    }
});

document.getElementById('binario').addEventListener("change",function(){
    limpiaError('binario');
});

function validarFormulario()
{
    let binario = parseInt(document.getElementById('binario').value);
    let correcto = true;


    if (Number.isNaN(binario) || binario < 0)
    {
        marcarError('binario');
        correcto = false;
    }

    return correcto;
}

function marcarError(id)
{
    document.getElementById(id).style.borderColor="red";
    document.getElementById(id+'Help').style.visibility="visible";
}

function limpiaError(id)
{
    document.getElementById(id).style.borderColor="#dee2e6";
    document.getElementById(id+'Help').style.visibility="hidden";
}