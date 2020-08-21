@extends('tratamientos.formularios')
@section('title')
 Usuario | Test | Ansiedad
@endsection
@section('formulario')
    <form action="{{route('form_Ansiedad')}}" method="post">

        @csrf
        <table>
            <tr>
                <td>
                    <label class="label" for="">¿Con frecuencia te sientes angustiado o con un nudo en la garganta?</label>
                </td>
                <td>
                        <select class="input-selection"  name="pregunta1" id="">
                            <option value='1'>Si</option>
                            <option value='2'>No</option>

                        </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="label" for="">¿Con frecuencia tienes dificultades para conciliar o mantener el sueño?</label>
                </td>
                <td>
                    <select class="input-selection" name="pregunta2" id="">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="label" for="">¿Con frecuencia tienes dificultades para concentrarte? </label>
                </td>
                <td>
                    <select class="input-selection" name="pregunta3" id="">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="label" for="">¿Con frecuencia te encuentras muy preocupado o atemorizado?</label>
                </td>
                <td>
                    <select class="input-selection" name="pregunta4" id="">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="label" for="">¿Con frecuencia te irritas con facilidad o te encuentras de mal humor?</label>
                </td>
                <td>
                    <select class="input-selection" name="pregunta5" id="">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="label" for="">¿Con frecuencia realizas movimientos repetitivos (por ejemplo: temblor de piernas, morderte las uñas, tocarte el pelo)?</label>
                </td>
                <td>
                    <select class="input-selection" name="pregunta6" id="">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="label" for="">¿Con frecuencia padeces molestias estomacales o nauseas?</label>
                </td>
                <td>
                    <select class="input-selection" name="pregunta7" id="">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="label" for="">¿Con frecuencia tienes pensamientos desagradables o te preocupas por posibles desgracias futuras?</label>
                </td>
                <td>
                    <select class="input-selection" name="pregunta8" id="">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="label" for="">¿Con frecuencia intentas evitar o escapar de determinadas situaciones?</label>
                </td>
                <td>
                    <select class="input-selection" name="pregunta9" id="">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="label" for="">¿Con frecuencia te sientes nervioso e inquieto?</label>
                </td>
                <td>
                    <select class="input-selection" name="pregunta10" id="">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <tr>
                    <td>
                        <label class="label" for="">¿Con frecuencia tienes dificultades para recordar cosas?</label>
                    </td>
                    <td>
                        <select class="input-selection" name="pregunta11" id="">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <tr>
                        <td>
                            <label class="label" for="">¿Cuando te encuentras frente a una situacion que implica estres con frecuencia te sientes agobiado, con ganas de llorar?</label>
                        </td>
                        <td>
                            <select class="input-selection" name="pregunta12" id="">
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                <td><input class="btn" type="submit" value="Enviar"></td>
            </tr>
        </table>
    </form>
@endsection
