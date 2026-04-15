<?php

/** Genera una tabla HTML a partir de un CSV (1ª fila: cabecera con <th>, resto: <td>). */
function muestra_tabla(string $fichero): string
{
    $fh = fopen($fichero, 'r');
    if ($fh === false) {
        return '';
    }

    $html = '<table class="tabla-asignaturas">';
    $esPrimeraFila = true;

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

        if ($esPrimeraFila) {
            $html .= '<thead><tr>';
            foreach ($fila as $celda) {
                $html .= '<th>' . htmlspecialchars((string) $celda, ENT_QUOTES, 'UTF-8') . '</th>';
            }
            $html .= '</tr></thead><tbody>';
            $esPrimeraFila = false;
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
