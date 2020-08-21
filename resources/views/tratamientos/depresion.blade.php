@extends('tratamientos.formularios')
@section('title')
 Usuario | Test | Depresion
@endsection
@section('formulario')
    <form action="{{route('form_Depresion')}}" method="post">

        @csrf
        <table>
            <tr>
                <td>
                    <label class="label" for="">¿Te sientes triste o irritable durante la mayor parte del día y durante la mayor parte de los días, durante al menos dos semanas?</label>
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
                    <label class="label" for="">¿Has perdido interés o ha disminuido tu capacidad para disfrutar o sentir placer en actividades que antes disfrutabas?</label>
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
                    <label class="label" for="">¿Has perdido peso sin hacer dieta o aumentado de peso? </label>
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
                    <label class="label" for="">¿Ha disminuido o aumentado tu apetito en al menos las últimas dos semanas?</label>
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
                    <label class="label" for="">¿Padeces de insomnio (dificultad para conciliar o mantener el sueño) o hipersomnio (sueño excesivamente prolongado y profundo?</label>
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
                    <label class="label" for="">'¿Padeces una agitación o enlentecimiento psicomotriz durante la mayor parte de los días? </label>
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
                    <label class="label" for="">¿Te sientes fatigado, con pérdida de energía o con debilidad física?</label>
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
                    <label class="label" for="">¿Padeces una disminución en la capacidad para pensar o concentrarte, o tienes dificultades para tomar decisiones?</label>
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
                    <label class="label" for="">¿Tienes pensamientos recurrentes de muerte o ideas suicidas?</label>
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
                        <label class="label" for="">¿Tu estado de ánimo o los diferentes síntomas que estas padeciendo, ¿te provocan un malestar significativo o interfieren en tus relaciones familiares, sociales, laborales o de otras áreas importantes de tu vida?</label>
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
                            <label class="label" for="">¿Experimentas sentimientos de desesperanza y/o pesimismo? </label>
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
