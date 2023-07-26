document.addEventListener( "DOMContentLoaded", ()=>{


    let buttonsAbrir =[
        "aprobarEventoAbrir",
        "historialEventoAbrir"

    ]
    let ventanasAbrir =[
        "eventosPorAprobarAdmin",
        "eventosAprobados"
    ]



    for( let i = 0; i < buttonsAbrir.length; i ++ ){
        
        document.getElementById( buttonsAbrir[i] ).addEventListener( 'click', () => {
            ventanasAbrir.forEach(element => {
                document.getElementById( element ).style.display = "none";
            });
            document.getElementById( ventanasAbrir[i] ).style.display = "block";
        } );
    } 
    


} );



