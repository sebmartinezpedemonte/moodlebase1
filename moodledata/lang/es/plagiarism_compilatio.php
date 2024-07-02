<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'plagiarism_compilatio', language 'es', version '4.1'.
 *
 * @package     plagiarism_compilatio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_report'] = 'Acceder al informe';
$string['activate_compilatio'] = 'Activar el plugin Compilatio';
$string['activate_submissiondraft'] = 'Para permitir que los alumnos analicen sus borradores, debe activar la opción <b>{$a}</b> en la sección';
$string['activated'] = 'Permitir la detección de textos sospechosos con Compilatio';
$string['activities_statistics'] = 'Estadísticas por actividad';
$string['activity'] = 'Actividad';
$string['admin_disabled_reports'] = 'El administrador no permite a los profesores mostrar los informes de análisis a los alumnos.';
$string['admin_goto_helpcenter'] = 'Visite el centro de ayuda Compilatio para acceder a los artículos relativos a la administración del plugin en Moodle.';
$string['ai_included_in_subscription'] = 'detección de texto escrito por IA</li></ul>';
$string['ai_not_included_in_subscription'] = 'Su suscripción no incluye la detección de texto IA.';
$string['ai_score_not_included'] = 'no incluido en su suscripción';
$string['aiscore'] = 'Textos potencialmente generados por la IA';
$string['aiscore_percentage'] = 'Porcentaje de texto potencialmente escrito por IA';
$string['analysed_docs'] = '{$a} documentos analizados';
$string['analysing_docs'] = '{$a} documentos en análisis';
$string['analysis_date'] = 'Fecha del análisis (sólo para el análisis programado)';
$string['analysis_started'] = '{$a} análisis solicitado(s).';
$string['analysistype'] = 'Análisis Inicio';
$string['analysistype_auto'] = 'Directo';
$string['analysistype_auto_help'] = '<p>Tienes tres opciones:
    <ul>
        <li><strong>Manual:</strong> El análisis de documentos debe iniciarse manualmente con el botón "Analizar" de cada documento o con el botón "Analizar todos los documentos".</li>
        <li><strong>Programado: </strong> Todos los documentos se analizan en la fecha/hora seleccionada.</li>
        <li><strong>Directo: </strong> Cada documento se analiza tan pronto como el estudiante lo envíe. Los documentos en la actividad no se compararán entre sí.</li>
    </ul>
    Para que todos los documentos sean comparados entre sí durante los análisis, espere hasta que todos los trabajos sean enviados por los estudiantes y luego inicie los análisis.</p>';
$string['analysistype_help'] = '<p>Tienes dos opciones:
    <ul>
        <li><strong>Manual:</strong> El análisis de documentos debe iniciarse manualmente con el botón "Analizar" de cada documento o con el botón "Analizar todos los documentos".</li>
        <li><strong>Programado: </strong> Todos los documentos se analizan en la fecha/hora seleccionada.</li>
    </ul>
    Para que todos los documentos sean comparados entre sí durante los análisis, espera hasta que todos los trabajos sean enviados por los estudiantes y luego inicia los análisis.</p>';
$string['analysistype_manual'] = 'Manual';
$string['analysistype_prog'] = 'Programada';
$string['api_key_not_tested'] = 'Tu clave API no ha sido verificada porque la conexión a Compilatio ha fallado.';
$string['api_key_not_valid'] = 'Tu clave API no es válida. Es específica para la plataforma utilizada. Puedes obtener una contactando a (ent@compilatio.net).';
$string['api_key_valid'] = 'La clave API registrada es válida.';
$string['apikey'] = 'Clave API';
$string['apikey_help'] = 'Código personal proporcionado por Compilatio para acceder a la API';
$string['auto_diagnosis_title'] = 'Auto-diagnóstico';
$string['average'] = 'Media';
$string['btn_analysing'] = 'Análisis en progreso';
$string['btn_error_analysis_failed'] = 'Análisis fallido';
$string['btn_error_not_found'] = 'Documento no encontrado';
$string['btn_error_sending_failed'] = 'Envío fallido';
$string['btn_error_too_large'] = 'Archivo demasiado grande';
$string['btn_error_too_long'] = 'Documento demasiado largo';
$string['btn_error_too_short'] = 'Documento demasiado corto';
$string['btn_error_unsupported'] = 'Archivo no compatible';
$string['btn_planned'] = 'Análisis planificado';
$string['btn_queue'] = 'En la cola';
$string['btn_sent'] = 'Analizar';
$string['btn_unsent'] = 'Enviar';
$string['certificate'] = 'Certificado de análisis';
$string['compilatio'] = 'Plugin de detección de plagio Compilatio';
$string['compilatio:enable'] = 'Autorizar al profesor para activar/desactivar Compilatio en una actividad';
$string['compilatio:triggeranalysis'] = 'Autorizar al profesor para activar el análisis manualmente';
$string['compilatio:viewreport'] = 'Autorizar al profesor para consultar el informe completo desde Compilatio';
$string['compilatio_depositor'] = 'El documento en la actividad <b>{$a->modulename}</b> fue enviado por el usuario de Moodle <b>{$a->lastname} {$a->firstname}</b>.';
$string['compilatio_help_assign'] = 'Obtener ayuda sobre el plugin Compilatio';
$string['compilatio_iddocument'] = 'Identificador del documento';
$string['compilatio_search'] = 'Buscar';
$string['compilatio_search_help'] = 'Puedes encontrar el depositante de un documento recuperando el identificador del documento de las fuentes del informe de análisis.';
$string['compilatio_search_notfound'] = 'No se ha encontrado ningún documento para este identificador entre los documentos cargados en su plataforma Moodle.';
$string['compilatio_search_tab'] = 'Encontrar el depositante de un documento.';
$string['compilatiodefaults'] = 'Valores predeterminados para Compilatio';
$string['compilatioexplain'] = 'Para obtener información adicional sobre este plugin vea: <a href="http://compilatio.net" target="_blank">compilatio.net</a>';
$string['cron_check'] = 'El complemento de tareas programadas "send_files" se ha ejecutado por última vez en {$a}.';
$string['cron_check_never_called'] = 'El complemento de tareas programadas send_files nunca ha sido ejecutado desde la activación del complemento. Puede que esté mal configurado en tu servidor.';
$string['cron_check_not_ok'] = 'El complemento de tareas programadas send_files no ha sido ejecutado en la última hora.';
$string['cron_frequency'] = 'Parece que se ejecuta cada {$a} minutos.';
$string['cron_recommandation'] = 'Para las tareas programadas del complemento Compilatio, recomendamos utilizar un intervalo de tiempo inferior a 15 minutos entre cada ejecución.';
$string['defaultindexing'] = 'Agregar documentos a la base de datos de documentos.';
$string['defaultindexing_help'] = 'Sí: Agregar documentos en la base de datos de documentos. Estos documentos se utilizarán como material de comparación para análisis futuros.
No: Los documentos no se agregan en la base de datos de documentos y no se utilizarán para comparaciones.';
$string['defaults_desc'] = 'Los parámetros siguientes son utilizados como valores por defecto en las actividades de Moodle que integran Compilatio.';
$string['defaultupdated'] = 'Los valores predeterminados han sido actualizados';
$string['detailed'] = 'Informe detallado';
$string['detailed_error_analysis_failed'] = 'El análisis de estos documentos no se realizó correctamente. Puedes restablecer estos documentos.';
$string['detailed_error_not_found'] = 'Estos documentos no se encontraron. Por favor, contacta a tu administrador de Moodle. Error: documento no encontrado para esta clave API.';
$string['detailed_error_sending_failed'] = 'Estos documentos no pudieron ser enviados a Compilatio. Puedes reenviar estos documentos.';
$string['detailed_error_too_large'] = 'Estos documentos no pudieron ser analizados por Compilatio porque son demasiado grandes (Tamaño máximo: {$a} MB).';
$string['detailed_error_too_long'] = 'Estos documentos no pudieron ser analizados por Compilatio porque contenían demasiadas palabras (Tamaño máximo: {$a} palabras).';
$string['detailed_error_too_short'] = 'Estos documentos no pudieron ser analizados por Compilatio porque no contenían suficientes palabras (Tamaño mínimo: {$a} palabras).';
$string['detailed_error_unsupported'] = 'Estos documentos no pudieron ser analizados por Compilatio porque su formato no es compatible.';
$string['disable_ssl_verification'] = 'Ignore la verificación del certificado SSL.';
$string['disable_ssl_verification_help'] = 'Active esta opción si tiene problemas para verificar los certificados SSL o si experimenta errores al enviar archivos a Compilatio.';
$string['disclaimer_data'] = 'Con la activación de Compilatio, acepta que información relativa a la configuración de su plataforma Moodle sea recogida con el fin de facilitar el soporte y mantenimiento del servicio.';
$string['display_notifications'] = 'Mostrar las notificaciones';
$string['display_settings_frame'] = 'Visualización de los parámetros de los resultados';
$string['display_stats'] = 'Mostrar estadísticas sobre esta actividad';
$string['display_stats_per_student'] = 'Mostrar estadísticas por estudiante sobre esta actividad.';
$string['document_deleting'] = 'Borrado de documentos';
$string['document_sent'] = '{$a} documentos enviados.';
$string['documents_number'] = 'Los documentos analizados';
$string['download_report_failed'] = 'Se produjo un error al descargar el informe de análisis.';
$string['element_included_in_subscription'] = 'Tu suscripción incluye: <ul><li>Detección de similitud</li><li>Detección de textos alterados';
$string['enable_activities_title'] = 'Habilitar Compilatio para las actividades';
$string['enable_analyses_auto'] = 'Posibilidad de iniciar los análisis directamente';
$string['enable_analyses_auto_help'] = 'Esta opción permitirá a los profesores activar el lanzamiento automático del análisis de documentos en una actividad (es decir, inmediatamente después de que hayan sido enviados). <br>
Ten en cuenta que en este caso:

<ul>
    <li>El número de análisis realizados por tu institución puede ser significativamente mayor.</li>
    <li>Los documentos de los primeros que envían no se comparan con los documentos de los últimos depositantes.</li>
</ul>
Para comparar todos los documentos de una tarea, es necesario utilizar el análisis "programado", eligiendo una fecha posterior a la fecha límite de entrega.';
$string['enable_mod_assign'] = 'Tareas';
$string['enable_mod_forum'] = 'Foros';
$string['enable_mod_quiz'] = 'Cuestionario';
$string['enable_mod_workshop'] = 'Talleres';
$string['enable_search_tab'] = 'Herramienta de búsqueda para identificar al autor de un documento.';
$string['enable_search_tab_help'] = 'La herramienta de búsqueda te permite buscar el nombre y apellido de un estudiante basado en un identificador de documento visible en los informes de análisis entre todos los documentos presentes en tu plataforma.';
$string['enable_show_reports'] = 'Posibilidad de mostrar informes de análisis a los estudiantes.';
$string['enable_student_analyses'] = 'Posibilidad de habilitar el análisis de estudiantes en borradores.';
$string['enable_student_analyses_help'] = 'Esta opción permitirá a los profesores activar en una actividad el análisis por parte de los estudiantes de sus documentos enviados en modo borrador con Compilatio Magister, antes de la entrega final al profesor.';
$string['enabledandworking'] = 'El plugin Compilatio está activado y funcionando.';
$string['errors'] = 'Errores';
$string['excluded_from_score'] = 'Excluido de la puntuación:';
$string['export_csv'] = 'Exportar datos sobre esta actividad a un fichero CSV';
$string['export_csv_per_student'] = 'Exportar los resultados de este estudiante a un archivo CSV';
$string['export_global_csv'] = 'Haga clic aquí para exportar estos datos en formato CSV';
$string['export_raw_csv'] = 'Haga clic aquí para exportar los datos brutos en formato CSV';
$string['extraction_in_progress'] = 'extracción de documentos en curso, por favor inténtelo más tarde';
$string['failedanalysis'] = 'Compilatio no ha podido analizar su documento:';
$string['file'] = 'Archivo';
$string['filename'] = 'Nombre del fichero';
$string['firstname'] = 'Nombre';
$string['get_scores'] = 'Recuperar puntuaciones de plagio de Compilatio.';
$string['global_statistics'] = 'Estadísticas globales';
$string['global_statistics_description'] = 'Todos los datos de los documentos se envían a Compilatio.';
$string['globalscore'] = 'Total';
$string['goto_compilatio_service_status'] = 'Ver estado de los servicios de Compilatio.';
$string['green_threshold'] = 'Verde hasta';
$string['help_compilatio_format_content'] = 'Compilatio maneja la mayoría de los formatos utilizados en procesadores de texto y en internet. Los siguientes formatos son compatibles:';
$string['helpcenter'] = 'Acceda al Centro de Ayuda de Compilatio para el uso del plugin de Compilatio en Moodle.';
$string['helpcenter_error'] = 'No podemos conectarte automáticamente al centro de ayuda. Por favor, inténtalo más tarde o ve directamente a través del siguiente enlace:';
$string['immediately'] = 'Inmediatamente';
$string['include_percentage_in_suspect_text'] = 'Incluir en el porcentaje de textos sospechosos mostrados :';
$string['indexed_document'] = 'Documento añadido a la base de datos de documentos de tu institución. Su contenido puede ser utilizado para detectar similitudes con otros documentos.';
$string['info_cm_activated'] = 'Los documentos enviados en esta actividad se suben a la cuenta de Compilatio {$a}. Todos los profesores inscritos en este curso pueden utilizar Compilatio en esta actividad.';
$string['info_cm_activation'] = 'Al activar Compilatio en esta actividad, los documentos enviados se cargarán en tu cuenta de Compilatio {$a}. Todos los profesores inscritos en este curso podrán utilizar Compilatio en esta actividad.';
$string['keep_docs_indexed'] = 'Conserve los documentos en la biblioteca de referencia';
$string['keep_docs_indexed_help'] = 'Al eliminar un curso, restablecer un curso o eliminar una actividad, puede elegir eliminar definitivamente los documentos enviados a Compilatio o conservarlos en la biblioteca de referencias (sólo se conservará el texto, que se utilizará como material de comparación en sus próximos análisis).';
$string['lastname'] = 'Apellido';
$string['manual_analysis'] = 'El análisis de este documento debe ser activado manualmente.';
$string['max_file_size'] = 'Los archivos no deben exceder <strong>{$a} MB</strong>.';
$string['maximum'] = 'Tasa máxima';
$string['minimum'] = 'Tasa mínima';
$string['next_student'] = 'Próximo estudiante';
$string['no_document_analysed'] = 'No hay documentos analizados';
$string['no_document_available_for_analysis'] = 'Ningún documento estaba disponible para el análisis.';
$string['no_document_to_display'] = 'No hay documentos que mostrar';
$string['no_notification'] = 'Sin notificación';
$string['no_statistics_yet'] = 'Todavía no se han analizado documentos.';
$string['no_students_finished_quiz'] = 'Ningún estudiante completó la prueba.';
$string['not_analysed'] = 'no analizado';
$string['not_analyzed'] = 'Los siguientes documentos no pudieron ser analizados:';
$string['not_analyzed_extracting'] = 'Los siguientes documentos no pueden ser analizados porque están siendo extraídos. Por favor, inténtalo de nuevo más tarde.';
$string['not_indexed_document'] = 'El documento no se añadió a la base de datos de documentos de tu institución. Su contenido no se utilizará para detectar similitudes con otros documentos.';
$string['not_sent'] = 'No se han podido enviar los siguientes documentos:';
$string['notifications'] = 'Notificaciones';
$string['numeric_threshold'] = 'El umbral debe ser un número.';
$string['open'] = 'Abrir';
$string['orange_threshold'] = 'Naranja hasta';
$string['other_analysis_options'] = 'Otras opciones de análisis';
$string['owner_file'] = 'RGPD y propiedad de la tarea';
$string['owner_file_school'] = 'El centro es el propietario de las tareas';
$string['owner_file_school_details'] = 'Cuando un alumno solicite la eliminación de todos sus datos, los documentos e informes se conservarán y estarán disponibles para su futura comparación con otros documentos. Al finalizar el contrato con Compilatio, todos los datos personales de su centro, incluidos los documentos analizados, se eliminan dentro de los plazos contractuales.';
$string['owner_file_student'] = 'El alumno es el único propietario de su tarea';
$string['owner_file_student_details'] = 'En caso de solicitud de supresión de los datos personales de un alumno, sus tareas e informes se suprimirán de la plataforma Moodle y de la biblioteca de referencias Compilatio. Las tareas dejarán de estar disponibles para una comparación con nuevos documentos.';
$string['plugin_disabled'] = 'El plugin no está activado en la plataforma Moodle.';
$string['plugin_disabled_assign'] = 'El plugin no está activado para tareas.';
$string['plugin_disabled_forum'] = 'El plugin no está activado para foros.';
$string['plugin_disabled_quiz'] = 'El plugin no está habilitado para cuestionario.';
$string['plugin_disabled_workshop'] = 'El plugin no está activado para talleres.';
$string['plugin_enabled'] = 'El plugin está activado en la plataforma Moodle.';
$string['plugin_enabled_assign'] = 'El plugin está habilitado para tareas.';
$string['plugin_enabled_forum'] = 'El plugin está habilitado para foros.';
$string['plugin_enabled_quiz'] = 'El plugin está habilitado para cuestionario.';
$string['plugin_enabled_workshop'] = 'El plugin está habilitado para talleres.';
$string['pluginname'] = 'Plugin de detección de plagio Compilatio';
$string['previous_student'] = 'Estudiante anterior';
$string['privacy:metadata:core_files'] = 'Archivos almacenados o creados desde un campo de entrada de datos';
$string['privacy:metadata:core_plagiarism'] = 'Este plugin es operado por el subsistema de detección de plagio de Moodle';
$string['privacy:metadata:external_compilatio_document'] = 'Información y contenido de los documentos en la base de datos Compilatio';
$string['privacy:metadata:external_compilatio_document:authors'] = 'Nombre, apellidos y correo electrónico del usuario de Moodle (o miembros del grupo) que envió el archivo';
$string['privacy:metadata:external_compilatio_document:depositor'] = 'Nombre, apellidos y correo electrónico del usuario de Moodle que envió el archivo';
$string['privacy:metadata:external_compilatio_document:filename'] = 'Nombre del fichero enviado o nombre generado para el texto en línea';
$string['privacy:metadata:external_compilatio_user'] = 'Información sobre el profesor que creó un módulo de curso con Compilatio';
$string['privacy:metadata:external_compilatio_user:email'] = 'Correo electrónico del profesor';
$string['privacy:metadata:external_compilatio_user:firstname'] = 'Nombre del profesor';
$string['privacy:metadata:external_compilatio_user:lastname'] = 'Apellido del profesor';
$string['privacy:metadata:external_compilatio_user:username'] = 'Correo electrónico del profesor';
$string['privacy:metadata:plagiarism_compilatio_files'] = 'Información sobre los expedientes enviados a Compilatio';
$string['privacy:metadata:plagiarism_compilatio_files:filename'] = 'Nombre del fichero enviado o nombre generado para el texto en línea';
$string['privacy:metadata:plagiarism_compilatio_files:userid'] = 'ID de Moodle del usuario que realizó el envío';
$string['privacy:metadata:plagiarism_compilatio_user'] = 'Información sobre el profesor que creó un módulo de curso con Compilatio';
$string['privacy:metadata:plagiarism_compilatio_user:compilatioid'] = 'Compilatio ID del profesor';
$string['privacy:metadata:plagiarism_compilatio_user:userid'] = 'El ID de Moodle del profesor';
$string['programmed_analysis_future'] = 'Los documentos serán analizados por Compilatio en {$a}.';
$string['programmed_analysis_past'] = 'Los documentos se han enviado para su análisis a Compilatio en {$a}.';
$string['progress'] = 'Progreso';
$string['queuing_docs'] = '{$a} documento(s) esperando análisis';
$string['quiz_help'] = 'Solo se analizarán las preguntas de ensayo cuya respuesta contenga al menos {$a} palabras.';
$string['read_only_apikey'] = 'Tu clave API de solo lectura no permite subir ni analizar documentos.';
$string['red_threshold'] = 'de lo contrario rojo';
$string['redirect_report_failed'] = 'Se ha producido un error al recuperar el informe de análisis. Vuelva a intentarlo más tarde o póngase en contacto con el servicio de asistencia (support@compilatio.net) si el problema persiste.';
$string['reporttype'] = 'Informe disponible para los estudiantes';
$string['reporttype_help'] = '<p>Hay 2 opciones posibles:</p>
<ul>
    <li><strong>Certificado de análisis:</strong> El estudiante tendrá acceso al certificado de análisis de su documento.</li>
    <li><strong>Informe detallado:</strong> El estudiante tendrá acceso a la versión PDF del informe.</li>
</ul>';
$string['reset_docs_in_error'] = 'Restablecer documentos con errores';
$string['reset_docs_in_error_in_progress'] = 'Restablecimiento de documentos con errores en progreso';
$string['response_type'] = 'Tipo de respuesta';
$string['results'] = 'Resultados';
$string['results_by_student'] = 'Resultados por estudiante';
$string['saved_config_failed'] = '<strong>La combinación de clave API y dirección ingresada no es válida. Compilatio está desactivado, por favor inténtalo de nuevo.<br/>
La página de <a href="autodiagnosis.php">autodiagnóstico</a> puede ayudarte a configurar este complemento.</strong><br/>
Error:';
$string['score'] = 'Puntuación';
$string['score_settings_info'] = 'La actualización de las puntuaciones afectará a todos los documentos analizados de la tarea,<br> incluidos los modificados individualmente.';
$string['see_all_notifications'] = 'Ver todas las notificaciones';
$string['select_a_student'] = 'Seleccionar un estudiante';
$string['send_all_documents'] = 'Enviar todos los documentos';
$string['send_documents_in_progress'] = 'Envío de documentos en progreso';
$string['short_error_analysis_failed'] = 'análisis fallidos.';
$string['short_error_not_found'] = 'documentos no encontrados.';
$string['short_error_sending_failed'] = 'envío fallido.';
$string['short_error_too_large'] = 'Documentos demasiado grandes.';
$string['short_error_too_long'] = 'Documentos demasiado largos.';
$string['short_error_too_short'] = 'Documentos demasiado cortos.';
$string['short_error_unsupported'] = 'Documentos no compatibles.';
$string['showstudentreport'] = 'Mostrar el informe de análisis al alumno';
$string['showstudentreport_help'] = 'El informe de análisis proporciona un desglose de qué partes de la entrega fueron plagiadas y la ubicación de las fuentes detectadas.';
$string['showstudentscore'] = 'Mostrar al alumno la puntuación de los textos sospechosos';
$string['showstudentscore_help'] = 'La puntuación de textos sospechosos es el porcentaje del envío que potencialmente puede no ser auténtico.';
$string['showwhenclosed'] = 'Cuando la actividad esté cerrada';
$string['similarities'] = 'Textos sospechosos';
$string['similarities_disclaimer'] = 'Puede analizar textos sospechosos en los documentos de esta actividad con <a href=\'http://www.compilatio.net/es\' target=\'_blank\'>Compilatio</a>.<br/>
    Cuidado: los textos sospechosos medidos durante el análisis no significan necesariamente plagio. El informe de análisis le ayuda a identificar si los textos sospechosos corresponden a una cita adecuada o a un plagio.';
$string['similarity_percent'] = '% de textos sospechosos';
$string['simscore'] = 'Similitudes';
$string['simscore_percentage'] = 'Porcentaje de similitudes';
$string['start_all_analysis'] = 'Analizar todos los documentos';
$string['start_analysis_in_progress'] = 'Lanzamiento de los análisis en curso';
$string['start_selected_files_analysis'] = 'Analizar los documentos seleccionados';
$string['start_selected_questions_analysis'] = 'Analizar las preguntas seleccionadas';
$string['stats_avg'] = 'Media';
$string['stats_error_unknown'] = 'errores desconocidos';
$string['stats_errors'] = 'Errores';
$string['stats_max'] = 'Máximo';
$string['stats_min'] = 'Mínimo';
$string['stats_score'] = 'Porcentaje de textos sospechosos';
$string['stats_threshold'] = 'Número de documentos por umbral';
$string['student'] = 'Estudiante';
$string['student_analyse'] = 'El estudiante puede iniciar el análisis';
$string['student_help'] = 'Puedes analizar tu borrador con Compilatio Magister para medir similitudes en el texto de tus archivos. <br/>
El contenido de tu borrador no será utilizado por Compilatio como material de comparación para análisis futuros. <br/>
Sin embargo, tu profesor tendrá acceso a este informe de análisis.';
$string['studentanalyses'] = 'Permitir a los estudiantes analizar sus documentos.';
$string['studentanalyses_help'] = 'Esto permite a los estudiantes analizar sus archivos de borrador con Compilatio Magister antes de la entrega final al profesor.';
$string['studentdisclosuredefault'] = 'Todos los archivos cargados aquí se enviarán al servicio de detección de textos sospechosos Compilatio';
$string['students_disclosure'] = 'Mensaje de prevención para los estudiantes';
$string['students_disclosure_help'] = 'Este texto será visible para todos los estudiantes en la página de carga de ficheros.';
$string['subscription'] = '<b>Información sobre tu suscripción:</b>';
$string['subscription_analysis_count'] = 'Documentos analizados: {$a->usage} de {$a->value}';
$string['subscription_analysis_page_count'] = 'Páginas analizadas: {$a->usage} de {$a->value}';
$string['subscription_end'] = 'Fecha de finalización incluida:';
$string['subscription_start'] = 'Fecha de inicio:';
$string['suspect_words/total_words'] = 'Palabras sospechosas / total de palabras';
$string['suspect_words_quiz_on_total'] = 'Palabras sospechosas / <br>total de palabras';
$string['tabs_title_help'] = 'Ayuda';
$string['tabs_title_stats'] = 'Estadísticas';
$string['teacher'] = 'Profesor';
$string['teacher_features_title'] = 'Funciones habilitadas para los profesores';
$string['terms_of_service_info'] = '<a href=\'{$a}\'>Términos de Servicio</a> de Compilatio';
$string['text'] = 'Texto';
$string['thresholds_description'] = 'Indica el umbral que deseas utilizar para facilitar la búsqueda del informe de análisis (% de textos sospechosos):';
$string['thresholds_settings'] = 'Límites:';
$string['timesubmitted'] = 'Enviado a Compilatio el';
$string['title_analysing'] = 'Compilatio está analizando este archivo.';
$string['title_error_analysis_failed'] = 'El análisis de este documento no funcionó correctamente.';
$string['title_error_not_found'] = 'Este documento no se encontró. Por favor, contacta a tu administrador de Moodle. Error: documento no encontrado para esta clave API.';
$string['title_error_sending_failed'] = 'Se produjo un error al intentar enviar este archivo a Compilatio.';
$string['title_error_too_large'] = 'Este archivo es demasiado grande para que Compilatio lo procese. Tamaño máximo: {$a} MB';
$string['title_error_too_long'] = 'Este documento contiene demasiadas palabras para ser analizado. Tamaño máximo: {$a} palabras';
$string['title_error_too_short'] = 'This document doesn’t contain enough words for Compilatio to process. Minimum size : {$a} words';
$string['title_error_unsupported'] = 'Este tipo de archivo no es compatible con Compilatio';
$string['title_planned'] = 'Este archivo será procesado en {$a}';
$string['title_queue'] = 'El documento está ahora en cola y será analizado en breve por Compilatio';
$string['title_score'] = 'Análisis completado: {$a}% de textos sospechosos.';
$string['title_score_teacher'] = 'Si ha ignorado alguna fuente en el informe, haga clic aquí para actualizar la puntuación.';
$string['title_sent'] = 'Iniciar análisis';
$string['title_unsent'] = 'Enviar el documento a Compilatio';
$string['tooltip_detailed_scores'] = '% de textos sospechosos, incluyendo:';
$string['total'] = 'Total';
$string['trigger_analyses'] = 'Iniciar análisis de Compilatio';
$string['unmeasured'] = 'no medido';
$string['unsent_docs'] = 'Esta actividad contiene documentos no presentados a Compilatio.';
$string['update_meta'] = 'Realizar las operaciones programadas de Compilatio';
$string['utlscore'] = 'Idiomas no reconocidos';
$string['utlscore_percentage'] = 'Porcentaje de tipos de idiomas no reconocidos';
$string['webservice_not_ok'] = 'El servidor no pudo conectar con el servicio web. Puede que su cortafuegos esté bloqueando la conexión.';
$string['webservice_ok'] = 'El servidor puede conectar con el servicio web.';
$string['webservice_unreachable'] = 'Compilatio no está disponible actualmente. Pedimos disculpas por las molestias.';
$string['word'] = 'palabras';
$string['word_limits'] = 'Para poder ser analizado, un texto debe tener entre {$a->min} y {$a->max} palabras.';
$string['wrong_apikey_type'] = 'La clave API ingresada no es válida. Si has actualizado recientemente la versión de tu complemento Compilatio, contacta al soporte (support@compilatio.net) para obtener una nueva clave.';
