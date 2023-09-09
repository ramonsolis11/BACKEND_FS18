<?php

/**
 * EJERCICIO 2: Se ha creado un programa para exportar ciertos documentos en diferentes formatos pdf, json y texto
 * 
 * •	Identificar que principio SOLID se está violando.
 * •	Refactorizar la clase aplicando el principio SOLID que se está violando.
 */

// Interfaces para cada formato de exportación
interface PDFExportable {
    public function exportarPDF();
}

interface JSONExportable {
    public function exportarJSON();
}

interface TextExportable {
    public function exportarText();
}

// Clase BoletaPago que exporta en PDF
class BoletaPago implements PDFExportable {
    public function exportarPDF() {
        return "Su boleta de pago está en PDF";
    }
}

// Otra clase que exporta en JSON (si es necesario)
class InformeVentas implements JSONExportable {
    public function exportarJSON() {
        return "Su informe de ventas está en formato JSON";
    }
}

// Otra clase que exporta en texto (si es necesario)
class Notas implements TextExportable {
    public function exportarText() {
        return "Sus notas están en formato de texto";
    }
}

echo (new BoletaPago())->exportarPDF();

?>