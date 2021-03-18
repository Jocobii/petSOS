<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class UsersModel extends Model{
        protected $table="datos";
        protected $primaryKey="id";
        protected $returntype="array";
        protected $useSoftDelates=true;

        protected $allowedFields=["name","lastname","username","password","email","direccion","last_login"];
    }
?>