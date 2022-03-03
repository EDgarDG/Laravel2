<!-- DIRECTIVAS BLADE -->
@extends("layouts.plantilla")


@section("cabecera")


@endsection


@section("infoGeneral")
    <p>Aquí iría el contenido principal de la página</p>

    @if(is_countable($alumnos) && count($alumnos) > 0)
        <table width="50%" border="1">
            @foreach($alumnos as $persona)
                <tr>
                    <td>
                        {{ $persona }}
                    </td>
                </tr>
            @endforeach
        </table>

        @else
            {{ "No existen Alumnos para mostrar..." }}
    @endif

@endsection

