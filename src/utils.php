<?php

/** Genera una tabla HTML a partir de un CSV: cada fila <tr>, cada valor en <td> (guion). */
function muestra_tabla(string $fichero): string
{
    $fh = fopen($fichero, 'r');
    if ($fh === false) {
        return '';
    }

    $html = '<table class="tabla-asignaturas"><tbody>';

    while (($fila = fgetcsv($fh)) !== false) {
        $hayContenido = false;
        foreach ($fila as $celda) {
            if (trim((string) $celda) !== '') {
                $hayContenido = true;
                break;
            }
        }
        if (!$hayContenido) {
            continue;
        }

        $html .= '<tr>';
        foreach ($fila as $celda) {
            $html .= '<td>' . htmlspecialchars((string) $celda, ENT_QUOTES, 'UTF-8') . '</td>';
        }
        $html .= '</tr>';
    }

    $html .= '</tbody></table>';
    fclose($fh);

    return $html;
}
