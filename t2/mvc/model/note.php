<?php

class Note
{
    public $id;
    public $titulo;
    public $contenido;

    public function __construct($id, $titulo, $contenido)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->contenido = $contenido;
    }
}


class NoteTable
{
    private $table = 'note';
    private $conection;
    private array $notas = array();
    public function __construct()
    {
    }

    /*Set Conection*/
    public function getConection()
    {
        $dbObj = new db_connect();
        $this->conection = $dbObj->conection;
    }

    /*Get all notes*/
    public function getNotes()
    {
        $this->getConection();
        $sql = "SELECT * FROM " . $this->table;
        $result = $this->conection->query($sql);

        if ($result->num_rows > 0) {
            $i = 0;
            while ($row = $result->fetch_assoc()) {
                $this->notas[$i] = new Note($row['id'], $row['title'], $row['content']);
                $i++;
            }
        }
        return $this->notas;
    }


    // Método para inserta una nota.
    public function insertNote(string $title, string $content)
    {

        $this->getConection(); // Inicializa la conexión.
        $sql = "INSERT INTO " . $this->table . " (title, content) VALUES ('$title', '$content')"; // Consulta.

        if ($this->conection->query($sql) === TRUE) { // Si se inserta correctamente.

            $id = $this->conection->insert_id; // Recoge el último id generado en la tabla.
            $this->conection->close(); // Cierra la conexión.
            return new Note($id, $title, $content); // Devuelve un objeto nota con el último id generado en la bbdd y los atributos dados por el usuario.
        } else { // Si no se inserta.

            $this->conection->close(); // Cierra la conexión.
            return false; // Devuelve false.
        }
    }
}
