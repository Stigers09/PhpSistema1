/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    /**
     * Array con las imagenes y enlaces que se iran mostrando en la web
     */
    var imagenes=new Array(
        ['./Recursos/images/parteEdwin/ropaBebe/camiseta.jpg'/*,'http://www.NubecitasDeColores.com'*/],
        ['./Recursos/images/parteEdwin/ropaBebe/Pijama.jpg'],
        ['./Recursos/images/parteEdwin/ropaBebe/vestido.jpg']        
    );
    var contador=0;
 
    /**
     * Funcion para cambiar la imagen y link
     */
    
    function rotarImagenes1()
    {
        // cambiamos la imagen y la url
        contador++;
        document.getElementById("imagen1").src=imagenes[contador%imagenes.length][0];
        document.getElementById("link1").href=imagenes[contador%imagenes.length][1];
    }
    function rotarImagenes2()
    {
        // cambiamos la imagen y la url
        contador++;
        document.getElementById("imagen2").src=imagenes[contador%imagenes.length][0];
        document.getElementById("link2").href=imagenes[contador%imagenes.length][1];
    }
    function rotarImagenes3()
    {
        // cambiamos la imagen y la url
        contador++;
        document.getElementById("imagen3").src=imagenes[contador%imagenes.length][0];
        document.getElementById("link3").href=imagenes[contador%imagenes.length][1];
    }
    
 
    /**
     * Función que se ejecuta una vez cargada la página
     */
    onload=function()
    {
        // Cargamos una imagen aleatoria
        rotarImagenes1();
        rotarImagenes2();
        rotarImagenes3();
 
        // Indicamos que cada 5 segundos cambie la imagen
        setInterval(rotarImagenes1,9000);
        setInterval(rotarImagenes2,2000);
        setInterval(rotarImagenes3,10000);
    };


