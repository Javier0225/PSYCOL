@extends('tratamientos.formularios')
@section('title')
 Usuario | Test | Depresion
@endsection
@section('formulario')
    <form action="{{route('form_Limite')}}" method="post">

        @csrf
        <table>
            <tr>
                <td>
                    <label class="label" for="">¿Sufres de miedo intenso al enfrentarte a una situación que significaría abandono, realizas esfuerzos frenéticos/desesperados para evitarlo?</label>
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
                    <label class="label" for="">¿Tienes a menudo ataques de ira intensa?</label>
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
                    <label class="label" for="">¿tienes sentimientos frecuentes de vacío o soledad?</label>
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
                    <label class="label" for="">¿Tienes conductas impulsivas (¿consumo de sustancias psicoactivas, relaciones sexuales, exceso de alimentación?)</label>
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
                    <label class="label" for="">¿Tu estado del ánimo suele variar con facilidad?</label>
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
                    <label class="label" for="">'¿La imagen que tienes sobre ti cambia a menudo? (dudar sobre tu valor personal, visualizarte como alguien superior) </label>
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
                    <label class="label" for="">¿Te sientes incapaz para afrontar el futuro?</label>
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
                    <label class="label" for="">¿Tienes relaciones intensas, con continua inestabilidad (constantes peleas, rupturas)?</label>
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
                    <label class="label" for="">¿Tu estado del ánimo suele variar con facilidad?</label>
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
                    <label class="label" for="">¿Con frecuencia sientes que eres atormentado, tratado injustamente por alguien?</label>
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
                        <label class="label" for="">¿Has tenido comportamientos, intentos, o amenazas suicidas recurrentes o comportamientos de autolesión?</label>
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
                            <label class="label" for="">¿Idealizas o devaluas a las personas con frecuencia? (Yendo de un sentimiento a otro) </label>
                        </td>
                        <td>
                            <select class="input-selection" name="pregunta12" id="">
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="label" for="">¿Tienes prácticas sexuales poco convencionales (por ejemplo: exhibicionismo, voyerismo, sadomasoquismo, fetichismo, etc.? </label>
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
