<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/dirs.php';
$titulo = 'POO.php';
include_once TEMPLATES_PATH . 'header.php';
#CLASE:
#Una clase es un modelo que se utiliza para crear objetos que comparten un mismo comportamiento, estado e identidad.

class Automovil
{
    #PROPIEDADES:
    #Son las caracteristicas que puede tener un objeto.

    #las propiedades publicas pueden ser accedidas desde cualquier parte sin ningun tipo de restriccion.
    #las propiedades privadas solo pueden ser ejeutadas dentro de la clase.
    public $marca;
    public $modelo;

    #METODO
    #es el algoritmo asociado a un objeto que indica la capacidad de lo que este puede hacer.
    #(es una funcion que hace tareas con las propiedades que le estoy asignando a la clase)
    #la unica diferencia entre metodo y funcion es llamamos metodo a las funciones de una clase (en la POO),
    #mientras que llamamos funciones, a los algoritmos de la programacion estructurada.
    public function mostrar()
    {
        echo "<p>Hola! soy un $this->marca, modelo $this->modelo</p>";
    }
}

#OBJETO
#Una entidad provista de metodos o mensajes a los cuales reponde propiedades con valores concretos

$a = new Automovil();
$a->marca = 'Toyota';
$a->modelo = 'Corolla';
$a->mostrar();

$b = new Automovil();
$b->marca = 'Hyundai';
$b->modelo = 'Accent Vission';
$b->mostrar();

$c = new Automovil();
$c->marca = 'Mazda';
$c->modelo = '2';
$c->mostrar();

#Principios de la POO que se cumplen en este ejemplo:

#ABSTRACCION: Nuevos tipos de datos(el que tu quieras, tu lo creas
#ENCAPSULAMIENTO: Organizar el codigo en grupos logicos
#OCULTAMIENTO: Ocultar detales de implementacion y exponer solo los detalles que sean necesarios para el resto del sistema.

include_once TEMPLATES_PATH . 'boton_back.php';
include_once TEMPLATES_PATH . 'footer.php';
