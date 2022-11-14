$(document).ready(function(){
    let func = '';
    let id_usuario = $('#id_usuario').val();
    find_user(id_usuario);
    function find_user(dato){
        func = 'search_user'
        $.post('../controllers/userControler.php',{dato,func},(response)=>{
            let nombre='',apellidos='',edad='',dni='',tipo='',telefono='',residencia='', correo='',sexo='',adicional='';
            const usuario = JSON.parse(response);
            nombre+=`${usuario.nombre}`;
            apellidos+=`${usuario.apellidos}`;
            edad+=`${usuario.edad}`;
            dni+=`${usuario.dni}`;
            tipo+=`${usuario.tipo}`;
            telefono+=`${usuario.telefono}`;
            residencia+=`${usuario.residencia}`;
            correo+=`${usuario.correo}`;
            sexo+=`${usuario.sexo}`;
            adicional+=`${usuario.adicional}`;
            $('#nombre_us').html(nombre);
            $('#apellidos_us').html(apellidos);
            $('#edad_us').html(edad);
            $('#dni_us').html(dni);
            $('#telefono_us').html(telefono);
            $('#residencia_us').html(residencia);
            $('#correo_us').html(correo);
            $('#sexo_us').html(sexo);
            $('#adicional_us').html(adicional);
            $('#tipo_us').html(tipo);
        })
    }
});