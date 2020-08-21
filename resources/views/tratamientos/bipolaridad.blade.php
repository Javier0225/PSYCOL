@extends('tratamientos.formularios')
@section('title')
 Usuario | Test | Depresion
@endsection
@section('formulario')
    <form action="{{route('form_Bipolaridad')}}" method="post">

        @csrf
        <table>
            <tr>
                <td>
                    <label class="label" for="">¿Experimentaste un estado de ánimo anormal y persistentemente expansivo o eufórico?</label>
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
                    <label class="label" for="">¿Experimentaste un estado de ánimo anormal y persistentemente irritable?</label>
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
                    <label class="label" for="">¿Experimentaste una sensación de gran confianza en ti mismo y autovaloración, mientras que en otros periodos esa gran confianza o autovaloración se ve muy disminuida?</label>
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
                    <label class="label" for="">¿Experimentaste una disminución en la necesidad de dormir, y de todos modos no has sentido cansancio?</label>
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
                    <label class="label" for="">¿Te distraías con mucha más facilidad de lo habitual, incluso por estímulos banales o irrelevantes?</label>
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
                    <label class="label" for="">'¿Te implicaste excesivamente en actividades placenteras, de riego, o te comportabas de manera irresponsable (por ejemplo: indiscreciones sexuales, conducción imprudente, compras exageradas, viajes sorpresivos)?</label>
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
                    <label class="label" for="">¿Te encontrabas más comunicativo o hablador de lo usual, o lo hacías más rápido de lo habitual?</label>
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
                    <label class="label" for="">¿Experimentaste un aumento significativo de la velocidad del pensamiento, pudiendo llegar al punto de cambiar de temas de manera constante y sin motivos?</label>
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
                    <label class="label" for="">¿Te sentías con más energías, sumamente activo y hacías muchas más cosas de lo habitual?</label>
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
                    <tr>
                        <td>
                            <label class="label" for="">¿Tienes dificultades para pensar, concentrarte o tomar decisiones? </label>
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
