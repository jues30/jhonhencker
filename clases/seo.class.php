<?php
class Seo{
 var $titulo;
 var $meta;
 var $keywords;
 public function crear_seo_index() {
  $this->titulo = strip_tags(InterfazGeneral::AUTOR);
  $this->meta = strip_tags("Escritor de suspenso y terror Jhon Hencker. Literatura tenebrosa.");
  $this->keywords = strip_tags("literatura, terror, suspenso, miedo, jhon, hencker, tenebroso, arte, escritor, escritura, gotico, gótico, sangre, oscuro, escrito, cuento, novela, poemas, libros, libro, nocturno, psicológico, mejores, pdf");
 }
 function titulo_index() {
  $var = $this->titulo;
  return $var;
 }

 function meta_descripcion_index() {
  $var = $this->meta;
  return $var;
 }

 function keywords_index() {
  $var = $this->keywords;
  return $var;
 }
}
