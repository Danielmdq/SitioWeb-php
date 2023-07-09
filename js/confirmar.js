/*Creo una funcion para confirmar la eliminacion de una registro.
el parametro e es para que la funcion reciba un eventro , se puede usar
otra palabra por ejemplo evento o event.
se usa la funcion confirm que es parecida al alert pero se usa para confirmar cosas
*/

function confirmar(e){

    if(confirm("¿Esta seguro que desea eliminar este registro?")){
        return true;

    }else{
        e.preventDefault();
    }

}


/*Como los elementos de la tabla donde tengo que pulsar pueden ser muchos
los voy a seleccionar ppor medio de querySelectorAll para tomarlos a todos y los voy a recorrer
con un ciclo para asignarles a cada un el evento clic*/

let botonDelete = document.querySelectorAll(".linkDelete");

for(let i=0; i<botonDelete.length; i++){

    botonDelete[i].addEventListener('click',confirmar);
}

