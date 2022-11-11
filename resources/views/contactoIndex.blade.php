<h1>Listado de Autos</h1>

    <a href="/contactoCreate">Introducir Nuevo contacto</a>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Mensaje</th>
        </tr>
    
        @foreach ($Contacto as $contacto)
        <tr>
            <td>
                <a href="/contacto/{{$contacto->id}}">
                {{$contacto ->nombre}}
            </a>
            </td>
            <td>{{$contacto ->correo}}</td>
            <td>{{$contacto ->mensaje}}</td>

        
        </tr>
        @endforeach
        </table>