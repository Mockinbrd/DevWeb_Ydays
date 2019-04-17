<?php

class Categories
{


        public $id;
        public $name;


    /*
     * Categories constructor
     * @param $id
     */


        function __construct($id){

            global $db;

            $reqCategory = $db->prepare('SELECT * FROM categories WHERE id = ?');
            $reqCategory->execute([$id]);
            $data = $reqCategory->fetch();

            $this->id = $id;
            $this->firstname = $data['name'];
        }

    /*
     * Envoi de toute les catégories
     * @return array
     *
     */

        static function getAllCategories() {

            global $db;

            $reqCategories = $db->prepare('SELECT * FROM categories');
            $reqCategories->execute([]);
            return $reqCategories->fetchAll();
        }

}