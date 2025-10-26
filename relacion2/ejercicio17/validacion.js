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

document.getElementById('dividendo').addEventListener("change",function(){
    limpiaError('dividendo');
});
document.getElementById('divisor').addEventListener("change",function(){
    limpiaError('divisor');
});

function validarFormulario()
{
    let divisor = parseFloat(document.getElementById('divisor').value);
    let dividendo = parseFloat(document.getElementById('dividendo').value);
    let resto = document.getElementById('resto').checked;
    let cociente = document.getElementById('cociente').checked;
    let correcto = true;


    if (Number.isNaN(divisor) || divisor == 0)
    {
        marcarError('divisor');
        correcto = false;
    }
    if (Number.isNaN(dividendo))
    {
        marcarError('dividendo');
        correcto = false;
    }

    if (!resto && !cociente)
    {
        document.getElementById('checkHelp').style.visibility="visible";
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